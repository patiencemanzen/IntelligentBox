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
       <link rel="stylesheet" href="../Assets/css/header.box.css">

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
       <link rel="stylesheet" href="../Assets/css/pre-loader-image.css">
   
   </head>
   <body>

        <!-- top navigation bar -->
        <!-- ============================================================================================================ -->
        <!-- ============================================================================================================= -->
        <nav class="top-header-fixed fixed-top">
            <div class="company-present-logo d-flex justify-content-between">
                <div class="logo-present"> intelligent box </div>
                <div class="small-dev-nav" onclick="openNavSmall_device()"><i class="fa fa-navicon"></i></div>
            </div>

            
            <!-- this apply on small deivce -->
            <!-- ========================================================================================================================= -->
            <!-- ========================================================================================================================= -->
            <div id="sideDev" class="sideNav_smalldev">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="top_int_logo"><img src="../images/intelligent_box_brand.png" alt=""></div>
                <div class="nav-icons">
 
                    <!-- bell icon notification -->
                    <!-- ======================================================================================================================================== -->
                    <div class="nav-item">
                        <a class="nav-link" id="notification_icon" data-toggle="tooltip" data-placement="bottom" title="Notifications" onclick="openNotificationArea_small()"><i class="fa fa-bell-o"></i> <span class="pre-top"> Notifications </span> </a>
                        <div id="count_noti_small"></div>
                        <div class="popup-notification-nav none" id="notification_popUp_left_small">
                            <div class="div-title">Notifications</div>
                            <div class="noti-holder" id="display_noti_small">

                            </div>
                        </div>
                    </div>
                    <!-- end notification -->
                    <!-- ========================================================================================================================================== -->

                    <!-- news notification icon -->
                    <!-- ======================================================================================================================================= -->
                    <div class="nav-item"  data-toggle="tooltip" data-placement="bottom" title="News" onclick="loadPage()">
                        <a class="nav-link" href="../World-News/"><i class="fa fa-newspaper-o"></i> <span class="pre-top"> News </span></a>
                    </div>
                    <!-- end news -->
                    <!-- ======================================================================================================================================= -->

                    <!-- home notification icon -->
                    <!-- =============================================================================================================================================== -->
                    <div class="nav-item"  data-toggle="tooltip" data-placement="bottom" title="Home">
                        <a class="nav-link" href="../Home/"> <i class="fa fa-home"></i> <span class="pre-top"> Home </span></a>
                    </div>
                    <!-- end hone -->
                    <!-- ================================================================================================================================================= -->

                    <!-- =========================================================================== -->
                    <div class="nav-item"  data-toggle="tooltip" data-placement="bottom" title="History">
                        <a class="nav-link" href="../History/"><i class="fa fa-clock-o"></i> <span class="pre-top"> History </span></a>
                    </div>
                    <!-- end history -->
                    <!-- ============================================================================ -->
                    
                    <!-- history notification icon -->
                    <!-- ============================================================================== -->
                    <div class="nav-item"  data-toggle="tooltip" data-placement="bottom" title="History">
                        <a class="nav-link" href="../Religion/"><i class="fa fa-navicon" data-toggle="tooltip" data-placement="bottom" title="History"></i> <span class="pre-top"> Religions </span></a>
                        <!-- <div class="counter">9+</div> -->
                    </div>
                    <!-- end history -->
                    <!-- ================================================================================ -->

                     <!-- usr profile image and search -->
                    <!-- ================================================================================================================ -->
                    <div class="search-user-student d-flex mb-4 position-relative">
                        <!--user-image -->
                        <!-- ================================================================================ -->
                        <div class="user-nav-image">
                            <a href="../Profile/profile.php"><div class="pre-nav-image" id="small-profile-image">
                                
                            </div></a>
                        </div>
                        <!-- end user image -->
                        <!-- ================================================================================== -->

                        <!-- search input ans it result -->
                        <!-- ===================================================================================================================== -->
                        <div class="search-everything">
                            <div class="search-student-form d-flex">
                                <input type="text" id="searc_small" onkeyup="resultSection_small()" class="search-student-control" placeholder="Search intelligent" autocomplete="off" width="100%" height="100%">
                                <i class="fa fa-search ml-2" onclick="resultSection_small()"></i>
                            </div>
                        </div>
                        <div class="search-result shadow-sm" id="search-result_small">
                            <div class="result-show" id="small_search_result">
        
                            </div>
                        </div>
                        <!-- end search input and it result -->
                        
                    </div>
                    <!-- end user profile image and search -->
                    <!-- ================================================================================================================ -->

                </div>
            </div>
            <!-- end small device -->
            <!-- ============================================================================================================================ -->
            <!-- ============================================================================================================================ -->



            <!-- subnavbar down -->
            <!-- ============================================================================================================================ -->
            <!-- =========================================================================================================================== -->
            <div class="navigation-bar-icon">
                <div class="nav-icons">
                    <!-- global session email variables -->
                    <!-- ===================================================================================================== -->
                    <input type="hidden" name="" id="user_mail" value="<?php echo $Session_email_call; ?>">

                    <!-- bell icon notification -->
                    <!-- ======================================================================================================================================== -->
                    <div class="nav-item">
                        <a class="" onclick="openNotificationArea()"><i class="fa fa-bell-o" id="notification_icon" data-toggle="tooltip" data-placement="bottom" title="Notifications"></i> <span class="pre-top"> Notifications </span> </a>
                        <div id="count_notification"></div>
                        <div class="popup-notification-nav none" id="notification_popUp">
                            <div class="div-title">Notifications</div>
                            <div class="noti-holder" id="notification_holder">

                            </div>
                        </div>
                    </div>
                    <!-- end notification -->
                    <!-- ========================================================================================================================================== -->

                    <!-- news notification icon -->
                    <!-- ======================================================================================================================================= -->
                    <div class="nav-item">
                        <a class="" href="../World-News/"><i class="fa fa-newspaper-o" data-toggle="tooltip" data-placement="bottom" title="News"></i> <span class="pre-top"> News </span></a>
                        <!-- <div class="counter">9+</div> -->
                    </div>
                    <!-- end news -->
                    <!-- ======================================================================================================================================= -->

                    <!-- home notification icon -->
                    <!-- =============================================================================================================================================== -->
                    <div class="nav-item" id="nav-item" onclick="unsetPosts(this)">
                        <a class="" href="../Home/"> <i class="fa fa-home" data-toggle="tooltip" data-placement="bottom" title="Home"></i> <span class="pre-top"> Home </span></a>
                        <div id="count_posts"></div>
                    </div>
                    <!-- end hone -->
                    <!-- ================================================================================================================================================= -->

                    <!-- =========================================================================== -->
                    <div class="nav-item">
                        <a class="" href="../History/"><i class="fa fa-clock-o" data-toggle="tooltip" data-placement="bottom" title="History"></i> <span class="pre-top"> History </span></a>
                        <!-- <div class="counter">9+</div> -->
                    </div>
                    <!-- end history -->
                    <!-- ============================================================================ -->
                    
                    <!-- history notification icon -->
                    <!-- ============================================================================== -->
                    <div class="nav-item">
                        <a class="" href="../Religion/"><i class="fa fa-navicon" data-toggle="tooltip" data-placement="bottom" title="History"></i> <span class="pre-top"> Religions </span></a>
                        <!-- <div class="counter">9+</div> -->
                    </div>
                    <!-- end history -->
                    <!-- ================================================================================ -->


                    <!-- usr profile image and search -->
                    <!-- ================================================================================================================ -->
                    <div class="search-user-student d-flex ml-auto mr-3">
                        <!--user-image -->
                        <!-- ================================================================================ -->
                        <div class="user-nav-image">
                            <a href="../Profile/profile.php">
                                <div class="pre-nav-image" style="margin-top: 2px;" id="header_profile">  </div>
                                <div class="user_top_name"><?php echo $lastName; ?></div>
                            </a>
                        </div>
                        <!-- end user image -->
                        <!-- ================================================================================== -->

                        <!-- search input ans it result -->
                        <!-- ===================================================================================================================== -->
                        <div class="position-relative">
                            <div class="search-everything">
                                <div class="search-student-form d-flex">
                                    <input type="text" id="search" oninput="resultSection()" class="search-student-control" placeholder="Search intelligent" autocomplete="off">
                                    <i class="fa fa-search ml-2" onclick="resultSection()"></i>
                                </div>
                            </div>
                            <div class="search-result" id="search-result">
                                <div class="result-show" id="search_result_show">
                                    <div class="search_loader ml-auto mr-auto" id="load_search">
                                        <div class="shape shape-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end search input and it result -->
                        
                    </div>
                    <!-- end user profile image and search -->
                    <!-- ================================================================================================================ -->

                    <!-- APPLY ON SMALL DEVICE -->
                    <!-- ================================================================================================================= -->
                    <div class="menu-small">
                        <div class="navbar-nav-icons"><i class="fa fa-navicon"></i></div>
                    </div>
                    <!-- END SMALL QUERY -->
                    <!-- ================================================================================================================== -->

                </div>
            </div>
            <!-- end subnav down -->
            <!-- ======================================================================================================================================= -->
            <!-- ======================================================================================================================================= -->

        </nav>
        <!-- end top navigation -->
        <!-- ======================================================================================================================================= -->
        <!-- ======================================================================================================================================= -->
        
        
        <!-- javascript external file, type js  and libraries-->
        <!-- ======================================================================================== -->
        <!-- ======================================================================================== -->

        <script src="../Assets/js/header.box.js"></script>
        <script src="../Assets/js/header_content.box.js"></script>

        <script src="../Lib/ckeditor/ckeditor.js"></script>
        <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="../Lib/bootstrap/js/bootstrap-datepicker.js"></script> 
        <script src="../Lib/jquery/jquery.min.js"></script>
        <script src="../Lib/jquery/perfect-scrollbar.jquery.min.js"></script>
        <!-- <script src="../Lib/lightbox/js/lightbox-plus-jquery.min.js"></script> -->
        <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
        <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
        <script src="../Lib/popper/popper.min.js"></script>
        <script src="../Lib/venobox/venobox.js"></script>
        <script src="../Lib/wow/wow.min.js"></script>
        <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
        <script src="loader.js"></script>
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
        <script>
            CKEDITOR.replace('content');
        </script>

        <!-- end libraries -->
        <!-- ====================================================================================================================== -->
        <!-- ====================================================================================================================== -->

   </body>
</html>