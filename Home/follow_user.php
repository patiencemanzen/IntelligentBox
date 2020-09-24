<!-- 
	//////////////////////////////////////////////////////

    INTELLIGENT BOX
    DESIGNED & DEVELOPED by Manirabona Patience
    
    author: Mnirabona Patience,
    Email:  Hseal419@gmail.com,
    location: Kigali,Rwanda,
    pro: Intelligent Box E-learning,
    version: 1.0.0
    
	//////////////////////////////////////////////////////
-->
<?php
    //  INITIALIZE DATABASE CONNECTION
    // =============================================================================================
    // =============================================================================================
    require_once ("../Scyllar.php");
    // =============================================================================================

    // INITIALIZE AND CONFIGURE INTERFACE
    interface Astronuts {
        public function registeAstro ();
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
                    $insert_notification = "INSERT INTO notifications VALUES ('','$this->followerEmail','$this->followingEmail','nolink','$notification','follow','0','new','on','$date_created')";
                    $execute_notification = mysqli_query($this->Frequency(), $insert_notification);
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