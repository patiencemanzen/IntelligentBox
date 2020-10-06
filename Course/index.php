<?php 
  session_start();
  if(isset($_SESSION['Email'])){
      $Session_email_call = $_SESSION['Email'];
      $firstName = $_SESSION['Firstname'];
      $lastName = $_SESSION['Lastname'];
      $user_title = $_SESSION['title'];
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
       <link rel="shortcut icon" href="../Images/intelligent_box_brand.png" type="image/x-icon">
       
       <!-- external style link, type css file-->
       <link rel="stylesheet" href="../Assets/css/course.box.css">

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
        <!-- ============================================================================================================= -->
        <!-- ============================================================================================================= -->
        <!-- ============================================================================================================= -->
        <div class="header-holder">
            <?php include_once ("../header/header.php"); ?>
        </div>
        <!-- end header section -->
        <!-- ============================================================================================================= -->
        <!-- ============================================================================================================= -->
        <!-- ============================================================================================================= -->



        <!-- start body section -->
        <!-- ============================================================================================================ -->
        <!-- ============================================================================================================ -->
        <!-- ============================================================================================================ -->
        <div class="container">
            <div class="body-section d-flex ml-auto mr-auto">

                <!-- GLOBAL JS EMAIL -->
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                <!-- END GLOBAL EMAIL -->

                <!-- left-side-content -->
                <!-- ============================================================================================================ -->
                <!-- ============================================================================================================ -->
                <div class="left-side">
                    <div class="left-holder">

                        <!-- top background -->
                        <!-- =================================================================================================== -->
                        <div class="top-background">
                            <img src="../Images/course-img/hot-air-balloons-at-dusk.jpg" width="100%" height="100%">
                            <div class="title-background">department and it courses</div>
                        </div>
                        <!-- end top background -->
                        <!-- ====================================================================================================== -->

                        <!-- department and it course -->
                        <!-- ============================================================================================================ -->
                        <div class="department-name-course">

                            <!-- search result -->
                            <!-- ================================================================================================== -->
                            <div class="position-relative">
                                <div class="search-department"><input type="text" name="" id="search_dep" placeholder="Search Intelligent Trades..." oninput="getSearch()"></div>
                                <div class="seach-result-department position-relative" id="display-search">
                                    <div class="close-search" onclick="document.getElementById('display-search').style.display = 'none'"><i class="fa fa-times"></i></div>
                                </div>
                            </div>
                            <!-- end each result -->
                            <!-- ==================================================================================================== -->

                            <div id="all_department">
                            
                            </div>

                        </div>
                        <!-- end department and it course -->
                        <!-- ================================================================================================================================ -->

                    </div>
                </div>
                <!-- end left side-content -->
                <!-- ================================================================================================================ -->
                <!-- ================================================================================================================= -->


                <!-- right side content -->
                <!-- ================================================================================================================= -->
                <!-- ================================================================================================================= -->
                <div class="right-side">
                    <div class="right-list">

                        <!-- course department -->
                        <!-- ============================================================================================================ -->
                        <div class="course-department mt-3">
                            <div class="section-title">Classes Around</div>
                            <div class="department-list mt-3 getClassess">

                            </div>
                        </div>
                        <!-- end course department -->
                        <!-- ========================================================================================================================================= -->

                        <!-- group present -->
                        <!-- ========================================================================================================================================== -->
                        <div class="course-department p-3">
                            <div class="section-title down-subtile">More Groups</div>
                            <div class="department-list mt-3" id="displayslider">

                            </div>
                        </div>
                        <!-- end group presentation -->
                        <!-- ============================================================================================================================= -->

                    </div>
                </div>
                <!-- end right-side content -->
                <!-- ===================================================================================================== -->
                <!-- ===================================================================================================== -->

            </div>
        </div>
        <!-- end body section -->
        <!-- ======================================================================================================== -->
        <!-- ========================================================================================================= -->
        <!-- ========================================================================================================= -->
        
 
       <!-- javascript external file, type js  and libraries-->
       <!-- ================================================ -->
       <!-- ======================================================================= -->
       <script src="../Assets/js/course-slider.box.js"></script>
       <script src="../Assets/js/courses.box.js"></script>
       <script src="../Assets/js/Course_content.box.js"></script>

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
       <!-- ================================================================================================================================= -->

   </body>
</html>
<?php }else{
    header("Location: ../account_shortcut.box.php?session");
    exit();
} ?>