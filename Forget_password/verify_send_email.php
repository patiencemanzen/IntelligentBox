<?php
    // INITIALIZE DATABASE CONNECTION   
    // ======================================================================================================
    require_once ("../Scyllar.php");
    // ======================================================================================================

    // INITIALZE PHPMAILER
    // =================================================================================================
    use PHPMailer\PHPMailer\PHPMailer;
    // =================================================================================================

    // IMPORT PHPMAILER FILE
    // ==========================================================================================================
    require_once "../PHPMailer/PHPMailer.php";
    require_once "../PHPMailer/SMTP.php";
    require_once "../PHPMailer/Exception.php";
    // ===========================================================================================================

    // INTERPRETE INTERFACE
    // ======================================================================================================
    interface Verification {
        public function checkEmailExist ();
        public function updateUserCode();
        public function reloadCode ();
        public function sendEmail ();
    }

    // CONFIGURE CLASS SCYLLIAN
    // ======================================================================================================
    class Scyllian extends Scyllar implements Verification {
        private $E_mail;
        private $Firstname;

        // INITIALIZE AND MAKE CONSTRUCTER
        // ================================
        public function __construct($emailCheck,$FirstnameCheck){
            $this->E_mail = $emailCheck;
            $this->Firstname = $FirstnameCheck;
        }

        // INITIALIZE AND CHECK EMAIL IF EXIST
        // ==================================================================================================
        public function checkEmailExist(){
            $checkEmail = "SELECT * FROM intelligent_users WHERE email='$this->E_mail' AND firstName='$this->Firstname'";
            $executeChecking = mysqli_query($this->Frequency(),$checkEmail);
            if(mysqli_num_rows($executeChecking) > 0){
                return true;
            }else{
                return false;
            }
        }

        // UPDATE USR CODE 
        // ==========================================================================================================================
        public function updateUserCode(){
            $newCode = rand(100000,999999);
            $updateCode = "UPDATE intelligent_users SET verification_Code='$newCode' WHERE email='$this->E_mail'";
            $executeUpdates = mysqli_query($this->Frequency(),$updateCode);
        }

        // RELOAD CODE THAT HAVE BEEN UPDATED
        // ===========================================================================================================================
        public function reloadCode(){
            $getUpdatedCode = "SELECT verification_Code FROM intelligent_users WHERE email='$this->E_mail'";
            $executeCode = mysqli_query($this->Frequency(),$getUpdatedCode);
            $fetchCode = mysqli_fetch_assoc($executeCode);
            $code = $fetchCode['verification_Code'];
            return $code;
        }

        // METHORD SEND EMAIL TO THIS EMAIL
        // ====================================================================================================
        public function sendEmail(){
            $subject = "intelligent box Code verification";
            $sender = "intelligentbox@gmail.com";
            $sender_name = "Intelligent box";
            $code = $this->reloadCode();
            $body = "Box-- $code is your intelligent box update password verification code";

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
            $mail->addAddress($this->E_mail);    // specify where email sended (reciever)
            $mail->Subject = $subject;
            $mail->Body = $body;

            if($mail->send()){
                return true;
            }else{
                return false;
            }

            // SMTP settings
            // $mail->isSMTP();
            // $mail->Host = "smtp.gmail.com";
            // $mail->SMTPAuth = true;
            // $mail->Username = "intelligentbox732@gmail.com";
            // $mail->Password = 'Homo_sapience@intelligentbox';
            // $mail->Port = 465;    //587
            // $mail->SMTPSecure = "ssl";   // tls
            
            // Email settings
            // $mail->isHTML(true);       
            // $mail->setFrom($sender, $sender_name);      // specify who sending email (sender)
            // $mail->addAddress($this->E_mail);    // specify where email sended (reciever)
            // $mail->Subject = $subject;
            // $mail->Body = $body;

            // if($mail->send()){
            //     return true;
            // }else{
            //     return false;
            // }
        }
    }

    // INITIALIZE VARIABLES INPUTED DATA
    // ==================================================================================
    $E_mail_inputed = $_POST['E_mail'];
    $Firstname_input = $_POST['First_name'];

    // IMPLEMENT CLASS SCYLLIAN
    // ====================================================================================
    $newScyllian = new Scyllian($E_mail_inputed,$Firstname_input);
    if($newScyllian->checkEmailExist()){
        $newScyllian->updateUserCode();
        if(!$newScyllian->sendEmail()){
            $response = "Send E-mail fail, Please try again";
        }else{
           $response = "Check code that sent to email";
        }
    }else{
        $response = "Data not Exists in Data storage, Please input valid Data";
    }

    exit(json_encode($response));
?>