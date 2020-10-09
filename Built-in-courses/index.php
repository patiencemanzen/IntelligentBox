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
        <meta name="description" content="E-learning website that help everyone who want to learn intellectual skills like software development, share what you're about and challenge with other connection and become profession in it. intelligent box is good website for you to become what you dream about and it connect you around the world with many other professions student and teacher." />
        <meta name="keywords" content="social network,social media, learning, e-learning, share, friends, challenges, e-tvet, courses, schools, create, skills, account, signin, online charting, online learning, courses, groups, intelligentbox rwanda, e-learning rwanda, connect, intelligentbox, microbox, box rwanda, help" />
        <meta name="author" content="Manirabona Patience" />
        <meta name="robots" content="index, follow"/>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title>intelligentBox</title>

        <link rel="shortcut icon" href="Images/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="../Assets/css/all-course.css">

        <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
        <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
        <link rel="stylesheet" href="../Lib/animate/animate.min.css">
        <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../Lib/lightbox/css/lightbox.min.css">
        <link rel="stylesheet" href="../Lib/owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="../Lib/venobox/venobox.css">
    </head>
    <body class="bg-white">

        <!-- Section that will hold header -->
        <!-- ======================================================================================================== -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- end header section -->
        <!-- ========================================================================================================== -->    

        <!-- GLOBAL JS EMAIL -->
        <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
        <!-- END GLOBAL EMAIL -->

        <!-- SEARCH COURSE -->
        <!-- =================================================================================================================================================== -->
        <div class="top-search-bar">
            <div class="container">
                <div class="search-course">
                    <div class="search-title">Course search</div>
                    <div class="search-eng">
                        <div class="search-c">
                            <input type="text" id="" name="" placeholder="Search courses" autocomplete="off">
                        </div>
                        <div class="submit-search"><button>Seach</button></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========================================================================================================================================================== -->

        <!-- ALL COURSES -->
        <!-- ==================================================================================================================================================== -->
        <div class="all-courses">
            <div class="container">
                <div class="courses-section">
                    <div class="course-section-title">Software Development</div>
                    <div class="c-list position-relative">
                        <div class="prev_btn"><i class="fa fa-angle-left"></i></div>
                            <div class="courses-list cs-hidden" id="autoWidth">

                                <a href="software-development/trigonometry.html" style="color:  #041a2f;"><div class="each-course">
                                    <div class="course-image"><img src="../Images/course-img/trigonometry.png" alt="" width="100%" height="100%"></div>
                                    <div class="course-desc">
                                        <div class="course-name">Algebra and trigonometry</div>
                                        <div class="course-description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad modi iste in aut? 
                                        </div>
                                        <div class="course-lessons">
                                            <span class="count-lesson">10 Lessons</span>,
                                            <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span>
                                        </div>
                                    </div>
                                </div></a>
                                <a href="software-development/general-phyisics.html" style="color:  #041a2f;"><div class="each-course">
                                    <div class="course-image"><img src="../Images/course-img/phy-2.png" alt="" width="100%" height="100%"></div>
                                    <div class="course-desc">
                                        <div class="course-name">Apply general physics</div>
                                        <div class="course-description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad modi iste in aut? 
                                        </div>
                                        <div class="course-lessons">
                                            <span class="count-lesson">10 Lessons</span>,
                                            <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span>
                                        </div>
                                    </div>
                                </div></a>
                                <a href="software-development/secure-database.html" style="color:  #041a2f;"><div class="each-course">
                                    <div class="course-image"><img src="../Images/course-img/Database-Security.jpg" alt="" width="100%" height="100%"></div>
                                    <div class="course-desc">
                                        <div class="course-name">Secure a database</div>
                                        <div class="course-description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad modi iste in aut? 
                                        </div>
                                        <div class="course-lessons">
                                            <span class="count-lesson">10 Lessons</span>,
                                            <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span>
                                        </div>
                                    </div>
                                </div></a>
                                 <div class="each-course">
                                    <div class="course-image"><img src="../Images/course-img/backend.jpg" alt="" width="100%" height="100%"></div>
                                    <div class="course-desc">
                                        <div class="course-name">Develop backend applications</div>
                                        <div class="course-description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad modi iste in aut? 
                                        </div>
                                        <div class="course-lessons">
                                            <span class="count-lesson">10 Lessons</span>,
                                            <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="each-course">
                                    <div class="course-image"><img src="../Images/course-img/system anlysis.jpg" alt="" width="100%" height="100%"></div>
                                    <div class="course-desc">
                                        <div class="course-name">system analysis and design</div>
                                        <div class="course-description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad modi iste in aut? 
                                        </div>
                                        <div class="course-lessons">
                                            <span class="count-lesson">10 Lessons</span>,
                                            <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="each-course">
                                    <div class="course-image"><img src="../Images/course-img/ict-projects-for-social-awareness-1-638.jpg" alt="" width="100%" height="100%"></div>
                                    <div class="course-desc">
                                        <div class="course-name">Small scale ICT projects</div>
                                        <div class="course-description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad modi iste in aut? 
                                        </div>
                                        <div class="course-lessons">
                                            <span class="count-lesson">10 Lessons</span>,
                                            <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="each-course">
                                    <div class="course-image"><img src="../Images/course-img/Data-Encryption-and-Ways-to-Secure-Your-Database-1-scaled.jpg" alt="" width="100%" height="100%"></div>
                                    <div class="course-desc">
                                        <div class="course-name">Setup database server</div>
                                        <div class="course-description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad modi iste in aut? 
                                        </div>
                                        <div class="course-lessons">
                                            <span class="count-lesson">10 Lessons</span>,
                                            <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="each-course">
                                    <div class="course-image"><img src="../Images/course-img/ict projects.jpg" alt="" width="100%" height="100%"></div>
                                    <div class="course-desc">
                                        <div class="course-name">Deploy a web application</div>
                                        <div class="course-description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad modi iste in aut? 
                                        </div>
                                        <div class="course-lessons">
                                            <span class="count-lesson">10 Lessons</span>,
                                            <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="each-course">
                                    <div class="course-image"><img src="../Images/course-img/develop-web-application.jpg" alt="" width="100%" height="100%"></div>
                                    <div class="course-desc">
                                        <div class="course-name">Develop a web application</div>
                                        <div class="course-description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad modi iste in aut? 
                                        </div>
                                        <div class="course-lessons">
                                            <span class="count-lesson">10 Lessons</span>,
                                            <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span>
                                        </div>
                                    </div>
                                </div>
        
        
                            </div>
                        <div class="next_btn"><i class="fa fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==================================================================================================================================================== -->
        
    
        <!-- javascript external file, type js  and libraries-->
        <!-- ========================================================================================================================================== -->
        <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="../Lib/custom/custom.js"></script>
        <script src="../Lib/easing/easing.min.js"></script>
        <script src="../Lib/jquery/jquery-migrate.min.js"></script>
        <script src="../Lib/jquery/jquery.min.js"></script>
        <script src="../Lib/jquery/jquery-3.3.1.min"></script>
        <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
        <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
        <script src="../Lib/wow/wow.min.js"></script>
        <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
        <script src="../Assets/js/header.box.js"></script>
        <script src="../Assets/js/courses.box.js"></script>
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
        <!-- ================================================================================================================================================== -->
    </body>
 </html>
 <?php }else{
    header("Location: ../account_shortcut.box.php");
    exit();
}?>