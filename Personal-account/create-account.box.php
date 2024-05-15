<!DOCTYPE html>
 <html lang="en">
    <head>
        <!-- meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="description" content="E-learning website that help everyone who want to learn intellectual skills like software development, share what you're about and challenge with other connection and become profession in it. intelligent box is good website for you to become what you dream about and it connect you around the world with many other professions student and teacher." />
        <meta name="keywords" content="social network,social media, learning, e-learning, share, friends, challenges, e-tvet, courses, schools, create, skills,create account, signin, online chating, online learning, courses, groups, intelligentbox rwanda, e-learning rwanda, connect, intelligentbox, microbox, box rwanda, help, intelligentbox account, box account intelligentbox signin" />
        <meta name="author" content="Manirabona Patience" />
        <meta name="robots" content="index, follow"/>
        <meta name="apple-mobile-web-app-capable" content="yes">

        <title>intelligentBox account</title>

        <link rel="shortcut icon" href="Images/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="../Assets/css/create-account.box.css">

        <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
        <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
        <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
    </head>
    <body>

        <!-- Top navbar present -->
        <!-- ============================================================================================================ -->
        <nav class="header-fixed">
            <div class="inner-header-1">
                <!-- container intelligent box title -->
                <!-- =================================================================================================== -->
                <div class="container">
                    <div class="intelligent-box-logo"> intelligentBox </div>
                </div>
                <!-- end container -->
                <!-- =================================================================================================== -->
            </div>
            <div class="page_links">
                <div class="container">
                    <div class="links">
                        <ul>
                            <li><a href="../index.php">Home page</a></li>
                            <li class="Privacy"><a href="About/Privacy.php"><i class="fa fa-shield"></i> Privacy and Safety</a></li>
                            <li class="Conditions"><a href="About/terms_condition.php"><i class="fa fa-institution"></i> Terms and Conditions</a></li>
                            <li class="Conditions"><a href="account_shortcut.box.php"><i class="fa fa-sign-in"></i> I have an account!, sign me in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end top navbar present -->
        <!-- ====================================================================================================================== -->

        <!-- Down section inputs form -->
        <!-- ============================================================================================================================= -->
        <div class="down-input-forms">
            <div class="black-back"></div>
            <div class="background-text"><span class="left-text">intellig</span>e<span class="right-text">ntBox</span></div>
            <div class="sign-users wow fadeInUp" id="create-account-now">
               <div class="inner-content position-relative">
                    <form action="sign_in_shortcut.php" method="POST" id="signIn">
                        <div class="account-title" id="account-title">Create your account</div>
                        <div class="forms">
                            <div class="both-names">
                                <div class="user-name" id="user-firstname"><input type="text" id="firstName" name="firstName" placeholder="Firstname"></div>
                                <div class="user-name ml-2" id="user-lastname"><input type="text" id="lastName" name="lastName" placeholder="Lastname"></div>
                            </div>
                            <div class="user-email" id="user-email"><input type="text" id="signEmail" name="user_email" placeholder="Your email..."></div>
                            <div class="choose-section" id="user-email">
                                <select name="choosen_class" id="section">
                                    <option value="student" id="account">Student Account</option>
                                    <option value="trainer" id="account">Trainer Account</option>
                                </select>
                            </div>
                            <div class="user-password" id="user-password"><input type="password" name="usr_password" id="signPwd" placeholder="Your Password"></div>
                        </div>
                        <div id="error-found"></div>
                        <div class="signin-btn">
                            <div><button class="btn-signin" type="button" onclick="signMeUp(this)">Create now</button></div>
                        </div>
                    </form>
                    <div class="over-loader" id="over-loader">
                        <div class="container-pre-signup" id="Preloader">
                            <div class="shape shape-1"></div>
                            <div class="shape shape-2"></div>
                            <div class="shape shape-3"></div>
                            <div class="shape shape-4"></div>
                        </div>
                   </div>
                </div>
            </div>
            <div class="verify-me wow fadeInUp" id="verify-account">
               <div class="inner-content position-relative">
                    <form action="sign_in_shortcut.php" method="POST" id="signIn">
                        <div class="account-title" id="account-title">Check code we sent to you</div>
                        <div class="forms">
                            <div class="user-email" id="user-code"><input type="number" id="code" name="user_email" placeholder="Verification code"></div>
                        </div>
                        <div id="error-found-verify"></div>
                        <div class="signin-btn">
                            <input type="hidden" name="email" id="userMail">
                            <div><button class="btn-signin" type="button" onclick="verifyMe(this)">Verify now</button></div>
                        </div>
                    </form>
                    <div class="over-loader" id="over-loader-verify">
                        <div class="container-pre-signup" id="Preloader">
                            <div class="shape shape-1"></div>
                            <div class="shape shape-2"></div>
                            <div class="shape shape-3"></div>
                            <div class="shape shape-4"></div>
                        </div>
                   </div>
                </div>
            </div>
            <div id="get-started-now"></div>
        </div>
        <!-- ============================================================================================================================ -->


        <!-- javascript external file, type js  and libraries-->
        <!-- ========================================================================================================================================== -->
        <script src="../Assets/js/create-account.js"></script>
        <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="../Lib/jquery/jquery.min.js"></script>
        <script src="../Lib/jquery/jquery-3.3.1.min"></script>
        <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
        <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
        <script src="../Lib/wow/wow.min.js"></script>
        <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
        <script>
            // Initiate the wowjs animation library
            new WOW().init();
        </script>
        <!-- end libraries -->
        <!-- ================================================================================================================================================== -->
    </body>
 </html>