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
       <link rel="stylesheet" href="../Assets/css/activity_stream.box.css">

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
   

       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">   
   </head>
   <body class="bg-white" id="wrap">

        <!-- Section that will hold header -->
        <!-- =============================================================================================================================== -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- end header section -->
        <!-- =============================================================================================================================== -->


        <!-- down-section -->
        <!-- ============================================================================================================================== -->
        <div class="container">
            <div class="separet_content">
                <!-- GLOBAL JS EMAIL -->
                <!-- ================================================================================== -->
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                <!-- ===================================================================================== -->

                <!-- middle side content -->
                <!-- ==================================================================================================== -->
                <div class="main">
                    <div class="middle-side-content">

                        <!-- UPPER SECTION -->
                        <!-- ========================================================================================================================== -->
                        <div class="upper-section-user">
                            <!-- filter posts -->
                            <!-- ===================================================================================================================== -->
                            <div class="filter-pots">
                                <div class="filter-post-link">
                                    <div class="input-posts">
                                        <div class="link-post">
                                            <ul class="nav" role="tablist">
                                                <!--  questions -->
                                                <li><a class="active" data-toggle="tab" href="#posts" role="tab">
                                                    <div class="status-1"><i class="fa fa-tree"></i> Posts</div>
                                                </a></li>
                                                <!-- end questions -->
                                            </ul>
                                        </div>
                                        <div class="choose-link">
                                            <div class="pre-link">Filter posts</div>
                                            <div class="select_posts">
                                                <select name="which_post" id="post-type">
                                                    <option value="">all posts</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- create post -->
                                    <!-- ======================================================================================================= -->
                                    <div class="position-relative">
                                        <div class="create-post">
                                            <div class="create-title">create post</div>
                                            <div class="create_short_post">
                                                <div><div class="post-create-img"><img src="" alt="" width="100%" height="100%"></div></div>
                                                <div class="what-going-on grobel" onclick="createPostRight(this)"><div><?php echo $lastName; ?>, What you're about?</div></div>
                                            </div>
                                        </div>
                                        <!-- give user privelege to create post through profile-->
                                        <div class="post-creation-right-side" id="post-creation-right-side">
                                            <div class="title-post-creation-right">create a post <i class="fa fa-times" onclick="document.getElementById('post-creation-right-side').style.display = 'none'"></i></div>
                                            <form action="Home_content.php" method="POST" enctype="multipart/form-data">
                                                <div class="create-area-body-right">
                                                    <div class="image-preview-post-right">
                                                        <div class="for-image" id="when_photo">
                                                            <img src="" id="preview_photo" alt="" width="100%" height="100%">
                                                        </div>
                                                    </div>
                                                    <input type="file" name="file_media" id="post_photo" style="display: none">
                                                    <input type="hidden" name="inputted_email" id="" value="<?php echo $Session_email_call; ?>">
                                                    <div class="caption-area-right">
                                                        <div class="caption-textarea-right position-relative"><textarea onkeyup="display_button()" name="user_caption" id="" cols="30" rows="10"  placeholder="What going on there?" autocomplete="off"></textarea></div>
                                                    </div>
                                                </div>
                                                <div class="option-creation-right">
                                                    <div class="choose-option-area-right">
                                                        <div class="choose-image-btn-right"><button type="button" onclick="triggerInputFile_post()"><i class="fa fa-image mr-2"></i> choose photo</button></div>
                                                    </div>
                                                    <div class="create-post-btn-right">
                                                        <div class=""><button type="submit" id="submit_post_btn" name="submit_file">create now</button></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end privelege -->
                                    </div>
                                    <!-- end create post -->
                                    <!-- ========================================================================================================= -->

                                    <!-- POST SHARED -->
                                    <!-- ========================================================================================================== -->
                                    <div class="tab-content">
                                        <div class="active tab-pane psts ml-auto mr-auto" role="tabpanel" id="posts">
                                            <div class="stream-title">activities</div>
                                            <div class="trended-stream mt-4" id="show_posts">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- END POST SHARED -->
                                    <!-- ============================================================================================================== -->

                                </div>
                            </div>
                            <!-- ====================================================================================================================== -->
                            
                        </div>
                        <!-- ========================================================================================================================== -->
                        <!-- ========================================================================================================================== -->

                    </div>
                </div>
                <!-- end middle section content -->
                <!-- =================================================================================================== -->
                <!-- ==================================================================================================== -->

                <!-- right side -->
                <!-- ================================================================================================================= -->
                <!-- ================================================================================================================= -->
                <div class="side_content">
                    <div class="right-side-content">
                        <div class="right-section">
                            <div class="home">home</div>
                        
                            <div class="user_common-status mt-3">
                                <div class="top-nav-status">
                                    <ul class="nav" role="tablist">
                                        <!--  answers -->
                                        <li><a class="active" data-toggle="tab" href="#groups" role="tab">
                                            <div class="status-1">Discover groups</div>
                                        </a></li>
                                        <!-- end answers -->

                                        <!--  answers -->
                                        <li><a class="" data-toggle="tab" href="#courses" role="tab">
                                            <div class="status-1">New classes</div>
                                        </a></li>
                                        <!-- end answers -->
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <!-- tab for groups -->
                                    <!-- ==================================================================================================================================================== -->
                                    <div class="active tab-pane tabs-answers" role="tabpanel" id="groups">
                                        <div class="title-learner">Around groups</div>
                                        <div class="group-list" id="all_groups">

                                        </div>
                                    </div>
                                    <!-- =========================================================================================================================== -->

                                    <!-- tab fr course -->
                                    <!-- =========================================================================================================================== -->
                                    <div class="tab-pane tabs-answers" role="tabpanel" id="courses">
                                        <div class="title-learner">New More classes</div>
                                        <div class="group-list" id="more_classes">
            
                                        </div>
                                    </div>
                                    <!-- ================================================================================================================ -->
                                </div>
                            </div>

                            <!-- new more trainer -->
                            <!-- ========================================================================================================== -->
                            <!-- ========================================================================================================== -->
                            <div class="top-learner mt-3">
                                <div class="title-learner">New Follow ...</div>
                                <div class="learners-list" id="new_follow_list">

                                </div>
                            </div>
                            <!-- end trainer find -->
                            <!-- =========================================================================================================== -->
                            <!-- =========================================================================================================== -->
                            
                            <!-- more friends -->
                            <!-- =========================================================================================================== -->
                            <!-- ============================================================================================================ -->
                            <!-- <div class="top-learner mt-3">
                                <div class="title-learner">More trainers ...</div>
                                <div class="learners-list" id="hold_trainer_list">

                                </div>
                            </div> -->
                            <!-- end find friend -->
                            <!-- ========================================================================================================== -->
                            <!-- =========================================================================================================== -->

                            <div class="intelligent-footer">
                                <span class="t-inbox">MicroBox Lab</span><br>
                                <span class="t-inbox">Intelligent Box &copy; 2020</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end right side -->
                <!-- ================================================================================================ -->
                <!-- ================================================================================================ -->

                <!-- ERROR HANDLING -->
                <!-- ======================================================================================================================================================== -->
                <?php if(isset($_REQUEST['extension'])){?>
                    <div class="Display_error">
                        <div class="error-icon"><i class="fa fa-exclamation-triangle"></i></div>
                        <div class="check-word_error"> Check file extension and try again </div>
                    </div>
                <?php }else if(isset($_REQUEST['success'])){?>
                    <div class="Display_error">
                        <div class="error-icon"><i class="fa fa-check"></i></div>
                        <div class="check-word_error"> Post successfully applied </div>
                    </div>
                <?php }else if(isset($_REQUEST['fail'])){?>
                    <div class="Display_error">
                        <div class="error-icon"><i class="fa fa-times"></i></div>
                        <div class="check-word_error"> Fail to upload your post, try again </div>
                    </div>
                <?php }else if(isset($_REQUEST['move_fail'])){?>
                    <div class="Display_error">
                        <div class="error-icon"><i class="fa fa-times"></i></div>
                        <div class="check-word_error"> Save uploaded file fail, try another </div>
                    </div>
                <?php }else if(isset($_REQUEST['file_size'])){?>
                    <div class="Display_error">
                        <div class="error-icon"><i class="fa fa-times"></i></div>
                        <div class="check-word_error"> Too large file, try another </div>
                    </div>
                <?php } ?>
                <!-- ========================================================================================================================================================= -->

            </div>
        </div>
        <!-- ============================================================================================================================== -->
        <!-- ============================================================================================================================== -->
        <!-- ============================================================================================================================== -->
 

        <!-- javascript external file, type js  and libraries-->
        <!-- ================================================ -->
        <!-- ================================================ -->
        <script src="../Assets/js/video_controll.box.js"></script>
        <script src="../Assets/js/activity_stream.popUp.box.js"></script>
        <script src="../Assets/js/home_content.box.js"></script>

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
        <!-- ============================================================================================= -->
        <!-- ============================================================================================== -->

   </body>
</html>
</body>
</html>
<?php } ?>