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

       <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon">
       <link rel="stylesheet" href="../Assets/css/groups.box.css">

       <!-- external css file/ libraries -->
       <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
       <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
       <link rel="stylesheet" href="../Lib/slick/slick.css">
   </head>
   <body class="bg-white">

        <!-- Section that will hold header -->
        <!-- ============================================================================================================================ -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- ============================================================================================================================= -->

        <!-- start body section -->
        <!-- ============================================================================================================================== -->
        <div class="body-section">
            <div class="container">

                <!-- GLOBAL EMAIL -->
                <!-- ============================================================================================== -->
                <input type="hidden" name="global_email" id="grobal_mail" value="<?php echo $Session_email_call; ?>">
                <!-- =============================================================================================== -->

                <!-- GLOBAL JS EMAIL -->
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                <!-- END GLOBAL EMAIL -->
                
                <!-- left-side-content -->
                <!-- ========================================================================================================================== -->
                <div class="left-side col-md-8 ml-auto mr-auto">
                    <div class="left-holder">

                        <!-- top background image -->
                        <!-- ================================================================================================================ -->
                        <div class="top-background position-relative">
                            <img src="../Images/groups/hot-air-balloons-at-dusk.jpg" width="100%" height="100%">
                            <div class="title-background">All Groups...</div>
                        </div>
                        <!-- ================================================================================================================== -->

                        <!-- down list groups content -->
                        <!-- ===================================================================================================================== -->
                        <div class="department-name-course">
                            <div class="course-department mt-4">
                                <div class="section-title">
                                    <div>All groups around</div>
                                    <div class="search_group"><i class="fa fa-search mr-1"></i><input type="text" name="" id="search_group" onkeyup="search_groups(this)" placeholder="Search groups...."></div>
                                </div>
                                <div class="department-list mt-3" id="group_list">
    
                                </div>
                            </div>
                        </div>
                        <!-- ================================================================================================================== -->

                    </div>
                </div>
                <!-- =========================================================================================================================== -->

            </div>
        </div>
        <!-- ================================================================================================================================= -->
        

        <!-- javascript external file, type js  and libraries-->
        <!-- ================================================ -->
        <script src="../Assets/js/all_groups.box.js"></script>
        <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="../Lib/jquery/jquery.min.js"></script>
        <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
        <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
        <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
    </body>
</html>
<?php }else{
    header("Location: ../Personal-account/account_shortcut.box.php");
    exit();
} ?>