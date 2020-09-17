<?php 

    // INITIALIZE DATABASE CONNECTION 
    // ==========================================================================================================
    require_once ("../Scyllar.php");
    // ==========================================================================================================

    // CLASS LEARN_CONTENT
    // =========================================================================================================
    class Learn_content extends Scyllar {

        public function top_learner($email, $depart, $title){
            $select_top_learner = "SELECT * FROM intelligent_users WHERE email NOT IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$email') AND email NOT IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$email') AND email IN (SELECT DISTINCT email FROM more_account_info WHERE Department='$depart') AND email != '$email' AND title='$title' AND Verified='complete'";
            $execute_top_leaners = mysqli_query($this->Frequency(), $select_top_learner);
            if(mysqli_num_rows($execute_top_leaners) > 0 ){
               while($fetch_top_learner = mysqli_fetch_assoc($execute_top_leaners)){
                    $getFirstname = $fetch_top_learner['firstName'];
                    $getLastname = $fetch_top_learner['lastName'];
                    $getEmail = $fetch_top_learner['email'];
                    $getIdentity = $fetch_top_learner['identity'];

                    $user_bio = "SELECT * FROM user_bio WHERE email='$getEmail'";
                    $execute_bio = mysqli_query($this->Frequency(), $user_bio);
                    $fetch_bio = mysqli_fetch_assoc($execute_bio);
                        $bio = $fetch_bio['bio'];

                    $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$getEmail' AND status_image='1'";
                    $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                    $fetch_image = mysqli_fetch_assoc($execute_image); ?>
                    <!-- each leaner -->
                    <!-- ================================================================================================================================= -->
                    <div class="each-learner d-flex">
                        <div class="learner-image">
                            <div class="img"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%"></div>
                        </div>
                        <div class="learner-desc">
                            <div class="learner-name d-flex justify-content-between">
                                <div class="name">
                                    <div><?php echo $getFirstname; ?> <?php echo $getLastname; ?></div>
                                    <div><?php echo $getEmail; ?></div>
                                </div>
                                <div class="follow mt-2"><button id="<?php echo $getEmail; ?>" onclick="followUser(this)">Follow</button></div>
                            </div>
                            <div class="learner-bio mt-1"><?php echo $bio; ?></div>
                        </div>
                    </div>
                    <!-- end each leaner -->
                    <!-- ============================================================================================================================================== -->

              <?php }
            }else{

            }
        }

        public function getProfileImage($Email){
            $selectImage = "SELECT * FROM user_profile_image WHERE usr_email='$Email' AND status_image='1'";
            $executeImage = mysqli_query($this->Frequency(),$selectImage);
            $fetchImage = mysqli_fetch_assoc($executeImage); ?>
                <img src="<?php echo '../Images/profile-img/profile-image/'.$fetchImage['profile_image'] ?>" width="100%" height="100%">
        <?php }
    }

    // IMPLEMENT CLASS LEARN CONTENT
    // ==========================================================================================================
    $NEW_CONTENT = new Learn_content();

    // if request is to fetch top learner
    // ==========================================================================================================
    if(isset($_POST['get_some_learner'])){
        $NEW_CONTENT->top_learner($_POST['get_some_learner'], $_POST['gethiddenPart'], $_POST['title']);
    }

    // if request is to fetch profile image
    // =========================================================================================================
    if(isset($_POST['getProfileImage'])){
        $NEW_CONTENT->getProfileImage($_POST['getProfileImage']);
    }

?>