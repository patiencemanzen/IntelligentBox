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

       <title>intelligentBox</title>

       <link rel="shortcut icon" href="../Images/intelligent_box_brand.png" type="image/x-icon">
        <link rel="stylesheet" href="../Assets/css/course.box.css">

       <!-- external css file/ libraries -->
       <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
       <link rel="stylesheet" href="../Lib/slick/slick.css">   
   </head>
   <body class="bg-white">

        <!-- HEADER -->
        <!-- ============================================================================================================= -->
        <div class="header-holder">
            <?php include_once ("../header/header.php"); ?>
        </div>
        <!-- ============================================================================================================= -->

        <!-- TOP BACKGROUND COLOR -->
        <!-- ===================================================================================================================== -->
        <div class="Background-color">
           <div class="top-background-color"></div>

            <!-- BODY -->
            <!-- ============================================================================================================ -->
            <div class="body-section">
                <div class="container">
                    <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">

                    <!-- TOP BACKGROUND -->
                    <!-- =================================================================================================== -->
                    <div class="top-background">
                        <div class="title-background"><i class="fa fa-graduation-cap"></i> More courses and Trades</div>
                        <div class="cap"><i class="fa fa-graduation-cap"></i></div>
                    </div>
                    <!-- ====================================================================================================== -->

                    <!-- COURSE SECTION -->
                    <!-- ================================================================================================================== -->
                    <div class="courses-section">
                        
                        <!-- LEFT SIDE CONTENT -->
                        <!-- ============================================================================================================ -->
                        <div class="left-side">
                            <div class="left-holder">

                                <!-- DEPARTMENT CONTENT -->
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

                                    <!-- more course related to this -->
                                    <!-- ============================================================================================================================================================================================= -->
                                    <div class="discuss-in-group  mt-4">
                                        <div class="title-learner">Discover more Trades</div>
                                        <div class="trade-list cs-hidden" id="all_department">

                                        </div>
                                    </div>
                                    <!-- =============================================================================================================================================================================================== -->

                                </div>
                                <!-- ================================================================================================================================ -->

                            </div>
                        </div>
                        <!-- ================================================================================================================= -->


                        <!-- RIGHT SIDE COM=NTENT -->
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

                            </div>
                        </div>
                        <!-- ===================================================================================================== -->

                    </div>
                    <!-- ============================================================================================================================= -->
                    
                    <!-- group present -->
                    <!-- ========================================================================================================================================== -->
                    <div class="groups-list-down mt-3">
                        <div class="each-group-title">More Groups</div>
                        <div class="group-list" id="displayslider">

                        </div>
                    </div>
                    <!-- end group presentation -->
                    <!-- ============================================================================================================================= -->
                
                </div>
            </div>
            <!-- ========================================================================================================= -->
            
        </div>
        <!-- ==================================================================================================================== -->
 
       <!-- javascript external file, type js  and libraries-->
       <!-- ======================================================================= -->
       <script src="../Assets/js/courses.box.js"></script>
       <script src="../Assets/js/Course_content.box.js"></script>

       <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
       <script src="../Lib/jquery/jquery.min.js"></script>
       <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
       <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
       <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
        <!-- end libraries -->
        <!-- ================================================================================================================================= -->
   </body>
</html>
<?php }else{
    header("Location: ../Personal-account/account_shortcut.box.php");
    exit();
} ?>