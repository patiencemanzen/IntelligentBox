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
        public function updateExtraInfo($local,$ipAddress);
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
        // =================================================================================================================================
        public function updateExtraInfo($location,$ip_address){
            $updateInfo = "UPDATE user_auto_detection SET location='$location',ip_address='$ip_address' WHERE email='$this->CurrentEmail'";
            $executeUpdates = mysqli_query($this->Frequency(),$updateInfo);
        }

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
            $created_on = date("d/m/Y");

            // upload image
            // =============================================================
            $setDefault = "INSERT INTO user_profile_background_image VALUE ('','$identity','$this->CurrentEmail','default.jpg','on','$created_on')";
            $executeProfile = mysqli_query($this->Frequency(),$setDefault);
        }
    }
    
    // INITIALIZE FORM VALIABLES
    // =========================================================
    $oldtitle = $_POST['choosen_class'];
    $currentE = $_POST['Email'];

    // PLATFORM INFORMATION
    // ==========================================================
    
    // user ip address
    function get_client_ip(){
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        } else if (isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        } else {
            $ipaddress = 'UNKNOWN';
        }

        return $ipaddress;
    }

    $PublicIP = get_client_ip();

    // IMPLEMENT CLASS MONARCH
    $newMonarch = new Monarch($oldtitle,$currentE);
    if($newMonarch->updateCurrentInfo()){
        $newMonarch->updateBackgroundImage();
        $newMonarch->updateExtraInfo($fullLocation,$PublicIP);
        $newMonarch->session_setup($currentE);
    }else{        
        header("Location: index.php?updateDatabaseFail");
        exit();
    }
?>