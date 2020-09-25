<?php 
    //  INITIALIZE DATABASE CONNECTION
    // ============================================================================================================
    require_once ("../Scyllar.php");
    // ============================================================================================================

    // INITIALIZE CLASS
    // ============================================================================================================
    class Religion_content extends Scyllar {

        public function each_religinon_continet($religion_continet, $religion_page){ ?>
            <!-- title categories, history -->
            <div class="top-title mt-5">
                <div class="history"><?php echo $religion_page; ?> in <?php echo $religion_continet; ?></div>
            </div>
            <!-- end title -->

            <!-- history post shared -->
            <div class="history-post mt-3">
                <div class="post-list-holder">
                <?php 
                    $select_each = "SELECT * FROM user_religion_post WHERE media_continet='$religion_continet' AND media_section != 'news' AND media_section = '$religion_page'";
                    $execute_each = mysqli_query($this->Frequency(), $select_each);
                    while($fetch_each = mysqli_fetch_assoc($execute_each)){ 
                        $activity_image = $fetch_each['media_posted'];
                        $activity_title = $fetch_each['caption_title'];
                        $caption_sub_title = $fetch_each['caption_sub_title'];
                        $activity_body = $fetch_each['media_caption']; ?>
                        <!-- each post start -->
                        <div class="each-history-post d-flex">
                            <div><div class="history-image"><img src="<?php echo '../Images/religions/each-religion/christian/'.$activity_image; ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="post-desc ml-3">
                                <div class="post-title"><?php echo $activity_title; ?></div>
                                <div class="post-sub-title mt-2"><?php echo $caption_sub_title; ?></div><hr>
                                <div class="sub-full-desc mt-3"><?php echo $activity_body; ?></div>
                            </div>
                        </div>
                        <!-- end each history post -->
              <?php } ?>
                </div>
            </div>
            <!-- end history post -->
       <?php }

       public function topics_content($topic_area, $my_email){
           $select_content = "SELECT * FROM user_topics WHERE topic_area='$topic_area'";
           $execute_content = mysqli_query($this->Frequency(), $select_content);
           while($fetch_content = mysqli_fetch_assoc($execute_content)){ 
               $topics_image = $fetch_content['topic_media'];
               $topic_title = $fetch_content['topic'];
               $topics_sub_title = $fetch_content['top_sub_title'];
               $topic_desc = $fetch_content['topic_description'];  
               $topic_identity = $fetch_content['id']; 
               
               $select_my_profile = "SELECT * FROM user_profile_image WHERE usr_email='$my_email'";
               $execute_my_profile = mysqli_query($this->Frequency(), $select_my_profile);
               $fetch_profile = mysqli_fetch_assoc($execute_my_profile);
                    $profile_image = $fetch_profile['profile_image'];
               ?>
                <!-- each story -->
                <!-- ================================================================================================================================== -->
                <div class="each-today-in-history">
                    <div><div class="story-image"><img src="<?php echo '../Images/topics/'.$topics_image; ?>" alt="" width="100%" height="100%"></div> </div>
                    <div class="story-desc pt-3 pl-2 pr-2">
                        <div class="story-title-1 d-flex justify-content-between">
                            <div class=""><?php echo  $topic_title; ?></div>
                            <div class="expand-story" data-toggle="collapse" data-target="#christianity_<?php echo $topic_identity; ?>"><i class="fa fa-angle-double-right"></i></div>
                        </div>
                        <div class="full-story mt-2"><?php echo $topics_sub_title; ?></div>
                        <div class="readMore-on collapse" id="christianity_<?php echo $topic_identity; ?>"><?php echo $topic_desc; ?> </div>
                        <div class="add_answer">
                            <div><div class="replier_image"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="textarea-reply"><textarea name="" id="" cols="30" rows="2" placeholder="Reply your thoughts..."></textarea></div>
                            <div><button class="submit_answer" id="<?php echo $topic_identity; ?>" onclick="submit_ideas_user(this)">Share</button></div>
                        </div>
                        <div class="display_all_topic_ideas" id="display_all_topic_ideas_<?php echo $topic_identity; ?>">
                            <script>
                                setInterval(()=>{
                                    var topic_identity = "<?php echo $topic_identity; ?>";
                                    $("#display_all_topic_ideas_<?php echo $topic_identity; ?>").load("religion_content.php", {
                                        getTopics_identity: topic_identity
                                    });
                                }, 1000);
                            </script>
                        </div>
                    </div>
                </div>
                <!-- end each story -->
                <!-- =========================================================================================================================================== -->
        <?php }
        }

        // EXECUTE ALL IDEAS FOUNDS
        // =======================================================================================================================================
        function ideas_present($topics_idea){
            $select_all_ideas = "SELECT * FROM user_topic_ideas WHERE topic_identity='$topics_idea'";
            $execute_ideas = mysqli_query($this->Frequency(), $select_all_ideas);
            $count_ideas = 0;
            while($fetch_all_ideas = mysqli_fetch_assoc($execute_ideas)){
                $user_email = $fetch_all_ideas['user_email'];
                $ideas = $fetch_all_ideas['ideas'];

                $select_basic = "SELECT * FROM intelligent_users WHERE email='$user_email'";
                $execute_basic = mysqli_query($this->Frequency(), $select_basic);
                $fetch_basic = mysqli_fetch_assoc($execute_basic);
                     $firstname = $fetch_basic['firstName'];
                     $lastname = $fetch_basic['lastName'];

                $count_ideas = $count_ideas + 1;
                $select_my_profile = "SELECT * FROM user_profile_image WHERE usr_email='$user_email'";
                $execute_my_profile = mysqli_query($this->Frequency(), $select_my_profile);
                $fetch_profile = mysqli_fetch_assoc($execute_my_profile);
                    $profile_image = $fetch_profile['profile_image']; ?>
                    <div class="each_answer">
                        <div><div class="answerer_profile_image">
                            <img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%">
                            <div class="answer_number"><?php echo $count_ideas; ?></div>
                        </div></div>
                        <div class="full-answers">
                            <div class="getAnswer"><?php echo $firstname; ?> <?php echo $lastname; ?> said "</div>
                            <div class="getAnswer"><?php echo $ideas; ?>"</div>
                        </div>
                    </div>
           <?php }
        }   

        // METHORD TO SAVE IDEA
        // ==================================================================================================================
        public function save_ideas($idea_email, $ideas, $topic_id){
            $created_on = Date("Y-m-d h:m:s");
            $save_idea = "INSERT INTO user_topic_ideas VALUE ('','$topic_id','$idea_email','$ideas','$created_on')";
            $execute_idea = mysqli_query($this->Frequency(), $save_idea);
        }

        // METHOD GET PROFILE IMAGE
        // =============================================================================================================================
        public function getProfileImage($Email){
            $selectImage = "SELECT * FROM user_profile_image WHERE usr_email='$Email' AND status_image='1'";
            $executeImage = mysqli_query($this->Frequency(),$selectImage);
            $fetchImage = mysqli_fetch_assoc($executeImage); ?>
                <img src="<?php echo '../Images/profile-img/profile-image/'.$fetchImage['profile_image'] ?>" width="100%" height="100%">
        <?php }

        public function continet_content($continet, $religion, $user_email){ ?>
            <!-- bottom news -->
            <!-- ==================================================================================================================================== -->
            <!-- ==================================================================================================================================== -->
            <div class="long-story mt-4">
                <div class="long-holder">

                    <!-- titles -->
                    <!-- ======================================================================================== -->
                    <!-- ========================================================================================== -->
                    <div class="titles-long">
                        <div class="all-news-title">all news in <?php echo $continet; ?></div>
                    </div>
                    <!-- end titles -->
                    <!-- ============================================================================================================== -->
                    <!-- ============================================================================================================== -->

                    <!-- all long story -->
                    <!-- ===================================================================================================================== -->
                    <div class="long-story-section mt-3">
                        <?php 
                            $select_news = "SELECT * FROM user_religion_post WHERE media_section = '$religion' AND media_continet = '$continet' OR media_continet = 'world' AND media_side = 'news'";
                            $execute_news = mysqli_query($this->Frequency(), $select_news);
                            while($fetch_news = mysqli_fetch_assoc($execute_news)){
                                $media_posted = $fetch_news['media_posted'];
                                $media_title = $fetch_news['caption_title'];
                                $media_sub_title = $fetch_news['caption_sub_title'];
                                $media_body = $fetch_news['media_caption'];
                                $media_identity = $fetch_news['identity'];
                                $creater = $fetch_news['user_email'];

                                $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$creater'";
                                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                                $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                                    $firstname = $fetch_basic_info['firstName'];
                                    $lastname = $fetch_basic_info['lastName'];
                                
                                $select_user_image = "SELECT * FROM user_profile_image WHERE usr_email='$user_email' AND status_image = '1'";
                                $execute_profile = mysqli_query($this->Frequency(), $select_user_image);
                                $fetch_user_profile = mysqli_fetch_assoc($execute_profile);
                                    $profile_image = $fetch_user_profile['profile_image'];

                                $count_comment = 0;
                                $select_comment = "SELECT * FROM user_religion_post_comment WHERE post_identity='$media_identity'";
                                $execute_comment_count = mysqli_query($this->Frequency(), $select_comment);
                                while($fetch_comment_count = mysqli_fetch_assoc($execute_comment_count)){
                                    $count_comment = $count_comment + 1;
                                }  
                                
                                $count_likes = 0;
                                $select_count_like = "SELECT * FROM user_religion_post_like WHERE post_identity='$media_identity'";
                                $execute_count_comment = mysqli_query($this->Frequency(), $select_count_like);
                                while($fetch_count_like = mysqli_fetch_assoc($execute_count_comment)){
                                    $count_likes = $count_likes + 1;
                                } ?>
                                <!-- each long story -->
                                <!-- =========================================================================================================================== -->
                                <div class="each-long-story">
                                    <div class="alignment">
                                        <div class="long-story-media">
                                            <div class="media-story"><img src="<?php echo '../Images/religions/each-religion/news/'.$media_posted; ?>" alt="" width="100%" height="100%"></div>
                                        </div>
                                        <p class="long-story-desc">
                                            <span class="long-story-title"><?php echo $media_title; ?></span><hr>
                                            <span class="story-holder-desc"><?php echo $media_body; ?></span>
                                        </p>
                                    </div>

                                    <div class="user-accurate mt-2 d-flex justify-content-between">
                                    <div class="read-more-story"><i class="fa fa-pencil "></i> <?php if($creater == 'intelligentBox@gmail.box'){?> Intelligent box <?php }else{ ?> <?php echo $firstname; ?> <?php echo $lastname; ?> <?php } ?></div>
                                        <div class="like-story" id="<?php echo $media_identity; ?>" onclick="like_dislike(this)"><i class="fa fa-thumbs-o-up "></i> likes <span><?php echo $count_likes; ?></span></div>
                                        <div class="comment-user" data-toggle="collapse" data-target="#comment-<?php echo $media_identity; ?>"><i class="fa fa-comment-o"></i> <span><?php echo $count_comment; ?></span></div>
                                    </div>
                                    <div class="comment-found-area collapse mt-2" id="comment-<?php echo $media_identity; ?>">
                                        <div class="add_comment">
                                            <div><div class="commeter_image_add"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" class="commeter_add" width=""></div></div>
                                            <div class="add_comment_textarea"><textarea name="" id="comment_inputted" cols="30" rows="2" placeholder="add comment.."></textarea></div>
                                            <div class="save_comment"><button id="<?php echo $media_identity; ?>" onclick="save_comment(this)">Save comment</button></div>
                                        </div>
                                        <div class="comment_list_comment">
                                            <?php 
                                               $get_comment = "SELECT * FROM user_religion_post_comment WHERE post_identity='$media_identity'";
                                               $execute_comment = mysqli_query($this->Frequency(), $get_comment);
                                               while($fetch_all_comment = mysqli_fetch_assoc($execute_comment)){ 
                                                    $commenter_identity = $fetch_all_comment['user_identity'];
                                                    $comment = $fetch_all_comment['comment'];
                                                    $comment_identity = $fetch_all_comment['identity'];

                                                    $select_basic_info = "SELECT * FROM intelligent_users WHERE identity='$commenter_identity'";
                                                    $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                                                    $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                                                        $firstcommenter = $fetch_basic_info['firstName'];
                                                        $lastCommenter = $fetch_basic_info['lastName'];
                                                        $email = $fetch_basic_info['email'];

                                                    $count_likes = 0;
                                                    $select_count_like = "SELECT * FROM user_religion_post_comment_like WHERE comment_identity='$comment_identity'";
                                                    $execute_count_comment = mysqli_query($this->Frequency(), $select_count_like);
                                                    while($fetch_count_like = mysqli_fetch_assoc($execute_count_comment)){
                                                        $count_likes = $count_likes + 1;
                                                    }
                                                    
                                                    $select_user_image = "SELECT * FROM user_profile_image WHERE usr_email='$email' AND status_image = '1'";
                                                    $execute_profile = mysqli_query($this->Frequency(), $select_user_image);
                                                    $fetch_user_profile = mysqli_fetch_assoc($execute_profile);
                                                        $profile_image = $fetch_user_profile['profile_image'];
                                                   ?>
                                                    <div class="each-comment">
                                                        <div class="user-image-comment"><div class="img-commenter"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                                                        <div class="comment-found">
                                                            <div class="commenter-name"><?php echo $firstcommenter; ?> <?php echo $lastCommenter; ?></div>
                                                            <div class="comment"><?php echo $comment; ?></div>
                                                            <div class="user-accurate-comment">
                                                                <div class="likecomment" id="<?php echo $comment_identity; ?>" onclick="save_like_comment(this)"><i class="fa fa-heart-o mr-2"></i>likes <span><?php echo $count_likes; ?></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                           <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- end each long story -->
                                <!-- ====================================================================================================================================================== -->

                           <?php } ?>
                    </div>
                    <!-- end long story -->
                    <!-- ====================================================================================================================================== -->
                    <!-- ====================================================================================================================================== -->
    
                </div>
                <!-- end tab list content -->
                <!-- ========================================================================================================================================================= -->
                <!-- ========================================================================================================================================================= -->

            </div>
            <!-- end bottom news -->
            <!-- ========================================================================================================================================================================= -->
            <!-- ========================================================================================================================================================================= -->

     <?php }

        public function save_comment($comment, $commenter, $post_identity){
            $created_on = Date("Y-m-d h:m:s");
            $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$commenter'";
            $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
            $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                $commeter_identity = $fetch_basic_info['identity'];
            $insert_comment = "INSERT INTO user_religion_post_comment VALUE ('','$commeter_identity','$post_identity','$comment','0','$created_on')";
            $execute_comment = mysqli_query($this->Frequency(), $insert_comment);
        }

        public function like_displike($post_identity, $user_email, $table_name){
            $created_on = Date("Y-m-d h:m:s");
            $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$user_email'";
            $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
            $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                $commeter_identity = $fetch_basic_info['identity'];

            $check_like = "SELECT * FROM $table_name WHERE post_identity='$post_identity' AND user_identity='$commeter_identity'";
            $execute_check = mysqli_query($this->Frequency(), $check_like);
            if(mysqli_num_rows($execute_check) > 0 ){
                $select_status_like = "SELECT status_like FROM $table_name WHERE post_identity='$post_identity' AND user_identity='$commeter_identity'";
                $execute_stst_like = mysqli_query($this->Frequency(), $select_status_like);
                $fetch_stst = mysqli_fetch_assoc($execute_stst_like);
                    $getStst = $fetch_stst['status_like'];

                if($getStst == 0){
                    $update_current_like = "UPDATE $table_name SET status_like='1' WHERE post_identity='$post_identity' AND user_identity='$commeter_identity'";
                    $execute_updates = mysqli_query($this->Frequency(), $update_current_like);
                }else{
                    $update_current_like = "UPDATE $table_name SET status_like='0' WHERE post_identity='$post_identity' AND user_identity='$commeter_identity'";
                    $execute_updates = mysqli_query($this->Frequency(), $update_current_like);
                }

            }else{
                $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$user_email'";
                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                    $getIdentity = $fetch_basic_info['identity'];
                    $created_on = date("Y-m-d h:i:s");

                $insert_new_like = "INSERT INTO $table_name VALUE ('','$getIdentity','$post_identity','1','1','$created_on')";
                $execute_saving = mysqli_query($this->Frequency(), $insert_new_like);
            }
        }

        public function save_religion_content($religion_continet, $religion_section,$section_side, $media_posted,$media_type, $post_title, $poste_sub_title, $post_desc, $user_email){
            $created_on = Date("Y-m-d h:m:s");
            $religion_email = $religion_section.'@religion.box';
            $insert_religion_content = "INSERT INTO user_religion_post VALUE ('','$religion_email','$user_email','$media_posted','$media_type','$post_title','$poste_sub_title','$post_desc','$religion_section','$religion_continet','$section_side','0','$created_on')";
            $execute_religion_content = mysqli_query($this->Frequency(), $insert_religion_content);
        }

        public function Topic_news(){
            $select_topic_news = "SELECT * FROM user_common_news WHERE user_email='intelligentBox@gmail.box' ORDER BY executed_date ASC";
            $execute_topic = mysqli_query($this->Frequency(), $select_topic_news);
            while($fetch_topics = mysqli_fetch_assoc($execute_topic)){ 
                $getImage = $fetch_topics['news_media'];
                ?>
                <!-- each story -->
                <!-- ====================================================================================================================================== -->
                <div class="each-today-in-history">
                    <div><div class="story-images"><img src="<?php echo '../Images/world-news-img/'.$getImage; ?>" alt="" width="100%" height="100%"></div> </div>
                    <p class="story-desc-down ml-2">
                        <span class="short-desc"><?php echo $fetch_topics['news_title']; ?></span><br><br>
                        <span class="user-define-story"><?php echo $fetch_topics['news_description']; ?></span>
                    </p>
                </div>
                <!-- end each story -->
                <!-- ============================================================================================================================================= -->
                
          <?php }
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

        public function add_view($post_identity, $user_email){
            $select_user_info = "SELECT * FROM intelligent_users WHERE email='$user_email'";
            $execute_info = mysqli_query($this->Frequency(), $select_user_info);
            $fetch_info = mysqli_fetch_assoc($execute_info);
                $user_identity = $fetch_info['identity'];

            $select_view = "SELECT * FROM post_views WHERE post_identity='$post_identity'";
            $execute_view = mysqli_query($this->Frequency(), $select_view);
            if(mysqli_num_rows($execute_view) > 0){
                $check_sts = "SELECT view FROM post_views WHERE user_identity='$user_identity'";
                $execute_identity = mysqli_query($this->Frequency(), $check_sts);
                $fetch_stst = mysqli_fetch_assoc($execute_identity);
                    $view = $fetch_stst['view'];
                   
                if($view == "1"){
                    $update_view = "UPDATE post_views SET view='1' WHERE post_identity='$post_identity' AND user_identity='$user_identity'";
                    $execute_view_count = mysqli_query($this->Frequency(), $update_view);
                }elseif($view == "0"){
                    $update_view = "UPDATE post_views SET view='0' WHERE post_identity='$post_identity' AND user_identity='$user_identity'";
                    $execute_view_count = mysqli_query($this->Frequency(), $update_view);
                }  
            }else{
                $created_on = Date("Y-m-d h:m:s");
                $insert_new_record = "INSERT INTO post_views VALUE ('','$post_identity','$user_identity','1','$created_on')";
                $execute_record = mysqli_query($this->Frequency(), $insert_new_record);
            }
        }

        public function count_view($post_identity){
            $count_view = "SELECT view FROM post_views WHERE post_identity='$post_identity'";
            $execute_view = mysqli_query($this->Frequency(), $count_view);
            $view = 0;
            while($fetch_view = mysqli_fetch_assoc($execute_view)){
                $view = $view + 1;
            }
            echo $view;
        }

    }

    // INITIALIZE CLASS AND IMPLEMENT
    // ==============================================================================================================================================
    $new_religion_content = new Religion_content();

    // if(request is to display each religion continet content)
    // ==============================================================================================================================================
    if(isset($_POST['continet'])){
       $new_religion_content->each_religinon_continet($_POST['continet'], $_POST['page_religion']);
    }

    // if request is to display topics
    // ==========================================================================================================================================================
    if(isset($_POST['topics_content'])){
        $new_religion_content->topics_content($_POST['topic_area'], $_POST['topics_content']);
    }

    // if request is profile image
    // ==========================================================================================================================================================
    if(isset($_POST['getProfileImage'])){
        $new_religion_content->getProfileImage($_POST['getProfileImage']);
    }

    // if request is to show continet content
    // ===========================================================================================================================================================
    if(isset($_POST['continet_content'])){
        $new_religion_content->continet_content($_POST['continet_content'],$_POST['hiddenPageEmail'], $_POST['user_email']);
    }

    // if request is to save commment
    // ===========================================================================================================================================================
    if(isset($_POST['get_comment'])){
        $new_religion_content->save_comment($_POST['get_comment'], $_POST['usr_email'], $_POST['post_identity']);
    }

    // if request is to save like
    // ===========================================================================================================================================================
    if(isset($_POST['post_id_like'])){
        $new_religion_content->like_displike($_POST['post_id_like'], $_POST['user_email'], $_POST['table_name']);
    }

    // if request is to save news
    // ===================================================================================================================================================================
    if(isset($_POST['submit_news'])){
        $section_continet = "world";
        $section_religion = $_POST['hiddenrelligion_email'];
        $section_side = 'news';
        $content_title = $_POST['story_title'];
        $content_sub_title = 'no sub title';
        $content_desc = $_POST['story_desc'];
        $user_email = $_POST['hiddenmail'];

        $content_image = 'IB_religion_image'.time().'Box'.'--'.$_FILES['choosen_file']['name'];
        $file_size = $_FILES['choosen_file']['size'];
        $location = '../Images/religions/each-religion/news/'.$content_image;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        $valid_extensions = array("jpg","jpeg","png");
    
        // check extension
        if(!in_array(strtolower($imageFileType), $valid_extensions)) {
            echo "extension";
            exit();
        }else{
            if(move_uploaded_file($_FILES['choosen_file']['tmp_name'],$location)){
                if($new_religion_content->save_religion_content($section_continet, $section_religion,$section_side, $content_image,$imageFileType, $content_title, $content_sub_title, $content_desc, $user_email)){
                    echo "content saved";
                }else{
                    echo "contient fail to be created";
                }
            }else{
                echo "File upload fail";
            }
        }
    }

    // if request is to present ideas found
    // ==============================================================================================================================
    if(isset($_POST['getTopics_identity'])){
        $new_religion_content->ideas_present($_POST['getTopics_identity']);
    }

    // if request is to save ideas
    // ===============================================================================================================================
    if(isset($_POST['getTopics_id'])){
       $new_religion_content->save_ideas($_POST['user_email_found'], $_POST['getIdeas'], $_POST['getTopics_id']);
    }

    // if reque sis to display all news with topics
    // ===============================================================================================================================
    if(isset($_POST['getResponseNews'])){
        $new_religion_content->Topic_news();
    } 

    // if request is to count each news
    // =======================================================================================================================================
    if(isset($_POST['getSection'])){
        $new_religion_content->count_News($_POST['getSection']);
    }

    // if request is to add view
    // =========================================================================================================================================
    if(isset($_POST['getUser_post_identity'])){
        $new_religion_content->add_view($_POST['getUser_post_identity'], $_POST['user_email_post']);
    }

    // if request is to fetch views
    // ==========================================================================================================================================
    if(isset($_POST['getViews'])){
        $new_religion_content->count_view($_POST['getViews']);
    }
?>