<?php
    //  INITIALIZE DATABASE CONNECTION
    // =============================================================================================
    require_once ("Scyllar.php");
    // =============================================================================================

    // INITIALIZE AND CONFIGURE INTERFACE
    interface Astronuts {
        public function registeAstro ();
    }

    // INITIALIZE AND IMPLEMENTS CLASS CALLED UNIVARSE
    // =============================================================================================
    class Univarse extends Scyllar  implements Astronuts {
        private $followingEmail;
        private $followerEmail;
        private $Title;
        private $tableSelected;
        private $infoTable;

        // initialze constructer
        // ==============================================================================================
        public function __construct($following,$follower,$table,$info){
            $this->followingEmail = $following;
            $this->followerEmail = $follower;
            $this->tableSelected = $table;
            $this->infoTable = $info;
        }

        // registe user in friend table
        // ===============================================================================================
        public function registeAstro(){
            // initialze date created on
            $createdOn = date("d/m/Y");

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
                    $insert_notification = "INSERT INTO notifications VALUES ('','$this->followerEmail','$this->followingEmail','','$notification','follow','0','new','on','$date_created')";
                    $execute_notification = mysqli_query($this->Frequency(), $insert_notification);
                }
                
            $saveFriends = "INSERT INTO $this->tableSelected VALUE ('','$getfolloweIdentity','$this->followerEmail','$getTitleFollower','$getIdentity','$this->followingEmail','$getTitle','$createdOn')";
            $executeSaving = mysqli_query($this->Frequency(),$saveFriends);
            if($executeSaving){
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
    $tableSelectedObject = "user_follow_board";
    $tableInformationObject = "intelligent_users";

    // IMPLEMENT CLASS 
    // ======================================================================================================================================================================================
    // ==============================================================================================================================================================================================
    $newUnivarse = new Univarse($followingClass,$followClass,$tableSelectedObject,$tableInformationObject);
    if($newUnivarse->registeAstro()){
        $response = "User followed";
    }else{
        $response = "fail to follow";
    }

    exit(json_encode($response));
?>