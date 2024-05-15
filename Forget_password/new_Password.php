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

    // INITIALIZE DATABASE CONNECTION
    // ============================================================
    require_once ("../Scyllar.php");
    // ============================================================

    // INITIALIZE INTERFACE
    // =============================================================
    interface NewData {
        public function updatePassword();
        public function sendEmail();
    }

    // IMPLMENT AND CONFIGURE CLASS CALLED BIGDATA
    // ===============================================================
    // ===============================================================
    class Big_Data extends Scyllar implements NewData {
        private $newPassword;
        private $User_mail;

        // MAKE CONSTRUCTER
        // =============================================================
        public function __construct($password,$email){
            $this->newPassword = $password;
            $this->User_mail = $email;
        }

        // CHANGE PASSWORD
        // ================================================================
        public function updatePassword(){
            $new_password = sha1($this->newPassword);
            $updatePassword = "UPDATE intelligent_users SET password='$new_password' WHERE email='$this->User_mail'";
            $execute_updates = mysqli_query($this->Frequency(),$updatePassword);
            if(!$execute_updates){
                return false;
            }else{
                return true;
            }
        }

         // METHOD SEND EMAIL TO EMAIL PROVIDED
        // ===========================================================================================================
        public function sendEmail(){
            $subject = "Password changed successfully on Intelligent Box account";
            $sender = "intelligentbox@gmail.com";
            $sender_name = "IntelligentBox";

            $select_info = "SELECT * FROM intelligent_users WHERE email='$this->User_mail'";
            $execute_info = mysqli_query($this->Frequency(), $select_info);
            $fetch_info = mysqli_fetch_assoc($execute_info);
                $firstname = $fetch_info['firstName'];
                $lastname = $fetch_info['lastName'];
                $date = date_create(Date("Y-m-d h:m:s"));
                $date_format = date_format($date, "d, m d, Y h:m:s");

            $body = "Password for your box account was changed from {$firstname} {$lastname} on {$date_format}";

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
            $mail->addAddress($this->User_mail);    // specify where email sended (reciever)
            $mail->Subject = $subject;
            $mail->Body = $body;

            if($mail->send()){
                return true;
            }else{
                return false;
            }
        }
    }

    // INITIALIZE VARIABLES YHAT HAVE BEEN INPUTED IN JS
    // ==============================================================================================================
    $NewPasswrd = $_POST['holdNewPassword'];
    $Email_inputed = $_POST['User_mail'];

    // IMPLEMENT CLASS GIG DATA
    $newData = new Big_Data($NewPasswrd,$Email_inputed);
    if($newData->updatePassword()){
        $newData->sendEmail();
        $response = "Data updates successfully";
    }else{
        $response = "Data fail to be updated";
    }

    exit(json_encode($response));
?>