<?php 

    //   ENABLE AND INITIALIZE DATABASE CONNECTION 
    // ==============================================================
    require_once ("../Scyllar.php");
    // =================================================================


    // MAKE AND CONFIGURE INTERFACE
    // =================================================================
    interface Top_Monarch {
        public function getBackgroundImage ($mail);
        public function getProfileImage ($Email);
        public function getProfileDetail ($email);
        public function getBio($Bmail);
        public function countVideo($Vemail);
        public function countPhoto($Pmail);
    }


    // MAKE AND CONFIGURE CLASS CALLED MONARCH
    // ===================================================================
    class ControllProfile extends Scyllar implements Top_Monarch {


        // METHOD THAT DISPLA BACKGROUND IMAGE
        // =============================================================================================================================
        public function getBackgroundImage($email){
            $selectBackgroundImage = "SELECT background_image FROM user_profile_background_image WHERE user_email='$email' AND background_status='on'";
            $execute_background = mysqli_query($this->Frequency(),$selectBackgroundImage);
            $fetch_image = mysqli_fetch_assoc($execute_background); ?>
            <img src="<?php echo '../Images/profile-img/background-img/'.$fetch_image['background_image'] ?>" width="100%" height="100%">
        <?php }

        // METHOD GET PROFILE IMAGE
        // =============================================================================================================================
        public function getProfileImage($Email){
            $selectImage = "SELECT * FROM user_profile_image WHERE usr_email='$Email' AND status_image='1'";
            $executeImage = mysqli_query($this->Frequency(),$selectImage);
            $fetchImage = mysqli_fetch_assoc($executeImage); ?>
                <img src="<?php echo '../Images/profile-img/profile-image/'.$fetchImage['profile_image'] ?>" width="100%" height="100%">
        <?php }

        // GET DETAIL ON TOP PROFILE IMAGE
        // ======================================================================================================================================
        public function getProfileDetail($email){
            $selectProfileDetail = "SELECT * FROM intelligent_users WHERE email='$email'";
            $executeDetail = mysqli_query($this->Frequency(), $selectProfileDetail);
            $fetchDetail = mysqli_fetch_assoc($executeDetail); 
            $user_email = $fetchDetail['email']; 
            $user_identity = $fetchDetail['identity'];

            // select location
            // ==========================================================================================================================================
            $select_location = "SELECT * FROM more_account_info WHERE email='$user_email'";
            $execute_location = mysqli_query($this->Frequency(), $select_location);
            $fetch_location = mysqli_fetch_assoc($execute_location);
            $getLocation = $fetch_location['location'];

            // STATISTIC ON USER DETAIL
            // ==========================================================================================================================================
            $followers = 0;
            $selectFollowers = "SELECT * FROM user_follow_board WHERE reciever_email='$email'";
            $executeFollowers = mysqli_query($this->Frequency(),$selectFollowers);
            while($fetchFollowers = mysqli_fetch_assoc($executeFollowers)){
                $followers = $followers + 1;
            }

            $Following = 0;
            $selectFollowing = "SELECT * FROM user_follow_board WHERE host_email='$email'";
            $execute_following = mysqli_query($this->Frequency(),$selectFollowing);
            while($fetchFollowing = mysqli_fetch_assoc($execute_following)){
                $Following = $Following + 1;
            }

            $followerTrainer = 0;
            $selectTrainer = "SELECT * FROM user_follow_board WHERE host_email='$email' AND reciever_title='trainer'";
            $executeTrainer = mysqli_query($this->Frequency(),$selectTrainer);
            while($fetchTrainer = mysqli_fetch_assoc($executeTrainer)){
                $followerTrainer = $followerTrainer + 1;
            }

            $followingTrainer = 0;
            $selectTrainer = "SELECT * FROM user_follow_board WHERE reciever_email='$email' AND host_title='trainer'";
            $executeTrainer = mysqli_query($this->Frequency(),$selectTrainer);
            while($fetchTrainer = mysqli_fetch_assoc($executeTrainer)){
                $followingTrainer = $followingTrainer + 1;
            }

            $total_trainer = $followerTrainer + $followingTrainer;

            $courses = 0;
            $selectCourse = "SELECT * FROM class_tracks WHERE student_identity='$user_identity'";
            $executeCourse = mysqli_query($this->Frequency(),$selectCourse);
            while($fetch_course = mysqli_fetch_assoc($executeCourse)){
                $courses = $courses + 1;
            } ?>
            <script>
                myTimer();
                function myTimer() {
                    var d = new Date();
                    document.getElementById("my_time").innerHTML = d.toLocaleTimeString();
                }
            </script>  
            <div class="user-status-info">
                <div class="user-location">
                    <span id="my_time"> </span>
                    <span>
                        <?php 
                            $date_form = date_create(Date("Y-m-d h:m:s"));
                            echo date_format($date_form, "D, M d"); 
                        ?>
                    </span>
                </div>
                <div class="email"><i class="fa fa-envelope-o mr-2"></i><?php echo $user_email; ?></div>
                <div class="followers-count-profile"> followers <span><?php echo $followers; ?></span></div>
                <div class="following-count-profile">following <span><?php echo $Following; ?></span></div>
                <div class="trainer-count-profile">Trainer <span><?php echo $total_trainer; ?></span></div>
                <div class="courses-count-profile">Classes <span><?php echo $courses; ?></span></div>
            </div>
        <?php }


        // GET USR BIO AND DISPLAY IT
        // ===============================================================================================================================
        public function getBio($mail){
           $selectBio = "SELECT bio FROM user_bio WHERE email='$mail' AND bio_status='on'";
           $executeBio = mysqli_query($this->Frequency(),$selectBio);
           $fetchBio = mysqli_fetch_assoc($executeBio);  ?>
           <div class="written-biography"><?php echo $fetchBio['bio']; ?></div>
        <?php }

        // COUNT VIDEO THAT HAVE BEEN SHARE
        // =========================================================================================================
        public function countVideo($email){
            $video = 0;
            $selectVideo = "SELECT * FROM user_common_post WHERE poster_email='$email' AND media_type='video'";
            $executeVideo = mysqli_query($this->Frequency(),$selectVideo);
            while($fetchVideo = mysqli_fetch_assoc($executeVideo)){
                $video = $video + 1;
            } 
            echo $video;
        }

        // COUNT PHOTO THAT HAVE BEEN SHARED
        // ==========================================================================================================
        public function countPhoto($email){
            $Photos = 0;
            $selectPhotos = "SELECT * FROM user_common_post WHERE poster_email='$email'";
            $execute_Photo = mysqli_query($this->Frequency(),$selectPhotos);
            while($fetchPhoto = mysqli_fetch_assoc($execute_Photo)){
                $Photos = $Photos + 1;
            }

            $profile_image = 0;
            $selectImage = "SELECT * FROM user_profile_image WHERE usr_email='$email' AND profile_image !='defaultProfileImage.png'";
            $executeImage = mysqli_query($this->Frequency(),$selectImage);
            while($fetchImage = mysqli_fetch_assoc($executeImage)){
                $profile_image = $profile_image + 1;
            }

            $total_image =  $Photos + $profile_image;
            echo $total_image;
        }

    }

    
    // INITIALIZE CLASS CONTROLLPROFILE
    // =====================================================================================
    $newControll = new ControllProfile();

    // if request in background image then do this
    // ======================================================================================
    if(isset($_POST['email_background'])){
       $newControll->getBackgroundImage($_POST['email_background']);
    }

    // if request is profile image
    // ========================================================================================
    if(isset($_POST['getProfileImage'])){
        $newControll->getProfileImage($_POST['getProfileImage']);
    }

    // if request is top profile detail
    // =========================================================================================
    if(isset($_POST['getDetail'])){
        $newControll->getProfileDetail($_POST['getDetail']);
    }

    // if request is user bio 
    // ==========================================================================================
    if(isset($_POST['getBio'])){
        $newControll->getBio($_POST['getBio']);
    }

    // if request is video count
    // ==========================================================================================
    if(isset($_POST['getvideoCount'])){
        $newControll->countVideo($_POST['getvideoCount']);
    }
    
    // if request is photos count
    // ===========================================================================================
    if(isset($_POST['getPhotoCount'])){
        $newControll->countPhoto($_POST['getPhotoCount']);
    }

    // if request is setting profile image
    // ============================================================================================
    if(isset($_POST['getImage'])){
        $newControll->getProfileImage($_POST['getImage']);
    }

    // if request is display profile image on create post div
    // ============================================================================================
    if(isset($_POST['getProfile_image_email'])){
        $newControll->getProfileImage($_POST['getProfile_image_email']);
    }

    // if request is post_profile_image
    // ============================================================================================
    if(isset($_POST['getPost_profile_image'])){
        $newControll->getProfileImage($_POST['getPost_profile_image']);
    }

    // if request if to show display commter image on comment
    // ===========================================================================================
    if(isset($_POST['getPost_commenter_image'])){
        $newControll->getProfileImage($_POST['getPost_commenter_image']);
    }

    // if request is to display profile image on autobio
    // ===========================================================================================
    if(isset($_POST['getAuto_image'])){
        $newControll->getProfileImage($_POST['getAuto_image']);
    }

    // if request is to display image on create group field
    // ============================================================================================
    if(isset($_POST['getGroupCreateimage'])){
        $newControll->getProfileImage($_POST['getGroupCreateimage']);
    }

?>