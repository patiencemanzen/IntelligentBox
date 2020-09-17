<?php 
    //////////////////////////////////////////////////////

    // INTELLIGENT BOX
    // DESIGNED & DEVELOPED by Manirabona Patience

    // author: Mnirabona Patience,
    // Email:  Hseal419@gmail.com,
    // location: Kigali,Rwanda,
    // pro: Intelligent Box E-learning,
    // version: 1.0.0

    //////////////////////////////////////////////////////

    // INITIALIZE DATABASE CONNECTION
    // ==============================================================================================================
    // ==============================================================================================================
    require_once ("Scyllar.php");
    // ==============================================================================================================

    // INITIALIZE INTERFACE
    // ==============================================================================================================
    interface Digital {
        public function isFull();
        public function RegExpress();
        public function checkCode();
    }

    // IMPREMENT CLASS DEFEND
    // ==================================================================================================================
    // ==================================================================================================================
    class DefendCode extends Scyllar implements Digital {
        private $digitalCode;
        private $digitalsTable;
        private $Email;

        // INITIALIZE CONSTRUCTER
        // =============================================
        public function __construct($analogCode,$table,$email){
            $this->digitalCode = $analogCode;
            $this->digitalsTable = $table;
            $this->Email = $email;
        }

        // VALIDATE ANALOG CODE BEFORE CONVETION
        // =============================================
        public function isFull(){
            if(strlen($this->digitalCode) < 6 || strlen($this->digitalCode) > 6){
               return false;
            }else{
                return true;
            }
        }

        // VALIDATE REGEX EXPRESSION
        public function RegExpress(){
            if(!preg_match("/^[0-9]*$/",$this->digitalCode)){
                return false;
            }else{
                return true;
            }
        }

        // CHECK CODE IF MATCH WITH WHAT WE HAVE IN DATABASE
        // ========================================================
        public function checkCode(){
            $selectCode = "SELECT verification_Code FROM $this->digitalsTable WHERE email='$this->Email'";
            $executeCode = mysqli_query($this->Frequency(),$selectCode);
            if(mysqli_num_rows($executeCode) > 0){
                return true;
            }else{
                return false;
            }
        }
    }

    // RECIEVE INPUT
    // =====================================================================
    $inputedCode = $_POST['digitalCode'];
    $inputedTitle = $_POST['Title'];
    $inputedEmail = $_POST['Email'];
    $convetedTable = "";

    // CONVET TITLE INTO TABLE
    // ====================================================================
    if($inputedTitle == "student"){
        $convetedTable = "intelligent_users";
    }else{
        $convetedTable = "intelligent_trainer";
    }

    // THEN CHECK WHAT WE GOT
    // ===================================================================
    $newDefendCode = new DefendCode($inputedCode,$convetedTable,$inputedEmail);

    // check if is number
    if($newDefendCode->RegExpress()){
        if($newDefendCode->isFull()){
           if($newDefendCode->checkCode()){
               $response = 'Good check, you successfully checked';
           }else{
               $response = "Not you, provide code we sent to $inputedEmail";
           }
        }else{
            $response = "require 4 Numbers";
        }
    }else{
       $response = "Not a number, required number";
    }
     
    exit(json_encode($response));
?>