<?php 
  session_start();
  if(isset($_SESSION['Email'])){
      $Session_email_call = $_SESSION['Email'];
      $firstName = $_SESSION['Firstname'];
      $lastName = $_SESSION['Lastname'];
      $user_title = $_SESSION['title'];
?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;">
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
       <link rel="stylesheet" href="../Assets/css/world_news.box.css">

       <!-- external css file/ libraries -->
       <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
       <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
       <link rel="stylesheet" href="../Lib/animate/animate.min.css">
       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
       <link rel="stylesheet" href="../Lib/jquery/jquery.fancybox.css">
       <link rel="stylesheet" href="../Lib/lightbox/css/lightbox.min.css">
       <link rel="stylesheet" href="../Lib/venobox/venobox.css">
   
   </head>
   <body>

        <!-- Section that will hold header -->
        <!-- ===================================================================================================================== -->
        <!-- ===================================================================================================================== -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- end header section -->
        <!-- ============================================================================================================================ -->
        <!-- ============================================================================================================================ -->

       <!-- container down -->
       <!-- ============================================================================================================================================== -->
       <!-- ============================================================================================================================================== -->
       <div class="down-section container">
           <div class="down-holder">

                <!-- GLOBAL JS EMAIL -->
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                <!-- END GLOBAL EMAIL -->

                <!-- top-title-background -->
                <!-- ============================================================================================================================================ -->
                <div class="background-img">
                   <img src="../Images/world-news-img/Ib-news-back.jpg" alt="" width="100%" height="100%">
                   <div class="user-img" id="newPage_profile_image"> </div>
                   <div class="user-name-title">
                       <div><i class="fa fa-user-circle-o mr-2"></i> <?php echo $firstName; ?> <?php echo $lastName; ?></div>
                       <div><i class="fa fa-newspaper-o mr-2"></i> world news </div>
                   </div>

                   <!-- open sidebar for continetal news -->
                   <!-- ====================================================================================== -->
                   <div class="extact-news-sidebar" onclick="openSide()"><i class="fa fa-align-justify"></i></div>
                   <!-- ====================================================================================== -->
                </div>
                  
                <!-- SIDEBAR APPLY ON SMALL DEVICE -->
                <!-- ============================================================================================================================ -->
                <!-- ============================================================================================================================ -->
                <div id="sidebar_small" class="sidebar_small">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeSide()">&times;</a>
                    <div class="right-holder">

                        <!-- continetal news holder -->
                        <!-- ================================================================================================================ -->
                        <div class="continental-news shadow-sm mt-3">
                            <div class="top-story-title"><i class="fa fa-newspaper-o mr-2"></i> continetal news</div>
                            <div class="list-continet mt-3">
                                <ul class="nav d-flex lessons-link" role="tablist">

                                    <!-- african news -->
                                    <li><a class="active" data-toggle="tab" href="#africans-news" role="tab">
                                        <div class="each-continet africa">
                                            <img src="../Images/world-news-img/contenet/globe-3383088__340.jpg" alt="" width="100%" height="100%">
                                            <div class="africa">africa</div>
                                        </div>
                                    </a></li>
                                    <!-- end african news -->

                                    <!-- american news -->
                                    <li><a class="" data-toggle="tab" href="#american-news" role="tab">
                                        <div class="each-continet america">
                                            <img src="../Images/world-news-img/contenet/globe-599486__340.jpg" alt="" width="100%" height="100%">
                                            <div class="america">south & north america</div>
                                        </div>
                                    </a></li>
                                    <!-- end american news -->

                                    <!-- asian news -->
                                    <li><a class="" data-toggle="tab" href="#asian-news" role="tab">
                                        <div class="each-continet asia">
                                            <img src="../Images/world-news-img/contenet/texture-2870745__340.jpg" alt="" width="100%" height="100%">
                                            <div class="asia">asia</div>
                                        </div>
                                    </a></li>
                                    <!-- end asian news -->

                                    <!-- europian news -->
                                    <li><a class="" data-toggle="tab" href="#europian-news" role="tab">
                                        <div class="each-continet europe">
                                            <img src="../Images/world-news-img/contenet/globe-3383088__340.jpg" alt="" width="100%" height="100%">
                                            <div class="europe">europe</div>
                                        </div>
                                    </a></li>
                                    <!-- end europian news -->

                                </ul>
                            </div>
                        </div>
                        <!-- end continental holder -->
                        <!-- ====================================================================================================================================== -->


                        <!-- give user ability to create short story -->
                        <!-- ====================================================================================================================================== -->
                        <!-- ====================================================================================================================================== -->
                        <div class="position-relative">
                            <div class="create-short-story mt-3 shadow-sm">
                                <div class="title-short-story">define your short story</div>
                                <div class="user-typer d-flex">
                                    <div class="user-image"><img src="../Images/history-img/final-image-of-rainforest-800x445.jpg" alt="" width="100%" height="100%"></div>
                                    <div class="usr-textarea ml-2">
                                        <div class="type-something">
                                            <textarea name="" id="" cols="30" rows="2" placeholder="write something.." onclick="createStory(this)"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- create story area -->
                            <div class="create-stoty-prive" id="create-stoty-prive-real">
                                <div class="section-title">
                                    <div>Define your short story</div>
                                    <div class="close-post-creation" onclick="document.getElementById('create-stoty-prive-real').style.display = 'none'"><i class="fa fa-times"></i></div>
                                </div>
                                <form action="world_news_content.php" method="POST" enctype="multipart/form-data">
                                    <div class="create-area">
                                        <div class="image-story-preview">
                                            <div class="for-image" id="choose_image">
                                                <img src="" id="preview_image" alt="" width="100%" height="100%">
                                            </div>
                                        </div>
                                        <div class="create-body-title">
                                            <input type="hidden" name="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                                            <input type="file" name="chosen_news" id="choose_news_small" style="display: none;">

                                            <div class="create-story-title">
                                                <div class="title-story">
                                                    <textarea name="new_title" id="" cols="30" rows="1" placeholder="Story title" autocomplete="off"></textarea>
                                                </div>
                                            </div>
                                            <div class="story-body">
                                                <div class="create-story-body">
                                                    <textarea name="new_body" id="" cols="30" rows="3" placeholder="Story body" autocomplete="off"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sectio-footer">
                                        <div class="choose-image-story"><button type="button" onclick="trigger_news()">choose media</button></div>
                                        <div class="send-post"><button type="submit" name="submit_secord_form_news">create</button></div>
                                    </div>
                                </form>
                            </div>
                            <!-- end creation -->
                        </div>
                        <!-- end short story -->
                        <!-- ========================================================================================================================================= -->
                        <!-- ================================================================================================================================================== -->

                        <!-- bottom news -->
                        <!-- ========================================================================================================================================= -->
                        <!-- ========================================================================================================================================== -->
                        <div class="long-story mt-5">
                            <div class="long-holder">

                                <!-- titles -->
                                <div class="titles-long d-flex justify-content-between">
                                    <div class="today-in-history"><i class="fa fa-newspaper-o mr-2"></i> User defined news</div>
                                </div>
                                <!-- end titles -->

                                <div class="long-story-section mt-3" id="small_device_story">

                                </div>
                                <!-- end long story -->
                                <!-- =================================================================================================================================================================== -->

                            </div>
                        </div>
                        <!-- end it -->
                        <!-- ============================================================================================================================================= -->
                        <!-- ============================================================================================================================================== -->


                    </div>
                 </div>
                <!-- END SIDE BAR -->
                <!-- ============================================================================================================================ -->
                <!-- ============================================================================================================================ -->


                <!-- down section full news -->
                <!-- ============================================================================================================================================= -->
                <div class="full-news-section mt-4">
                    <div class="inner-section separator d-flex">

                        <!-- left start -->
                        <!-- ============================================================================================================================ -->
                        <!-- ============================================================================================================================= -->
                        <div class="left-section col-xs-12 col-xl-7 col-sm-12 col-md-12 col-lg-6">

                            <!-- list of all tab for continetal news -->
                            <!-- ========================================================================================================================= -->
                            <div class="tab-content">

                                <!-- tab for africans news  -->
                                <!-- ================================================================================================================================== -->
                                <div class="tab-pane active algebra-trigonometry" role="tabpanel" id="africans-news">
                                    
                                </div>
                                <!-- end africans news -->
                                <!-- ===================================================================================================================================================================================== -->

                                <!-- american news -->
                                <!-- ================================================================================================================= -->
                                <div class="tab-pane" role="tabpanel" id="american-news">
                                    
                                </div>
                                <!-- end american news -->
                                <!-- ================================================================================================================= -->

                                <!-- start asian news -->
                                <!-- ==================================================================================================================== -->
                                <div class="tab-pane" role="tabpanel" id="asian-news">
                                   
                                </div>
                                <!-- end asians news -->
                                <!-- ===================================================================================================================== -->

                                <!-- start european news -->
                                <!-- ====================================================================================================================== -->
                                <div class="tab-pane" role="tabpanel" id="europian-news">
                                    
                                </div>
                                <!-- end europian news -->
                                <!-- ========================================================================================================================= -->

                            </div>
                            <!-- end tab content for continet -->
                            <!-- ================================================================================================================================= -->
                            <!-- ================================================================================================================================== -->

                        </div>
                        <!-- left end -->
                        <!-- ============================================================================================================================================ -->
                        <!-- ===================================================================================================================================================== -->


                        <!-- right starts -->
                        <!-- ====================================================================================================================== -->
                        <!-- ======================================================================================================================== -->
                        <div class="right-section col-xs-12 col-xl-5 col-sm-12 col-md-3 col-lg-6">
                            <div class="right-holder">

                                <!-- continetal news holder -->
                                <!-- ================================================================================================================ -->
                                <div class="continental-news mt-3">
                                    <div class="top-story-title"><i class="fa fa-newspaper-o mr-2"></i> continetal news</div>
                                    <div class="list-continet mt-3">
                                        <ul class="nav nav-tabs lessons-link" role="tablist">

                                            <!-- african news -->
                                            <li><a class="active" data-toggle="tab" href="#africans-news" role="tab">
                                                <div class="each-continet africa">
                                                    <img src="../Images/world-news-img/contenet/globe-3383088__340.jpg" alt="" width="100%" height="100%">
                                                    <div class="africa">africa</div>
                                                </div>
                                            </a></li>
                                            <!-- end african news -->

                                            <!-- american news -->
                                            <li><a class="" data-toggle="tab" href="#american-news" role="tab">
                                                <div class="each-continet america">
                                                    <img src="../Images/world-news-img/contenet/globe-599486__340.jpg" alt="" width="100%" height="100%">
                                                    <div class="america">south & north america</div>
                                                </div>
                                            </a></li>
                                            <!-- end american news -->

                                            <!-- asian news -->
                                            <li><a class="" data-toggle="tab" href="#asian-news" role="tab">
                                                <div class="each-continet asia">
                                                    <img src="../Images/world-news-img/contenet/texture-2870745__340.jpg" alt="" width="100%" height="100%">
                                                    <div class="asia">asia</div>
                                                </div>
                                            </a></li>
                                            <!-- end asian news -->

                                            <!-- europian news -->
                                            <li><a class="" data-toggle="tab" href="#europian-news" role="tab">
                                                <div class="each-continet europe">
                                                    <img src="../Images/world-news-img/contenet/globe-3383088__340.jpg" alt="" width="100%" height="100%">
                                                    <div class="europe">europe</div>
                                                </div>
                                            </a></li>
                                            <!-- end europian news -->

                                        </ul>
                                    </div>
                                </div>
                                <!-- end continental holder -->
                                <!-- ====================================================================================================================================== -->


                                <!-- give user ability to create short story -->
                                <!-- ====================================================================================================================================== -->
                                <!-- ====================================================================================================================================== -->
                                <div class="position-relative">
                                    <div class="create-short-story">
                                        <div class="title-short-story">Define your short story</div>
                                        <div class="user-typer d-flex">
                                            <div class="user-image"> </div>
                                            <div class="usr-textarea ml-2">
                                                <div class="type-something">
                                                    <textarea name="" id="" cols="30" rows="2" placeholder="write something.." onclick="createStory(this)"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- create story area -->
                                    <div class="create-stoty-prive" id="create-stoty-prive">
                                        <div class="section-title">
                                            <div>Define your short story</div>
                                            <div class="close-post-creation" onclick="document.getElementById('create-stoty-prive').style.display = 'none'"><i class="fa fa-times"></i></div>
                                        </div>
                                        <form action="world_news_content.php" method="POST" enctype="multipart/form-data">
                                            <div class="create-area">
                                                <div class="image-story-preview mr-1">
                                                    <div class="for-image mr-1" id="preview_news">
                                                        <img src="" id="preview" alt="" width="100%" height="100%">
                                                    </div>
                                                </div>
                                                <div class="create-body-title">
                                                    <input type="hidden" name="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                                                    <input type="file" name="chosen_news" id="choose_news" style="display: none;">
                                                    <div class="create-story-title">
                                                        <div class="title-story">
                                                            <textarea name="chosen_title" id="" cols="30" rows="2" placeholder="Story title" autocomplete="off"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="story-body">
                                                        <div class="create-story-body">
                                                            <textarea name="chosen_body" id="" cols="30" rows="9" placeholder="Story body" autocomplete="off"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sectio-footer">
                                                <div class="choose-image-story"><button type="button" onclick="triggerInputFile_news()">choose image</button></div>
                                                <div class="send-post">
                                                    <button name="submit_chosen_news" type="submit">create</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end creation -->
                                </div>
                                <!-- end short story -->
                                <!-- ========================================================================================================================================= -->
                                <!-- ================================================================================================================================================== -->


                                <!-- bottom news -->
                                <!-- ========================================================================================================================================= -->
                                <!-- ========================================================================================================================================== -->
                                <div class="long-story mt-5">
                                    <div class="long-holder">

                                        <!-- titles -->
                                        <div class="titles-long d-flex justify-content-between">
                                            <div class="all-news-title"><i class="fa fa-newspaper-o mr-2"></i> User defined News </div>    
                                        </div>
                                        <!-- end titles -->

                                        <div class="long-story-section mt-3" id="defined_news">
                                            
                                        </div>
                                        <!-- end long story -->
                                        <!-- =================================================================================================================================================================== -->
                                    
                                    </div>
                                </div>
                                <!-- end it -->
                                <!-- ============================================================================================================================================= -->
                                <!-- ============================================================================================================================================== -->


                            </div>
                        </div>
                        <!-- end right section -->
                        <!-- ================================================================================================================================================================================= -->
                        <!-- ================================================================================================================================================================================= -->

                    </div>
                </div>
                <!-- end it -->
                <!-- ========================================================================================================================================================================================= -->
                <!-- ========================================================================================================================================================================================= -->

                <!-- INITIALIZE MESSAGE BTN AND IT ACCESSORIE -->
                <!-- *********************************************** -->
                <?php require_once ("../header/message.php"); ?>
                <!-- *********************************************** -->
                
           </div>
       </div>
       <!-- end contianer down -->
       <!-- ============================================================================================================================================================================================================ -->
       <!-- ============================================================================================================================================================================================================= -->
       <!-- ================================================================================================================================================================================================================== -->

       <!-- ERROR HANDLING -->
       <!-- ========================================================================================================================================================================= -->
       <?php if(isset($_REQUEST['success'])){?>
            <div class="Display_error">
                <div class="error-icon"><i class="fa fa-check"></i></div>
                <div class="check-word_error"> Post successfully applied </div>
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
       <!-- ================================================ -->
       <!-- ================================================================================================================== -->

       <script src="../Assets/js/world_news.popup.box.js"></script>
       <script src="../Assets/js/video_controll.box.js"></script>

       <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
       <script src="../Lib/bootstrap/js/bootstrap-datepicker.js"></script> 
       <script src="../Lib/custom/custom.js"></script>
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
       <!-- ================================================================================================================================================= -->
       <!-- ========================================================================================================================================================= -->

   </body>
</html>
<?php }else{
    header("Location: ../account_shortcut.box.php?session");
    exit();
} ?>