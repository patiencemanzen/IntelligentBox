<!-- 
	//////////////////////////////////////////////////////

    INTELLIGENT BOX
    DESIGNED & DEVELOPED by Manirabona Patience
    
    author: Mnirabona Patience,
    Email:  Hseal419@gmail.com,
    location: Kigali,Rwanda,
    pro: Intelligent Box E-learning,
    version: 1.0.0
    
	//////////////////////////////////////////////////////
-->
<?php 
  session_start();
  if(isset($_SESSION['Email'])){
      $Session_email_call = $_SESSION['Email'];
      $firstName = $_SESSION['Firstname'];
      $lastName = $_SESSION['Lastname'];
      $user_title = $_SESSION['title'];

      if(isset($_REQUEST['challenge'])){
          $challenge_url = $_REQUEST['challenge'];
          require_once ("../Scyllar.php");
          $new_connection = new Scyllar();

        // get both groups url code
        // ================================================================================================  
          $select_challenges = "SELECT * FROM user_challenge WHERE challenge_url='$challenge_url'";
          $execute_challenge = mysqli_query($new_connection->Frequency(), $select_challenges);
          $fetch_challenges = mysqli_fetch_assoc($execute_challenge);
              $fetch_challenger_url = $fetch_challenges['host_user_identity'];
              $fetch_defender_url = $fetch_challenges['defender_user_identity'];

        //   get challenger profile image
        // ==============================================================================================
          $select_challenger = "SELECT * from user_groups WHERE url_encode='$fetch_challenger_url'";
          $execute_url = mysqli_query($new_connection->Frequency(), $select_challenger);
          $fetch_challnge_url = mysqli_fetch_assoc($execute_url);
              $get_profile_image = $fetch_challnge_url['group_profile_image'];
              $get_group_challenger_name = $fetch_challnge_url['group_name'];

         // get defender profile image
        //  =============================================================================================  
          $select_defender = "SELECT * from user_groups WHERE url_encode='$fetch_defender_url'";
          $execute_url_defender = mysqli_query($new_connection->Frequency(), $select_defender);
          $fetch_url_defender = mysqli_fetch_assoc($execute_url_defender);
              $get_defender_profile_image = $fetch_url_defender['group_profile_image'];
              $get_defender_name = $fetch_url_defender['group_name'];

        // interprete class challenge page
        // ===========================================================================================================================================  
        class Challenge_page extends Scyllar {
            public function getProfileImage($Email){
                $selectImage = "SELECT * FROM user_profile_image WHERE usr_email='$Email' AND status_image='1'";
                $executeImage = mysqli_query($this->Frequency(),$selectImage);
                $fetchImage = mysqli_fetch_assoc($executeImage); ?>
                    <img src="<?php echo '../Images/profile-img/profile-image/'.$fetchImage['profile_image'] ?>" width="100%" height="100%">
            <?php }
        }  
        
        // implement class challenge page
        // ============================================================================================================================
        $new_page = new Challenge_page();
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

       <!-- index, used to repesent intelligent box on search engine and it browser -->
       <title>intelligentBox</title>

       <!-- intelligent box logo, present on search engine and on browse header -->
       <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon">

       <!-- external style link, type css file-->
       <link rel="stylesheet" href="../Assets/css/group_challenge.box.css">

       <!-- external css file/ libraries -->
       <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
       <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
       <link rel="stylesheet" href="../Lib/animate/animate.min.css">
       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
       <link rel="stylesheet" href="../Lib/jquery/jquery.fancybox.css">
       <link rel="stylesheet" href="../Lib/lightbox/css/lightbox.min.css">
       <link rel="stylesheet" href="../Lib/owlcarousel/assets/owl.carousel.min.css">
       <link rel="stylesheet" href="../Lib/slick/slick.css">
       <link rel="stylesheet" href="../Lib/theme-color/violet-theme.css">
       <link rel="stylesheet" href="../Lib/venobox/venobox.css">
   
   </head>
   <body>

        <!-- Section that will hold header -->
        <!-- ============================================================================================================================== -->
        <!-- ============================================================================================================================== -->
        <!-- ============================================================================================================================== -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- end header section -->
        <!-- ============================================================================================================================== -->
        <!-- ============================================================================================================================== -->
        <!-- ============================================================================================================================== -->


        <!-- down section / top background image /first in container-->
        <!-- =============================================================================================================================== -->
        <!-- =============================================================================================================================== -->
        <!-- =============================================================================================================================== -->
        <div class="container">
           <div class="down-section-holder col-xs-12 col-md-10 ml-auto mr-auto">

                <!-- GLOBAL JS EMAIL -->
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                <input type="hidden" name="" id="group_1_url" value="<?php echo $fetch_challenger_url; ?>">
                <input type="hidden" name="" id="group_2_url" value="<?php echo $fetch_defender_url; ?>">
                <input type="hidden" name="" id="challenge_url" value="<?php echo $challenge_url; ?>">
                <!-- END GLOBAL EMAIL -->

               <!-- top-background -->
               <!-- ====================================================================================================================== -->
               <!-- ====================================================================================================================== -->
               <div class="top-background">
                   <div class="top-pre-background"><img src="../Images/group-challenge/group-challenge.jpg" alt="" width="100%" height="100%"></div>
                   
                   <div class="group-discusion-detal d-flex justify-content-between">
                       <div class="challenger">
                            <div class="group-1-img mt-1">
                               <img src="<?php echo '../Images/groups/'.$get_profile_image; ?>" alt="" width="100%" height="100%">
                            </div>
                       </div>

                       <div class="defender">
                            <div><div class="group-2-img">
                               <img src="<?php echo '../Images/groups/'.$get_defender_profile_image; ?>" alt="" width="100%" height="100%">
                            </div></div>
                       </div>
                   </div>

                   <div class="challenge-detail d-flex justify-content-between">
                        <div class="grou-1-name"><?php echo $get_group_challenger_name; ?></div>
                        <div><div class="group-2-name"><?php echo $get_defender_name; ?></div></div>
                   </div>
               </div>
               <!-- end top-background -->
               <!-- ================================================================================================================================== -->
               <!-- ================================================================================================================================== -->


               
               <!-- down section -->
               <!-- ================================================================================================================================== -->
               <!-- ================================================================================================================================== -->
                <div class="down-section">
                    <div class="d-flex mt-4">
                        <!-- left side content -->
                       <div class="left-side" style="width: 100%">
                            <div class="left-content">

                                <!-- today challenges -->
                                <!-- =================================================================================================================== -->
                                <!-- ===================================================================================================================== -->
                                <div class="today-challenge">
                                    <div class="challenge-title d-flex">
                                        <div onclick="openNav()" class="open-sidebar"><i class="fa fa-align-justify mr-2"></i></div>
                                        <div>today challenges...</div>
                                    </div>    

                                    <!-- each post list -->
                                    <!-- ============================================================================================================================================== -->
                                    <!-- ============================================================================================================================================== -->
                                    <div class="each-post-list" id="each-post-list">
                                        
                                        
                                    </div>
                                    <!-- end each post list -->
                                    <!-- ======================================================================================================================================================================= -->
                                    <!-- =========================================================================================================================================================================== -->

                                </div>
                                <!-- end today challenges -->
                                <!-- ======================================================================================================================================================================== -->
                                <!-- ======================================================================================================================================================================== -->

                            </div>
                       </div>
                       <!-- end left section -->
                       <!-- ============================================================================================================================================================================================ -->
                       <!-- ============================================================================================================================================================================================= -->
                       <!-- =========================================================================================================================================================================================== -->



                       <!-- right side section -->
                       <!-- ================================================================================================================================================================================= -->
                       <!-- ================================================================================================================================================================================= -->
                       <!-- ================================================================================================================================================================================= -->
                       <div class="right-side">
                           <div class="right-holder">

                                <!-- the owner user detail-->
                                <!-- ====================================================================================================================================== -->
                                <!-- ====================================================================================================================================== -->
                                <div class="user-present d-flex">
                                    <div class="img-user"><?php $new_page->getProfileImage($Session_email_call); ?></div>
                                    <div class="user-detail-pre ml-2 mt-1">
                                        <div><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                                        <div><?php echo $Session_email_call; ?></div>
                                    </div>
                                </div>
                                <!-- end present -->
                                <!-- ======================================================================================================================================= -->
                                <!-- ======================================================================================================================================= -->

                                <!-- create post in challenge -->
                                <!-- ======================================================================================================================================== -->
                                <!-- ======================================================================================================================================== -->
                                <div class="position-relative">
                                    <div class="create-short-story mt-3">
                                        <div class="title-short-story">create your post</div>
                                        <div class="user-typer d-flex">
                                            <div><div class="user-image"><?php $new_page->getProfileImage($Session_email_call); ?></div></div>
                                            <div class="usr-textarea ml-2">
                                                <div class="type-something">
                                                    <textarea name="" id="" cols="30" rows="2" onclick="createPost(this)" placeholder="your thoughts can challenge them..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- give user privelege to create post through profile-->
                                    <div class="post-creation" id="post-creation">
                                        <div class="title-post-creation">
                                            <div>Create your post...</div>
                                            <div class="close-creation-room" onclick="document.getElementById('post-creation').style.display = 'none'"><i class="fa fa-times"></i></div>
                                        </div>
                                        <form action="challenges_content.box.php" method="POST" enctype="multipart/form-data"> 
                                            <div class="create-area-body">
                                                <div class="image-preview-post">
                                                    <div class="for-image" id="for-image">
                                                        <img src="" class="preview_photo" alt="" width="100%" height="100%">
                                                    </div>
                                                </div>
                                                <div class="caption-area">
                                                    <div class="caption-textarea"><textarea name="caption" id="" cols="30" rows="8" placeholder="Your thoughts can challenge them!!" autocomplete="off"></textarea></div>
                                                </div>
                                            </div>
                                            <div class="option-creation">
                                                <div class="choose-option-area">
                                                    <input type="file" name="chosen_file" id="chosen_file" style="display: none;">
                                                    <input type="hidden" name="challenge_url" value="<?php echo $challenge_url; ?>">
                                                    <input type="hidden" name="user_email" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                                                    <div class="choose-video-btn"><button type="button" onclick="choose_file(this)"><i class="fa fa-photo mr-2"></i> Choose media</button></div>
                                                </div>
                                                <div class="create-post-btn">
                                                    <div class=""><button type="submit" name="submit_post">create now</button></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end privelege -->
                                </div>
                                <!-- end post -->
                                <!-- ================================================================================================================================================ -->
                                <!-- ================================================================================================================================================ -->

                                <!-- active friend or online user in group 1 -->
                                <!-- ================================================================================================================================================ -->
                                <!-- ================================================================================================================================================ -->
                                <div class="user-friend spacer">
                                    <div class="label"> <?php echo $get_group_challenger_name; ?> </div>
                                    <div class="friend-list mt-2" id="group_1_member">
                                   
                                    </div>
                                </div>
                                <!-- end active user -->
                                <!-- ====================================================================================================== -->
                                <!-- ====================================================================================================== -->
                                
                                <!-- active friend or online user in group 2 -->
                                <!-- ========================================================================================================= -->
                                <!-- =========================================================================================================================== -->
                                <div class="user-friend spacer">
                                    <div class="label"> <?php echo $get_defender_name; ?> </div>
                                    <div class="friend-list mt-2" id="group_2_member">

                                    </div>
                                </div>
                                <!-- end active user -->
                                <!-- ========================================================================================================================== -->
                                <!-- ========================================================================================================================== -->

                           </div>
                       </div>
                       <!-- end right side section -->
                       <!-- ====================================================================================================================================================== -->
                       <!-- ====================================================================================================================================================== -->
                       <!-- ====================================================================================================================================================== -->


                       <!-- THIS APPLY ON SMALL DEVICE -->
                       <!-- ============================================================================================================== -->
                       <!-- ============================================================================================================== -->
                       <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="right-holder">

                                <!-- the owner user detail-->
                                <!-- ====================================================================================================================================== -->
                                <!-- ====================================================================================================================================== -->
                                <div class="user-present d-flex">
                                    <div class="img-user"><?php $new_page->getProfileImage($Session_email_call); ?></div>
                                    <div class="user-detail-pre ml-2 mt-1">
                                        <div><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                                        <div><?php echo $Session_email_call; ?></div>
                                    </div>
                                </div>
                                <!-- end present -->
                                <!-- ======================================================================================================================================= -->
                                <!-- ======================================================================================================================================= -->

                                <!-- create post in challenge -->
                                <!-- ======================================================================================================================================== -->
                                <!-- ======================================================================================================================================== -->
                                <div class="position-relative ml-3 mr-3">
                                    <div class="create-short-story mt-3 shadow-sm">
                                        <div class="title-short-story">create your post</div>
                                        <div class="user-typer d-flex">
                                            <div>
                                                <div class="user-image">
                                                    <?php $new_page->getProfileImage($Session_email_call); ?>
                                                </div>
                                            </div>
                                            <div class="usr-textarea ml-2">
                                                <div class="type-something">
                                                    <textarea name="" id="" cols="30" rows="2" onclick="createPost(this)" placeholder="your thoughts can challenge them..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- give user privelege to create post through profile-->
                                    <div class="post-creation" id="post-creation-small">
                                        <div class="title-post-creation">
                                            <div>Create your post...</div>
                                            <div class="close-creation-room" onclick="document.getElementById('post-creation-small').style.display = 'none'"><i class="fa fa-times"></i></div>
                                        </div>
                                        <form action="challenges_content.box.php" method="POST" enctype="multipart/form-data"> 
                                            <div class="create-area-body">
                                                <div class="image-preview-post">
                                                    <div class="for-image" id="for_small_image">
                                                        <img src="" id="preview_small_image" alt="" width="100%" height="100%">
                                                    </div>
                                                </div>
                                                <div class="caption-area">
                                                    <div class="caption-textarea"><textarea name="caption" id="" cols="30" rows="2" placeholder="Your thoughts can challenge them!!" autocomplete="off"></textarea></div>
                                                </div>
                                            </div>
                                            <div class="option-creation">
                                                <div class="choose-option-area">
                                                    <input type="file" name="chosen_file" id="chosen_file_small" style="display: none;">
                                                    <input type="hidden" name="challenge_url" value="<?php echo $challenge_url; ?>">
                                                    <input type="hidden" name="user_email" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                                                    <div class="choose-image-btn"><button type="button" onclick="choose_file_small(this)"><i class="fa fa-image mr-2"></i> choose photo</button></div>
                                                </div>
                                                <div class="create-post-btn">
                                                    <div class=""><button type="submit" name="submit_post">create now</button></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end privelege -->
                                </div>
                                <!-- end post -->
                                <!-- ================================================================================================================================================ -->
                                <!-- ================================================================================================================================================ -->

                                <!-- active friend or online user in group 1 -->
                                <!-- ================================================================================================================================================ -->
                                <!-- ================================================================================================================================================ -->
                                <div class="user-friend spacer shadow-sm ml-3 mr-3 mt-3">
                                    <div class="label"> group 1... </div>
                                    <div class="friend-list mt-2" id="load_group_memeber_1">

                                    </div>
                                </div>
                                <!-- end active user -->
                                <!-- ====================================================================================================== -->
                                <!-- ====================================================================================================== -->
                                
                                <!-- active friend or online user in group 2 -->
                                <!-- ========================================================================================================= -->
                                <!-- =========================================================================================================================== -->
                                <div class="user-friend spacer shadow-sm ml-3 mr-3">
                                    <div class="label"> group 2... </div>
                                    <div class="friend-list mt-2" id="groupd_2_content">

                                    </div>
                                </div>
                                <!-- end active user -->
                                <!-- ========================================================================================================================== -->
                                <!-- ========================================================================================================================== -->

                           </div>
                       </div>
                       <!-- END THIS MEDIA -->
                       <!-- ============================================================================================================== -->
                       <!-- ============================================================================================================== -->
                   </div>
               </div>
               <!-- end section -->
               <!-- ================================================================================================================================================================================== -->
               <!-- ================================================================================================================================================================================== -->
               <!-- ================================================================================================================================================================================== -->

                <!-- ERROR HANDLING -->
                <!-- ======================================================================================================================================================== -->
                <?php if(isset($_REQUEST['msg']) == "extension"){?>
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

           </div>
       </div>
       <!-- end container -->
       <!-- ================================================================================================================================= -->
       <!-- ================================================================================================================================= -->
       <!-- ================================================================================================================================= -->
 

       <!-- javascript external file, type js  and libraries-->
       <!-- ================================================ -->
       <!-- ======================================================================== -->
       <script src="../Assets/js/challenges.popup.box.js"></script>
       <script src="../Assets/js/video_controll.box.js"></script>
       <script src="../Assets/js/challenges_content.box.js"></script>

       <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
       <script src="../Lib/bootstrap/js/bootstrap-datepicker.js"></script> 
       <script src="../Lib/custom/custom.js"></script>
       <script src="../Lib/date-picker/bootstrap-switch.js"></script>
       <script src="../Lib/date-picker/nouislider.min.js"></script>
       <script src="../Lib/easing/easing.min.js"></script>
       <script src="../Lib/jquery/jquery-migrate.min.js"></script>
       <script src="../Lib/jquery/jquery.bootstrap-wizard.js"></script>
       <script src="../Lib/jquery/jquery.counterup.js"></script>
       <script src="../Lib/jquery/jquery.fancybox.pack.js"></script>
       <script src="../Lib/jquery/jquery.min.js"></script>
       <script src="../Lib/jquery/jquery.mixitup.js"></script>
       <script src="../Lib/jquery/jquery.poptrox.min.js"></script>
       <script src="../Lib/jquery/jquery.validate.min.js"></script>
       <script src="../Lib/jquery/perfect-scrollbar.jquery.min.js"></script>
       <script src="../Lib/lightbox/js/lightbox-plus-jquery.min.js"></script>
       <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
       <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
       <script src="../Lib/owlcarousel/owl.carousel.js"></script>
       <script src="../Lib/popper/popper.min.js"></script>
       <script src="../Lib/skel/skel.min.js"></script>
       <script src="../Lib/slick/slick.js"></script>
       <script src="../Lib/superfish/superfish.js"></script>
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
       
           function scrollToDownload() {
       
             if ($('.section-download').length != 0) {
               $("html, body").animate({
                 scrollTop: $('.section-download').offset().top
               }, 1000);
             }
           }
       </script>
       <!-- end libraries -->
       <!-- ========================================================================================================= -->
       <!-- ========================================================================================================= -->

   </body>
</html>
<?php } } ?>