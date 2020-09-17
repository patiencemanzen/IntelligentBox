<?php 

    //  INITIALIZE DATABASE CONNECTION
    // ======================================================================================================================
    require_once ("../Scyllar.php");
    // =============================================================================================================================

    // CLASS HISTORY CONTENT
    // ==============================================================================================================================
    class History_content extends Scyllar {

        // PUBLIC METHOD FOR ALL HISTORY CONTINET
        // =========================================================================================================================
        public function Continet_content($continet){ ?>
            <!-- title categories, history -->
            <div class="top-title mt-5">
                <div class="history"><?php echo $continet; ?> in History</div>
                <!-- <div class="category">Geographical history <i class="fa fa-sort-down ml-2"></i></div> -->
            </div>
            <!-- end title -->

            <!-- history post shared -->
            <div class="history-post mt-3">
                <div class="post-list-holder" id="continet_cont-holder">
                <?php 
                    $select_content = "SELECT * FROM history_post WHERE history_side = '$continet' AND history_section = 'history'";
                    $execute_content = mysqli_query($this->Frequency(), $select_content);
                    while($fetch_content = mysqli_fetch_assoc($execute_content)){ 
                        $media = $fetch_content['media'];
                        $history_title = $fetch_content['history_title'];
                        $history_sub_body = $fetch_content['history_sub_title'];
                        $history_full_body = $fetch_content['history_full_body'];
                        $email = $fetch_content['email'];
                        $post_identity = $fetch_content['identity'];

                        $select_basic_content = "SELECT * FROM intelligent_users WHERE email = '$email'";
                        $execute_basic_content = mysqli_query($this->Frequency(), $select_basic_content);
                        $fetch_basic_content = mysqli_fetch_assoc($execute_basic_content);
                            $firstName = $fetch_basic_content['firstName'];
                            $lastName = $fetch_basic_content['lastName'];
                         
                        $likes = 0;
                        $select_likes = "SELECT * FROM history_post_likes WHERE post_identity='$post_identity' AND status_like='1'";
                        $execute_likes = mysqli_query($this->Frequency(), $select_likes);
                        while($fetch_likes = mysqli_fetch_assoc($execute_likes)){
                            $likes = $likes + 1;
                        }     ?>
          
                            <!-- each post start -->
                            <!-- ======================================================================================================================================= -->
                            <div class="each-history-post d-flex">
                                <?php if($media == "none"){?>
                                    <div class="post-desc ml-3">
                                        <div class="post-title"><?php echo $history_title; ?></div>
                                        <div class="post-sub-title mt-2"><?php echo $history_sub_body; ?></div><hr>
                                        <div class="dedicate d-flex justify-content-between">
                                            <div class="author mt-2"><i class="fa fa-pencil"></i> by <?php if($email == 'intelligentBox@gmail.com'){?> <?php echo "Intelligent box"; ?> <?php }else{ ?> <?php echo $firstName; ?> <?php echo $lastName; ?> <?php } ?></div>
                                            <div class="user-accurate d-flex justify-content-between">
                                                <div class="likes" id="<?php echo $post_identity; ?>" onclick="like_dislike(this)"><i class="fa fa-thumbs-o-up"></i> likes <?php echo $likes; ?></div>
                                                <!-- <div class="share ml-1"><i class="fa fa-share-alt"></i> share</div> -->
                                            </div>
                                        </div>
                                        <div class="sub-full-desc mt-3" style="width: 100%;"><?php echo $history_full_body; ?> </div>
                                    </div>
                                <?php }else{ ?>
                                    <div>
                                        <div class="history-image"><img src="<?php echo '../Images/history-img/'.$media; ?>" alt="" width="100%" height="100%"></div>
                                    </div>
                                    <div class="post-desc ml-3">
                                        <div class="post-title"><?php echo $history_title; ?></div>
                                        <div class="post-sub-title mt-2"><?php echo $history_sub_body; ?></div><hr>
                                        <div class="dedicate d-flex justify-content-between">
                                            <div class="author mt-2"><i class="fa fa-pencil"></i> by <?php if($email == 'intelligentBox@gmail.com'){?> <?php echo "Intelligent box"; ?> <?php }else{ ?> <?php echo $firstName; ?> <?php echo $lastName; ?> <?php } ?></div>
                                            <div class="user-accurate d-flex justify-content-between">
                                                <div class="likes" id="<?php echo $post_identity; ?>" onclick="like_dislike(this)"><i class="fa fa-thumbs-o-up"></i> likes <?php echo $likes; ?></div>
                                                <!-- <div class="share ml-1"><i class="fa fa-share-alt"></i> share</div> -->
                                            </div>
                                        </div>
                                        <div class="sub-full-desc mt-3"><?php echo $history_full_body; ?> </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- end each history post -->
                            <!-- ================================================================================================================================================= -->
            
                  <?php } ?>
                </div>
            </div>
            <!-- end history post -->
        <?php }

        public function today_in_history(){
            $select_content = "SELECT * FROM history_post WHERE history_section = 'today_in_history'";
            $execute_content = mysqli_query($this->Frequency(), $select_content);
            while($fetch_content = mysqli_fetch_assoc($execute_content)){
                $media = $fetch_content['media'];
                $history_title = $fetch_content['history_title'];
                $history_sub_body = $fetch_content['history_sub_title'];
                $history_full_body = $fetch_content['history_full_body']; ?>
                    <!-- each story -->
                    <!-- ============================================================================================================================== -->
                    <div class="each-today-in-history">
                        <?php if($media == "none"){?>
                        <?php }else if($media == ""){ ?>
                        <?php }else{ ?>
                            <div><div class="story-image"><img src="<?php echo '../Images/history-img/'.$media; ?>" alt="" width="100%" height="100%"></div></div>
                        <?php } ?>
                        <div class="story-desc pt-3 pl-2 pr-2">
                            <div class="story-title-1"><?php echo $history_title; ?></div>
                            <div class="short-desc-1 mt-2"><?php echo $history_sub_body; ?></div>
                            <div class="full-story mt-2"><?php echo $history_full_body; ?></div>
                        </div>
                    </div>
                    <!-- end each story -->
                    <!-- ============================================================================================================================================ -->
        <?php }
        }

        // METHOD GET PROFILE IMAGE
        // =============================================================================================================================
        public function getProfileImage($Email){
            $selectImage = "SELECT * FROM user_profile_image WHERE usr_email='$Email' AND status_image='1'";
            $executeImage = mysqli_query($this->Frequency(),$selectImage);
            $fetchImage = mysqli_fetch_assoc($executeImage); ?>
                <img src="<?php echo '../Images/profile-img/profile-image/'.$fetchImage['profile_image'] ?>" width="100%" height="100%">
        <?php }

        public function save_defined_news($usr_email, $media_posted, $media_type,$title, $full){
            $created_on = Date("Y-m-d h:m:s");

            $select_basic_content = "SELECT * FROM intelligent_users WHERE email = '$usr_email'";
            $execute_basic_content = mysqli_query($this->Frequency(), $select_basic_content);
            $fetch_basic_content = mysqli_fetch_assoc($execute_basic_content);
                $identity = $fetch_basic_content['identity'];

            $insert_news = "INSERT INTO history_post VALUE ('','$identity','$usr_email','$media_posted','$media_type','defined','$title','none','$full','world','0','0','$created_on')";
            $execute_news = mysqli_query($this->Frequency(), $insert_news);
        }

        public function defined_news(){
            $select_defined_news = "SELECT * FROM history_post WHERE history_section='defined'";
            $execute_defined_news = mysqli_query($this->Frequency(), $select_defined_news);
            while($fetch_defined = mysqli_fetch_assoc($execute_defined_news)){
                $media = $fetch_defined['media'];
                $history_title = $fetch_defined['history_title'];
                $history_full_body = $fetch_defined['history_full_body'];
                $email = $fetch_defined['email'];

                $select_basic_content = "SELECT * FROM intelligent_users WHERE email = '$email'";
                $execute_basic_content = mysqli_query($this->Frequency(), $select_basic_content);
                $fetch_basic_content = mysqli_fetch_assoc($execute_basic_content);
                    $firstName = $fetch_basic_content['firstName'];
                    $lastName = $fetch_basic_content['lastName'];
                ?>
                <!-- each story -->
                <!-- =================================================================================================================================================== -->
                <div class="each-today-in-history long-prapgraphy">
                    <div class="mr-2">
                        <div class="story-images"><img src="<?php echo '../Images/history-img/'.$media; ?>" alt="" width="100%" height="100%"></div>
                    </div>
                    <p class="story-desc ml-2">
                        <span class="story-title"><i class="fa fa-pencil"></i> <?php echo $firstName; ?> <?php echo $lastName; ?></span><br>
                        <span class="short-desc"><?php echo $history_title; ?></span><br>
                        <span class="user-define-story"><?php echo $history_full_body; ?> </span>
                    </p>
                </div>
                <!-- end each story -->
                <!-- ================================================================================================================================================================ -->

           <?php }
        }

         // LIKE AND DISLIKE ON COMMENT 
        // =========================================================================================================================================
        public function like_dislike_news($news_id, $user_email){
            $check_like = "SELECT * FROM history_post_likes WHERE post_identity='$news_id' AND email='$user_email'";
            $execute_check = mysqli_query($this->Frequency(), $check_like);
            if(mysqli_num_rows($execute_check) > 0 ){
                $select_status_like = "SELECT status_like FROM history_post_likes WHERE email='$user_email' AND post_identity='$news_id'";
                $execute_stst_like = mysqli_query($this->Frequency(), $select_status_like);
                $fetch_stst = mysqli_fetch_assoc($execute_stst_like);
                $getStst = $fetch_stst['status_like'];

                if($getStst == 0){
                    $update_current_like = "UPDATE history_post_likes SET status_like='1' WHERE email='$user_email' AND post_identity='$news_id'";
                    $execute_updates = mysqli_query($this->Frequency(), $update_current_like);
                }else{
                    $update_current_like = "UPDATE history_post_likes SET status_like='0' WHERE email='$user_email' AND post_identity='$news_id'";
                    $execute_updates = mysqli_query($this->Frequency(), $update_current_like);
                }

            }else{
                $created_on = date("Y-m-d h:i:s");
                $insert_new_like = "INSERT INTO history_post_likes VALUE ('','$user_email','$news_id','1','$created_on')";
                $execute_saving = mysqli_query($this->Frequency(), $insert_new_like);
            }
        }

    }

    // IMPLEMENT CLASS HISTORY CONTENT
    // =====================================================================================================================================================================
    $new_content = new History_content();

    // if request is to fetch all contine tdata
    // =====================================================================================================================================================================
    if(isset($_POST['continet'])){
        $new_content->Continet_content($_POST['continet']);
    }

    // if request is to fetch today in history
    // ======================================================================================================================================================================
    if(isset($_POST['today'])){
        $new_content->today_in_history();
    }

    // if request is to fetch profile image
    // ======================================================================================================================================================================
    if(isset($_POST['getProfileImage'])){
        $new_content->getProfileImage($_POST['getProfileImage']);
    }

    // if request is to save user history
    // =============================================================================================================================================================================
    if(isset($_POST['submit_news'])){
        $user_email = $_POST['chosen_email'];
        $story_title = $_POST['story_title'];
        $story_body = $_POST['story_body'];

        if(empty($story_title) || empty($story_body)){
            header('location: index.php?empty');
            exit();
        }else{
            if($_FILES['chosen_image']['name'] == ""){
                $empty = $_FILES['chosen_image']['name'];
                if($new_content->save_defined_news($user_email, $empty, $imageFileType,$story_title, $story_body)){
                    header("location: index.php?success");
                    exit();
                }else{
                    header("location: index.php?fail");
                    exit();
                }
            }else{
                $filename = 'IB_story_image'.time().'Box'.'--'.$_FILES['chosen_image']['name'];
                $file_size = $_FILES['chosen_image']['size'];
        
                $location = "../Images/history-img/".$filename;
                $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        
                $valid_extensions = array("jpg","jpeg","png");
        
                // check extension
                if(!in_array(strtolower($imageFileType), $valid_extensions)) {
                    header("location: index.php?extentension");
                    exit();
                }else{
                    if(move_uploaded_file($_FILES['chosen_image']['tmp_name'],$location)){
                        if($new_content->save_defined_news($user_email, $filename, $imageFileType,$story_title, $story_body)){
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
                }
            }
        }
    }

    // i request is to display news defined by user
    // =====================================================================================================================================
    if(isset($_POST['defined'])){
        $new_content->defined_news();
    }

    // if request is to like and dislike news
    // =====================================================================================================================================
    if(isset($_POST['likers_email'])){
        $new_content->like_dislike_news($_POST['post_identity'], $_POST['likers_email']);
    }
?>