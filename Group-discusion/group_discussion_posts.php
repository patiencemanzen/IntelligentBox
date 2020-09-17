<?php 
    //  SET SESION 
    // =========================================================================================================
    session_start();
    $user_poster_email = $_SESSION['Email'];

    // INITIALIZE DATABASE CONNECTION
    // ==========================================================================================================
    require_once ("../Scyllar.php");
    // ==========================================================================================================

    // INITIALIZE AND IMPLEMENT CLASS SHOW POST
    // ==========================================================================================================
    class Discussion_illumination extends Scyllar {
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

        
        // CONFIGURE POST
        // =====================================================================================================
        public function save_post($public_media,$media_section, $public_caption, $email,$media_type,$group_name, $group_identity){
            $select_basic_identity = "SELECT identity FROM intelligent_users WHERE email='$email'";
            $execute_identity = mysqli_query($this->Frequency(), $select_basic_identity);
            $fetch_identity = mysqli_fetch_assoc($execute_identity);
            $identity = $fetch_identity['identity'];
            $created_on = date("Y-m-d h:m:s");

            // then insert post
            // =================================================================================================
            $insert_media = "INSERT user_group_post VALUE ('','$group_name','$group_identity','$identity','$email','$public_media','$media_section','$public_caption','$media_type','$created_on')";
            $execute_media_insertion = mysqli_query($this->Frequency(), $insert_media);
            if($execute_media_insertion){
                return true;
            }else{
                return false;
            }
        }

        // DISPLAY POST THAT AVE BEEN POSTED EARLIER
        // =====================================================================================================
        public function show_posts($post_type,$videoPath,$photoPath, $group_identity){
            $select_posts = "SELECT * FROM user_group_post WHERE group_identity='$group_identity' AND post_type='$post_type' ORDER BY created_on DESC";
            $execute_posts = mysqli_query($this->Frequency(), $select_posts);
            if(mysqli_num_rows($execute_posts) > 0){
                while($fetch_posts = mysqli_fetch_assoc($execute_posts)){
                    $select_media_posted = $fetch_posts['media_posted'];
                    $select_caption = $fetch_posts['media_caption'];
                    $select_media_type = $fetch_posts['media_type'];
                    $poster_email = $fetch_posts['poster_email'];
                    $post_identity = $fetch_posts['identity'];

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
                    $execute_profile_image = mysqli_query($this->Frequency(),$select_poster_img);
                    $fetch_image = mysqli_fetch_assoc($execute_profile_image);
                    $profile_image = $fetch_image['profile_image'];  
                    
                    $select_my_profile_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$this->E_mail' AND status_image='1'";
                    $execute_my_image = mysqli_query($this->Frequency(), $select_my_profile_image);
                    $fetch_my_image = mysqli_fetch_assoc($execute_my_image);
                        $my_profile_image = $fetch_my_image['profile_image'];  ?>


                        <!-- each post shared -->
                        <!-- ============================================================================== -->
                        <div class="each-post shadow-sm mt-3 mb-2 d-flex">
                            <div><div class="poster-img"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="post-detail ml-2">
                                <div class="poster-name"><?php echo $getFirstname; ?> <?php echo $getLastname; ?></div>
                                <div class="poster-caption mb-1"> <?php echo $select_caption; ?> </div>
                                <?php if($select_media_posted == ""){}else{ ?>
                                    <!-- if post is video -->
                                    <?php if($select_media_type == "mp4"){?>
                                        <div class="media-posted">
                                            <video src="<?php echo $videoPath.$select_media_posted; ?>" loop width="100%" height="100%"></video>
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
                                        <!-- if post is photo -->
                                        <div class="media-posted">
                                            <div class="media-type"><img src="<?php echo $photoPath.$select_media_posted; ?>" alt="" width="100%" height="100%"></div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                                <div class="user-accurate mt-2">
                                    <div class="list-accurate d-flex justify-content-between">
                                        <div class="comments" data-toggle="collapse" data-target="#comment_found_<?php echo $post_identity; ?>" id="<?php echo $post_identity; ?>">
                                            <i class="fa fa-comment-o mr-2" id="<?php echo $post_identity; ?>"></i>
                                            <span class="acurate-small"> Comments </span> 
                                            <span id="count_comments_<?php echo $post_identity; ?>">
                                                <script>
                                                    setInterval(() => {
                                                        $(document).ready(function(){
                                                            var post_idintity = "<?php echo $post_identity; ?>";
                                                            var user_email = document.getElementById("hiddenEmail").value;
                                                            var post_type = "feeds";

                                                            $("#count_comments_<?php echo $post_identity; ?>").load("group_discussion_posts.php",{
                                                                post_count_comment: post_idintity,
                                                                user_comments_mail: user_email,
                                                                post_section: post_type
                                                            });
                                                        });
                                                    }, 1000);
                                                </script>
                                            </span>
                                        </div>
                                        <div class="likes" id="<?php echo $post_identity; ?>" onclick="like_dislike(this)">
                                            <i class="fa fa-heart-o mr-2" id="<?php echo $post_identity; ?>"></i>
                                            <span class="acurate-small"> Likes </span>
                                            <span id="count_likes_found_<?php echo $post_identity; ?>">
                                                <script>
                                                    setInterval(() => {
                                                        $(document).ready(function(){
                                                            var post_idintity = "<?php echo $post_identity; ?>";
                                                            var user_email = document.getElementById("hiddenEmail").value;
                                                            var post_type = "feeds";

                                                            $("#count_likes_found_<?php echo $post_identity; ?>").load("group_discussion_posts.php",{
                                                                count_post_like: post_idintity,
                                                                user_mail: user_email,
                                                                getPost_type: post_type
                                                            });
                                                        });
                                                    }, 1000);
                                                </script>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- comment user gave -->
                                <!-- ======================================================================================= -->
                                <div class="comment-found mt-1 collapse" id="comment_found_<?php echo $post_identity; ?>">
                                    <div class="list-comments mt-2">
                                        <div class="timeline" id="getComment_<?php echo $post_identity; ?>">
                                            <script>
                                                var post_identity = "<?php echo $post_identity; ?>";
                                                var user_email = document.getElementById("hiddenEmail").value;
                                                var comment_post_type = "feeds";

                                                $("#getComment_<?php echo $post_identity; ?>").load("group_discussion_posts.php",{
                                                    post_display_comments: post_identity,
                                                    getMail: user_email,
                                                    getPost_type: comment_post_type
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <!-- end comment list -->
                                <!-- ================================================================================================================= -->

                                <!-- give user privelege to add comments -->
                                <!-- ================================================================================================================= -->
                                <div class="add-comment mt-2">
                                    <div class="comment-area d-flex justify-content-between">
                                        <div class="commeter-pre"><div class="commenter-img"><img src="<?php echo '../Images/profile-img/profile-image/'.$my_profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                                        <div style="width: 100%;"><div class="comment-textarea"><textarea name="" id="" cols="30" rows="1" placeholder="write a commets..."></textarea></div></div>
                                        <div class="post-button ml-3">
                                            <div class="post">
                                                <button type="button" id="<?php echo $post_identity; ?>" onclick="add_comment(this)">post</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="hold-error-occur"></div>
                                </div>
                                <!-- revoke -->
                                <!-- ======================================================================================================================== -->

                            </div>
                        </div>
                        <!-- end each post -->
                        <!-- ===================================================================================================================================== -->
                <?php }
            }else{ ?>
                <div class="no-data-found d-flex flex-column text-center">
                    <img src="../Images/Illustrator_img/publish_post_vowb.png" alt="publish post" width="100%" height="100%">
                    <span>Create more posts and shared what you are thinking </span>
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

            $select_post_type = "SELECT * FROM user_group_post WHERE identity='$post_idea'";
            $execute_post_type = mysqli_query($this->Frequency(), $select_post_type);
            $fetch_post_type = mysqli_fetch_assoc($execute_post_type);
                $getPost_type = $fetch_post_type['post_type'];

            $insert_comment = "INSERT INTO user_group_post_comment VALUE ('','$getIdentity','$this->E_mail','$post_idea','$comment','1','$created_on')";
            $execute_comment = mysqli_query($this->Frequency(), $insert_comment);
        }

        // METHOD DISPLAY ALL POST COMMENT
        // ========================================================================================================================
        public function show_comments($email, $post_id,$getPost_type){
            $select_comments = "SELECT * FROM user_group_post_comment WHERE post_identity='$post_id'";
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

                $select_my_profile_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$this->E_mail' AND status_image='1'";
                $execute_my_image = mysqli_query($this->Frequency(), $select_my_profile_image);
                $fetch_my_image = mysqli_fetch_assoc($execute_my_image);
                    $my_profile_image = $fetch_my_image['profile_image']; ?>

                    <div class="container right">
                        <div class="content d-flex">
                            <div><div class="answerer-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="answerer-detail ml-2 mt-1">
                                <div class="answerer-name"><?php echo $getFirstname; ?> <?php echo $getLastname; ?></div>
                                <div class="answer"> <?php echo $getComment; ?> </div>

                                <div class="accurancy d-flex justify-content-between">
                                    <div class="question-comment" id="<?php echo $getComment_identity; ?>" data-target="#comment-found-<?php echo $getComment_identity; ?>" data-toggle="collapse" onclick="comment_reply_display(this)">
                                        <i class="fa fa-comment-o"></i> <span id="count_comments_comments_found_<?php echo $getComment_identity; ?>">
                                            <script>
                                                setInterval(() => {
                                                    $(document).ready(function(){
                                                        var comment_id = "<?php echo $getComment_identity; ?>";
                                                        var user_email = document.getElementById("hiddenEmail").value;

                                                        $("#count_comments_comments_found_<?php echo $getComment_identity; ?>").load("group_discussion_posts.php",{
                                                            getComment_id: comment_id,
                                                            getEmail_comment_count_replied: user_email
                                                        });
                                                    });
                                                }, 1000);
                                            </script>
                                        </span>
                                    </div>
                                    <div class="question-likes" id="<?php echo $getComment_identity; ?>" onclick="like_dislike_comment(this)">
                                        <i class="fa fa-heart-o"></i> <span id="count_comments_likes_found_<?php echo $getComment_identity; ?>">
                                            <script>
                                                setInterval(() => {
                                                    $(document).ready(function(){
                                                        var comment_idintity = "<?php echo $getComment_identity; ?>";
                                                        var user_email = document.getElementById("hiddenEmail").value;

                                                        $("#count_comments_likes_found_<?php echo $getComment_identity; ?>").load("group_discussion_posts.php", {
                                                            getComment_count_like_identity: comment_idintity,
                                                            getUser_email: user_email
                                                        });
                                                    });
                                                }, 1000);
                                            </script>
                                        </span>
                                    </div>
                                </div>

                                <div class="commenting-section collapse" id="comment-found-<?php echo $getComment_identity; ?>">
                                    <div class="comment-add-comment">
                                        <div><div class="commeter-image-down"><img src="<?php echo '../Images/profile-img/profile-image/'.$my_profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                                        <div class="textarea-add-comment"><textarea name="" id="" cols="30" rows="1" placeholder="Write comment..."></textarea></div>
                                        <div class="post-comment-written"><button id="<?php echo $getComment_identity; ?>" onclick="comment_reply(this)">Post</button></div>
                                    </div>
                                    <div class="comment-found-comment">

                                    </div>
                                </div>
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

            $insert_comment = "INSERT INTO user_group_post_comment_reply VALUE ('','$getIdentity','$this->E_mail','$comment_id','$commentFound','1','$created_on')";
            $execute_comment_reply = mysqli_query($this->Frequency(), $insert_comment);
        }

        // DISPLAY COMMENT REPLY FOUND
        // ====================================================================================================================================
        function Comment_reply_found($comment_id){
            $select_comment_reply = "SELECT * FROM user_group_post_comment_reply WHERE comment_identity='$comment_id'";
            $execute_comment_reply = mysqli_query($this->Frequency(), $select_comment_reply);
            while($fetch_comment_reply = mysqli_fetch_assoc($execute_comment_reply)){
                $getEmail = $fetch_comment_reply['user_email'];
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
            $selectComments = "SELECT * FROM user_group_post_comment_reply WHERE comment_identity='$comment_id'";
            $execute_comment = mysqli_query($this->Frequency(),$selectComments);
            while($fetchFollowing = mysqli_fetch_assoc($execute_comment)){
                $comments = $comments + 1;
            } 
            echo $comments;
        }


        // LIKE AND DISLIKE ON COMMENT 
        // =========================================================================================================================================
        public function like_dislike_comment($comment_id){
            $check_like = "SELECT * FROM user_group_post_comment_like WHERE comment_identity='$comment_id' AND user_email='$this->E_mail'";
            $execute_check = mysqli_query($this->Frequency(), $check_like);
            if(mysqli_num_rows($execute_check) > 0 ){
                $select_status_like = "SELECT status_like FROM user_group_post_comment_like WHERE user_email='$this->E_mail' AND comment_identity='$comment_id'";
                $execute_stst_like = mysqli_query($this->Frequency(), $select_status_like);
                $fetch_stst = mysqli_fetch_assoc($execute_stst_like);
                $getStst = $fetch_stst['comment_status_like'];

                if($getStst == 0){
                    $update_current_like = "UPDATE user_group_post_comment_like SET comment_status_like='1' WHERE user_email='$this->E_mail' AND comment_identity='$comment_id'";
                    $execute_updates = mysqli_query($this->Frequency(), $update_current_like);
                }else{
                    $update_current_like = "UPDATE user_group_post_comment_like SET comment_status_like='0' WHERE user_email='$this->E_mail' AND comment_identity='$comment_id'";
                    $execute_updates = mysqli_query($this->Frequency(), $update_current_like);
                }

            }else{
                $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$this->E_mail'";
                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                    $getIdentity = $fetch_basic_info['identity'];
                    $created_on = date("Y-m-d h:i:s");

                $insert_new_like = "INSERT INTO user_group_post_comment_like VALUE ('','$getIdentity','$this->E_mail','$comment_id','1','1','$created_on')";
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
            $selectLikes = "SELECT * FROM user_group_post_comment_like WHERE comment_identity='$comment_identity' AND comment_status_like='1'";
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
            $selectComments = "SELECT * FROM user_group_post_comment WHERE post_identity='$post_id'";
            $execute_comment = mysqli_query($this->Frequency(),$selectComments);
            while($fetchFollowing = mysqli_fetch_assoc($execute_comment)){
                $comments = $comments + 1;
            } 
            echo $comments;
        }


        // ADD LIKE ON POST
        // ===========================================================================================================
        public function like_dislike_post($post_id){
            $check_like = "SELECT * FROM user_group_post_like WHERE post_identity='$post_id' AND user_email='$this->E_mail'";
            $execute_check = mysqli_query($this->Frequency(), $check_like);
            if(mysqli_num_rows($execute_check) > 0 ){
                $select_status_like = "SELECT status_like FROM user_group_post_like WHERE user_email='$this->E_mail' AND post_identity='$post_id'";
                $execute_stst_like = mysqli_query($this->Frequency(), $select_status_like);
                $fetch_stst = mysqli_fetch_assoc($execute_stst_like);
                    $getStst = $fetch_stst['status_like'];

                if($getStst == 0){
                    $update_current_like = "UPDATE user_group_post_like SET status_like='1' WHERE user_email='$this->E_mail' AND post_identity='$post_id'";
                    $execute_updates = mysqli_query($this->Frequency(), $update_current_like);
                }else{
                    $update_current_like = "UPDATE user_group_post_like SET status_like='0' WHERE user_email='$this->E_mail' AND post_identity='$post_id'";
                    $execute_updates = mysqli_query($this->Frequency(), $update_current_like);
                }

            }else{
                $select_basic_info = "SELECT * FROM intelligent_users WHERE user_email='$this->E_mail'";
                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                    $getIdentity = $fetch_basic_info['identity'];
                    $created_on = date("Y-m-d h:i:s");  

                $insert_new_like = "INSERT INTO user_group_post_like VALUE ('','$getIdentity','$this->E_mail','$post_id','1','$created_on')";
                $execute_saving = mysqli_query($this->Frequency(), $insert_new_like);
                if($execute_saving){
                    return true;
                }else{
                    return false;
                }
            }
        }

        public function count_like($post_identity,$post_type){
            $likes = 0;
            $selectLikes = "SELECT * FROM user_group_post_like WHERE post_identity='$post_identity' AND status_like='1'";
            $execute_Likes = mysqli_query($this->Frequency(),$selectLikes);
            while($fetchFollowing = mysqli_fetch_assoc($execute_Likes)){
                $likes = $likes + 1;
            }
            echo $likes;
        }
    }


    // get inputted 
    // ==================================================================================
    if(isset($_POST['submit_file'])){
        $email_inputted = $user_poster_email;
        $caption_inputed = $_POST['user_caption'];
        $media_section_type = "feeds";
        $Get_group_name = $_POST['group_name'];
        $getGroup_identity = $_POST['group_identity'];
        $url_code = $_POST['url_code'];
        
        $filename = 'IB_group_image'.time().'Box'.'--'.$_FILES['file_media']['name'];
        $file_size = $_FILES['file_media']['size'];

        $location = "../Images/group_discusion/".$filename;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);

        $valid_extensions = array("jpg","jpeg","png","mp4","");

        if($_FILES['file_media']['name'] == ""){
            $empty = $_FILES['file_media']['name'];
            if($newFames->save_post($empty, $imageFileType, $caption_inputed, $email_inputted, $media_section_type, $Get_group_name, $getGroup_identity)){
                header("location: Group_admin.php?group={$url_code}");
                exit();
            }else{
                header("location: Group_admin.php?group={$url_code}");
                exit();
            }
        }else{
           // check extension
            if(!in_array(strtolower($imageFileType), $valid_extensions)) {
                $response = "Check extentension";
            }else{
                if($file_size < 20971520){
                    if(move_uploaded_file($_FILES['file_media']['tmp_name'],$location)){
                        $newFames = new Discussion_illumination($user_poster_email);
                        if($newFames->save_post($filename, $imageFileType, $caption_inputed, $email_inputted, $media_section_type, $Get_group_name, $getGroup_identity)){
                            header("location: Group_admin.php?group={$url_code}");
                            exit();
                        }else{
                            header("location: Group_admin.php?group={$url_code}");
                            exit();
                        }
                    }
                }else{
                    header("location: Group_admin.php?group={$url_code}");
                    exit();
                }
            }
        }
    }

    // get inputted 
    // ==================================================================================
    if(isset($_POST['submit_file_disc'])){
        $email_inputted = $user_poster_email;
        $caption_inputed = $_POST['user_caption'];
        $media_section_type = "feeds";
        $Get_group_name = $_POST['group_name'];
        $getGroup_identity = $_POST['group_identity'];
        $url_code = $_POST['url_code'];
        
        $filename = 'IB_group_image'.time().'Box'.'--'.$_FILES['file_media']['name'];
        $file_size = $_FILES['file_media']['size'];

        $location = "../Images/group_discusion/".$filename;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);

        $valid_extensions = array("jpg","jpeg","png","mp4","");

        if($_FILES['file_media']['name'] == ""){
            $empty = $_FILES['file_media']['name'];
            if($newFames->save_post($empty, $imageFileType, $caption_inputed, $email_inputted, $media_section_type, $Get_group_name, $getGroup_identity)){
                header("location: index.php?group={$url_code}&msg=success");
                exit();
            }else{
                header("location: index.php?group={$url_code}&msg=fail");
                exit();
            }
        }else{
           // check extension
            if(!in_array(strtolower($imageFileType), $valid_extensions)) {
                header("location: index.php?group={$url_code}&msg=extentension");
                exit();
            }else{
                if($file_size < 20971520){
                    if(move_uploaded_file($_FILES['file_media']['tmp_name'],$location)){
                        $newFames = new Discussion_illumination($user_poster_email);
                        if($newFames->save_post($filename, $imageFileType, $caption_inputed, $email_inputted, $media_section_type, $Get_group_name, $getGroup_identity)){
                            header("location: index.php?group={$url_code}&msg=success");
                            exit();
                        }else{
                            header("location: index.php?group={$url_code}&msg=fail");
                            exit();
                        }
                    }else{
                        header("location: index.php?group={$url_code}&msg=move_fail");
                    }
                }else{
                    header("location: index.php?group={$url_code}&msg=size");
                    exit();
                }
            }
        }
    }
    
    // if request is to show all post
    // ==================================================================================================================================
    // =====================================================================================================================================
    if(isset($_POST['getPost_email'])){
        $newFames = new Discussion_illumination($user_poster_email);
        $newFames->show_posts($_POST['getpost_type'], $_POST['getPhotoPath'], $_POST['getPhotoPath'],$_POST['group_identitify']);
    }

    // if isset add comment request
    // ===================================================================================================================================
    if(isset($_POST['getEmail_comments'])){
        $newFames = new Discussion_illumination($_POST['getEmail_comments']);
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
        $newFames = new Discussion_illumination($email_inputted);
        $newFames->show_comments($email_inputted, $post_id_comment,$getPost_type);
    }

    // if request is to like or dislike post
    // ====================================================================================================================================
    if(isset($_POST['liker_mail'])){
        $user_mail = $_POST['liker_mail'];
        $post_identity_like = $_POST['post_identity_like'];
        $newIllu = new Discussion_illumination($user_mail);
        $newIllu->like_dislike_post($post_identity_like);
    }

    // if request is to count post likes
    // ====================================================================================================================================
    if(isset($_POST['count_post_like'])){
        $newCount = new Discussion_illumination($_POST['user_mail']);
        $newCount->count_like($_POST['count_post_like'], $_POST['getPost_type']);
    }

    // if request is to count comment found on specific post
    // =====================================================================================================================================
    if(isset($_POST['post_count_comment'])){
        $newCount = new Discussion_illumination($_POST['user_comments_mail']);
        $newCount->countComment($_POST['post_count_comment'],$_POST['post_section']);
    }

    // if request is to display all comments 
    // =====================================================================================================================================
    if(isset($_POST['post_display_comments'])){
        $newCount = new Discussion_illumination($_POST['getMail']);
        $newCount->show_comments($_POST['getMail'], $_POST['post_display_comments'], $_POST['getPost_type']);
    }

    // if request is to save comment reply
    // ======================================================================================================================================
    if(isset($_POST['getCommneter_email'])){
        $newReply = new Discussion_illumination($_POST['getCommneter_email']);
        $newReply->Save_comment_reply($_POST['getComment_id'], $_POST['getComment']);
    }

    // if request is to handle and display all comment replied
    // ========================================================================================================================================
    if(isset($_POST['comment_comment_type'])){
        $newReplied = new Discussion_illumination($_POST['getEmail_repliedcomment']);
        $newReplied->Comment_reply_found($_POST['Getcomment_id']);
    }

    // if request is to count replied on comment
    // ========================================================================================================================================
    if(isset($_POST['getComment_id'])){
        $newCountReplied = new Discussion_illumination($_POST['getEmail_comment_count_replied']);
        $newCountReplied->count_comment_replied($_POST['getComment_id']);
    }

    // if request is to like or dislike comment
    // ===========================================================================================================================================
    if(isset($_POST['getEmail_like_user'])){
        $newlikeDislike_comment = new Discussion_illumination($_POST['getEmail_like_user']);
        $newlikeDislike_comment->like_dislike_comment($_POST['getComment_Id']);
    }

    // if request is to count likes found on comments
    // ==========================================================================================================================================
    if(isset($_POST['getComment_count_like_identity'])){
        $newCount_comment = new Discussion_illumination($_POST['getUser_email']);
        $newCount_comment->count_comment_likes($_POST['getComment_count_like_identity']);
    }


    // IF REQUEST IS TO DISPLAY PROFILE IMAGE THAT HAVE BEEN UPLOADED BEFORE
    // ======================================================================================
    if(isset($_POST['getProfile_post_email'])){
        $newFames = new Discussion_illumination($_POST['getProfile_post_email']);
        $newFames->show_posts($_POST['getPost_type'],$_POST['getVideoPath'],$_POST['getPath'], $_POST['group_identity']);
    }
?>
