<?php 

    //  INITIALIZE DATABASE
    // ==========================================================================================================
    require_once ("../Scyllar.php");
    // ==========================================================================================================

    // EX CLASS CHALLENGE_CONTENT
    // ==========================================================================================================
    class Challenge_content extends Scyllar {
        public function group_members($group_url){
           $select_group_identity = "SELECT * FROM user_groups WHERE url_encode='$group_url'";
           $execute_info = mysqli_query($this->Frequency(), $select_group_identity);
           $fetch_identity = mysqli_fetch_assoc($execute_info);
               $group_identity = $fetch_identity['identity'];
            
           $select_member = "SELECT * FROM user_group_member WHERE group_identity='$group_identity'";
           $execute_member = mysqli_query($this->Frequency(), $select_member);
           if(mysqli_num_rows($execute_member) > 0){
            while($fetch_member = mysqli_fetch_assoc($execute_member)){
                $get_user_email = $fetch_member['User_email'];

                $select_user_info = "SELECT * FROM intelligent_users WHERE email='$get_user_email'";
                $execute_user_info = mysqli_query($this->Frequency(), $select_user_info);
                $fetch_user_info = mysqli_fetch_assoc($execute_user_info);
                    $firstname = $fetch_user_info['firstName'];
                    $lastName = $fetch_user_info['lastName'];

                $select_profile_image = "SELECT * FROM user_profile_image WHERE usr_email='$get_user_email'";
                $execute_profile_image = mysqli_query($this->Frequency(), $select_profile_image);
                $fetch_profile_image = mysqli_fetch_assoc($execute_profile_image);
                    $profile_image = $fetch_profile_image['profile_image'];  ?>    

                    <!-- each user -->
                    <!-- ========================================================================== -->
                    <div class="position-relative" onmouseover="about_user(this)" onmouseout="about_user(this)">
                        <div class="each-user shadow-sm d-flex justify-content-between">
                            <div class="d-flex">
                                <div><div class="friend-image">
                                    <img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="">
                                    <div class="active-user">
                                        <div></div>
                                    </div>
                                </div></div>
                                <div class="friend-section ml-2 mt-1">
                                    <div class="friend-name"><?php echo $firstname; ?> <?php echo $lastName; ?></div>
                                    <div class="friend-desc">
                                        <div><?php echo $get_user_email; ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-follow ml-2 mt-2">
                                <button class="follow-btn">follow</button>
                            </div>
                        </div>
                        <!-- about user -->
                        <div class="about-usr">
                            <div class="about-specification">
                                <div><div class="user-about-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                                <div class="about-info">
                                    <div class="firstname"><span><?php echo $firstname; ?> <?php echo $lastName; ?></span></div>
                                    <div class="email"><span><?php echo $get_user_email; ?></span></div>
                                    <!-- <div class="department"><span>software development</span></div> -->
                                </div>
                            </div>
                            <div class="activity-status">
                                <div class="followers">followers <span>456K</span></div>
                                <div class="following">Following <span>35</span></div>
                                <div class="trainer">trainer <span>37</span></div>
                            </div>
                        </div>
                        <!-- end about user -->
                    </div>
                    <!-- end each user -->
                    <!-- ================================================================================== -->
            <?php }    
            }else{ ?>
               <div class="no_info_found">
                   <div><i class="fa fa-user-o"></i></div>
                   <div>No member found in this group</div>
               </div>
        <?php }
        }

        public function upload_post ($challenge_url, $user_email, $media, $media_type, $caption_inputed){
            $select_user_identity = "SELECT * FROM intelligent_users WHERE email='$user_email'";
            $execute_user_info = mysqli_query($this->Frequency(), $select_user_identity);
            $fetch_identity = mysqli_fetch_assoc($execute_user_info);
                $user_identity = $fetch_identity['identity'];
                $created_on = Date("Y-m-d h:m:s");

            $insert_post = "INSERT INTO user_challenge_posts VALUE ('','$challenge_url','$user_identity','$media','$media_type','$caption_inputed','0','$created_on')";
            $execute_post = mysqli_query($this->Frequency(), $insert_post);
            if($execute_post){
                return true;
            }else{
                return false;
            }
        }
    }

    // IMPLEMENT CLASS CHALLENGE CONTENT
    // ===================================================================================================
    $new_content = new Challenge_content();

    // if request is to display all member of group 1
    // ===================================================================================================
    if(isset($_POST['get_group_1_content'])){
        $new_content->group_members($_POST['get_group_1_content']);
    }

    // if request is to save post from challenge
    // ======================================================================================================
    if(isset($_POST['submit_post'])){
        $user_email = $_POST['user_email'];
        $caption_inputed = $_POST['caption'];
        $challenge_url = $_POST['challenge_url'];
        
        $filename = 'IB_challenge_image'.time().'Box'.'--'.$_FILES['chosen_file']['name'];
        $file_size = $_FILES['chosen_file']['size'];

        $location = "../Images/group-challenge/".$filename;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);

        $valid_extensions = array("jpg","jpeg","png","mp4");

        if($_FILES['chosen_file']['name'] == ""){
            $empty = $_FILES['chosen_file']['name'];
            if($new_content->upload_post($challenge_url, $user_email, $empty, $imageFileType, $caption_inputed)){
                header("location: challenge.php?challenge={$challenge_url}&msg=success");
                exit();
            }else{
                header("location: challenge.php?challenge={$challenge_url}&msg=fail");
                exit();
            }
        }else{
            // check extension
            if(!in_array(strtolower($imageFileType), $valid_extensions)) {
                header("location: challenge.php?challenge={$challenge_url}&msg=extension");
                exit();
            }else{
                if($file_size < 20971520){
                    if(move_uploaded_file($_FILES['chosen_file']['tmp_name'],$location)){
                        if($new_content->upload_post($challenge_url, $user_email, $filename, $imageFileType, $caption_inputed)){
                            header("location: challenge.php?challenge={$challenge_url}&msg=success");
                            exit();
                        }else{
                            header("location: challenge.php?challenge={$challenge_url}&msg=fail");
                            exit();
                        }
                    }else{
                        header("location: challenge.php?challenge={$challenge_url}&msg=move_fail");
                        exit();
                    }
                }else{
                    header("location: challenge.php?challenge={$challenge_url}&msg=size");
                    exit();
                }
            }
        }
        // exit(json_encode($response));
    }

?>