<?php 
    session_start();
    if(isset($_SESSION['Email'])){
        $Session_email_call = $_SESSION['Email'];
        $firstName = $_SESSION['Firstname'];
        $lastName = $_SESSION['Lastname'];
        $user_title = $_SESSION['title'];

        if(isset($_REQUEST['rel'])){
            $rel = $_REQUEST['rel'];
            $rel_email = $rel.'@religion.box';
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
       <link rel="stylesheet" href="../Assets/css/religion_activity.box.css">

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

        <!-- Section that will hold header -->
        <!-- ============================================================================================================================================= -->
        <!-- ============================================================================================================================================= -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- end header section -->
        <!-- ============================================================================================================================================= -->
        <!-- ============================================================================================================================================= -->

       <!-- container down -->
       <!-- =============================================================================================================================================== -->
       <!-- =============================================================================================================================================== -->
       <div class="down-section container">
           <div class="down-holder">

                <!-- GLOBAL JS EMAIL -->
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                <input type="hidden" name="" id="hiddenPageEmail" value="<?php echo $rel_email; ?>">
                <input type="hidden" name="" id="hiddenName" value="<?php echo $rel; ?>">
                <!-- END GLOBAL EMAIL -->

                <!-- top-title-background -->
                <!-- =============================================================================================================================================== -->
                <!-- =============================================================================================================================================== -->
                <div class="background-img">
                   <img src="../Images/religions/each-religion/news/rocky-creek-in-sub-alpine-valley.jpg" alt="" width="100%" height="100%">
                   <div class="user-img" id="user_image_top">

                   </div>
                   <div class="user-name-title">
                       <div><i class="fa fa-user-circle-o mr-2"></i> <?php echo $firstName; ?> <?php echo $lastName; ?> </div>
                       <div><i class="fa fa-newspaper-o mr-2"></i> Religion activity</div>
                   </div>
                </div>
                <!-- end top-background -->
                <!-- ====================================================================================================================================================== -->
                <!-- ========================================================================================================================================================= -->

                <!-- down section full news -->
                <!-- ============================================================================================================================================================= -->
                <!-- ============================================================================================================================================================= -->
                <div class="full-news-section mt-3">
                    <div class="inner-section separator d-flex">

                        <!-- left start -->
                        <!-- ======================================================================================================================================== -->
                        <div class="left-section">

                            <!-- list of all tab for continetal news -->
                            <!-- ======================================================================================================================================= -->
                            <div class="tab-content">

                                <!-- tab for africans news  -->
                                <!-- ================================================================================================================================== -->
                                <div class="tab-pane active" role="tabpanel" id="africans-news">
                                    <!-- holder -->
                                    <!-- ======================================================================================================================================================== -->
                                    <!-- ======================================================================================================================================================== -->
                                    <div class="left-holder" id="african_content">

                                    </div>
                                    <!-- end news_holder -->
                                    <!-- ======================================================================================================================================================= -->
                                    <!-- ======================================================================================================================================================== -->    
                                </div>
                                <!-- end africans news -->
                                <!-- ======================================================================================================================================== -->
                                <!-- ============================================================================================================================================ -->

                                <!-- american news -->
                                <!-- ================================================================================================================================================= -->
                                <!-- ================================================================================================================================================= -->
                                <div class="tab-pane" role="tabpanel" id="american-news">
                                    <!-- holder -->
                                    <!-- ======================================================================================================================================================== -->
                                    <!-- ======================================================================================================================================================== -->
                                    <div class="left-holder" id="american_content">

                                    </div>
                                    <!-- end news_holder -->
                                    <!-- ======================================================================================================================================================= -->
                                    <!-- ======================================================================================================================================================== --> 
                                </div>
                                <!-- end american news -->
                                <!-- ======================================================================================================================================================= -->
                                <!-- ======================================================================================================================================================= -->

                                <!-- start asian news -->
                                <!-- ============================================================================================================================================================== -->
                                <!-- ============================================================================================================================================================== -->
                                <div class="tab-pane" role="tabpanel" id="asian-news">
                                    <!-- holder -->
                                    <!-- ======================================================================================================================================================== -->
                                    <!-- ======================================================================================================================================================== -->
                                    <div class="left-holder" id="asia_content">

                                    </div>
                                    <!-- end news_holder -->
                                    <!-- ======================================================================================================================================================= -->
                                    <!-- ======================================================================================================================================================== --> 
                                </div>
                                <!-- end asians news -->
                                <!-- ================================================================================================================================================================== -->
                                <!-- ================================================================================================================================================================== -->

                                <!-- start european news -->
                                <!-- ================================================================================================================================================================== -->
                                <!-- ================================================================================================================================================================== -->
                                <div class="tab-pane" role="tabpanel" id="europian-news">
                                    <!-- holder -->
                                    <!-- ======================================================================================================================================================== -->
                                    <!-- ======================================================================================================================================================== -->
                                    <div class="left-holder" id="europe_content">

                                    </div>
                                    <!-- end news_holder -->
                                    <!-- ======================================================================================================================================================= -->
                                    <!-- ======================================================================================================================================================== --> 
                                </div>
                                <!-- end europian news -->
                                <!-- ========================================================================================================================================================================== -->
                                <!-- ========================================================================================================================================================================== -->


                            </div>
                            <!-- end tab content for continet -->
                            <!-- =============================================================================================================================================================================== -->
                            <!-- =============================================================================================================================================================================== -->

                        </div>
                        <!-- left end -->
                        <!-- ========================================================================================================================================================================================= -->
                        <!-- ========================================================================================================================================================================================= -->


                        <!-- right starts -->
                        <!-- ================================================================================================================================================================================================ -->
                        <!-- ================================================================================================================================================================================================ -->
                        <div class="right-section">
                            <div class="right-holder">

                                <!-- give user ability to create short story -->
                                <!-- ============================================================================================================================================================================================ -->
                                <!-- ============================================================================================================================================================================================ -->
                                <div class="create-short-story mt-4 position-relative">
                                    <div class="title-short-story">Define your Post</div>
                                    <div class="user-typer d-flex">
                                        <div class="user-image" id="user-image">
                                            
                                        </div>
                                        <div class="usr-textarea ml-2">
                                            <div class="type-something">
                                                <textarea name="" id="" cols="30" rows="2" placeholder="write something..." onclick="createPost(this)"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- give user privelege to create post through profile-->
                                    <div class="post-creation" id="post-creation">
                                        <div class="title-post-creation position-relative">define your post <i class="fa fa-times" onclick="document.getElementById('post-creation').style.display = 'none'"></i></div>
                                        <form action="religion_content.php" method="POST" enctype="multipart/form-data">
                                            <div class="create-area-body">
                                                <div class="image-preview-post">
                                                    <div class="for-image" id="preview_image">
                                                        <img src="" id="image" alt="" width="100%" height="100%">
                                                    </div>
                                                </div>
                                                <div class="caption-area">
                                                    <input type="file" name="choosen_file" id="chosen_file" style="display: none;">
                                                    <input type="hidden" name="hiddenrelligion_email" value="<?php echo $rel; ?>">
                                                    <input type="hidden" name="hiddenmail" value="<?php echo $Session_email_call; ?>">
                                                    <div class="caption-textarea mb-2"><textarea name="story_title" id="" cols="30" rows="1" placeholder="Title" autocomplete="off"></textarea></div>
                                                    <div class="caption-textarea"><textarea name="story_desc" id="" cols="30" rows="5" placeholder="Description" autocomplete="off"></textarea></div>
                                                </div>
                                            </div>
                                            <div class="option-creation">
                                                <div class="choose-option-area">
                                                    <div class="choose-image-btn"><button type="button" onclick="choose_image(this)"><i class="fa fa-image mr-2"></i> <span class="fa-choose"> choose photo </span> </button></div>
                                                </div>
                                                <div class="create-post-btn">
                                                    <div class=""><button type="submit" name="submit_news">create now</button></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end privelege -->
                                </div>
                                <!-- end short story -->
                                <!-- ==================================================================================================================================================================== -->
                                <!-- ==================================================================================================================================================================== -->

                                <!-- continetal news holder -->
                                <!-- ============================================================================================================================================================================= -->
                                <!-- ============================================================================================================================================================================= -->
                                <div class="continental-news mt-3">
                                    <div class="top-story-title"><i class="fa fa-newspaper-o mr-2"></i> continetal news</div>
                                    <div class="list-continet mt-3">
                                        <ul class="nav d-flex lessons-link" role="tablist">

                                            <!-- african news -->
                                            <!-- ====================================================================================================================================== -->
                                            <li><a class="active" data-toggle="tab" href="#africans-news" role="tab">
                                                <div class="each-continet africa">
                                                    <img src="../Images/world-news-img/contenet/globe-3383088__340.jpg" alt="" width="100%" height="100%">
                                                    <div class="africa">africa</div>
                                                </div>
                                            </a></li>
                                            <!-- end african news -->
                                            <!-- ===================================================================================================================================== -->

                                            <!-- american news -->
                                            <!-- ======================================================================================================================================== -->
                                            <li><a class="" data-toggle="tab" href="#american-news" role="tab">
                                                <div class="each-continet america ml-3">
                                                    <img src="../Images/world-news-img/contenet/globe-599486__340.jpg" alt="" width="100%" height="100%">
                                                    <div class="america">south & north america</div>
                                                </div>
                                            </a></li>
                                            <!-- end american news -->
                                            <!-- ============================================================================================================================================= -->

                                            <!-- asian news -->
                                            <!-- =================================================================================================================================================== -->
                                            <li><a class="" data-toggle="tab" href="#asian-news" role="tab">
                                                <div class="each-continet asia">
                                                    <img src="../Images/world-news-img/contenet/texture-2870745__340.jpg" alt="" width="100%" height="100%">
                                                    <div class="asia">asia</div>
                                                </div>
                                            </a></li>
                                            <!-- end asian news -->
                                            <!-- ================================================================================================================================= -->

                                            <!-- europian news -->
                                            <!-- =========================================================================================================================================== -->
                                            <li><a class="" data-toggle="tab" href="#europian-news" role="tab">
                                                <div class="each-continet europe ml-3">
                                                    <img src="../Images/world-news-img/contenet/globe-3383088__340.jpg" alt="" width="100%" height="100%">
                                                    <div class="europe">europe</div>
                                                </div>
                                            </a></li>
                                            <!-- end europian news -->
                                            <!-- ================================================================================================================================================ -->

                                        </ul>
                                    </div>
                                </div>
                                <!-- end continental holder -->
                                <!-- =============================================================================================================================================================== -->
                                <!-- ======================================================================================================================================================================== -->

                            </div>
                        </div>
                        <!-- end right section -->
                        <!-- ===========================================================================================================================================================================s -->
                        <!-- ============================================================================================================================================================================ -->

                    </div>
                </div>
                <!-- end it -->
                <!-- ========================================================================================================================================================================================= -->
                <!-- ============================================================================================================================================================================================== -->

                <!-- INITIALIZE MESSAGE BTN AND IT ACCESSORIE -->
                <!-- *********************************************** -->
                <?php require_once ("../header/message.php"); ?>
                <!-- *********************************************** -->
           </div>
       </div>
       <!-- end contianer down -->
       <!-- ====================================================================================================================================================================================================== -->
       <!-- ===================================================================================================================================================================================================== -->
       <!-- =========================================================================================================================================================================================================== -->


 
       <!-- javascript external file, type js  and libraries-->
       <!-- ================================================ -->
       <!-- ========================================================= -->
       <script src="../Assets/js/religion_activity.popup.box.js"></script>
       <script src="../Assets/js/video_controll.box.js"></script>

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
       <!-- ========================================================================================================================================================================================= -->
       <!-- ================================================================================================================================================================================================== -->

   </body>
</html>
<?php } } ?>