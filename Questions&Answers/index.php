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
       <title>Questions and Answers</title>

       <!-- intelligent box logo, present on search engine and on browse header -->
       <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon">

       <!-- external style link, type css file-->
       <link rel="stylesheet" href="../Assets/css/Questions&Answers.box.css">

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
        <!-- ==================================================================================================================================================================== -->
        <!-- ========================================================================================================================================================================= -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- end header section -->
        <!-- =========================================================================================================================================================================== -->
        <!-- ============================================================================================================================================================================ -->

       <!-- container down -->
       <!-- =================================================================================================================================================================================== -->
       <!-- ================================================================================================================================================================================== -->
       <div class="down-section container">
           <div class="down-holder">

                <!-- GLOBAL JS EMAIL -->
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                <!-- END GLOBAL EMAIL -->

                <!-- down section full news -->
                <!-- ============================================================================================================================================================================= -->
                <!-- ================================================================================================================================================================================ -->
                <div class="full-news-section mt-3">
                    <div class="inner-section separator">
                        
                        <!-- questions recieved -->
                        <!-- ================================================================================================================================================= -->
                        <div class="Questions_recieved">
                            <div class="questions_field_title">
                                <div class="Question_mark"><i class="fa fa-question-circle-o"></i></div>
                                <div class="short_summary" onclick="recieved_question()"> Recieved Questions (<span id="count_recieved_questions"></span>)</div>
                            </div>
                            <div class="list_questions_recieved" id="recieved_que">

                            </div>
                        </div>
                        <!-- end questions recieved -->
                        <!-- ================================================================================================================================================= -->

                        <!-- Answers recieved -->
                        <!-- ================================================================================================================================================= -->
                        <div class="Answers_recieved position-relative">
                            <!-- <div class="Answers_field_title">
                                <div class="Answer_mark"><i class="fa fa-exclamation-circle"></i></div>
                                <div class="short_summary">Recieved Answers (0)</div>
                            </div> -->
                            <div class="Ask_btn">
                                <div><div class="user_profile_image" id="profile_image">
                                    
                                </div></div>
                                <div><div class="user_name"><?php echo $firstName; ?> <?php echo $lastName; ?></div></div>
                                <div><button class="ask_question" onclick="openQuestionEditor()">Ask Question</button></div>
                            </div>

                            <!-- CREATE QUESTION -->
                            <!-- ===================================================================================================== -->
                            <div class="create_question_pop" id="questionEditor">
                                <form action="question_answers.box.php" method="POST" enctype="multipart/form-data">
                                <div class="addition_input">
                                    <div class="choose_image_file"><button type="button" onclick="triggerInputFile_question()"><i class="fa fa-plus"></i> photo </button></div>
                                    <div class="choose_where_to_post_question">For--
                                        <select name="question_depend" id="post_section" class="select_section">
                                            
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="user_email" value="<?php echo $Session_email_call; ?>">
                                <input type="file" name="photo_support" id="photo_question" style="display: none;">
                                <div class="image_view position-relative" id="image_view">
                                    <img src="" alt="" width="100%" height="100%" id="preview_image">
                                    <div class="preload_submition" id="load_image">
                                        <div class="container-preloader">
                                            <div class="shape shape-1"></div>
                                            <div class="shape shape-2"></div>
                                            <div class="shape shape-3"></div>
                                            <div class="shape shape-4"></div>
                                        </div>  
                                    </div>
                                </div>
                                <div class="add_text_question position-relative">
                                    <textarea name="question_text" id="" cols="30" rows="5" placeholder="Add Text..." class="position-relative"></textarea>
                                    <div class="preload_submition">
                                        <div class="container-preloader">
                                            <div class="shape shape-1"></div>
                                            <div class="shape shape-2"></div>
                                            <div class="shape shape-3"></div>
                                            <div class="shape shape-4"></div>
                                        </div>  
                                    </div>
                                </div>
                                <div class="submit_question">
                                    <button type="submit" name="submit_question">upload question</button>
                                </div>
                                </form>
                            </div>
                            <!-- ======================================================================================================= -->

                            <!-- ANSWERS RECIEVED WITH QUESTION -->
                            <!-- ==================================================================================================== -->
                            <div class="answer_revieved_all" id="all_question_spreaded">

                            </div>
                            <!-- ===================================================================================================== -->
                        </div>
                        <!-- end answers recieved -->
                        <!-- ================================================================================================================================================= -->

                    </div>
                </div>
                <!-- end it -->
                <!-- ================================================================================================================================================================= -->
                <!-- ======================================================================================================================================================================== -->

           </div>
       </div>
       <!-- end contianer down -->
       <!-- ================================================================================================================================================================= -->
       <!-- ======================================================================================================================================================================== -->
       <!-- ======================================================================================================================================================================== -->

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
        <?php }else if(isset($_REQUEST['size'])){?>
            <div class="Display_error">
                <div class="error-icon"><i class="fa fa-file-o"></i></div>
                <div class="check-word_error"> uplaod moving fail, try another pls </div>
            </div>
        <?php } ?>
 
       <!-- javascript external file, type js  and libraries-->
       <!-- ================================================ -->
       <script src="../Assets/js/question&answer.box.js"></script>

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

   </body>
</html>
<?php }else{
    header("Location: ../account_shortcut.box.php?session");
    exit();
} ?>