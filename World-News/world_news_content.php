<?php  
    //  INITIALIZE DATABASE CONNECTION
    // =========================================================================================================
    require_once ("../Scyllar.php");
    // =========================================================================================================

    // CLASS WORLD NEW SCONTENT
    // ==========================================================================================================
    class World_content extends Scyllar {

        // METHOD GET PROFILE IMAGE
        // =============================================================================================================================
        public function getProfileImage($Email){
            $selectImage = "SELECT * FROM user_profile_image WHERE usr_email='$Email' AND status_image='1'";
            $executeImage = mysqli_query($this->Frequency(),$selectImage);
            $fetchImage = mysqli_fetch_assoc($executeImage); ?>
                <img src="<?php echo '../Images/profile-img/profile-image/'.$fetchImage['profile_image'] ?>" width="100%" height="100%">
        <?php }

        // FUNCTION LOAD CONETNT ACCORDING TO CONTINET
        // ===================================================================================================================================================
        public function Continental_news($continet, $user_email){ ?>
            <div class="left-holder"> 

                <div class="top-story mt-2">
                    <div class="top-holder">
                        <div class="top-story-title"><i class="fa fa-newspaper-o mr-2"></i> Top stories..</div>
                        <div class="story-list d-flex mt-2 pb-2">
                            <?PHP 
                                $select_top_stories = "SELECT * FROM user_common_news WHERE news_independent='top_story'";
                                $execute_top_stories = mysqli_query($this->Frequency(), $select_top_stories);
                                while($fetch_top_stories = mysqli_fetch_assoc($execute_top_stories)){ 
                                    $user_identity = $fetch_top_stories['user_email'];
                                    $created_on = $fetch_top_stories['executed_date'];
                                    $date=date_create($created_on);
                                    $news_identity = $fetch_top_stories['identity'];
                                    $posted_media = $fetch_top_stories['news_media'];
                                    $news_description = $fetch_top_stories['news_description'];
                                    $news_title = $fetch_top_stories['news_title'];
                                    
                                    $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$user_identity'";
                                    $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                                    $fetch_basic= mysqli_fetch_assoc($execute_basic_info);
                                        $firstname = $fetch_basic['firstName'];
                                        $lastname = $fetch_basic['lastName'];

                                    $news_comment = 0;
                                    $select_all_comment = "SELECT * FROM user_common_news_comments WHERE news_identity='$news_identity'";
                                    $execute_countcomment = mysqli_query($this->Frequency(), $select_all_comment);
                                    while($count_comment = mysqli_fetch_assoc($execute_countcomment)){
                                        $news_comment = $news_comment + 1;
                                    } ?>
                                    <div class="each-story">
                                        <div class="story-img">
                                            <img src="<?php echo '../Images/world-news-img/'.$posted_media; ?>" alt="" width="100%" height="100%">
                                            <a href="full_news.php?news=<?php echo $news_identity?>" style="color:black;"><div class="read-more">read more</div></a>
                                        </div>
                                        <div class="story-desc mt-2 mtdesc">
                                        <?php echo $news_title; ?>
                                        </div>
                                    </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>

                <!-- bottom news -->
                <!-- ========================================================================================================================================= -->
                <div class="long-story mt-5">
                    <div class="long-holder">

                        <!-- titles -->
                        <!-- =============================================================================================================================== -->
                        <div class="titles-long">
                            <div class="all-news-title"><i class="fa fa-newspaper-o mr-1"></i> <?php echo $continet; ?></div>
                        </div>
                        <!-- end titles -->
                        <!-- ============================================================================================================================================== -->

                        <!-- all long story -->
                        <!-- =============================================================================================================================================== -->
                        <div class="long-story-section mt-3" id="all_news_continet">
                            <?php 
                                $select_all_news = "SELECT * FROM user_common_news WHERE news_independent='$continet'";
                                $execute_all_news = mysqli_query($this->Frequency(), $select_all_news);
                                while($fetch_all_news = mysqli_fetch_assoc($execute_all_news)){ 
                                    $news_title = $fetch_all_news['news_title'];
                                    $news_description = $fetch_all_news['news_description'];
                                    $news_identity = $fetch_all_news['identity'];

                                    $selectEchinodermFace = "SELECT profile_image FROM user_profile_image WHERE usr_email='$user_email' AND status_image='1'";
                                    $executeEchino = mysqli_query($this->Frequency(),$selectEchinodermFace);
                                    $fetchResult = mysqli_fetch_assoc($executeEchino);
                                        $result = $fetchResult['profile_image'];

                                    // count comment
                                    // =================================================================================================================
                                    $news_comment = 0;
                                    $select_all_comment = "SELECT * FROM user_common_news_comments WHERE news_identity='$news_identity'";
                                    $execute_countcomment = mysqli_query($this->Frequency(), $select_all_comment);
                                    while($count_comment = mysqli_fetch_assoc($execute_countcomment)){
                                        $news_comment = $news_comment + 1;
                                    } ?>
                                    <!-- each long story -->
                                    <!-- ====================================================================================================================================== -->
                                    <div class="each-long-story">
                                        <div class="circle-section">
                                            <div class="long-story-media">
                                                <div class="media-story"><img src="<?php echo '../Images/world-news-img/'.$fetch_all_news['news_media']; ?>" alt="" width="100%" height="100%"></div>
                                            </div>
                                            <div class="long-story-desc ml-2">
                                                <div class="long-story-title"><?php echo $news_title; ?></div>
                                                <div class="long-story-full-desc mt-2">
                                                    <div class="story-holder-desc"><?php echo $news_description; ?></div>
                                                    <div class="user-accurate mt-2 d-flex justify-content-between">
                                                        <div class="read-more-story"><i class="fa fa-pencil mr-2"></i> Intelligent News </div>
                                                        <div class="comment-user" data-toggle="collapse" data-target="#comment-<?php echo $news_identity; ?>"><i class="fa fa-comment-o"></i> <span><?php echo $news_comment; ?></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-found-area collapse mt-2" id="comment-<?php echo $news_identity; ?>">

                                            <div class="add_comment">
                                                <div><div class="commeter_image_add"><img src="<?php echo '../Images/profile-img/profile-image/'.$result; ?>" alt="" class="commeter_add" width="100%" height="100%"></div></div>
                                                <div class="add_comment_textarea"><textarea name="" id="comment_inputted" cols="30" rows="2" placeholder="add comment.."></textarea></div>
                                                <div class="save_comment"><button id="<?php echo $news_identity; ?>" onclick="save_comment(this)">Share</button></div>
                                            </div>

                                            <div class="comment_list_comment">
                                                <?php 
                                                $select_all_comment = "SELECT * FROM user_common_news_comments WHERE news_identity='$news_identity'";
                                                $execute_allcomment = mysqli_query($this->Frequency(), $select_all_comment);
                                                while($fetch_all_comment = mysqli_fetch_assoc($execute_allcomment)){ 
                                                        $commenter_email = $fetch_all_comment['user_email'];
                                                        $comment_found = $fetch_all_comment['comment'];

                                                        $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$commenter_email'";
                                                        $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                                                        $fetch_basic= mysqli_fetch_assoc($execute_basic_info);
                                                            $firstname = $fetch_basic['firstName'];
                                                            $lastname = $fetch_basic['lastName'];

                                                        $selectEchinodermFace = "SELECT profile_image FROM user_profile_image WHERE usr_email='$commenter_email' AND status_image='1'";
                                                        $executeEchino = mysqli_query($this->Frequency(),$selectEchinodermFace);
                                                        $fetchResult = mysqli_fetch_assoc($executeEchino);
                                                            $result = $fetchResult['profile_image'];

                                                    ?>
                                                    <div class="each-comment position-relative">
                                                        <div class="user-image-comment"><div class="img-commenter"><img src="<?php echo '../Images/profile-img/profile-image/'.$result; ?>" alt="" width="100%" height="100%"></div></div>
                                                        <div class="comment-found">
                                                            <div class="commenter-name"><?php echo $firstname; ?> <?php echo $lastname; ?></div>
                                                            <div class="comment-text"><?php echo $fetch_all_comment['comment']; ?></div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end each long story -->
                                    <!-- ============================================================================================================================= -->

                            <?php } ?>
                        </div>
                        <!-- end long story -->
                        <!-- ============================================================================================================================================== -->

                        <!-- right short story -->
                        <!-- ================================================================================================================================================================= -->
                        <div class="right-short-story">
                            <div class="most-commented-section">
                                <div class="most-commented">
                                    <div class="title-section">Most commented</div>
                                </div>
                                <div class="commented-list">
                                    <?php 
                                        $select_most_commented = "SELECT user_common_news.identity, COUNT(user_common_news_comments.news_identity) AS comment_count FROM user_common_news_comments INNER JOIN user_common_news ON user_common_news_comments.news_identity = user_common_news.identity GROUP BY user_common_news.identity ORDER BY comment_count DESC LIMIT 5";
                                        $execute_most_commente = mysqli_query($this->Frequency(), $select_most_commented);
                                        while($ftech_most_commente = mysqli_fetch_assoc($execute_most_commente)){ 
                                            $identity = $ftech_most_commente['identity'];
                                            $Select_news = "SELECT * FROM user_common_news WHERE identity='$identity'";
                                            $execute_news = mysqli_query($this->Frequency(), $Select_news);
                                            $fetch_new = mysqli_fetch_assoc($execute_news);
                                                $getFull_news = $fetch_new['news_title'];
                                                $creater = $fetch_new['user_email'];

                                                $date=date_create($fetch_new['executed_date']);
                                                $great_date = date_format($date,"F d, Y");

                                                $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$creater'";
                                                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                                                $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                                                     $firstname_creater = $fetch_basic_info['firstName'];
                                                     $lastname_creater = $fetch_basic_info['lastName'];
                                            ?>
                                            <!-- each commment -->
                                            <!-- ============================================================================================== -->
                                            <a href="full_news.php?news=<?php echo $identity?>" style="color:black;"><div class="each-commented">
                                                <div class="content-detail"><?php echo $getFull_news; ?></div>
                                                <div class="user-accurated">
                                                    <div class="name"><i class="fa fa-pencil"></i> <?php if($creater == "intelligentBox@gmail.box"){ echo "Intelligent box"; }else{?> <?php echo $firstname_creater; ?> <?php echo $lastname_creater; ?> <?php } ?></div>
                                                    <div class="date"><?php echo $great_date; ?></div>
                                                    <div class="comment"><i class="fa fa-comment-o mr-1"></i> <?php echo $ftech_most_commente['comment_count']; ?> </div>
                                                </div>
                                            </div></a>
                                            <!-- end each comment -->
                                            <!-- ====================================================================================================================== -->
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- end right short story -->
                        <!-- =========================================================================================================================================================================== -->    
                    </div>
                </div>
                <!-- end it -->
                <!-- ============================================================================================================================================================= -->
            </div>
        <?php }
        //  =============================================================================================================================================================


        // METHOD FOR SAVING COMMENT
        // ================================================================================================================================================
        public function save_comment($news_identity, $comment, $commenter_email){
            $insert_date = Date("Y-m-d h:m:s");
            $insert_comment = "INSERT INTO `user_common_news_comments`(`identity`, `user_email`, `news_identity`, `comment`, `comment_read_status`, `execute_date`) VALUES ('','$commenter_email','$news_identity','$comment','0',$insert_date)";
            $execute_comment = mysqli_query($this->Frequency(), $insert_comment);
        }

        public function save_news($user_email, $news_title, $news_body, $news_media){
            $created_on = Date("Y-m-d h:m:s");
            $insert_news = "INSERT INTO user_common_news VALUES ('','$user_email','$news_title','$news_media','$news_body','world','$created_on')";
            $execute_news = mysqli_query($this->Frequency(), $insert_news);
        }

        public function illu_defined_news($user_email){
            $select_all_defined = "SELECT * FROM user_common_news WHERE news_independent = 'world'";
            $execute_all_defined = mysqli_query($this->Frequency(), $select_all_defined);
            while($fetch_execute_defined = mysqli_fetch_assoc($execute_all_defined)){ 
                $defined_media = $fetch_execute_defined['news_media'];
                $defined_title = $fetch_execute_defined['news_title'];
                $defined_body = $fetch_execute_defined['news_description'];
                $defined_identity = $fetch_execute_defined['identity'];
                $creater = $fetch_execute_defined['user_email']; 
                    
                $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$creater'";
                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                $fetch_basic= mysqli_fetch_assoc($execute_basic_info);
                    $firstname = $fetch_basic['firstName'];
                    $lastname = $fetch_basic['lastName']; 
                    
                $selectEchinodermFace = "SELECT profile_image FROM user_profile_image WHERE usr_email='$user_email' AND status_image='1'";
                $executeEchino = mysqli_query($this->Frequency(),$selectEchinodermFace);
                $fetchResult = mysqli_fetch_assoc($executeEchino);
                    $result = $fetchResult['profile_image'];

                $news_comment = 0;
                $select_all_comment = "SELECT * FROM user_common_news_comments WHERE news_identity='$defined_identity'";
                $execute_countcomment = mysqli_query($this->Frequency(), $select_all_comment);
                while($count_comment = mysqli_fetch_assoc($execute_countcomment)){
                    $news_comment = $news_comment + 1;
                } ?>
                <!-- each long down story -->
                <!-- ======================================================================================================================================= -->
                <div class="each-long-story_right">
                    <div class="">
                        <div class="right_media_story">
                            <div class="media-defined_rght"><img src="<?php echo '../Images/world-news-img/'.$defined_media; ?>" alt="" width="100%" height="100%"></div>
                        </div>
                        <div class="long-story-desc mt-3">
                            <div class="long-story-title"><?php echo $defined_title; ?></div>
                            <div class="long-story-full-desc mt-2">
                                <div class="story-holder-desc"><?php echo $defined_body; ?></div>
                                <div class="user-accurate mt-2 d-flex justify-content-between">
                                    <div class="read-more-story"><i class="fa fa-pencil mr-2"></i> <?php echo $firstname; ?> <?php echo $lastname; ?> </div>
                                    <div class="comment-user" data-toggle="collapse" data-target="#comment-<?php echo $defined_identity; ?>"><i class="fa fa-comment-o"></i> <span><?php echo $news_comment; ?></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-found-area collapse mt-2" id="comment-<?php echo $defined_identity; ?>">
                        <div class="add_comment">
                            <div><div class="commeter_image_add"><img src="<?php echo '../Images/profile-img/profile-image/'.$result; ?>" alt="" class="commeter_add" width=""></div></div>
                            <div class="add_comment_textarea"><textarea name="" id="comment_inputted" cols="30" rows="2" placeholder="add comment.."></textarea></div>
                            <div class="save_comment"><button id="<?php echo $defined_identity; ?>" onclick="save_defined_comment(this)">Save</button></div>
                        </div>
                        <?php 
                        $select_all_comment = "SELECT * FROM user_common_news_comments WHERE news_identity='$defined_identity'";
                        $execute_allcomment = mysqli_query($this->Frequency(), $select_all_comment);
                        while($fetch_all_comment = mysqli_fetch_assoc($execute_allcomment)){ 
                                $commenter_email = $fetch_all_comment['user_email'];
                                $comment_found = $fetch_all_comment['comment'];

                                $selectEchinodermFace = "SELECT profile_image FROM user_profile_image WHERE usr_email='$commenter_email' AND status_image='1'";
                                $executeEchino = mysqli_query($this->Frequency(),$selectEchinodermFace);
                                $fetchResult = mysqli_fetch_assoc($executeEchino);
                                    $result = $fetchResult['profile_image']; 
                                    
                                $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$commenter_email'";
                                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                                $fetch_basic= mysqli_fetch_assoc($execute_basic_info);
                                    $firstname = $fetch_basic['firstName'];
                                    $lastname = $fetch_basic['lastName'];   ?>
                                <div class="each-comment">
                                    <div class="user-image-comment"><div class="img-commenter"><img src="<?php echo '../Images/profile-img/profile-image/'.$result; ?>" alt="" width="100%" height="100%"></div></div>
                                    <div class="comment-found">
                                        <div class="commenter-name"><?php echo $firstname; ?> <?php echo $lastname; ?></div>
                                        <div class="comment-text"><?php echo $comment_found; ?></div>
                                    </div>
                                </div>
                        <?php } ?>      
                    </div>
                </div>
                <!-- end each long story -->
                <!-- ==================================================================================================================================================== -->
        <?php 
            }
        }

        public function illu_small_device($user_email){
            $select_all_defined = "SELECT * FROM user_common_news WHERE news_independent = 'world'";
            $execute_all_defined = mysqli_query($this->Frequency(), $select_all_defined);
            while($fetch_execute_defined = mysqli_fetch_assoc($execute_all_defined)){ 
                $defined_media = $fetch_execute_defined['news_media'];
                $defined_title = $fetch_execute_defined['news_title'];
                $defined_body = $fetch_execute_defined['news_description'];
                $defined_identity = $fetch_execute_defined['identity'];
                $creater = $fetch_execute_defined['user_email']; 
                
                $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$creater'";
                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                $fetch_basic= mysqli_fetch_assoc($execute_basic_info);
                    $firstname = $fetch_basic['firstName'];
                    $lastname = $fetch_basic['lastName']; 
                    
                $selectEchinodermFace = "SELECT profile_image FROM user_profile_image WHERE usr_email='$user_email' AND status_image='1'";
                $executeEchino = mysqli_query($this->Frequency(),$selectEchinodermFace);
                $fetchResult = mysqli_fetch_assoc($executeEchino);
                    $result = $fetchResult['profile_image'];

                $news_comment = 0;
                $select_all_comment = "SELECT * FROM user_common_news_comments WHERE news_identity='$defined_identity'";
                $execute_countcomment = mysqli_query($this->Frequency(), $select_all_comment);
                while($count_comment = mysqli_fetch_assoc($execute_countcomment)){
                    $news_comment = $news_comment + 1;
                } ?>

                <!-- each long down story -->
                <!-- ======================================================================================================================================= -->
                <div class="each-long-story-side">
                    <div class="d-flex alignment">
                        <div class="long-story-image">
                            <div class="media-defined-side"><img src="<?php echo '../Images/world-news-img/'.$defined_media; ?>" alt="" width="100%" height="100%"></div>
                        </div>
                        <div class="long-story-desc ml-2 mt-3">
                            <div class="long-story-title"><?php echo $defined_title; ?></div>
                            <div class="long-story-full-desc mt-2">
                                <div class="story-holder-desc"><?php echo $defined_body; ?></div>
                                <div class="user-accurate mt-2 d-flex justify-content-between">
                                    <div class="read-more-story-side"><i class="fa fa-pencil mr-2"></i> <?php echo $firstname; ?> <?php echo $lastname; ?> </div>
                                    <div class="comment-user" data-toggle="collapse" data-target="#comment-<?php echo $defined_identity; ?>"><i class="fa fa-comment-o"></i> <span><?php echo $news_comment; ?></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-found-area collapse mt-2" id="comment-<?php echo $defined_identity; ?>">
                        <div class="add_comment">
                            <div><div class="commeter_image_add"><img src="<?php echo '../Images/profile-img/profile-image/'.$result; ?>" alt="" class="commeter_add" width=""></div></div>
                            <div class="add_comment_textarea"><textarea name="" id="comment_inputted" cols="30" rows="2" placeholder="add comment.."></textarea></div>
                            <div class="save_comment"><button id="<?php echo $defined_identity; ?>" onclick="save_defined_comment(this)">Save</button></div>
                        </div>

                        <?php 
                        $select_all_comment = "SELECT * FROM user_common_news_comments WHERE news_identity='$defined_identity'";
                        $execute_allcomment = mysqli_query($this->Frequency(), $select_all_comment);
                        while($fetch_all_comment = mysqli_fetch_assoc($execute_allcomment)){ 
                            $commenter_email = $fetch_all_comment['user_email'];
                            $comment_found = $fetch_all_comment['comment'];

                            $selectEchinodermFace = "SELECT profile_image FROM user_profile_image WHERE usr_email='$commenter_email' AND status_image='1'";
                            $executeEchino = mysqli_query($this->Frequency(),$selectEchinodermFace);
                            $fetchResult = mysqli_fetch_assoc($executeEchino);
                                $result = $fetchResult['profile_image']; 
                                
                            $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$commenter_email'";
                            $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                            $fetch_basic= mysqli_fetch_assoc($execute_basic_info);
                                $firstname = $fetch_basic['firstName'];
                                $lastname = $fetch_basic['lastName'];   ?>

                                <div class="each-comment">
                                    <div class="user-image-comment"><div class="img-commenter"><img src="<?php echo '../Images/profile-img/profile-image/'.$result; ?>" alt="" width="100%" height="100%"></div></div>
                                    <div class="comment-found">
                                        <div class="commenter-name"><?php echo $firstname; ?> <?php echo $lastname; ?></div>
                                        <div class="comment-text"><?php echo $comment_found; ?></div>
                                    </div>
                                </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- end each long story -->
                <!-- ==================================================================================================================================================== -->
        <?php
            }
        }

        public function save_news_comment($news_identity, $comment, $user_commeter){
            $created_on = Date("Y-m-d h:m:s");

            $insert_comment_news = "INSERT INTO user_common_news_comments VALUE ('','$user_commeter','$news_identity','$comment','0','$created_on')";
            $execute_comment_news = mysqli_query($this->Frequency(), $insert_comment_news);
        }

    }



    // INITIALIZE CLASS WORLD CONTENT
    // =============================================================================================================================================================================
    // ==============================================================================================================================================================================
    $newControll = new World_content();

    // EACH AND EVRY CONTINET
    // =================================================================================================================================
    if(isset($_POST['continet'])){
        $newControll->Continental_news($_POST['continet'], $_POST['requestNews']);
    }

    // if request is setting profile image
    // ============================================================================================
    if(isset($_POST['getProfileImage'])){
        $newControll->getProfileImage($_POST['getProfileImage']);
    }

    // if request is to save news
    // ===================================================================================================
    if(isset($_POST['submit_chosen_news'])){
        $news_title = $_POST['chosen_title'];
        $news_body = $_POST['chosen_body'];
        $user_email = $_POST['hiddenEmail'];

        $filename = 'IB_News_image'.time().'Box'.'--'.$_FILES['chosen_news']['name'];
        $file_size = $_FILES['chosen_news']['size'];
        $location = "../Images/world-news-img/".$filename;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        $valid_extensions = array("jpg","jpeg","png");

        // check extension
        if($_FILES['chosen_news']['name'] == ""){
            $empty = $_FILES['chosen_news']['name'];
            if($newControll->save_news($user_email, $news_title, $news_body, $empty)){
                header("location: index.php?fail");
                exit();
            }else{
                header("location: index.php?success");
                exit();
            }
        }else{
            if(!in_array(strtolower($imageFileType), $valid_extensions)) {
                header("location: index.php?extentension");
                exit();
            }else{
                if(move_uploaded_file($_FILES['chosen_news']['tmp_name'],$location)){
                    if($newControll->save_news($user_email, $news_title, $news_body, $filename)){
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

    // if request is to display 
    // ===============================================================================================================================================
    if(isset($_POST['user_news'])){
        $newControll->illu_defined_news($_POST['user_news']);
    }

    // if request is to save news comments
    // =======================================================================================================================================================
    if(isset($_POST['getComment_found'])){
        $newControll->save_news_comment($_POST['news_identity'], $_POST['getComment_found'], $_POST['user_email']);
    }

    // if request is to save comment
    // =================================================================================================
    if(isset($_POST['comments_inputted'])){
        $newControll->save_news_comment($_POST['new_id'], $_POST['comments_inputted'], $_POST['userEmail']);
    }

    // if request is to fetch all defined news on small device
    // ====================================================================================================
    if(isset($_POST['user_small'])){
        $newControll->illu_small_device($_POST['user_small']);
    }

     // if request is to save news or small device
    // ===================================================================================================
    if(isset($_POST['submit_secord_form_news'])){
        $news_title = $_POST['new_title'];
        $news_body = $_POST['new_body'];
        $user_email = $_POST['hiddenEmail'];

        $filename = 'IB_News_image'.time().'Box'.'--'.$_FILES['chosen_news']['name'];
        $file_size = $_FILES['chosen_news']['size'];
        $location = "../Images/world-news-img/".$filename;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        $valid_extensions = array("jpg","jpeg","png");

        // check extension
        if(!in_array(strtolower($imageFileType), $valid_extensions)) {
            $response = "Check extentension";
        }else{
            if(move_uploaded_file($_FILES['chosen_news']['tmp_name'],$location)){
                if($newControll->save_news($user_email, $news_title, $news_body, $filename)){
                    echo "success";
                }else{
                    echo "fail to insert";
                }
            }else{
                echo "Fail to move";
            }
        }
    }

?>