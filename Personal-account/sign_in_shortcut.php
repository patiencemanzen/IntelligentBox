<?php
    //  INITIALIZE DATABASE CONNECTION
    // =================================================================================================
    require_once ("../Scyllar.php");
    // =================================================================================================

    // INITIALIZE SESSION
    // ================================================================================================
    session_start();
    // ==================================================================================================

    // INITIALZE AND CONFIGURE INTERFACE
    // ==================================================================================================
    interface worldGate {
        public function check_user_exist ();
        public function set_up_cookies ();
        public function update_login_session ();
        public function setup_session_redirect();
        
    }
    // =====================================================================================================

    // INITIALIZE AND CONFIGURE  CLASS CALLED HOMOSAPIENS
    // ===================================================================================================
    class Shortcut extends Scyllar implements worldGate {
        private $User_email;
        private $User_password;
        private $remember_me;

        // make constructer
        // ===================================================
        public function __construct($email,$password,$remember){
            $this->User_email = $email;
            $this->User_password = $password;
            $this->remember_me = $remember;
        }

        // check user if exist in ower data
        // =================================================
        public function check_user_exist(){
            $ency_password = sha1($this->User_password);
            $checkExist = "SELECT * FROM intelligent_users WHERE email='$this->User_email' AND password='$ency_password'";
            $executeCheck = mysqli_query($this->Frequency(),$checkExist);
            if(mysqli_num_rows($executeCheck) > 0){
                return true;
            }else{
                return false;
            }
        }

        // if user checked checkbox then set up cookies
        // ===========================================================
        public function set_up_cookies (){
            if(empty($this->remember_me)){
               
            }else{
                setcookie("Scyllar_Email",$this->User_email,time() + (86400 * 30),'/');
                setcookie("Scyllar_password",$this->User_password,time() + (86400 * 30),'/');
            }
        }

        // update_login_session
        // =================================================================
        public function update_login_session(){
            $updateUserLogin = "UPDATE intelligent_users SET log_Session='online' WHERE email='$this->User_email'";
            $executeLogin = mysqli_query($this->Frequency(),$updateUserLogin);
            if($executeLogin){
                return true;
            }else{
                return false;
            }
        }

        // setup_session_redirect methord for set up sesssion and redirect
        // ===========================================================================
        public function setup_session_redirect(){
            $selectCurrentInfo = "SELECT * FROM intelligent_users WHERE email='$this->User_email'";
            $executeCurrentInfo = mysqli_query($this->Frequency(),$selectCurrentInfo);
            if(mysqli_num_rows($executeCurrentInfo) > 0){
                $rows = mysqli_fetch_assoc($executeCurrentInfo);

                //   initialize varibles for sessions    
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
                header("Location: ../Built-in-courses/");
            }
        }
    }


    // INITIALIZE VARIABLE FROM OUTSIDE THE FILE
    // =======================================================================================
    $E_mail = $_POST['user_email'];
    $Password = $_POST['usr_password'];
    $remember_user = $_POST['rememberUser'];

    // CREATE HOMO SAPIENS
    // =======================================================================================
    $newHomoSapien = new Shortcut($E_mail,$Password,$remember_user);
    if($newHomoSapien->check_user_exist()){
        if($newHomoSapien->update_login_session()){
            $newHomoSapien->set_up_cookies();
            $newHomoSapien->setup_session_redirect();
        }
    }else{   
        header("Location: account_shortcut.box.php?user_not_in");
        exit();
    }
    
?>