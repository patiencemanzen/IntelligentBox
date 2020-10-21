<?php 
    // INITIALIZE SESSION
    // ======================================================================================================================
    session_start();
    // ======================================================================================================================
    
    // INITIALIZE DATABASE CONNECTION
    // ==============================================================================================================
    require_once ("Scyllar.php");
    // ==============================================================================================================

    // INITIALIZE INTERFACE
    // ==============================================================================================================
    interface ScyllarNavigator {
        public function updateCurrentInfo ();
        public function updateBackgroundImage();
        public function session_setup($email);
    }
    // ==================================================================================================================

    // INITIALIZE CLASS CALLED MONARCH
    // ========================================================================================================================
    class Monarch extends Scyllar implements ScyllarNavigator {
        private $NewTitle;
        private $CurrentEmail;

        // MAKE CONSTRUCTER
        // ========================================================
        public function __construct($oldTitle,$currentmail){
            $this->NewTitle = $oldTitle;
            $this->CurrentEmail = $currentmail;
        }

        // UPDATE TITLE OF THIS USER
        // =============================================================
        public function updateCurrentInfo(){
            $updateTitle = "UPDATE intelligent_users SET title='$this->NewTitle',Verified='complete' WHERE email='$this->CurrentEmail'";
            $executeTitle = mysqli_query($this->Frequency(),$updateTitle);
            if(!$executeTitle){
                return false;
            }else {return true;}
        }

        // UPDATE EXTRA INFORMATION
        // ================================================================================================================================
        public function session_setup($mail){
            $selectCurrentInfo = "SELECT * FROM intelligent_users WHERE email='$mail'";
            $executeCurrentInfo = mysqli_query($this->Frequency(),$selectCurrentInfo);
            if(mysqli_num_rows($executeCurrentInfo) > 0){
                $rows = mysqli_fetch_assoc($executeCurrentInfo);

                //    initialize varibles for sessions    
                $identity = $rows['identity'];
                $firstname = $rows['firstName'];
                $lastname = $rows['lastName'];
                $email = $rows['email'];
                $user_title = $rows['title'];

                //  setup session and navigate user to profile page
                $_SESSION['identity'] = $identity;
                $_SESSION['Firstname'] = $firstname;
                $_SESSION['Lastname'] = $lastname;
                $_SESSION['Email'] = $email;
                $_SESSION['title'] = $user_title;
                
                //  then navigate user to profile page 
                header("Location: Profile/profile.php");  
                exit();
            }else{ 
                header("Location: index.php?emailMissed");
                exit();
            }
        }

        // UPDATE BACKGROUND IMAGE SET TO DEFAULT
        // ==========================================================================================================================================================
        public function updateBackgroundImage(){
            // fetch basic info 
            // =========================================================
            $selectIdentity = "SELECT identity FROM intelligent_users WHERE email='$this->CurrentEmail'";
            $execute_identity = mysqli_query($this->Frequency(),$selectIdentity);
            $fetchIdentity = mysqli_fetch_assoc($execute_identity);
                $identity = $fetchIdentity['identity'];
                $created_on = Date("Y-m-d h:m:s");

            // upload image
            // =============================================================
            $setDefault = "INSERT INTO user_profile_background_image VALUE ('','$identity','$this->CurrentEmail','user-default-background.png','on','$created_on')";
            $executeProfile = mysqli_query($this->Frequency(),$setDefault);
        }
    }
    
    // INITIALIZE FORM VALIABLES
    // =========================================================
    $oldtitle = $_POST['choosen_class'];
    $currentE = $_POST['Email'];

    // IMPLEMENT CLASS MONARCH
    $newMonarch = new Monarch($oldtitle,$currentE);
    if($newMonarch->updateCurrentInfo()){
        $newMonarch->updateBackgroundImage();
        $newMonarch->session_setup($currentE);
    }else{        
        header("Location: index.php?updateDatabaseFail");
        exit();
    }
?>