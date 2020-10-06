<?php

    // INITIALIZE PHP MAILER
    // ===========================================================================================================
    use PHPMailer\PHPMailer\PHPMailer;
    // =========================================================================================================== 

    // IMPORT PHPMAILER FILE
    // ==========================================================================================================
    require_once "../PHPMailer/PHPMailer.php";
    require_once "../PHPMailer/SMTP.php";
    require_once "../PHPMailer/Exception.php";
    // ===========================================================================================================

    //  INITIALIZE DATABASE CONNECTION
    // =============================================================================================
    require_once ("../Scyllar.php");
    // =============================================================================================

    // INITIALIZE AND CONFIGURE INTERFACE
    interface Astronuts {
        public function registeAstro ();
        public function timeAgo($time_ago);
    }


    // INITIALIZE AND IMPLEMENTS CLASS CALLED UNIVARSE
    // =============================================================================================
    // =============================================================================================
    class Univarse extends Scyllar  implements Astronuts {
        private $followingEmail;
        private $followerEmail;
        private $Title;
        private $infoTable;

        // initialze constructer
        // ==============================================================================================
        public function __construct($following,$follower,$info){
            $this->followingEmail = $following;
            $this->followerEmail = $follower;
            $this->infoTable = $info;
        }

        public function timeAgo($time_ago){
            $time_ago = strtotime($time_ago);
            $cur_time   = time();
            $time_elapsed   = $cur_time - $time_ago;
            $seconds    = $time_elapsed ;
            $minutes    = round($time_elapsed / 60 );
            $hours      = round($time_elapsed / 3600);
            $days       = round($time_elapsed / 86400 );
            $weeks      = round($time_elapsed / 604800);
            $months     = round($time_elapsed / 2600640 );
            $years      = round($time_elapsed / 31207680 );
            // Seconds
            if($seconds <= 60){
                return "just now";
            }
            //Minutes
            else if($minutes <=60){
                if($minutes==1){
                    return "one minute ago";
                }
                else{
                    return "$minutes minutes ago";
                }
            }
            //Hours
            else if($hours <=24){
                if($hours==1){
                    return "an hour ago";
                }else{
                    return "$hours hrs ago";
                }
            }
            //Days
            else if($days <= 7){
                if($days==1){
                    return "yesterday";
                }else{
                    return "$days days ago";
                }
            }
            //Weeks
            else if($weeks <= 4.3){
                if($weeks==1){
                    return "a week ago";
                }else{
                    return "$weeks weeks ago";
                }
            }
            //Months
            else if($months <=12){
                if($months==1){
                    return "a month ago";
                }else{
                    return "$months months ago";
                }
            }
            //Years
            else{
                if($years==1){
                    return "one year ago";
                }else{
                    return "$years years ago";
                }
            }
        }

        // registe user in friend table
        // ===============================================================================================
        public function registeAstro(){
            // initialze date created on
            $createdOn = date("Y-m-d h:m:s");

            // select user following identity
            $selectidentityfollowing = "SELECT * FROM $this->infoTable WHERE email='$this->followingEmail'";
            $executeIdentity = mysqli_query($this->Frequency(),$selectidentityfollowing);
            $fetchIdentity = mysqli_fetch_assoc($executeIdentity);
                $getIdentity = $fetchIdentity['identity'];
                $getTitle = $fetchIdentity['title'];

            // select follower identity
            $selectfollower = "SELECT * FROM $this->infoTable WHERE email='$this->followerEmail'";
            $executeFollower = mysqli_query($this->Frequency(),$selectfollower);
            $fetchFollower = mysqli_fetch_assoc($executeFollower);
                $getfolloweIdentity = $fetchFollower['identity'];
                $getTitleFollower = $fetchFollower['title'];

            // insert notification
            $select_following_notification = "SELECT * FROM notification_settings WHERE email='$this->followingEmail'";
            $execute_following_notofication = mysqli_query($this->Frequency(), $select_following_notification);
            $fetch_notification = mysqli_fetch_assoc($execute_following_notofication);
                $status_noti = $fetch_notification['follow_board'];
                $status_email = $fetch_notification['noti_email'];
                if($status_noti == "Off"){

                }else{
                    $selectfollower = "SELECT * FROM $this->infoTable WHERE email='$this->followerEmail'";
                    $executeFollower = mysqli_query($this->Frequency(),$selectfollower);
                    $fetchFollower = mysqli_fetch_assoc($executeFollower);
                        $getFirstname = $fetchFollower['firstName'];
                        $getLastname = $fetchFollower['lastName'];
    
                    // insert notification
                    // ===========================
                    $notification = "{$getFirstname} {$getLastname} Stated following you";
                    $date_created = Date("Y-m-d h:m:s");
                    $insert_notification = "INSERT INTO notifications VALUES ('','$this->followerEmail','$this->followingEmail','','$notification','follow','0','new','on','$date_created')";
                    $execute_notification = mysqli_query($this->Frequency(), $insert_notification);
                } 
                
                if($status_email == "On"){
                    $subject = "New followes/connection";
                    $sender = "users@intelligentbox.rw";
                    $sender_name = "Intelligent box";
        
                    $RequestCode = "SELECT * FROM intelligent_users WHERE email='$this->followerEmail'";
                    $executeCode = mysqli_query($this->Frequency(),$RequestCode);
                    $code = mysqli_fetch_assoc($executeCode);
                        $name = $code['firstName'];
                        $lastname = $code['lastName'];

                    $selectfollower = "SELECT * FROM $this->infoTable WHERE email='$this->followingEmail'";
                    $executeFollower = mysqli_query($this->Frequency(),$selectfollower);
                    $fetchFollower = mysqli_fetch_assoc($executeFollower);
                        $getFirstname = $fetchFollower['firstName'];
                        $getLastname = $fetchFollower['lastName'];
        
                    $body =  "Hello <b>{$getFirstname} {$getLastname}</b>, {$name} {$lastname} Started following you in <b>{$this->timeAgo($createdOn)}</b>"; 
        
                    $mail = new PHPMailer();
        
                    // SMTP settings
                    $mail->isSMTP();
                    $mail->Host = "mail.intelligentbox.rw";
                    $mail->SMTPAuth = true;
                    $mail->Username = "users@intelligentbox.rw";  // current password 'Homo_sapience@intelligentbox'
                    $mail->Password = 'IntelligentBoxUsers';
                    $mail->Port = 465;    //587
                    $mail->SMTPSecure = "ssl";   // tls
                    
                    // Email settings
                    $mail->isHTML(true);       
                    $mail->setFrom($sender, $sender_name);      // specify who sending email (sender)
                    $mail->addAddress($this->followingEmail);    // specify where email sended (reciever)
                    $mail->Subject = $subject;
                    $mail->Body = $body;
                    $mail->send();
                }else{

                }
        
            //  INSERT USER AS FOLLOWERS
            // =================================================================================================
            $insert_followers = "INSERT INTO user_follow_board VALUE ('','$getfolloweIdentity','$this->followerEmail','$getTitleFollower','$getIdentity','$this->followingEmail','$getTitle','$createdOn')";
            $execute_followers = mysqli_query($this->Frequency(), $insert_followers);
            
            if($execute_followers){
                return true;
            }else{
                return false;
            }
        }
    }

    // RECIEVE INFO FROM JAVASCRIPT INPUT
    // ============================================================================================================================================================================================
    // ============================================================================================================================================================================================
    $followingClass = $_POST['followingEmail'];
    $followClass = $_POST['followersEmail'];
    // $tableSelectedObject = "user_friends_connection";
    $tableInformationObject = "intelligent_users";

    // IMPLEMENT CLASS 
    // ======================================================================================================================================================================================
    // ==============================================================================================================================================================================================
    $newUnivarse = new Univarse($followingClass,$followClass,$tableInformationObject);
    if($newUnivarse->registeAstro()){
        $response = "User followed";
    }else{
        $response = "fail to follow";
    }

    // exit(json_encode($response));
?>