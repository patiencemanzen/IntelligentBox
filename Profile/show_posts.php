<?php 
    // INITIALIZE DATABASE CONNECTION
    // ==========================================================================================================
    require_once ("../Scyllar.php");
    // ==========================================================================================================

    // INITIALIZE AND IMPLEMENT CLASS SHOW POST
    // ==========================================================================================================
    class Post_Illumination extends Scyllar {
        private $E_mail;

        // make constructer
        // ============================================================================================
        public function __construct($email){
            $this->E_mail = $email;
        }

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
            }if($days < 30){
                return $days." Day(s) ago";
            }if($days < 0){
                return $hours." Hour(s) ago";
            }
        }

        // DISPLAY POST THAT HAVE BEEN POSTED EARLIER
        // =====================================================================================================
        public function show_posts($post_type_in,$videoPath,$photoPath){
            $select_posts = "SELECT * FROM user_common_post WHERE poster_email IN (SELECT reciever_email FROM user_follow_board WHERE host_email = '$this->E_mail') OR poster_email IN (SELECT host_email FROM user_follow_board WHERE reciever_email = '$this->E_mail') OR poster_email = '$this->E_mail' AND post_type='$post_type_in' ORDER BY created_on DESC";
            $execute_posts = mysqli_query($this->Frequency(), $select_posts);
            if(mysqli_num_rows($execute_posts) > 0){
                while($fetch_posts = mysqli_fetch_assoc($execute_posts)){
                    $select_media_posted = $fetch_posts['media_posted'];
                    $select_caption = $fetch_posts['media_caption'];
                    $select_media_type = $fetch_posts['media_type'];
                    $poster_email = $fetch_posts['poster_email'];
                    $post_identity = $fetch_posts['identity'];
                    $type = $fetch_posts['post_type'];

                    // count date
                    // =============================
                    $select_date_posted = $fetch_posts['created_on'];
                    $today_date = date("d/m/Y");
                    $Form_date = $this->count_date($select_date_posted);

                    $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$poster_email'";
                    $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                    $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                        $getFirstname = $fetch_basic_info['firstName'];
                        $getLastname = $fetch_basic_info['lastName'];

                    $select_poster_img = "SELECT profile_image FROM user_profile_image WHERE usr_email='$poster_email' AND status_image='1'";
                    $execute_poster_profile_image = mysqli_query($this->Frequency(),$select_poster_img);
                    $fetch_poster_image = mysqli_fetch_assoc($execute_poster_profile_image);
                        $poster_profile_image = $fetch_poster_image['profile_image'];  
                    
                    $select_my_profile_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$this->E_mail' AND status_image='1'";
                    $execute_my_image = mysqli_query($this->Frequency(), $select_my_profile_image);
                    $fetch_my_image = mysqli_fetch_assoc($execute_my_image);
                        $my_profile_image = $fetch_my_image['profile_image'];  ?>

                        <!-- profile last updated view // each post -->
                        <!-- ========================================================================================================= -->
                        <div class="each-post mt-3">
                            <div class="arrangement-section d-flex" style="width: 100%">
                                <div class="poster-identity">
                                    <a href="public_profile.box.php" >
                                        <div class="poster-img" id="load_profile_post" data-toggle="tooltip" data-placement="bottom" title="<?php echo $getFirstname; ?> <?php echo $getLastname; ?>' profile" >
                                            <img src="<?php echo '../Images/profile-img/profile-image/'.$poster_profile_image; ?>" width="100%" height="100%">
                                        </div>
                                    </a>
                                </div>
                                <div class="full-post ml-2">
                                    <!-- poster name -->
                                    <div class="poster-name"><?php echo $getFirstname; ?> <?php echo $getLastname; ?></div>

                                    <!-- post caption -->
                                    <div class="post-caption"><?php echo $select_caption; ?></div>

                                    <?php if($select_media_posted == ""){?>
                                    <?php }else{?>
                                        <!-- if post is video -->
                                        <?php if($select_media_type == "mp4"){?>
                                            <div class="media mt-2">
                                                <video src="<?php echo $videoPath.$select_media_posted; ?>" alt="" width="100%" height="100%" id="myVideo"></video>
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
                                            </div>
                                        <?php }else{?>
                                            <?php if($type == "profile"){?>
                                                <!-- if post is photo -->
                                                <div class="media mt-2">
                                                    <img src="<?php echo '../Images/profile-img/profile-image/'.$select_media_posted; ?>" width="100%" height="100%">
                                                </div>
                                            <?php }else if($type == "feeds"){?>
                                                <!-- if post is photo -->
                                                <div class="media mt-2">
                                                    <img src="<?php echo '../Images/activity_stream/'.$select_media_posted; ?>" width="100%" height="100%">
                                                </div>
                                            <?php }else{?>
                                                <!-- if post is photo -->
                                                <div class="media mt-2">
                                                    <img src="<?php echo $photoPath.$select_media_posted; ?>" width="100%" height="100%">
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>

                                    <div class="user-accurate-feeling d-flex justify-content-between mt-2">
                                        <!-- time post posted range -->
                                        <div class="duration mr-2"><div class="time-post"><i class="fa fa-globe"></i> <?php echo $Form_date; ?></div></div>
                                        <!-- end time -->

                                        <!-- comment and likes -->
                                        <div class="user-feelings d-flex justify-content-between">
                                            <div class="comments" data-toggle="collapse" data-target="#comment_<?php echo $post_identity; ?>" id="<?php echo $post_identity; ?>"><i class="fa fa-comment-o" id="<?php echo $post_identity; ?>"></i> <span id="pre_accu"> Comments </span> <span id="count-comments_<?php echo $post_identity; ?>">
                                                <script>
                                                    setInterval(()=> {
                                                        $(document).ready(function(){
                                                            var post_idintity = "<?php echo $post_identity; ?>";
                                                            var user_email = document.getElementById("hiddenEmail").value;
                                                            var post_type = "feeds";

                                                            $("#count-comments_<?php echo $post_identity; ?>").load("show_posts.php",{
                                                                post_count_comment: post_idintity,
                                                                user_comments_mail: user_email,
                                                                post_section: post_type
                                                            });
                                                        });
                                                    }, 1000);
                                                </script>
                                            </span></div>
                                            <div class="likes" id="<?php echo $post_identity; ?>" onclick="like_dislike(this)"><i class="fa fa-heart-o" id="<?php echo $post_identity; ?>"></i> <span id="pre_accu"> Likes </span> <span id="count-like_<?php echo $post_identity; ?>">
                                                <script>
                                                    setInterval(()=> {
                                                        $(document).ready(function(){
                                                            var post_idintity = "<?php echo $post_identity; ?>";
                                                            var user_email = document.getElementById("hiddenEmail").value;
                                                            var post_type = "feeds";

                                                            $("#count-like_<?php echo $post_identity; ?>").load("show_posts.php",{
                                                                count_post_like: post_idintity,
                                                                user_mail: user_email,
                                                                getPost_type: post_type
                                                            },function(like_response){
                                                                counter_holder.innerHTML = like_response;
                                                            });
                                                        });
                                                    }, 1000);
                                                </script>
                                            </span></div>
                                        </div>
                                        <!-- end feelings -->
                                    </div>

                                    <!-- comment found on this post-->
                                    <!-- =================================================================== -->
                                    <div class="comment-found collapse mt-1" id="comment_<?php echo $post_identity; ?>">
                                        <div class="list-comments mt-2">
                                            <div class="timeline-comment" id="getComment_<?php echo $post_identity; ?>">
                                                <script>
                                                    var post_identity = "<?php echo $post_identity; ?>";
                                                    var user_email = document.getElementById("hiddenEmail").value;
                                                    var comment_post_type = "feeds";
                                                    $("#getComment_<?php echo $post_identity; ?>").load("show_posts.php",{
                                                        post_display_comments: post_identity,
                                                        getMail: user_email,
                                                        getPost_type: comment_post_type
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end found comments -->
                                    <!-- =================================================================== -->

                                    <!-- add comment to post -->
                                    <!-- =================================================================== -->
                                    <div class="add-comment mt-2 d-flex">
                                        <div><div class="commenter-image" id="commenter-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$my_profile_image; ?>" alt="" width="100%" height="100%"></div>  </div>
                                        <div class="text-input ml-2 mr-2" id="text-input-holder">
                                            <textarea name="" id="comments_public" cols="30" rows="1" placeholder="Write a comments..." width="100%" height="100%"></textarea>
                                        </div>
                                        <div class="mt-1 mr-1"><button class="post" id="<?php echo $post_identity; ?>" onclick="add_comment(this)">Post</button></div>
                                    </div>
                                    <div id="hold-error-occur"></div>
                                    <!-- end comment addition -->
                                    <!-- ======================================================================== -->

                                </div>
                            </div>
                        </div>
                        <!-- end each profile -->
                        <!-- ======================================================================================== -->

                <?php }
            }else{ ?>
                <div class="no-data-found d-flex flex-column text-center">
                    <img src="../Images/Illustrator_img/post_online_dkuk.png" alt="" width="100%" height="100%">
                    <span>Create more posts,update profile image and shared what you are thinking </span>
                </div>
            <?php }
        }


        // ADD COMMENT TO POST
        // ========================================================================================================================================
        public function add_comment($comment,$post_idea){
            $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$this->E_mail'";
            $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
            $fetch_identity = mysqli_fetch_assoc($execute_basic_info);
                $get_firstname = $fetch_identity['firstName'];
                $get_lastname = $fetch_identity['lastName'];
                $getIdentity = $fetch_identity['identity'];
                $created_on = date("Y-m-d h:i:s");

            $select_post_type = "SELECT * FROM user_common_post WHERE identity='$post_idea'";
            $execute_post_type = mysqli_query($this->Frequency(), $select_post_type);
            $fetch_post_type = mysqli_fetch_assoc($execute_post_type);
                $getPost_type = $fetch_post_type['post_type'];
                $poster_email = $fetch_post_type['poster_email'];

            $insert_comment = "INSERT INTO user_common_post_comments VALUE ('','$getIdentity','$this->E_mail','$post_idea','$getPost_type','$comment','$created_on')";
            $execute_comment = mysqli_query($this->Frequency(), $insert_comment);

            $select_noti_setting = "SELECT * FROM notification_settings WHERE email='$poster_email'";
            $execute_noti_setting = mysqli_query($this->Frequency(), $select_noti_setting);
            $fetch_noti_setting = mysqli_fetch_assoc($execute_noti_setting);
                $like_comment = $fetch_noti_setting['like_comment'];
            
            if($like_comment == "Off"){

            }else{
                $notification = $get_firstname.' '.$get_lastname.' comment on your post';
                $create_on = Date("Y-m-d h:m:s");
                $insert_noti_setting = "INSERT INTO notifications VALUE ('','$this->E_mail','$poster_email','$notification','comment','0','new','on','$create_on')";
                $execute_new_noti = mysqli_query($this->Frequency, $insert_noti_setting);
            }    
        }

        // METHOD DISPLAY ALL POST COMMENT
        // ========================================================================================================================
        public function show_comments($email, $post_id,$getPost_type){
            $select_comments = "SELECT * FROM user_common_post_comments WHERE email='$email' AND post_identity='$post_id' AND post_type='$getPost_type'";
            $execute_comments = mysqli_query($this->Frequency(), $select_comments);
            while($fetch_comment = mysqli_fetch_assoc($execute_comments)){
                $getEmail = $fetch_comment['email'];
                $getComment = $fetch_comment['comment'];
                $getComment_identity = $fetch_comment['identity'];

                $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$getEmail'";
                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                $getFirstname = $fetch_basic_info['firstName'];
                $getLastname = $fetch_basic_info['lastName'];

                $select_poster_img = "SELECT profile_image FROM user_profile_image WHERE usr_email='$getEmail' AND status_image='1'";
                $execute_profile_image = mysqli_query($this->Frequency(),$select_poster_img);
                $fetch_image = mysqli_fetch_assoc($execute_profile_image);
                $profile_image = $fetch_image['profile_image']; ?>
                    <div class="container right-comment">
                        <div class="content d-flex">
                            <div class="answerer-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div>
                            <div class="answerer-detail ml-2 mt-1">
                                <div class="answerer-name"><?php echo $getFirstname; ?> <?php echo $getLastname; ?></div>
                                <div class="answer"><?php echo $getComment; ?></div>
                                <div class="accurancy d-flex justify-content-between">
                                    <div class="question-comment" id="<?php echo $getComment_identity; ?>" data-target="#comment-found-<?php echo $getComment_identity; ?>" data-toggle="collapse" onclick="comment_reply_display(this)">
                                        <i class="fa fa-comment-o" id="<?php echo $getComment_identity; ?>" eover="count_comment_replied(this)"></i> Comments
                                        <span id="count_comment_comment_<?php echo $getComment_identity; ?>">
                                            <script>
                                                setInterval(()=> {
                                                    var comment_id = "<?php echo $getComment_identity; ?>";
                                                    var user_email = document.getElementById("hiddenEmail").value;

                                                    $(document).ready(function(){
                                                        $("#count_comment_comment_<?php echo $getComment_identity; ?>").load("show_posts.php",{
                                                            getComment_id: comment_id,
                                                            getEmail_comment_count_replied: user_email
                                                        });
                                                    });
                                                }, 1000);
                                            </script>
                                        </span>
                                    </div>
                                    <div class="question-likes" id="<?php echo $getComment_identity; ?>" onclick="like_dislike_comment(this)"><i class="fa fa-heart-o" id="<?php echo $getComment_identity; ?>"></i> Likes <span id="count_comment_found_<?php echo $getComment_identity; ?>">
                                        <script>
                                            setInterval(()=> {
                                                var comment_idintity = "<?php echo $getComment_identity; ?>";
                                                var user_email = document.getElementById("hiddenEmail").value;

                                                $("#count_comment_found_<?php echo $getComment_identity; ?>").load("show_posts.php",{
                                                    getComment_count_like_identity: comment_idintity,
                                                    getUser_email: user_email
                                                });
                                            }, 1000);
                                        </script>
                                    </span></div>
                                    <!-- <div class="question-answer"><i class="fa fa-reply"></i></div> -->
                                </div>

                                <!-- comment of comment -->
                                <!-- ======================================================= -->
                                <div class="commenting-section collapse" id="comment-found-<?php echo $getComment_identity; ?>">
                                    <div class="comment-add-comment">
                                        <div><div class="commeter-image-down"><img src="../Images/profile-img/profile-image/profile-image-1.webp" alt="" width="100%" height="100%"></div></div>
                                        <div class="textarea-add-comment"><textarea name="" id="" cols="30" rows="1" placeholder="Write comment..."></textarea></div>
                                        <div class="post-comment-written"><button id="<?php echo $getComment_identity; ?>" onclick="comment_reply(this)">Post</button></div>
                                    </div>
                                    <div class="comment-found-comment">

                                    </div>
                                </div>
                                <!-- end comment of comment -->
                                <!-- =========================================================================================== -->

                            </div>
                        </div> 
                    </div>
            <?php }
        }


        // DISPLAY COMMENT OF THE COMMENT
        // ===================================================================================================================================================
        function Save_comment_reply($comment_id, $commentFound){
            $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$this->E_mail'";
            $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
            $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                $getFirstname = $fetch_basic_info['firstName'];
                $getLastname = $fetch_basic_info['lastName'];
                $getIdentity = $fetch_basic_info['identity'];
                $created_on = date("Y-m-d h:i:s");

            $insert_comment = "INSERT INTO user_common_comment_reply VALUE ('','$getIdentity','$this->E_mail','$comment_id','$commentFound','$created_on')";
            $execute_comment_reply = mysqli_query($this->Frequency(), $insert_comment);

            $select_poster = "SELECT * FROM user_common_comment_reply WHERE identity='$comment_id'";
            $execute_poster = mysqli_query($this->Frequency(), $select_poster);
            $fetch_poster = mysqli_fetch_assoc($execute_poster);
                $poster_email = $fetch_poster['email'];

            $select_noti_setting = "SELECT * FROM notification_settings WHERE email='$poster_email'";
            $execute_noti_setting = mysqli_query($this->Frequency(), $select_noti_setting);
            $fetch_noti_setting = mysqli_fetch_assoc($execute_noti_setting);
                $like_comment = $fetch_noti_setting['like_comment'];

            if($like_comment == "Off"){

            }else{
                $notification = $getFirstname.' '.$getLastname.' reply to your comments';
                $create_on = Date("Y-m-d h:m:s");
                $insert_noti_setting = "INSERT INTO notifications VALUE ('','$this->E_mail','$poster_email','$notification','comment','0','new','on','$create_on')";
                $execute_new_noti = mysqli_query($this->Frequency, $insert_noti_setting);
            } 

            if($execute_comment_reply){
                return true;
            }else{
                return false;
            }
        }

        // DISPLAY COMMENT REPLY FOUND
        // ====================================================================================================================================
        function Comment_reply_found($comment_id){
            $select_comment_reply = "SELECT * FROM user_common_comment_reply WHERE comment_identity='$comment_id'";
            $execute_comment_reply = mysqli_query($this->Frequency(), $select_comment_reply);
            while($fetch_comment_reply = mysqli_fetch_assoc($execute_comment_reply)){
                    $getEmail = $fetch_comment_reply['email'];
                    $getComment_replied = $fetch_comment_reply['reply'];
                    $getStartdate = $fetch_comment_reply['created_on'];

                $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$getEmail'";
                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                    $getFirstname = $fetch_basic_info['firstName'];
                    $getLastname = $fetch_basic_info['lastName'];

                $select_poster_img = "SELECT profile_image FROM user_profile_image WHERE usr_email='$getEmail' AND status_image='1'";
                $execute_profile_image = mysqli_query($this->Frequency(),$select_poster_img);
                $fetch_image = mysqli_fetch_assoc($execute_profile_image);
                    $profile_image = $fetch_image['profile_image'];  ?>
                        <div class="each-comment-found">
                            <div><div class="commenter-image-found"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                            <div>
                                <div class="real-comment-found"><?php echo $getComment_replied; ?></div>
                                <div class="time-commented"><?php echo $this->count_date($getStartdate); ?></div>
                            </div>
                        </div>
           <?php  }
                
        }

        // COUNT COMMENT COMMENT REPLIED 
        // =====================================================================================================================================
        public function count_comment_replied($comment_id){
            $comments = 0;
            $selectComments = "SELECT * FROM user_common_comment_reply WHERE comment_identity='$comment_id'";
            $execute_comment = mysqli_query($this->Frequency(),$selectComments);
            while($fetchFollowing = mysqli_fetch_assoc($execute_comment)){
                $comments = $comments + 1;
            } 
            return $comments;
        }


        // LIKE AND DISLIKE ON COMMENT 
        // =========================================================================================================================================
        public function like_dislike_comment($comment_id){
            $check_like = "SELECT * FROM user_common_comment_like WHERE comment_identity='$comment_id' AND email='$this->E_mail'";
            $execute_check = mysqli_query($this->Frequency(), $check_like);
            if(mysqli_num_rows($execute_check) > 0 ){
                $select_status_like = "SELECT status_like FROM user_common_comment_like WHERE email='$this->E_mail' AND comment_identity='$comment_id'";
                $execute_stst_like = mysqli_query($this->Frequency(), $select_status_like);
                $fetch_stst = mysqli_fetch_assoc($execute_stst_like);
                $getStst = $fetch_stst['status_like'];

                if($getStst == 0){
                    $update_current_like = "UPDATE user_common_comment_like SET status_like='1' WHERE email='$this->E_mail' AND comment_identity='$comment_id'";
                    $execute_updates = mysqli_query($this->Frequency(), $update_current_like);
                }else{
                    $update_current_like = "UPDATE user_common_comment_like SET status_like='0' WHERE email='$this->E_mail' AND comment_identity='$comment_id'";
                    $execute_updates = mysqli_query($this->Frequency(), $update_current_like);
                }

            }else{
                $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$this->E_mail'";
                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                    $get_firstname = $fetch_basic_info['firstName'];
                    $get_lastname = $fetch_basic_info['lastName'];
                    $getIdentity = $fetch_basic_info['identity'];
                    $created_on = date("Y-m-d h:i:s");

                $insert_new_like = "INSERT INTO user_common_comment_like VALUE ('','$getIdentity','$this->E_mail','$comment_id','1','$created_on')";
                $execute_saving = mysqli_query($this->Frequency(), $insert_new_like);

                $select_poster = "SELECT * FROM user_common_post_comments WHERE identity='$comment_id'";
                $execute_poster = mysqli_query($this->Frequency(), $select_poster);
                $fetch_poster = mysqli_fetch_assoc($execute_poster);
                    $poster_email = $fetch_poster['email'];

                $select_noti_setting = "SELECT * FROM notification_settings WHERE email='$poster_email'";
                $execute_noti_setting = mysqli_query($this->Frequency(), $select_noti_setting);
                $fetch_noti_setting = mysqli_fetch_assoc($execute_noti_setting);
                    $like_comment = $fetch_noti_setting['like_comment'];

                if($like_comment == "Off"){

                }else{
                    $notification = $get_firstname.' '.$get_lastname.' likes your comment';
                    $create_on = Date("Y-m-d h:m:s");
                    $insert_noti_setting = "INSERT INTO notifications VALUE ('','$this->E_mail','$poster_email','$notification','comment','0','new','on','$create_on')";
                    $execute_new_noti = mysqli_query($this->Frequency, $insert_noti_setting);
                } 
                if($execute_saving){
                    return true;
                }else{
                    return false;
                }
            }
        }

        // COUNT LIKE AND DISPLAY ON COMMENT 
        // ===============================================================================================================================================
        public function count_comment_likes($comment_identity){
            $likes = 0;
            $selectLikes = "SELECT * FROM user_common_comment_like WHERE comment_identity='$comment_identity' AND status_like='1'";
            $execute_Likes = mysqli_query($this->Frequency(),$selectLikes);
            while($fetchFollowing = mysqli_fetch_assoc($execute_Likes)){
                $likes = $likes + 1;
            }
            echo $likes;
        }


        // COUNT COMMENT FOUND ON POST
        // ========================================================================================================
        public function countComment($post_id, $post_type){
            $comments = 0;
            $selectComments = "SELECT * FROM user_common_post_comments WHERE post_identity='$post_id' AND post_type='$post_type'";
            $execute_comment = mysqli_query($this->Frequency(),$selectComments);
            while($fetchFollowing = mysqli_fetch_assoc($execute_comment)){
                $comments = $comments + 1;
            } 
            echo $comments;
        }


        // ADD LIKE ON POST
        // ===========================================================================================================
        public function like_dislike_post($post_id){
            $check_like = "SELECT * FROM user_common_post_likes WHERE post_identity='$post_id' AND email='$this->E_mail'";
            $execute_check = mysqli_query($this->Frequency(), $check_like);
            if(mysqli_num_rows($execute_check) > 0 ){
                $select_status_like = "SELECT status_like FROM user_common_post_likes WHERE email='$this->E_mail' AND post_identity='$post_id'";
                $execute_stst_like = mysqli_query($this->Frequency(), $select_status_like);
                $fetch_stst = mysqli_fetch_assoc($execute_stst_like);
                $getStst = $fetch_stst['status_like'];

                if($getStst == 0){
                    $update_current_like = "UPDATE user_common_post_likes SET status_like='1' WHERE email='$this->E_mail' AND post_identity='$post_id'";
                    $execute_updates = mysqli_query($this->Frequency(), $update_current_like);
                }else{
                    $update_current_like = "UPDATE user_common_post_likes SET status_like='0' WHERE email='$this->E_mail' AND post_identity='$post_id'";
                    $execute_updates = mysqli_query($this->Frequency(), $update_current_like);
                }

            }else{
                $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$this->E_mail'";
                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                    $get_firstname = $fetch_basic_info['firstName'];
                    $get_lastname = $fetch_basic_info['lastName'];
                    $getIdentity = $fetch_basic_info['identity'];
                    $created_on = date("Y-m-d h:i:s");

                $insert_new_like = "INSERT INTO user_common_post_likes VALUE ('','$getIdentity','$this->E_mail','$post_id','1','$created_on')";
                $execute_saving = mysqli_query($this->Frequency(), $insert_new_like);

                $select_poster = "SELECT * FROM user_common_post WHERE identity='$post_id'";
                $execute_poster = mysqli_query($this->Frequency(), $select_poster);
                $fetch_poster = mysqli_fetch_assoc($execute_poster);
                    $poster_email = $fetch_poster['poster_email'];

                $select_noti_setting = "SELECT * FROM notification_settings WHERE email='$poster_email'";
                $execute_noti_setting = mysqli_query($this->Frequency(), $select_noti_setting);
                $fetch_noti_setting = mysqli_fetch_assoc($execute_noti_setting);
                    $like_comment = $fetch_noti_setting['like_comment'];

                if($like_comment == "Off"){

                }else{
                    $notification = $get_firstname.' '.$get_lastname.' likes your post';
                    $create_on = Date("Y-m-d h:m:s");
                    $insert_noti_setting = "INSERT INTO notifications VALUE ('','$this->E_mail','$poster_email','$notification','like','0','new','on','$create_on')";
                    $execute_new_noti = mysqli_query($this->Frequency, $insert_noti_setting);
                }   

                if($execute_saving){
                    return true;
                }else{
                    return false;
                }
            }
        }

        public function count_like($post_identity,$post_type){
            $likes = 0;
            $selectLikes = "SELECT * FROM user_common_post_likes WHERE post_identity='$post_identity' AND status_like='1' AND post_type='$post_type'";
            $execute_Likes = mysqli_query($this->Frequency(),$selectLikes);
            while($fetchFollowing = mysqli_fetch_assoc($execute_Likes)){
                $likes = $likes + 1;
            }
            return $likes;
        }
    }

    
    // if request is to show all post
    // ==================================================================================================================================
    // =====================================================================================================================================
    if(isset($_POST['getPost_email'])){
        $newFames = new Post_Illumination($_POST['getPost_email']);
        $newFames->show_posts($_POST['getCommonPost_type'],$_POST['getPostVideoPath'], $_POST['getPostPhotoPath']);
    }

    // if isset add comment request
    // ===================================================================================================================================
    if(isset($_POST['getEmail_comments'])){
        $newFames = new Post_Illumination($_POST['getEmail_comments']);
        $post_identity = $_POST['post_identity'];
        $comment_inputted = $_POST['getComment'];
        $newFames->add_comment($comment_inputted, $post_identity);
    }

    // if request is show comment
    // ==================================================================================================================================
    if(isset($_POST['postid'])){
        $email_inputted = $_POST['User_email'];
        $post_id_comment = $_POST['postid'];
        $getPost_type = $_POST['getPost_type'];
        $newFames = new Post_Illumination($email_inputted);
        exit(json_encode($newFames->show_comments($email_inputted, $post_id_comment,$getPost_type)));
    }

    // if request is to like or dislike post
    // ====================================================================================================================================
    if(isset($_POST['liker_mail'])){
        $user_mail = $_POST['liker_mail'];
        $post_identity_like = $_POST['post_identity_like'];
        $newIllu = new Post_Illumination($user_mail);
        $newIllu->like_dislike_post($post_identity_like);
    }

    // if request is to count post likes
    // ====================================================================================================================================
    if(isset($_POST['count_post_like'])){
        $newCount = new Post_Illumination($_POST['user_mail']);
        $total_like_response = $newCount->count_like($_POST['count_post_like'], $_POST['getPost_type']);
        exit(json_encode($total_like_response));
    }

    // if request is to count comment found on specific post
    // =====================================================================================================================================
    if(isset($_POST['post_count_comment'])){
        $newCount = new Post_Illumination($_POST['user_comments_mail']);
        $total_comment_response = $newCount->countComment($_POST['post_count_comment'],$_POST['post_section']);
    }

    // if request is to display all comments 
    // =====================================================================================================================================
    if(isset($_POST['post_display_comments'])){
        $newCount = new Post_Illumination($_POST['getMail']);
        $display_comments_response = $newCount->show_comments($_POST['getMail'], $_POST['post_display_comments'], $_POST['getPost_type']);
    }

    // if request is to save comment reply
    // ======================================================================================================================================
    if(isset($_POST['getCommneter_email'])){
        $newReply = new Post_Illumination($_POST['getCommneter_email']);
        $newReply->Save_comment_reply($_POST['getComment_id'], $_POST['getComment']);
    }

    // if request is to handle and display all comment replied
    // ========================================================================================================================================
    if(isset($_POST['comment_comment_type'])){
        $newReplied = new Post_Illumination($_POST['getEmail_repliedcomment']);
        $newReplied->Comment_reply_found($_POST['Getcomment_id']);
    }

    // if request is to count replied on comment
    // ========================================================================================================================================
    if(isset($_POST['getComment_id'])){
        $newCountReplied = new Post_Illumination($_POST['getEmail_comment_count_replied']);
        exit(json_encode($newCountReplied->count_comment_replied($_POST['getComment_id'])));
    }

    // if request is to like or dislike comment
    // ===========================================================================================================================================
    if(isset($_POST['getEmail_like_user'])){
        $newlikeDislike_comment = new Post_Illumination($_POST['getEmail_like_user']);
        $newlikeDislike_comment->like_dislike_comment($_POST['getComment_Id']);
    }

    // if request is to count likes found on comments
    // ==========================================================================================================================================
    if(isset($_POST['getComment_count_like_identity'])){
        $newCount_comment = new Post_Illumination($_POST['getUser_email']);
        $newCount_comment->count_comment_likes($_POST['getComment_count_like_identity']);
    }


    // IF REQUEST IS TO DISPLAY PROFILE IMAGE THAT HAVE BEEN UPLOADED BEFORE
    // ======================================================================================
    if(isset($_POST['getProfile_post_email'])){
        $newFames = new Post_Illumination($_POST['getProfile_post_email']);
        $newFames->show_posts($_POST['getPost_profile_type'],$_POST['getVideoPath'],$_POST['getPath']);
    }
?>
