<?php 
    session_start();
    if(isset($_SESSION['Email'])){
        $Session_email_call = $_SESSION['Email'];
        $firstName = $_SESSION['Firstname'];
        $lastName = $_SESSION['Lastname'];
        $user_title = $_SESSION['title'];
        $identity = $_SESSION['identity'];

        if(isset($_REQUEST['que_identity'])){
            $question_identity = $_REQUEST['que_identity'];
            require_once ("../Scyllar.php");
            require_once ("question_answers.box.php");
            $new_question = new Scyllar();
            $new_data = new Deliberation();

            $selectquestion = "SELECT * FROM user_question WHERE identity = '$question_identity'";
            $execute_question = mysqli_query($new_question->Frequency(), $selectquestion);
            $fetch_question = mysqli_fetch_assoc($execute_question);
                $question_media = $fetch_question['media_support'];
                $question = $fetch_question['question'];
                $question_desc = $fetch_question['question_desc'];
                $poster = $fetch_question['user_email_owner'];

                $select_owner_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$poster' AND status_image='1'";
                $execute_owner_image = mysqli_query($new_question->Frequency(), $select_owner_image);
                $fetch_owner_image = mysqli_fetch_assoc($execute_owner_image);
                    $owner_image = $fetch_owner_image['profile_image'];

                $select_my_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$Session_email_call' AND status_image='1'";
                $execute_my_image = mysqli_query($new_question->Frequency(), $select_my_image);
                $fetch_my_image = mysqli_fetch_assoc($execute_my_image);
                    $my_image = $fetch_owner_image['profile_image'];
            
            $select_view = "SELECT * FROM post_views WHERE post_identity = '$question_identity'";
            $execute_check = mysqli_query($new_question->Frequency(), $select_view);
            if(mysqli_num_rows($execute_check) > 0){
                $select_view_user = "SELECT * FROM post_views WHERE post_identity = '$question_identity' AND user_identity = '$identity'";
                $execute_check_user = mysqli_query($new_question->Frequency(), $select_view_user);
                if(mysqli_num_rows($execute_check_user) > 0){
                    
                }else{
                    $created_on = Date("Y-m-d h:m:s");
                   $insert_view = "INSERT INTO post_views VALUES ('','$question_identity','$identity','1','$created_on')";
                   $execute_view = mysqli_query($new_question->Frequency(), $insert_view);
                }
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
                        <div><button class="ask_question" onclick="openQuestionEditor()">Ask Questions</button></div>
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
                <div class="question-tab">
                    <div class="full-question">
                        <div class="question-found">
                            <div class="question-text">
                                <div class="question-title"><?php echo $question; ?></div>
                                <div class="question-full-text"><?php echo $question_desc; ?></div>
                            </div>
                            <div class="question-image">
                                <div class="question-photo"><img src="<?php echo '../Images/Question&Answer/'.$question_media; ?>" alt="question-image_<?php echo $question_identity; ?>" width="100%" height="100%"></div>
                            </div>
                        </div>
                        <div class="answer-founded position-relative">
                            <div class="answer_revieved_all position-relative">
                                <div class="answer-title">Answer recieved on!</div>
                                <div class="answer-list">
                                    <?php 
                                        $select_answer = "SELECT * FROM user_answer WHERE question_identity='$question_identity' ORDER BY identity DESC";
                                        $execute_answer = mysqli_query($new_question->Frequency(), $select_answer);
                                        if(mysqli_num_rows($execute_answer)){
                                            $counter = 1;
                                            while($fetch_answer = mysqli_fetch_assoc($execute_answer)){
                                                $user_identity = $fetch_answer['user_identity'];
                                                $user_answer = $fetch_answer['answer'];
                                                $date = $fetch_answer['created_on'];
                            
                                                $selectProfileDetail = "SELECT * FROM intelligent_users WHERE identity='$user_identity'";
                                                $executeDetail = mysqli_query($new_question->Frequency(), $selectProfileDetail);
                                                $fetchDetail = mysqli_fetch_assoc($executeDetail); 
                                                    $user_email = $fetchDetail['email'];
                                                    $firstName = $fetchDetail['firstName'];
                                                    $lastName = $fetchDetail['lastName'];
                            
                                                $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$user_email' AND status_image='1'";
                                                $execute_image = mysqli_query($new_question->Frequency(), $select_user_image);
                                                    $fetch_image = mysqli_fetch_assoc($execute_image);  ?>  
                                                    <div class="each-answer">
                                                        <div>
                                                            <div class="profile-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%"></div>
                                                            <div class="counter"><?php echo $counter; ?></div>
                                                        </div>
                                                        <div class="answer-detail">
                                                            <div class="answer-name"><?php echo $firstName; ?> <?php echo $lastName; ?> <span class="time-posted"><i class="fa fa-globe"></i> <?php echo $new_data->timeAgo($date); ?></span></div>
                                                            <div class="answer-found"><?php echo $user_answer; ?></div>
                                                        </div>
                                                    </div>
                                        <?php $counter ++; }
                                        }else{ ?>
                                            <div class="each_answer">
                                                <div class="getAnswer"><?php echo "No answers found on this question" ?></div>
                                            </div>
                                    <?php } ?>

                                </div>
                                <div class="add-answer">
                                    <div class="div">
                                        <div class="my-photo"><img src="<?php echo '../Images/profile-img/profile-image/'.$owner_image; ?>" alt="question owner profile image" width="100%" height="100%"></div>
                                        <div class="my-photo"><img src="<?php echo '../Images/profile-img/profile-image/'.$my_image; ?>" alt="my profile image" width="100%" height="100%"></div>
                                    </div>
                                    <div class="add-text"><textarea name="" id="" cols="30" rows="2" placeholder="Add your answers..."></textarea></div>
                                    <div class="post-answer"><button id="<?php echo $question_identity; ?>" onclick="submit_reply(this)">Post</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ===============================================================================================================================================================-->
           </div>
       </div>
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
       <script src="../Lib/jquery/jquery.min.js"></script>
       <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
       <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
       <script src="../Lib/slick/slick.js"></script>
   </body>
</html>
<?php } else{
    header("Location: index.php");
    exit();
} }else{
    header("Location: ../account_shortcut.box.php");
    exit();
} ?>