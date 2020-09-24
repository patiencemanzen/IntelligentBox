<?php 

    // INITIALIZE DATABASE CONNECTION
    // ===========================================================================================================
    require_once ("../Scyllar.php");
    // ===========================================================================================================

    // CREATE AND MANIPULATE CLASS CALLED DELIBERATION
    // ===========================================================================================================
    class Deliberation extends Scyllar {

        private function count_date($selected_date){
            $PostedDate = $selected_date;
            $currDate = Date("Y-m-d h:i:s");

            $date1 = strtotime($PostedDate);  
            $date2 = strtotime($currDate);  
            
            $diff = abs($date2 - $date1); 
            $years = floor($diff / (365*60*60*24));  
            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
            $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24)); 
            $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60)); 
            $minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);
            $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60)); 

            if($days > 30){
               return $PostedDate;
            }if($hours < 24){
                return $hours." Hour(s) ago";
            }
            if($days < 30){
                return $days." Day(s) ago";
            }
        }

        public function count_recieved_questions ($user_email){
            $select_department = "SELECT * FROM more_account_info WHERE email='$user_email'";
            $execute_department = mysqli_query($this->Frequency(), $select_department);
            $fetch_department = mysqli_fetch_assoc($execute_department);
                $department = $fetch_department['Department'];

            $recieved_question = 0;    
            $count_questions = "SELECT * FROM user_question WHERE user_email_to='$user_email' OR question_depend='$department' OR question_depend='all_users' AND user_email_owner != '$user_email'";
            $execute_questions = mysqli_query($this->Frequency(), $count_questions);
            while($fetch_count = mysqli_fetch_assoc($execute_questions)){
                $recieved_question = $recieved_question + 1;
            }
            
            return $recieved_question;
        }

        public function show_department_list(){
            $select_department = "SELECT * FROM departments";
            $execute_department = mysqli_query($this->Frequency(), $select_department); ?>
                <option value="all_users">all_users</option>
            <?php while($fetch_departments = mysqli_fetch_assoc($execute_department)){?>
                <option value="<?php echo $fetch_departments['department_name']; ?>"><?php echo $fetch_departments['department_name']; ?></option>
            <?php }
        }

        public function spread_question($questionier, $questions, $question_depend, $support_image){
            $question_created_on = Date("Y-m-d h:m:s");
            $insert_question = "INSERT INTO user_question VALUE ('','$questionier','someone','$question_depend','$support_image','$questions','new','$question_created_on')";
            $execute_creation = mysqli_query($this->Frequency(), $insert_question);
            if($execute_creation){
                return true;
            }else{
                return false;
            }
        }
        

        public function show_my_questions($user_email){
            $select_my_question = "SELECT * FROM user_question WHERE user_email_owner='$user_email'";
            $execute_my_question = mysqli_query($this->Frequency(), $select_my_question);
            if(mysqli_num_rows($execute_my_question) > 0){
               while($fetch_my_question = mysqli_fetch_assoc($execute_my_question)){
                   $media_support = $fetch_my_question['media_support'];
                   $user_email_owner = $fetch_my_question['user_email_owner'];
                   $question = $fetch_my_question['question'];
                   $created_on = $fetch_my_question['created_on'];
                   $question_identity = $fetch_my_question['identity'];

                    $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$user_email_owner' AND status_image='1'";
                    $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                        $fetch_image = mysqli_fetch_assoc($execute_image);

                    $selectProfileDetail = "SELECT * FROM intelligent_users WHERE email='$user_email_owner'";
                    $executeDetail = mysqli_query($this->Frequency(), $selectProfileDetail);
                    $fetchDetail = mysqli_fetch_assoc($executeDetail); 
                        $user_identity = $fetchDetail['identity']; 
                        $firstName = $fetchDetail['firstName'];
                        $lastName = $fetchDetail['lastName'];  

                    $question_like = 0;
                    $count_likes = "SELECT * FROM user_question_likes WHERE question_identity='$question_identity' AND status_like='1'";
                    $execute_likes = mysqli_query($this->Frequency(), $count_likes);
                    while($fetch_likes = mysqli_fetch_assoc($execute_likes)){
                        $question_like = $question_like + 1;
                    }

                   $views = 0;
                   $question_views = "SELECT * FROM post_views WHERE post_identity='$question_identity'";
                   $execute_views = mysqli_query($this->Frequency(), $question_views);
                   while($fetch_views = mysqli_fetch_assoc($execute_views)){
                        $views = $views + 1; 
                   } ?>
                   
                    <div class="each_answer">
                        <div><div class="questioner_profile_image"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%"></div></div>
                        <div class="question_area">
                            <div class="questioner_full_name"><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                            <div class="full_question"><?php echo $question; ?></div>
                            <?php if($media_support == ""){?>
                            <?php }else{?>
                                <div class="question_img"><img src="<?php echo '../Images/Question&Answer/'.$media_support; ?>" alt="" width="100%" height="100%"></div>
                            <?php } ?>
                            <div class="short_detail_time">
                                <div class="time_asked">asked <?php echo $this->count_date($created_on); ?></div>
                                <!-- <div class="Viewed_time"> Viewed <?php echo $views; ?> time </div> -->
                                <div class="Viewed_time" id="<?php echo $question_identity; ?>" onclick="like_dislike(this)"><i class="fa fa-thumbs-o-up"></i> <span><?php echo $question_like; ?></span></div>
                            </div>
                            <div class="ansewers_recieved_full">
                                <div class="summary_answer_count"><div class="count_answers">Answers (<span><?php echo $this->count_answer($question_identity)?></span>)</div></div>
                                <div id="load_answer">
                                    <?php $this->show_answer($question_identity); ?>
                                </div>
                            </div>
                        </div>
                    </div>
               <?php }
            }else{

            }
        }

        public function count_likes($question_identity){
            $question_like = 0;
            $count_likes = "SELECT * FROM user_question_likes WHERE question_identity='$question_identity' AND status_like='1'";
            $execute_likes = mysqli_query($this->Frequency(), $count_likes);
            while($fetch_likes = mysqli_fetch_assoc($execute_likes)){
                 $question_like = $question_like + 1;
            }
            echo $question_like;
        }

        public function like_dislike_question($liker, $que_id){
            $selectProfileDetail = "SELECT * FROM intelligent_users WHERE email='$liker'";
            $executeDetail = mysqli_query($this->Frequency(), $selectProfileDetail);
            $fetchDetail = mysqli_fetch_assoc($executeDetail); 
                $user_identity = $fetchDetail['identity'];

            $check_like = "SELECT * FROM user_question_likes WHERE user_identity='$user_identity' AND question_identity='$que_id'";
            $execute_like = mysqli_query($this->Frequency(), $check_like);
            if(mysqli_num_rows($execute_like) > 0){
                $fetch_like = mysqli_fetch_assoc($execute_like);
                    $like_status = $fetch_like['status_like'];
                    if($like_status == "0"){
                        $update_like_status = "UPDATE user_question_likes SET status_like='1' WHERE user_identity='$user_identity' AND question_identity='$que_id'";
                        $execute_update = mysqli_query($this->Frequency(), $update_like_status);
                    }else{
                        $update_like_status = "UPDATE user_question_likes SET status_like='0' WHERE user_identity='$user_identity' AND question_identity='$que_id'";
                        $execute_update = mysqli_query($this->Frequency(), $update_like_status);
                    }
            }else{
                $created_on = Date("Y-m-d h:m:s");
                $insert_like = "INSERT INTO user_question_likes VALUE ('','$user_identity','$que_id','1','$created_on')";
                $execute_insert_like = mysqli_query($this->Frequency(), $insert_like);
            }
        }

        public function count_answer($que_identity){
           $answers = 0;
           $count_answer = "SELECT * FROM user_answer WHERE question_identity='$que_identity'";
           $execute_answer = mysqli_query($this->Frequency(), $count_answer);
           while($fetch_count_answer = mysqli_fetch_assoc($execute_answer)){
                $answers = $answers + 1;
           }

           echo $answers;
        }

        public function show_answer($que_identity){
            $select_answer = "SELECT * FROM user_answer WHERE question_identity='$que_identity'";
            $execute_answer = mysqli_query($this->Frequency(), $select_answer);
            if(mysqli_num_rows($execute_answer)){
                $counter = 1;
                while($fetch_answer = mysqli_fetch_assoc($execute_answer)){
                    $user_identity = $fetch_answer['user_identity'];
                    $user_answer = $fetch_answer['answer'];

                    $selectProfileDetail = "SELECT * FROM intelligent_users WHERE identity='$user_identity'";
                    $executeDetail = mysqli_query($this->Frequency(), $selectProfileDetail);
                    $fetchDetail = mysqli_fetch_assoc($executeDetail); 
                        $user_email = $fetchDetail['email'];
                        $firstName = $fetchDetail['firstName'];
                        $lastName = $fetchDetail['lastName'];

                    $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$user_email' AND status_image='1'";
                    $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                        $fetch_image = mysqli_fetch_assoc($execute_image);  ?>  
                        <div class="each_answer">
                            <div><div class="answerer_profile_image">
                                <img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%">
                                <div class="answer_number"><?php echo $counter; ?></div>
                            </div></div>
                            <div class="full-answers">
                                <div class="getAnswer"><?php echo $firstName; ?> <?php echo $lastName; ?> said "</div>
                                <div class="getAnswer"><?php echo $user_answer; ?> "</div>
                            </div>
                        </div>
          <?php $counter ++; }
            }else{ ?>
                <div class="each_answer">
                    <div class="getAnswer"><?php echo "No result found yet" ?></div>
                </div>
            <?php }
        }


        // RECIEVED QUESTION 
        // ================================================================================================================================
        public function Recieved_question($user_mail){
            $select_department = "SELECT * FROM more_account_info WHERE email='$user_mail'";
            $execute_department = mysqli_query($this->Frequency(), $select_department);
            $fetch_department = mysqli_fetch_assoc($execute_department);
                $department = $fetch_department['Department'];
 
            $questions = "SELECT * FROM user_question WHERE user_email_to='$user_mail' OR question_depend='$department' OR question_depend='all_users' OR question_depend='personal' AND user_email_owner != '$user_mail' ORDER BY created_on DESC";
            $execute_questions = mysqli_query($this->Frequency(), $questions);
            if(mysqli_num_rows($execute_questions) > 0 ){
                while($fetch_count = mysqli_fetch_assoc($execute_questions)){
                    $media_support = $fetch_count['media_support'];
                    $user_email_owner = $fetch_count['user_email_owner'];
                    $question = $fetch_count['question'];
                    $created_on = $fetch_count['created_on'];
                    $question_identity = $fetch_count['identity'];
                    $question_depend = $fetch_count['question_depend'];
 
                    $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$user_email_owner' AND status_image='1'";
                    $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                        $fetch_image = mysqli_fetch_assoc($execute_image);

                    $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$user_mail' AND status_image='1'";
                    $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                        $fetch_my_profile = mysqli_fetch_assoc($execute_image);    

                    $selectProfileDetail = "SELECT * FROM intelligent_users WHERE email='$user_email_owner'";
                    $executeDetail = mysqli_query($this->Frequency(), $selectProfileDetail);
                    $fetchDetail = mysqli_fetch_assoc($executeDetail); 
                        $user_identity = $fetchDetail['identity']; 
                        $firstName = $fetchDetail['firstName'];
                        $lastName = $fetchDetail['lastName'];   
 
                    $question_like = 0;
                    $count_likes = "SELECT * FROM user_question_likes WHERE question_identity='$question_identity'";
                    $execute_likes = mysqli_query($this->Frequency(), $count_likes);
                    while($fetch_likes = mysqli_fetch_assoc($execute_likes)){
                         $question_like = $question_like + 1;
                    }
 
                    $views = 0;
                    $question_views = "SELECT * FROM post_views WHERE post_identity='$question_identity'";
                    $execute_views = mysqli_query($this->Frequency(), $question_views);
                    while($fetch_views = mysqli_fetch_assoc($execute_views)){
                         $views = $views + 1; 
                    } 
                    if($user_email_owner == $user_mail){
                    }else{  ?>

                        <div class="each_answer">
                            <div><div class="questioner_profile_image"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="question_area">
                                <?php if($question_depend == 'personal'){?>
                                    <div class="questioner_full_name"><?php echo $firstName; ?> <?php echo $lastName; ?><i class="fa fa-user"></i> sent to you </div>
                                <?php }else if($question_depend == "all_users"){?>
                                    <div class="questioner_full_name"><?php echo $firstName; ?> <?php echo $lastName; ?> <i class="fa fa-group"></i> includes you </div>
                                <?php }else{?>
                                    <div class="questioner_full_name"><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                                <?php } ?>
                                <div class="full_question"><?php echo $question; ?></div>
                                <div class="question_img"><img src="<?php echo '../Images/Question&Answer/'.$media_support; ?>" alt="" width="100%" height="100%"></div>
                                <div class="short_detail_time">
                                    <div class="time_asked">asked <?php echo $this->count_date($created_on); ?></div>
                                    <!-- <div class="Viewed_time"> Viewed <?php echo $views; ?> time  </div> -->
                                    <div class="Viewed_time" id="<?php echo $question_identity; ?>" onclick="like_dislike(this)"><i class="fa fa-thumbs-o-up"></i> <span id="count_likes_recieved_<?php echo $question_identity; ?>">
                                        <script>
                                            setInterval(()=> {
                                                var question_identity = "<?php echo $question_identity; ?>";
                                                $("#count_likes_recieved_<?php echo $question_identity; ?>").load("question_answers.box.php", {
                                                    get_que_identity: question_identity
                                                });
                                            }, 1000);
                                        </script>        
                                    </span></div>
                                </div>

                                <div class="ansewers_recieved_full">
                                    <div class="summary_answer_count"><div class="count_answers">Answers (<span id="count_answer_<?php echo $question_identity; ?>"></span>)</div></div>
                                    <script>
                                        setInterval(()=> {
                                            var question_identity = "<?php echo $question_identity; ?>";
                                            $("#count_answer_<?php echo $question_identity; ?>").load("question_answers.box.php", {
                                                que_identity: question_identity
                                            });
                                        }, 1000);
                                    </script>
                                    <div class="add_answer">
                                        <div><div class="replier_image"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_my_profile['profile_image']; ?>" alt="" width="100%" height="100%"></div></div>
                                        <div class="textarea-reply"><textarea name="" id="" cols="30" rows="2" placeholder="Your thoughts..."></textarea></div>
                                        <div><button class="submit_answer" id="<?php echo $question_identity; ?>" onclick="submit_reply(this)">Reply</button></div>
                                    </div>
                                    <div id="load-answer_question_<?php echo $question_identity; ?>" class="show_answers">
                                        <script>
                                            setInterval(()=>{
                                                var question_identity = "<?php echo $question_identity; ?>";
                                                $("#load-answer_question_<?php echo $question_identity; ?>").load("question_answers.box.php", {
                                                    getQue_identity: question_identity
                                                });
                                            }, 1000);
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                }
            }else{ ?>
                <div class="each_answer">
                    <div class="getAnswer"><?php echo "No questions recieved yet" ?></div>
                </div>
        <?php }
        }

        public function save_answer($user_mail, $que_id, $answer){
            $selectProfileDetail = "SELECT * FROM intelligent_users WHERE email='$user_mail'";
            $executeDetail = mysqli_query($this->Frequency(), $selectProfileDetail);
            $fetchDetail = mysqli_fetch_assoc($executeDetail); 
                $lastName = $fetchDetail['lastName'];
                $user_identity = $fetchDetail['identity']; 
                $created_on = Date("Y-m-d h:m:s");

            $Insert_answer = "INSERT INTO user_answer VALUE ('','$user_identity','$que_id','$answer','$created_on')";
            $execute_answer_insertion = mysqli_query($this->Frequency(), $Insert_answer);
        }
    }

    // class deliberation
    // ===============================================================================================================
    $new_deliberation = new Deliberation();

    // if request is to count new question recieved
    // ===============================================================================================================================
    if(isset($_POST['count_recieved_question'])){
        echo $new_deliberation->count_recieved_questions($_POST['count_recieved_question']);
    }

    // if request is to show selectable option
    // ================================================================================================================================
    if(isset($_POST['request_option'])){
        $new_deliberation->show_department_list();
    }

    // if request is to submit question
    // =====================================================================================================================================
    if(isset($_POST['submit_question'])){
        $question = $_POST['question_text'];
        $question_depend = $_POST['question_depend'];
        $questionier = $_POST['user_email'];

        $photo_support = 'IB_question_image'.time().'Box'.'--'.$_FILES['photo_support']['name'];
        $file_size = $_FILES['photo_support']['size'];
        $location = "../Images/Question&Answer/".$photo_support;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        $valid_extensions = array("jpg","jpeg","png");

        // check extension
        if($_FILES['photo_support']['name'] == ""){
            $empty = $_FILES['photo_support']['name'];
            if($new_deliberation->spread_question($questionier, $question, $question_depend, $empty)){
                header("location: index.php?success");
                exit();
             }else{
                header("location: index.php?fail");
                exit();
             }
        }else{
            if(!in_array(strtolower($imageFileType), $valid_extensions)) {
                echo "extension not supported";
            }else{
                if($file_size < 30971520){
                    if(move_uploaded_file($_FILES['photo_support']['tmp_name'], $location)){
                       if($new_deliberation->spread_question($questionier, $question, $question_depend, $photo_support)){
                          header("location: index.php?success");
                          exit();
                       }else{
                            header("location: index.php?fail");
                            exit();
                       }
                    }else{
                        header("location: index.php?move_fail");
                        exit();
                    }
                }else{
                    header("location: index.php?size");
                    exit();
                }
            }
        }
    }

    // if request is to show all question i've asked
    // ===============================================================================================================
    if(isset($_POST['request_my_question'])){
        $new_deliberation->show_my_questions($_POST['request_my_question']);
    }

    // if request is to like or dislike question
    // ================================================================================================================
    if(isset($_POST['liker_email'])){
        $new_deliberation->like_dislike_question($_POST['liker_email'], $_POST['que_id']);
    }

    // if requst is to show all recieved question
    // ==============================================================================================================
    if(isset($_POST['getRecieved_question'])){
        $new_deliberation->Recieved_question($_POST['getRecieved_question']);
    }

    // if request is to save answer
    // =============================================================================================================
    if(isset($_POST['getAnswer'])){
        $new_deliberation->save_answer($_POST['answer_email'], $_POST['question_id'], $_POST['getAnswer']);
    }

    // if request is to count like
    if(isset($_POST['get_que_identity'])) {
        $new_deliberation->count_likes($_POST['get_que_identity']);
    }  

    // if isset display answers
    // ================================
    if(isset($_POST['getQue_identity'])){
        $new_deliberation->show_answer($_POST['getQue_identity']);
    }

    // if isset count answers
    // ==================================
    if(isset($_POST['que_identity'])){
        $new_deliberation->count_answer($_POST['que_identity']);
    }
?>