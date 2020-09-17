<?php 
   
    //  INITILIZE DATABASE CONNECTION
    // ==========================================================================================================
    require_once ("../../Scyllar.php");
    // ==========================================================================================================

    // CLASS FOR ALL DASH CONTENT
    // ==========================================================================================================
    class Dash_content extends Scyllar {
          
        public function Student($title){
            $select_all_student = "SELECT * FROM intelligent_users WHERE title='$title'";
            $execute_all_student = mysqli_query($this->Frequency(), $select_all_student);
            while($fetch_all_student = mysqli_fetch_assoc($execute_all_student)){
               $user_email = $fetch_all_student['email'];
               $firstname = $fetch_all_student['firstName'];
               $lastName = $fetch_all_student['lastName'];
               $user_identity = $fetch_all_student['identity'];
               $Verified = $fetch_all_student['Verified'];

               //  get profile image
               // =============================
               $profile_image = "SELECT * FROM user_profile_image WHERE usr_email='$user_email' AND status_image='1'";
               $execute_image = mysqli_query($this->Frequency(), $profile_image);
               $fetch_image = mysqli_fetch_assoc($execute_image);
                    $user_profile_image = $fetch_image['profile_image']; 
                
               $select_bio = "SELECT * FROM user_bio WHERE email='$user_email'";
               $execute_bio = mysqli_query($this->Frequency(), $select_bio);
               $fetch_bio = mysqli_fetch_assoc($execute_bio);
                   $user_bio = $fetch_bio['bio']; 

                $classes = 0;   
                $select_course = "SELECT * FROM class_tracks WHERE student_identity = '$user_identity'";
                $execute_course = mysqli_query($this->Frequency(), $select_course);
                while($fetch_class = mysqli_fetch_assoc($execute_course)){
                    $classes = $classes + 1;
                }

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

                $courses = 0;
                $selectCourse = "SELECT * FROM class_tracks WHERE student_identity='$user_identity'";
                $executeCourse = mysqli_query($this->Frequency(),$selectCourse);
                while($fetch_course = mysqli_fetch_assoc($executeCourse)){
                    $courses = $courses + 1;
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

                $my_groups = 0;
                $select_all_group = "SELECT * FROM user_groups WHERE group_name IN (SELECT DISTINCT group_name FROM user_group_member WHERE User_email='$user_email') AND group_name NOT IN (SELECT DISTINCT group_name FROM user_group_member WHERE approval='yes' AND User_email='$user_email')";
                $execute_group = mysqli_query($this->Frequency(), $select_all_group);
                while($fetch_all_group = mysqli_fetch_assoc($execute_group)){
                    $my_groups = $my_groups + 1;
                }

                $created_group = 0;
                $select_all_group = "SELECT * FROM user_groups WHERE email='$user_email'";
                $execute_group = mysqli_query($this->Frequency(), $select_all_group);
                while($fetch_all_group = mysqli_fetch_assoc($execute_group)){
                    $created_group = $created_group + 1;
                } 
                
                $select_location = "SELECT * FROM more_account_info WHERE email='$user_email'";
                $execute_location = mysqli_query($this->Frequency(), $select_location);
                $fetch_location = mysqli_fetch_assoc($execute_location);
                    $getLocation = $fetch_location['location'];
                    $department = $fetch_location['Department'];
                    $schools = $fetch_location['School'];
                    $contact = $fetch_location['contact'];
                    $birthday = $fetch_location['date_of_birth'];
                ?>
                <div class="position-relative">
                    <div class="each_users mb-4">
                        <div onmouseover="about_user(this)" onmouseout="about_user(this)" class="profile-image-usr"><img src="<?php echo '../../Images/profile-img/profile-image/'.$user_profile_image; ?> " alt="" width="100%" height="100%"></div>
                        <div class="user_desc">
                            <div class="user_name"><?php echo $firstname; ?> <?php echo $lastName; ?> <?php if($Verified == "Admin"){ ?><i class="fa fa-check"></i> <?php } ?></div>
                            <div class="user_bio"><?php echo $user_bio; ?></div>
                            <div class="follower d-flex justify-content-between">
                                <div><?php echo $followers; ?> followers</div>
                                <div><?php echo $Following; ?> following</div>
                            </div>
                        </div>
                    </div>  
                    <div class="about-user" style="z-index: 1;">
                        <div class="list-info">
                            <div><?php echo $firstname; ?> <?php echo $lastName; ?></div>
                            <div>Classes: <span class="count"><?php echo $classes; ?></span></div>
                            <div>followers: <span class="count"><?php echo $followers; ?></span></div>
                            <div>following: <span class="count"><?php echo $Following; ?></span></div>
                            <div>trainers: <span class="count"><?php echo $total_trainer; ?></span></div>
                            <div>joined groups: <span class="count"><?php echo $my_groups; ?></span></div>
                            <div>create group(s): <span class="count"><?php echo $created_group; ?></span></div>
                            <div><i class="fa fa-map-marker"></i> location: <span class="count"><?php echo $getLocation; ?></span></div>
                            <div>School: <span class="count"><?php echo $schools; ?></span></div>
                            <div>Trades: <span class="count"><?php echo $department; ?></span></div>
                            <div><i class="fa fa-birthday-cake"></i> Birthday: <span class="count"><?php echo $birthday; ?></span></div>
                            <div><i class="fa fa-phone"></i> Contacts: <span class="count"><?php echo $contact; ?></span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
        <?php }
        }

        public function class_student(){
            $select_trainer_class = "SELECT * FROM trainer_class WHERE Live='on'";
            $execute_trainer_class = mysqli_query($this->Frequency(), $select_trainer_class);
            while($fetch_trainer_class = mysqli_fetch_assoc($execute_trainer_class)){
                 $class_name = $fetch_trainer_class['class_name'];
                 $class_desc = $fetch_trainer_class['class_desc'];
                 $class_img = $fetch_trainer_class['class_profile_image']; 
                 $getClass_identity = $fetch_trainer_class['identity'];
                 $creater_identity = $fetch_trainer_class['user_identity'];

                $select_user = "SELECT * FROM intelligent_users WHERE identity='$creater_identity'";
                $execute_user = mysqli_query($this->Frequency(), $select_user);
                $fetch_user = mysqli_fetch_assoc($execute_user);
                    $usr_email = $fetch_user['email'];
     
                $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$usr_email' AND status_image='1'";
                $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                $fetch_image = mysqli_fetch_assoc($execute_image);
                    $profile_image_set = $fetch_image['profile_image'];

                $countCourse = 0;
                $select_course = "SELECT * FROM courses WHERE class_identity='$getClass_identity'";
                $execute_course_count = mysqli_query($this->Frequency(), $select_course);
                while($fetch_course = mysqli_fetch_assoc($execute_course_count)){
                    $countCourse = $countCourse + 1;
                }

                $learner = 0;
                $select_leaner = "SELECT * FROM class_tracks WHERE class_identity='$getClass_identity'";
                $execute_learner = mysqli_query($this->Frequency(), $select_leaner);
                while($fetch_learner = mysqli_fetch_assoc($execute_learner)){
                    $learner = $learner + 1;
                } ?>

                <div class="each_class mb-4">
                    <div class="class-background-image">
                      <img src="<?php echo '../../Images/class_img/'.$class_img; ?>" alt="" width="100%" height="100%">
                      <div class="creater-profile-image"><img src="<?php echo '../../Images/profile-img/profile-image/'.$profile_image_set; ?>" alt=""></div>
                    </div>
                    <div class="user_desc">
                        <div class="user_name"><?php echo $class_name; ?></div>
                        <div class="user_bio"><?php echo $class_desc; ?></div>
                        <div class="follower d-flex justify-content-between">
                            <div><?php echo $learner; ?> learner</div>
                            <div><?php echo $countCourse; ?> courses</div>
                        </div>
                    </div>
                </div>            
            <?php }
        }

        public function all_groups (){
            $select_all_groups = "SELECT * FROM user_groups ";
            $execute_all_groups = mysqli_query($this->Frequency(), $select_all_groups);
            while($fetch_all_groups = mysqli_fetch_assoc($execute_all_groups)){
                $groups_profile_image = $fetch_all_groups['group_profile_image'];
                $group_name = $fetch_all_groups['group_name'];
                $group_privacy = $fetch_all_groups['group_privacy'];
                $group_identity = $fetch_all_groups['identity'];
                $group_bio = $fetch_all_groups['group_bio'];
                $creater = $fetch_all_groups['email'];

                $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$creater' AND status_image='1'";
                $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                $fetch_image = mysqli_fetch_assoc($execute_image);
                    $profile_image_set = $fetch_image['profile_image'];

                $member = 0;
                $select_member = "SELECT * FROM user_group_member WHERE group_identity='$group_identity'";
                $execute_member_count = mysqli_query($this->Frequency(), $select_member);
                while($fetch_member_count = mysqli_fetch_assoc($execute_member_count)){
                    $member = $member + 1;
                }?>

                <div class="each_class mt-4">
                    <div class="class-background-image">
                      <img src="<?php echo '../../Images/groups/'.$groups_profile_image; ?>" alt="" width="100%" height="100%">
                      <div class="creater-profile-image"><img src="<?php echo '../../Images/profile-img/profile-image/'.$profile_image_set; ?>" alt=""></div>
                    </div>
                    <div class="user_desc">
                      <div class="user_name"><?php echo $group_name; ?></div>
                      <div class="user_bio"><?php echo $group_bio; ?></div>
                      <div class="follower d-flex justify-content-between">
                        <div><i class="fa fa-user-o"></i> <?php echo $member; ?> Members</div>
                        <div><i class="fa fa-shield"></i> <?php echo $group_privacy; ?></div>
                      </div>
                    </div>
                </div>
                <?php 
            }
        }

        // DISPLAY POST THAT AVE BEEN POSTED EARLIER
        // =====================================================================================================
        public function show_posts(){
            $select_posts = "SELECT * FROM user_common_post";
            $execute_posts = mysqli_query($this->Frequency(), $select_posts);
            if(mysqli_num_rows($execute_posts) > 0){
                while($fetch_posts = mysqli_fetch_assoc($execute_posts)){
                    $select_media_posted = $fetch_posts['media_posted'];
                    $select_caption = $fetch_posts['media_caption'];
                    $select_media_type = $fetch_posts['media_type'];
                    $poster_email = $fetch_posts['poster_email'];
                    $post_identity = $fetch_posts['identity'];

                    $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$poster_email'";
                    $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                    $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                        $getFirstname = $fetch_basic_info['firstName'];
                        $getLastname = $fetch_basic_info['lastName'];

                    $select_poster_img = "SELECT profile_image FROM user_profile_image WHERE usr_email='$poster_email' AND status_image='1'";
                    $execute_profile_image = mysqli_query($this->Frequency(),$select_poster_img);
                    $fetch_image = mysqli_fetch_assoc($execute_profile_image);
                        $profile_image = $fetch_image['profile_image']; 
                        
                    $comments = 0;
                    $selectComments = "SELECT * FROM user_common_post_comments WHERE post_identity='$post_identity'";
                    $execute_comment = mysqli_query($this->Frequency(),$selectComments);
                    while($fetchFollowing = mysqli_fetch_assoc($execute_comment)){
                        $comments = $comments + 1;
                    } 
                    
                    $likes = 0;
                    $selectLikes = "SELECT * FROM user_common_post_likes WHERE post_identity='$post_identity' AND status_like='1'";
                    $execute_Likes = mysqli_query($this->Frequency(),$selectLikes);
                    while($fetchFollowing = mysqli_fetch_assoc($execute_Likes)){
                        $likes = $likes + 1;
                    } ?>

                    <div class="each_class mt-4">
                        <?php if($select_media_type == "mp4"){?>
                        <div class="post-found">
                            <video src="<?php echo '../../videos/activity_stream-vd/'.$select_media_posted ?>" alt="" width="100%" height="100%" id="myVideo"></video>
                            <div class="control-video d-flex"><i class="fa fa-play" onclick="playOrPause(this)" id="playBtn"></i></div>
                            <div class="video-controls">
                                <div class="video-status mb-2">
                                    <div class="status-number d-flex justify-content-between">
                                        <div id="currentTime">00:00 / 00:00</div>
                                        <small></small>
                                    </div>
                                </div>
                                <div class="video-stream-line" id="seek-bar"><div id="fill"></div></div>
                            </div>
                            <div class="creater-profile-image"><img src="<?php echo '../../Images/profile-img/profile-image/'.$profile_image; ?>" alt=""></div>
                        </div>
                        <?php }else{?>
                        <div class="post-found">
                            <img src="<?php echo '../../Images/activity_stream/'.$select_media_posted ?>" alt="" width="100%" height="100%">
                            <div class="creater-profile-image"><img src="<?php echo '../../Images/profile-img/profile-image/'.$profile_image; ?>" alt=""></div>
                        </div>
                        <?php } ?>
                        <div class="user_desc">
                            <div class="user_caption"><?php echo $select_caption; ?></div>
                            <div class="follower d-flex justify-content-between">
                                <div><i class="fa fa-comment-o"></i> <?php echo $comments; ?> Comments</div>
                                <div><i class="fa fa-heart-o"></i> <?php echo $likes; ?> Likes</div>
                            </div>
                        </div>
                    </div>
                <?php }
            }
        }

        public function show_departments(){
            $select_departments = "SELECT * FROM departments";
            $execute_departments = mysqli_query($this->Frequency(),$select_departments);
            while($fetch_departments = mysqli_fetch_assoc($execute_departments)){
                $department_img = $fetch_departments['department_img'];
                $department_name = $fetch_departments['department_name'];
                $department_bio = $fetch_departments['department_desc'];
                $department_course = $fetch_departments['department_course_count'];
                $department_identity = $fetch_departments['identity'];
                
                $learner = 0;
                $select_learner = "SELECT * FROM more_account_info WHERE Department='$department_name'";
                $execute_learner = mysqli_query($this->Frequency(), $select_learner);
                while($fetch_learner = mysqli_fetch_assoc($execute_learner)){
                    $learner = $learner + 1;
                } ?>

                <div class="each_class">
                    <div class="post-found">
                      <img src="<?php echo '../../Images/Department/'.$department_img; ?>" alt="" width="100%" height="100%">
                    </div>
                    <div class="user_desc">
                      <div class="user_name"><?php echo $department_name; ?></div>
                      <div class="user_caption"><?php echo $department_bio; ?></div>
                      <div class="follower mt-1 d-flex justify-content-between">
                        <div><i class="fa fa-graduation-cap"></i> <?php echo $department_course; ?></div>
                        <div><i class="fa fa-user-o"></i> <?php echo $learner; ?></div>
                        <div><i class="fa fa-mortar-board"></i> 46</div>
                      </div>
                    </div>
                </div>
                   
            <?php }
        }

        public function Recieved_question(){
            $questions = "SELECT * FROM user_question";
            $execute_questions = mysqli_query($this->Frequency(), $questions);
                while($fetch_count = mysqli_fetch_assoc($execute_questions)){
                    $media_support = $fetch_count['media_support'];
                    $user_email_owner = $fetch_count['user_email_owner'];
                    $question = $fetch_count['question'];
                    $created_on = $fetch_count['created_on'];
                    $question_identity = $fetch_count['identity'];
 
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
                    $count_likes = "SELECT * FROM user_question_likes WHERE question_identity='$question_identity'";
                    $execute_likes = mysqli_query($this->Frequency(), $count_likes);
                    while($fetch_likes = mysqli_fetch_assoc($execute_likes)){
                         $question_like = $question_like + 1;
                    }
 
                    $views = 0;
                    $question_views = "SELECT * FROM user_question_views WHERE question_identity='$question_identity'";
                    $execute_views = mysqli_query($this->Frequency(), $question_views);
                    while($fetch_views = mysqli_fetch_assoc($execute_views)){
                         $views = $views + 1; 
                    } 
                    
                    $answers = 0;
                    $select_answer = "SELECT * FROM user_answer WHERE question_identity='$question_identity'";
                    $execute_answer = mysqli_query($this->Frequency(), $select_answer);
                    while($fetch_answer = mysqli_fetch_assoc($execute_answer)){
                        $answers = $answers + 1;
                    }
                    ?>
                    <div class="each_class mt-4">
                        <div class="post-found position-relative">
                            <img src="<?php echo '../../Images/Question&Answer/'.$media_support ?>" alt="" width="100%" height="100%">
                            <div class="creater-profile-image"><img src="<?php echo '../../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt=""></div>
                        </div>
                        <div class="user_desc">
                            <div class="user_name"><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                            <div class="user_caption"><?php echo $question; ?></div>
                            <div class="follower d-flex justify-content-between">
                                <div> <?php echo $question_like; ?> likes</div>
                                <div> <?php echo $views; ?> Views</div>
                                <div> <?php echo $answers; ?> Answers</div>
                            </div>
                        </div>
                    </div>
         <?php }
        }

        public function count_student($title){
            $student = 0;
            $select_all_student = "SELECT * FROM intelligent_users WHERE title='$title'";
            $execute_all_student = mysqli_query($this->Frequency(), $select_all_student);
            while($fetch_all_student = mysqli_fetch_assoc($execute_all_student)){
                $student = $student + 1;
            }

            echo $student;
        }

        public function display_history($title){
            $select_history = "SELECT * FROM history_post WHERE history_section ='$title' OR history_section = 'defined'";
            $execute_history = mysqli_query($this->Frequency(), $select_history);
            while($fetch_history = mysqli_fetch_assoc($execute_history)){
                $post_identity = $fetch_history['identity'];

                $likes = 0;
                $select_likes = "SELECT * FROM history_post_likes WHERE post_identity='$post_identity' AND status_like='1'";
                $execute_likes = mysqli_query($this->Frequency(), $select_likes);
                while($fetch_likes = mysqli_fetch_assoc($execute_likes)){
                    $likes = $likes + 1;
                } 
                 ?>
                <div class="each_story mb-4">
                    <div class="history-img-found"><img src="<?php echo '../../Images/history-img/'.$fetch_history['media']; ?>" alt="" width="100%" height="100%"></div>
                    <div class="user_desc">
                        <div class="story-title-post"><?php echo $fetch_history['history_title']; ?></div>
                        <div class="user_caption"> [ <?php echo $fetch_history['history_sub_title']; ?> ]</div>
                        <div class="user_caption"><?php echo $fetch_history['history_full_body']; ?></div>
                        <div class="follower d-flex justify-content-between">
                            <div><i class="fa fa-pencil"></i> <?php echo $fetch_history['email']; ?></div>
                            <div><i class="fa fa-heart-o"></i> <?php echo $likes?> Likes</div>
                        </div>
                    </div>
                </div>
      <?php }
        }

        public function Topics(){
            $select_topics = "SELECT * FROM user_topics";
            $execute_topics = mysqli_query($this->Frequency(), $select_topics);
            while($fetch_topics = mysqli_fetch_assoc($execute_topics)){ ?>
                <div class="each_story">
                    <div class="history-img-found"><img src="<?php echo '../../Images/topics/'.$fetch_topics['topic_media']; ?>" alt="" width="100%" height="100%"></div>
                    <div class="user_desc">
                        <div class="story-title-post"><?php echo $fetch_topics['topic']; ?></div>
                        <div class="user_caption"><?php echo $fetch_topics['topic_description']; ?></div>
                        <div class="follower d-flex justify-content-between">
                            <div><i class="fa fa-comment-o"></i> 4563 Comments</div>
                            <!-- <div><i class="fa fa-heart-o"></i> 46 Likes</div> -->
                        </div>
                    </div>
                </div>
        <?php }
        }

        public function news_uploaded(){
            $select_news = "SELECT * FROM user_religion_post WHERE media_side ='news'";
            $execute_news = mysqli_query($this->Frequency(), $select_news);
            while($fetch_news = mysqli_fetch_assoc($execute_news)){ 
                $news_content_idenity = $fetch_news['identity'];
                $content_section = $fetch_news['media_section']; ?>
                <div class="each-long-story mb-4">
                    <div class="d-flex alignment">
                        <div class="long-story-media">
                            <div class="media-story"><img src="<?php echo '../../Images/religions/each-religion/news/'.$fetch_news['media_posted']; ?>" alt="" width="100%" height="100%"></div>
                        </div>
                        <div class="long-story-desc ml-2">
                            <div class="long-story-title"><?php echo $fetch_news['caption_title']; ?></div>
                            <div class="sub-title"><?php echo $fetch_news['caption_sub_title']; ?></div>
                            <div class="long-story-full-desc mt-2">
                                <div class="story-holder-desc"><?php echo $fetch_news['media_caption']; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="user-accurate mt-2 d-flex justify-content-between">
                        <div class="read-more-story"><i class="fa fa-pencil "></i> manirabona Patience </div>
                        <div class="like-story"><i class="fa fa-thumbs-o-up "></i> likes <span>38</span></div>
                        <div class="comment-user" data-toggle="collapse" data-target="#comment-1"><i class="fa fa-comment-o"></i> <span>356K</span></div>
                    </div>
                    <div class="comment-found-area collapse mt-2" id="comment-1">
                        <div class="each-comment">
                            <div class="user-image-comment"><div class="img-commenter"><img src="../Images/religions/religion-activity/city-wallpaper-48-640x360.jpg" alt="" width="100%" height="100%"></div></div>
                            <div class="comment-found">
                                <div class="commenter-name">manirabona hirwa patience</div>
                                <div class="comment">
                                    when registering as a member
                                    of a website, when shopping
                                    online, and when signing up for
                                    newsletters or mailing lists
                                </div>
                                <div class="user-accurate-comment">
                                    <div class="likecomment"><i class="fa fa-heart-o mr-2"></i>likes <span>290K</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
        }

        public function world_news(){
            $select_all_news = "SELECT * FROM user_common_news WHERE news_independent != 'top_story'";
            $execute_news = mysqli_query($this->Frequency(), $select_all_news);
            while($fetch_news = mysqli_fetch_assoc($execute_news)){ 
                $news_image = $fetch_news['news_media'];
                $news_title = $fetch_news['news_title'];
                $news_desc = $fetch_news['news_description'];
                $news_iden = $fetch_news['news_independent'];
                $news_identity = $fetch_news['identity'];
                $creater = $fetch_news['user_email'];
                
                $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$creater'";
                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                $fetch_basic= mysqli_fetch_assoc($execute_basic_info);
                    $firstname = $fetch_basic['firstName'];
                    $lastname = $fetch_basic['lastName'];

                $news_comment = 0;
                $select_all_comment = "SELECT * FROM user_common_news_comments WHERE news_identity='$news_identity'";
                $execute_countcomment = mysqli_query($this->Frequency(), $select_all_comment);
                while($count_comment = mysqli_fetch_assoc($execute_countcomment)){
                    $news_comment = $news_comment + 1;
                } 
                ?>
                <div class="each_news mb-4">
                    <div class="news-img-found"><img src="<?php echo '../../Images/world-news-img/'.$news_image; ?>" alt="" width="100%" height="100%"></div>
                    <div class="user_desc">
                        <div class="story-title-post"><?php echo $news_title; ?></div>
                        <div class="news_desc"><?php echo $news_desc; ?></div>
                        <div class="follower d-flex justify-content-between">
                            <div><i class="fa fa-pencil"></i> <?php if($creater == "intelligentBox@gmail.box"){echo "Intelligent news";}else{ echo $firstname.' '.$lastname; }?></div>
                            <div><i class="fa fa-comment-o"></i> <?php echo $news_comment; ?></div>
                            <div><i class="fa fa-globe"></i> <?php echo $news_iden; ?></div>
                        </div>
                    </div>
                </div>
        <?php }
        }

        public function world_top_news(){
            $select_all_news = "SELECT * FROM user_common_news WHERE news_independent = 'top_story'";
            $execute_news = mysqli_query($this->Frequency(), $select_all_news);
            while($fetch_news = mysqli_fetch_assoc($execute_news)){ 
                $news_image = $fetch_news['news_media'];
                $news_title = $fetch_news['news_title'];
                $news_desc = $fetch_news['news_description'];
                $news_iden = $fetch_news['news_independent'];
                $news_identity = $fetch_news['identity'];
                $creater = $fetch_news['user_email'];
                
                $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$creater'";
                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                $fetch_basic= mysqli_fetch_assoc($execute_basic_info);
                    $firstname = $fetch_basic['firstName'];
                    $lastname = $fetch_basic['lastName'];

                $news_comment = 0;
                $select_all_comment = "SELECT * FROM user_common_news_comments WHERE news_identity='$news_identity'";
                $execute_countcomment = mysqli_query($this->Frequency(), $select_all_comment);
                while($count_comment = mysqli_fetch_assoc($execute_countcomment)){
                    $news_comment = $news_comment + 1;
                } 
                ?>
                <div class="each_news mb-4">
                    <div class="news-img-found"><img src="<?php echo '../../Images/world-news-img/'.$news_image; ?>" alt="" width="100%" height="100%"></div>
                    <div class="user_desc">
                        <div class="story-title-post"><?php echo $news_title; ?></div>
                        <div class="news_desc"><?php echo $news_desc; ?></div>
                        <div class="follower d-flex justify-content-between">
                            <div><i class="fa fa-pencil"></i> <?php if($creater == "intelligentBox@gmail.box"){echo "Intelligent news";}else{ echo $firstname.' '.$lastname; }?></div>
                            <div><i class="fa fa-comment-o"></i> <?php echo $news_comment; ?></div>
                            <div><i class="fa fa-globe"></i> <?php echo $news_iden; ?></div>
                        </div>
                    </div>
                </div>
        <?php }
        }

        public function select_content(){
            $select_content = "SELECT * FROM user_religion_post WHERE media_side !='news'";
            $execute_content = mysqli_query($this->Frequency(), $select_content);
            while($fetch_content = mysqli_fetch_assoc($execute_content)){ 
                $news_content_idenity = $fetch_content['identity'];
                $content_section = $fetch_content['media_section'];
                ?>
               <div class="each-long-story">
                    <div class="d-flex alignment">
                        <div class="long-story-media">
                            <div class="media-story"><img src="<?php echo '../../Images/religions/each-religion/'.$content_section.'/'.$fetch_content['media_posted']; ?>" alt="" width="100%" height="100%"></div>
                        </div>
                        <div class="long-story-desc ml-2">
                            <div class="long-story-title"><?php echo $fetch_content['caption_title']; ?></div>
                            <div class="sub-title"><?php echo $fetch_content['caption_sub_title']; ?></div>
                            <div class="long-story-full-desc mt-2">
                                <div class="story-holder-desc"><?php echo $fetch_content['media_caption']; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="user-accurate mt-2 d-flex justify-content-between">
                        <div class="read-more-story"><i class="fa fa-pencil "></i> manirabona Patience </div>
                        <div class="like-story"><i class="fa fa-thumbs-o-up "></i> likes <span>38</span></div>
                        <div class="comment-user" data-toggle="collapse" data-target="#comment-1"><i class="fa fa-comment-o"></i> <span>356K</span></div>
                    </div>
                    <div class="comment-found-area collapse mt-2" id="comment-1">
                        <div class="each-comment">
                            <div class="user-image-comment"><div class="img-commenter"><img src="../Images/religions/religion-activity/city-wallpaper-48-640x360.jpg" alt="" width="100%" height="100%"></div></div>
                            <div class="comment-found">
                                <div class="commenter-name">manirabona hirwa patience</div>
                                <div class="comment">
                                    when registering as a member
                                    of a website, when shopping
                                    online, and when signing up for
                                    newsletters or mailing lists
                                </div>
                                <div class="user-accurate-comment">
                                    <div class="likecomment"><i class="fa fa-heart-o mr-2"></i>likes <span>290K</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <?php }
        }

        public function read_files(){
            $dir = "../../Backup_Restore/";
            $dh = opendir($dir);

            // Open a directory, and read its contents
            while ($file = readdir($dh)){ 
                if($file == "backup.php" || $file == "restore.php" || $file == "." || $file == ".."){

                }else{ ?>
                    <li id="<?php echo $file; ?>" onclick="restore_database(this)"><span></span> <?php echo $file; ?></li>
                <?php } 
            }
        }

        public function count_News($section){
            $news = 0;
            $select_section = "SELECT * FROM user_religion_post WHERE media_section='$section'";
            $execute_section = mysqli_query($this->Frequency(), $select_section);
            while($fetch_news = mysqli_fetch_assoc($execute_section)){
                $news = $news + 1;
            }

            echo $news;
        }

        public function add_view($post_identity){
            $select_view = "SELECT * FROM post_views WHERE post_identity='$post_identity'";
            $execute_view = mysqli_query($this->Frequency(), $select_view);
            if(mysqli_num_rows($execute_view) > 0){
                $update_view = "UPDATE post_views SET view = view + 1 WHERE post_identity='$post_identity'";
                $execute_view_count = mysqli_query($this->Frequency(), $update_view);
            }else{
                $created_on = Date("Y-m-d h:m:s");
                $insert_new_record = "INSERT INTO post_views VALUE ('','$post_identity','1','$created_on')";
                $execute_record = mysqli_query($this->Frequency(), $insert_new_record);
            }
        }

        public function count_view($post_identity){
            $count_view = "SELECT view FROM post_views WHERE post_identity='$post_identity'";
            $execute_view = mysqli_query($this->Frequency(), $count_view);
            $fetch_view = mysqli_fetch_assoc($execute_view);
                 $views = $fetch_view['view'];
            echo $views;
        }

    }

    // implement class dashbord content
    // =============================================================================================================================================
    $new_content = new Dash_content();

    // if request is to show all student
    // ==============================================================================================================================================
    if(isset($_POST['getStudent'])){
        $new_content->Student($_POST['getStudent']);
    }

    // if request is to load trainers
    // =======================================================================================================================================================
    if(isset($_POST['getTrainer'])){
        $new_content->Student($_POST['getTrainer']);
    }

    // if request is to show all class
    // ===========================================================================================================================================
    if(isset($_POST['getClass'])){
        $new_content->class_student();
    }

    // if request is to show all groups
    // ===================================================================================================================================================
    if(isset($_POST['getGroups'])){
        $new_content->all_groups();
    }

    // if request to show all posts
    // =======================================================================================================================================================
    if(isset($_POST['getMedia'])){
        $new_content->show_posts();
    }

    // if request is to show all posts
    // ========================================================================================================================================================
    if(isset($_POST['getTrades'])){
        $new_content->show_departments();
    }

    // if request is to show all question presented
    // ===============================================================================================================================================================
    if(isset($_POST['getQuestions'])){
        $new_content->Recieved_question();
    }

    // if request is to count student
    // =====================================================================================================================================================================
    if(isset($_POST['countStudent'])){
        $new_content->count_student($_POST['countStudent']);
    }

    // if request is to count trainer
    // =====================================================================================================================================================================
    if(isset($_POST['countTrainer'])){
        $new_content->count_student($_POST['countTrainer']);
    }

    // if request is to display history
    // ===========================================================================================================================================================
    if(isset($_POST['story'])){
        $new_content->display_history($_POST['story']);
    }

    // if request is to display history
    // ===========================================================================================================================================================
    if(isset($_POST['day_history'])){
        $new_content->display_history($_POST['day_history']);
    }

    // if request is to display topics
    // ============================================================================================================================================================
    if(isset($_POST['topics'])){
        $new_content->Topics();
    }

    // if request is to fetch uploaded news
    // ====================================================================================================================================================================
    if(isset($_POST['news_uploaded'])){
        $new_content->news_uploaded();
    }

    // if request is to display all world news
    // ========================================================================================================================================================================
    if(isset($_POST['world_news_trend'])){
        $new_content->world_news();
    }

    // if request is to display all top stories
    // ========================================================================================================================================================================
    if(isset($_POST['world_news_top'])){
        $new_content->world_top_news();
    }

    // if request is to display all content religion posted 
    // ========================================================================================================================================================================
    if(isset($_POST['content_list'])){
        $new_content->select_content();
    }

    // if request is to retrive data file
    // ==============================================================================================================================================================================
    if(isset($_POST['data_file'])){
        $new_content->read_files();
    }

    // if request is to count each news
    // =======================================================================================================================================
    if(isset($_POST['getSection'])){
        $new_content->count_News($_POST['getSection']);
    }

    // if request is to add view
    // =========================================================================================================================================
    if(isset($_POST['getUser_post_identity'])){
        $new_content->add_view($_POST['getUser_post_identity']);
    }

    // if request is to fetch views
    // ==========================================================================================================================================
    if(isset($_POST['getViews'])){
        $new_content->count_view($_POST['getViews']);
    }
?>