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

        // DISPLAY POST THAT AVE BEEN POSTED EARLIER
        // =====================================================================================================
        public function show_posts($challenge_url){
            $select_posts = "SELECT * FROM user_challenge_posts WHERE challenge_url='$challenge_url' ORDER BY created_on DESC";
            $execute_posts = mysqli_query($this->Frequency(), $select_posts);
            if(mysqli_num_rows($execute_posts) > 0){
                while($fetch_posts = mysqli_fetch_assoc($execute_posts)){
                    $select_media_posted = $fetch_posts['media'];
                    $select_caption = $fetch_posts['caption'];
                    $select_media_type = $fetch_posts['media_type'];
                    $poster_identity = $fetch_posts['user_identity'];
                    $post_identity = $fetch_posts['identity'];

                    // count date
                    // =============================
                    $select_date_posted = $fetch_posts['created_on'];
                    $today_date = date("Y-m-d h:m:s");
                    $Form_date = $this->count_date($select_date_posted);

                    $select_basic_info = "SELECT * FROM intelligent_users WHERE identity='$poster_identity'";
                    $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                    $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                        $poster_email = $fetch_basic_info['email'];
                        $getFirstname = $fetch_basic_info['firstName'];
                        $getLastname = $fetch_basic_info['lastName'];

                    $select_poster_img = "SELECT profile_image FROM user_profile_image WHERE usr_email='$poster_email' AND status_image='1'";
                    $execute_profile_image = mysqli_query($this->Frequency(),$select_poster_img);
                    $fetch_image = mysqli_fetch_assoc($execute_profile_image);
                        $profile_image = $fetch_image['profile_image'];  
                    
                    $select_my_profile_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$this->E_mail' AND status_image='1'";
                    $execute_my_image = mysqli_query($this->Frequency(), $select_my_profile_image);
                    $fetch_my_image = mysqli_fetch_assoc($execute_my_image);
                        $my_profile_image = $fetch_my_image['profile_image'];  ?>

                        <!-- profile last updated view // each post -->
                        <!-- ========================================================================================================= -->
                        <div class="each-post mt-3">
                            <div class="arrangement-section d-flex">
                                <div class="poster-identity"><a href="public_profile.box.php" ><div class="poster-img" id="load_profile_post" data-toggle="tooltip" data-placement="bottom" title="<?php echo $getFirstname; ?> <?php echo $getLastname; ?>' profile" ><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" width="100%" height="100%"></div></a></div>
                                <div class="full-post ml-2">
                                    <!-- poster name -->
                                    <div class="poster-name"><?php echo $getFirstname; ?> <?php echo $getLastname; ?></div>

                                    <!-- post caption -->
                                    <div class="post-caption"><?php echo $select_caption; ?></div>
                                    <?php if($select_media_posted == ""){?>
                                    <?php }else{ ?>
                                        <!-- if post is video -->
                                        <?php if($select_media_type == "mp4"){?>
                                            <div class="media mt-2">
                                                <div class="type-media">
                                                    <video src="<?php echo '../Images/group-challenge/'.$select_media_posted; ?>" alt="" width="100%" height="100%" id="myVideo"></video>
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
                                            </div>
                                        <?php }else{?>
                                            <!-- if post is photo -->
                                            <div class="media mt-2">
                                                <div class="type-media"><img src="<?php echo '../Images/group-challenge/'.$select_media_posted; ?>" width="100%" height="100%"></div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                    <div class="user-accurate-feeling d-flex justify-content-between mt-2">
                                        <!-- time post posted range -->
                                        <div class="time-pos"><i class="fa fa-globe"></i> <?php echo $Form_date; ?></div>
                                        <!-- end time -->

                                        <!-- comment and likes -->
                                        <div class="user-feelings d-flex justify-content-between">
                                            <div class="comments mr-2" data-toggle="collapse" data-target="#comment_inputted_found_<?php echo $post_identity; ?>"><i class="fa fa-comment-o"></i> <span class="accur">Comments</span> 
                                                <span id="count_comment_found_<?php echo $post_identity; ?>">
                                                    <script>
                                                        setInterval(()=> {
                                                            $(document).ready(function(){
                                                                var post_idintity = "<?php echo $post_identity; ?>";
                                                                var user_email = document.getElementById("hiddenEmail").value;

                                                                $("#count_comment_found_<?php echo $post_identity; ?>").load("show_challenge_posts.php",{
                                                                    post_count_comment: post_idintity,
                                                                    user_comments_mail: user_email
                                                                });
                                                            });
                                                        }, 1000);
                                                    </script>
                                                </span>
                                            </div>
                                            <div class="likes" id="<?php echo $post_identity; ?>" onclick="like_dislike(this)"><i class="fa fa-heart-o" id="<?php echo $post_identity; ?>"></i> <span class="accur">Likes</span> <span id="count-like_<?php echo $post_identity; ?>">
                                                <script>
                                                    setInterval(()=> {
                                                        $(document).ready(function(){
                                                            var post_idintity = "<?php echo $post_identity; ?>";
                                                            var user_email = document.getElementById("hiddenEmail").value;

                                                            $("#count-like_<?php echo $post_identity; ?>").load("show_challenge_posts.php",{
                                                                count_post_like: post_idintity,
                                                                user_mail: user_email
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
                                    <div class="comment-found mt-1 collapse" id="comment_inputted_found_<?php echo $post_identity; ?>">
                                        <div class="list-comments mt-2">
                                            <div class="timeline-comment pt-2" id="getComment_<?php echo $post_identity; ?>">
                                                <script>
                                                    var post_identity = "<?php echo $post_identity; ?>";
                                                    var user_email = document.getElementById("hiddenEmail").value;
                                                    var comment_post_type = "feeds";

                                                    $("#getComment_<?php echo $post_identity; ?>").load("show_challenge_posts.php",{
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
                                    <div class="add-comment mt-2 d-flex"><div class="commenting mt-1">
                                            <div class="commenter-image" id="commenter-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$my_profile_image; ?>" alt="" width="100%" height="100%"></div>
                                        </div>
                                        <div class="textarea-section mt-1"><div class="text-input" id="text-input-holder">
                                            <textarea name="" id="comments_public" cols="30" rows="1" placeholder="Write a comments..." width="100%" height="100%"></textarea>
                                        </div></div>
                                        <div class="mt-1"><button class="post" id="<?php echo $post_identity; ?>" onclick="add_comment(this)">Post</button></div>
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
                <div class="no_info_found">
                   <div><i class="fa fa-camera-retro"></i></div>
                   <div>Be the first to open up this challenge</div>
                </div>
            <?php }
        }


        // ADD COMMENT TO POST
        // ========================================================================================================================================
        public function add_comment($comment,$post_idea){
            $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$this->E_mail'";
            $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
            $fetch_identity = mysqli_fetch_assoc($execute_basic_info);
                $getIdentity = $fetch_identity['identity'];
                $created_on = date("Y-m-d h:i:s");


            $insert_comment = "INSERT INTO user_challenge_comment VALUE ('','$getIdentity','$this->E_mail','$post_idea','$comment','0','$created_on')";
            $execute_comment = mysqli_query($this->Frequency(), $insert_comment);
        }

        // METHOD DISPLAY ALL POST COMMENT
        // ========================================================================================================================
        public function show_comments($post_id, $user_mail){
            $select_comments = "SELECT * FROM user_challenge_comment WHERE post_identity='$post_id'";
            $execute_comments = mysqli_query($this->Frequency(), $select_comments);
            while($fetch_comment = mysqli_fetch_assoc($execute_comments)){
                $getEmail = $fetch_comment['user_email'];
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
                $profile_image = $fetch_image['profile_image']; 
                
                $select_mine = "SELECT profile_image FROM user_profile_image WHERE usr_email='$user_mail' AND status_image='1'";
                $execute_my_image = mysqli_query($this->Frequency(),$select_mine);
                $fetch_my_image = mysqli_fetch_assoc($execute_my_image);
                    $profile_my_image = $fetch_my_image['profile_image'];
                ?>

                    <div class="container right-comment mt-2 mb-2">
                        <div class="content d-flex">
                            <div><div class="answerer-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="answerer-detail ml-2 mt-1">
                                <div class="answerer-name"><?php echo $getFirstname; ?> <?php echo $getLastname; ?></div>
                                <div class="answer"><?php echo $getComment; ?></div>
                                <div class="accurancy d-flex justify-content-between">
                                    <div class="question-comment" id="<?php echo $getComment_identity; ?>" data-target="#comment-found-display_<?php echo $getComment_identity; ?>" data-toggle="collapse">
                                        <i class="fa fa-comment-o"></i> Comments
                                        <span id="display_comments_comments_<?php echo $getComment_identity; ?>">
                                            <script>
                                                setInterval(()=> {
                                                    var comment_id = "<?php echo $getComment_identity; ?>";
                                                    var user_email = document.getElementById("hiddenEmail").value;

                                                    $(document).ready(function(){
                                                        $("#display_comments_comments_<?php echo $getComment_identity; ?>").load("show_challenge_posts.php",{
                                                            getComment_id: comment_id,
                                                            getEmail_comment_count_replied: user_email
                                                        });
                                                    });
                                                }, 1000);
                                            </script>
                                        </span>
                                    </div>
                                    <div class="question-likes" id="<?php echo $getComment_identity; ?>" onclick="like_dislike_comment(this)"><i class="fa fa-heart-o" id="<?php echo $getComment_identity; ?>"></i> Likes 
                                        <span id="count_comment_likes_<?php echo $getComment_identity; ?>">
                                            <script>
                                                setInterval(()=> {
                                                    $(document).ready(function(){
                                                        var comment_idintity = "<?php echo $getComment_identity; ?>";
                                                        var user_email = document.getElementById("hiddenEmail").value;

                                                        $("#count_comment_likes_<?php echo $getComment_identity; ?>").load("show_challenge_posts.php",{
                                                            getComment_count_like_identity: comment_idintity,
                                                            getUser_email: user_email
                                                        });
                                                    });
                                                }, 1000);
                                            </script>
                                        </span>
                                    </div>
                                </div>

                                <!-- comment of comment -->
                                <!-- ======================================================= -->
                                <div class="commenting-section collapse" id="comment-found-display_<?php echo $getComment_identity; ?>">
                                    <div class="comment-add-comment">
                                        <div><div class="commeter-image-down"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_my_image; ?>" alt="" width="100%" height="100%"></div></div>
                                        <div class="textarea-add-comment"><textarea name="" id="" cols="30" rows="1" placeholder="Write comment..."></textarea></div>
                                        <div class="post-comment-written"><button id="<?php echo $getComment_identity; ?>" onclick="comment_reply(this)">Post</button></div>
                                    </div>
                                    <div class="comment-found-comment" id="display_reply_commente_<?php echo $getComment_identity; ?>">
                                        <script>
                                            setInterval(()=> {
                                                $(document).ready(function(){
                                                    var Comment_identity = "<?php echo $getComment_identity; ?>";
                                                    var user_email = document.getElementById("hiddenEmail").value;
                                                    var comment_post_type = "feeds";

                                                    $("#display_reply_commente_<?php echo $getComment_identity; ?>").load("show_challenge_posts.php",{
                                                        Getcomment_id: Comment_identity,
                                                        getEmail_repliedcomment: user_email,
                                                        comment_comment_type: comment_post_type
                                                    });
                                                });
                                            }, 1000);
                                        </script>
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
                $getIdentity = $fetch_basic_info['identity'];
                $created_on = date("Y-m-d h:i:s");

            $insert_comment = "INSERT INTO user_challenge_comment_reply VALUE ('','$getIdentity','$comment_id','$commentFound','$created_on')";
            $execute_comment_reply = mysqli_query($this->Frequency(), $insert_comment);
        }

        // DISPLAY COMMENT REPLY FOUND
        // ====================================================================================================================================
        function Comment_reply_found($comment_id){
            $select_comment_reply = "SELECT * FROM user_challenge_comment_reply WHERE comment_identity='$comment_id'";
            $execute_comment_reply = mysqli_query($this->Frequency(), $select_comment_reply);
            while($fetch_comment_reply = mysqli_fetch_assoc($execute_comment_reply)){
                    $get_user_identity = $fetch_comment_reply['user_identity'];
                    $getComment_replied = $fetch_comment_reply['reply'];
                    $getStartdate = $fetch_comment_reply['date_created'];

                $select_basic_info = "SELECT * FROM intelligent_users WHERE identity='$get_user_identity'";
                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                    $getEmail = $fetch_basic_info['email'];

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
            $selectComments = "SELECT * FROM user_challenge_comment_reply WHERE comment_identity='$comment_id'";
            $execute_comment = mysqli_query($this->Frequency(),$selectComments);
            while($fetchFollowing = mysqli_fetch_assoc($execute_comment)){
                $comments = $comments + 1;
            } 
            return $comments;
        }


        // LIKE AND DISLIKE ON COMMENT 
        // =========================================================================================================================================
        public function like_dislike_comment($comment_id){
            $check_like = "SELECT * FROM user_challenge_comment_like WHERE comment_identity='$comment_id' AND user_email='$this->E_mail'";
            $execute_check = mysqli_query($this->Frequency(), $check_like);
            if(mysqli_num_rows($execute_check) > 0 ){
                $select_status_like = "SELECT status_like FROM user_challenge_comment_like WHERE user_email='$this->E_mail' AND comment_identity='$comment_id'";
                $execute_stst_like = mysqli_query($this->Frequency(), $select_status_like);
                $fetch_stst = mysqli_fetch_assoc($execute_stst_like);
                $getStst = $fetch_stst['status_like'];

                if($getStst == 0){
                    $update_current_like = "UPDATE user_challenge_comment_like SET status_like='1' WHERE user_email='$this->E_mail' AND comment_identity='$comment_id'";
                    $execute_updates = mysqli_query($this->Frequency(), $update_current_like);
                }else{
                    $update_current_like = "UPDATE user_challenge_comment_like SET status_like='0' WHERE user_email='$this->E_mail' AND comment_identity='$comment_id'";
                    $execute_updates = mysqli_query($this->Frequency(), $update_current_like);
                }

            }else{
                $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$this->E_mail'";
                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                    $getIdentity = $fetch_basic_info['identity'];
                    $created_on = date("Y-m-d h:i:s");

                $insert_new_like = "INSERT INTO user_challenge_comment_like VALUE ('','$getIdentity','$this->E_mail','$comment_id','1','1','$created_on')";
                $execute_saving = mysqli_query($this->Frequency(), $insert_new_like);
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
            $selectLikes = "SELECT * FROM user_challenge_comment_like WHERE comment_identity='$comment_identity' AND status_like='1'";
            $execute_Likes = mysqli_query($this->Frequency(),$selectLikes);
            while($fetchFollowing = mysqli_fetch_assoc($execute_Likes)){
                $likes = $likes + 1;
            }
            echo $likes;
        }


        // COUNT COMMENT FOUND ON POST
        // ========================================================================================================
        public function countComment($post_id){
            $comments = 0;
            $selectComments = "SELECT * FROM user_challenge_comment WHERE post_identity='$post_id'";
            $execute_comment = mysqli_query($this->Frequency(),$selectComments);
            while($fetchFollowing = mysqli_fetch_assoc($execute_comment)){
                $comments = $comments + 1;
            } 
            return $comments;
        }


        // ADD LIKE ON POST
        // ===========================================================================================================
        public function like_dislike_post($post_id){
            $check_like = "SELECT * FROM user_challenge_like WHERE post_identity='$post_id' AND user_email='$this->E_mail'";
            $execute_check = mysqli_query($this->Frequency(), $check_like);
            if(mysqli_num_rows($execute_check) > 0 ){
                $select_status_like = "SELECT status_like FROM user_challenge_like WHERE user_email='$this->E_mail' AND post_identity='$post_id'";
                $execute_stst_like = mysqli_query($this->Frequency(), $select_status_like);
                $fetch_stst = mysqli_fetch_assoc($execute_stst_like);
                    $getStst = $fetch_stst['status_like'];

                if($getStst == 0){
                    $update_current_like = "UPDATE user_challenge_like SET status_like='1' WHERE user_email='$this->E_mail' AND post_identity='$post_id'";
                    $execute_updates = mysqli_query($this->Frequency(), $update_current_like);
                }else{
                    $update_current_like = "UPDATE user_challenge_like SET status_like='0' WHERE user_email='$this->E_mail' AND post_identity='$post_id'";
                    $execute_updates = mysqli_query($this->Frequency(), $update_current_like);
                }

            }else{
                $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$this->E_mail'";
                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                    $getIdentity = $fetch_basic_info['identity'];
                    $created_on = date("Y-m-d h:i:s");

                $insert_new_like = "INSERT INTO user_challenge_like VALUE ('','$getIdentity','$this->E_mail','$post_id','1','$created_on')";
                $execute_saving = mysqli_query($this->Frequency(), $insert_new_like);
                if($execute_saving){
                    return true;
                }else{
                    return false;
                }
            }
        }

        public function count_like($post_identity){
            $likes = 0;
            $selectLikes = "SELECT * FROM user_challenge_like WHERE post_identity='$post_identity' AND status_like='1'";
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
    if(isset($_POST['getChallenge_url'])){
        $newFames = new Post_Illumination($_POST['getPost_email']);
        $newFames->show_posts($_POST['getChallenge_url']);
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
    if(isset($_POST['post_display_comments'])){
        $email_inputted = $_POST['getMail'];
        $post_id_comment = $_POST['post_display_comments'];
        $newFames = new Post_Illumination($email_inputted);
        $newFames->show_comments( $post_id_comment, $email_inputted);
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
        $total_like_response = $newCount->count_like($_POST['count_post_like']);
        exit(json_encode($total_like_response));
    }

    // if request is to count comment found on specific post
    // =====================================================================================================================================
    if(isset($_POST['post_count_comment'])){
        $newCount = new Post_Illumination($_POST['user_comments_mail']);
        $total_comment_response = $newCount->countComment($_POST['post_count_comment']);
        exit(json_encode($total_comment_response));
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
        $newFames->show_posts($_POST['getPost_type'],$_POST['getVideoPath'],$_POST['getPath']);
    }
?>
