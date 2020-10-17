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
        <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../Lib/slick/slick.css">
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
                            <input type="text" id="search-course" name="search-course" placeholder="Search courses" autocomplete="off" onkeyup="search_course()">
                        </div>
                        <div class="submit-search"><button onclick="search_course()">Seach</button></div>
                    </div>
                    <div class="search-course-result" id="search-course-result">
                        <div class="searched-title"><i class="fa fa-search"></i> Result</div>
                        <div class="search-area">
                            <div class="search-list" id="execute_result">

                            </div>
                        </div>
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
                        <div class="courses-list cs-hidden" id="autoWidth">

                            <a href="software-development/trigonometry.php" style="color:  #041a2f;"><div class="each-course">
                                <div class="course-image"><img src="../Images/course-img/trigonometry.png" alt="trigonometry" width="100%" height="100%"></div>
                                <div class="course-desc">
                                    <div class="course-name">Algebra and trigonometry</div>
                                    <div class="course-description">
                                        Trigonometry studies relationship involving lengths and angle of a triangle,
                                        check basic algebra & trigonometry. 
                                    </div>
                                    <div class="course-lessons">
                                        <span class="count-lesson">3 Lessons</span>
                                        <!-- <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span> -->
                                    </div>
                                </div>
                            </div></a>
                            <a href="software-development/general-phyisics.php" style="color:  #041a2f;"><div class="each-course">
                                <div class="course-image"><img src="../Images/course-img/phyisics.png" alt="phyisics" width="100%" height="100%"></div>
                                <div class="course-desc">
                                    <div class="course-name">Apply general physics</div>
                                    <div class="course-description">
                                        One of the disciplines of natural science that studies 
                                        about the various aspects of the matters, evolution and energy.
                                    </div>
                                    <div class="course-lessons">
                                        <span class="count-lesson">5 Lessons</span>
                                        <!-- <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span> -->
                                    </div>
                                </div>
                            </div></a>
                            <a href="software-development/secure-database.php" style="color:  #041a2f;"><div class="each-course">
                                <div class="course-image"><img src="../Images/course-img/Database-Security.jpg" alt="database security" width="100%" height="100%"></div>
                                <div class="course-desc">
                                    <div class="course-name">Secure a database</div>
                                    <div class="course-description">
                                        The collective measures used to protect and secure database 
                                        or database management software from illegitimate use and 
                                        malicious attacks.
                                    </div>
                                    <div class="course-lessons">
                                        <span class="count-lesson">6 Lessons</span>
                                        <!-- <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span> -->
                                    </div>
                                </div>
                            </div></a>
                            <a href="software-development/backend-application.php" style="color:  #041a2f;"><div class="each-course">
                                <div class="course-image"><img src="../Images/course-img/backend.jpg" alt="backend applications" width="100%" height="100%"></div>
                                <div class="course-desc">
                                    <div class="course-name">Develop backend applications</div>
                                    <div class="course-description">
                                            Computer program (such as server software) that remains in the background, or resides on a
                                            server located in a back room.
                                    </div>
                                    <div class="course-lessons">
                                        <span class="count-lesson">7 Lessons</span>
                                        <!-- <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span> -->
                                    </div>
                                </div>
                            </div></a>
                            <a href="software-development/system-analysis-and-design.php" style="color:  #041a2f;"><div class="each-course">
                                <div class="course-image"><img src="../Images/course-img/system-anlysis.jpg" alt="system analysis" width="100%" height="100%"></div>
                                <div class="course-desc">
                                    <div class="course-name">system analysis and design</div>
                                    <div class="course-description">
                                        Analysts repetitively learn new approaches and different 
                                        techniques for building the system more effectively and efficiently.
                                    </div>
                                    <div class="course-lessons">
                                        <span class="count-lesson">8 Lessons</span>
                                        <!-- <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span> -->
                                    </div>
                                </div>
                            </div></a>
                            <a href="software-development/small-scale-ict-project.php" style="color:  #041a2f;"><div class="each-course">
                                <div class="course-image"><img src="../Images/course-img/Small-scale.jpg" alt="small scale projects" width="100%" height="100%"></div>
                                <div class="course-desc">
                                    <div class="course-name">Small scale ICT projects</div>
                                    <div class="course-description">
                                            Contracted date when activities begin.
                                            When actions begin pertaining to a contract.
                                            must begin work on project on the commencement date.
                                    </div>
                                    <div class="course-lessons">
                                        <span class="count-lesson">2 Lessons</span>
                                        <!-- <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span> -->
                                    </div>
                                </div>
                            </div></a>
                            <a href="software-development/setup-database-server.php" style="color:  #041a2f;"> <div class="each-course">
                                <div class="course-image"><img src="../Images/course-img/setup-database-server.jpg" alt="setup database server" width="100%" height="100%"></div>
                                <div class="course-desc">
                                    <div class="course-name">Setup database server</div>
                                    <div class="course-description">
                                        Setup Computer program that provides a service to another computer programs (and its user) and In a data center.
                                    </div>
                                    <div class="course-lessons">
                                        <span class="count-lesson">7 Lessons</span>
                                        <!-- <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span> -->
                                    </div>
                                </div>
                            </div></a>
                            <a href="software-development/deploy-web-application.php" style="color:  #041a2f;"><div class="each-course">
                                <div class="course-image"><img src="../Images/course-img/ictprojects.jpg" alt="deploy a web application" width="100%" height="100%"></div>
                                <div class="course-desc">
                                    <div class="course-name">Deploy a web application</div>
                                    <div class="course-description">
                                        Process of copying, configuring and enabling 
                                        a specific application to a specific base URL 
                                        on Server or on cluster.
                                    </div>
                                    <div class="course-lessons">
                                        <span class="count-lesson">3 Lessons</span>
                                        <!-- <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span> -->
                                    </div>
                                </div>
                            </div></a>
                            <a href="software-development/develop-web-application.php" style="color:  #041a2f;"><div class="each-course">
                                <div class="course-image"><img src="../Images/course-img/develop-web-application.jpg" alt="develop web application" width="100%" height="100%"></div>
                                <div class="course-desc">
                                    <div class="course-name">Develop a web application</div>
                                    <div class="course-description">
                                        PHP is a server side scripting language. that is used to develop Static 
                                        websites or Dynamic websites or Web applications. 
                                    </div>
                                    <div class="course-lessons">
                                        <span class="count-lesson">4 Lessons</span>
                                        <!-- <span>4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span> -->
                                    </div>
                                </div>
                            </div></a>
    
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==================================================================================================================================================== -->
        
    
        <!-- javascript external file, type js  and libraries-->
        <!-- ========================================================================================================================================== -->
        <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="../Lib/jquery/jquery.min.js"></script>
        <script src="../Lib/jquery/jquery-3.3.1.min"></script>
        <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
        <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
        <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
        <script src="../Lib/slick/slick.js"></script>
        <script src="../Assets/js/header.box.js"></script>
        <script src="../Assets/js/all-courses.js"></script>
        <script>
            // initialize slick
            $(document).ready(function(){
                $('.courses-list').slick({
                    dots: true,
                    centerMode: true,
                    centerPadding: '60px',
                    slidesToShow: 3,
                    responsive: [
                        {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                        },
                        {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                        }
                    ]
                });
            });
        </script>
        <script>
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