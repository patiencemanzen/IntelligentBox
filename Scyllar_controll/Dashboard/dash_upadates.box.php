<?php 

   // INITIALIZE PHP MAILER
    // ===========================================================================================================
    use PHPMailer\PHPMailer\PHPMailer;
    // ===========================================================================================================
    
    // INITIALIZE DATABASE CONNECTION
    // ===========================================================================================================
    require_once ("../../Scyllar.php");
    // =========================================================================================================== 
    
    // IMPORT PHPMAILER FILE
    // ==========================================================================================================
    require_once "../../PHPMailer/PHPMailer.php";
    require_once "../../PHPMailer/SMTP.php";
    require_once "../../PHPMailer/Exception.php";
    // ===========================================================================================================

    // DATA CLASS UPDATES
    // ===========================================================================================================
    class Updates extends Scyllar {

        private $trainer_firstname;
        private $trainer_lastname;
        private $trainer_email;

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
        public function __construct($firstname,$lastname,$email){
            $this->trainer_firstname = $this->sanitizeMySQL($this->Frequency(),$firstname);
            $this->trainer_lastname = $this->sanitizeMySQL($this->Frequency(),$lastname);
            $this->trainer_email = $this->sanitizeMySQL($this->Frequency(),$email);
        }

        public function validateEmail(){
            if(!filter_var($this->trainer_email,FILTER_VALIDATE_EMAIL)){
                return false;
            }else{
                return true;
            }
        }

        // REGEX EXPRESS TO INPUTED DATA
        // ========================================================================================================
        public function validateInput(){
            if (!preg_match("/^[a-zA-Z ]*$/",$this->trainer_firstname) || !preg_match("/^[a-zA-Z ]*$/",$this->trainer_lastname)) {
                return true;
            }else{
               if(strlen($this->trainer_firstname) > 20 || strlen($this->trainer_lastname) > 20){
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
            $selectCurrentEmail = "SELECT * FROM intelligent_users WHERE email='$this->trainer_email'";
            $executeChecking = mysqli_query($this->Frequency(),$selectCurrentEmail);
            if(mysqli_num_rows($executeChecking) > 0){
                return true;
            } else {
                return false;
            }
        }

        public function Create_trainer(){
            $encripto = $this->trainer_firstname.'#'.$this->trainer_email.'@user.box';
            $unique_url_code = sha1($encripto);
            $trainer_password = sha1($this->trainer_email);
            $date_session = Date("Y-m-d h:m:s");
            $verifyCode = rand(100000,999999);
            $EncodeData = "INSERT INTO intelligent_users VALUE ('','$unique_url_code','$this->trainer_firstname','$this->trainer_lastname','$this->trainer_email','$trainer_password','trainer','$verifyCode','$date_session','Admin','$date_session')";
            $execute_Frequency = mysqli_query($this->Frequency(),$EncodeData);
        }

        public function updateProfileImage(){
            // fetch basic info 
            // =========================================================
            $selectIdentity = "SELECT identity FROM intelligent_users WHERE email='$this->trainer_email'";
            $execute_identity = mysqli_query($this->Frequency(),$selectIdentity);
            $fetchIdentity = mysqli_fetch_assoc($execute_identity);
            $identity = $fetchIdentity['identity'];
            $created_on = date("d/m/Y");

            // upload image
            // =============================================================
            $setDefault = "INSERT INTO user_profile_image VALUE ('','$identity','$this->trainer_firstname','$this->trainer_email','defaultProfileImage.png','1','$created_on')";
            $executeProfile = mysqli_query($this->Frequency(),$setDefault);
        }

        public function ReloadInfo($email){
            $RequestCode = "SELECT * FROM intelligent_users WHERE email='$email'";
            $executeCode = mysqli_query($this->Frequency(),$RequestCode);
            $code = mysqli_fetch_assoc($executeCode);
                $password = $code['password']; 

            return $password;    
        }

        public function sendEmail(){
            $subject = "intelligent box trainer";
            $sender = "intelligentbox@gmail.com";
            $sender_name = "Intelligent box";

            $mail = new PHPMailer();

            // SMTP settings
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "intelligentbox732@gmail.com";
            $mail->Password = 'intelligentBox2020';
            $mail->Port = 465;    //587
            $mail->SMTPSecure = "ssl";   // tls
            
            // Email settings
            $mail->isHTML(true);       
            $mail->setFrom($sender, $sender_name);      // specify who sending email (sender)
            $mail->addAddress($this->trainer_email);    // specify where email sended (reciever)
            $mail->Subject = $subject;
            $mail->Body = $this->ReloadInfo($this->trainer_email);

            if($mail->send()){
                return true;
            }else{
                return false;
            }
        }
    }

    // CLASS UPATES CLASS AND ADD ONE
    // ===================================================================================================================================
    class Segments extends Scyllar {
        public function save_story($story_image, $media_type, $history_section, $history_title,$story_sub_title, $history_full_body, $history_side){
            $created_on = Date("Y-m-d h:m:s");
            $insert_news = "INSERT INTO history_post VALUE ('','1','intelligentBox@gmail.com','$story_image','$media_type','$history_section','$history_title','$story_sub_title','$history_full_body','$history_side','0','0','$created_on')";
            $execute_news = mysqli_query($this->Frequency(), $insert_news);
        }

        public function save_topics($topic,$topics_sub_title, $topic_media, $topic_desc, $topic_section){
            $created_on = Date("Y-m-d h:m:s");
            $user_email = "intelligentBox@gmail.box";
            $save_topic = "INSERT INTO user_topics VALUE('','$user_email','$topic','$topics_sub_title','$topic_media','$topic_desc','$topic_section','$created_on')";
            $execute_topic = mysqli_query($this->Frequency(), $save_topic);
        }

        public function save_world_news($news_title, $news_desc, $news_media, $continet){
            $user_email = "intelligentBox@gmail.box";
            $created_on = Date("Y-m-d h:m:s");
            $insert_news = "INSERT INTO user_common_news VALUE ('','$user_email','$news_title','$news_media','$news_desc','$continet','$created_on')";
            $execute_news = mysqli_query($this->Frequency(), $insert_news);
            if($execute_news){
                return true;
            }else{
                return false;
            }
        }

        public function save_religion_content($religion_continet, $religion_section,$section_side, $media_posted,$media_type, $post_title, $poste_sub_title, $post_desc, $user_email){
            $created_on = Date("Y-m-d h:m:s");
            $religion_email = $religion_section.'@religion.box';
            $insert_religion_content = "INSERT INTO user_religion_post VALUE ('','$religion_email','$user_email','$media_posted','$media_type','$post_title','$poste_sub_title','$post_desc','$religion_section','$religion_continet','$section_side','0','$created_on')";
            $execute_religion_content = mysqli_query($this->Frequency(), $insert_religion_content);
        }
    }

    // IMPLEMENT CLASS SEGMENTS
    // ===========================================================================================================================================
    $new_segments = new Segments();

    // update story
    // ============================================================================================================================================
    if(isset($_POST['submit_story'])){
        $story_title = $_POST['story_title'];
        $story_sub_title = $_POST['story_sub_title'];
        $story_body = $_POST['story_desc'];
        $story_section = $_POST['select_section'];
        $history_side = $_POST['history_side'];
    
        $story_image = 'IB_story_image'.time().'Box'.'--'.$_FILES['story_image']['name'];
        $file_size = $_FILES['story_image']['size'];
        $location = "../../Images/history-img/".$story_image;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        $valid_extensions = array("jpg","jpeg","png");
    
        // check extension
        if(!in_array(strtolower($imageFileType), $valid_extensions)) {
            header("location: index.php?check_extension");
            exit();
        }else{
            if(move_uploaded_file($_FILES['story_image']['tmp_name'],$location)){
                if($new_segments->save_story($story_image, $imageFileType, $story_section, $story_title,$story_sub_title, $story_body, $history_side)){
                    echo "story saved";
                }else{
                    echo "story fail to be created";
                }
            }else{
                echo "File upload fail";
            }
        }
    }

    // IMPLEMENT CLASS UPDATES
    // =====================================================================================================================================
    if(isset($_POST['getEmail'])){
        $trainer_email = $_POST['getEmail'];
        $firstname = $_POST['getFirstname'];
        $lastname = $_POST['getLastname'];
        $new_updates = new Updates($firstname, $lastname, $trainer_email);

        if($new_updates->validateEmail() == false){
            $response = "Invalid email inputed";
        }else{
            if($new_updates->validateInput() == true){
                $response = "Lastname,firstname must be less than 20 characters, Only letters allowed";
            }else{
                if($new_updates->checkEmailExist() == false){
                    $new_updates->Create_trainer();
                    $new_updates->updateProfileImage();
                    if($new_updates->sendEmail()){
                        $response = "Check code we sent to this E-mail";
                    }else{
                        $response = "Fail to send code, try again!";
                    }
                }else{
                    $response = "E-mail you entered already exist, !Please try again or another";
                }
             }
        }

        exit(json_encode($response));
    }

    // if request is to save topics
    // ===============================================================================================================================================
    if(isset($_POST['submit_topics'])){
        $topics_title = $_POST['topics_title'];
        $topics_sub_title = $_POST['topics_sub_title'];
        $topics_desc = $_POST['topics_desc'];
        $topic_section = $_POST['section_religion_topics'];

        $topic_image = 'IB_topic_image'.time().'Box'.'--'.$_FILES['image_file']['name'];
        $file_size = $_FILES['image_file']['size'];
        $location = "../../Images/topics/".$topic_image;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        $valid_extensions = array("jpg","jpeg","png","mp4");
    
        // check extension
        if(!in_array(strtolower($imageFileType), $valid_extensions)) {
            header("location: index.php#autobiography?check_extension");
            exit();
        }else{
            if(move_uploaded_file($_FILES['image_file']['tmp_name'],$location)){
                if($new_segments->save_topics($topics_title,$topics_sub_title, $topic_image, $topics_desc, $topic_section)){
                    echo "story saved";
                }else{
                    echo "topic fail to be created";
                }
            }else{
                echo "File upload fail";
            }
        }
    }

    // if request is to save world news
    // =============================================================================================================
    if(isset($_POST['submit_world_news'])){
        $news_title = $_POST['world_news_title'];
        $news_desc = $_POST['world_news_desc'];
        $continet = $_POST['continet'];

        $news_image = 'IB_world_image'.time().'Box'.'--'.$_FILES['World_news_images']['name'];
        $file_size = $_FILES['World_news_images']['size'];
        $location = "../../Images/world-news-img/".$news_image;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        $valid_extensions = array("jpg","jpeg","png","mp4");
    
        // check extension
        if(!in_array(strtolower($imageFileType), $valid_extensions)) {
            header("location: index.php");
            exit();
        }else{
            if(move_uploaded_file($_FILES['World_news_images']['tmp_name'],$location)){
                if($new_segments->save_world_news($news_title, $news_desc, $news_image, $continet)){
                    echo "news saved";
                }else{
                    echo "news fail to be created";
                }
            }else{
                echo "File upload fail";
            }
        }
    }

    // if request is to save religion content
    // ================================================================================================================================================================
    if(isset($_POST['submit_content'])){
        $section_continet = $_POST['section_continet'];
        $section_religion = $_POST['section_religion'];
        $section_side = $_POST['section_side'];
        $content_title = $_POST['content_title'];
        $content_sub_title = $_POST['content_sub_title'];
        $content_desc = $_POST['content_desc'];

        $content_image = 'IB_religion_image'.time().'Box'.'--'.$_FILES['content_images']['name'];
        $file_size = $_FILES['content_images']['size'];
        $location = '../../Images/religions/each-religion/'.$section_religion.'/'.$content_image;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        $valid_extensions = array("jpg","jpeg","png");
    
        // check extension
        if(!in_array(strtolower($imageFileType), $valid_extensions)) {
            header("location: index.php?extension");
            exit();
        }else{
            if(move_uploaded_file($_FILES['content_images']['tmp_name'],$location)){
                if($new_segments->save_religion_content($section_continet, $section_religion,$section_side, $content_image,$imageFileType, $content_title, $content_sub_title, $content_desc, 'intelligentBox@gmail.box')){
                    echo "content saved";
                }else{
                    echo "contient fail to be created";
                }
            }else{
                echo "File upload fail";
            }
        }
    }
?>