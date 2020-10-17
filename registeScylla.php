<?php 
    // INITIALIZE PHP MAILER
    // ===========================================================================================================
    use PHPMailer\PHPMailer\PHPMailer;
    // =========================================================================================================== 

    // INITIALIZE DATABASE CONNECTION AND USER CODE
    // ===========================================================================================================
    include_once ("Scyllar.php");
    include_once ("User_local_info.php");
    include_once ("Geo.box.php");
    // ===========================================================================================================
    
    // IMPORT PHPMAILER FILE
    // ==========================================================================================================
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
    // ===========================================================================================================

    // INITIALIZE INTERFACE NEULON
    // ============================================================================================================
    interface Neulon{
        public function validateEmail();
        public function validateInput();
        public function checkEmailExist();
        public function saveData();
        public function updateProfileImage();
        public function extraInformation();
        public function sendEmail();
    }
    // ============================================================================================================

    // CONFIGURE CLASS MYTHOLOGY
    // ============================================================================================================
    class Mythology extends Scyllar implements Neulon {
        private $_firstname;
        private $_lastname;
        private $_email;
        private $_password;

        private $city;
        private $country;
        private $region;
        private $timezone;
        private $isp; 

        private $title;
        private $verify;
        private $dateSession;
        public $executed;

        // FUNCTION VALIDATE USER THAT REMOVE UNWANT TEXT AND CHECK 
        // ========================================================
        function validate_input($Input){
            $Input = trim($Input);
            $Input = stripslashes($Input);
            $Input = htmlspecialchars($Input);
            $Input = strip_tags($Input);
            $Input = htmlentities($Input);
            return $Input;
        }

        // SATITIZE INPUTED DATA
        // ==========================================================
        function sanitizeMySQL($connectionFunction, $Input){
            $Input = $connectionFunction->real_escape_string($Input);
            $Input = $this->validate_input($Input);
            return $Input;
        }

        // INITIALIZE CONSTRUCTER
        // ===================================================================================================
        public function __construct($firstname,$lastname,$email,$password,$title,$verityCode,$date,$executed,$user_city,$user_country,$user_timezone,$user_region,$user_isp){
            $this->_firstname = $this->sanitizeMySQL($this->Frequency(),trim($firstname));
            $this->_lastname = $this->sanitizeMySQL($this->Frequency(),trim($lastname));
            $this->_email = $this->sanitizeMySQL($this->Frequency(),trim($email));
            $this->_password = $this->sanitizeMySQL($this->Frequency(),trim($password));

            $this->city = $this->sanitizeMySQL($this->Frequency(),trim($user_city));
            $this->country = $this->sanitizeMySQL($this->Frequency(),trim($user_country));
            $this->region = $this->sanitizeMySQL($this->Frequency(),trim($user_region));
            $this->timezone = $this->sanitizeMySQL($this->Frequency(),trim($user_timezone));
            $this->isp = $this->sanitizeMySQL($this->Frequency(),trim($user_isp));

            $this->title = $this->sanitizeMySQL($this->Frequency(),trim($title));
            $this->verify = $this->sanitizeMySQL($this->Frequency(),trim($verityCode));
            $this->dateSession = $this->sanitizeMySQL($this->Frequency(),trim($date));
            $this->executed = $this->sanitizeMySQL($this->Frequency(),trim($executed));
        }

        // VALIDATE EMAIL TO REQUIRED EMAIL
        // =======================================================
        public function validateEmail(){
            if(!filter_var($this->_email,FILTER_VALIDATE_EMAIL)){
                return false;
            }else{
                return true;
            }
        }

        // REGEX EXPRESS TO INPUTED DATA
        // ========================================================================================================
        public function validateInput(){
            if (!preg_match("/^[a-zA-Z ]*$/",$this->_firstname) || !preg_match("/^[a-zA-Z ]*$/",$this->_lastname)) {
                return true;
            }else{
               if(strlen($this->_firstname) > 20 || strlen($this->_lastname) > 20){
                  return true;
               }else{
                   return false;
               }
            }
        }

        // METHORD CHECK IF EMAIL EXIST IN OWER DATA
        // =============================================================================================================
        // =============================================================================================================
        public function checkEmailExist(){
            $selectCurrentEmail = "SELECT * FROM intelligent_users WHERE email='$this->_email'";
            $executeChecking = mysqli_query($this->Frequency(),$selectCurrentEmail);
            if(mysqli_num_rows($executeChecking) > 0){
                return true;
            } else {
                return false;
            }
         }
 

        // METHOD SAVE DATA INTO DATABASE
        // ============================================================================================================================================================================================================
        public function saveData(){
            $encripto = $this->_firstname.'#'.$this->_email.'@user.box';
            $unique_url_code = sha1($encripto);
            $ency_password = sha1($this->_password);
            $EncodeData = "INSERT INTO intelligent_users VALUE ('','$unique_url_code','$this->_firstname','$this->_lastname','$this->_email','$ency_password','$this->title','$this->verify','$this->dateSession','notYet','$this->executed')";
            $execute_Frequency = mysqli_query($this->Frequency(),$EncodeData);
        }

        // UPDATE PROFILE IMAGE SET TO DEFAULT IMAGE
        // ==========================================================================================================================================================
        public function updateProfileImage(){
            // fetch basic info 
            // =========================================================
            $selectIdentity = "SELECT identity FROM intelligent_users WHERE email='$this->_email'";
            $execute_identity = mysqli_query($this->Frequency(),$selectIdentity);
            $fetchIdentity = mysqli_fetch_assoc($execute_identity);
            $identity = $fetchIdentity['identity'];
            $created_on = date("d/m/Y");

            // upload image
            // =============================================================
            $setDefault = "INSERT INTO user_profile_image VALUE ('','$identity','$this->_firstname','$this->_email','defaultProfileImage.png','1','$created_on')";
            $executeProfile = mysqli_query($this->Frequency(),$setDefault);
        }

        // GET USER EXTRA INFO
        // ================================================================================================
        public function extraInformation(){

            //  get local info
            // ==============================================================================================================================
            $ip_address = new UserInfo();
                $get_ip_address = $ip_address->get_ip();
                $get_browser = $ip_address->get_browser();
                $get_device = $ip_address->get_device();
                $get_os = $ip_address->get_os();
            // ==============================================================================================================================
     

            // insert user anonymous information 
            // ===============================================================================================================================
            $created_on = Date("Y-m-d h:m:s");
            $insertInfo = "INSERT INTO user_auto_detection VALUE ('','$this->_firstname','$this->_lastname','$this->_email','$this->city','$this->country','$this->timezone','$this->region','$this->isp','$get_browser','$get_device','$get_os','$get_ip_address','$created_on')";
            $executeInfo = mysqli_query($this->Frequency(),$insertInfo);
            // ===============================================================================================================================

            // INsert notification settings
            // ==============================================================================================================================
            $created_on = Date("Y-m-d h:m:s");
            $insert_new = "INSERT INTO notification_settings VALUE ('','$this->_email','Badge_on','Off','Off','Off','Off','$created_on')";
            $execute_new = mysqli_query($this->Frequency(), $insert_new);
        }

        // METHOD SEND EMAIL TO EMAIL PROVIDED
        // ===========================================================================================================
        public function sendEmail(){
            $subject = "Verification code From Intelligent box";
            $sender = "users@intelligentbox.rw";
            $sender_name = "Intelligent box";

            $RequestCode = "SELECT * FROM intelligent_users WHERE email='$this->_email'";
            $executeCode = mysqli_query($this->Frequency(),$RequestCode);
            $code = mysqli_fetch_assoc($executeCode);
                $name = $code['firstName'];
                $lastname = $code['lastName'];
                $digital = $code['verification_Code']; 

            $body = "<div style='background: white;border-radius: 14px;box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);width: 300px'>
                        <div style='background: #041a2f; color: white;padding: 10px;'>Intelligentbox</div>
                        <div style='padding: 10px;background: white;'>
                            <div style='color: #041a2f;font-size: 17px;'>Intelligentbox verification code</div>
                            <div style='margin-top: 6px;font-siz: 16px;'>Hello <b>{$name} {$lastname}</b>, Here is your intelligentbox activate code amargin-top: 5px;s </div>
                            <div style='margin-top: 7px;background:  #041a2f; color: white; letter-spacing: 0.6px;border-radius: 4px;padding: 5px;'>IBox-- <b>{$digital} </b></div>
                            <div style='margin-top: 5px;font-size: 15px;>Please do not share this code for your account security!</div>
                        </div>
                      </div>
                    "; 

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
            $mail->addAddress($this->_email);    // specify where email sended (reciever)
            $mail->Subject = $subject;
            $mail->Body = $body;

            if($mail->send()){
                return true;
            }else{
                return false;
            }
        }
    }
    // ===============================================================================================================

    // GET DATA THANK HAVE BEEN INPUTED
    // ============================================================================================================
    // ============================================================================================================
    $firstname = $_POST['getFirstname'];
    $lastname = $_POST['getLastname'];
    $email = $_POST['getEmail'];
    $password = $_POST['getPassword'];

    $user_city = $_POST['user_city'];
    $user_country = $_POST['user_country'];
    $user_region = $_POST['user_region'];
    $user_timezone = $_POST['user_timezone'];
    $user_isp = $_POST['user_isp'];

    $getTitle = "student";
    $verifyCode = rand(100000,999999);

    $Line = Date("Y-m-d h:m:s");
    $executed_date = Date("Y-m-d h:m:s");

    // execute class Mythology 
    // ============================================================================================================
    // ============================================================================================================
    $implementNeulon = new Mythology($firstname,$lastname,$email,$password,$getTitle,$verifyCode,$Line,$executed_date,$user_city,$user_country,$user_timezone,$user_region,$user_isp);
    try {
        if($implementNeulon->validateEmail() == false){
            $status = "Fail";
            $response = "Invalid email inputed";
         }else{
             if($implementNeulon->validateInput() == true){
                 $status = "fail";
                 $response = "Lastname,firstname must be less than 20 characters, Only letters allowed";
             }else{
                if($implementNeulon->checkEmailExist() == false){
                    $implementNeulon->saveData();
                    $implementNeulon->updateProfileImage();

                    $implementNeulon->extraInformation();
                    if($implementNeulon->sendEmail()){
                        $status = "success";
                        $response = "Check code we sent to this E-mail";
                    }else{
                        $status = "Fail";
                        $response = "Fail to send code, try again!";
                    }
                }else{
                    $status = "Fail";
                    $response = "E-mail you entered already exist, !Please try again or another";
                }
            }
        }
    } catch (\Throwable $th) {
        $status = $th;
        $response = "Technical error, we're working to get it fixed, try again!";
    }

    // end mythology
    // =====================================================================================================================
    // =====================================================================================================================

    // send data by json files
    // =====================================================================================================================
    exit(json_encode($response))
?>