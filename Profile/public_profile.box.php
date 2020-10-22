<?php 
    session_start();
    if(isset($_SESSION['Email'])){
        $Session_email_call = $_SESSION['Email'];
        $firstName = $_SESSION['Firstname'];
        $lastName = $_SESSION['Lastname'];
        $user_title = $_SESSION['title'];

        if(isset($_REQUEST['scyllar'])){
            $url_code = $_REQUEST['scyllar'];

            require_once ("../Scyllar.php");
            require_once ("../Profile/show_profile_content.php");
            require_once ("../Profile/show_posts.php");

        //   MALE CLASS CALLED VIRTUAL PAGE
        // =======================================================================
        class Virtual_page extends Scyllar {

            public function show_email ($url){
                $select_info = "SELECT * FROM intelligent_users WHERE url_identity='$url'";
                $execute_info = mysqli_query($this->Frequency(), $select_info);
                $fetch_info = mysqli_fetch_assoc($execute_info);
                    $user_email = $fetch_info['email'];

                return $user_email;    
            }
            // METHOD THAT DISPLA BACKGROUND IMAGE
            // =============================================================================================================================
            public function getBackgroundImage($url){
                $select_info = "SELECT * FROM intelligent_users WHERE url_identity='$url'";
                $execute_info = mysqli_query($this->Frequency(), $select_info);
                $fetch_info = mysqli_fetch_assoc($execute_info);
                    $user_email = $fetch_info['email'];

                $selectBackgroundImage = "SELECT background_image FROM user_profile_background_image WHERE user_email='$user_email' AND background_status='on'";
                $execute_background = mysqli_query($this->Frequency(),$selectBackgroundImage);
                $fetch_image = mysqli_fetch_assoc($execute_background); ?>
                <img src="<?php echo '../Images/profile-img/background-img/'.$fetch_image['background_image'] ?>" width="100%" height="100%">
            <?php }

            // METHOD GET PROFILE IMAGE
            // =============================================================================================================================
            public function getProfileImage($url){
                $select_info = "SELECT * FROM intelligent_users WHERE url_identity='$url'";
                $execute_info = mysqli_query($this->Frequency(), $select_info);
                $fetch_info = mysqli_fetch_assoc($execute_info);
                    $user_email = $fetch_info['email'];

                $selectImage = "SELECT * FROM user_profile_image WHERE usr_email='$user_email' AND status_image='1'";
                $executeImage = mysqli_query($this->Frequency(),$selectImage);
                $fetchImage = mysqli_fetch_assoc($executeImage); ?>
                    <img src="<?php echo '../Images/profile-img/profile-image/'.$fetchImage['profile_image'] ?>" width="100%" height="100%">
            <?php }

            public function countPhoto($email){
                $Photos = 0;
                $selectPhotos = "SELECT * FROM user_common_post WHERE poster_email='$email'";
                $execute_Photo = mysqli_query($this->Frequency(),$selectPhotos);
                while($fetchPhoto = mysqli_fetch_assoc($execute_Photo)){
                    $Photos = $Photos + 1;
                }

                $profile_image = 0;
                $selectImage = "SELECT * FROM user_profile_image WHERE usr_email='$email'";
                $executeImage = mysqli_query($this->Frequency(),$selectImage);
                while($fetchImage = mysqli_fetch_assoc($executeImage)){
                    $profile_image = $profile_image + 1;
                }

                $total_image =  $Photos + $profile_image;
                echo $total_image;
            }

            // GET DETAIL ON TOP PROFILE IMAGE
            // ======================================================================================================================================
            public function getProfileDetail($url){
                $select_info = "SELECT * FROM intelligent_users WHERE url_identity='$url'";
                $execute_info = mysqli_query($this->Frequency(), $select_info);
                $fetch_info = mysqli_fetch_assoc($execute_info);
                    $user_email = $fetch_info['email'];
                    $user_identity = $fetch_info['identity'];

                $followerTrainer = 0;
                $selectTrainer = "SELECT * FROM user_follow_board WHERE host_email='$user_email' AND reciever_title='trainer'";
                $executeTrainer = mysqli_query($this->Frequency(),$selectTrainer);
                while($fetchTrainer = mysqli_fetch_assoc($executeTrainer)){
                    $followerTrainer = $followerTrainer + 1;
                }

                $followingTrainer = 0;
                $selectTrainer = "SELECT * FROM user_follow_board WHERE reciever_email='$user_email' AND host_title='trainer'";
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
                } 
                
                $selectBio = "SELECT bio FROM user_bio WHERE email='$user_email' AND bio_status='on'";
                $executeBio = mysqli_query($this->Frequency(),$selectBio);
                $fetchBio = mysqli_fetch_assoc($executeBio);  ?>

                    <div class="trainer-count">Photos <span><?php $this->countPhoto($user_email); ?></span></div>
                    <div class="trainer-count">Trainers <span><?php echo $total_trainer; ?></span></div>
                    <div class="course-count">Classes <span><?php echo $courses; ?></span></div>
                    <div class="written-biography"><?php echo $fetchBio['bio']; ?></div>
            <?php }

            public function user_name ($url){
                $select_info = "SELECT * FROM intelligent_users WHERE url_identity='$url'";
                $execute_info = mysqli_query($this->Frequency(), $select_info);
                $fetch_info = mysqli_fetch_assoc($execute_info);
                    
                echo $fetch_info['firstName'].' '.$fetch_info['lastName'];
            }

            public function profile_info($url){
                $selectProfileDetail = "SELECT * FROM intelligent_users WHERE url_identity='$url'";
                $executeDetail = mysqli_query($this->Frequency(), $selectProfileDetail);
                $fetchDetail = mysqli_fetch_assoc($executeDetail); 
                    $user_email = $fetchDetail['email']; 
                    $user_identity = $fetchDetail['identity'];
                    $title = $fetchDetail['title'];
    
                // select location
                // ==========================================================================================================================================
                $select_location = "SELECT * FROM more_account_info WHERE email='$user_email'";
                $execute_location = mysqli_query($this->Frequency(), $select_location);
                $fetch_location = mysqli_fetch_assoc($execute_location);
                    $getLocation = $fetch_location['location'];
    
                // STATISTIC ON USER DETAIL
                // ==========================================================================================================================================
                $followers = 0;
                $selectFollowers = "SELECT * FROM user_follow_board WHERE reciever_email='$user_email'";
                $executeFollowers = mysqli_query($this->Frequency(),$selectFollowers);
                while($fetchFollowers = mysqli_fetch_assoc($executeFollowers)){
                    $followers = $followers + 1;
                }
    
                $Following = 0;
                $selectFollowing = "SELECT * FROM user_follow_board WHERE host_email='$user_email'";
                $execute_following = mysqli_query($this->Frequency(),$selectFollowing);
                while($fetchFollowing = mysqli_fetch_assoc($execute_following)){
                    $Following = $Following + 1;
                }
    
                $followerTrainer = 0;
                $selectTrainer = "SELECT * FROM user_follow_board WHERE host_email='$user_email' AND reciever_title='trainer'";
                $executeTrainer = mysqli_query($this->Frequency(),$selectTrainer);
                while($fetchTrainer = mysqli_fetch_assoc($executeTrainer)){
                    $followerTrainer = $followerTrainer + 1;
                }
    
                $followingTrainer = 0;
                $selectTrainer = "SELECT * FROM user_follow_board WHERE reciever_email='$user_email' AND host_title='trainer'";
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
                } 

                $Photos = 0;
                $selectPhotos = "SELECT * FROM user_common_post WHERE poster_email='$user_email' AND media_type='image'";
                $execute_Photo = mysqli_query($this->Frequency(),$selectPhotos);
                while($fetchPhoto = mysqli_fetch_assoc($execute_Photo)){
                    $Photos = $Photos + 1;
                }

                $video = 0;
                $selectVideo = "SELECT * FROM user_common_post WHERE poster_email='$user_email' AND media_type='video'";
                $executeVideo = mysqli_query($this->Frequency(),$selectVideo);
                while($fetchVideo = mysqli_fetch_assoc($executeVideo)){
                    $video = $video + 1;
                } 
                
                if($title == "trainer"){  ?>
                    <div class="user-status-info ">
                        <div class="user-location"><i class="fa fa-map-marker mr-2"></i><?php echo $getLocation; ?></div>
                        <div class="email"><i class="fa fa-envelope-o mr-2"></i><?php echo $user_email; ?></div>
                        <div class="courses-count-profile">Trainer <span><?php echo $total_trainer; ?></span></div>
                        <div class="courses-count-profile">Classes <span><?php echo $courses; ?></span></div>
                        <div class="followers-count-profile"> followers <span><?php echo $followers; ?></span></div>
                        <div class="following-count-profile">following <span><?php echo $Following; ?></span></div>
                        <div class="courses-count-profile">Photos <span><?php $this->countPhoto($user_email); ?></span></div>
                    </div>
                <?php }else{ 
                    
                    $check_if_exist = "SELECT * FROM more_account_info WHERE email='$'";
                    $excute_check = mysqli_query($this->Frequency(), $check_if_exist);
                    $fetch_info = mysqli_fetch_assoc($excute_check);
                        $school = $fetch_info['School'];
                        $Department = $fetch_info['Department'];
                        $level = $fetch_info['level'];
                        $contact = $fetch_info['contact'];
                    ?>
                    <div class="user-status-info ">
                        <div class="user-location"><i class="fa fa-map-marker mr-2"></i><?php echo $getLocation; ?></div>
                        <div class="email"><i class="fa fa-envelope-o mr-2"></i><?php echo $user_email; ?></div>
                        <div class="courses-count-profile"><span><?php echo $Department; ?></span></div>
                        <div class="courses-count-profile"><span><?php echo $school; ?></span></div>
                        <div class="courses-count-profile">Level <span><?php echo $level; ?></span></div>
                        <div class="courses-count-profile">Contact <span><?php echo $contact; ?></span></div>
                        <div class="courses-count-profile">Trainer <span><?php echo $total_trainer; ?></span></div>
                        <div class="courses-count-profile">Classes <span><?php echo $courses; ?></span></div>
                        <div class="followers-count-profile"> followers <span><?php echo $followers; ?></span></div>
                        <div class="following-count-profile">following <span><?php echo $Following; ?></span></div>
                        <div class="courses-count-profile">Videos <span><?php echo $video; ?></span></div>
                        <div class="courses-count-profile">Photos <span><?php echo $Photos; ?></span></div>
                    </div>
                <?php } ?>
            <?php }

            public function check_follow ($url, $my_email){
                $selectProfileDetail = "SELECT * FROM intelligent_users WHERE url_identity='$url'";
                $executeDetail = mysqli_query($this->Frequency(), $selectProfileDetail);
                $fetchDetail = mysqli_fetch_assoc($executeDetail); 
                    $user_email = $fetchDetail['email']; 
                    $firstName = $fetchDetail['firstName'];
                    $lastName = $fetchDetail['lastName'];

                $check_friends = "SELECT * FROM user_follow_board WHERE reciever_email='$user_email' AND host_email='$my_email' OR reciever_email='$my_email' AND host_email='$user_email'";
                $execute_friends = mysqli_query($this->Frequency(), $check_friends);
                if(mysqli_num_rows($execute_friends)){ 

                }else{ 
                    if($user_email == $my_email){

                    }else{ ?>
                        <div class="absess-user ml-3 mr-3">
                            <div class="basic-information">Explore new connection</div>
                            <div class="new-conn">
                                <div class="Intention">Follow <?php echo $firstName; ?> <?php echo $lastName; ?>, To get photos, help and posts on your timeline everyday</div>
                                <div class="absess"><button id="<?php echo $user_email; ?>" onclick="followUser(this)">Follow</button></div>
                            </div>
                        </div>
                   <?php } ?>
                <?php }
            }

        }
     

        // RUN CLASS CALLED VIRTUAL_PAGE
        // ================================================================================================================================
        $virtual_page = new Virtual_page();
        $fames = new Fames($virtual_page->show_email($url_code));
        $post_illu = new Post_Illumination($virtual_page->show_email($url_code));
?>
<!DOCTYPE html>
<html lang="en">
   <head>
       <!-- meta tags -->
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
       <meta name="description" content="intelligentBox is The system that help the tvet school or any other kind of Person who want to learn the lessons of tvet Rwanda and others related to intellectual skills through online and meet up with many other student who also is learning the related thing and get challenge with them" />
       <meta name="keywords" content="social network,social media, learning, e-learning, share, friends, challenge, tvet, lessons, schools, create, skills, account, signin, online charting, online learning, courses, groups" />
       <meta name="author" content="Manirabona Patience" />
       <meta name="robots" content="index, follow"/>
       <meta name="apple-mobile-web-app-capable" content="yes">

       <title>intelligentBox</title>

       <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon">
       <link rel="stylesheet" href="../Assets/css/public_profile.box.css">

       <!-- external css file/ libraries -->
       <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
       <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
       <link rel="stylesheet" href="../Assets/css/pre-loader-image.css">
   </head>
   <body class="bg-white">
       
       <!-- Section that will hold header -->
       <!-- ============================================================================================================================== -->
       <div class="header-holder">
           <?php require_once ("../header/header.php"); ?>
       </div>
       <!-- ================================================================================================================================= -->


       <!-- down section -->
       <!-- ================================================================================================================================= -->
       <div class="down-section">
           <div class="profile-container-resizer pb-5">
               <div class="user-profile-section col-md-11 mr-auto ml-auto">

                    <!-- GLOBAL JS EMAIL -->
                    <!-- ============================================================================================================================== -->
                    <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                    <!-- ============================================================================================================================== -->

                    <!-- top section and backround image -->
                    <!-- ============================================================================================================================== -->
                    <div class="container">
                        <div class="top-section position-relative">
                            <!-- top background image -->
                            <!-- ========================================================================================================================================================= -->
                            <div class="user-background-image"><?php echo $virtual_page->getBackgroundImage($url_code); ?></div>
                            <!-- ======================================================================================================================================================== -->
                        
                            <!-- user biography -->
                            <!-- ============================================================================================================ -->
                            <div class="bio-section">
                                <div class="user-biography">
                                    <?php $virtual_page->getProfileDetail($url_code); ?>
                                </div>
                            </div>
                            <!-- ============================================================================================================ -->

                            <!-- profile photo of the user -->
                            <!-- =================================================================================================== -->
                            <div class="profile-detail">
                                <div class="user-detail-profile d-flex">
                                    <div class="profile-image-user">
                                        <?php $virtual_page->getProfileImage($url_code); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- ==================================================================================================== -->

                            <!-- name of the user-->
                            <!-- ===================================================================================================================================== -->
                            <div class="settings">
                                <div class="settings-alignment d-flex">
                                    <div class="user-full-name"><?php $virtual_page->user_name($url_code); ?></div>
                                </div>
                            </div>
                            <!-- ==================================================================================================================================== -->
                        </div>
                    </div>
                    <!-- ====================================================================================================================== -->
                    

                    <!-- bottom section containr all info -->
                    <!-- ======================================================================================================================== -->
                    <div class="container">
                        <div class="alignment d-flex justify-content-between">

                            <!-- left side of section -->
                            <!-- ================================================================================================================ -->
                            <div class="right-section">

                                <!-- user into section -->
                                <!-- =================================================================================================================== -->
                                <div class="user-name-location-email">
                                    <div class="basic-information">Basic information about <?php $virtual_page->user_name($url_code); ?></div>
                                    <?php $virtual_page->profile_info($url_code); ?>
                                </div>
                                <!-- =========================================================================================================================== -->

                                <!-- course , trainer and question -->
                                <!-- ===================================================================================================================================== -->
                                <div class="card-trainer-question">
                                    <div class="post-found">

                                        <!-- card title -->
                                        <!-- ============================================================================================================================ -->
                                        <div class="card-title-content">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item-card">
                                                    <a class="nav-link-box" data-toggle="tab" href="#courses" role="tab">shared posts</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- ============================================================================================================================= -->

                                        <!-- card body -->
                                        <!-- ============================================================================================================================== -->
                                        <div class="card-body-content">
                                            <!-- Tab panes -->
                                            <div class="tab-content position-relative">

                                                <!-- my post shared -->
                                                <!-- ========================================================================================================================================= -->
                                                <div class="tab-pane active p-0" id="courses" role="tabpanel" style="max-height: 550px;">
                                                    <div class="Last-updates">
                                                        <?php $post_illu->show_posts('feeds', '../videos/activity_stream-vd/','../Images/activity_stream/'); ?>
                                                    </div>
                                                </div>
                                                <!-- =================================================================================================================================================================================== -->

                                            </div>
                                        </div>
                                        <!-- end card body -->
                                        <!-- ==================================================================================================================================== -->
                                        
                                    </div>
                                    <!-- ======================================================================================================================================== -->

                                </div>
                                <!-- ===================================================================================================================================================== -->

                        </div>
                        <!-- ================================================================================================================================== -->


                        <!-- right side of section -->
                        <!-- ============================================================================================================================================ -->
                        <div class="left-section">

                            <!-- message to visitor to follow this user -->
                            <!-- ===================================================================================================================================== -->
                            <div class="check_follow">
                                <?php $virtual_page->check_follow($url_code, $Session_email_call); ?>
                            </div>
                            <!-- ====================================================================================================================================== -->

                            <!-- gallry section -->
                            <!-- ====================================================================================================================================== -->
                            <div class="user-friend">
                                <div class="label"> Photos </div>
                                <div class="galleries-list mt-2">                                       
                                    <?php $fames->all_photos(); ?>
                                </div>
                            </div>
                            <!-- ================================================================================================================================ -->


                            <!-- nearby learner -->
                            <!-- ============================================================================================================================= -->
                            <div class="about-Friend">
                                <div class="user-friend">
                                    <div class="label"> Trainers </div>
                                    <div class="friend-list mt-2">
                                        <?php $fames->more_trainer(); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- =========================================================================================================================== -->

                        </div>
                        <!-- ===================================================================================================================== -->
                    </div>
                        
                </div>
                <!-- ==================================================================================================================== -->
                    
            </div>
        </div>
    </div>
    <!-- ====================================================================================================================================== -->
 

    <!-- javascript external file, type js  and libraries-->
    <!-- ================================================================ -->
    <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
    <script src="../Lib/jquery/jquery.min.js"></script>
    <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
    <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
    <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
    <script>
        function followUser(obj){
            var followingEmail = obj.id;   // who i going to follow
            var followersEmail =  document.getElementById("hiddenEmail").value;  // const me 
            $(document).ready(function(){
                $(this).load("follow_user.php",{
                    followingEmail: followingEmail,
                    followersEmail: followersEmail        
                },function(){
                    obj.style.border = "1px solid #d3d3d3";
                    obj.style.background = "white";
                    obj.style.color = "#071c2e";
                    obj.innerHTML = "Following";
                });
            });
        }
    </script>
    <!-- ======================================================================================================================================================= -->

   </body>
</html>
<?php }

}else{
    header("Location: ../Personal-account/account_shortcut.box.php");
    exit();
} ?>