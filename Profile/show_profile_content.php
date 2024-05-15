<?php 

    //  INITIALIZE AND MAKE CLASS CALLED SHOW FAMES
    // ================================================================================================================
    // ================================================================================================================

    // FIRST INCLUDE DATABASE CONNECTION
    // ===================================================================================================================
    include_once ("../Scyllar.php");
    include_once ("../Questions&Answers/question_answers.box.php");
    // ====================================================================================================================

    // INITIALIZE INTERFACE CALLED ROME
    // ====================================================================================================================
    interface Sky_Rome {
        public function show_departments ();
        public function all_photos ();
        public function nearBy_user();
        public function more_trainer();
        public function show_user_info();
        public function show_department_list();
        public function show_user_intro($location, $school, $dep, $level, $bithday, $contact,$gender);
        public function show_group();
        public function show_classes();
    }

    // CONFIGURE CLASS CALLED FAMES 
    // ========================================================================================================================
    class Fames extends Scyllar implements Sky_Rome {
        private $E_mail;

        // MAKE CONSTRUCTER
        // =====================================================
        public function __construct($mail){
            $this->E_mail = $mail;
        }

        function timeAgo($time_ago){
            $time_ago = strtotime($time_ago);
            $cur_time   = time();
            $time_elapsed   = $cur_time - $time_ago;
            $seconds    = $time_elapsed ;
            $minutes    = round($time_elapsed / 60 );
            $hours      = round($time_elapsed / 3600);
            $days       = round($time_elapsed / 86400 );
            $weeks      = round($time_elapsed / 604800);
            $months     = round($time_elapsed / 2600640 );
            $years      = round($time_elapsed / 31207680 );
            // Seconds
            if($seconds <= 60){return "just now";}
            //Minutes
            else if($minutes <=60){if($minutes==1){return "one minute ago";}else{return "$minutes minutes ago";}}
            //Hours
            else if($hours <=24){if($hours==1){return "an hour ago";}else{return "$hours hrs ago";}}
            //Days
            else if($days <= 7){if($days==1){return "yesterday";}else{return "$days days ago";}}
            //Weeks
            else if($weeks <= 4.3){if($weeks==1){return "a week ago";}else{return "$weeks weeks ago";}}
            //Months
            else if($months <=12){if($months==1){return "a month ago";}else{return "$months months ago";}}
            //Years
            else{if($years==1){return "one year ago";}else{return "$years years ago";}}
        }

        // SHOW DEPARTMES
        // ====================================================
        public function show_departments(){
            $select_departments = "SELECT * FROM departments WHERE department_name != 'Obscurity' LIMIT 1";
            $execute_departments = mysqli_query($this->Frequency(),$select_departments);
            while($fetch_departments = mysqli_fetch_assoc($execute_departments)){
                $department_img = $fetch_departments['department_img'];
                $department_name = $fetch_departments['department_name'];
                $department_bio = $fetch_departments['department_desc'];
                $department_course = $fetch_departments['department_course_count'];
                $department_identity = $fetch_departments['identity'];
                
                $learner = 0;
                $select_learner = "SELECT * FROM more_account_info WHERE Department='$department_name'";
                $execute_learner = mysqli_query($this->Frequency(), $select_learner);
                while($fetch_learner = mysqli_fetch_assoc($execute_learner)){
                    $learner = $learner + 1;
                } ?>
                    <!-- each department -->
                    <!-- ================================================================================================== -->
                    <div class="each-department justify-content-between">
                        <div class="dep_detail">
                            <div><div class="course-image">
                                <img src="<?php echo '../Images/Department/'.$department_img; ?>" alt="" width="100%" height="100%">
                            </div></div>
                            <div class="friend-section">
                                <div class="friend-name-course"><?php echo $department_name; ?></div>
                                <div class="friend-desc">
                                    <div class="course-bio"><?php echo $department_bio; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="course-count-desc d-flex justify-content-between">
                            <div class="learner mt-1"><i class="fa fa-user-circle-o mr-2"></i> <span><?php echo $learner; ?></span></div>
                            <div class="lessons mt-1"><i class="fa fa-graduation-cap"></i> <span><?php echo $department_course; ?></span></div>
                            <a href="<?php echo '../'.$department_name.'/'.$department_name.'.php?depElect='.$department_identity ?>" style="color: #041a2f">
                                <button class="follow-btn">Get started</button>
                            </a>
                        </div>
                    </div>
                    <!-- end each department -->
                    <!-- ================================================================================================== -->

            <?php }
        }

        // get all photos
        // =================================================================================================================================
        public function all_photos(){
            $select_all_photos = "SELECT * FROM user_profile_image WHERE usr_email='$this->E_mail' AND profile_image != 'defaultProfileImage.png'";
            $execute_photos = mysqli_query($this->Frequency(),$select_all_photos);
            if(mysqli_num_rows($execute_photos) > 0){
                $select_more_trainer = "SELECT * FROM intelligent_users WHERE email='$this->E_mail'";
                $execute_trainer = mysqli_query($this->Frequency(),$select_more_trainer);
                $fetch_trainer = mysqli_fetch_assoc($execute_trainer);
                    $getFirstname = $fetch_trainer['firstName'];
                    $getLastname = $fetch_trainer['lastName'];

                while($fetch_photos = mysqli_fetch_assoc($execute_photos)){?>
                    <a href="<?php echo '../Images/profile-img/profile-image/'. $fetch_photos['profile_image']; ?>" data-lightbox="mygallery" data-title="profile image of <?php echo $getFirstname; ?> <?php echo $getLastname?>"><div class="image-found"><img src="<?php echo '../Images/profile-img/profile-image/'. $fetch_photos['profile_image']; ?>" alt="" width="100%" height="100%"></div></a>
                <?php }
            }else{ ?>
                <div class="no-data-found d-flex flex-column text-center">
                    <img src="../Images/Illustrator_img/photos_1nui.png" alt="" width="100%">
                    <span>Update your profile photo to build your gallery</span>
                </div>
            <?php }
        }

        public function all_background_photos(){
            $select_all_photos = "SELECT * FROM user_profile_background_image WHERE user_email='$this->E_mail' AND background_image != 'user-default-background.png'";
            $execute_photos = mysqli_query($this->Frequency(),$select_all_photos);
            if(mysqli_num_rows($execute_photos) > 0){
                $select_more_trainer = "SELECT * FROM intelligent_users WHERE email='$this->E_mail'";
                $execute_trainer = mysqli_query($this->Frequency(),$select_more_trainer);
                $fetch_trainer = mysqli_fetch_assoc($execute_trainer);
                    $getFirstname = $fetch_trainer['firstName'];
                    $getLastname = $fetch_trainer['lastName'];

                while($fetch_photos = mysqli_fetch_assoc($execute_photos)){?>
                    <a href="<?php echo '../Images/profile-img/background-img/'. $fetch_photos['background_image']; ?>" data-lightbox="mygallery" data-title="background image of <?php echo $getFirstname; ?> <?php echo $getLastname?>"><div class="image-found"><img src="<?php echo '../Images/profile-img/background-img/'. $fetch_photos['background_image']; ?>" alt="background_image" width="100%" height="100%"></div></a>
                <?php }
            }else{ ?>
                <div class="no-data-found d-flex flex-column text-center">
                    <img src="../Images/Illustrator_img/background.png" alt="background image" width="100%">
                    <span>Update your background photo </span>
                </div>
            <?php }
        }


        // display nearby user
        // ==========================================================================================================================================
        public function nearBy_user(){
            // get user location
            // ===================
            $select_loaction = "SELECT location FROM user_auto_detection WHERE email='$this->E_mail'";
            $execute_location = mysqli_query($this->Frequency(), $select_loaction);
            $fetch_location = mysqli_fetch_assoc($execute_location);
                $location = $fetch_location['location'];

            $select_school = "SELECT * FROM more_account_info WHERE email='$this->E_mail'";
            $execute_school = mysqli_query($this->Frequency(), $select_school);
            $fetch_school = mysqli_fetch_assoc($execute_school);
                $school = $fetch_school['School'];
                $level = $fetch_school['level'];
                $date_of_birth = $fetch_school['date_of_birth'];
                $gender = $fetch_school['gender'];
                $department = $fetch_school['Department'];

            $select_last_option = "SELECT intelligent_users.email,user_auto_detection.email FROM intelligent_users INNER JOIN user_auto_detection on intelligent_users.email = user_auto_detection.email and user_auto_detection.location = '$location' AND user_auto_detection.email != '$this->E_mail' AND intelligent_users.email NOT IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email = '$this->E_mail') AND intelligent_users.email NOT IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$this->E_mail') AND intelligent_users.title != 'trainer'";
            // $select_last_option = "SELECT * FROM user_auto_detection WHERE email NOT IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$this->E_mail') AND email NOT IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$this->E_mail') AND email != '$this->E_mail' AND location = '$location'"; 
            $execute_last_option = mysqli_query($this->Frequency(), $select_last_option);
            if(mysqli_num_rows($execute_last_option) > 5){
                while($fetch_nearby = mysqli_fetch_assoc($execute_last_option)){
                    $Email = $fetch_nearby['email'];

                    $select_info = "SELECT * FROM intelligent_users WHERE email = '$Email'";
                    $execute_info = mysqli_query($this->Frequency(), $select_info);
                    $fetch_info = mysqli_fetch_assoc($execute_info);

                        $usr_firstname = $fetch_info['firstName'];
                        $usr_lastname = $fetch_info['lastName'];
                        $usr_email = $fetch_info['email'];
                        $getIdentity = $fetch_info['identity'];
                        $user_title = $fetch_info["title"];

                    $select_bio = "SELECT * FROM user_bio WHERE email = '$usr_email'";
                    $execute_bio = mysqli_query($this->Frequency(), $select_bio);
                    $fetch_bio = mysqli_fetch_assoc($execute_bio);
                        $bio = $fetch_bio['bio'];

                    $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$usr_email' AND status_image='1'";
                    $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                    $fetch_image = mysqli_fetch_assoc($execute_image); ?>
            
                    <!-- each near user -->
                    <!-- ============================================================================================================================== -->
                    <div class="position-relative">
                        <div class="each-user">
                            <div class="friend-section_friends justify-content-between">
                                <div class="middle_detail">
                                    <div onmouseover="about_user(this)" onmouseout="about_user(this)">
                                        <div class="friend-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt=""></div>
                                    </div>
                                    <div class="friend-name ml-2 mt-1">
                                        <div><?php echo $usr_firstname; ?> <?php echo $usr_lastname; ?> <span class="ero_title">@<?php echo $user_title; ?></span></div>
                                        <div><?php echo $usr_email; ?></div>
                                    </div>
                                </div>
                                <div class="btn-follow ml-2">
                                    <button id="<?php echo $usr_email; ?>" class="follow-btn"  onclick="followUser(this)">follow</button>
                                </div>
                            </div>
                        </div>
                        <!-- about user -->
                        <div class="about-usr">
                            <div class="about-specification">
                                <div><div class="user-about-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%"></div></div>
                                <div class="activity-status">
                                    <?php 
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
                                        $selectCourse = "SELECT * FROM class_tracks WHERE student_identity='$getIdentity'";
                                        $executeCourse = mysqli_query($this->Frequency(),$selectCourse);
                                        while($fetch_course = mysqli_fetch_assoc($executeCourse)){
                                            $courses = $courses + 1;
                                        }
                                    ?>
                                    <div class="followers">followers <span><?php echo $followers; ?></span></div>
                                    <div class="following">Following <span><?php echo $Following; ?></span></div>
                                    <div class="trainer">Courses <span><?php echo $courses; ?></span></div>
                                </div>
                            </div>
                            <div class="about-info">
                                <div class="firstname"><span><?php echo $usr_firstname; ?> <?php echo $usr_lastname; ?></span> <span class="ero_title">@<?php echo $user_title; ?></span></div>
                                <div class="email"><span><?php echo $usr_email; ?></span></div>
                                <div class="department"><span><?php echo $bio; ?></span></div>
                                <!-- <div class="schools">world mission school</div> -->
                            </div>
                        </div>
                        <!-- end about user -->
                    </div>
                    <!-- end each near user -->
                    <!-- ================================================================================================================================= -->
            <?php }
            }else{
                $select_last_option = "SELECT intelligent_users.email,more_account_info.email FROM intelligent_users INNER JOIN more_account_info ON intelligent_users.email = more_account_info.email AND more_account_info.Department = '$department' AND intelligent_users.email NOT IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email = '$this->E_mail') AND intelligent_users.email NOT IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$this->E_mail') AND intelligent_users.title = 'student' AND intelligent_users.email != '$this->E_mail'";
                $execute_last_option = mysqli_query($this->Frequency(), $select_last_option);
                if(mysqli_num_rows($execute_last_option) > 5){
                    while($fetch_nearby = mysqli_fetch_assoc($execute_last_option)){
                        $Email = $fetch_nearby['email'];
    
                        $select_info = "SELECT * FROM intelligent_users WHERE email = '$Email'";
                        $execute_info = mysqli_query($this->Frequency(), $select_info);
                        $fetch_info = mysqli_fetch_assoc($execute_info);
    
                            $usr_firstname = $fetch_info['firstName'];
                            $usr_lastname = $fetch_info['lastName'];
                            $usr_email = $fetch_info['email'];
                            $getIdentity = $fetch_info['identity'];
                            $user_title = $fetch_info["title"];
    
                        $select_bio = "SELECT * FROM user_bio WHERE email = '$usr_email'";
                        $execute_bio = mysqli_query($this->Frequency(), $select_bio);
                        $fetch_bio = mysqli_fetch_assoc($execute_bio);
                            $bio = $fetch_bio['bio'];
    
                        $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$usr_email' AND status_image='1'";
                        $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                        $fetch_image = mysqli_fetch_assoc($execute_image); ?>
                
                        <!-- each near user -->
                        <!-- ============================================================================================================================== -->
                        <div class="position-relative">
                            <div class="each-user">
                                <div class="friend-section_friends justify-content-between">
                                    <div class="middle_detail">
                                        <div onmouseover="about_user(this)" onmouseout="about_user(this)">
                                            <div class="friend-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt=""></div>
                                        </div>
                                        <div class="friend-name ml-2 mt-1">
                                            <div><?php echo $usr_firstname; ?> <?php echo $usr_lastname; ?> <span class="ero_title">@<?php echo $user_title; ?></span></div>
                                            <div><?php echo $usr_email; ?></div>
                                        </div>
                                    </div>
                                    <div class="btn-follow ml-2">
                                        <button id="<?php echo $usr_email; ?>" class="follow-btn" onclick="followUser(this)">follow</button>
                                    </div>
                                </div>
                            </div>
                            <!-- about user -->
                            <div class="about-usr">
                                <div class="about-specification">
                                    <div><div class="user-about-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%"></div></div>
                                    <div class="activity-status">
                                        <?php 
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
                                            $selectCourse = "SELECT * FROM class_tracks WHERE student_identity='$getIdentity'";
                                            $executeCourse = mysqli_query($this->Frequency(),$selectCourse);
                                            while($fetch_course = mysqli_fetch_assoc($executeCourse)){
                                                $courses = $courses + 1;
                                            }
                                        ?>
                                        <div class="followers">followers <span><?php echo $followers; ?></span></div>
                                        <div class="following">Following <span><?php echo $Following; ?></span></div>
                                        <div class="trainer">Courses <span><?php echo $courses; ?></span></div>
                                    </div>
                                </div>
                                <div class="about-info">
                                    <div class="firstname"><span><?php echo $usr_firstname; ?> <?php echo $usr_lastname; ?></span> <span class="ero_title">@<?php echo $user_title; ?></span></div>
                                    <div class="email"><span><?php echo $usr_email; ?></span></div>
                                    <div class="department"><span><?php echo $bio; ?></span></div>
                                    <!-- <div class="schools">world mission school</div> -->
                                </div>
                            </div>
                            <!-- end about user -->
                        </div>
                        <!-- end each near user -->
                        <!-- ================================================================================================================================= -->
              <?php }
                }else{
                    $select_last_option = "SELECT intelligent_users.email,more_account_info.email FROM intelligent_users INNER JOIN more_account_info ON intelligent_users.email = more_account_info.email AND more_account_info.Department = '$department' AND intelligent_users.email NOT IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email = '$this->E_mail') AND intelligent_users.email NOT IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$this->E_mail') AND intelligent_users.title = 'student' AND intelligent_users.email != '$this->E_mail'";
                    $execute_last_option = mysqli_query($this->Frequency(), $select_last_option);
                    if(mysqli_num_rows($execute_last_option) > 5){
                        while($fetch_nearby = mysqli_fetch_assoc($execute_last_option)){
                            $Email = $fetch_nearby['email'];
        
                            $select_info = "SELECT * FROM intelligent_users WHERE email = '$Email'";
                            $execute_info = mysqli_query($this->Frequency(), $select_info);
                            $fetch_info = mysqli_fetch_assoc($execute_info);
        
                                $usr_firstname = $fetch_info['firstName'];
                                $usr_lastname = $fetch_info['lastName'];
                                $usr_email = $fetch_info['email'];
                                $getIdentity = $fetch_info['identity'];
                                $user_title = $fetch_info["title"];
        
                            $select_bio = "SELECT * FROM user_bio WHERE email = '$usr_email'";
                            $execute_bio = mysqli_query($this->Frequency(), $select_bio);
                            $fetch_bio = mysqli_fetch_assoc($execute_bio);
                                $bio = $fetch_bio['bio'];
        
                            $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$usr_email' AND status_image='1'";
                            $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                            $fetch_image = mysqli_fetch_assoc($execute_image); ?>
                    
                            <!-- each near user -->
                            <!-- ============================================================================================================================== -->
                            <div class="position-relative">
                                <div class="each-user">
                                    <div class="friend-section_friends justify-content-between">
                                        <div class="middle_detail">
                                            <div onmouseover="about_user(this)" onmouseout="about_user(this)">
                                                <div class="friend-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt=""></div>
                                            </div>
                                            <div class="friend-name ml-2 mt-1">
                                                <div><?php echo $usr_firstname; ?> <?php echo $usr_lastname; ?> <span class="ero_title">@<?php echo $user_title; ?></span></div>
                                                <div><?php echo $usr_email; ?></div>
                                            </div>
                                        </div>
                                        <div class="btn-follow ml-2">
                                            <button id="<?php echo $usr_email; ?>" class="follow-btn"  onclick="followUser(this)">follow</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- about user -->
                                <div class="about-usr">
                                    <div class="about-specification">
                                        <div><div class="user-about-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%"></div></div>
                                        <div class="activity-status">
                                            <?php 
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
                                                $selectCourse = "SELECT * FROM class_tracks WHERE student_identity='$getIdentity'";
                                                $executeCourse = mysqli_query($this->Frequency(),$selectCourse);
                                                while($fetch_course = mysqli_fetch_assoc($executeCourse)){
                                                    $courses = $courses + 1;
                                                }
                                            ?>
                                            <div class="followers">followers <span><?php echo $followers; ?></span></div>
                                            <div class="following">Following <span><?php echo $Following; ?></span></div>
                                            <div class="trainer">Courses <span><?php echo $courses; ?></span></div>
                                        </div>
                                    </div>
                                    <div class="about-info">
                                        <div class="firstname"><span><?php echo $usr_firstname; ?> <?php echo $usr_lastname; ?></span> <span class="ero_title">@<?php echo $user_title; ?></span></div>
                                        <div class="email"><span><?php echo $usr_email; ?></span></div>
                                        <div class="department"><span><?php echo $bio; ?></span></div>
                                        <!-- <div class="schools">world mission school</div> -->
                                    </div>
                                </div>
                                <!-- end about user -->
                            </div>
                            <!-- end each near user -->
                            <!-- ================================================================================================================================= -->
                  <?php }
                    }else{
                        $select_last_option = "SELECT * FROM intelligent_users WHERE email NOT IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$this->E_mail') AND email NOT IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$this->E_mail') AND email != '$this->E_mail' AND title='student' AND Verified='complete' LIMIT 3";
                        $execute_last_option = mysqli_query($this->Frequency(), $select_last_option);
                        while($fetch_nearby = mysqli_fetch_assoc($execute_last_option)){
                            $usr_firstname = $fetch_nearby['firstName'];
                            $usr_lastname = $fetch_nearby['lastName'];
                            $usr_email = $fetch_nearby['email'];
                            $getIdentity = $fetch_nearby['identity'];
                            $user_title = $fetch_nearby["title"];

                            $select_bio = "SELECT * FROM user_bio WHERE email = '$usr_email'";
                            $execute_bio = mysqli_query($this->Frequency(), $select_bio);
                            $fetch_bio = mysqli_fetch_assoc($execute_bio);
                                $bio = $fetch_bio['bio'];

                            $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$usr_email' AND status_image='1'";
                            $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                            $fetch_image = mysqli_fetch_assoc($execute_image); ?>
                
                            <!-- each near user -->
                            <!-- ============================================================================================================================== -->
                            <div class="position-relative">
                                <div class="each-user">
                                    <div class="friend-section_friends justify-content-between">
                                        <div class="middle_detail">
                                            <div onmouseover="about_user(this)" onmouseout="about_user(this)">
                                                <div class="friend-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt=""></div>
                                            </div>
                                            <div class="friend-name ml-2 mt-1">
                                                <div><?php echo $usr_firstname; ?> <?php echo $usr_lastname; ?> <span class="ero_title">@<?php echo $user_title; ?></span></div>
                                                <div><?php echo $usr_email; ?></div>
                                            </div>
                                        </div>
                                        <div class="btn-follow ml-2">
                                            <button id="<?php echo $usr_email; ?>" class="follow-btn" onclick="followUser(this)">follow</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- about user -->
                                <div class="about-usr">
                                    <div class="about-specification">
                                        <div><div class="user-about-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%"></div></div>
                                        <div class="activity-status">
                                            <?php 
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
                                                $selectCourse = "SELECT * FROM class_tracks WHERE student_identity='$getIdentity'";
                                                $executeCourse = mysqli_query($this->Frequency(),$selectCourse);
                                                while($fetch_course = mysqli_fetch_assoc($executeCourse)){
                                                    $courses = $courses + 1;
                                                }
                                            ?>
                                            <div class="followers">followers <span><?php echo $followers; ?></span></div>
                                            <div class="following">Following <span><?php echo $Following; ?></span></div>
                                            <div class="trainer">Courses <span><?php echo $courses; ?></span></div>
                                        </div>
                                    </div>
                                    <div class="about-info">
                                        <div class="firstname"><span><?php echo $usr_firstname; ?> <?php echo $usr_lastname; ?></span><span class="ero_title">@<?php echo $user_title; ?></span>m</div>
                                        <div class="email"><span><?php echo $usr_email; ?></span></div>
                                        <div class="department"><span><?php echo $bio; ?></span></div>
                                        <!-- <div class="schools">world mission school</div> -->
                                    </div>
                                </div>
                                <!-- end about user -->
                            </div>
                            <!-- end each near user -->
                            <!-- ================================================================================================================================= -->
                <?php }
                    }
                }
            }
        }


        // show more trainer
        // ===================================================================================================================================================
        public function more_trainer(){
            // get user worker
            // ========================================================================================
            $select_loaction = "SELECT location FROM user_auto_detection WHERE email='$this->E_mail'";
            $execute_location = mysqli_query($this->Frequency(), $select_loaction);
            $fetch_location = mysqli_fetch_assoc($execute_location);
                $location = $fetch_location['location'];

            $select_school = "SELECT * FROM more_account_info WHERE email='$this->E_mail'";
            $execute_school = mysqli_query($this->Frequency(), $select_school);
            $fetch_school = mysqli_fetch_assoc($execute_school);
                $school = $fetch_school['School'];
                $level = $fetch_school['level'];
                $date_of_birth = $fetch_school['date_of_birth'];
                $gender = $fetch_school['gender'];
                $department = $fetch_school['Department'];

            $select_more_trainer = "SELECT intelligent_users.email,user_auto_detection.email FROM intelligent_users INNER JOIN user_auto_detection on intelligent_users.email = user_auto_detection.email and user_auto_detection.location = '$location' AND user_auto_detection.email != '$this->E_mail' AND intelligent_users.email NOT IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email = '$this->E_mail') AND intelligent_users.email NOT IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$this->E_mail') AND intelligent_users.title = 'trainer'";    
            // $select_more_trainer = "SELECT * FROM intelligent_users WHERE email NOT IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$this->E_mail') AND email NOT IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$this->E_mail') AND email != '$this->E_mail' AND title='trainer' AND Verified='complete' LIMIT 10";
            $execute_trainer = mysqli_query($this->Frequency(),$select_more_trainer);
            if(mysqli_num_rows($execute_trainer) > 5){
                while($fetch_trainer = mysqli_fetch_assoc($execute_trainer)){
                    $getmail = $fetch_trainer['email'];

                    $select_info = "SELECT * FROM intelligent_users WHERE email = '$getmail'";
                    $execute_info = mysqli_query($this->Frequency(), $select_info);
                    $fetch_info = mysqli_fetch_assoc($execute_info);
                        $getFirstname = $fetch_info['firstName'];
                        $getLastname = $fetch_info['lastName'];
                        $getEmail = $fetch_info['email'];
                        $getIdentity = $fetch_info['identity'];

                    $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$getEmail' AND status_image='1'";
                    $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                    $fetch_image = mysqli_fetch_assoc($execute_image);

                    $followers = 0;
                    $selectFollowers = "SELECT * FROM user_follow_board WHERE reciever_email='$getEmail'";
                    $executeFollowers = mysqli_query($this->Frequency(),$selectFollowers);
                    while($fetchFollowers = mysqli_fetch_assoc($executeFollowers)){
                        $followers = $followers + 1;
                    }

                    $gestBackgroundImage = "SELECT background_image FROM user_profile_background_image WHERE user_email='$getEmail' AND background_status='on'";
                    $execute_background_image = mysqli_query($this->Frequency(), $gestBackgroundImage);
                    $fetch_background_image = mysqli_fetch_assoc($execute_background_image); ?>

                    <!-- each trainer -->
                    <!-- =============================================================================================== -->
                    <div class="each-trainer-sec">
                        <div class="trainer-background-pre"><div class="image-trainer-sec">
                            <img src="<?php echo '../Images/profile-img/background-img/'.$fetch_background_image['background_image'] ?>" alt="" width="100%" height="100%">
                            <button id="<?php echo $getEmail; ?>" class="Follow-trainers" onclick="followUser(this)">Follow</button>
                        </div></div>
                        <div class="trainer-pre-detail">
                            <div class="image-pre-trainer"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image'] ?>" alt="" width="100%" height="100%"></div>
                            <div class="">
                                <div class="name-trainer"><?php echo $getFirstname; ?> <?php echo $getLastname; ?></div>
                                <div class="trainer-title">@Trainer, <?php echo $followers; ?> Followers</div>
                                <div class="email-trainer"><?php echo $getEmail; ?></div>
                            </div>
                        </div>
                    </div>
                    <!-- end each trainer -->
                    <!-- =========================================================================================================== -->

                <?php }
            }else{
                $select_more_trainer = "SELECT intelligent_users.email,more_account_info.email FROM intelligent_users INNER JOIN more_account_info ON intelligent_users.email = more_account_info.email AND more_account_info.Department = '$department' AND intelligent_users.email NOT IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email = '$this->E_mail') AND intelligent_users.email NOT IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$this->E_mail') AND intelligent_users.title = 'trainer' AND intelligent_users.email != '$this->E_mail'";
                $execute_trainer = mysqli_query($this->Frequency(),$select_more_trainer);
                if(mysqli_num_rows($execute_trainer) > 7){
                    while($fetch_trainer = mysqli_fetch_assoc($execute_trainer)){
                        $getmail = $fetch_trainer['email'];

                        $select_info = "SELECT * FROM intelligent_users WHERE email = '$getmail'";
                        $execute_info = mysqli_query($this->Frequency(), $select_info);
                        $fetch_info = mysqli_fetch_assoc($execute_info);
                            $getFirstname = $fetch_info['firstName'];
                            $getLastname = $fetch_info['lastName'];
                            $getEmail = $fetch_info['email'];
                            $getIdentity = $fetch_info['identity'];

                        $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$getEmail' AND status_image='1'";
                        $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                        $fetch_image = mysqli_fetch_assoc($execute_image);

                        $followers = 0;
                        $selectFollowers = "SELECT * FROM user_follow_board WHERE reciever_email='$getEmail'";
                        $executeFollowers = mysqli_query($this->Frequency(),$selectFollowers);
                        while($fetchFollowers = mysqli_fetch_assoc($executeFollowers)){
                            $followers = $followers + 1;
                        }

                        $gestBackgroundImage = "SELECT background_image FROM user_profile_background_image WHERE user_email='$getEmail' AND background_status='on'";
                        $execute_background_image = mysqli_query($this->Frequency(), $gestBackgroundImage);
                        $fetch_background_image = mysqli_fetch_assoc($execute_background_image); ?>

                        <!-- each trainer -->
                        <!-- =============================================================================================== -->
                        <div class="each-trainer-sec">
                            <div class="trainer-background-pre"><div class="image-trainer-sec">
                                <img src="<?php echo '../Images/profile-img/background-img/'.$fetch_background_image['background_image'] ?>" alt="" width="100%" height="100%">
                                <button id="<?php echo $getEmail; ?>" class="Follow-trainers" onclick="followUser(this)">Follow</button>
                            </div></div>
                            <div class="trainer-pre-detail">
                                <div class="image-pre-trainer"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image'] ?>" alt="" width="100%" height="100%"></div>
                                <div class="">
                                    <div class="name-trainer"><?php echo $getFirstname; ?> <?php echo $getLastname; ?></div>
                                    <div class="trainer-title">@Trainer, <?php echo $followers; ?> Followers</div>
                                    <div class="email-trainer"><?php echo $getEmail; ?></div>
                                </div>
                            </div>
                        </div>
                        <!-- end each trainer -->
                        <!-- =========================================================================================================== -->

                    <?php }
                }else{
                    $select_more_trainer = "SELECT * FROM intelligent_users WHERE email NOT IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$this->E_mail') AND email NOT IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$this->E_mail') AND email != '$this->E_mail' AND title='trainer' AND Verified='complete' LIMIT 10";
                    $execute_trainer = mysqli_query($this->Frequency(),$select_more_trainer);
                    while($fetch_trainer = mysqli_fetch_assoc($execute_trainer)){
                        $getFirstname = $fetch_trainer['firstName'];
                        $getLastname = $fetch_trainer['lastName'];
                        $getEmail = $fetch_trainer['email'];
                        $getIdentity = $fetch_trainer['identity'];

                        $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$getEmail' AND status_image='1'";
                        $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                        $fetch_image = mysqli_fetch_assoc($execute_image);

                        $followers = 0;
                        $selectFollowers = "SELECT * FROM user_follow_board WHERE reciever_email='$getEmail'";
                        $executeFollowers = mysqli_query($this->Frequency(),$selectFollowers);
                        while($fetchFollowers = mysqli_fetch_assoc($executeFollowers)){
                            $followers = $followers + 1;
                        }

                        $gestBackgroundImage = "SELECT background_image FROM user_profile_background_image WHERE user_email='$getEmail' AND background_status='on'";
                        $execute_background_image = mysqli_query($this->Frequency(), $gestBackgroundImage);
                        $fetch_background_image = mysqli_fetch_assoc($execute_background_image); ?>

                        <!-- each trainer -->
                        <!-- =============================================================================================== -->
                        <div class="each-trainer-sec">
                            <div class="trainer-background-pre"><div class="image-trainer-sec">
                                <img src="<?php echo '../Images/profile-img/background-img/'.$fetch_background_image['background_image'] ?>" alt="" width="100%" height="100%">
                                <button id="<?php echo $getEmail; ?>" class="Follow-trainers" onclick="followUser(this)">Follow</button>
                            </div></div>
                            <div class="trainer-pre-detail">
                                <div class="image-pre-trainer"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image'] ?>" alt="" width="100%" height="100%"></div>
                                <div class="">
                                    <div class="name-trainer"><?php echo $getFirstname; ?> <?php echo $getLastname; ?></div>
                                    <div class="trainer-title">@Trainer, <?php echo $followers; ?> Followers</div>
                                    <div class="email-trainer"><?php echo $getEmail; ?></div>
                                </div>
                            </div>
                        </div>
                        <!-- end each trainer -->
                        <!-- =========================================================================================================== -->
                    <?php }
                }
            }
        }

        // FETCH ALL DEPARTMENT AS LIST
        // =======================================================================================================================
        public function show_department_list(){
            $select_department = "SELECT * FROM departments";
            $execute_department = mysqli_query($this->Frequency(), $select_department);
            while($fetch_departments = mysqli_fetch_assoc($execute_department)){?>
                <option value="<?php echo $fetch_departments['department_name']; ?>"><?php echo $fetch_departments['department_name']; ?></option>
            <?php }
        }

        public function all_countries(){ ?>
            <!--  THE LIST OF ALL COUNTRY -->
            <option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option>
            <option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Australia">Australia</option><option value="Austria">Austria</option>
            <option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option>
            <option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bhutan">Bhutan</option>
            <option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option>
            <option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Côte d'Ivoire">Côte d'Ivoire</option><option value="Cabo Verde">Cabo Verde</option>
            <option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option>
            <option value="Chile">Chile</option><option value="China">China</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
            <option value="Costa Rica">Costa Rica</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czechia (Czech Republic)">Czechia (Czech Republic)</option>
            <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option>
            <option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option>
            <option value="Estonia">Estonia</option><option value="Eswatini (fmr. 'Swaziland')">Eswatini (fmr. "Swaziland")</option><option value="	Ethiopia">Ethiopia</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option>
            <option value="France">France</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option>
            <option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option>
            <option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Holy See">Holy See</option><option value="Honduras">Honduras</option>
            <option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option>
            <option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option>
            <option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option>
            <option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Madagascar">Madagascar</option>
            <option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option>
            <option value="Marshall Islands">Marshall Islands</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option>
            <option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Morocco">Morocco</option>
            <option value="Mozambique">Mozambique</option><option value="Myanmar (formerly Burma)">Myanmar (formerly Burma)</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option>
            <option value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option>
            <option value="North Korea">North Korea</option><option value="North Macedonia">North Macedonia</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option>
            <option value="Palau">Palau</option><option value="Palestine State">Palestine State</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Qatar">Qatar</option>
            <option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option>
            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option>
            <option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option>
            <option value="South Korea">South Korea</option><option value="South Sudan">South Sudan</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option>
            <option value="Suriname">Suriname</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Tajikistan">Tajikistan</option>
            <option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option>
            <option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option>
            <option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States of America">United States of America</option>
            <option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
        <!-- END LIST OF COUNTRY -->
        <?php }

        public function show_user_info(){
            $check_if_exist = "SELECT * FROM more_account_info WHERE email='$this->E_mail'";
            $excute_check = mysqli_query($this->Frequency(), $check_if_exist);
            if(mysqli_num_rows($excute_check) > 0){
               $fetch_info = mysqli_fetch_assoc($excute_check);

               $school = $fetch_info['School'];
               $Department = $fetch_info['Department'];
               $level = $fetch_info['level'];
               $contact = $fetch_info['contact'];
               $date_of_birth = $fetch_info['date_of_birth'];
               $gender = $fetch_info['gender']; ?>
                <!-- user intoduction -->
                <!-- ================================================================================================== -->
                <div class="user-into">
                    <div class="user-school"><i class="fa fa-graduation-cap mr-1"></i><?php echo $school; ?></div>
                    <div class="email"><?php echo $Department; ?></div>
                    <div class="email">Level <span><?php echo $level; ?></span></div>
                    <div class="email"><i class="fa fa-birthday-cake mr-1"></i><?php echo $date_of_birth; ?></div>
                    <div class="email"><i class="fa fa-phone mr-1"></i><?php echo $contact; ?></div>
                    <div class="email"><i class="fa <?php if($gender == "Male"){echo "fa-male";}else{echo "fa-female";}?> mr-1"></i><?php echo $gender ?></div>
                </div>
                <!-- end user introduction -->
                <!-- =================================================================================================== -->
            <?php }else{ ?>
                <div class="user_add_info">
                    <div class="title-setup mb-3">Setup more custom account Information</div>
                    <div class="set setup_level" id="set_up_location">
                        <select name="" id="location_set">
                            <script>
                                location_set();
                                function location_set(){
                                    $(document).ready(function(){
                                        var email = document.getElementById("hiddenEmail").value;
                                        $("#location_set").load("show_profile_content.php", {
                                            get_option_loaction: email
                                        });
                                    });
                                }
                            </script>
                        </select>
                    </div>
                    <div class="set setup_school" id="setup_school"><input type="text" name="school" id="set_school"  placeholder="School name" autocomplete="off"></div>
                    <div class="set setup_contact" id="setup_contact"><input type="text" name="contact" id="set_contact" placeholder="Contacts +code 0000000000" autocomplete="off"></div>
                    <div class="set setup_trade" id="setup_trade">
                        <select name="trade" id="set_trade">
                            <?php 
                              $select_department = "SELECT * FROM departments";
                              $execute_department = mysqli_query($this->Frequency(), $select_department);
                              while($fetch_departments = mysqli_fetch_assoc($execute_department)){?>
                                  <option value="<?php echo $fetch_departments['department_name']; ?>"><?php echo $fetch_departments['department_name']; ?></option>
                              <?php }
                            ?>
                        </select>
                    </div>
                    <div class="datepicker-container">
                        <div class="set setup_dateof_birth" id="setup_dateof_birth">
                            <input type="date" name="dob" class="date-picker" id="set_dob" min='04/24/1950' max='04/07/2020' data-datepicker-color="success" id="datepicker" placeholder="Birthday d/m/y" autocomplete="off">
                        </div>
                    </div>
                    <div class="set setup_contact"><select name="gender" id="gender">
                        <option value="male">Male</option>
                        <option value="Female">Female</option>
                    </select></div>
                    <div class="set setup_level" id="setup_level">
                        <select name="level" id="set_level">
                            <option value="Three">Level 3</option>
                            <option value="Four">Level 4</option>
                            <option value="Five">Level 5</option>
                        </select>
                    </div>
                    <div class="set setup_btn"><button class="set_up_btn" onclick="submit_Moreinfo(this)">Set up</button></div>
                </div>
            <?php }
        }

        // HOW TOP USER INTO AND USER CAN SETUP MORE ACCOUNT INFO
        // =========================================================================================================================
        public function show_user_intro($location, $school, $dep, $level, $bithday, $contact,$gender){
            $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$this->E_mail'";
            $execute_info = mysqli_query($this->Frequency(), $select_basic_info);
            $fetch_info = mysqli_fetch_assoc($execute_info);
                $firstname = $fetch_info['firstName'];
                $lastName = $fetch_info['lastName'];
                $created = date("Y-m-d h:m:s");

            // then insert/save info
            // ==========================================================
            $save_info = "INSERT INTO more_account_info VALUE ('','$this->E_mail','$school','$dep','$level','$contact','$location','Enabled','$bithday','$gender','$created')";
            $execute_saving = mysqli_query($this->Frequency(), $save_info);
        }


        // SHOW ALL MY TRAINER 
        // ========================================================================================================================================
        public function show_my_trainers($email){
              $select_my_trainers = "SELECT * FROM user_follow_board WHERE host_email='$email' OR reciever_email='$email'";
            //   $select_my_trainers = "SELECT * FROM intelligent_users WHERE email IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email ='$email') OR email IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$email') AND title='trainer'";
              $execute_my_trainer = mysqli_query($this->Frequency(), $select_my_trainers);
              if(mysqli_num_rows($execute_my_trainer) > 0){
                while($fetch_my_trainer = mysqli_fetch_assoc($execute_my_trainer)){
                    $host_email = $fetch_my_trainer['host_email'];
                    $host_title = $fetch_my_trainer['host_title'];

                    $reciever_email = $fetch_my_trainer['reciever_email'];
                    $reciever_title = $fetch_my_trainer['reciever_title'];

                    if($host_title == "trainer" && $reciever_email == $email){
                        $select_trainer_info = "SELECT * FROM intelligent_users WHERE email='$host_email'";
                        $execute_host = mysqli_query($this->Frequency(), $select_trainer_info);
                        $fetch_host = mysqli_fetch_assoc($execute_host);
                            $firstname_trainer = $fetch_host['firstName'];
                            $lastName = $fetch_host['lastName'];
                            $email_trainer = $fetch_host['email'];
                            $user_identity = $fetch_host['identity'];
      
                        $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$host_email' AND status_image='1'";
                        $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                        $fetch_image = mysqli_fetch_assoc($execute_image); 
      
                        $select_bio = "SELECT bio FROM user_bio WHERE email='$host_email'";
                        $execute_bio = mysqli_query($this->Frequency(), $select_bio);
                        $fetch_bio = mysqli_fetch_assoc($execute_bio); 
      
                        $followers = 0;
                        $selectFollowers = "SELECT * FROM user_follow_board WHERE reciever_email='$host_email'";
                        $executeFollowers = mysqli_query($this->Frequency(),$selectFollowers);
                        while($fetchFollowers = mysqli_fetch_assoc($executeFollowers)){
                            $followers = $followers + 1;
                        }
      
                        $Following = 0;
                        $selectFollowing = "SELECT * FROM user_follow_board WHERE host_email='$host_email'";
                        $execute_following = mysqli_query($this->Frequency(),$selectFollowing);
                        while($fetchFollowing = mysqli_fetch_assoc($execute_following)){
                            $Following = $Following + 1;
                        }
      
                        $courses = 0;
                        $selectCourse = "SELECT * FROM class_tracks WHERE student_identity='$user_identity'";
                        $executeCourse = mysqli_query($this->Frequency(),$selectCourse);
                        while($fetch_course = mysqli_fetch_assoc($executeCourse)){
                            $courses = $courses + 1;
                        } ?>
                        <!-- each trainer -->
                        <!-- ============================================================================================================ -->
                        <div class="each-trainer">
                            <div class="trainers d-flex position-relative">
                                <div><div class="tariner-img"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%"></div></div>
                                <div class="trainer-desc ml-2">
                                    <div class="trainer-name"><?php echo $firstname_trainer; ?> <?php echo $lastName; ?></div>
                                    <div class="trainer-email"><?php echo $email_trainer; ?></div>
                                    <div class="trainer-bio mt-1"> <?php echo $fetch_bio['bio']; ?> </div>
                                    <div class="trainer-status d-flex justify-content-between">
                                        <div class="followers"><?php echo $followers; ?> Followers </div>
                                        <div class="followers ml-2"><?php echo $Following; ?> following </div>
                                        <div class="course ml-2"><?php echo $courses; ?> courses</div>
                                    </div>
                                </div>
                                <div class="btn-get-trainer ml-3">
                                    <button class="ask" onclick="askQuestion(this)"><i class="fa fa-question-circle-o"></i></button>
                                </div>
                            </div>
                            <!-- by the time user want to ask trainer -->
                            <div class="ask-question">
                                <div class="title-question">
                                    <div>question with <?php echo $firstname_trainer; ?> <?php echo $lastName; ?></div>
                                    <div class="close-question"><i class="fa fa-close" onclick="closeTabs(this)"></i></div>
                                </div>
                                <form action="profile_updates.php" method="POST" enctype="multipart/form-data">
                                    <div class="question-area-image">
                                        <div class="preview-image-question" id="preview_que_image">
                                            <img src="" id="preview_image" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="type-question ml-2">
                                            <div class="textarea-question"><textarea name="que_provided" id="" cols="30" rows="5" placeholder="Type question" autocomplete="off"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="send-question mt-2 d-flex justify-content-between">
                                        <input type="hidden" name="trainer_email" value="<?php echo $email_trainer; ?>">
                                        <input type="hidden" name="my_email_in" value="<?php echo $email; ?>">
                                        <input type="file" name="que_image" id="question_image" style="display: none;">
                                        <div class="with-photo"><button type="button" onclick="support_image(this)"><i class="fa fa-image mr-2"></i> with image</button></div>
                                        <div class="send" id="<?php echo $email_trainer; ?>"><button type="submit" name="submit_trainer_que" id="<?php echo $user_identity; ?>" onclick="submit_que_trainer(this)">send</button></div>
                                    </div>
                                </form>
                            </div>
                            <!-- end asking question -->
                        </div>
                        <!-- end each trainer -->
                        <!-- =================================================================================================================================== -->
                    <?php }else if($reciever_title == "trainer" && $host_email == $email){
                        $select_trainer_info = "SELECT * FROM intelligent_users WHERE email='$reciever_email'";
                        $execute_host = mysqli_query($this->Frequency(), $select_trainer_info);
                        $fetch_reciever = mysqli_fetch_assoc($execute_host);
                            $firstname_trainer = $fetch_reciever['firstName'];
                            $lastName = $fetch_reciever['lastName'];
                            $email_trainer = $fetch_reciever['email'];
                            $user_identity = $fetch_reciever['identity'];
       
                        $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$reciever_email' AND status_image='1'";
                        $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                        $fetch_image = mysqli_fetch_assoc($execute_image); 
    
                        $select_bio = "SELECT bio FROM user_bio WHERE email='$reciever_email'";
                        $execute_bio = mysqli_query($this->Frequency(), $select_bio);
                        $fetch_bio = mysqli_fetch_assoc($execute_bio); 
    
                        $followers = 0;
                        $selectFollowers = "SELECT * FROM user_follow_board WHERE reciever_email='$reciever_email'";
                        $executeFollowers = mysqli_query($this->Frequency(),$selectFollowers);
                        while($fetchFollowers = mysqli_fetch_assoc($executeFollowers)){
                            $followers = $followers + 1;
                        }
    
                        $Following = 0;
                        $selectFollowing = "SELECT * FROM user_follow_board WHERE host_email='$reciever_email'";
                        $execute_following = mysqli_query($this->Frequency(),$selectFollowing);
                        while($fetchFollowing = mysqli_fetch_assoc($execute_following)){
                            $Following = $Following + 1;
                        }
       
                        $courses = 0;
                        $selectCourse = "SELECT * FROM class_tracks WHERE student_identity='$user_identity'";
                        $executeCourse = mysqli_query($this->Frequency(),$selectCourse);
                        while($fetch_course = mysqli_fetch_assoc($executeCourse)){
                            $courses = $courses + 1;
                        } ?>
                        <!-- each trainer -->
                        <!-- ============================================================================================================ -->
                        <div class="each-trainer">
                            <div class="trainers d-flex position-relative">
                                <div><div class="tariner-img"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%"></div></div>
                                <div class="trainer-desc ml-2">
                                    <div class="trainer-name"><?php echo $firstname_trainer; ?> <?php echo $lastName; ?></div>
                                    <div class="trainer-email"><?php echo $email_trainer; ?></div>
                                    <div class="trainer-bio mt-1"> <?php echo $fetch_bio['bio']; ?> </div>
                                    <div class="trainer-status d-flex justify-content-between">
                                        <div class="followers"><?php echo $followers; ?> Followers </div>
                                        <div class="followers ml-2"><?php echo $Following; ?> following </div>
                                        <div class="course ml-2"><?php echo $courses; ?> courses</div>
                                    </div>
                                </div>
                                <div class="btn-get-trainer ml-3">
                                    <button class="ask" onclick="askQuestion(this)"><i class="fa fa-question-circle-o"></i></button>
                                </div>
                            </div>
                            <!-- by the time user want to ask trainer -->
                            <div class="ask-question">
                                <div class="title-question">
                                    <div>question with <?php echo $firstname_trainer; ?> <?php echo $lastName; ?></div>
                                    <div class="close-question"><i class="fa fa-close" onclick="closeTabs(this)"></i></div>
                                </div>
                                <form action="profile_updates.php" method="POST" enctype="multipart/form-data">
                                    <div class="question-area-image">
                                        <div class="preview-image-question" id="preview_que_image">
                                            <img src="" id="preview_image" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="type-question ml-2">
                                            <div class="textarea-question"><textarea name="que_provided" id="" cols="30" rows="5" placeholder="Type question" autocomplete="off"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="send-question mt-2 d-flex justify-content-between">
                                        <input type="hidden" name="trainer_email" value="<?php echo $email_trainer; ?>">
                                        <input type="hidden" name="my_email_in" value="<?php echo $email; ?>">
                                        <input type="file" name="que_image" id="question_image" style="display: none;">
                                        <div class="with-photo"><button type="button" onclick="support_image(this)"><i class="fa fa-image mr-2"></i> with image</button></div>
                                        <div class="send" id="<?php echo $email_trainer; ?>"><button type="submit" name="submit_trainer_que" id="<?php echo $user_identity; ?>" onclick="submit_que_trainer(this)">send</button></div>
                                    </div>
                                </form>
                            </div>
                            <!-- end asking question -->
                        </div>
                        <!-- end each trainer -->
                        <!-- =================================================================================================================================== -->
                       <?php }else{

                    } 
                }
            }else{?>
                <div class="when_no_trainer">
                    <div class="no-data-found d-flex flex-column text-center">
                        <img src="../Images/Illustrator_img/professor_8lrt.png" alt="" width="100%">
                        <span>Follow more trainers to get what they shared</span>
                    </div>
                </div>
           <?php }
        }


        // method to display all course of department depend on user trade 
        // ================================================================================================================================
        public function trades_courses ($mail_course){
            $select_my_trainers = "SELECT * FROM intelligent_users WHERE email='$mail_course'";
            $execute_my_trainer = mysqli_query($this->Frequency(), $select_my_trainers);
            $fetch_my_trainer = mysqli_fetch_assoc($execute_my_trainer);
                $user_identity = $fetch_my_trainer['identity'];

            $select_course = "SELECT * FROM class_tracks WHERE student_identity='$user_identity'";
            $execute_course = mysqli_query($this->Frequency(), $select_course);
            if(mysqli_num_rows($execute_course) > 0){
                while($fetch_course = mysqli_fetch_assoc($execute_course)){
                    $class_identity = $fetch_course['class_identity'];
                    $user_indentity = $fetch_course['student_identity']; 
                    
                    $slect_class = "SELECT * FROM trainer_class WHERE identity='$class_identity'";
                    $execute_class = mysqli_query($this->Frequency(), $slect_class);
                    $fetch_class = mysqli_fetch_assoc($execute_class);
                        $class_profile_image = $fetch_class['class_profile_image'];
                        $class_name = $fetch_class['class_name'];
                        $class_desc = $fetch_class['class_desc'];
                        $getClass_identity = $fetch_class['identity'];
                        $getClass_url = $fetch_class['class_url'];

                    $countCourse = 0;
                    $select_course = "SELECT * FROM courses WHERE class_identity='$getClass_identity'";
                    $execute_course_count = mysqli_query($this->Frequency(), $select_course);
                    while($fetch_course = mysqli_fetch_assoc($execute_course_count)){
                        $countCourse = $countCourse + 1;
                    }  
                    
                    $count_learner = 0;
                    $select_learner = "SELECT * FROM class_tracks WHERE class_identity='$class_identity'";
                    $execute_class = mysqli_query($this->Frequency(), $select_learner);
                    while($fetch_learner = mysqli_fetch_assoc($execute_class)){
                        $count_learner = $count_learner + 1;
                    }   ?>

                    <!-- each department -->
                    <!-- ============================================ -->
                    <div class="eachdeclass">
                        <div class="department-image">
                            <img src="<?php echo '../Images/class_img/'.$class_profile_image; ?>" alt="" width="100%" height="100%">
                            <a href="../Course/Class_course.php?class=<?php echo $getClass_url; ?>"><div class="study-now">Learn now</div></a>
                        </div>
                        <div class="department-name"><?php echo $class_name; ?></div>
                        <div class="department-bio"><?php echo $class_desc; ?></div>
                        <div class="count-courses-status">
                            <div class="members"><i class="fa fa-user-circle-o"></i> Members <span><?php echo $count_learner;  ?></span></div>
                            <div class="courses"><i class="fa fa-graduation-cap"></i> Courses <span><?php echo $countCourse; ?></span></div>
                        </div>
                    </div>
                    <!-- end each department -->
                    <!-- ================================================== -->
                <?php }
            }else{ ?>
                <div class="catch_else">
                    <div class="no-data-found d-flex flex-column text-center">
                        <img src="../Images/Illustrator_img/teaching_f1cm.png" alt="" width="100%">
                        <span>Find and Join more classes to expand your knowledge</span>
                    </div>
                </div>
           <?php }  
        }

        // SHOW CLASS I FOLLOWED ON SETTING PAGE
        // ========================================================================================================
        public function display_my_class($user_mail){
            $select_my_trainers = "SELECT * FROM intelligent_users WHERE email='$user_mail'";
            $execute_my_trainer = mysqli_query($this->Frequency(), $select_my_trainers);
            $fetch_my_trainer = mysqli_fetch_assoc($execute_my_trainer);
                $user_identity = $fetch_my_trainer['identity'];

            $select_course = "SELECT * FROM class_tracks WHERE student_identity = '$user_identity'";
            $execute_course = mysqli_query($this->Frequency(), $select_course);
            if(mysqli_num_rows($execute_course) > 0){
                while($fetch_course = mysqli_fetch_assoc($execute_course)){
                    $class_identity = $fetch_course['class_identity'];
                    $user_indentity = $fetch_course['student_identity']; 
                    
                    $slect_class = "SELECT * FROM trainer_class WHERE identity='$class_identity'";
                    $execute_class = mysqli_query($this->Frequency(), $slect_class);
                    $fetch_class = mysqli_fetch_assoc($execute_class);
                        $class_profile_image = $fetch_class['class_profile_image'];
                        $class_name = $fetch_class['class_name'];
                        $getClass_identity = $fetch_class['identity'];
                        $getClass_url = $fetch_class['class_url'];
                        $full_date = date_format(date_create($fetch_class['created_on']), "M d, Y");
;
                    $countCourse = 0;
                    $select_course = "SELECT * FROM courses WHERE class_identity='$getClass_identity'";
                    $execute_course_count = mysqli_query($this->Frequency(), $select_course);
                    while($fetch_course = mysqli_fetch_assoc($execute_course_count)){
                        $countCourse = $countCourse + 1;
                    }  
                    
                    $count_learner = 0;
                    $select_learner = "SELECT * FROM class_tracks WHERE class_identity='$class_identity'";
                    $execute_class = mysqli_query($this->Frequency(), $select_learner);
                    while($fetch_learner = mysqli_fetch_assoc($execute_class)){
                        $count_learner = $count_learner + 1;
                    }   ?>

                    <!-- each course -->
                    <!-- =================================================================================================== -->
                    <a href="../Course/Class_course.php?class=<?php echo $getClass_url; ?>" style="color: #071c2e"><div class="each-member">
                        <div><div class="member-img"><img src="<?php echo '../Images/class_img/'.$class_profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                        <div class="member-detail">
                            <div class="member-name"><?php echo $class_name; ?></div>
                            <div class="member-email">Defined class</div>
                            <div class="joined"><i class="fa fa-calendar-check-o"></i> Started <?php echo $full_date; ?></div>
                        </div>
                    </div></a>
                    <!-- end course -->
                    <!-- =================================================================================================================== -->

                <?php }
            }else{ ?>
                <div class="catch_else">
                    <div class="no-data-found d-flex flex-column text-center">
                        <i class="fa fa-graduation-cap"></i>
                        <span>Find and Join more classes to expand your knowledge</span>
                    </div>
                </div>
           <?php } 
        }

        public function class_student(){
            $select_my_trainers = "SELECT * FROM intelligent_users WHERE email='$this->E_mail'";
            $execute_my_trainer = mysqli_query($this->Frequency(), $select_my_trainers);
            $fetch_my_trainer = mysqli_fetch_assoc($execute_my_trainer);
                $user_identity = $fetch_my_trainer['identity'];

            $select_trainer_class = "SELECT * FROM trainer_class WHERE Live='on' AND identity != '1' AND identity NOT IN (SELECT DISTINCT class_identity FROM class_tracks WHERE student_identity='$user_identity') LIMIT 2";
            $execute_trainer_class = mysqli_query($this->Frequency(), $select_trainer_class);
            while($fetch_trainer_class = mysqli_fetch_assoc($execute_trainer_class)){
                 $class_name = $fetch_trainer_class['class_name'];
                 $class_desc = $fetch_trainer_class['class_desc'];
                 $class_img = $fetch_trainer_class['class_profile_image']; 
                 $getClass_identity = $fetch_trainer_class['identity'];

                $countCourse = 0;
                $select_course = "SELECT * FROM courses WHERE class_identity='$getClass_identity'";
                $execute_course_count = mysqli_query($this->Frequency(), $select_course);
                while($fetch_course = mysqli_fetch_assoc($execute_course_count)){
                    $countCourse = $countCourse + 1;
                } 
                
                $learner = 0;
                $count_leaner = "SELECT * FROM class_tracks WHERE class_identity='$getClass_identity'";
                $execute_learner = mysqli_query($this->Frequency(), $count_leaner);
                while($fetch_learner = mysqli_fetch_assoc($execute_learner)){
                   $learner = $learner + 1;
                } ?>

                    <!-- each course -->
                    <!-- ======================================================================================================================= -->
                    <div class="each-course shadow-sm mb-3">
                        <div class="course-detail d-flex">
                            <div><div class="course-img"><img src="<?php echo '../Images/class_img/'.$class_img; ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="course-desc ml-3">
                                <div class="course-name"><?php echo $class_name; ?></div>
                                <div class="course-full-desc"><?php echo $class_desc; ?></div>
                            </div>
                        </div>
                        <div class="course-status mt-3">
                            <div class="course-model d-flex justify-content-between">
                                <div class="status"><span><?php echo $learner; ?></span> Leaner</div>
                                <div class="status"><span><?php echo $countCourse; ?></span> Courses</div>
                                <div class="status">user defined class </div>
                                <div class="learn-now"><button class="learn-today" id="<?php echo $getClass_identity; ?>" onclick="join_class(this)">Join</button></div>
                            </div>
                        </div>
                    </div>
                    <!-- end each course -->
                    <!-- ================================================================================================================== -->
                                            
            <?php }
        }

        // SHOW GROUP I HAVE CREATED
        // ====================================================================================================================================
        public function show_group(){
            $select_all_group = "SELECT * FROM user_groups WHERE email='$this->E_mail'";
            $execute_group = mysqli_query($this->Frequency(), $select_all_group);
            if(mysqli_num_rows($execute_group) > 0){
                while($fetch_all_group = mysqli_fetch_assoc($execute_group)){ 
                    $getprofile_image = $fetch_all_group['group_profile_image'];
                    $getName = $fetch_all_group['group_name'];
                    $getUrl = $fetch_all_group['url_encode']; ?>
                    <a href="<?php echo '../Group-discusion/Group_admin.php?group='.$getUrl.'&group_adm_ver='.$this->E_mail; ?>">
                        <div class="each-show_group d-flex mt-2">
                            <div><div class="group_image"><img src="<?php echo '../Images/groups/'.$getprofile_image; ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="group_name_show">
                                <?php echo $getName; ?>
                            </div>
                            <span class="count_notification_group_<?php echo $group_identity; ?>"></span>
                        </div>
                    </a>
                    <script>
                       setInterval(() => {
                            $(document).ready(function(){
                                var group_identity = "<?php echo $group_identity; ?>";
                                var global_mail = document.getElementById("hiddenEmail").value;
                                $("#count_notification_group_<?php echo $group_identity; ?>").load("show_profile_content.php", {
                                    get_noti_group: group_identity,
                                    getGMail: global_mail
                                });
                            });
                       }, 3000);
                    </script>
                <?php }
            }
        }


        // SHOW GROUP I HAVE CREATED
        // ====================================================================================================================================
        public function show_My_groups(){
            $select_all_group = "SELECT * FROM user_groups WHERE identity IN (SELECT DISTINCT group_identity FROM user_group_member WHERE User_email='$this->E_mail' AND approval = 'yes')";
            $execute_group = mysqli_query($this->Frequency(), $select_all_group);
            if(mysqli_num_rows($execute_group) > 0){ ?>
               <div class="user-friend mt-4" style="max-height: 300px; min-height:150px; overflow: auto;overflow-x: hidden">
                    <div class="label_tab"> Joined Groups Shortcuts </div>
                    <div class="p-3">
                        <?php while($fetch_all_group = mysqli_fetch_assoc($execute_group)){ 
                            $getprofile_image = $fetch_all_group['group_profile_image'];
                            $getName = $fetch_all_group['group_name'];
                            $getUrl = $fetch_all_group['url_encode']; 
                            $group_identity = $fetch_all_group['identity']; ?>
                            <a href="<?php echo '../Group-discusion/index.php?group='.$getUrl.'&group_id='.$group_identity.'&group_member_ver='.$this->E_mail; ?>">
                                <div class="each-show_group d-flex mt-2" style="border-radius: 4px; margin-bottom: 5px;">
                                    <div><div class="group_image"><img src="<?php echo '../Images/groups/'.$getprofile_image; ?>" alt="" width="100%" height="100%"></div></div>
                                    <div class="group_name_show mt-2 ml-2"><?php echo $getName; ?></div>
                                    <span id="count_my_group_noti_<?php echo $group_identity; ?>"></span>
                                </div>
                            </a>
                            <script>
                                setInterval(() => {
                                    $(document).ready(function(){
                                        var my_group_identity = "<?php echo $group_identity; ?>";
                                        var my_global_mail = document.getElementById("hiddenEmail").value;
                                        $("#count_my_group_noti_<?php echo $group_identity; ?>").load("show_profile_content.php", {
                                            get_my_group_noti: my_group_identity,
                                            getMyBMail: my_global_mail
                                        });
                                    });
                                }, 3000);
                            </script>
                        <?php } ?>
                    </div>
                </div>
            <?php }
        }


        // ECHO ALL CLASS I'VE CREATED
        // =====================================================================================================================================
        public function show_classes(){
            $select_identity = "SELECT * FROM intelligent_users WHERE email='$this->E_mail'";
            $execute_identity = mysqli_query($this->Frequency(), $select_identity);
            $fetch_identity = mysqli_fetch_assoc($execute_identity);
                $get_Identity = $fetch_identity['identity'];
                $getFirstName = $fetch_identity['firstName'];
                $getLastName = $fetch_identity['lastName'];

            $select_classes = "SELECT * FROM trainer_class WHERE user_identity='$get_Identity' AND Live='on'";
            $execute_classes = mysqli_query($this->Frequency(), $select_classes);
            while($fetch_class = mysqli_fetch_assoc($execute_classes)){ 
                $getProfileImage = $fetch_class['class_profile_image'];
                $getClassName = $fetch_class['class_name'];
                $getClass_identity = $fetch_class['identity'];
                $get_class_url = $fetch_class['class_url'];

                $countCourse = 0;
                $select_course = "SELECT * FROM courses WHERE class_identity='$getClass_identity'";
                $execute_course_count = mysqli_query($this->Frequency(), $select_course);
                while($fetch_course = mysqli_fetch_assoc($execute_course_count)){
                    $countCourse = $countCourse + 1;
                }

                $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$this->E_mail' AND status_image='1'";
                $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                $fetch_image = mysqli_fetch_assoc($execute_image); 
                ?>
                <div class="each_class">
                    <div class="hold_two_section">
                        <div><div class="class_status">
                            <div class="class_background"><img src="../Images/class_img/hot-air-balloons-at-dusk.jpg" alt="" width="100%" height="100%"></div>
                            <div class="class_detail">
                                <div><div class="class_image"><img src="<?php echo '../Images/class_img/'.$getProfileImage; ?>" alt="" width="100%" height="100%"></div></div>
                                <div class="class_short_detail">
                                    <div class="class_status_activity">
                                        <div>Course <?php echo $countCourse; ?></div>
                                        <!-- <div>Followers 4678</div> -->
                                    </div>
                                    <div class="class_name"><?php echo $getClassName; ?></div>
                                </div>
                            </div>
                        </div></div>
                        <div class="class_dashboard">
                            <div class="class_event">
                                <ul class="nav" role="tablist">
                                    <li class=""><a class="active" href="#courses" data-toggle="tab" role="tab">Courses</a></li>
                                    <li class=""><a class="" href="#Event" data-toggle="tab" role="tab">Add course</a></li>
                                    <li class=""><a href="#invite" data-toggle="tab" role="tab">invite</a></li>
                                </ul>
                                <div class="tab_class_content tab-content">
                                    <div class="create_course tab-pane active" role="tabpanel" id="courses">
                                        <div class="courses_list">
                                           <?php 
                                               $select_all_course = "SELECT * FROM courses WHERE class_identity='$getClass_identity'";
                                               $execute_all_course = mysqli_query($this->Frequency(), $select_all_course);
                                               while($fetch_all_course = mysqli_fetch_assoc($execute_all_course)){
                                                   $getCourse_name = $fetch_all_course['course_name'];
                                                   $getIdentity_course = $fetch_all_course['identity'];
                                                   $date = date_create($creater_date = $fetch_all_course['date_created']); ?>
                                                    <a href="../Course/Write_course.php?course=<?php echo $getIdentity_course; ?>" style="color: black;"><div class="each_course_class">
                                                        <div><div class="course_img"><img src="../Images/class_img/Courses_document.png" width="100%" height="100%"></div></div>
                                                        <div class="course_detail mt-2">
                                                            <div class="course_name_class"><?php echo $getCourse_name; ?></div>
                                                            <div class="class_course_topic"><?php echo date_format($date, "M d(h:m), Y"); ?></div>
                                                        </div>
                                                    </div></a>
                                               <?php }
                                           ?>
                                        </div>
                                    </div>
                                    <div class="create_course tab-pane" role="tabpanel" id="Event">
                                    <div class="create_title"> Create new course </div>
                                        <div class="create_input_form">
                                            <div class="create_class_input"><input type="text" name="course_name" id="class_created_name" placeholder="Course name...."></div>
                                            <div class="create_course_name"><input type="text" name="course_name" id="course_create_name" placeholder="Course instruction..."></div>
                                        </div>
                                        <div class="start_class">
                                            <span id="error"></span>
                                            <button class="submit_class" id="<?php echo $getClass_identity; ?>" onclick="create_new_course(this)">Start course</button>
                                        </div> 
                                    </div>
                                    <div class="create_course tab-pane" role="tabpanel" id="invite">
                                        <div id="invite_people">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        }

        public function invite_people(){
            $discover_people = "SELECT * FROM intelligent_users WHERE email IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$this->E_mail') OR email IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$this->E_mail') AND email != '$this->E_mail' AND Verified='complete'";
            $execute_people = mysqli_query($this->Frequency(), $discover_people);
            while($fetch_people = mysqli_fetch_assoc($execute_people)){
                $people_email = $fetch_people['email'];
                $firstName = $fetch_people['firstName'];
                $lastName = $fetch_people['lastName'];

                $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$people_email' AND status_image='1'";
                $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                    $fetch_image = mysqli_fetch_assoc($execute_image); ?>
                    
                    <!-- each disc0ver -->
                    <!-- ================================================================================================================================== -->
                    <div class="each-discovery">
                        <div class="d-flex">
                            <div><div class="discover-image">
                                <img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%">
                            </div></div>
                            <div class="discovery-detail">
                                <div class="dis-name"><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                                <div class="dis-dep">& <?php echo $people_email; ?></div>
                            </div>
                        </div>
                        <div class="follow-over"><button class="follow-discovery" id="<?php echo $people_email; ?>" onclick="invite(this)">Invite</button></div>
                    </div>
                    <!-- end discover -->
                    <!-- ========================================================================================================================================== -->
                                                        
            <?php }
        }

        public function envite_client($inviter, $invited){
            $discover_people = "SELECT * FROM intelligent_users WHERE email='$inviter'";
            $execute_people = mysqli_query($this->Frequency(), $discover_people);
            $fetch_people = mysqli_fetch_assoc($execute_people);
                $firstName = $fetch_people['firstName'];
                $lastName = $fetch_people['lastName'];

            $notification = "{$firstName} {$lastName}, Invite you to attend and use class";
            $add_notification = "INSERT INTO notifications ('','$inviter','$invited','')";
        }

        public function discover_people($user_email, $title){
            $discover_people = "SELECT * FROM intelligent_users WHERE email NOT IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$user_email') AND email NOT IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$user_email') AND email != '$this->E_mail' AND title='$title' AND Verified='complete' LIMIT 3";
            $execute_people = mysqli_query($this->Frequency(), $discover_people);
            while($fetch_people = mysqli_fetch_assoc($execute_people)){
                $people_email = $fetch_people['email'];
                $firstName = $fetch_people['firstName'];
                $lastName = $fetch_people['lastName'];

                $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$people_email' AND status_image='1'";
                $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                    $fetch_image = mysqli_fetch_assoc($execute_image); ?>
                    
                    <!-- each disc0ver -->
                    <!-- ================================================================================================================================== -->
                    <div class="each-discovery">
                        <div class="d-flex">
                            <div><div class="discover-image">
                                <img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%">
                            </div></div>
                            <div class="discovery-detail">
                                <div class="dis-name"><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                                <div class="dis-dep">& <?php echo $people_email; ?></div>
                            </div>
                        </div>
                        <div class="follow-over"><button class="follow-discovery" id="<?php echo $people_email; ?>" onclick="followUser(this)">Follow</button></div>
                    </div>
                    <!-- end discover -->
                    <!-- ========================================================================================================================================== -->
                                                        
            <?php }
        }

        // get ALL users who follow me
        // =========================================================================================================================================================================
        public function show_companion ($mail){
            $select_my_user = "SELECT * FROM intelligent_users WHERE email IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$mail') AND email != '$this->E_mail'  AND Verified='complete'";
            $execute_my_users = mysqli_query($this->Frequency(), $select_my_user);
            if(mysqli_num_rows($execute_my_users) > 0 ){
                while($fetch_users = mysqli_fetch_assoc($execute_my_users)){
                    $people_email = $fetch_users['email'];
                    $firstName = $fetch_users['firstName'];
                    $lastName = $fetch_users['lastName'];

                    $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$people_email' AND status_image='1'";
                    $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                        $fetch_image = mysqli_fetch_assoc($execute_image); ?>
                        <!-- each member folowers -->
                        <!-- =================================================================================================================================== -->
                        <div class="each-member">
                            <div><div class="member-img"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="member-detail">
                                <div class="member-name"><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                                <div class="member-email"><?php echo $people_email; ?></div>
                                <!-- <div class="joined stuts">Followers 245 and Following 89</div> -->
                            </div>
                        </div>
                        <!-- end each member -->
                        <!-- ======================================================================================================================================= -->

                <?php }
            }else{ ?>
                <div class="no-data-found d-flex flex-column text-center">
                    <i class="fa fa-user-o"></i>
                    <span>No search user found</span>
                </div>
            <?php }
        }

        public function show_following ($mail){ 
            $select_my_user = "SELECT * FROM intelligent_users WHERE email IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$mail') AND email != '$this->E_mail'  AND Verified='complete'";
            $execute_my_users = mysqli_query($this->Frequency(), $select_my_user);
            if(mysqli_num_rows($execute_my_users) > 0){
                while($fetch_users = mysqli_fetch_assoc($execute_my_users)){
                    $people_email = $fetch_users['email'];
                    $firstName = $fetch_users['firstName'];
                    $lastName = $fetch_users['lastName'];

                    $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$people_email' AND status_image='1'";
                    $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                        $fetch_image = mysqli_fetch_assoc($execute_image); ?>

                        <!-- each member folowers -->
                        <!-- =================================================================================================================================== -->
                        <div class="each-member">
                            <div><div class="member-img"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="member-detail mt-2">
                                <div class="member-name"><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                                <div class="member-email"><?php echo $people_email; ?></div>
                                <!-- <div class="joined stuts">Followers 245 and Following 89</div> -->
                            </div>
                        </div>
                        <!-- end each member -->
                        <!-- ======================================================================================================================================= -->    
                <?php }
            }else{ ?>
                <div class="no-data-found d-flex flex-column text-center">
                    <i class="fa fa-user-o"></i>
                    <span>No search user found</span>
                </div>
           <?php }
        }

        public function photos_shared(){
            $select_all_photos = "SELECT * FROM user_common_post WHERE poster_email='$this->E_mail' AND media_type != 'mp4' ";
            $execute_photos = mysqli_query($this->Frequency(),$select_all_photos);
            if(mysqli_num_rows($execute_photos) > 0){
                while($fetch_photos = mysqli_fetch_assoc($execute_photos)){?>
                <div class="shared-photo"><div class="inner-photo"><img src="<?php echo '../Images/activity_stream/'. $fetch_photos['media_posted']; ?>" alt="" width="100%" height="100%"></div></div>
                <?php }
            }else{ ?>
                <div class="no-data-found d-flex flex-column text-center">
                    <i class="fa fa-photo"></i>
                    <span>No photos you got yet, shared new photo</span>
                </div>
            <?php }
        }

        public function video_shared(){
            $select_all_photos = "SELECT * FROM user_common_post WHERE poster_email='$this->E_mail' AND media_type='mp4'";
            $execute_photos = mysqli_query($this->Frequency(),$select_all_photos);
            if(mysqli_num_rows($execute_photos) > 0){
                while($fetch_photos = mysqli_fetch_assoc($execute_photos)){?>

                    <!-- each video -->
                    <!-- ==================================================================================================================== -->
                    <div class="videos-shared">
                        <div class="inner-video position-relative">
                            <video src="<?php echo '../videos/activity_stream-vd/'.$fetch_photos['media_posted']; ?>" width="100%" height="100%"></video>
                            <div class="control-media d-flex"><i class="fa fa-play" onclick="playOrPause(this)" id="playBtn"></i></div>
                            <div class="controls-down">
                                <div class="video-status mb-2">
                                    <div class="status-number d-flex justify-content-between">
                                        <div id="currentTime">00:00 / 00:00</div>
                                        <small></small>
                                    </div>
                                </div>
                                <div class="video-stream-line" id="seek-bar"><div id="fill"></div></div>
                            </div>
                        </div>
                    </div>
                    <!-- end video -->
                    <!-- =========================================================================================================================== -->

                <?php }
            }else{ ?>
                <div class="no-data-found d-flex flex-column text-center">
                    <i class="fa fa-photo"></i>
                    <span>No Video you shared yet, shared new video</span>
                </div>
            <?php }
        }

        public function list_user_choose($email){
            $select_more_trainer = "SELECT * FROM intelligent_users WHERE email IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$email') OR email IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$email') AND email != '$email' AND Verified='complete' ORDER BY firstName ASC";
            $execute_trainer = mysqli_query($this->Frequency(),$select_more_trainer);
            if(mysqli_num_rows($execute_trainer) > 0){
                while($fetch_trainer = mysqli_fetch_assoc($execute_trainer)){
                    $getFirstname = $fetch_trainer['firstName'];
                    $getLastname = $fetch_trainer['lastName'];
                    $getEmail = $fetch_trainer['email'];
                    $getIdentity = $fetch_trainer['identity'];

                    $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$getEmail' AND status_image='1'";
                    $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                    $fetch_image = mysqli_fetch_assoc($execute_image); ?>
                        <div class="each_member">
                            <div class="flex-user_detail">
                                <div><div class="user_chosen_image"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image'] ?>" alt="" width="100%" height="100%"></div></div>
                                <div class="user_detail_chosen">
                                    <div class="user_name_chosen"><?php echo $getFirstname; ?> <?php echo $getLastname; ?></div>
                                    <div class="user_email_chosen"><?php echo $getEmail; ?></div>
                                </div>
                            </div>
                            <div class="check_user"><input type="checkbox" name="" id="" value="<?php echo $getEmail; ?>" onclick="choose_user(this)"></div>
                        </div>
                <?php }
            }
        }

        public function load_form_share($data_selected, $my_email){ 
            $arrlength = count($data_selected);
            $first_email = $data_selected[0];
            ?>
            <div class="upload_file_input">
                <div class="preview_file_shared" id="preview_file_shared"><img src="" id="images" alt="" width="100%" height="100%"></div>
                <div class="choose_file_to_share">
                    <form action="show_profile_content.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="chosen_file_share" id="chosen_file_share" style="display: none;">
                        <input type="hidden" name="reciever_email" value="<?php echo $first_email;?>">
                        <input type="hidden" name="sender_email" value="<?php echo $my_email; ?>">
                        <div class="choose_file_btn" onclick="choose_file_share()">Choose image</div>
                        <div class="send_file" id="send_file"><button type="submit" name="submit_choose_file"><i class="fa fa-send-o"></i> Send image</button></div>
                    </form>
                </div>
            </div>
            <div id="preview-container">
                <form action="show_profile_content.php" method="POST" enctype="multipart/form-data">
                    <button id="upload-dialog" type="button">Choose PDF</button>

                    <input type="file" name="chosen_file_share" id="pdf-file" name="pdf" accept="application/pdf" />
                    <input type="hidden" name="reciever_email" value="<?php echo $first_email;?>">
                    <input type="hidden" name="sender_email" value="<?php echo $my_email; ?>">

                    <div id="pdf-loader">Loading Preview ..</div>
                    <canvas id="pdf-preview" width="300"></canvas>
                    <span id="pdf-name"></span>

                    <div class="text-center upload-pdf-btn ml-auto mr-auto">
                        <button id="cancel-pdf" class="mr-4" type="button">Cancel</button>
                        <button type="submit" name="submit_choose_file" id="upload-button">Upload</button>
                    </div>
                </form>
            </div>
            <script>
                // upload pdf file
                // ==============================================================================================================
                var _PDF_DOC,
                    _CANVAS = document.querySelector('#pdf-preview'),
                    _OBJECT_URL;

                function showPDF(pdf_url) {
                    PDFJS.getDocument({ url: pdf_url }).then(function(pdf_doc) {
                        _PDF_DOC = pdf_doc;

                        // Show the first page
                        showPage(1);

                        // destroy previous object url
                        URL.revokeObjectURL(_OBJECT_URL);
                    }).catch(function(error) {
                        // trigger Cancel on error
                        document.querySelector("#cancel-pdf").click();
                        
                        // error reason
                        alert(error.message);
                    });;
                }

                function showPage(page_no) {
                    // fetch the page
                    _PDF_DOC.getPage(page_no).then(function(page) {
                        // set the scale of viewport
                        var scale_required = _CANVAS.width / page.getViewport(1).width;

                        // get viewport of the page at required scale
                        var viewport = page.getViewport(scale_required);

                        // set canvas height
                        _CANVAS.height = viewport.height;

                        var renderContext = {
                            canvasContext: _CANVAS.getContext('2d'),
                            viewport: viewport
                        };
                        
                        // render the page contents in the canvas
                        page.render(renderContext).then(function() {
                            document.querySelector("#pdf-preview").style.display = 'inline-block';
                            document.querySelector("#pdf-loader").style.display = 'none';
                        });
                    });
                }


                /* Show Select File dialog */
                document.querySelector("#upload-dialog").addEventListener('click', function() {
                    document.querySelector("#pdf-file").click();
                });

                /* Selected File has changed */
                document.querySelector("#pdf-file").addEventListener('change', function() {
                    // user selected file
                    var file = this.files[0];

                    // allowed MIME types
                    var mime_types = [ 'application/pdf' ];
                    
                    // Validate whether PDF
                    if(mime_types.indexOf(file.type) == -1) {
                        alert('Error : Incorrect file type');
                        return;
                    }

                    // validate file size
                    if(file.size > 10*1024*1024) {
                        alert('Error : Exceeded size 10MB');
                        return;
                    }

                    // validation is successful

                    // hide upload dialog button
                    document.querySelector("#upload-dialog").style.display = 'none';
                    
                    // set name of the file
                    document.querySelector("#pdf-name").innerText = file.name;
                    document.querySelector("#pdf-name").style.display = 'inline-block';

                    // show cancel and upload buttons now
                    document.querySelector("#cancel-pdf").style.display = 'inline-block';
                    document.querySelector("#upload-button").style.display = 'inline-block';

                    // Show the PDF preview loader
                    document.querySelector("#pdf-loader").style.display = 'inline-block';

                    // object url of PDF 
                    _OBJECT_URL = URL.createObjectURL(file)

                    // send the object url of the pdf to the PDF preview function
                    showPDF(_OBJECT_URL);
                });

                /* Reset file input */
                document.querySelector("#cancel-pdf").addEventListener('click', function() {
                    // show upload dialog button
                    document.querySelector("#upload-dialog").style.display = 'inline-block';

                    // reset to no selection
                    document.querySelector("#pdf-file").value = '';

                    // hide elements that are not required
                    document.querySelector("#pdf-name").style.display = 'none';
                    document.querySelector("#pdf-preview").style.display = 'none';
                    document.querySelector("#pdf-loader").style.display = 'none';
                    document.querySelector("#cancel-pdf").style.display = 'none';
                    document.querySelector("#upload-button").style.display = 'none';
                });

            </script>
       <?php }

       public function send_fil($chosen_file_share, $reciever_email, $sender_email, $file_type){
            $created_on = Date("Y-m-d h:m:s");
            $insert_file = "INSERT INTO shared_contents VALUE ('','$sender_email','$reciever_email','$chosen_file_share','$file_type','none','$created_on')";
            $execute_file = mysqli_query($this->Frequency(), $insert_file);
       }

       public function shared_notes($email){
           $select_all_notes = "SELECT * FROM shared_contents WHERE user_email_to='$email' AND file_type != 'jpg' AND file_type != 'png' AND file_type != 'jpeg'";
           $execute_file = mysqli_query($this->Frequency(), $select_all_notes);
           if(mysqli_num_rows($execute_file) > 0 ){
              while($fetch_file = mysqli_fetch_assoc($execute_file)){
                  $filename = $fetch_file['file_shared'];
                  $file_type = $fetch_file['file_type'];
                  $sender = $fetch_file['user_email_from'];
                  $date = date_create($fetch_file['created_on']);
                  $form_data = date_format($date, "M d, Y");

                $select_identity = "SELECT * FROM intelligent_users WHERE email='$sender'";
                $execute_identity = mysqli_query($this->Frequency(), $select_identity);
                $fetch_identity = mysqli_fetch_assoc($execute_identity);
                    $title = $fetch_identity['title'];
                    $getFirstName = $fetch_identity['firstName'];
                    $getLastName = $fetch_identity['lastName']; ?>
                    <div class="each_files_shared">
                        <div class="expand_shared">
                            <div><div class="file_type"><?php echo $file_type; ?></div></div>
                            <div class="file_description">
                                <div class="file_name"><?php echo $filename; ?></div>
                                <div class="file_size"><?php echo $form_data; ?></div>
                                <div class="from_user"><?php echo $getFirstName; ?> <?php echo $getLastName; ?>, <?php echo $title; ?></div>
                            </div>
                        </div>
                        <div><a href="<?php echo '../Images/shared_file/'.$filename; ?>" download="<?php echo '../Images/shared_file/'.$filename; ?>"><div class="downlord_file">downlord</div></a></div>
                    </div>
            <?php }
           }else{ ?>
                <div class="no-data-found d-flex flex-column text-center">
                    <i class="fa fa-file-pdf-o"></i>
                    <span>Request more files, Notes</span>
                </div>
          <?php }
       }

       public function shared_image_file($email){
            $select_all_notes = "SELECT * FROM shared_contents WHERE user_email_to='$email' AND file_type='jpg' OR file_type = 'png' OR file_type = 'jpeg'";
            $execute_file = mysqli_query($this->Frequency(), $select_all_notes);
            if(mysqli_num_rows($execute_file) > 0 ){
            while($fetch_file = mysqli_fetch_assoc($execute_file)){
                $filename = $fetch_file['file_shared'];
                $sender = $fetch_file['user_email_from'];
                $date = date_create($fetch_file['created_on']);
                $form_data = date_format($date, "M d, Y");

                $select_identity = "SELECT * FROM intelligent_users WHERE email='$sender'";
                $execute_identity = mysqli_query($this->Frequency(), $select_identity);
                $fetch_identity = mysqli_fetch_assoc($execute_identity);
                    $title = $fetch_identity['title'];
                    $getFirstName = $fetch_identity['firstName'];
                    $getLastName = $fetch_identity['lastName']; ?>
                    <div class="each_files_shared">
                        <div class="expand_shared">
                            <div><div class="image_file_shared"><img src="<?php echo '../Images/shared_file/'.$filename; ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="file_description">
                                <div class="file_name"><?php echo $filename; ?></div>
                                <div class="from_user"><?php echo $getFirstName; ?> <?php echo $getLastName; ?></div>
                                <div class="shared_from_title"><?php echo $title; ?>, <?php echo $form_data; ?></div>
                            </div>
                        </div>
                        <div><a href="<?php echo '../Images/shared_file/'.$filename; ?>" download="<?php echo '../Images/shared_file/'.$filename; ?>"><div class="View_file">Downlord</div></a></div>
                    </div>
            <?php }
            }else{ ?>
                <div class="no-data-found d-flex flex-column text-center">
                    <i class="fa fa-file-image-o"></i>
                    <span>No shared Posts, Photos</span>
                </div>
        <?php }
        }

    }

    // IF REQUEST IS SHOW DEPARTMENT
    // =================================================================================================================
    if(isset($_POST['getEmail_list'])){
        $newFames = new Fames($_POST['getEmail_list']);
        $newFames->show_departments();
    }

    // IF REQUEST IF DISPLAY ALL PHOTOS
    // =====================================================================================================================
    if(isset($_POST['get_all_photos'])){
        $newFames = new Fames($_POST['get_all_photos']);
        $newFames->all_photos();
    }

    // IF REQUEST IF DISPLAY ALL BACKGROUND PHOTOS
    // =====================================================================================================================
    if(isset($_POST['get_background_photos'])){
        $newFames = new Fames($_POST['get_background_photos']);
        $newFames->all_background_photos();
    }

    // IF REQUST IS TO SHOW NEARBY USER
    // =======================================================================================================================
    if(isset($_POST['getEmail_nearBy'])){
        $newFames = new Fames($_POST['getEmail_nearBy']);
        $newFames->nearBy_user();
    }

    // IF REQUEST IS TO SHOW MORE TRAIN
    // ============================================================================================================================
    if(isset($_POST['more_trainer_email'])){
        $newFames = new Fames($_POST['more_trainer_email']);
        $newFames->more_trainer();
    }

    // IF REQUEST IS TO SHOW USER INTRO INFO
    // ==============================================================================================================================
    if(isset($_POST['get_intro_email'])){
        $newFames = new Fames($_POST['get_intro_email']);
        $newFames->show_user_info();
    }

    //  IF REQUEST IS TO SAVE MORE ACCOUNT INFO
    // ======================================================================================================
    if(isset($_POST['getMail_info'])){
        $newFames = new Fames($_POST['getMail_info']);
        $getted_location = $_POST['getLocation'];
        $getted_school = $_POST['getSchool'];
        $getted_trade = $_POST['getTrade'];
        $getted_level = $_POST['getLevel'];
        $getted_birthday = $_POST['getBirthday'];
        $getted_contact = $_POST['getContact'];
        $getted_Gender = $_POST['getGender'];

        $newFames->show_user_intro($getted_location, $getted_school, $getted_trade, $getted_level, $getted_birthday, $getted_contact,$getted_Gender);
    }

    // IF REQUST IS TO DISPLAY ALL TRAINERS
    // =============================================================================================================================
    if(isset($_POST['getTrainer_all'])){
        $show_trainer = new Fames($_POST['getTrainer_all']);
        $show_trainer->show_my_trainers($_POST['getTrainer_all']);
    }

    // IF REQUEST IS TO SHOW COURSE OF DEPARTMENT DEPEND ON USER TRADE
    // ===============================================================================================================================
    if(isset($_POST['getAll_course'])){
        $count_courses = new Fames($_POST['getAll_course']);
        exit(json_decode($count_courses->trades_courses($_POST['getAll_course'])));
    }

    // IF REQUEST IS TO SHOW ALL GROUP I'VE CREATED
    // ======================================================================================================================================
    if(isset($_POST['getAll_group'])){
        $show_groups = new Fames($_POST['getAll_group']);
        $show_groups->show_group($_POST['getAll_group']);
    }

    // IF REQUEST IS TO SHOW ALL DEPARTMENT IN SELECTION
    // ======================================================================================================================================
    if(isset($_POST['getDepartment'])){
        $show_department = new Fames($_POST['getDepartment']);
        $show_department->show_department_list();
    }

    // if request is to select option
    // ================================================================================================================================================
    if(isset($_POST['request_option'])){
        $show_department = new Fames($_POST['request_option']);
        $show_department->show_department_list();
    }

    // if request is to select option
    // ================================================================================================================================================
    if(isset($_POST['getListDep'])){
        $show_department = new Fames($_POST['getListDep']);
        $show_department->show_department_list();
    }

    // if request is to show all classes
    // =====================================================================================================================================
    if(isset($_POST['getAll_class'])){
        $show_classes = new Fames($_POST['getAll_class']);
        $show_classes->show_classes();
    }

    // if request is to show group i have followed
    // ==================================================================================================================
    if(isset($_POST['getAllMy_groups'])){
       $show_new_group = new Fames($_POST['getAllMy_groups']);
       $show_new_group->show_My_groups();
    }

    // if requst is to show discoverable people
    // ===================================================================================================================
    if(isset($_POST['discoverStudent'])){
        $show_discoverable = new Fames($_POST['discoverStudent']);
        $show_discoverable->discover_people($_POST['discoverStudent'], $_POST['title']);
    }

    // if requst is to discover trainer
    // ===================================================================================================================
    if(isset($_POST['discoverTrainer'])){
        $show_discoverable = new Fames($_POST['discoverTrainer']);
        $show_discoverable->discover_people($_POST['discoverTrainer'], $_POST['title_trainer']);
    }

    // if request is to show friend that followed me
    // ====================================================================================================================
    if(isset($_POST['show_companion'])){
        $show_users = new Fames($_POST['show_companion']);
        $show_users->show_companion($_POST['show_companion']);
    }

    // if request is to show friend that i've followed
    // =====================================================================================================================
    if(isset($_POST['show_following'])){
        $show_users = new Fames($_POST['show_following']);
        $show_users->show_following($_POST['show_following']);
    }

    // if request is to show all photo on settings page
    // ======================================================================================================================
    if(isset($_POST['show_photos_shared'])){
        $show_photo = new Fames($_POST['show_photos_shared']);
        $show_photo->photos_shared();
    }

    // if request is to show video shared
    // ========================================================================================================================
    if(isset($_POST['show_video_shared'])){
        $show_video = new Fames($_POST['show_video_shared']);
        $show_video->video_shared();
    }

    // if request is to show class user may like
    // =======================================================================================================================
    if(isset($_POST['show_class_like'])){
        $display_class = new Fames($_POST['show_class_like']);
        $display_class->class_student();
    }

    // if request is to show my question
    // =========================================================================================================================
    if(isset($_POST['request_my_question'])){
        $new_deliberation->show_my_questions($_POST['request_my_question']);
    }

    // if request is to show people i can invite
    // ============================================================================================================================
    if(isset($_POST['get_invite'])){
        $display_class = new Fames($_POST['get_invite']);
        $display_class->invite_people();
    }

    // if request is to show class on setting spage
    // ==================================================================================================================================
    if(isset($_POST['getClass_settings'])){
        $display_class_settings = new Fames($_POST['getClass_settings']);
        $display_class_settings->display_my_class($_POST['getClass_settings']);
    }

    // if request is to display my follo board on choose list area
    // =====================================================================================================================================
    if(isset($_POST['choose_list'])){
        $new_list = new Fames($_POST['choose_list']);
        $new_list->list_user_choose($_POST['choose_list']);
    }

    // if request is to display form share
    // ==============================================================================================================================
    if(isset($_POST['form_input_share'])){
        $new_form = new Fames($_POST['form_input_share']);
        $new_form->load_form_share($_POST['data_we_select'], $_POST['form_input_share']);
    }

    // if request is to share file
    // ==============================================================================================================================
    if(isset($_POST['submit_choose_file'])){
        $sender = $_POST['sender_email'];
        $reciever = $_POST['reciever_email'];

        $filename = $_FILES['chosen_file_share']['name'];
        $file_size = $_FILES['chosen_file_share']['size'];
        $location = "../Images/shared_file/".$filename;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        $valid_extensions = array("jpg","jpeg","png","pdf");

        // check extension
        if(!in_array(strtolower($imageFileType), $valid_extensions)) {
            header("location: profile.php?Check extentension");
            exit();
        }else{
            if(move_uploaded_file($_FILES['chosen_file_share']['tmp_name'],$location)){
                $new_share = new Fames($sender);
                if($new_share->send_fil($filename, $reciever, $sender, $imageFileType)){
                    header("location: profile.php?success");
                }else{
                    header("location: profile.php?fail_to_insert");
                    exit();
                }
            }else{
                header("location: profile.php?fail_to_move");
                exit();
            }
        }
    }

    // if request is to display shared notes
    // ==========================================================================================================================================
    if(isset($_POST['get_shared_notes'])){
        $new_fame = new Fames($_POST['get_shared_notes']);
        $new_fame->shared_notes($_POST['get_shared_notes']);
    }

    // if request is to display shared image
    // ============================================================================================================================================
    if(isset($_POST['get_shared_image'])){
        $new_image_shared = new Fames($_POST['get_shared_image']);
        $new_image_shared->shared_image_file($_POST['get_shared_image']);
    }

    // if request is to retrieve all location
    // =====================================================================================================================================================
    if(isset($_POST['get_option_loaction'])){
        $new_location_set = new Fames($_POST['get_option_loaction']);
        $new_location_set->all_countries();
    }

?>
