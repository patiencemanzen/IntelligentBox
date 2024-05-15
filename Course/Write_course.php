<?php 
  session_start();
  if(isset($_SESSION['Email'])){
    $Session_email_call = $_SESSION['Email'];
    $firstName = $_SESSION['Firstname'];
    $lastName = $_SESSION['Lastname'];
    $user_title = $_SESSION['title'];

    require_once ("../Scyllar.php");
    $new_connection = new Scyllar();

    if(isset($_REQUEST['course'])){
        $course_url = $_REQUEST['course'];
        
        $select_course_info = "SELECT * FROM courses WHERE identity='$course_url'";
        $execute_course_info = mysqli_query($new_connection->Frequency(), $select_course_info);   
        $fetch_course_info = mysqli_fetch_assoc($execute_course_info);
            $course_name = $fetch_course_info['course_name'];
            $class_identity = $fetch_course_info['class_identity'];
            $course_identity = $fetch_course_info['identity'];

        $select_class_info = "SELECT * FROM trainer_class WHERE identity='$class_identity'";
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

       <title>intelligentBox</title>

       <link rel="shortcut icon" href="../Images/intelligent_box_brand.png" type="image/x-icon">

       <link rel="stylesheet" href="../Assets/css/write_course.box.css">

       <!-- external css file/ libraries -->
       <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
       <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
   </head>
   <body>

        <!-- Section that will hold header -->
        <!-- ============================================================================================================= -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- end header section -->
        <!-- ============================================================================================================= -->

        <!-- start body section -->
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
                    <div class="position-relative bg-white">
                        <div class="search-department"><input type="text" name="" id="" placeholder="Search Intelligent Course..." oninput="getSearch()"></div>
                        <div class="seach-result-department" id="display-search">
                            <div class="close-search" onclick="document.getElementById('display-search').style.display = 'none'"><i class="fa fa-times"></i></div>
                            <div class="department-list-searched">

                            </div>
                        </div>
                    </div>
                    <!-- end each result -->
                    <!-- ==================================================================================================== -->
                </div>
                <!-- end top background -->
                <!-- ====================================================================================================== -->

                <!-- left-side-content -->
                <!-- ============================================================================================================ -->
                <div class="down-side">
                    <div class="left-holder">

                        <!-- department and it course -->
                        <!-- ============================================================================================================ -->
                        <div class="department-name-course">

                            <div class="department mb-3">
                                <div class="department-title d-flex">
                                     <div><?php echo $class_name; ?></div>
                                     <div class="ml-auto"><?php echo $course_name; ?></div>
                                </div>
                                <div class="course_content mt-3">
                                    <?php 
                                        $select_course_content = "SELECT * FROM course_content WHERE course_identity='$course_identity'";
                                        $execute_content = mysqli_query($new_connection->Frequency(), $select_course_content);
                                        while($fetch_content = mysqli_fetch_assoc($execute_content)){
                                            $content = $fetch_content['course_content'];
                                            echo $content; 
                                        }
                                    ?>
                                </div>
                                <div class="department-course mt-3">
                                    <form action="save_course.php" method="POST">
                                        <!-- write courses -->
                                        <!-- ============================================================================================== -->
                                        <input type="hidden" name="course_identity" value="<?php echo $course_identity; ?>">
                                        <textarea name="content" id="course_content" cols="30" rows="10">

                                        </textarea>
                                        <!-- end write courses -->
                                        <!-- ============================================================================================== -->
                                        <div class="save_course">
                                            <div class="loader"> 
                                                <svg class="circular" viewBox="25 25 50 50">
                                                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
                                                </svg> 
                                                <div class="saving" style="margin-top: 5px;">
                                                Saving.....
                                                </div>
                                            </div>
                                            <div><button type="submit" name="submit_course" class="save_course_btn" onclick="save_course_content(this)">Save file</button></div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- end department and it course -->
                        <!-- ================================================================================================================================ -->

                    </div>
                </div>
                <!-- end left side-content -->
                <!-- ================================================================================================================= -->

            </div>
        </div>
        <!-- end body section -->
        <!-- ========================================================================================================= -->
        
       <!-- javascript external file, type js  and libraries-->
       <!-- ======================================================================= -->
       <script src="../Assets/js/full_department.box.js"></script>

       <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
       <script src="../Lib/jquery/jquery.min.js"></script>
       <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
       <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
       <script src="../Lib/wow/wow.min.js"></script>
       <script src="../Lib/ckeditor/ckeditor.js"></script>
       <script>
            CKEDITOR.replace('content');
        </script>
       <!-- end libraries -->
       <!-- ================================================================================================================================= -->

   </body>
</html>
<?php } }else{
    header("Location: ../Personal-account/account_shortcut.box.php");
    exit();
} ?>