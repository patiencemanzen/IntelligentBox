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
  session_start(); 
  if(isset($_SESSION['Email'])){
    $Session_email_call = $_SESSION['Email'];
    $firstName = $_SESSION['Firstname'];
    $lastName = $_SESSION['Lastname'];
    $user_title = $_SESSION['title']; 

    // INITIALIZE DATABASE CONNECTION
    // =====================================================================================================
    require_once ("../Scyllar.php");
    // =====================================================================================================

  
    // CHECK IF URL GROUP SETTED
    // =====================================================================================================================================================
    if(isset($_REQUEST['group'])){
        $url_encode = $_REQUEST['group'];
        $new_connection = new Scyllar();

        $select_group_info = "SELECT * FROM user_groups WHERE url_encode='$url_encode'";
        $execute_group_info = mysqli_query($new_connection->Frequency(), $select_group_info);
        $fetch_info = mysqli_fetch_assoc($execute_group_info);
            $group_image = $fetch_info['group_profile_image'];
            $group_name = $fetch_info['group_name'];
            $group_bio = $fetch_info['group_bio'];
            $group_privacy = $fetch_info['group_privacy'];
            $creater = $fetch_info['email']; 
            $creater_firstname = $fetch_info['firstName'];
            $creater_lastname = $fetch_info['lastName'];  
            $group_identity = $fetch_info['identity']; 

            
            $Trainer = 0;
            $selectTrainer = "SELECT * FROM user_group_member WHERE group_identity='$group_identity'";
            $executeTrainer = mysqli_query($new_connection->Frequency(),$selectTrainer);
            while($fetchTrainer = mysqli_fetch_assoc($executeTrainer)){
                $Trainer = $Trainer + 1;
            }
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

       <!-- index, used to repesent intelligent box on search engine and it browser -->
       <title>intelligentBox</title>

       <!-- intelligent box logo, present on search engine and on browse header -->
       <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon">

       <!-- external style link, type css file-->
       <link rel="stylesheet" href="../Assets/css/group_discusion.box.css">

       <!-- external css file/ libraries -->
       <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
       <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
       <link rel="stylesheet" href="../Lib/animate/animate.min.css">
       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
       <link rel="stylesheet" href="../Lib/jquery/jquery.fancybox.css">
       <link rel="stylesheet" href="../Lib/lightbox/css/lightbox.min.css">
       <link rel="stylesheet" href="../Lib/owlcarousel/assets/owl.carousel.min.css">
       <link rel="stylesheet" href="../Lib/slick/slick.css">
       <link rel="stylesheet" href="../Lib/theme-color/violet-theme.css">
       <link rel="stylesheet" href="../Lib/venobox/venobox.css">
   
   </head>
   <body>
    <?php 
        // INTERFACE CALLED GROUP_PAGE
        // ======================================================================================================
        interface Discussion_page {
            public function creater_image ($E_mail);
        }

        // CLASS CONTAIN ALL METHORD OF THIS PAGE
        // ======================================================================================================
        class Group_discussion extends Scyllar implements Discussion_page {
            private $session;

            public function __construct($getSession){
                $this->session = $getSession;
            }
            // select creater profile image
            // ==================================================================================================
            public function creater_image($email){
                $select_profile_image = "SELECT * FROM user_profile_image WHERE usr_email='$email'";
                $execute_profile_image = mysqli_query($this->Frequency(), $select_profile_image);
                $fetch_profile_image = mysqli_fetch_assoc($execute_profile_image);
                    $profile_image =  $fetch_profile_image['profile_image'];
                return $profile_image;
            }
        } ?>

        <!-- Section that will hold header -->
        <!-- ============================================================================================================================= -->
        <!-- ============================================================================================================================= -->
        <!-- ============================================================================================================================== -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- end header section -->
        <!-- =============================================================================================================================== -->
        <!-- =============================================================================================================================== -->
        <!-- =============================================================================================================================== -->



        <!-- down section -->
        <!-- ================================================================================================================================ -->
        <!-- ================================================================================================================================ -->
        <!-- ================================================================================================================================ -->
        <div class="container mt-5">
            <div class="down-section col-xs-12 col-md-10 ml-auto mr-auto">
                
                <!-- GLOBAL JS EMAIL -->
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                <input type="hidden" name="" id="hiddenIdentity" value="<?php echo $group_identity; ?>">
                <!-- END GLOBAL EMAIL -->

                <!-- top-background img -->
                <!-- ======================================================================================================================== -->
                <!-- ========================================================================================================================= -->
                <div class="background-top-image">
                    <div class="group-name"><?php echo $group_name; ?></div>
                    <div class="top-pre-background-image"><img src="<?php echo '../Images/groups/'.$group_image; ?>" alt="" width="100%" height="100%"></div>

                    <!-- all member images -->
                    <!-- ============================================================================================================================== -->
                    <!-- ============================================================================================================================== -->
                    <div class="group-member d-flex justify-content-between">
                        <div class="friends-cover position-relative" id="most_used">
                            
                        </div>

                        <!-- all group detail -->
                        <!-- ================================================================================================================================ -->
                        <!-- ================================================================================================================================ -->
                        <div class="group-detail">
                            <div class="detail-list d-flex justify-content-between">
                                <!-- <div class="detail"><i class="fa fa-user-circle-o"></i><span class="pre-accu">member</span> <span>478</span></div> -->
                                <!-- <div class="detail"><i class="fa fa-thumbs-o-up"></i> <span class="pre-accu"> likes </span> <span>35K</span></div>
                                <div class="detail"><i class="fa fa-graduation-cap"></i><span class="pre-accu"> courses </span> <span>46</span></div> -->
                                <div class="detail"><i class="fa fa-support"></i> <span class="pre-accu">trainer</span> <span><?php echo $Trainer; ?></span></div>
                                <div class="detail d-flex">
                                    <i class="fa fa-search "></i>
                                    <input type="text" name="" id="search_member" class="search" placeholder="seach member E_mail.." autocomplete="off" onkeyup="openResult()">
                                    <div class="searched-result" id="searched-results">
                                        <div class="list-result" id="result_search">
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- popup discovery -->
                                <!-- ============================================================================================================================================ -->
                                <div class="position-relative">
                                    <div onclick="document.getElementById('discover').style.display = 'block'"><button class="invite-friend"><i class="fa fa-plus mr-1"></i>Envite People</button></div>

                                    <!-- popup disocver section -->
                                    <!-- ================================================================================================================================================== -->
                                    <div class="settings-and-info" id="discover">
                                        <div class="settings-pre">
                                            Envite
                                            <i onclick="document.getElementById('discover').style.display = 'none'" class="fa fa-times"></i>
                                        </div>
                                        <div class="setting-list">

                                            <!-- each discovery holder -->
                                            <!-- =================================================================================================================== -->
                                            <!-- =================================================================================================================== -->
                                            <div class="each-setting">
                                                <div class="title-settings">Students</div>
                                                <div class="reply-setting" id="discover-student">

                                                </div>
                                            </div>
                                            <!-- end discovery holder -->
                                            <!-- ===================================================================================================================================== -->
                                            <!-- ===================================================================================================================================== -->
                                        
                                            <!-- discver trainers -->
                                            <!-- ============================================================================================================================================= -->
                                            <!-- ============================================================================================================================================= -->
                                            <div class="each-setting">
                                                <div class="title-settings">Trainers</div>
                                                <div class="reply-setting" id="discover-trainer">

                                                </div>
                                            </div>
                                            <!-- end discovery trainer -->
                                            <!-- =========================================================================================================================================================== -->
                                            <!-- ================================================================================================================================================================ -->
                                            
                                        </div>
                                    </div>
                                    <!-- end popup discoevry -->
                                    <!-- ================================================================================================================================ -->

                                </div>
                                <!-- end top popup discovry -->
                                <!-- ================================================================================================================================================================================= -->
                                <!-- ================================================================================================================================================================================= -->

                            </div>
                        </div>
                        <!-- end group detail -->
                        <!-- ============================================================================================================================ -->
                        <!-- ============================================================================================================================ -->


                        <!-- APPLY ON SMALL DEVICE -->
                        <!-- ============================================================================================================== -->
                        <!-- ============================================================================================================== -->
                        <div class="small-dev">
                            <div class="align-justify" onclick="openNav()"><i class="fa fa-align-justify"></i></div>

                            <!-- sidenav -->
                            <!-- ==================================================================================== -->
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <div class="detailed d-flex ml-2 mr-2">
                                    <i class="fa fa-search mr-2"></i>
                                    <input type="text" name="" id="search_small_member" class="search" placeholder="seach member.." autocomplete="off" onkeyup="openResult_small()">
                                    <div class="searched-result shadow-sm" id="searched-result">
                                        <div class="list-result">

                                        </div>
                                    </div>
                                </div>
                                <div class="detail-list d-flex justify-content-between ml-2 mr-2 mt-3">
                                    <!-- <div class="detail"><i class="fa fa-user-circle-o"></i><span class="pre-accu">member</span> <span>478</span></div> -->
                                    <!-- <div class="detail"><i class="fa fa-thumbs-o-up"></i> <span class="pre-accu"> likes </span> <span>35K</span></div>
                                    <div class="detail"><i class="fa fa-graduation-cap"></i><span class="pre-accu"> courses </span> <span>46</span></div> -->
                                    <div class="detail"><i class="fa fa-support"></i> <span class="pre-accu">trainer</span> <span><?php echo $Trainer; ?></span></div>
                                </div>

                                <!-- rights-de on small device -->
                                <div class="right-side-holder">

                                    <!-- create your own post -->
                                    <!-- ========================================================================================================================================================== -->
                                    <!-- ========================================================================================================================================================== -->
                                    <div class="position-relative ml-2 mr-2">
                                        <!-- give user ability to create post -->
                                        <div class="create-short-story mt-3 shadow-sm">
                                            <div class="title-short-story">Define your own post</div>
                                            <div class="user-typer d-flex">
                                                <div>
                                                    <div class="user-image"><img src="../Images/history-img/final-image-of-rainforest-800x445.jpg" alt="" width="100%" height="100%"></div>
                                                </div>
                                                <div class="usr-textarea ml-2">
                                                    <div class="type-something">
                                                        <textarea name="" id="" cols="30" rows="2" placeholder="write something.." onclick="createPost(this)"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- give user privelege of creattion of story -->
                                        <!-- ===================================================== -->
                                        <div class="create-stoty-prive" id="create-post">
                                            <div class="section-title">
                                                <div>Define your post</div>
                                                <div class="close-post-creation" onclick="this.parentNode.parentNode.style.display = 'none'"><i class="fa fa-times"></i></div>
                                            </div>
                                            <form action="group_discussion_posts.php" method="POST" enctype="multipart/form-data">
                                                <div class="create-area">
                                                    <div class="image-story-preview">
                                                        <div class="for-image" id="when_photo_small">
                                                            <img src="" class="preview_photo_small" alt="" width="100%" height="100%">
                                                        </div>
                                                    </div>
                                                    <div class="create-body-title">
                                                        <div class="story-body">
                                                            <div class="create-story-body">
                                                                <textarea name="user_caption" id="" rows="5" cols="30" placeholder="What going on there?" autocomplete="off"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sectio-footer">
                                                    <input type="hidden" name="group_name" value="<?php echo  $group_name; ?>">
                                                    <input type="hidden" name="group_identity" value="<?php echo $group_identity; ?>">
                                                    <input type="hidden" name="url_code" value="<?php echo $url_encode; ?>">
                                                    <input type="file" name="file_media" id="group_posts_small" style="display: none;">
                                                    <div class="choose-image-story"><button type="button" onclick="triggerInputFile_post_small(this)">choose image file</button></div>
                                                    <div class="send-post">
                                                        <button name="submit_file" type="submit">create</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end privellege -->
                                        <!-- ================================================================================================================================== -->
                                    </div>
                                    <!-- end post creation-->
                                    <!-- ============================================================================================================================================= -->
                                    <!-- ============================================================================================================================================== -->
    
    
                                    <!-- new more trainer -->
                                    <!-- ========================================================================================================================================================== -->
                                    <!-- ========================================================================================================================================================== -->
                                    <div class="top-learner mt-3 ml-2 mr-2">
                                        <div class="friends-title">
                                            <div class="title-learner">Active members(s)</div>
                                        </div>
                                        <div class="learners-list" id="load_active">
                                        
                                        </div>
                                    </div>
                                    <!-- end trainer find -->
                                    <!-- ========================================================================================================================================================== -->
                                    <!-- ========================================================================================================================================================== -->
                                    
                                </div>

                            </div> 
                        </div>
                        <!-- end small device -->
                        <!-- ================================================================================================================ -->
                        <!-- ================================================================================================================ -->

                    </div>
                    <!-- end member images -->
                    <!-- =============================================================================================================================== -->
                    <!-- =============================================================================================================================== -->

                </div>
                <!-- end top background image -->
                <!-- ========================================================================================================================== -->
                <!-- ========================================================================================================================== -->


                <!-- start main section -->
                <!-- ============================================================================================================================================= -->
                <!-- ============================================================================================================================================= -->
                <!-- ============================================================================================================================================== -->
                <div class="main-section d-flex position-relative">

                    <!-- left side section -->
                    <!-- ============================================================================================================================================ -->
                    <!-- ============================================================================================================================================ -->
                    <div class="left-side">
                        <div class="left-contents">

                            <!-- post shared -->
                            <!-- ===================================================================================================================================== -->
                            <div class="post-shared mt-3">
                                <div class="post-list">
                                    <div class="post-shared-section-title mb-3">activity feeds</div>
                                    <div id="hold_last_post">

                                    </div>
                                </div>
                            </div>
                            <!-- end post shared  -->
                            <!-- ============================================================================================================================================== -->
                            <!-- ===================================================================================================================================================== -->

                        </div>
                    </div>
                    <!-- end left section -->
                    <!-- ========================================================================================================================================================== -->
                    <!-- ========================================================================================================================================================== -->
                    <!-- ========================================================================================================================================================== -->



                        <!-- right side section -->
                        <!-- ========================================================================================================================================================== -->
                        <!-- ========================================================================================================================================================== -->
                        <!-- ========================================================================================================================================================== -->
                        <div class="right-side">
                            <div class="right-side-holder">

                                <!-- create your own post -->
                                <!-- ========================================================================================================================================================== -->
                                <!-- ========================================================================================================================================================== -->
                                <div class="position-relative">
                                    <!-- give user ability to create post -->
                                    <div class="create-short-story mt-3 shadow-sm">
                                        <div class="title-short-story">Define your own post</div>
                                        <div class="user-typer d-flex">
                                            <div><div class="user-image" id="poster_image">
                                                
                                            </div></div>
                                            <div class="usr-textarea ml-2">
                                                <div class="type-something">
                                                    <textarea name="" id="" cols="30" rows="2" placeholder="write something.." onclick="createPost(this)"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- give user privelege of creattion of story -->
                                    <!-- ===================================================== -->
                                    <div class="create-stoty-prive" id="create-post">
                                        <div class="section-title">
                                            <div>Define your post</div>
                                            <div class="close-post-creation" onclick="this.parentNode.parentNode.style.display = 'none'"><i class="fa fa-times"></i></div>
                                        </div>
                                        <div class="create-area">
                                            <div class="image-story-preview">
                                                <div class="for-image" id="when_photo">
                                                    <img src="" class="preview_photo" alt="" width="100%" height="100%">
                                                </div>
                                            </div>
                                            <form action="group_discussion_posts.php" method="POST" enctype="multipart/form-data">
                                            <div class="create-body-title">
                                                <div class="story-body">
                                                    <div class="create-story-body">
                                                        <textarea name="user_caption" id="" cols="30" placeholder="What going on there?" autocomplete="off"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sectio-footer">
                                            <input type="hidden" name="group_name" value="<?php echo  $group_name; ?>">
                                            <input type="hidden" name="group_identity" value="<?php echo $group_identity; ?>">
                                            <input type="hidden" name="url_code" value="<?php echo $url_encode; ?>">
                                            <input type="file" name="file_media" id="group_posts" style="display: none;">
                                            <div class="choose-image-story"><button type="button" onclick="triggerInputFile_post(this)">choose file</button></div>
                                            <div class="send-post">
                                                <button name="submit_file_disc" type="submit_posts">create</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    <!-- end privellege -->
                                    <!-- ================================================================================================================================== -->
                                </div>
                                <!-- end post creation-->
                                <!-- ============================================================================================================================================= -->
                                <!-- ============================================================================================================================================== -->


                                <!-- new more trainer -->
                                <!-- ========================================================================================================================================================== -->
                                <!-- ========================================================================================================================================================== -->
                                <div class="top-learner mt-3">
                                    <div class="friends-title">
                                        <div class="title-learner">Active member(s)</div>
                                    </div>
                                    <div class="learners-list" id="active_members">

                                    </div>
                                </div>
                                <!-- end trainer find -->
                                <!-- ========================================================================================================================================================== -->
                                <!-- ========================================================================================================================================================== -->
                                
                            </div>
                        </div>
                        <!-- end right section -->
                        <!-- ========================================================================================================================================================== -->
                        <!-- ========================================================================================================================================================== -->
                        <!-- ========================================================================================================================================================== -->

                    </div>
                    <!-- end main section -->
                    <!-- =============================================================================================================================== -->
                    <!-- =============================================================================================================================== -->
                    <!-- =============================================================================================================================== -->

                </div>
                <!-- end down section -->
    
            </div>
            <!-- end down container -->
            <!-- ================================================================================================================================== -->
            <!-- ========================================================================================================================================= -->
    
            <!-- ERROR HANDLING -->
            <!-- ======================================================================================================================================================== -->
            <?php if(isset($_REQUEST['msg']) == "extentension"){?>
                <div class="Display_error">
                    <div class="error-icon"><i class="fa fa-exclamation-triangle"></i></div>
                    <div class="check-word_error"> Check file extension and try again </div>
                </div>
            <?php }else if(isset($_REQUEST['msg']) ==  "success"){?>
                <div class="Display_error">
                    <div class="error-icon"><i class="fa fa-check"></i></div>
                    <div class="check-word_error"> Post successfully applied </div>
                </div>
            <?php }else if(isset($_REQUEST['msg']) == "fail"){?>
                <div class="Display_error">
                    <div class="error-icon"><i class="fa fa-times"></i></div>
                    <div class="check-word_error"> Fail to upload your post, try again </div>
                </div>
            <?php }else if(isset($_REQUEST['msg']) == "move_fail"){?>
                <div class="Display_error">
                    <div class="error-icon"><i class="fa fa-times"></i></div>
                    <div class="check-word_error"> Save uploaded file fail, try another </div>
                </div>
            <?php }else if(isset($_REQUEST['msg']) == "size"){?>
                <div class="Display_error">
                    <div class="error-icon"><i class="fa fa-times"></i></div>
                    <div class="check-word_error"> Too large file, try another </div>
                </div>
            <?php } ?>

            <!-- when it come to group challenge page redirection -->
            <!-- ======================================================================================================== -->
            <div class="div_challenges_hold d-flex flex-column" id="challenges_holder">
                
            </div>
            <!-- ======================================================================================================== -->

            
    
        <!-- javascript external file, type js  and libraries-->
        <!-- ================================================ -->
        <!-- ======================================================== -->
        <script src="../Assets/js/group_discusion.popup.box.js"></script>
        <script src="../Assets/js/video_controll.box.js"></script>
        <script src="../Assets/js/group_disc_posts.box.js"></script>

        <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="../Lib/bootstrap/js/bootstrap-datepicker.js"></script> 
        <script src="../Lib/custom/custom.js"></script>
        <script src="../Lib/date-picker/bootstrap-switch.js"></script>
        <script src="../Lib/date-picker/nouislider.min.js"></script>
        <script src="../Lib/easing/easing.min.js"></script>
        <script src="../Lib/jquery/jquery-migrate.min.js"></script>
        <script src="../Lib/jquery/jquery.bootstrap-wizard.js"></script>
        <script src="../Lib/jquery/jquery.counterup.js"></script>
        <script src="../Lib/jquery/jquery.fancybox.pack.js"></script>
        <script src="../Lib/jquery/jquery.min.js"></script>
        <script src="../Lib/jquery/jquery.mixitup.js"></script>
        <script src="../Lib/jquery/jquery.poptrox.min.js"></script>
        <script src="../Lib/jquery/jquery.validate.min.js"></script>
        <script src="../Lib/jquery/perfect-scrollbar.jquery.min.js"></script>
        <script src="../Lib/lightbox/js/lightbox-plus-jquery.min.js"></script>
        <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
        <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
        <script src="../Lib/owlcarousel/owl.carousel.js"></script>
        <script src="../Lib/popper/popper.min.js"></script>
        <script src="../Lib/skel/skel.min.js"></script>
        <script src="../Lib/slick/slick.js"></script>
        <script src="../Lib/superfish/superfish.js"></script>
        <script src="../Lib/venobox/venobox.js"></script>
        <script src="../Lib/wow/wow.min.js"></script>
        <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
        <script>
            $(document).ready(function() {
            //init DateTimePickers
            md.initFormExtendedDatetimepickers();
            });
        </script> 
        <script>
            $(document).ready(function() {
                // the body of this function is in assets/js/now-ui-kit.js
                nowuiKit.initSliders();
            });
        
            function scrollToDownload() {
        
                if ($('.section-download').length != 0) {
                $("html, body").animate({
                    scrollTop: $('.section-download').offset().top
                }, 1000);
                }
            }
        </script>
        <!-- end libraries -->
        <!-- ================================================================================================================================== -->
        <!-- ================================================================================================================================== -->
   </body>
</html>
<?php  
    }
  }
?>