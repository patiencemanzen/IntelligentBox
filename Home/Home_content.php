<?php 
    // INITIALIZE DATABASE CONNECTION
    // ===========================================================================================================
    require_once ("../Scyllar.php");
    // ===========================================================================================================
    
    // CLASS HOME_CONTENT
    // ==========================================================================================================
    class Home_content extends Scyllar {
        private $E_mail;

        public function __construct($email){
            $this->E_mail = $email;
        }

        public function more_trainer(){
            $select_more_trainer = "SELECT * FROM intelligent_users WHERE email NOT IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$this->E_mail') AND email NOT IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$this->E_mail') AND email != '$this->E_mail' AND title='trainer' AND Verified='complete' LIMIT 2";
            $execute_trainer = mysqli_query($this->Frequency(),$select_more_trainer);
            if(mysqli_num_rows($execute_trainer) > 0){
                while($fetch_trainer = mysqli_fetch_assoc($execute_trainer)){
                    $getFirstname = $fetch_trainer['firstName'];
                    $getLastname = $fetch_trainer['lastName'];
                    $getEmail = $fetch_trainer['email'];
                    $getIdentity = $fetch_trainer['identity'];

                    $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$getEmail' AND status_image='1'";
                    $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                    $fetch_image = mysqli_fetch_assoc($execute_image);

                    $gestBackgroundImage = "SELECT background_image FROM user_profile_background_image WHERE user_email='$getEmail' AND background_status='on'";
                    $execute_background_image = mysqli_query($this->Frequency(), $gestBackgroundImage);
                    $fetch_background_image = mysqli_fetch_assoc($execute_background_image); 
                    
                    $followers = 0;
                    $selectFollowers = "SELECT * FROM user_follow_board WHERE reciever_email='$this->E_mail'";
                    $executeFollowers = mysqli_query($this->Frequency(),$selectFollowers);
                    while($fetchFollowers = mysqli_fetch_assoc($executeFollowers)){
                        $followers = $followers + 1;
                    }

                    $Following = 0;
                    $selectFollowing = "SELECT * FROM user_follow_board WHERE host_email='$this->E_mail'";
                    $execute_following = mysqli_query($this->Frequency(),$selectFollowing);
                    while($fetchFollowing = mysqli_fetch_assoc($execute_following)){
                        $Following = $Following + 1;
                    }

                    $courses = 0;
                    $selectCourse = "SELECT * FROM class_tracks WHERE student_identity='$getIdentity'";
                    $executeCourse = mysqli_query($this->Frequency(),$selectCourse);
                    while($fetch_course = mysqli_fetch_assoc($executeCourse)){
                        $courses = $courses + 1;
                    }?>

                    <!-- each friend -->
                    <!-- ========================= -->
                    <div class="each-learner">
                        <div class="d-flex">
                            <div class="student-image"><div class="img"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image'] ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="learner-desc ml-2">
                                <div class="learner-name d-flex justify-content-between">
                                    <div class="name-student">
                                        <div><?php echo $getFirstname; ?> <?php echo $getLastname; ?></div>
                                        <div><?php echo $getEmail; ?></div>
                                    </div>
                                    <div class="follow mt-2 ml-2"><button id="<?php echo $getEmail; ?>" onclick="followUser(this)">Follow</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="trainer-accurate d-flex mt-2 justify-content-between">
                            <div class="course">Course <span><?php echo $courses; ?></span></div>
                            <div class="followers">Followers <span><?php echo $followers; ?></span></div>
                            <div class="following">Following <span><?php echo $Following; ?></span></div>
                        </div>
                    </div>
                    <!-- end each people -->
                    <!-- =========================== -->
                <?php }
            }
        }

        private function count_member($group_identity){
            $member = 0;
            $count_member = "SELECT * FROM user_group_member WHERE group_identity='$group_identity'";
            $execute_member = mysqli_query($this->Frequency(), $count_member);
            while($fetch_member = mysqli_fetch_assoc($execute_member)){
                $member = $member + 1;
            }
            return $member;
        }

        public function all_groups (){
            $select_all_groups = "SELECT * FROM user_groups WHERE group_name NOT IN (SELECT DISTINCT group_name FROM user_group_member WHERE User_email='$this->E_mail') AND group_name NOT IN (SELECT DISTINCT group_name FROM user_group_member WHERE approval='yes' OR approval='no')";
            $execute_all_groups = mysqli_query($this->Frequency(), $select_all_groups);
            while($fetch_all_groups = mysqli_fetch_assoc($execute_all_groups)){
                $groups_profile_image = $fetch_all_groups['group_profile_image'];
                $group_name = $fetch_all_groups['group_name'];
                $url_encode = $fetch_all_groups['url_encode'];
                $group_bio = $fetch_all_groups['group_bio'];
                $group_privacy = $fetch_all_groups['group_privacy'];
                $group_identity = $fetch_all_groups['identity'];
                $creater = $fetch_all_groups['email'];

                $select_basic = "SELECT * FROM user_profile_image WHERE usr_email ='$creater' AND status_image='1'";
                $execute_profile_image = mysqli_query($this->Frequency(), $select_basic);
                $fetch_profile_image = mysqli_fetch_assoc($execute_profile_image);
                    $profile_image = $fetch_profile_image['profile_image'];

                $Trainer = 0;
                $selectTrainer = "SELECT * FROM user_group_member WHERE group_identity='$group_identity' AND user_title='trainer'";
                $executeTrainer = mysqli_query($this->Frequency(),$selectTrainer);
                while($fetchTrainer = mysqli_fetch_assoc($executeTrainer)){
                    $Trainer = $Trainer + 1;
                }

                if($group_privacy == "Public"){ ?>
                    <!-- each group -->
                    <!-- ========================== -->
                    <div class="each-group">
                        <div class="group-image">
                            <img src="<?php echo '../Images/groups/'.$groups_profile_image; ?>" alt="" width="100%" height="100%">
                            <div class="admin-image-ame d-flex">
                                <div><div class="admin-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" height="100%" width="100%"></div></div>
                                <div class="group-name ml-2 mt-4"><?php echo $group_name; ?></div>
                            </div>
                        </div>
                        <div class="group-bio"><?php echo $group_bio; ?></div>
                        <div class="user-accurate d-flex justify-content-between">
                            <div class="member">Members <span><?php echo $this->count_member($group_identity); ?></span></div>
                            <div class="challenge">Trainer <span><?php echo $Trainer; ?></span></div>
                            <div class="ask">
                                <button id="<?php echo $group_identity; ?>" onclick="join_goup(this)"><i class="fa fa-plus"></i> Join</button>
                            </div>
                        </div>
                    </div>
                    <!-- end each group -->
                    <!-- ==================================== -->
                <?php }else{

                }
            }
        }

        public function join_user ($user_email, $group_identity){
            $select_basics = "SELECT * FROM intelligent_users WHERE email='$user_email'";
            $execute_basic = mysqli_query($this->Frequency(), $select_basics);
            $fetch_user_info = mysqli_fetch_assoc($execute_basic);
                $user_identity = $fetch_user_info['identity'];
                $user_title = $fetch_user_info['title'];

            $select_group_info = "SELECT * FROM user_groups WHERE identity='$group_identity'";
            $execute_group_info = mysqli_query($this->Frequency(), $select_group_info);
            $fetch_group_info = mysqli_fetch_assoc($execute_group_info);
                $group_name = $fetch_group_info['group_name'];
                $date_created = Date("Y-m-d h:m:s");
                
            $join_user = "INSERT INTO user_group_member VALUE ('','$user_identity','$user_email','$user_title','$group_name','$group_identity','no','$date_created')";
            $execute_user_join = mysqli_query($this->Frequency(), $join_user);
            if($execute_user_join){
                return true;
            }else{
                return false;
            }
        }

        public function show_classes (){
            $select_identity = "SELECT * FROM intelligent_users WHERE email='$this->E_mail'";
            $execute_identity = mysqli_query($this->Frequency(), $select_identity);
            $fetch_identity = mysqli_fetch_assoc($execute_identity);
                $get_Identity = $fetch_identity['identity'];

            $select_classes = "SELECT * FROM trainer_class WHERE user_identity != '$get_Identity' AND class_name !='Intelligent_class' AND Live='on'";
            $execute_classes = mysqli_query($this->Frequency(), $select_classes);
            while($fetch_class = mysqli_fetch_assoc($execute_classes)){ 
                $getProfileImage = $fetch_class['class_profile_image'];
                $getClassName = $fetch_class['class_name'];
                $getClass_identity = $fetch_class['identity'];
                $getClass_desc = $fetch_class['class_desc'];

                $countCourse = 0;
                $select_course = "SELECT * FROM courses WHERE class_identity='$getClass_identity'";
                $execute_course_count = mysqli_query($this->Frequency(), $select_course);
                while($fetch_course = mysqli_fetch_assoc($execute_course_count)){
                    $countCourse = $countCourse + 1;
                } 
                
                $class_member = 0;
                $select_member = "SELECT * FROM class_tracks WHERE class_identity='$getClass_identity'";
                $execute_member = mysqli_query($this->Frequency(), $select_member);
                while($fetch_member = mysqli_fetch_assoc($execute_member)){
                    $class_member = $class_member + 1;
                } ?>
                <!-- each course -->
                <!-- ======================== -->
                <div class="each-group">
                    <div class="group-image">
                        <img src="<?php echo '../Images/class_img/'.$getProfileImage; ?>" alt="" width="100%" height="100%">
                        <div class="admin-image-ame d-flex">
                            <div class="group-name ml-2"><?php echo $getClassName; ?></div>
                        </div>
                    </div>
                    <div class="group-bio"><?php echo $getClass_desc; ?></div>
                    <div class="user-accurate d-flex justify-content-between">
                        <div class="member">Learner <span><?php echo $class_member; ?></span></div>
                        <div class="challenge">courses <span><?php echo $countCourse; ?></span></div>
                        <div class="ask">
                            <button id="<?php echo $getClass_identity; ?>" onclick="join_class(this)">Join now</button>
                        </div>
                    </div>
                </div>
                <!-- end each course -->
                <!-- ========================= -->
        <?php }
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

        // display nearby user
        // ==========================================================================================================================================
        public function new_follow(){
            $select_user = "SELECT * FROM intelligent_users WHERE email NOT IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$this->E_mail') AND email NOT IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$this->E_mail') AND email != '$this->E_mail' AND title != 'trainer' AND Verified='complete' LIMIT 2";
            $execute_user = mysqli_query($this->Frequency(), $select_user);
            while($fetch_user = mysqli_fetch_assoc($execute_user)){
                $usr_firstname = $fetch_user['firstName'];
                $usr_lastname = $fetch_user['lastName'];
                $usr_email = $fetch_user['email'];
                $user_identity = $fetch_user['identity'];

                $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$usr_email' AND status_image='1'";
                $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                $fetch_image = mysqli_fetch_assoc($execute_image); 

                $user_bio = "SELECT * FROM user_bio WHERE email='$usr_email'";
                $execute_bio = mysqli_query($this->Frequency(), $user_bio);
                $fetch_bio = mysqli_fetch_assoc($execute_bio);
                    $bio = $fetch_bio['bio'];
                
                // STATISTIC ON USER DETAIL
                // ==========================================================================================================================================
                $followers = 0;
                $selectFollowers = "SELECT * FROM user_follow_board WHERE reciever_email='$usr_email'";
                $executeFollowers = mysqli_query($this->Frequency(),$selectFollowers);
                while($fetchFollowers = mysqli_fetch_assoc($executeFollowers)){
                    $followers = $followers + 1;
                }

                $Following = 0;
                $selectFollowing = "SELECT * FROM user_follow_board WHERE host_email='$usr_email'";
                $execute_following = mysqli_query($this->Frequency(),$selectFollowing);
                while($fetchFollowing = mysqli_fetch_assoc($execute_following)){
                    $Following = $Following + 1;
                }

                $courses = 0;
                $selectCourse = "SELECT * FROM class_tracks WHERE student_identity='$user_identity'";
                $executeCourse = mysqli_query($this->Frequency(),$selectCourse);
                while($fetch_course = mysqli_fetch_assoc($executeCourse)){
                    $courses = $courses + 1;
                }                   ?>
                    <!-- each trainer -->
                    <!-- =============== -->
                    <!-- if you want to hover on user and display about of user use 'onmouseover="about_user(this)" onmouseout="about_user(this)"' -->
                    <div class="position-relative">
                        <div class="each-learner">
                            <div class="d-flex">
                                <div class="learner-image">
                                    <div class="img"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt=""></div>
                                </div>
                                <div class="learner-desc ml-2">
                                    <div class="learner-name d-flex justify-content-between">
                                        <div class="name">
                                            <div><?php echo $usr_firstname; ?> <?php echo $usr_lastname; ?></div>
                                            <div><?php echo $usr_email; ?></div>
                                        </div>
                                        <div class="follow mt-2"><button id="<?php echo $usr_email; ?>" onclick="followUser(this)">Follow</button></div>
                                    </div>
                                    <div class="learner-bio mt-1"><?php echo $bio; ?></div>
                                </div>
                            </div>
                            <div class="trainer-accurate d-flex mt-2 justify-content-between">
                                <div class="course">Classes <span><?php echo $courses; ?></span></div>
                                <div class="followers">Follower <span><?php echo $followers; ?></span></div>
                                <div class="following">Following <span><?php echo $Following; ?></span></div>
                            </div>
                        </div>
                        <!-- about user -->
                        <div class="about-usr">
                            <div class="about-specification">
                                <div><div class="user-about-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%"></div></div>
                                <div class="activity-status">
                                    <div class="followers">followers <span><?php echo $followers; ?></span></div>
                                    <div class="following">Following <span><?php echo $Following; ?></span></div>
                                    <div class="trainer">Classes <span><?php echo $courses; ?></span></div>
                                </div>
                            </div>
                            <div class="about-info">
                                <div class="firstname"><span><?php echo $usr_firstname; ?> <?php echo $usr_lastname; ?></span></div>
                                <div class="email"><span><?php echo $usr_email; ?></span></div>
                                <!-- <div class="department"><span>software development</span></div>
                                <div class="school">world mission school</div> -->
                            </div>
                        </div>
                        <!-- end about user -->
                    </div>
                    <!-- end each trainer -->
                    <!-- ====================== -->
              <?php }
        }

        // CREATE POSTS
        // ==================================================================================================================================
        public function save_post($public_media,$media_section, $public_caption, $email,$media_type){
            $select_basic_identity = "SELECT identity FROM intelligent_users WHERE email='$email'";
            $execute_identity = mysqli_query($this->Frequency(), $select_basic_identity);
            $fetch_identity = mysqli_fetch_assoc($execute_identity);
                $identity = $fetch_identity['identity'];
                $created_on = date("Y-m-d h:m:s");

            // then insert post
            // =================================================================================================
            $insert_post = "INSERT INTO user_common_post VALUES ('','$identity','$email','$public_media','$media_section','$public_caption','$media_type','0','$created_on')";
            $execute_post = mysqli_query($this->Frequency(), $insert_post);
            if($execute_post){
                return true;
            }else{
                return false;
            }
        }

        public function getProfileImage($Email){
            $selectImage = "SELECT * FROM user_profile_image WHERE usr_email='$Email' AND status_image='1'";
            $executeImage = mysqli_query($this->Frequency(),$selectImage);
            $fetchImage = mysqli_fetch_assoc($executeImage); ?>
                <img src="<?php echo '../Images/profile-img/profile-image/'.$fetchImage['profile_image'] ?>" width="100%" height="100%">
        <?php }
    }

    // if request is to present more trainer
    // ===========================================================================================================
    // if(isset($_POST['present_trainer'])){
    //     $new_content = new Home_content($_POST['myMail']);
    //     $new_content->more_trainer();
    // }

    // if request is to present all agroups
    // ==========================================================================================================
    if(isset($_POST['request_all_groups'])){
        $new_content = new Home_content($_POST['request_all_groups']);
        $new_content->all_groups();
    }
    
    // if request is to save member joined
    // ===========================================================================================================
    if(isset($_POST['getGroup_identity'])){
        $new_content = new Home_content($_POST['getUser_email']);
        if($new_content->join_user ($_POST['getUser_email'], $_POST['getGroup_identity'])){
            $response = "joined";
        }else{
            $response = "join fail";
        }
        exit(json_encode($response));
    }

    // if request is to display all classes
    // ==============================================================================================================
    if(isset($_POST['getClasses'])){
        $new_content = new Home_content($_POST['getClasses']);
        $new_content->show_classes();
    }

    // if request is to save joined class
    // =============================================================================================================================
    if(isset($_POST['getClass_identity'])){
        $new_content = new Home_content($_POST['getUser']);
        $new_content->join_class($_POST['getUser'], $_POST['getClass_identity']);
    }

    // if request is to fetch new follow
    // ==============================================================================================================================
    if(isset($_POST['new_follow_user'])){
        $new_content = new Home_content($_POST['new_follow_user']);
        $new_content->new_follow();
    }

    // get inputted 
    // ==================================================================================
    if(isset($_POST['submit_file'])){
        $email_inputted = $_POST['inputted_email'];
        $caption_inputed = $_POST['user_caption'];
        $media_section_type = "feeds";
        
        $filename = 'IB_image'.time().'Box'.'--'.$_FILES['file_media']['name'];
        $file_size = $_FILES['file_media']['size'];

        $location = "../Images/activity_stream/".$filename;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);

        $valid_extensions = array("jpg","jpeg","png","mp4");

        if($_FILES['file_media']['name'] == ""){
            $empty = $_FILES['file_media']['name'];
            if($new_content->save_post($empty, "none", $caption_inputed, $email_inputted, $media_section_type)){
                header("location: index.php?success");
                exit();
            }else{
                header("location: index.php?fail");
                exit();
            }
        }else{
            // check extension
            if(!in_array(strtolower($imageFileType), $valid_extensions)) {
                header("location: index.php?extension");
                exit();
            }else{
                if(move_uploaded_file($_FILES['file_media']['tmp_name'],$location)){
                    $new_content = new Home_content($_POST['inputted_email']);
                    if($new_content->save_post($filename, $imageFileType, $caption_inputed, $email_inputted, $media_section_type)){
                        header("location: index.php?saved");
                        exit();
                    }else{
                        header("location: index.php?fail");
                        exit();
                    }
                }else{
                    header("location: index.php?move_fail");
                    exit();
                }
            }
        }
    }

    // if request is to display profile image
    // ========================================================================================================================================
    if(isset($_POST['getImage'])){
        $new_profile = new Home_content($_POST['getImage']);
        $new_profile->getProfileImage($_POST['getImage']);
    }
?>