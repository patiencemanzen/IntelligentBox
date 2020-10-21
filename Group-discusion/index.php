<?php 
  session_start(); 
  if(isset($_SESSION['Email'])){
    $Session_email_call = $_SESSION['Email'];
    $firstName = $_SESSION['Firstname'];
    $lastName = $_SESSION['Lastname'];
    $user_title = $_SESSION['title']; 

    // INITIALIZE DATABASE CONNECTION
    // =====================================================================================================
    require_once ("../Scyllar.php");
    // =====================================================================================================

  
    // CHECK IF URL GROUP SETTED
    // =====================================================================================================================================================
    if(isset($_REQUEST['group'])){

        $url_encode = $_REQUEST['group'];
        $new_connection = new Scyllar();
        $group_ide = $_REQUEST['group_id'];

        if($_REQUEST['group_member_ver'] == $Session_email_call){
            $check_user_exist = "SELECT * FROM user_group_member WHERE User_email='$Session_email_call' AND group_identity='$group_ide'";
            $execute_exist = mysqli_query($new_connection->Frequency(), $check_user_exist);
            if(mysqli_num_rows($execute_exist) > 0){
                $select_group_info = "SELECT * FROM user_groups WHERE url_encode='$url_encode'";
                $execute_group_info = mysqli_query($new_connection->Frequency(), $select_group_info);
                $fetch_info = mysqli_fetch_assoc($execute_group_info);
                    $group_image = $fetch_info['group_profile_image'];
                    $group_name = $fetch_info['group_name'];
                    $group_bio = $fetch_info['group_bio'];
                    $group_privacy = $fetch_info['group_privacy'];
                    $creater = $fetch_info['email']; 
                    $creater_firstname = $fetch_info['firstName'];
                    $creater_lastname = $fetch_info['lastName'];  
                    $group_identity = $fetch_info['identity']; 

                    
                    $Trainer = 0;
                    $selectTrainer = "SELECT * FROM user_group_member WHERE group_identity='$group_identity'";
                    $executeTrainer = mysqli_query($new_connection->Frequency(),$selectTrainer);
                    while($fetchTrainer = mysqli_fetch_assoc($executeTrainer)){
                        $Trainer = $Trainer + 1;
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

       <title>intelligentBox</title>

       <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon">
       <link rel="stylesheet" href="../Assets/css/group_discusion.box.css">

       <!-- external css file/ libraries -->
       <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
       <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
   </head>
   <body class="bg-white">
    <?php 
        // INTERFACE CALLED GROUP_PAGE
        // ======================================================================================================
        interface Discussion_page {
            public function creater_image ($E_mail);
        }

        // CLASS CONTAIN ALL METHORD OF THIS PAGE
        // ======================================================================================================
        class Group_discussion extends Scyllar implements Discussion_page {
            // select creater profile image
            // ==================================================================================================
            public function creater_image($email){
                $select_profile_image = "SELECT * FROM user_profile_image WHERE usr_email='$email'";
                $execute_profile_image = mysqli_query($this->Frequency(), $select_profile_image);
                $fetch_profile_image = mysqli_fetch_assoc($execute_profile_image);
                    $profile_image =  $fetch_profile_image['profile_image'];
                return $profile_image;
            }
        } ?>

        <!-- Section that will hold header -->
        <!-- ============================================================================================================================== -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- =============================================================================================================================== -->

        <div class="down-section">

            <!-- GLOBAL JS EMAIL -->
            <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
            <input type="hidden" name="" id="hiddenIdentity" value="<?php echo $group_identity; ?>">
            <!-- END GLOBAL EMAIL -->

            <!-- start main section -->
            <!-- ============================================================================================================================================== -->
            <div class="main-section position-relative">

                <!-- right side section -->
                <!-- ========================================================================================================================================================== -->
                <div class="right-side">

                    <!-- create your own post -->
                    <!-- ========================================================================================================================================================== -->
                    <div class="position-relative">
                        <div class="create-short-story mt-3">
                            <div class="title-short-story"><i class="fa fa-share-alt"></i> Share what you think!</div>
                            <div class="user-typer d-flex">
                                <div><div class="user-image" id="poster_image">
                                    
                                </div></div>
                                <div class="usr-textarea">
                                    <div class="type-something">
                                        <div onclick="createPost(this)">Share something!</div>
                                    </div>
                                    <!-- end popup discoevry -->
                                    <!-- ================================================================================================================================ -->

                                </div>
                                <!-- end top popup discovry -->
                                <!-- ================================================================================================================================================================================= -->
                                <!-- ================================================================================================================================================================================= -->

                            </div>
                        </div>
                        <!-- give user privelege of creattion of story -->
                        <!-- ===================================================== -->
                        <div class="create-story-prive" id="create-post">
                            <div class="section-title">
                                <div>Define your post</div>
                                <div class="close-post-creation" onclick="this.parentNode.parentNode.style.display = 'none'"><i class="fa fa-times"></i></div>
                            </div>
                            <div class="create-area">
                                <div class="image-story-preview">
                                    <div class="for-image" id="when_photo">
                                        <img src="" class="preview_photo" alt="" width="100%" height="100%">
                                    </div>
                                </div>
                                <form action="group_discussion_posts.php" method="POST" enctype="multipart/form-data">
                                <div class="create-body-title">
                                    <div class="story-body">
                                        <div class="create-story-body">
                                            <textarea name="user_caption" id="" cols="30" placeholder="What going on there?" autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sectio-footer">
                                <input type="hidden" name="group_name" value="<?php echo  $group_name; ?>">
                                <input type="hidden" name="group_identity" value="<?php echo $group_identity; ?>">
                                <input type="hidden" name="url_code" value="<?php echo $url_encode; ?>">
                                <input type="file" name="file_media" id="group_posts" style="display: none;">
                                <div class="choose-image-story"><button type="button" onclick="triggerInputFile_post(this)"><i class="fa fa-photo"></i> choose image file</button></div>
                                <div class="send-post">
                                    <button name="submit_file_disc" type="submit_posts">create Now</button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <!-- ================================================================================================================================== -->
                    </div>
                    <!-- ============================================================================================================================================== -->

                    <!-- new more trainer -->
                    <!-- =============================================================================================================================================== -->
                    <div class="top-learner mt-4">
                        <div class="friends-title">
                            <div class="title-learner">Active member(s)</div>
                        </div>
                        <div class="learners-list" id="active_members">

                        </div>
                    </div>
                    <!-- =============================================================================================================================================== -->

                    <!-- GROUP MEDIA -->
                    <!-- =============================================================================================================================================== -->
                    <div class="group-gallery">
                        <div class="media-title">Media</div>
                        <div class="medias">
                            <div class="sort-images" id="posted-images">

                            </div>
                        </div>
                    </div>
                    <!-- =============================================================================================================================================== -->
                    
                </div>
                <!-- =================================================================================================================================================== -->

                <!-- SHARED POSTS AND TOP BACKGROUND -->
                <!-- =================================================================================================================================================== -->
                <div class="shared-content">
                    <!-- top-background img -->
                    <!-- ========================================================================================================================= -->
                    <div class="background-top-image">
                        <div class="group-name"><?php echo $group_name; ?></div>
                        <div class="top-pre-background-image"><img src="<?php echo '../Images/groups/'.$group_image; ?>" alt="" width="100%" height="100%"></div>

                        <!-- all member images -->
                        <!-- ============================================================================================================================== -->
                        <div class="group-member">
                            <div class="friends-cover position-relative" id="most_used"> </div>

                            <!-- all group detail -->
                            <!-- ================================================================================================================================ -->
                            <div class="group-detail">
                                <div class="detail"><span class="pre-accu">trainer</span> <span><?php echo $Trainer; ?></span></div>
                                <div class="search-member d-flex">
                                    <i class="fa fa-search "></i>
                                    <input type="text" name="" id="search_member" class="search" placeholder="seach member with email.." autocomplete="off" onkeyup="openResult()">
                                    <div class="searched-result" id="searched-results">
                                        <div class="list-result" id="result_search">
                                            
                                        </div>
                                    </div>
                                </div>

                                <!-- popup discovery -->
                                <!-- ============================================================================================================================================ -->
                                <div class="position-relative">
                                    <div onclick="document.getElementById('discover').style.display = 'block'"><button class="invite-friend"><i class="fa fa-plus mr-1"></i>Invite People</button></div>

                                    <!-- popup disocver section -->
                                    <!-- ================================================================================================================================================== -->
                                    <div class="settings-and-info" id="discover">
                                        <div class="settings-pre">
                                            Invite your friends to join
                                            <i onclick="document.getElementById('discover').style.display = 'none'" class="fa fa-times"></i>
                                        </div>
                                        <div class="setting-list">

                                            <!-- each discovery holder -->
                                            <!-- =================================================================================================================== -->
                                            <div class="each-setting">
                                                <div class="title-settings">Students</div>
                                                <div class="reply-setting" id="discover-student">

                                                </div>
                                            </div>
                                            <!-- end discovery holder -->
                                            <!-- ===================================================================================================================================== -->
                                        
                                            <!-- discver trainers -->
                                            <!-- ============================================================================================================================================= -->
                                            <div class="each-setting">
                                                <div class="title-settings">Trainers</div>
                                                <div class="reply-setting" id="discover-trainer">

                                                </div>
                                            </div>
                                            <!-- ================================================================================================================================================================ -->
                                            
                                        </div>
                                    </div>
                                    <!-- ================================================================================================================================ -->
                                </div>
                                <!-- ================================================================================================================================================================================= -->
                            </div>
                            <!-- ============================================================================================================================ -->


                            <!-- APPLY ON SMALL DEVICE -->
                            <!-- ============================================================================================================== -->
                            <div class="small-dev">
                                <div class="align-justify" onclick="openNav()"><i class="fa fa-align-justify"></i></div>

                                <!-- sidenav -->
                                <!-- ==================================================================================== -->
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                    <div class="detailed d-flex ml-2 mr-2">
                                        <i class="fa fa-search mr-2"></i>
                                        <input type="text" name="" id="search_small_member" class="search" placeholder="seach member.." autocomplete="off" onkeyup="openResult_small()">
                                        <div class="searched-result shadow-sm" id="searched-result">
                                            <div class="list-result">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="about-desc ml-2 mr-2 mt-4">
                                        <div class="about-title">About</div>
                                        <div class="group-bio" id="group_bio_device"></div>
                                    </div>
                                    <div class="about-desc ml-2 mr-2">
                                        <div class="about-title">Short Info</div>
                                        <div class="group-bio" id="short_desc_device">
                                            
                                        </div>
                                    </div>

                                    <!-- rights-de on small device -->
                                    <div class="right-side-holder">

                                        <!-- create your own post -->
                                        <!-- ========================================================================================================================================================== -->
                                        <div class="position-relative ml-2 mr-2">
                                            <div class="create-short-story mt-3 shadow-sm">
                                                <div class="title-short-story"><i class="fa fa-share-alt"></i> Share what you think!</div>
                                                <div class="user-typer d-flex">
                                                    <div><div class="user-image"> </div></div>
                                                    <div class="usr-textarea ml-2">
                                                        <div class="type-something">
                                                            <div onclick="createPost(this)">Write something!</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- give user privelege of creattion of story -->
                                            <!-- ===================================================== -->
                                            <div class="create-story-prive" id="create-post">
                                                <div class="section-title">
                                                    <div><i class="fa fa-share-alt"></i> Share what you think!</div>
                                                    <div class="close-post-creation" onclick="this.parentNode.parentNode.style.display = 'none'"><i class="fa fa-times"></i></div>
                                                </div>
                                                <form action="group_discussion_posts.php" method="POST" enctype="multipart/form-data">
                                                    <div class="create-area">
                                                        <div class="image-story-preview">
                                                            <div class="for-image" id="when_photo_small">
                                                                <img src="" class="preview_photo_small" alt="" width="100%" height="100%">
                                                            </div>
                                                        </div>
                                                        <div class="create-body-title">
                                                            <div class="story-body">
                                                                <div class="create-story-body">
                                                                    <textarea name="user_caption" id="" rows="5" cols="30" placeholder="What going on there?" autocomplete="off"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sectio-footer">
                                                        <input type="hidden" name="group_name" value="<?php echo  $group_name; ?>">
                                                        <input type="hidden" name="group_identity" value="<?php echo $group_identity; ?>">
                                                        <input type="hidden" name="url_code" value="<?php echo $url_encode; ?>">
                                                        <input type="file" name="file_media" id="group_posts_small" style="display: none;">
                                                        <div class="choose-image-story"><button type="button" onclick="triggerInputFile_post_small(this)">choose image file</button></div>
                                                        <div class="send-post">
                                                            <button name="submit_file" type="submit">create</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- end privellege -->
                                            <!-- ================================================================================================================================== -->
                                        </div>
                                        <!-- end post creation-->
                                        <!-- ============================================================================================================================================== -->

                                        <!-- new more trainer -->
                                        <!-- ========================================================================================================================================================== -->
                                        <div class="top-learner mt-3 ml-2 mr-2">
                                            <div class="friends-title">
                                                <div class="title-learner">Active members(s)</div>
                                            </div>
                                            <div class="learners-list" id="load_active">
                                            
                                            </div>
                                        </div>
                                        <!-- ========================================================================================================================================================== -->
                                        
                                    </div>

                                </div> 
                            </div>
                            <!-- end small device -->
                            <!-- ================================================================================================================ -->

                        </div>
                        <!-- =============================================================================================================================== -->

                    </div>
                    <!-- end top background image -->
                    <!-- ========================================================================================================================== -->

                    <!-- left side section -->
                    <!-- ============================================================================================================================================ -->
                    <div class="left-side">
                        <!-- post shared -->
                        <!-- ===================================================================================================================================== -->
                        <div class="post-shared">
                            <div class="post-list">
                                <div id="hold_last_post">

                                </div>
                            </div>
                        </div>
                        <!-- ===================================================================================================================================================== -->
                        
                        <!-- ABOUT GROUP -->
                        <!-- ========================================================================================================================================================= -->
                        <div class="about-group">

                            <div class="about-desc">
                                <div class="about-title"><i class="fa fa-info mr-2"></i> About</div>
                                <div class="group-bio" id="group_bio"></div>
                                <div class="about-title mt-3"><i class="fa fa-globe"></i> Public group</div>
                            </div>
                            <div class="about-desc">
                                <div class="about-title"><i class="fa fa-desktop"></i> Short Info</div>
                                <div class="group-bio" id="short_desc">
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- ========================================================================================================================================================== -->

                </div>
                <!-- =========================================================================================================================================================== -->
            </div>
            <!-- =============================================================================================================================== -->

        </div>
        <!-- ========================================================================================================================================= -->
    
        <!-- ERROR HANDLING -->
        <!-- ======================================================================================================================================================== -->
        <?php if(isset($_REQUEST['msg']) == "extentension"){?>
            <div class="Display_error">
                <div class="error-icon"><i class="fa fa-exclamation-triangle"></i></div>
                <div class="check-word_error"> Check file extension and try again </div>
            </div>
        <?php }else if(isset($_REQUEST['msg']) ==  "success"){?>
            <div class="Display_error">
                <div class="error-icon"><i class="fa fa-check"></i></div>
                <div class="check-word_error"> Post successfully applied </div>
            </div>
        <?php }else if(isset($_REQUEST['msg']) == "fail"){?>
            <div class="Display_error">
                <div class="error-icon"><i class="fa fa-times"></i></div>
                <div class="check-word_error"> Fail to upload your post, try again </div>
            </div>
        <?php }else if(isset($_REQUEST['msg']) == "move_fail"){?>
            <div class="Display_error">
                <div class="error-icon"><i class="fa fa-times"></i></div>
                <div class="check-word_error"> Save uploaded file fail, try another </div>
            </div>
        <?php }else if(isset($_REQUEST['msg']) == "size"){?>
            <div class="Display_error">
                <div class="error-icon"><i class="fa fa-times"></i></div>
                <div class="check-word_error"> Too large file, try another </div>
            </div>
        <?php } ?>

        <!-- when it come to group challenge page redirection -->
        <!-- ======================================================================================================== -->
        <div class="div_challenges_hold d-flex flex-column" id="challenges_holder">
            
        </div>
        <!-- ======================================================================================================== -->

            
    
        <!-- javascript external file, type js  and libraries-->
        <!-- ======================================================== -->
        <script src="../Assets/js/group_discusion.popup.box.js"></script>
        <script src="../Assets/js/video_controll.box.js"></script>
        <script src="../Assets/js/group_disc_posts.box.js"></script>

        <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="../Lib/jquery/jquery.min.js"></script>
        <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
        <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
        <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
        <!-- ================================================================================================================================== -->
    </body>
</html>
<?php  
        }else{ ?>
      <div class="Authorize">Unauthorized way, Why most people like be in the way they don't suppose to be!, <a href="Groups.php?joinmore">How can we help you</a></div>
    <?php }
    } else{ ?>
        <div class="Authorize">Unauthorized user, <a href="Groups.php?joinmore">Help me now!</a></div>
    <?php }
}else{?>
<div class="Authorize">Unauthorized way, <a href="Groups.php?joinmore">Help me now!</a></div>
<?php }
  }else{
    header("Location: ../account_shortcut.box.php");
    exit();
  }
?>