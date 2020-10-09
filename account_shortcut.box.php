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
        <link rel="stylesheet" href="Assets/css/account_shortcuts.box.css">

        <link rel="stylesheet" href="Lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="Lib/material/css/material-dashboard.css?v=2.1.1">
        <link rel="stylesheet" href="Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
        <link rel="stylesheet" href="Lib/animate/animate.min.css">
        <link rel="stylesheet" href="Lib/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="Lib/lightbox/css/lightbox.min.css">
        <link rel="stylesheet" href="Lib/owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="Lib/venobox/venobox.css">
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
                            <li><a href="index.php"><i class="fa fa-user"></i> Create account/Home</a></li>
                            <li class="Privacy"><a href="About/Privacy.php"><i class="fa fa-shield"></i> Privacy and Safety</a></li>
                            <li class="Conditions"><a href="About/terms_condition.php"><i class="fa fa-institution"></i> Terms and Conditions</a></li>
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
            <div class="sign-users">
               <div class="inner-content">
                    <form action="sign_in_shortcut.php" method="POST" id="signIn">
                        <div class="account-title">
                            <?php if(isset($_REQUEST['session'])){?>
                                Hey, something went wrong!, Please sign in again! 
                            <?php }else if(isset($_REQUEST['logout'])){ ?>
                                Hey, We will be happy to see you back!
                            <?php }else{ ?>
                                Sign me in
                            <?php } ?>
                        </div>
                        <div class="forms">
                            <div class="user-email" id="user-email"><input type="text" id="signEmail" name="user_email" placeholder="Your email..."></div>
                            <div class="user-password" id="user-password"><input type="password" name="usr_password" id="signPwd" placeholder="Your Password"></div>
                        </div>
                        <div class="signin-btn">
                            <div class="forget-password">
                                <div class="remember-me mt-2">Rememeber me <input type="checkbox" name="rememberUser" id="check-remember-me"></div>
                                <!-- <a href="#">Forget Password</a> -->
                            </div>
                            <div><button class="btn-signin" type="button" onclick="signMeIn(this)"><i class="fa fa-sign-in"></i> Sign In</button></div>
                        </div>
                    </form>
               </div>
            </div>

            <!-- When user setup cookies -->
            <!-- ========================================================================================================================== -->
            <div class="cookie_setting" id="cookie_setting_down">
                <?php if(isset($_COOKIE['Scyllar_Email']) && isset($_COOKIE['Scyllar_password'])){ ?>
                    <?php if(isset($_COOKIE['Scyllar_Email']) == "" && isset($_COOKIE['Scyllar_password']) == ""){ ?>
                    
                    <?php } if(isset($_COOKIE['Scyllar_Email']) && isset($_COOKIE['Scyllar_password'])){?>
                        <input type="hidden" id="user_email_cookie" value="<?php echo $_COOKIE['Scyllar_Email']; ?>">
                        <script>
                            setInterval(() => {
                                setedCookie();
                            }, 1000);
                            function setedCookie(){
                                $(document).ready(function(){
                                    var user_email_cookie = document.getElementById("user_email_cookie").value;
                                    var user_password_cookie = "<?php echo $_COOKIE['Scyllar_password']; ?>";

                                    $("#cookie_setting_down").load("show_trades.php", {
                                        cookie: "cookie",
                                        getCookie_email: user_email_cookie,
                                        getCookie_pass: user_password_cookie
                                    });
                                });
                            }
                        </script>
                    <?php } ?>
                <?php }else{ ?>
                <?php } ?>
            </div>
            <!-- ================================================================================================================================= -->
        </div>
        <!-- ============================================================================================================================ -->


        <!-- javascript external file, type js  and libraries-->
        <!-- ========================================================================================================================================== -->
        <script src="Assets/js/sign_in_shortcut.box.js"></script>
        <script src="Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="Lib/custom/custom.js"></script>
        <script src="Lib/easing/easing.min.js"></script>
        <script src="Lib/jquery/jquery-migrate.min.js"></script>
        <script src="Lib/jquery/jquery.min.js"></script>
        <script src="Lib/jquery/jquery-3.3.1.min"></script>
        <script src="Lib/material/js/material-dashboard?v=2.1.1.js"></script>
        <script src="Lib/now-ui-kit/now-ui-kit.js"></script>
        <script src="Lib/wow/wow.min.js"></script>
        <script src="Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
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
        <!-- end libraries -->
        <!-- ================================================================================================================================================== -->
    </body>
 </html>