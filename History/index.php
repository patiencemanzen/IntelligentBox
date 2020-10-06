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

       <!-- index, used to repesent intelligent box on search engine and it browser -->
       <title>intelligentBox</title>

       <!-- intelligent box logo, present on search engine and on browse header -->
       <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon">

       <!-- external style link, type css file-->
       <link rel="stylesheet" href="../Assets/css/history.box.css">

       <!-- external css file/ libraries -->
       <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
       <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
       <link rel="stylesheet" href="../Lib/animate/animate.min.css">
       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
       <link rel="stylesheet" href="../Lib/lightbox/css/lightbox.min.css">
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


       <!-- down section -->
       <!-- ============================================================================================================================================= -->
       <!-- ============================================================================================================================================== -->
       <div class="down-lord">
           <div class="container">
               <div class="page-container d-flex ml-auto mr-auto">

                    <!-- GLOBAL JS EMAIL -->
                    <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                    <!-- END GLOBAL EMAIL -->

                    <!-- left side section -->
                    <!-- ====================================================================================================================================== -->
                    <!-- ====================================================================================================================================== -->
                    <div class="left-side-section ">
                        <div class="left-side-holder">

                            <!-- background image on top page -->
                            <!-- ============================================================================================================================== -->
                            <div class="top-background-image">
                                <img src="../Images/history-img/top_back.jpg" alt="" width="100%" height="100%">
                                <div class="top-name-pre">World history</div>
                            </div>
                            <!-- end background image -->
                            <!-- ============================================================================================================================== -->

                            <!-- continetal present -->
                            <!-- ============================================================================================================================== -->
                            <div class="continetal-pre mt-4">
                                <div class="present-map d-flex justify-content-between">
                                    <ul class="nav d-flex" role="tablist">
                                        <li><a class="active" data-toggle="tab" href="#america-history" role="tab">
                                            <div class="america">
                                                <img src="../Images/history-img/christopher-czermak-AXQSRf_nNhM-unsplash.jpg" alt="" width="100%" height="100%">
                                                <div class="name">North & south <br>america</div>
                                            </div>
                                        </a></li>
                                        <li><a class="" data-toggle="tab" href="#africa-history" role="tab">
                                            <div class="africa">
                                                <img src="../Images/history-img/Wallpaper Dump 1080x1920.jpg" alt="" width="100%" height="100%">
                                                <div class="name">africa</div>
                                            </div>
                                        </a></li>
                                        <li><a class="" data-toggle="tab" href="#europe-history" role="tab">
                                            <div class="Europe">
                                                <img src="../Images/history-img/Twilightsolo_ Photo.jpg" alt="" width="100%" height="100%">
                                                <div class="name">Europe</div>
                                            </div>
                                        </a></li>
                                        <li><a class="" data-toggle="tab" href="#asia-history" role="tab">
                                            <div class="asia">
                                                <img src="../Images/history-img/milkway.jpg" alt="" width="100%" height="100%">
                                                <div class="name">Asia</div>
                                            </div>
                                        </a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end continetal present -->
                            <!-- ============================================================================================================================================== -->

                            <div class="tab-content">

                                <!-- for north and sourth america -->
                                <!-- ============================================================================================================================================= -->
                                <div class="tab-pane active" id="america-history" role="tabpanel">
                                    
                                </div>
                                <!-- end north south america -->
                                <!-- ======================================================================================================================================================================= -->

                                <!-- start africa in history -->
                                <!-- ====================================================================================================================================== -->
                                <div class="tab-pane" id="africa-history" role="tabpanel">
                                    
                                </div>
                                <!-- end african in histroy -->
                                <!-- ====================================================================================================================================== -->

                                <!-- start asia histroy -->
                                <!-- ======================================================================================================================================== -->
                                <div class="tab-pane" id="asia-history" role="tabpanel">
                                    
                                </div>
                                <!-- end asia histroy -->
                                <!-- ======================================================================================================================================== -->

                                <!-- start europe history -->
                                <!-- ========================================================================================================================================= -->
                                <div class="tab-pane" id="europe-history" role="tabpanel">
                                    
                                </div>
                                <!-- end europe history -->
                                <!-- ============================================================================================================================================ -->
                            </div>

                        </div>
                    </div>
                    <!-- edn left side section -->
                    <!-- =========================================================================================================================================================== -->
                    <!-- ============================================================================================================================================================= -->



                    <!-- right side section -->
                    <!-- ================================================================================================================================================================== -->
                    <!-- ================================================================================================================================================================== -->
                    <div class="right-side-section">
                        <div class="right-side-section-holder">

                            <!-- tday in history -->
                            <!-- ======================================================================================================================================================= -->
                            <!-- ========================================================================================================================================================== -->
                            <div class="today-in-history">
                                <div class="t-in-history-title"> Today in history... </div>
                                <div class="tin-history-list mt-3" id="t_day_history">

                                </div>
                            </div>
                            <!-- end today in history -->
                            <!-- ============================================================================================================================================================================================ -->
                            <!-- ============================================================================================================================================================================================ -->

                            <!-- give user ability to create short story -->
                            <!-- ============================================================================================================================================================================================ -->
                            <!-- ============================================================================================================================================================================================ -->
                            <div class="position-relative">
                                <div class="create-short-story">
                                    <div class="title-short-story">Define your short story</div>
                                    <div class="user-typer d-flex">
                                        <div><div class="user-image" id="getProfileimage"></div></div>
                                        <div class="usr-textarea ml-2">
                                            <div class="type-something">
                                                <textarea name="" id="" cols="30" rows="2" placeholder="write something..." onfocus="openPostCreation()"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- give user privelege of creattion of story -->
                                <!-- =============================================================================================================================== -->
                                <div class="create-stoty-prive" id="create-stoty-prive">
                                    <div class="section-title">
                                        <div>Define your short story</div>
                                        <div class="close-post-creation" onclick="document.getElementById('create-stoty-prive').style.display = 'none'"><i class="fa fa-times"></i></div>
                                    </div>
                                    <form action="history_content.box.php" method="POST" enctype="multipart/form-data" id="news_form">
                                        <div class="create-area">
                                            <div class="image-story-preview mr-1">
                                                <div class="for-image" id="news_image">
                                                    <img src="" id="image" alt="" width="100%" height="100%">
                                                </div>
                                            </div>
                                            <div class="create-body-title">
                                                <input type="file" name="chosen_image" id="chosen_image" style="display: none;">
                                                <input type="hidden" name="chosen_email" value="<?php echo $Session_email_call; ?>">
                                                <div class="create-story-title">
                                                    <div class="title-story">
                                                        <textarea name="story_title" id="" cols="30" rows="2" placeholder="Story title" autocomplete="off"></textarea>
                                                    </div>
                                                </div>
                                                <div class="story-body">
                                                    <div class="create-story-body">
                                                        <textarea name="story_body" id="" cols="30" rows="9" placeholder="Story body" autocomplete="off"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sectio-footer">
                                            <div class="choose-image-story">
                                                <button type="button" onclick="triggerInputFile_story()">choose image</button>
                                            </div>
                                            <div class="send-post">
                                                <button type="submit" name="submit_news">create</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end privellege -->
                                <!-- ====================================================================================================================================================== -->

                            </div>
                            <!-- end short story -->
                            <!-- ==================================================================================================================================================================== -->
                            <!-- ========================================================================================================================================================================== -->


                            <!-- today in history -->
                            <!-- ==================================================================================================================================================================== -->
                            <!-- ===================================================================================================================================================================== -->
                            <div class="today-in-history mt-3">
                                <div class="t-in-history-title"> Friends defined story... </div>
                                <div class="tin-history-list mt-3" id="defined_story">

                                </div>
                            </div>
                            <!-- end today in history -->
                            <!-- ============================================================================================================================================= -->
                            <!-- ==================================================================================================================================================== -->

                        </div>
                    </div>
                    <!-- end right side section -->
                    <!-- ======================================================================================================================================================================= -->
                    <!-- =============================================================================================================================================================================== -->
                </div>

                <!-- INITIALIZE MESSAGE BTN AND IT ACCESSORIE -->
                <!-- *********************************************** -->
                <?php require_once ("../header/message.php"); ?>
                <!-- *********************************************** -->

           </div>
       </div>
       <!-- end down section -->
       <!-- ============================================================================================================================================================================= -->
       <!-- ============================================================================================================================================================================== -->
        
       <!-- ERROR HANDLING -->
        <!-- ========================================================================================================================================================================= -->
        <?php if(isset($_REQUEST['success'])){?>
            <div class="Display_error">
                <div class="error-icon"><i class="fa fa-check"></i></div>
                <div class="check-word_error"> successfully applied </div>
            </div>
        <?php } else if(isset($_REQUEST['fail'])){?>
            <div class="Display_error">
                <div class="error-icon"><i class="fa fa-times"></i></div>
                <div class="check-word_error"> upload fail, try again</div>
            </div>
        <?php }else if(isset($_REQUEST['move_fail'])){?>
            <div class="Display_error">
                <div class="error-icon"><i class="fa fa-file-archive-o"></i></div>
                <div class="check-word_error"> uplaod moving fail, try another pls </div>
            </div>
        <?php } ?>


       <!-- javascript external file, type js  and libraries-->
       <!-- ===================================================================================================================================================================================== -->
       <!-- ===================================================================================================================================================================================== -->
       <script src="../Assets/js/history.popUp.box.js"></script>
       <script src="../Assets/js/video_controll.box.js"></script>
       
       <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
       <script src="../Lib/bootstrap/js/bootstrap-datepicker.js"></script> 
       <script src="../Lib/custom/custom.js"></script>
       <script src="../Lib/date-picker/bootstrap-switch.js"></script>
       <script src="../Lib/date-picker/nouislider.min.js"></script>
       <script src="../Lib/easing/easing.min.js"></script>
       <script src="../Lib/jquery/jquery-migrate.min.js"></script>
       <script src="../Lib/lightbox/js/lightbox-plus-jquery.min.js"></script>
       <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
       <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
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
       <!-- ============================================================================================================================================== -->
       <!-- ====================================================================================================================================================== -->

   </body>
</html>
<?php }else{
    header("Location: ../account_shortcut.box.php?session");
    exit();
} ?>