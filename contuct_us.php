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

    //  INITIALIZE AND INCLUDE PHPMAILER
    // ======================================================================================================
    // ======================================================================================================
    use PHPMailer\PHPMailer\PHPMailer;
    // ======================================================================================================
    // ======================================================================================================
  
    //  INCLUDE DATABASE CONNECTION FROM SCYLLA
    // =======================================================================================================
    // =======================================================================================================
    require_once ("Scyllar.php");
    // =======================================================================================================
    // =======================================================================================================

    // IMPORT PHPMAILER FILE
    // ==========================================================================================================
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
    // ===========================================================================================================


    // MAKE AND CONFIGURE INTERFACE
    // ========================================================================================================
    // =========================================================================================================
    interface  Thoughts {
        public function validate_email();
        public function send_Email();
    }
    // =========================================================================================================


    // MAKE AND CONFIGURE CLASS CALLED FEEDBACKS
    // =============================================================================================================
    // =============================================================================================================
    class Feedbacks extends Scyllar implements Thoughts {
        private $firstname;
        private $email;
        private $subject;
        private $body;

        // CONSTRUCT CLASS
        // =============================================================================
        public function __construct($user_firstname,$user_email,$user_subject,$user_body){
            $this->firstname = $user_firstname;
            $this->email = $user_email;
            $this->subject = $user_subject;
            $this->body = $user_body;
        }

        // VALIDATE EMAIL IF IT EMAIL
        // ===================================================================================
        public function validate_email(){
            if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
                return false;
            }else{
                return true;
            }
        }

        // CONFIGURE AND IMPLEMENT SEND EMAIL METHOD
        // ================================================================================
        public function send_Email(){
            $mail = new PHPMailer();

            // SMTP settings
            $mail->isSMTP();
            $mail->Host = "mail.intelligentbox.rw";
            $mail->SMTPAuth = true;
            $mail->Username = "create_sapience@intelligentbox.rw";
            $mail->Password = 'human_sapience@2020';
            $mail->Port = 465;    //587
            $mail->SMTPSecure = "ssl";   // tls
            
            // Email settings
            $mail->isHTML(true);       
            $mail->setFrom($this->email, $this->firstname);      // specify who sending email (sender)
            $mail->addAddress("create_sapience@intelligentbox.rw");    // specify where email sended (reciever)
            $mail->Subject = $this->subject;
            $mail->Body = $this->body;

            if($mail->send()){
                return true;
            }else{
                return false;
            }
        }
    }

    // EXECUTE CLASS FEEDBACK
    // =============================================================================
    // FIRST INITIALIZE INPUTED DATA
    // =============================================================================
    $inputed_firstname = $_POST['getFirstname'];
    $inputed_email = $_POST['getEmail'];
    $inputed_subject = $_POST['getSubject'];
    $inputed_body = $_POST['getBody'];

    // IMPLEMENT CLASS FEEDBACK
    // ==============================================================================
    $newFeedback = new Feedbacks($inputed_firstname,$inputed_email,$inputed_subject,$inputed_body);
    if($newFeedback->validate_email()){
        if($newFeedback->send_Email()){
            $response = "Success";
        }else{
            $response = "Fail";
        }
    }else{
        $response = "Invalid email, Please input valid email";
    }

    exit(json_encode($response));
?>