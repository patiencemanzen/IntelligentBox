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

       <title>Questions</title>

       <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon">
       <link rel="stylesheet" href="../Assets/css/question.css">

       <!-- external css file/ libraries -->
       <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
       <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
       <link rel="stylesheet" href="../Lib/slick/slick.css">
   </head>
   <body class="bg-white">

        <!-- Section that will hold header -->
        <!-- ========================================================================================================================================================================= -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- ============================================================================================================================================================================ -->


        <!-- QUESTIONS STATUS -->
        <!-- ================================================================================================================================================================================= -->
        <div class="questions-status">
            <div class="question-nav">
                <div class="left-nav">
                    <div class="questions_recieved">
                        <div class="short_summary" onclick="recieved_question()"><i class="fa fa-question-circle-o"></i> Recieved Questions (<span id="count_recieved_questions"></span>)</div>
                    </div>
                </div>
                <div class="right-nav">
                    <div class="Ask_btn">
                        <div><div class="user_name"><?php echo $firstName; ?> <?php echo $lastName; ?></div></div>
                        <div><button class="ask_question" onclick="openQuestionEditor()">Ask Question</button></div>
                    </div>
                    <div class="create_question_pop" id="questionEditor">
                        <form action="question_answers.box.php" method="POST" enctype="multipart/form-data">
                            <div class="addition_input">
                                <div class="choose_image_file"><button type="button" onclick="triggerInputFile_question()"><i class="fa fa-plus"></i> Add photo </button></div>
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
                                <textarea name="question_text" id="" cols="30" rows="1" placeholder="Question title..." class="position-relative"></textarea>
                                <div class="preload_submition">
                                    <div class="container-preloader">
                                        <div class="shape shape-1"></div>
                                        <div class="shape shape-2"></div>
                                        <div class="shape shape-3"></div>
                                        <div class="shape shape-4"></div>
                                    </div>  
                                </div>
                            </div>
                            <div class="add_text_question position-relative">
                                <textarea name="question_desc" id="" cols="30" rows="5" placeholder="Describe your question..." class="position-relative"></textarea>
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
                                <button type="submit" name="submit_question">upload your question</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================================================================================================================================================================================= -->


        <!-- FULL QUESTION -->
        <!-- ================================================================================================================================================================================== -->
        <div class="down-section">
            <div class="container">
                <!-- GLOBAL JS EMAIL -->
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                <!-- END GLOBAL EMAIL -->

                <!-- QUESTION -->
                <!-- =========================================================================================================================================================================== -->
                <div class="single-element">

                </div>
                <!-- ===============================================================================================================================================================-->
           </div>
       </div>
       <!-- ======================================================================================================================================================================== -->

 
       <!-- javascript external file, type js  and libraries-->
       <!-- ================================================ -->
       <script src="../Assets/js/question&answer.box.js"></script>

       <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
       <script src="../Lib/bootstrap/js/bootstrap-datepicker.js"></script> 
       <script src="../Lib/jquery/jquery.min.js"></script>
       <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
       <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
       <script src="../Lib/slick/slick.js"></script>
   </body>
</html>
<?php }else{
    header("Location: ../account_shortcut.box.php?session");
    exit();
} ?>