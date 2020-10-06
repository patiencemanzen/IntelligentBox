<?php 
  session_start();
  if(isset($_SESSION['Email'])){
      $Session_email_call = $_SESSION['Email'];
      $firstName = $_SESSION['Firstname'];
      $lastName = $_SESSION['Lastname'];
      $user_title = $_SESSION['title'];

      require_once ("../Scyllar.php");
      $new_connection = new Scyllar();

      if(isset($_REQUEST['class'])){
        $class_url = $_REQUEST['class'];

        $select_class_info = "SELECT * FROM trainer_class WHERE class_url='$class_url'";
        $execute_class_info = mysqli_query($new_connection->Frequency(), $select_class_info);
        $fetch_class = mysqli_fetch_assoc($execute_class_info);
            $class_name = $fetch_class['class_name'];
            $class_img = $fetch_class['class_profile_image'];
            $class_desc = $fetch_class['class_desc'];
            $class_identity = $fetch_class['identity'];

        $countCourse = 0;
        $select_course = "SELECT * FROM courses WHERE class_identity='$class_identity'";
        $execute_course_count = mysqli_query($new_connection->Frequency(), $select_course);
        while($fetch_course = mysqli_fetch_assoc($execute_course_count)){
            $countCourse = $countCourse + 1;
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

       <!-- index, used to repesent intelligent box on search engine and it browser -->
       <title>intelligentBox</title>

       <!-- intelligent box logo, present on search engine and on browse header -->
       <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

       <!-- external style link, type css file-->
       <link rel="stylesheet" href="../Assets/css/full_department.box.css">

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
            <?php require_once ("../header/header.php"); ?>
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
            <div class="body-section col-md-8 mr-auto ml-auto mt-5">

                <!-- GLOBAL JS EMAIL -->
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                <!-- END GLOBAL EMAIL -->

                <!-- top background -->
                <!-- =================================================================================================== -->
                <div class="top-background bg-white p-2">
                    <img src="<?php echo '../Images/class_img/'.$class_img; ?>" width="100%" height="100%">
                    <div class="title-background"><?php echo $class_name; ?></div>

                    <!-- search result -->
                    <!-- ================================================================================================== -->
                    <!-- <div class="position-relative bg-white">
                        <div class="search-department"><input type="text" name="" id="" placeholder="Search Intelligent Course..." oninput="getSearch()"></div>
                        <div class="seach-result-department" id="display-search">
                            <div class="close-search" onclick="document.getElementById('display-search').style.display = 'none'"><i class="fa fa-times"></i></div>
                            <div class="department-list-searched">

                               
                            </div>
                        </div>
                    </div> -->
                    <!-- end each result -->
                    <!-- ==================================================================================================== -->
                </div>
                <!-- end top background -->
                <!-- ====================================================================================================== -->

                <!-- left-side-content -->
                <!-- ============================================================================================================ -->
                <!-- ============================================================================================================ -->
                <div class="down-side">
                    <div class="left-holder">

                        <!-- department and it course -->
                        <!-- ============================================================================================================ -->
                        <div class="department-name-course">

                            <div class="department mb-3">
                                <div class="department-title d-flex">
                                     <div><?php echo $class_name; ?></div>
                                     <div class="ml-auto">Course <?php echo $countCourse; ?></div>
                                </div>
                                <div class="department-course mt-3">
                                    <?php 
                                        $select_course_identity = "SELECT * FROM courses WHERE class_identity='$class_identity'";
                                        $execute_course = mysqli_query($new_connection->Frequency(), $select_course_identity);
                                        while($fetch_course = mysqli_fetch_assoc($execute_course)){ 
                                            $course_identity = $fetch_course['identity'];
                                            ?>
                                            <!-- each course -->
                                            <!-- ===================================== -->
                                            <div class="each-course">
                                                <div class="top-desc-img-detail d-flex">
                                                    <div class="course-detail ml-2">
                                                        <div class="course-name"><?php echo $fetch_course['course_name']; ?></div>
                                                        <div class="course-bio mt-2">
                                                            <?php
                                                                $select_course_content = "SELECT * FROM course_content WHERE course_identity='$course_identity'";
                                                                $execute_content = mysqli_query($new_connection->Frequency(), $select_course_content);
                                                                while($fetch_content = mysqli_fetch_assoc($execute_content)){
                                                                    $content = $fetch_content['course_content'];
                                                                    echo $content; 
                                                                }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="user-option d-flex justify-content-between mt-2">
                                                    <div class="course-status mt-2">
                                                        <!-- <div class="likes">Comments <span>38M</span></div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- each course -->
                                            <!-- ========================================== -->
                                        <?php }
                                    ?>
                                </div>
                            </div>

                        </div>
                        <!-- end department and it course -->
                        <!-- ================================================================================================================================ -->

                    </div>
                </div>
                <!-- end left side-content -->
                <!-- ================================================================================================================ -->
                <!-- ================================================================================================================= -->

            </div>
        </div>
        <!-- end body section -->
        <!-- ======================================================================================================== -->
        <!-- ========================================================================================================= -->
        <!-- ========================================================================================================= -->
        
 
       <!-- javascript external file, type js  and libraries-->
       <!-- ================================================ -->
       <!-- ======================================================================= -->
       <script src="../Assets/js/full_department.box.js"></script>
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
<?php } } ?>