<?php 
    session_start();
    if(isset($_SESSION['Email'])){
        $Session_email_call = $_SESSION['Email'];
        $firstName = $_SESSION['Firstname'];
        $lastName = $_SESSION['Lastname'];
        $user_title = $_SESSION['title'];
?><!DOCTYPE html>
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

        <!-- index, used to repesent intelligentBox on search engine and it browser -->
        <title>intelligentBox</title>

        <!-- intelligentBox logo, present on search engine and on browse header -->
        <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon">

        <!-- external style link, type css file-->
        <link rel="stylesheet" href="../Assets/css/profile.box.css">

        <!-- external css file/ libraries -->
        <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
        <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
        <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css">
        <link rel="stylesheet" href="../Lib/animate/animate.min.css">
        <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../Lib/lightbox/css/lightbox.min.css">
        <link rel="stylesheet" href="../Lib/venobox/venobox.css">
        <link rel="stylesheet" href="../Assets/css/pre-loader-image.css">

        <!-- pdf file -->
        <script src="../Lib/Pdf/pdf.js"></script>
        <script src="../Lib/Pdf/pdf.worker.js"></script>
    </head>
    <body class="bg-white">

        <!-- Section that will hold header -->
        <!-- ========================================================================================================== -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- ========================================================================================================== -->    

        <!-- down section -->
        <!-- ========================================================================================================================= -->
        <div class="down-section">
            <div class="profile-container-resizer container">
                <div class="user-profile-section">
                        <!-- GLOBAL JS EMAIL -->
                        <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                        <!-- END GLOBAL EMAIL -->

                        <!-- top profile section -->
                        <!-- ============================================================================================================= -->
                        <div class="top-side-profile position-relative">
                            
                            <!-- top background image -->
                            <!-- ================================================================================================================ -->
                            <div class="user-background-image" id="hold_top_background"></div>
                            <!-- end top background -->
                            <!-- ================================================================================================================= -->


                            <!-- bio section and friend status -->
                            <!-- ================================================================================================================ -->
                            <div class="bio-section">
                                <div></div>
                                <div class="d-flex">
                                    <div class="edit-bio-section">
                                        <div class="edit-bio-btn ml-2 mt-2" data-toggle="tooltip" data-placement="bottom" title="Edit your bio" onclick="editBiography()"><i class="fa fa-edit"></i></div>
                                        
                                        <!-- edit bio -->
                                        <!-- ========================================================================== -->
                                        <div class="edit" id="editBio_user">
                                            <div class="edit-area">
                                                <div class="edit-bio-title position-relative">edit your bio <div class="close_bio_edition" onclick="document.getElementById('editBio_user').style.display = 'none'"><i class="fa fa-times"></i></div></div>
                                                <span id="hold_bio_error"></span>
                                                <div class="edit-textarea mt-2">
                                                    <div class="type-your-bio" id="type-your-bio">
                                                        <input type="hidden" name="user_email" id="email_session" value="<?php echo $Session_email_call; ?>">
                                                        <textarea name="bio" id="user_bio" cols="30" rows="2" placeholder="Type your bio"></textarea>
                                                    </div>
                                                </div>
                                                <div class="user-option-bio d-flex mt-2 justify-content-between">
                                                    <div class="update-btn-bio"><button type="submit" name="submit_bio" onclick="submit_bio(this)">update now</button></div>
                                                    <!-- <div class="feeling-smile"><i class="fa fa-smile-o"></i></div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- edit bio -->
                                        <!-- ================================================================================= -->
                                    </div>
                                    <!-- user bio -->
                                    <!-- ================================================================================================================================== -->
                                    <div class="user-biography" id="getBio" data-toggle="tooltip" data-placement="bottom" title="Click to edit"> </div>
                                    <!-- =================================================================================================================================== -->
                                    <div class="photos ml-2">photos <span id="countPhoto"></span></div>
                                </div>
                            </div>
                            <!-- end bio section -->
                            <!-- ================================================================================================================== -->


                            <!-- profile detail -->
                            <!-- ====================================================================================================================== -->
                            <div class="profile-detail">
                                <div class="user-detail-profile d-flex">
                                    <div class="profile-image-user">
                                        <!-- get profile image -->
                                        <!-- =============================== -->
                                        <span id="getProfileimage"></span>
                                        <!-- ================================ -->

                                        <div class="edit-profile"  data-toggle="tooltip" data-placement="bottom" title="Edit profile image" onclick="openEditSection()"><i class="fa fa-camera-retro"></i></div>
                                        <div class="edit-profile-image" id="edit_profile_image_section">
                                            <div class="profile-image-preview">
                                                <div class="profile-image-title position-relative">preview image for profile <i class="fa fa-times" onclick="document.getElementById('edit_profile_image_section').style.display = 'none'"></i></div>
                                                <div class="preview-image-profile" id="preview-profile">
                                                    <img src="" alt="preview profile image update" id="preview-profile-image" width="100%" height="100%">
                                                </div>
                                                <div class="choose-image-profile">
                                                    <input type="file" name="profileImage" id="profileImageFile" accept="image/png,image/jpg,image/jpeg" style="display: none;">
                                                    <div class="choose-profile-image d-flex justify-content-between">
                                                        <button type="button" onclick="preview_profile_image(this)">choose profile image</button>
                                                        <div class="intelligent_loader mr-3">
                                                            <div class="shape shape-1"></div>
                                                            <div class="shape shape-3"></div>
                                                            <div class="shape shape-4"></div>
                                                        </div>
                                                    </div>
                                                    <div class="update-profile">
                                                        <button type="button" name="submitprofileImage" onclick="submit_profile_image(this)"> update </button>
                                                        <div class="" id="error_found"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- GET PROFILE SHORT DETAIL TP -->
                                    <!-- ======================================================== -->
                                    <div class="user-name-location-email ml-2" id="holdbasicDetail">
                                        
                                    </div>
                                    <!-- ========================================================== -->

                                </div>
                            </div>
                            <!-- end profile detail -->
                            <!-- ================================================================================================================================== -->

                            <!-- setting icons and username-->
                            <!-- ================================================================================================================================== -->
                            <div class="settings">
                                <div class="settings-alignment d-flex">
                                    <div class="user-full-name"> <?php echo $firstName; ?> <?php echo $lastName;  ?></div>
                                    
                                    <!-- settings popup -->
                                    <!-- ======================================================================================================================================= -->
                                    <!-- ================================================================================================================================== -->
                                    <div class="setting-log">
                                        <div class="settings-icons ml-3" onclick="openSetting()"><i class="fa fa-sort-down"></i></div>
                                        <!-- pre defined dropdown -->
                                        <!-- =========================================================================================================================== -->
                                        <div class="pre-defined-setting" id="pre-defined-setting">
                                            <div class="setting-holder">
                                                <!-- settings header -->
                                                <!-- ========================================================================================================================== -->
                                                <div class="settings-header">
                                                    <div class="header-user-detail d-flex">
                                                        <div><div class="user-image-settings" id="user-image-settings">
                                                            
                                                        </div></div>
                                                        <div class="user-detail-settings ml-2">
                                                            <div class="username-settings"><?php echo $firstName; ?> <?php echo $lastName;  ?></div>
                                                            <div class="user-email-settings"><?php echo $Session_email_call; ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end header -->
                                                <!-- ============================================================================================================================= -->

                                                <!-- stsrt body -->
                                                <!-- ============================================================================================================================== -->
                                                <div class="groups">
                                                    <div class="bodysetting" id="load_group">
                                                    
                                                    </div>
                                                </div>
                                                <!-- end body -->
                                                <!-- ===================================================================================================================================== -->

                                                <!-- stsrt body -->
                                                <!-- ============================================================================================================================== -->
                                                <div class="settingsbody">
                                                    <div class="bodysettings">
                                                        <a href="../Group-discusion/Groups.php" class="settings-link"><div class="publicPost d-flex">
                                                            <i class="fa fa-rss mr-2"></i>
                                                            <div>Discover groups</div>
                                                        </div></a>
                                                        <div class="publicPost d-flex" onclick="createGroupSection()">
                                                            <i class="fa fa-plus mr-2"></i>
                                                            <div>create group</div>
                                                        </div>
                                                        <a href="settings.php" class="settings-link"><div class="publicPost d-flex">
                                                            <i class="fa fa-cog mr-2"></i>
                                                            <div>Settings</div>
                                                        </div></a>
                                                        <a href="Signout.box.php" style="color: #071c2e"><div class="challengeSetting d-flex">
                                                            <i class="fa fa-sign-out mr-2"></i>
                                                            <div>log out</div>
                                                        </div></a>
                                                    </div>
                                                </div>
                                                <!-- end body -->
                                                <!-- ===================================================================================================================================== -->

                                                <!-- start feed back -->
                                                <!-- ===================================================================================================================================== -->
                                                <div class="position-relative">
                                                    <div class="feedbacks position-relative">
                                                        <div class="feedback-option d-flex" onclick="open_feedback()">
                                                            <i class="fa fa-exclamation-circle mr-2"></i>
                                                            <div class="option-noticed">
                                                                <div class="btn-feed">feedbacks</div>
                                                                <div class="help">Help us to impove better intelligentbox</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="open_feedback position-relative" id="open_feedback">
                                                        <div class="close_feedback" onclick="document.getElementById('open_feedback').style.display = 'none'"><i class="fa fa-times"></i></div>
                                                        <div class="left-side-user_detail">
                                                            <div class="div_profile_image">
                                                                <div class="user_profile_image_feed ml-auto mr-auto" id="feedback_profile_image"></div>
                                                                <div class="user_detail_fed">
                                                                    <div class="usr_name1"><?php echo $firstName; ?> <?php echo $lastName;  ?></div>
                                                                    <!-- <div class="usr_email1"><?php echo $Session_email_call; ?></div> -->
                                                                    <div class="submit_feedback"><button type="button" onclick="submit_feedback(this)">Resubmit</button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right-side-feedback">
                                                            <div class="add_feedback" id="add_feedback"><textarea name="" id="feedbacks" cols="30" rows="7" placeholder="Your feedback might help...."></textarea></div>
                                                            <div id="error_hide"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end feedback -->
                                                <!-- ====================================================================================================================================== -->

                                                <!-- start footer -->
                                                <!-- ====================================================================================================================================== -->
                                                <div class="settings-footer">
                                                    <div class="about-box">
                                                        <div class="conditions">
                                                            <a href="../About/Privacy.php" style="color: black;"><div>Terms & Condition</div></a>
                                                            <a href="../About/terms_condition.php" style="color: black"><div>Privacy and Safety</div></a>
                                                        </div>
                                                        <div class="Terms_body collapse" id="terms">
                                                                                     
                                                        </div>
                                                        <div class="copyright">intelligentBox <i class="fa fa-copyright"></i> 2020</div>
                                                    </div>
                                                </div>
                                                <!-- end footer -->
                                                <!-- ============================================================================================================================================== -->

                                            </div>
                                        </div>
                                        <!-- end dropdown -->
                                    </div>
                                    <!-- ========================================================================================================================= -->


                                    <!-- edition of background image -->
                                    <!-- ================================================================================================================================== -->
                                    <div class="edit-background-image-section">
                                        <div class="edit-background-image mt-1 ml-3" onclick="openBackgroundEdit()" data-toggle="tooltip" data-placement="bottom" title="Edit background image"><i class="fa fa-camera-retro"></i></div>  
                                        <!-- edit background image -->
                                        <!-- ============================================================ -->
                                        <div class="edit-background" id="edit-background_image">
                                            <div class="image-preview">
                                                <div class="preview-title position-relative">preview image for background <i class="fa fa-times" onclick="document.getElementById('edit-background_image').style.display = 'none'"></i></div>
                                                <span id="holdError"></span>
                                                <div class="preview" id="previewImage">
                                                    <img src="" alt="preview background image updates" id="preview_image" width="100%" height="100%">
                                                </div>
                                                <form enctype="multipart/form-data">
                                                    <div class="choose-image">
                                                        <input type="file" name="backgroundImage" id="profileImage" style="display: none;">
                                                        <div class="update-btn"><button type="button" id="btn_upload" onclick="submit_background_image(this)">update</button></div>
                                                        <div class="choose-file d-flex justify-content-between">
                                                            <button type="button" onclick="previewBackgroundImage(this)">choose image</button>
                                                            <div class="intelligent_loader mr-3">
                                                                <div class="shape shape-1"></div>
                                                                <div class="shape shape-3"></div>
                                                                <div class="shape shape-4"></div>
                                                            </div>
                                                        </div>
                                                        <div class="choose-file" id="error_foud"></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- end background image edit -->
                                        <!-- =================================================================== -->
                                        </div>
                                </div>
                            </div>
                            <!-- end settings icons -->
                            <!-- =========================================================================================================== -->
                        </div>
                        <!-- ============================================================================================================================== -->
                    

                        <!-- down based section -->
                        <!-- ========================================================================================================================================== -->
                        <div class="down-sectio-alignment">
                        <div class="alignment d-flex justify-content-between">
                            <!-- right side of section -->
                            <!-- ======================================================================================================== -->
                            <div class="right-section" style="width: 100%">
                                <?php if($user_title == "student"){?>
                                    <!-- User more infomation setted -->
                                    <!-- ============================================================================================================== -->
                                    <div class="user_setup_profile" id="setup_more_info">
                                        <div></div>
                                    </div>
                                    <!-- ==================================================================================================================== -->
                                <?php }else{?>
                                    <!-- WHEN TITLE IS TRAINER -->
                                    <!-- =========================================================================================================================== -->
                                    <div class="trainer_place mt-4">
                                        <div class="create_class_course">
                                        <div class="create_new_class"> Build new class </div>
                                            <div class="trainer-form" id="trainer-form">
                                                <div class="handle_class">
                                                    <div class="trainer_dash_pre mt-2 ml-2 p-4">
                                                        <i class="fa fa-address-book-o"></i><br>
                                                        <div>Did you know that you can create more classes up 3 class</div>
                                                    </div>
                                                    <form action="class_manipulate.box.php" method="POST" enctype="multipart/form-data" id="submit_form_class">
                                                    <div class="trainer_create_course" id="new_class">
                                                        <div class="create_input_form">
                                                            <div class="create_class_input"><input type="text" name="class_name" id="class_created_name" placeholder="class name..." required></div>
                                                            <div class="create_class_input"><textarea name="class_desc" id="" cols="30" rows="2" placeholder="Class desc..."></textarea></div>
                                                            <div class="create_course_name"><input type="text" name="course_name" id="course_create_name" placeholder="1 Course name..." required></div>
                                                            <div class="create_course_name">
                                                                <select name="select_dep" id="select_department">
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="image_name"></div> 
                                                    </div>
                                                </div>
                                                <div class="start_class d-flex justify-content-around">
                                                    <input type="hidden" name="user_email" value="<?php echo $Session_email_call; ?>">
                                                    <input type="file" name="class_image" id="class_image" style="display: none;">
                                                    <button class="submit_class" type="button" onclick="getClassImage(this)">Choose photo</button>
                                                    <button class="submit_class" id="submit_class" type="submit" name="submit_class">Start class</button>
                                                </div> 
                                                </form>
                                            </div>
                                        </div>

                                        <!-- EACH CLASS WILL BE DISPLAYED HERE -->
                                        <!-- ======================================================================================================= -->
                                        <div class="count_class" id="class_list">
                                        
                                        </div>
                                        <!-- ======================================================================================================== -->

                                    </div>
                                    <!-- ============================================================================================================================ -->
                                <?php } ?>
                                    <!-- create post -->
                                    <!-- ===================================================================================================== -->
                                    <div class="position-relative">
                                        <div class="create-post mt-5">
                                            <div class="create-title">create post</div>
                                            <div class="ask mt-2 mb-2 d-flex justify-content-between">
                                                <div class="">
                                                    <div class="post-create-img" id="post-create-img">
                                                        
                                                    </div>
                                                </div>
                                                <div class="what-going-on ml-2 grobel" onclick="createPost()">What you're about?</div>
                                            </div>
                                            <!-- give user privelege to create post through profile-->
                                            <!-- ================================================== -->
                                            <div class="post-creation" id="post-creation">
                                                <div class="title-post-creation">define your post <i class="fa fa-times" onclick="document.getElementById('post-creation').style.display = 'none'"></i></div>
                                                <span id="hold_post_error"></span>
                                                <div class="create-area-body">
                                                    <div class="image-preview-post">
                                                        <div class="for-image" id="when_photo">
                                                            <img alt="preview post image" class="preview_photo" width="100%" height="100%">
                                                        </div>
                                                    </div>
                                                    <form action="profile_create_post.php" method="POST" enctype="multipart/form-data">
                                                    <div class="caption-area">
                                                        <div class="caption-textarea"><textarea name="user_caption" id="whiteSomething" cols="30" rows="6" placeholder="Write somethings" autocomplete="off"></textarea></div>
                                                    </div>
                                                </div>
                                                <div class="option-creation">
                                                    <div class="choose-option-area">
                                                        <input type="file" name="file_media" id="post_photo" style="display: none;">
                                                        <div class="choose-image-btn"><button type="button" onclick="triggerInputFile_post()"><i class="fa fa-image mr-2"></i> <span class="pre-btn"> choose media </span> </button></div>
                                                    </div>
                                                    <div class="create-post-btn">
                                                        <div class=""><button type="submit" name="submit_file" onclick="getPostLink(this)">create now</button></div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- end privelege -->
                                            <!-- =================================================================== -->

                                            <!-- create more -->
                                            <!-- ===================================================================== -->
                                            <div class="create-more">
                                              
                                                <!-- create autobiography -->
                                                <!-- ========================================================================================== -->
                                                <div class="write-autobio-btn"><button onclick="editAutobio()">Write autobiography</button></div>
                                                <!-- create autobiography field-->
                                                <!-- ========================================================= -->
                                                <div class="create-biography-option" id="create-biography-option">
                                                    <div class="autobiograpy-title position-relative">
                                                        <div class="user-auto-image" id="auto_bio"> </div>
                                                        <div class="ml-2 mt-1">
                                                            <div><?php echo $firstName; ?> <?php echo $lastName;  ?></div>
                                                            <div>autobiography</div>
                                                        </div>
                                                        <div class="close-autobio" onclick="document.getElementById('create-biography-option').style.display = 'none'"><i class="fa fa-times"></i></div>
                                                    </div>
                                                    <div class="option-bio">
                                                        <div class="create-new">
                                                            <div class="option-note">create new autobiography book</div>
                                                            <button onclick="createAutobiography()">create new autobiography</button>
                                                            <!-- by the time use chose this  -->
                                                            <div class="create-new-autobiography" id="create-new-autobiography">
                                                                <div class="create-title-autbio">create autobiography</div>
                                                                <div class="fillout">
                                                                    <div class="autobiography-name">
                                                                        <div class="name-autobio" id="name-autobio"><input type="text" name="" id="AutobioName" placeholder="autobiography name"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="let-create-autobio d-flex justify-content-between">
                                                                    <div>
                                                                        <div class="spiner_autobio ml-2">
                                                                            <div class="shape shape-1"></div>
                                                                            <div class="shape shape-2"></div>
                                                                            <div class="shape shape-3"></div>
                                                                            <div class="shape shape-4"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="create-btn-autobio d-flex justify-content-between">
                                                                        <span></span>
                                                                        <button onclick="create_autobio(this)">create</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end choise -->
                                                        </div>
                                                        <div class="add-to-exist">
                                                            <div class="note">Add content to exist autobiography</div>
                                                            <button onclick="useExistBook()">use existing autobiography</button>
                                                            <div class="list-all-book-exist" id="list-all-book-exist">
                                                                <div class="books-title">current books</div>
                                                                <div class="list-book" id="display_auto_bio">
                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end autobiography -->
                                                <!-- ================================================================================================ -->

                                            </div>
                                        </div>
                                        <!-- end create more section -->
                                        <!-- ===================================================================================================================== -->

                                        <!-- give user privelege to create post through profile-->
                                        <!-- ====================================================================================================================== -->
                                        <div class="post-creation-right-side shadow-sm" id="post-creation-right-side">
                                            <div class="title-post-creation-right">create a post <i class="fa fa-times"></i></div>
                                            <div class="create-area-body-right">
                                                <div class="image-preview-post-right"><i class="fa fa-crop"></i></div>
                                                <div class="caption-area-right">
                                                    <div class="caption-textarea-right"><textarea name="" id="" cols="30" rows="10" placeholder="What you're about?" autocomplete="off"></textarea><i class="fa fa-smile-o ml-2"></i></div>
                                                </div>
                                            </div>

                                            <div class="option-creation-right">
                                                <div class="choose-option-area-right">
                                                    <div class="choose-image-btn-right"><button><i class="fa fa-image mr-2"></i> choose photo</button></div>
                                                    <div class="choose-video-btn-right"><button><i class="fa fa-video-camera mr-2"></i> choose video</button></div>
                                                </div>
                                                <div class="create-post-btn-right">
                                                    <div class=""><button>create now</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end privelege -->
                                        <!-- ============================================================================================== -->
                                    </div>
                                    <!-- end create post -->
                                    <!-- ======================================================================================================================== -->



                                <!-- course , trainer and question -->
                                <!-- ================================================================================================================================== -->
                                <div class="card-trainer-question">
                                    <div class="card-user-status">
                                        <div class="card-title-content">
                                            <ul class="nav" role="tablist">
                                                <li class="nav-item-box">
                                                    <a class="nav-link-box active" data-toggle="tab" href="#courses" role="tab">
                                                        <div><i class="fa fa-graduation-cap"></i> My Classes</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item-box">
                                                    <a class="nav-link-box" data-toggle="tab" href="#trainer" role="tab">
                                                        <div><i class="fa fa-tv"></i> Instructor</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body-content">
                                            
                                            <!-- Tab panes -->
                                            <!-- ===================================================================================== -->
                                            <!-- ===================================================================================== -->
                                            <div class="tab-content position-relative">

                                                <!-- my course -->
                                                <!-- ================================================================================================= -->
                                                <!-- ================================================================================================= -->
                                                <div class="tab-pane active" id="courses" role="tabpanel">
                                                    <div class="current-followed-course" id="load_courses_dep">
                                                        <div class="container-spnner">
                                                            <div class="shape shape-1"></div>
                                                            <div class="shape shape-2"></div>
                                                            <div class="shape shape-3"></div>
                                                            <div class="shape shape-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end my courses -->
                                                <!-- ========================================================================================================= -->
                                                <!-- ========================================================================================================== -->

                                                <!-- my trainer -->
                                                <!-- ============================================================================================================ -->
                                                <!-- ============================================================================================================ -->
                                                <div class="tab-pane question-area-rolls" id="trainer" role="tabpanel">
                                                    <div class="my-trainer" id="holder_my_trainer">
                                                        <div class="container-spnner">
                                                            <div class="shape shape-1"></div>
                                                            <div class="shape shape-2"></div>
                                                            <div class="shape shape-3"></div>
                                                            <div class="shape shape-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end my trainer -->
                                                <!-- ===================================================================================================================================== -->
                                                <!-- ===================================================================================================================================== -->

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- End Tabs course,trainer and question -->
                                <!-- ================================================================================================================== -->


                                <?php if($user_title == "student"){?>
                                    <!-- new more course  -->
                                    <!-- ============================================================================================================================ -->
                                    <div class="course-holder">
                                        <div class="course-list">
                                            <div class="courses-title mb-2">more states/Classes</div>
                                            <div id="usr_class">
                                                <div class="container-spnner">
                                                    <div class="shape shape-1"></div>
                                                    <div class="shape shape-2"></div>
                                                    <div class="shape shape-3"></div>
                                                    <div class="shape shape-4"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end new more courses -->
                                    <!-- ======================================================================================================================= -->
                                <?php } ?>

                                <!-- current posted -->
                                <!-- ========================================================================================================================= -->
                                <div class="card-posted">
                                    <!-- Tabs with Background on Card -->
                                    <div class="card-user-status">
                                        <div class="card-title-content">
                                            <ul class="nav" role="tablist">
                                                <li class="nav-item-box">
                                                    <a class="nav-link-box active" data-toggle="tab" href="#home1" role="tab"><i class="fa fa-tree mr-2"></i>Current posts </a>
                                                </li>
                                                <li class="nav-item-box">
                                                    <a class="nav-link-box" data-toggle="tab" href="#profile1" role="tab"><i class="fa fa-calendar-o"></i> Last updates</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body-content">
                                            <!-- Tab panes -->
                                            <div class="tab-content">

                                                <!-- tab for profile image posted before -->
                                                <!-- ================================================================================================================ -->
                                                <div class="tab-pane active" id="home1" role="tabpanel">
                                                    <div class="holder" id="hold_last_post">
                                                        <div class="container-spnner">
                                                            <div class="shape shape-1"></div>
                                                            <div class="shape shape-2"></div>
                                                            <div class="shape shape-3"></div>
                                                            <div class="shape shape-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ================================================================================================================== -->

                                                <!-- post shared before -->
                                                <!-- ================================================================================================================== -->
                                                <div class="tab-pane" id="profile1" role="tabpanel">
                                                    <div class="profile-posted-holder" id="hold_profile_image_post">
                                                        <div class="container-spnner">
                                                            <div class="shape shape-1"></div>
                                                            <div class="shape shape-2"></div>
                                                            <div class="shape shape-3"></div>
                                                            <div class="shape shape-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ================================================================================= -->
                                                
                                            </div>
                                        </div>
                                    </div>
                                <!-- =================================================================================================== -->

                                </div>
                                <!-- end current posted -->
                            </div>
                            <!-- ============================================================================================================== -->


                            <!-- right side of section -->
                            <!-- =========================================================================================================================== -->
                            <div class="left-section position-relative" style="width: 100%">

                                <!-- question and answers -->
                                <!-- ================================================================================================================== -->
                                <div class="questions_answer_status mt-3 ml-3 mr-3">
                                    <div class="take_look_btn">
                                        <a href="../Questions&Answers/">
                                            <button> 
                                                <div>Recieved Questions (<span id="count_recieved_question"></span>), Show room</div>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="take_look_btn">
                                        <a href="../Course/"><button><i class="fa fa-plus"></i> Discover more courses</button></a>
                                    </div>
                                </div>
                                <!-- question and answer -->
                                <!-- ================================================================================================================== -->


                                <!-- all group i've joined -->
                                <!-- =========================================================================================================== -->
                                <div id="all_group_joined">
                         
                                </div>
                                <!-- =================================================================================================================== -->

                                <!-- course user may like next -->
                                <!-- =========================================================================================================================================== -->
                                <div class="user-friend mt-3">
                                    <div class="label_tab"><i class="fa fa-graduation-cap mr-2"></i> Learn more about </div>
                                    <div class="friend-list mt-2" id="separtment_list">
                                        <div class="container-spnner">
                                            <div class="shape shape-1"></div>
                                            <div class="shape shape-2"></div>
                                            <div class="shape shape-3"></div>
                                            <div class="shape shape-4"></div>
                                        </div>
                                    </div>
                                    <!-- end usr list -->
                                    <!-- ====================================================================================================================================== -->
                                </div>
                                <!-- end section --> 
                                <!-- ======================================================================================================================================== -->

                                <!-- gallery section -->
                                <!-- =========================================================================================================================================== -->
                                <div class="user-friend">
                                    <div class="label_tab">My Photos </div>
                                    <div class="galleries-list mt-2" id="get_all_photos">                                       
                                        <div class="container-spnner">
                                            <div class="shape shape-1"></div>
                                            <div class="shape shape-2"></div>
                                            <div class="shape shape-3"></div>
                                            <div class="shape shape-4"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end gallery section -->
                                <!-- ================================================================================================================================================= -->

                                
                                <!-- nearby learner -->
                                <!-- ================================================================================================================================================== -->
                                <div class="about-supporter">
                                    <div class="user-friend">
                                        <div class="label_tab"> <i class="fa fa-connectdevelop mr-2"></i> Follow More </div>
                                        <span id="follow_error"></span>
                                        <div class="friend-list mt-2" id="friendList">
                                            <div class="container-spnner">
                                                <div class="shape shape-1"></div>
                                                <div class="shape shape-2"></div>
                                                <div class="shape shape-3"></div>
                                                <div class="shape shape-4"></div>
                                            </div>  

                                        </div>
                                        <!-- end list -->
                                        <!-- ======================================================================================================================================================= -->
                                    </div>
                                </div>
                                <!-- end nearby learner -->
                                <!-- ==================================================================================================================================================================== -->

                                <!-- shared content -->
                                <!-- ================================================================================================================================================== -->
                                <div class="about-supporter">
                                    <div class="user-friend">
                                        <div class="top_nav_shared">
                                            <ul class="nav d-flex justify-content-between" role="tablist">
                                                <li><a class="active" data-toggle="tab" href="#shared_notes_files" role="tab">
                                                    <div class="shared_content_link">Shared Notes</div> 
                                                </a></li>
                                                <li><a class="" data-toggle="tab" href="#shared_image_files" role="tab">
                                                    <div class="shared_content_link">Shared Images</div>
                                                </a></li>
                                                <li><a class="" data-toggle="tab" href="#shared_something" role="tab">
                                                    <div class="shared_content_link"><i class="fa fa-share-alt"></i> Share</div>
                                                </a></li>
                                            </ul>
                                        </div>
                                        <div class="friend-list_files mt-2">
                                            <div class="tab-content">
                                                <div class="tab-pane active shared_notes" role="tabpanel" id="shared_notes_files">
                                                
                                                </div>
                                                <div class="tab-pane shared_images" role="tabpanel" id="shared_image_files">
                                                   
                                                </div>
                                                <div class="tab-pane shared_notes" role="tabpanel" id="shared_something">
                                                    <div class="chose_user" id="chose_user_main">
                                                        <div class="notice_user"><i class="fa fa-share-square-o"></i> Choose one person to share </div>
                                                        <div class="chose_user_btn" id="chose_user_btn" onclick="hold_input_form()"><i class="fa fa-plus"></i> Choose</div>
                                                    </div>
                                                    <div class="hold_input_shared" id="hold_input_shared">
                                                        
                                                    </div>
                                                    <div class="chosen_list" id="chosen_list">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end shared content -->
                                <!-- ==================================================================================================================================================================== -->

                                <!-- new trainer -->
                                <!-- ====================================================================================================================================================================== -->
                                <div class="user-friend">
                                    <div class="label_tab"> Follow More trainers </div>
                                    <div class="friend-list-trainer mt-2" id="getMoreTrainer">
                                        <div class="container-spnner">
                                            <div class="shape shape-1"></div>
                                            <div class="shape shape-2"></div>
                                            <div class="shape shape-3"></div>
                                            <div class="shape shape-4"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end new trainer -->
                                <!-- ================================================================================================================================================== -->

                            </div>
                        </div>
                        <!-- eand allignment -->
                        <!-- =========================================================================================================================== -->
                        
                    </div>
                    <!-- end down sectio -->
                    <!-- ================================================================================================================ -->


                    <!-- ******************************************************************************************************************************************** -->
                    <!-- extra divition on page -->
                    <!-- write autobiography -->
                    <!-- ============================================================================================================================================ -->
                    <div class="write-autobiography shadow-lg" id="autoBioEditor">
                        <div class="write-autobiography-section">
                            <div class="autobiography-title">
                                <div><div class="my-image" id="profile_image_on_editor"> </div></div>
                                <div class="path ml-2">
                                    <div><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                                    <div class="d-flex"><i class="fa fa-book mr-2"></i> <span id="load-autobio-name">first day in super market</span></div>
                                    <div class="d-flex edit-current">
                                        <i class="fa fa-pagelines mr-2 mt-1"></i> 
                                        <input type="text" value="mr mukeshimana and me">
                                    </div>
                                </div>
                                <div class="close-autobio"><i class="fa fa-times"></i></div>
                            </div>
                            <div class="autobiography-type">
                                <div class="textarea-typer"><textarea name="content" id="" cols="30" rows="10"></textarea></div>
                            </div>
                            <div class="autobiography-footer">
                                <!-- <div class="add-image"><button>add image</button></div> -->
                                <div class="d-flex">
                                    <div class="save"><button><i class="fa fa-save mr-2"></i> save</button></div>
                                    <div class="save-close"><button><i class="fa fa-close mr-2"></i> save and close</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end writting -->
                    <!-- ============================================================================================================================================= -->
                    <!-- ********************************************************************************************************************************************* -->


                    <!-- ****************************************************************************************************************************************************** -->
                    <!-- create group -->
                    <!-- ======================================================================================================================================================== -->
                    <div class="create-group-section" id="create-group-section">
                        <div class="seg-group">
                            <div class="title-group-creation">
                                <div class="user-pre-image"><div class="preImage" id="create_group_profile_image"> </div></div>
                                <div class="user-detail-creation-group">
                                    <div><?php echo $Session_email_call; ?></div>
                                    <div><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                                </div>
                                <div class="close-group-creation" onclick="document.getElementById('create-group-section').style.display = 'none'"><i class="fa fa-times"></i></div>
                            </div>
                            <form action="Create_group.php" method="POST" id="create_group_form" enctype="multipart/form-data">
                                <div class="dwon-section-group-creation">
                                    <div class="image-preview-group" id="image-preview-group"><img src="" alt="prview group background image" width="100%" height="100%" id="preview_grou_img"></div>
                                    <div class="important-detail-group">
                                        <div class="groupName-input" id="groupName-input"><input type="text" name="group_name" id="group_name" placeholder="Group name..." autocomplete="off"></div>
                                        <div class="group-bio-desc mt-2">
                                            <div class="textarea-bio-group" id="textarea-bio-group"><textarea name="group_bio" id="group_bio" cols="30" rows="5" placeholder="Group bio..." autocomplete="off"></textarea></div>
                                        </div>
                                        <div class="who-can-join">
                                            <div class="present-option">Group Privacy</div>
                                            <div class="option-join">
                                                <div class="everyone"><input type="radio" name="group_section" id="" value="Public" checked> <span>Public</span></div>
                                                <div class="my-friends"><input type="radio" name="group_section" id="" value="Private"> <span>Private</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="create-group-btn mt-2">
                                    <input type="hidden" name="creater_email" value="<?php echo $Session_email_call; ?>">
                                    <input type="file" name="group_image" id="group_image" style="display: none;">
                                    <div class="choose-image-btn-group"><button type="button" onclick="trigger_group_image()">choose group photo</button></div>
                                    <div class="create-btn-group"><button type="button" name="submit_group" onclick="upload_group(this)">create group</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end create group -->
                    <!-- ===================================================================================================================================== -->
                    <!-- ************************************************************************************************************************************* -->

                </div>
            </div>
        </div>
        <!-- end down section -->
        <!-- ========================================================================================================================================================= -->
        <!-- ********************************************************************************************************************************************************* -->

        <!-- INITIALIZE MESSAGE BTN AND IT ACCESSORIE -->
        <!-- *********************************************** -->
        <?php require_once ("../header/message.php"); ?>
        <!-- *********************************************** -->

        <!-- ERROR HANDLING -->
        <!-- ======================================================================================================================================================== -->
        <?php if(isset($_REQUEST['extension'])){?>
            <div class="Display_error">
                <div class="error-icon"><i class="fa fa-exclamation-triangle"></i></div>
                <div class="check-word_error"> Check file extension and try again </div>
            </div>
        <?php }else if(isset($_REQUEST['success'])){?>
            <div class="Display_error">
                <div class="error-icon"><i class="fa fa-check"></i></div>
                <div class="check-word_error"> Post successfully applied </div>
            </div>
        <?php }else if(isset($_REQUEST['fail'])){?>
            <div class="Display_error">
                <div class="error-icon"><i class="fa fa-times"></i></div>
                <div class="check-word_error"> Fail to upload your post, try again </div>
            </div>
        <?php }else if(isset($_REQUEST['move_fail'])){?>
            <div class="Display_error">
                <div class="error-icon"><i class="fa fa-times"></i></div>
                <div class="check-word_error"> Save uploaded file fail, try another </div>
            </div>
        <?php }else if(isset($_REQUEST['file_size'])){?>
            <div class="Display_error">
                <div class="error-icon"><i class="fa fa-times"></i></div>
                <div class="check-word_error"> Too large file, try another </div>
            </div>
        <?php } ?>
        <!-- ========================================================================================================================================================= -->
    
        <!-- javascript external file, type js  and libraries-->
        <!-- ================================================ -->
        <!-- ======================================================== -->
        <script src="../Assets/js/profile.openPopUp.box.js"></script>
        <script src="../Assets/js/video_controll.box.js"></script>
        <script src="../Assets/js/profile.load.data.js"></script>
        <script src="../Assets/js/profile_updates.js"></script>
        <script src="../Assets/js/show_profile_content.js"></script>
        <script src="../Assets/js/profile_create_post.js"></script>
        <script src="../Assets/js/Autobiography.box.js"></script>
        <script src="../Assets/js/create_group.box.js"></script>

        <script src="../Lib/ckeditor/ckeditor.js"></script>
        <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="../Lib/bootstrap/js/bootstrap-datepicker.js"></script> 
        <script src="../Lib/easing/easing.min.js"></script>
        <script src="../Lib/jquery/jquery.min.js"></script>
        <script src="../Lib/lightbox/js/lightbox-plus-jquery.min.js"></script>
        <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
        <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
        <script src="../Lib/venobox/venobox.js"></script>
        <script src="../Lib/wow/wow.min.js"></script>
        <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
        <script>
            $(document).ready(function() {
            //init DateTimePickers
            md.initFormExtendedDatetimepickers();
            });
        </script> 
        <script>
            $(document).ready(function() {
                // the body of this function is in assets/js/now-ui-kit.js
                nowuiKit.initSliders();
            });
            // Initiate the wowjs animation library
            new WOW().init();
        </script>
        <script>
            CKEDITOR.replace('content');
        </script>
        <!-- =================================================================================================================================== -->

    </body>
    </html>
<?php }else{
    header("Location: ../account_shortcut.box.php");
    exit();
}?>