<?php 
    session_start();

    // INITIALIZE PHP MAILER
    // ===========================================================================================================
    use PHPMailer\PHPMailer\PHPMailer;
    // =========================================================================================================== 

    // INITIALIZE DATABASE CONNECTION
    // ===========================================================================================================
    include_once ("../Scyllar.php");
    // ===========================================================================================================
    
    // IMPORT PHPMAILER FILE
    // ==========================================================================================================
    require_once "../PHPMailer/PHPMailer.php";
    require_once "../PHPMailer/SMTP.php";
    require_once "../PHPMailer/Exception.php";
    // ===========================================================================================================


    // MAKE AND CONFIGURE INTERFACE CALLED World
    // ===============================================================================================================
    interface Worlds {
       public function updateBackground_image ($Email, $backgroundsTable,$backgroundImage);
       public function update_Profile_image($mail, $backgroundsTable,$backgroundImage);
       public function saveBio ($email, $bio);
    }

    //  INITIALIZE AND MAKE CLASS CALLED MIGRATION
    // ====================================================================================================================== 
    class Migration extends Scyllar implements Worlds {

        // initialize and implement updateBackground
        public function updateBackground_image($Email, $backgroundsTable,$backgroundImage){
            $select_detail = "SELECT * FROM intelligent_users WHERE email='$Email'";
            $execute_detail = mysqli_query($this->Frequency(),$select_detail);
            $fetch_detail = mysqli_fetch_assoc($execute_detail);
                $identity = $fetch_detail['identity'];
                $created_on = Date("Y-m-d h:m:s");

            // update current images to off
            // =============================================================================
            $update_current_image = "UPDATE $backgroundsTable SET background_status='off' WHERE user_email='$Email'";
            $execute_update = mysqli_query($this->Frequency(), $update_current_image);

            // insert background image
            $insert_image = "INSERT INTO $backgroundsTable VALUES ('','$identity','$Email','$backgroundImage','on','$created_on')";
            $execute_image = mysqli_query($this->Frequency(),$insert_image);
            if($execute_image){
                return true;
            }else{
                return false;
            }
        }



        // update profile image 
        // =============================================================================================================================
        public function update_Profile_image($mail, $profileTable,$profileImage){

            $update_current_image = "UPDATE user_profile_image SET status_image='0' WHERE usr_email='$mail'";
            $execute_update = mysqli_query($this->Frequency(), $update_current_image);

            $select_profile_detail = "SELECT * FROM intelligent_users WHERE email='$mail'";
            $execute_profile_detail = mysqli_query($this->Frequency(),$select_profile_detail);
            $fetch_profile_detail = mysqli_fetch_assoc($execute_profile_detail);

            $usr_identity = $fetch_profile_detail['identity'];
            $firstname_profile = $fetch_profile_detail['firstName'];
            $created_date = Date("Y-m-d h:m:s");

            $insert_post = "INSERT INTO user_common_post VALUE ('','$usr_identity','$mail','$profileImage','jpeg','','profile','0','$created_date')";
            $execute_post = mysqli_query($this->Frequency(), $insert_post);

            // insert background image
            $insert_image = "INSERT INTO user_profile_image VALUES ('', '$usr_identity', '$firstname_profile', '$mail', '$profileImage','1','$created_date')";
            $executeImg = mysqli_query($this->Frequency(), $insert_image);

            // insert notification
            // ===========================
            $notification = $fetch_profile_detail['firstName']." Updates profile image";
            $date_created = Date("Y-m-d h:m:s");
            $insert_notification = "INSERT INTO notifications VALUE ('','$mail','$notification','profile','0','new','on','$date_created')";
            $execute_notification = mysqli_query($this->Frequency(), $insert_notification);

            return $executeImg;
        }

        
        // SAVE USER BIO THAT HAVE SUBMIT
        // ============================================================================================================
        public function saveBio($email, $bio){
            $select_profile_detail = "SELECT * FROM intelligent_users WHERE email='$email'";
            $execute_profile_detail = mysqli_query($this->Frequency(),$select_profile_detail);
            $fetch_profile_detail = mysqli_fetch_assoc($execute_profile_detail);

            $usr_identity = $fetch_profile_detail['identity'];
            $firstname_profile = $fetch_profile_detail['firstName'];
            $created_date = date("d/m/Y");

            $unset_current_bio = "UPDATE user_bio SET bio_status='off' WHERE email='$email'";
            $execute_unsetion = mysqli_query($this->Frequency(), $unset_current_bio);

            // SAVE BIO INSIDE TABLE
            // ================================================================================================================
            $saveBio = "INSERT INTO user_bio VALUE ('','$usr_identity','$firstname_profile','$email','$bio','on','$created_date')";
            $execute_bio = mysqli_query($this->Frequency(), $saveBio);
           
            return $execute_bio;
        }

        // SAVE NEW COURSE
        public function save_course($course_name, $class_identity, $course_instruction){
            $date_created = Date("Y-m-d h:m:s");
            $Insert_course = "INSERT INTO courses VALUE ('','$class_identity','$course_name','Course_document.png','course','$course_instruction','5','0','on','$date_created')";
            $execute_saving = mysqli_query($this->Frequency(), $Insert_course);
            if($execute_saving){
                return true;
            }else{
                return false;
            }
        }

        public function join_class($user_email, $class_identity){
            $select_profile_detail = "SELECT * FROM intelligent_users WHERE email='$user_email'";
            $execute_profile_detail = mysqli_query($this->Frequency(),$select_profile_detail);
            $fetch_profile_detail = mysqli_fetch_assoc($execute_profile_detail);
                $user_identity = $fetch_profile_detail['identity'];
                
            $created_on = Date("Y-m-d h:m:s");
            $insert_class = "INSERT INTO class_tracks VALUE ('','$class_identity','$user_identity','on','$created_on')";
            $execute_class = mysqli_query($this->Frequency(), $insert_class);
        }

        // SETTING UPDATE USER INFO
        // ================================================================================================================
        public function Update_data($school, $birthday, $location, $contanct,$department, $gender, $email){
             $check_exists = "SELECT * FROM more_account_info WHERE email='$email'";
             $execute_check = mysqli_query($this->Frequency(), $check_exists);
             if(mysqli_num_rows($execute_check) > 0){
                 $update_info = "UPDATE more_account_info SET School='$school', Department='$department', contact='$contanct', location='$location', date_of_birth='$birthday', gender='$gender' WHERE email='$email'";
                 $execute_update = mysqli_query($this->Frequency(), $update_info);
             }else{
                 $created_on = Date("Y-m-d h:m:s");
                 $insert_new_data = "INSERT INTO more_account_info VALUE ('','$email','$school','$department','Five','$contanct','$location','$birthday','$gender','$created_on')";
                 $execute_new_data = mysqli_query($this->Frequency(), $insert_new_data);
             }  
        }

        public function getAccount_edition($email){ 
            $select_info = "SELECT * FROM intelligent_users WHERE email='$email'";
            $execute_info = mysqli_query($this->Frequency(), $select_info);
            $fetch_info = mysqli_fetch_assoc($execute_info);
                $firstname = $fetch_info['firstName'];
                $lastname = $fetch_info['lastName']; ?>
            <tr>
                <td class="present-action-table">Firstname</td>
                <td><?php echo $firstname; ?></td>
                <td class="edit-field"><input type="text" name="" id="firstname_inputted" placeholder="Edit" value="<?php echo $firstname; ?>"></td>
            </tr>
            <tr>
                <td class="present-action-table">Lastname</td>
                <td><?php echo $lastname; ?></td>
                <td class="edit-field"><input type="text" name="" id="lastname_inputted" placeholder="Edit" value="<?php echo $lastname; ?>"></td>
            </tr>
       <?php }

       public function update_account_data($email, $firstname, $lastname){
           $update_data = "UPDATE intelligent_users SET firstName='$firstname', lastName='$lastname' WHERE email='$email'";
           $execute_info = mysqli_query($this->Frequency(), $update_data);

           $select_updated = "SELECT * FROM intelligent_users WHERE email='$email'";
           $execute_updated = mysqli_query($this->Frequency(), $select_updated);
           $fetch_updated = mysqli_fetch_assoc($execute_updated);
                $firstName = $fetch_updated['firstName'];
                $lastName = $fetch_updated['lastName'];

            unset($_SESSION['Firstname']);
            unset($_SESSION['Lastname']);

            $_SESSION['Firstname'] = $firstName;
            $_SESSION['Lastname'] = $lastName;
       }

       public function update_password($personal_email, $new_password){
           $ency_password = sha1($new_password);
           $update_password = "UPDATE intelligent_users SET password='$ency_password' WHERE email='$personal_email'";
           $execute_updates = mysqli_query($this->Frequency(), $update_password);
           
            $RequestCode = "SELECT * FROM intelligent_users WHERE email='$personal_email'";
            $executeCode = mysqli_query($this->Frequency(),$RequestCode);
            $code = mysqli_fetch_assoc($executeCode);
                $name = $code['firstName'];
                $lastname = $code['lastName'];

           $subject = "Password updates on your account";
           $sender = "users@intelligentbox.rw";
           $sender_name = "Intelligent box";

           $body =  "Hello {$name} {$lastname}, Your password have been changed, you will log in/sign in using this new password"; 

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
       }

       public function location_visibility($email, $location_enable){
            $check_exists = "SELECT * FROM more_account_info WHERE email='$email'";
            $execute_check = mysqli_query($this->Frequency(), $check_exists);
            if(mysqli_num_rows($execute_check) > 0){
                $update_info = "UPDATE more_account_info SET location_visible='$location_enable' WHERE email='$email'";
                $execute_update = mysqli_query($this->Frequency(), $update_info);
            }else{
                
            } 
       }

       public function noti_display($email){ 
           $select_noti_set = "SELECT * FROM notification_settings WHERE email='$email'";
           $execute_not_set = mysqli_query($this->Frequency(), $select_noti_set);
           $fetch_noti_set = mysqli_fetch_assoc($execute_not_set);
               $badge = $fetch_noti_set['badge'];
               $follow_board = $fetch_noti_set['follow_board'];
               $like_comment = $fetch_noti_set['like_comment'];
               $posts = $fetch_noti_set['posts'];
               $noti_email = $fetch_noti_set['noti_email'];
           ?>
           <div class="each-noti">
                <div class="d-flex">
                <div class="form--chicking mr-2"><input type="checkbox" name="" <?php if($badge == 'Badge_on'){?> checked <?php }else{ }?> id="" onclick="update_badge(this)"></div>
                    <div class="privacy-noti">Badge for unreaded Notifications</div>
                </div>
                <div class="desc-settings">Enable Notifications count badge on navbar</div>
            </div>
            <div class="each-noti">
                <div class="d-flex">
                    <div class="form--chicking mr-2"><input type="checkbox" name="" id="" <?php if($follow_board == 'On'){?> checked <?php }else{ }?> onclick="update_follow(this)"></div>
                    <div class="privacy-noti">New Followers</div>
                </div>
                <div class="desc-settings">Get notification when you have new Followers</div>
            </div>
            <div class="each-noti">
                <div class="d-flex">
                    <div class="form--chicking mr-2"><input type="checkbox" name="" id=""  <?php if($like_comment == 'On'){?> checked <?php }else{ }?> onclick="like_comment(this)"></div>
                    <div class="privacy-noti">Likes and comments</div>
                </div>
                <div class="desc-settings">Enable likes and comments notifications on Notification badge</div>
            </div>
            <div class="each-noti">
                <div class="d-flex">
                    <div class="form--chicking mr-2"><input type="checkbox" name="" id="" <?php if($posts == 'On'){?> checked <?php }else{ }?> onclick="posts(this)"></div>
                    <div class="privacy-noti">Get notification When you have new posts</div>
                </div>
                <div class="desc-settings">Fet notification when your companion post new posts and news</div>
            </div>
            <div class="each-noti">
                <div class="d-flex">
                    <div class="form--chicking mr-2"><input type="checkbox" name="" id="" <?php if($noti_email == 'email_noti_on'){?> checked <?php }else{ }?> onclick="noti_email(this)"></div>
                    <div class="privacy-noti">Notification on Email</div>
                </div>
                <div class="desc-settings">Push notiications on email When that waiting for you </div>
            </div>
       <?php }

       public function update_notification_settings($email, $settings, $collumn){
           $select_noti_st = "SELECT * FROM notification_settings WHERE email='$email'";
           $execute_noti_st = mysqli_query($this->Frequency(), $select_noti_st);
           if(mysqli_num_rows($execute_noti_st) > 0){
              $update_barde = "UPDATE notification_settings SET $collumn='$settings' WHERE email='$email'";
              $execute_barde = mysqli_query($this->Frequency(), $update_barde);
           }else{
              $created_on = Date("Y-m-d h:m:s");
              $insert_new = "INSERT INTO notification_settings VALUE ('','$email','$settings','$settings','$settings','$settings','$settings','$created_on')";
              $execute_new = mysqli_query($this->Frequency(), $insert_new);
           }
       }

       public function Feedbacks($user_email, $feedback){
            $selectIdentity = "SELECT * FROM intelligent_users WHERE email='$user_email'";
            $execute_identity = mysqli_query($this->Frequency(),$selectIdentity);
            $fetchIdentity = mysqli_fetch_assoc($execute_identity);
                $firstname = $fetchIdentity['firstName'];
                $lastname = $fetchIdentity['lastName'];

            $subject = $firstname.' '.$lastname." Send account Feedbacks";
            $sender = $user_email;
            $sender_name = $firstname.' '.$lastname;
    
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
            $mail->addAddress("users@intelligentbox.rw");    // specify where email sended (reciever)
            $mail->Subject = $subject;
            $mail->Body = $feedback;

            if($mail->send()){
                return true;
            }else{
                return false;
            }
       }

       public function save_que_trainer($image, $from, $email_to, $que){
           $created_on = Date("Y-m-d h:m:s");
           $save_que = "INSERT INTO user_question VALUE ('','$from','$email_to','personal','$image','$que','new','$created_on')";
           $execute_que = mysqli_query($this->Frequency(), $save_que);

           $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$from'";
           $execute_info = mysqli_query($this->Frequency(), $select_basic_info);
           $fetch_info = mysqli_fetch_assoc($execute_info);
               $getFirstname = $fetch_info['firstName'];
               $getLastname = $fetch_info['lastName'];

           $notification = "{$getFirstname} {$getLastname} Send asked you a question about something!";
           $date_created = Date("Y-m-d h:m:s");
           $insert_notification = "INSERT INTO notifications VALUES ('','$from','$email_to','$notification','question','0','new','on','$date_created')";
           $execute_notification = mysqli_query($this->Frequency(), $insert_notification);
       }

    }  

    // INITIALIZE VARIABLE FROM JS
    // =============================================================================================================
    $newMigration = new Migration();

    // if request is updates background image
    // =============================================================================================================
    if(isset($_FILES['backgroundImage']['name'])){
        $email = $_SESSION['Email'];
        $tableImages = "user_profile_background_image";

        $filename = 'IB_background_image'.time().'Box'.'--'.$_FILES['backgroundImage']['name'];
        $file_size = $_FILES['backgroundImage']['size'];
        $location = "../Images/profile-img/background-img/".$filename;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        $valid_extensions = array("jpg","jpeg","png");

        // check extension
        if(!in_array(strtolower($imageFileType), $valid_extensions)) {
            $response = "Check extentension";
        }else{
            if(move_uploaded_file($_FILES['backgroundImage']['tmp_name'],$location)){
                if($newMigration->updateBackground_image($email,$tableImages,$filename)){
                    $response = "successfully updated!";
                }else{
                    $response = "Fail to update it, try again later";
                }
            }else{
                $response = "Fail to move file, try again later";
            }
        }
        exit(json_encode($response));
    }

    // if request is updates profile image
    // =============================================================================================================
    if(isset($_FILES['profileImage']['name'])){
        $Email = $_SESSION['Email'];
        $profileTble = "user_profile_image";

        $filename = 'IB_profile_image'.time().'Box'.'--'.$_FILES['profileImage']['name'];
        $file_size = $_FILES['profileImage']['size'];
        $location = "../Images/profile-img/profile-image/".$filename;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        $valid_extensions = array("jpg","jpeg","png");

        // check extension
        if(!in_array(strtolower($imageFileType), $valid_extensions)) {
            $response = "Check extentension";
        }else{
            if(move_uploaded_file($_FILES['profileImage']['tmp_name'],$location)){
                if($newMigration->update_Profile_image($Email,$profileTble,$filename)){
                    $response = "successfully updated!";
                }else{
                    $response = "Fail to update photo, try again later";
                }
            }else{
                $response = "Fail to move";
            }
        }
        exit(json_encode($response));
    }

    // if request is to save user bio
    // ==========================================================================================================================
    if(isset($_POST['getEmail'])){
        $email = $_POST['getEmail'];
        $user_bio = $_POST['getBio'];

        if($newMigration->saveBio($email, $user_bio)){
            $response = "bio saved";
        }else{
            $response = "bio fail";
        }

        exit(json_encode($response));
    }

    // if request is to save new course
    // ===========================================================================================================================
    if(isset($_POST['getclassIdentity'])){
        if($newMigration->save_course($_POST['getCourseName'], $_POST['getclassIdentity'], $_POST['getInstruction'])){
            $response = "created";
        }else{
            $response = "create fail";
        }
        exit(json_encode($response));
    }

    // if request is to save joined class
    // =============================================================================================================================
    if(isset($_POST['getClass_identity'])){
        $newMigration->join_class($_POST['getUser'], $_POST['getClass_identity']);
    }

    // if reques is to update data
    // =============================================================================================================================
    if(isset($_POST['ownerEmail'])){
        $newMigration->Update_data($_POST['getSchool'], $_POST['getBd'], $_POST['getLocation'], $_POST['getContanct'],$_POST['getDep'], $_POST['getGender'], $_POST['ownerEmail']);
    }

    // if request is to retriev account info
    // ======================================================================================================================================
    if(isset($_POST['accoutn_updates'])){
        $newMigration->getAccount_edition($_POST['accoutn_updates']);
    }

    // if request is to update accout data
    // =========================================================================================================================================
    if(isset($_POST['account_email'])){
        $newMigration->update_account_data($_POST['account_email'], $_POST['get_firstname'], $_POST['get_lastname']);
    }

    // if request is to update password
    // ===============================================================================================================================================================================================
    if(isset($_POST['new_password_inputted'])){
        $newMigration->update_password($_POST['personal_email'], $_POST['new_password_inputted']);
    }

    // if request is toupdate setting
    // =======================================================================================================================================
    if(isset($_POST['location_visibles'])){
        $newMigration->location_visibility($_POST['getEmail_locater'], $_POST['location_visibles']);
    }

    // if request is to update notification settings
    // =======================================================================================================================================
    if(isset($_POST['notification_settings'])){
        $newMigration->update_notification_settings($_POST['getUser_email'], $_POST['notification_settings'], $_POST['collumn']);
    }

    // if request is to display noti setting
    // =====================================================================================================================================
    if(isset($_POST['get_noti_settings'])){
        $newMigration->noti_display($_POST['get_noti_settings']);
    }

    // if request is to send feedback 
    // ==================================================================================================================
    if(isset($_POST['getFeedback'])){
        if($newMigration->Feedbacks($_POST['gete_user_email'], $_POST['getFeedback'])){
            $response = "Feedback sended, thank you";
        }else{
            $response = "Feedback fail to send";
        }
        exit(json_encode($response));
    }

    // if request is to save que from someone
    // =================================================================================================================
    if(isset($_POST['submit_trainer_que'])){
        $from = $_POST['my_email_in'];
        $to = $_POST['trainer_email'];
        $que = $_POST['que_provided'];

        $filename = 'IB_que_image'.time().'Box'.'--'.$_FILES['que_image']['name'];
        $file_size = $_FILES['que_image']['size'];
        $location = "../Images/Question&Answer/".$filename;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        $valid_extensions = array("jpg","jpeg","png","");

        if($_FILES['que_image']['name'] == ""){
            $empty = "";
            if($newMigration->save_que_trainer($empty, $from, $to, $que)){
                header("location: profile.php?success");
                exit();
            }else{
                header("location: profile.php?fail to insert");
                exit();
            }
        }else{
            if(empty($que)){
                header("location: profile.php?empty");
                exit();
            }else{
                // check extension
                if(!in_array(strtolower($imageFileType), $valid_extensions)) {
                    header("location: profile.php?Check extentension");
                    exit();
                }else{
                    move_uploaded_file($_FILES['que_image']['tmp_name'],$location);
                    if($newMigration->save_que_trainer($filename, $from, $to, $que)){
                        header("location: profile.php?success");
                        exit();
                    }else{
                        header("location: profile.php?fail to insert");
                        exit();
                    }
                }
            }
        }
    }
?>