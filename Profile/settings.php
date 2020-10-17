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
       <link rel="stylesheet" href="../Assets/css/settings.box.css">

       <!-- external css file/ libraries -->
       <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
       <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
       <link rel="stylesheet" href="../Lib/slick/slick.css">
   
   </head>
   <body class="bg-white">

        <!-- Section that will hold header -->
        <!-- ================================================================================================================================================== -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- ================================================================================================================================================== -->

        <!-- start body section -->
        <!-- ================================================================================================================================================= -->
        <div class="body-section mt-5">
            <div class="container">
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">

                <!-- left-side-content -->
                <!-- ======================================================================================================================= -->
                <div class="left-side ml-auto container mr-auto col-xs-12 col-sm-10">
                    <div class="left-holder">

                        <!-- top section -->
                        <!-- ================================================================================================================= -->
                        <div class="top-section">

                            <!-- top background -->
                            <!-- ============================================================== -->
                            <div class="top-background position-relative" id="hold_top_background">
                                
                            </div>
                            <!-- ================================================================= -->

                            <div class="group-top-detail">
                                <div class="name-search">
                                    <div class="group-name-title"><i class="fa fa-user mr-2" onclick="openNav()"></i><?php echo $firstName; ?> <?php echo $lastName;  ?></div>

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
                                                <div class="each-setting">
                                                    <div class="title-settings">Friends</div>
                                                    <div class="reply-setting" id="discover-student">

                                                    </div>
                                                </div>
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
                            </div>

                            <!-- navbar for user statues -->
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
                            <!-- ===================================================================================================================================================================================================== -->

                        </div>
                        <!-- ================================================================================================================== -->


                        <!-- down top background: image -->
                        <!-- ===================================================================================================================================== -->
                        <div class="d-flex position-relative">
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
                                            </ul>

                                            <div class="about-us text-center">
                                                <div class="services d-flex justify-content-between">
                                                    <a href="../About/terms_condition.php"><div>Terms and Conditions</div></a>
                                                    <a href="../About/Privacy.php"><div>Privacy and Safety</div></a>
                                                </div>
                                                <div class="company">Intelligent box <i class="fa fa-copyright mr-1"></i> 2020</div>
                                            </div>
                                        </div>
                                    </div>
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
                                    <li><a class="" data-toggle="tab" href="#Notifications" role="tab">  
                                        <div class="each-conf">
                                            <div class="icon-pre-conf-type"><i class="fa fa-bell-o"></i></div>
                                            <div class="conf-title">Notifications</div>
                                        </div>
                                    </a></li>
                                </ul>
                            </div>
                            <!-- =================================================================================================================== -->
                        
                            </div>
                            <!-- ======================================================================================================================================== -->
                           

                            <!-- align element columly -->
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
                                            </div>
                                        </div>
                                    </div>
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
                                    <!-- =================================================================================================================== -->
                                </div>
                                <!-- ============================================================================================================== -->


                                <!-- tabs for group element -->
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
                                                    <div>Timeline</div>
                                                </div>
                                                <div class="activity-list mt-3" id="activity_posts">
                                            
                                                </div>
                                            </div>
                                            <!-- =============================================================================================================================================================== -->

                                        </div>
                                        <!-- ==================================================================================================================================================================== -->

                                        <!-- tab for companion -->
                                        <!-- =========================================================================================================================================================================== -->
                                        <div class="tab-pane" role="tabpanel" id="Companion">
                                            <div class="course-department mt-4">
                                                <div class="section-title">
                                                    <div>Companion</div>
                                                </div>
                                                <div class="activity-list members-section mt-3">
                                                    <!-- followers -->
                                                    <!-- ======================================================================= -->
                                                    <div class="member-list mr-auto ml-auto">
                                                        <div class="Approved">Followers</div>
                                                        <div id="my_followers">

                                                        </div>
                                                    </div>
                                                    <!-- =============================================================================================================== -->

                                                    <!-- following -->
                                                    <!-- =================================================================================================================== -->
                                                    <div class="wait-approval-member">
                                                        <!-- following list -->
                                                        <!-- =================================================================================================== -->
                                                        <div class="unApproved-list">
                                                            <div class="Approved">Following</div>
                                                            <div id="following_user">

                                                            </div>
                                                        </div>
                                                        <!-- ================================================================================================================================== -->
                                                    </div>
                                                    <!-- ====================================================================================================================================== -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ========================================================================================================================================= -->


                                        <!-- tab for courses -->
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
                                        <!-- ================================================================================================================================================== -->


                                        <!-- tab for media -->
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
                                                        <!-- =================================================================================================================================== -->

                                                        <!-- video shared -->
                                                        <!-- =================================================================================================================================== -->
                                                        <div class="videos-shared-post" id="video_shared">

                                                        </div>
                                                        <!-- ========================================================================================================================================== -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- =============================================================================================================================================== -->

                                    </div>
                                </div>
                                <!-- =============================================================================================================== -->

                            </div>
                            <!-- ================================================================================================================================ -->

                        </div>
                        <!-- ===================================================================================================================================== -->

                    </div>
                </div>
                <!-- ======================================================================================================================== -->

            </div>
        </div>
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
        <script src="../Lib/jquery/jquery.min.js"></script>
        <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
        <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
        <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
        <script>
                $(document).ready(function() {
                    //init DateTimePickers
                    md.initFormExtendedDatetimepickers();
                });
        </script>
        <!-- ========================================================================================================================================== -->
   </body>
</html>
<?php } else {
    header("Location: ../account_shortcut.box.php");
    exit();
} ?>