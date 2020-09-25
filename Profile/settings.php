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
       <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon">

       <!-- external style link, type css file-->
       <link rel="stylesheet" href="../Assets/css/settings.box.css">

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
        <!-- ================================================================================================================================================== -->
        <!-- ================================================================================================================================================== -->
        <!-- ================================================================================================================================================== -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- end header section -->
        <!-- ================================================================================================================================================== -->
        <!-- ================================================================================================================================================== -->
        <!-- ================================================================================================================================================== -->


        <!-- start body section -->
        <!-- =================================================================================================================================================  -->
        <!-- ================================================================================================================================================= -->
        <!-- ================================================================================================================================================= -->
        <div class="body-section mt-5">
            <div class="container">

                <!-- GLOBAL JS EMAIL -->
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                <!-- END GLOBAL EMAIL -->

                <!-- left-side-content -->
                <!-- ======================================================================================================================= -->
                <!-- ======================================================================================================================= -->
                <div class="left-side ml-auto container mr-auto col-xs-12 col-sm-10">
                    <div class="left-holder">

                        <!-- top section -->
                        <!-- ================================================================================================================= -->
                        <!-- ================================================================================================================= -->
                        <div class="top-section">
                            <!-- top background -->
                            <!-- ============================================================== -->
                            <div class="top-background position-relative" id="hold_top_background">
                                
                            </div>
                            <!-- end top background -->
                            <!-- ================================================================= -->

                            <div class="group-top-detail">
                                <div class="name-search">
                                    <div class="group-name-title"><i class="fa fa-align-left mr-2" onclick="openNav()"></i><?php echo $firstName; ?> <?php echo $lastName;  ?></div>

                                    <!-- popup discovery -->
                                    <!-- ============================================================================================================================================ -->
                                    <div class="position-relative">
                                        <div onclick="document.getElementById('discover').style.display = 'block'"><button class="invite-friend"><i class="fa fa-plus mr-1"></i>Discover</button></div>

                                        <!-- popup disocver section -->
                                        <!-- ================================================================================================================================================== -->
                                        <div class="settings-and-info" id="discover">
                                            <div class="settings-pre">
                                                Discover
                                                <i onclick="document.getElementById('discover').style.display = 'none'" class="fa fa-times"></i>
                                            </div>
                                            <div class="setting-list">

                                                <!-- each discovery holder -->
                                                <!-- =================================================================================================================== -->
                                                <!-- =================================================================================================================== -->
                                                <div class="each-setting">
                                                    <div class="title-settings">Friends</div>
                                                    <div class="reply-setting" id="discover-student">

                                                    </div>
                                                </div>
                                                <!-- end discovery holder -->
                                                <!-- ===================================================================================================================================== -->
                                                <!-- ===================================================================================================================================== -->
                                               
                                                <!-- discver trainers -->
                                                <!-- ============================================================================================================================================= -->
                                                <!-- ============================================================================================================================================= -->
                                                <div class="each-setting">
                                                    <div class="title-settings">Trainers</div>
                                                    <div class="reply-setting" id="discover-trainer">

                                                    </div>
                                                </div>
                                                <!-- end discovery trainer -->
                                                <!-- =========================================================================================================================================================== -->
                                                <!-- ================================================================================================================================================================ -->
                                                
                                            </div>
                                        </div>
                                        <!-- end popup discoevry -->
                                        <!-- ================================================================================================================================ -->

                                    </div>
                                    <!-- end top popup discovry -->
                                    <!-- ================================================================================================================================================================================= -->
                                    <!-- ================================================================================================================================================================================= -->

                                </div>
                            </div>

                            <!-- navbar for user statues -->
                            <!-- ================================================================================================================================================================================================ -->
                            <!-- ================================================================================================================================================================================================ -->
                            <div class="top-nav-bar">
                                <div class="fa-aling"><i class="fa fa-cog" onclick="openSetting()"></i></div>
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                    <ul class="nav nav-tabs d-flex" role="tablist">
                                        <li><a class="active" data-toggle="tab" href="#TimelinePost" role="tab">
                                            <div class="name">Timeline</div>
                                        </a></li>
                                        <li><a class="" data-toggle="tab" href="#Companion" role="tab">
                                            <div class="name">Companion</div>
                                        </a></li>
                                        <li><a class="" data-toggle="tab" href="#Courses" role="tab">
                                            <div class="name">Classes</div>
                                        </a></li>
                                        <li><a class="" data-toggle="tab" href="#media" role="tab">
                                            <div class="name">Media</div>
                                        </a></li>
                                    </ul>
                                </div>
                                <ul class="nav nav-tabs group-element" role="tablist">
                                    <li><a class="active" data-toggle="tab" href="#TimelinePost" role="tab">
                                        <div class="name">Timeline</div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#Companion" role="tab">
                                        <div class="name">Companion</div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#Courses" role="tab">
                                        <div class="name">Classes</div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#media" role="tab">
                                        <div class="name">Media</div>
                                    </a></li>
                                </ul>
                                <div class="search-member d-flex position-relative">
                                    <i class="fa fa-search mr-2"></i>
                                    <input type="text" name="" id="search_user" placeholder="Search intelligent..." autocomplete="cc-family-name" width="100%" height="100%" onkeyup="resultSection_small()">
                                    <div class="search_result" id="search_result">
                                        <div id="hold_result">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end use status -->
                            <!-- ====================================================================================================================================================================================================== -->
                            <!-- ===================================================================================================================================================================================================== -->

                        </div>
                        <!-- end top section -->
                        <!-- ================================================================================================================== -->
                        <!-- ================================================================================================================== -->



                        <!-- down top background: image -->
                        <!-- ===================================================================================================================================== -->
                        <!-- ===================================================================================================================================== -->
                        <div class="d-flex position-relative">
                            <!-- ======================================================================================================================= -->
                            <!-- ======================================================================================================================= -->
                            <!-- admin panel tools -->
                            <div><div class="admin-panel">
                                <div class="panel-holder">

                                    <!-- title panel -->
                                    <!-- ======================================================================================================================================= -->
                                    <div class="group-icon">
                                        <div class="group-image"><div class="pre-group-image" id="getProfileimage">
                                            
                                        </div></div>
                                        <div class="group-name-admin">
                                            <div class="group-name"><?php echo $firstName; ?> <?php echo $lastName;  ?></div>
                                            <div class="the-owner">
                                                Settings
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end title -->
                                    <!-- ======================================================================================================================================= -->
                                
                                    <!-- panel body -->
                                    <!-- ============================================================================================================================================ -->
                                    <div class="configuration">
                                        <div class="list-conf">

                                            <ul class="nav nav-tabs admin-tools-list d-table" role="tablist">
                                                <li><a class="active" data-toggle="tab" href="#information" role="tab">
                                                    <div class="each-conf">
                                                        <div class="icon-pre-conf-type"><i class="fa fa-info-circle"></i></div>
                                                        <div class="conf-title">Add more information</div>
                                                    </div>
                                                </a></li>
                                                <li><a class="" data-toggle="tab" href="#Account" role="tab">
                                                    <div class="each-conf">
                                                        <div class="icon-pre-conf-type"><i class="fa fa-archive"></i></div>
                                                        <div class="conf-title">Account settings</div>
                                                    </div>
                                                </a></li>
                                                <!-- <li><a class="" data-toggle="tab" href="#preferences" role="tab">
                                                    <div class="each-conf">
                                                        <div class="icon-pre-conf-type"><i class="fa fa-database"></i></div>
                                                        <div class="conf-title">Data and preferences</div>
                                                    </div>
                                                </a></li> -->
                                                <li><a class="" data-toggle="tab" href="#Privacy" role="tab">  
                                                    <div class="each-conf">
                                                        <div class="icon-pre-conf-type"><i class="fa fa-shield"></i></div>
                                                        <div class="conf-title">Privacy & Safety</div>
                                                    </div>
                                                </a></li>
                                                <li><a class="" data-toggle="tab" href="#Notifications" role="tab">  
                                                    <div class="each-conf">
                                                        <div class="icon-pre-conf-type"><i class="fa fa-bell-o"></i></div>
                                                        <div class="conf-title">Notifications</div>
                                                    </div>
                                                </a></li>
                                                <!-- <li><a class="" data-toggle="tab" href="#Timeline" role="tab">  
                                                    <div class="each-conf">
                                                        <div class="icon-pre-conf-type"><i class="fa fa-newspaper-o"></i></div>
                                                        <div class="conf-title">Timeline</div>
                                                    </div>
                                                </a></li>
                                                <li><a class="" data-toggle="tab" href="#Public" role="tab">  
                                                    <div class="each-conf">
                                                        <div class="icon-pre-conf-type"><i class="fa fa-globe"></i></div>
                                                        <div class="conf-title">Public posts</div>
                                                    </div>
                                                </a></li> -->
                                            </ul>

                                            <div class="about-us text-center">
                                                <div class="services d-flex justify-content-between">
                                                    <div>About</div>
                                                    <div>Help</div>
                                                    <div>Developer</div>
                                                    <div>Privacy</div>
                                                    <div>cookies</div>
                                                </div>
                                                <div class="company">Intelligent box <i class="fa fa-copyright mr-1"></i> 2020</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end panel body -->
                                    <!-- ================================================================================================================================ -->
                                    
                                </div>
                            </div>
                            <!-- apply on small device -->
                            <!-- ================================================================================================================== -->
                            <div id="mySettings" class="mySettings">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeSetting()">&times;</a>

                                <!-- title panel -->
                                <!-- ======================================================================================================================================= -->
                                <div class="group-icon">
                                    <div class="group-image"><div class="pre-group-image"><img src="../Images/history-img/christopher.jpg" alt="" width="100%" height="100%"></div></div>
                                    <div class="group-name-admin">
                                        <div class="group-name"><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                                        <div class="the-owner">
                                            Settings
                                        </div>
                                    </div>
                                </div>
                                <!-- end title -->
                                <!-- ======================================================================================================================================= -->
                                <ul class="nav" role="tablist">
                                    <li><a class="active" data-toggle="tab" href="#information" role="tab">
                                        <div class="each-conf">
                                            <div class="icon-pre-conf-type"><i class="fa fa-info-circle"></i></div>
                                            <div class="conf-title">Add more information</div>
                                        </div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#Account" role="tab">
                                        <div class="each-conf">
                                            <div class="icon-pre-conf-type"><i class="fa fa-archive"></i></div>
                                            <div class="conf-title">Account settings</div>
                                        </div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#preferences" role="tab">
                                        <div class="each-conf">
                                            <div class="icon-pre-conf-type"><i class="fa fa-database"></i></div>
                                            <div class="conf-title">Data and preferences</div>
                                        </div>
                                    </a></li>
                                    <!-- <li><a class="" data-toggle="tab" href="#Privacy" role="tab">  
                                        <div class="each-conf">
                                            <div class="icon-pre-conf-type"><i class="fa fa-shield"></i></div>
                                            <div class="conf-title">Privacy</div>
                                        </div>
                                    </a></li> -->
                                    <li><a class="" data-toggle="tab" href="#Notifications" role="tab">  
                                        <div class="each-conf">
                                            <div class="icon-pre-conf-type"><i class="fa fa-bell-o"></i></div>
                                            <div class="conf-title">Notifications</div>
                                        </div>
                                    </a></li>
                                    <!-- <li><a class="" data-toggle="tab" href="#Timeline" role="tab">  
                                        <div class="each-conf">
                                            <div class="icon-pre-conf-type"><i class="fa fa-newspaper-o"></i></div>
                                            <div class="conf-title">Timeline</div>
                                        </div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#Public" role="tab">  
                                        <div class="each-conf">
                                            <div class="icon-pre-conf-type"><i class="fa fa-globe"></i></div>
                                            <div class="conf-title">Public posts</div>
                                        </div>
                                    </a></li> -->
                                </ul>
                            </div>
                            <!-- end small device -->
                            <!-- =================================================================================================================== -->
                        
                            </div>
                            <!-- end panel tools -->
                            <!-- ======================================================================================================================================== -->
                            <!-- ======================================================================================================================================== -->
                           

                            <!-- align element columly -->
                            <!-- ================================================================================================================================================= -->
                            <!-- ================================================================================================================================================== -->
                            <div>
                                <!-- start tab for configuration and settings for left settings section -->
                                <!-- ====================================================================== -->
                                <div class="tab-content">

                                    <!-- tab for more information -->
                                    <!-- ====================================================================================================================== -->
                                    <div class="tab-pane" role="tabpanel" id="information">
                                        <div class="group-description mt-4 col-10 ml-auto mr-auto">
                                            <div class="title-group-desc">Add more account information</div>
                                            <div class="short-desc-info">This information can present your account and your companion can recognize you more</div>
                                            <div class="input-form-information">

                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td class="label-input">High school name</td>
                                                            <td> 
                                                                <div class="input-form-info" id="school_holder">
                                                                    <input type="text" name="school" id="school" placeholder="High school ....">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="label-input">Birthday</td>
                                                            <td>
                                                                <div class="input-form-info" id="birthday_holder">
                                                                    <input type="text" name="bd" id="birthday" placeholder="Birthday...">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="label-input">Location</td>
                                                            <td>
                                                            <div class="input-form-info">
                                                                <input type="text" name="location" id="location" placeholder="city/Country">
                                                            </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="label-input">Contacts</td>
                                                            <td>
                                                                <div class="input-form-info" id="conatnct_holder">
                                                                    <input type="text" name="contanct" id="contanct" placeholder="Contacts...">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="label-input">Deartment</td>
                                                            <td>
                                                                <div class="input-form-info">
                                                                    <select name="" id="department_list">
                                                                        
                                                                    </select>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="label-input">Gender</td>
                                                            <td>
                                                                <div class="input-form-info">
                                                                    <select name="" id="Gender">
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="submit-info">
                                                    <button type="button" id="update_data" onclick="update_data(this)">Update My data</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end addition of information -->
                                    <!-- ================================================================================================================================================ -->

                                    <!-- tab for Account settings -->
                                    <!-- =============================================================================================================================================== -->
                                    <div class="tab-pane" role="tabpanel" id="Account">
                                        <div class="group-description mt-4 col-10 ml-auto mr-auto">
                                            <div class="title-group-desc">General Account settings</div>
                                            <div class="short-desc-account">You can edit this information by fill in field next to every detail, It autosubmit when you leave the field</div>
                                            <div class="input-field mt-2">
                                                <table class="table table-borderless">
                                                    <tbody id="getAccountDetail">
                                                    
                                                    </tbody>
                                                </table>
                                                <div class="submit-info">
                                                    <button type="button" id="update_data" onclick="update_Account_info(this)">Update</button>
                                                </div>
                                            </div>
                                            <div class="title-group-desc">Change password</div>
                                            <div class="short-desc-account">You can change password by fill new password and comfirm it.</div>
                                            <div class="input-field mt-2">
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td class="present-action-table">New Password</td>
                                                            <td class="edit-field" id="new_password"><input type="password" name="" id="password_inputted" placeholder="Type New Password"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="present-action-table">Comfirm Password</td>
                                                            <td class="edit-field" id="comfirm_password"><input type="password" name="" id="comfirm_password_inputted" placeholder="Comfirm Password"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="submit-info">
                                                    <div class="error" id="errror"></div>
                                                    <button type="button" id="update_data" onclick="New_password(this)">Update</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end Account settings -->
                                    <!-- ========================================================================================================================================== -->

                                    <!-- tab for data and prefences -->
                                    <!-- ======================================================================================================================================= -->
                                    <div class="tab-pane" role="tabpanel" id="preferences">
                                        <div class="group-description mt-4 col-10 ml-auto mr-auto">
                                            <div class="title-group-desc">Data and preferences</div>
                                        </div>
                                    </div>
                                    <!-- end data and preferences -->
                                    <!-- ====================================================================================================================================== -->

                                    <!-- tabe for privacy -->
                                    <!-- ===================================================================================================================================== -->
                                    <div class="tab-pane" role="tabpanel" id="Privacy">
                                        <div class="group-description mt-4 col-10 ml-auto mr-auto">
                                            <div class="title-group-desc">Privacy</div>
                                            <div class="short-desc-account">This settings will affect your account visibility and accessbility</div>
                                            <div class="privacy-list">
                                                <div class="each-noti">
                                                    <div class="d-flex">
                                                        <div class="form--chicking mr-2"><input type="checkbox" name="" id="" onclick="update_location_setting(this)"></div>
                                                        <div class="privacy-noti">Enable My location to every one</div>
                                                    </div>
                                                    <div class="desc-settings">Enable my location to be visible to every one who can see my profile</div>
                                                </div>
                                                <!-- <div class="each-noti">
                                                    <div class="d-flex">
                                                        <div class="form--chicking mr-2"><input type="checkbox" name="" id="" checked></div>
                                                        <div class="privacy-noti">Enable my email to be visible to everyone</div>
                                                    </div>
                                                    <div class="desc-settings">Enable my email to be accessable to every one who visit my profile</div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end privacy -->
                                    <!-- ============================================================================================================================================================= -->

                                    <!-- tab for notiication  -->
                                    <!-- ============================================================================================================================================================== -->
                                    <div class="tab-pane" role="tabpanel" id="Notifications">
                                        <div class="group-description mt-4 col-10 ml-auto mr-auto">
                                            <div class="title-group-desc">Notifications</div>
                                            <div class="notification-settings-list mt-3" id="notifiation_settings_sec">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab notification -->
                                    <!-- ======================================================================================================================================= -->

                                    <!-- tab for timeline  -->
                                    <!-- ========================================================================================================================================= -->
                                    <div class="tab-pane" role="tabpanel" id="Timeline">
                                        <div class="group-description mt-4 col-10 ml-auto mr-auto">
                                            <div class="title-group-desc">Timeline</div>
                                            <div class="mt-3">
                                                <div class="privacy-settings-each">
                                                    <div class="privacy-noti">Who can share your posts </div>
                                                    <div class="d-flex justify-content-between col-md-5 mt-1">
                                                        <div class="pri-pre d-flex">
                                                            <i class="fa fa-group mr-1 mt-1"></i>
                                                            <div class="pre-text">Companion</div>
                                                        </div>
                                                        <div class="checkbox-pri"><input type="radio" name="" id=""></div>
                                                    </div>
                                                    <div class="d-flex justify-content-between col-md-5 mt-1">
                                                        <div class="d-flex pri-pre">
                                                            <i class="fa fa-globe mr-1 mt-1"></i>
                                                            <div class="pre-text">Everyone</div>
                                                        </div>
                                                        <div class="checkbox-pri"><input type="radio" name="" id=""></div>
                                                    </div>
                                                    <div class="d-flex justify-content-between col-md-5 mt-1">
                                                        <div class="d-flex pri-pre">
                                                            <i class="fa fa-lock mr-1 mt-1"></i>
                                                            <div class="pre-text">only me</div>
                                                        </div>
                                                        <div class="checkbox-pri"><input type="radio" name="" id=""></div>
                                                    </div>
                                                </div>
                                                <div class="privacy-settings-each">
                                                    <div class="privacy-noti">Who can see others Posts on your time line</div>
                                                    <div class="d-flex justify-content-between col-md-5 mt-1">
                                                        <div class="pri-pre d-flex">
                                                            <i class="fa fa-group mr-1 mt-1"></i>
                                                            <div class="pre-text">Companion</div>
                                                        </div>
                                                        <div class="checkbox-pri"><input type="radio" name="" id=""></div>
                                                    </div>
                                                    <div class="d-flex justify-content-between col-md-5 mt-1">
                                                        <div class="d-flex pri-pre">
                                                            <i class="fa fa-globe mr-1 mt-1"></i>
                                                            <div class="pre-text">Everyone</div>
                                                        </div>
                                                        <div class="checkbox-pri"><input type="radio" name="" id=""></div>
                                                    </div>
                                                    <div class="d-flex justify-content-between col-md-5 mt-1">
                                                        <div class="d-flex pri-pre">
                                                            <i class="fa fa-lock mr-1 mt-1"></i>
                                                            <div class="pre-text">only me</div>
                                                        </div>
                                                        <div class="checkbox-pri"><input type="radio" name="" id=""></div>
                                                    </div>
                                                </div>
                                                <div class="privacy-settings-each">
                                                    <div class="privacy-noti">Who can see Posts you shared</div>
                                                    <div class="d-flex justify-content-between col-md-5 mt-1">
                                                        <div class="d-flex pri-pre">
                                                            <i class="fa fa-globe mr-1 mt-1"></i>
                                                            <div class="pre-text">Everyone</div>
                                                        </div>
                                                        <div class="checkbox-pri"><input type="radio" name="" id=""></div>
                                                    </div>
                                                    <div class="d-flex justify-content-between col-md-5 mt-1">
                                                        <div class="d-flex pri-pre">
                                                            <i class="fa fa-lock mr-1 mt-1"></i>
                                                            <div class="pre-text">only me</div>
                                                        </div>
                                                        <div class="checkbox-pri"><input type="radio" name="" id=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab Timeline -->
                                    <!-- ================================================================================================================================================================ -->

                                    <!-- tab for public posts  -->
                                    <!-- ==================================================================================================================================================================== -->
                                    <div class="tab-pane" role="tabpanel" id="Public">
                                        <div class="group-description mt-4 col-10 ml-auto mr-auto">
                                            <div class="title-group-desc">Public posts</div>
                                            <div></div>
                                            <div class="mt-3">
                                                <div class="privacy-settings-each">
                                                    <div class="privacy-noti">Who can Like and comment on my profile photo</div>
                                                    <div class="d-flex justify-content-between col-md-5 mt-1">
                                                        <div class="pri-pre d-flex">
                                                            <i class="fa fa-group mr-1 mt-1"></i>
                                                            <div class="pre-text">Companion</div>
                                                        </div>
                                                        <div class="checkbox-pri"><input type="radio" name="" id=""></div>
                                                    </div>
                                                    <div class="d-flex justify-content-between col-md-5 mt-1">
                                                        <div class="d-flex pri-pre">
                                                            <i class="fa fa-globe mr-1 mt-1"></i>
                                                            <div class="pre-text">Everyone</div>
                                                        </div>
                                                        <div class="checkbox-pri"><input type="radio" name="" id=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab public post -->
                                    <!-- =================================================================================================================== -->
                                </div>
                                <!-- end settings -->
                                <!-- ============================================================================================================== -->
                                <!-- ============================================================================================================== -->


                                <!-- tabs for group element -->
                                <!-- ============================================================================================================== -->
                                <!-- ============================================================================================================== -->
                                <div class="department-name-course">

                                    <!-- tab content for user status -->
                                    <!-- ========================================================================================================== -->
                                    <div class="tab-content">

                                        <!-- tab for timeline -->
                                        <!-- ======================================================================================================================= -->
                                        <div class="tab-pane active" role="tabpanel" id="TimelinePost">
                                            <!-- posts -->
                                            <div class="course-department mt-4">
                                                <div class="section-title">
                                                    <div>OnTimeline</div>
                                                </div>
                                                <div class="activity-list mt-3" id="activity_posts">

                                                    <!-- each activity -->
                                                    <!-- ================================================================================================================================== -->
                                                    <div class="each-activity">
                                                        <div><div class="poster-image"><img src="../Images/religions/each-religion/budhism/tester-Tyvg1zigZ14-unsplash.jpg" alt="" width="100%" height="100%"></div></div>
                                                        <!-- main target -->
                                                        <!-- ========================================================================================================================================== -->
                                                        <div class="main-target">
                                                            <div class="poster-detail">
                                                                <div class="poster-name">Manirabona hirwa patience</div>
                                                                <div class="caption-require">
                                                                    <span>Plains Wars, series of conflicts from the early 1850s through the late 1870s between Native Americans and the United States, along with its Indian allies, over control of the Great Plains between the Mississippi River and the Rocky Mountains. The initial major confrontation, sometimes known as the...
                                                                    Encyclopedia / United States History</span>
                                                                </div>
                                                                <div class="media">
                                                                    <video src="../videos/group/Sia & Rihanna - Beautiful People.webm" loop width="100%" height="100%"></video>
                                                                    <div class="control-video d-flex"><i class="fa fa-play" onclick="playOrPause(this)" id="playBtn"></i></div>
                                                                    <div class="video-controls">
                                                                        <div class="video-status mb-2">
                                                                            <div class="status-number d-flex justify-content-between">
                                                                                <div id="currentTime">00:00 / 00:00</div>
                                                                                <small></small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="video-stream-line" id="seek-bar"><div id="fill"></div></div>
                                                                    </div>
                                                                </div>
                                                                <div class="user-accurancy">
                                                                    <div class="comment-count" data-toggle="collapse" data-target="#comment-found-onpost"><i class="fa fa-comment-o mr-1"></i> <span>546</span></div>
                                                                    <div class="likes"><i class="fa fa-heart-o mr-1"></i> <span>46K</span></div>
                                                                    <div class="repost"><i class="fa fa-retweet mr-1"></i> <span>45</span></div>
                                                                    <div class="add-comment" data-toggle="collapse" data-target="#add_comment">Add your comment</div>
                                                                </div>
                                                                <div class="comment-section-addition collapse" id="add_comment">
                                                                    <div class="add-comments-area">
                                                                        <div><div class="user-site-image"><img src="../Images/religions/each-religion/budhism/ryan-miglinczy-NNZJ8TnWUvE-unsplash.jpg" alt="" width="100%" height="100%"></div></div>
                                                                        <div class="comment-textarea"><textarea name="" id="" cols="30" rows="2" placeholder="Write text comments..."></textarea></div>
                                                                        <div class="btn-add-comment"><button>post</button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-found collapse" id="comment-found-onpost">
                                                                    <div class="list-comment-found">

                                                                        <div class="each-comment">
                                                                            <div class="inner-commet">
                                                                                <div><div class="commeter-img"><img src="../Images/religions/each-religion/budhism/jopeel-quimpo-qP4A-5EloaM-unsplash.jpg" alt="" width="100%" height="100%"></div></div>
                                                                                <div class="comment">
                                                                                    <div class="commeter-name">Manirabona hirwa patience</div>
                                                                                    <div class="real-comment">
                                                                                        <span>American Civil War, four-year war (1861–65) between the United States and 11 Southern states that seceded from the Union and formed the Confederate States of America. The secession of the Southern states (in chronological order, South Carolina, Mississippi, Florida, Alabama, Georgia, Louisiana,...
                                                                                            Encyclopedia / United States History</span>          
                                                                                    </div>
                                                                                    <div class="user-accurancy">
                                                                                        <div class="comment-count"><i class="fa fa-comment-o mr-1"></i> <span class="pre-accurate">Commentes</span> <span>546</span></div>
                                                                                        <div class="likes"><i class="fa fa-heart-o mr-1"></i> <span class="pre-accurate">Likes</span> <span>46K</span></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end main target div -->
                                                        <!-- ========================================================================================================================================== -->
                                                    </div>
                                                    <!-- end each activity -->
                                                    <!-- ============================================================================================================================================== -->

                                                </div>
                                            </div>
                                            <!-- end timeline -->
                                            <!-- =============================================================================================================================================================== -->

                                        </div>
                                        <!-- end timeline -->
                                        <!-- =================================================================================================================================================================== -->
                                        <!-- ==================================================================================================================================================================== -->

                                        <!-- tab for companion -->
                                        <!-- ========================================================================================================================================================================== -->
                                        <!-- =========================================================================================================================================================================== -->
                                        <div class="tab-pane" role="tabpanel" id="Companion">
                                            <div class="course-department mt-4">
                                                <div class="section-title">
                                                    <div>Companion</div>
                                                </div>
                                                <div class="activity-list members-section mt-3">
                                                    <!-- followers -->
                                                    <!-- =================================================================== -->
                                                    <!-- ======================================================================= -->
                                                    <div class="member-list mr-auto ml-auto">
                                                        <div class="Approved">Followers</div>
                                                        <div id="my_followers">

                                                        </div>
                                                    </div>
                                                    <!-- end followers -->
                                                    <!-- ============================================================================================================== -->
                                                    <!-- =============================================================================================================== -->

                                                    <!-- following -->
                                                    <!-- =================================================================================================================== -->
                                                    <!-- =================================================================================================================== -->
                                                    <div class="wait-approval-member">
                                                        <!-- following list -->
                                                        <!-- =================================================================================================== -->
                                                        <!-- =================================================================================================== -->
                                                        <div class="unApproved-list">
                                                            <div class="Approved">Following</div>
                                                            <div id="following_user">

                                                            </div>
                                                        </div>
                                                        <!-- end following list -->
                                                        <!-- ================================================================================================================================== -->
                                                        <!-- ================================================================================================================================== -->
                                                    </div>
                                                    <!-- end following -->
                                                    <!-- ==================================================================================================================================== -->
                                                    <!-- ====================================================================================================================================== -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end tab for Companion -->
                                        <!-- ========================================================================================================================================= -->
                                        <!-- ========================================================================================================================================= -->


                                        <!-- tab for courses -->
                                        <!-- =================================================================================================================================================== -->
                                        <!-- =================================================================================================================================================== -->
                                        <div class="tab-pane" role="tabpanel" id="Courses">
                                            <div class="course-department mt-4">
                                                <div class="section-title">
                                                    <div>Classes</div>
                                                </div>
                                                <div class="activity-list members-section mt-3">
                                                    <div class="member-list mr-auto ml-auto" id="courses_followed">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end tab for course -->
                                        <!-- ================================================================================================================================================== -->
                                        <!-- ================================================================================================================================================== -->


                                        <!-- tab for media -->
                                        <!-- ================================================================================================================================================== -->
                                        <!-- ================================================================================================================================================= -->
                                        <div class="tab-pane" role="tabpanel" id="media">
                                            <div class="course-department mt-4">
                                                <div class="section-title">
                                                    <div>Photos and Videos</div>
                                                </div>
                                                <div class="activity-list media-section mt-3">

                                                    <!-- tab photos shared and video -->
                                                    <!-- ========================================================================================================= -->
                                                    <div class="media-divider">

                                                        <!-- tab for photos -->
                                                        <!-- ================================================================================================================================ -->
                                                        <div class="photos-shared" id="photos_shared">
                                                            
                                                        </div>
                                                        <!-- end for photos -->
                                                        <!-- =================================================================================================================================== -->

                                                        <!-- video shared -->
                                                        <!-- =================================================================================================================================== -->
                                                        <div class="videos-shared-post" id="video_shared">

                                                        </div>
                                                        <!-- end video shared -->
                                                        <!-- ========================================================================================================================================== -->
                                                        <!-- ========================================================================================================================================== -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end tab for media -->
                                        <!-- =============================================================================================================================================== -->
                                        <!-- =============================================================================================================================================== -->

                                    </div>
                                </div>
                                <!-- end bottom section -->
                                <!-- =============================================================================================================== -->
                                <!-- =============================================================================================================== -->

                            </div>
                            <!-- end align columly -->
                            <!-- ================================================================================================================================ -->
                            <!-- ================================================================================================================================ -->

                        </div>
                        <!-- end down top content -->
                        <!-- ====================================================================================================================================== -->
                        <!-- ===================================================================================================================================== -->

                    </div>
                </div>
                <!-- end left side-content -->
                <!-- ======================================================================================================================== -->
                <!-- ======================================================================================================================== -->

            </div>
        </div>
        <!-- end body section -->
        <!-- ======================================================================================================================================= -->
        <!-- ======================================================================================================================================= -->
        <!-- ======================================================================================================================================= -->
        
 
       <!-- javascript external file, type js  and libraries-->
       <!-- ================================================ -->
       <!-- ========================================================================================== -->
       <script src="../Assets/js/video_controll.box.js"></script>
       <script src="../Assets/js/settings.box.js"></script>
       <script src="../Assets/js/profile.load.data.js"></script>
       <script src="../Assets/js/show_profile_content.js"></script>

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
       <!-- ========================================================================================================================================== -->
       <!-- ========================================================================================================================================== -->
   </body>
</html>
<?php } ?>