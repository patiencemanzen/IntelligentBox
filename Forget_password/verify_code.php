<?php

    // INITIALIZE DATABASE CONNECTION 
    // ==========================================================================================================
    // ==========================================================================================================
    require_once ("../Scyllar.php");
    // ==========================================================================================================
    // ==========================================================================================================
    
    // INITIALIZE INTERFACE AND CONFIGURE
    // ===========================================================================================================
    // ===========================================================================================================
    interface checkIdentity {
        public function checkCode ();
    }

    // INITIALIZE CLASS CHANGE INFO
    // ----------==================================================================================================
    class DigitalCode extends Scyllar implements checkIdentity {
        private $email_check;
        private $codeInputed;

        // constructer
        // ===========================================================================
        public function __construct($email,$code){
            $this->email_check = $email;
            $this->codeInputed = $code;
        }

        // implement checking of code
        public function checkCode(){
            $checkCode = "SELECT verification_Code FROM intelligent_users WHERE email='$this->email_check'";
            $executeCode = mysqli_query($this->Frequency(),$checkCode);
            $fetchCode = mysqli_fetch_assoc($executeCode);
            $currentCode = $fetchCode['verification_Code'];
            if($currentCode == $this->codeInputed){
                return true;
            }else{
                return false;
            }
        }
    }

    // INITIALIZE CODE INPUTED
    // ==========================================================================================================
    $getEmail = $_POST['E_mail'];
    $getCode = $_POST['inputedCode'];

    // INMPREMENT CLASS CHECK DigitalCode
    $newDigitalCode = new DigitalCode($getEmail,$getCode);
    if($newDigitalCode->checkCode()){
        $response = "Code Accepted";
    }else{
        $response = "Code denied";
    }

   exit(json_encode($response)); 
?>