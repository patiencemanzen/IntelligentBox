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
        <link rel="shortcut icon" href="Images/favicon.png" type="image/x-icon">

        <!-- external style link, type css file-->
        <link rel="stylesheet" href="Assets/css/index.box.css">
        <link rel="stylesheet" href="Assets/css/preloader.btn.css">

        <!-- external css file/ libraries -->
        <link rel="stylesheet" href="Lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="Lib/material/css/material-dashboard.css?v=2.1.1">
        <link rel="stylesheet" href="Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
        <link rel="stylesheet" href="Lib/animate/animate.min.css">
        <link rel="stylesheet" href="Lib/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="Lib/jquery/jquery.fancybox.css">
        <link rel="stylesheet" href="Lib/lightbox/css/lightbox.min.css">
        <link rel="stylesheet" href="Lib/owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="Lib/slick/slick.css">
        <link rel="stylesheet" href="Lib/theme-color/violet-theme.css">
        <link rel="stylesheet" href="Lib/venobox/venobox.css">
    
    </head>
    <body>
        <!-- Top navbar present -->
        <!-- ============================================================================================================ -->
        <!-- ============================================================================================================ -->
        <!-- ============================================================================================================ -->
        <nav class="header-fixed">
            <div class="inner-header-1">
                <!-- container intelligent box title -->
                <!-- =================================================================================================== -->
                <!-- ==================================================================================================== -->
                <div class="container d-flex">
                    <div class="intelligent-box-logo"> intelligent box </div>
                </div>
                <!-- end container -->
                <!-- =================================================================================================== -->
                <!-- =================================================================================================== -->
            </div>

            <!-- second navbar -->
            <!-- =============================================================================================================== -->
            <!-- ================================================================================================================ -->
            <div class="sub-nav">
                <div class="container">
                    <div class="position-relative all-trades-section">
                        <div class="search-index course-search">
                            <div class="intelectual-skills"> intellectual skills </div>
                        </div>
                        <div class="search_trades_layer position-relative">
                            <div class="search-input d-flex">
                                <input type="text" name="search-everything" id="search-everything" placeholder="Seach trades..." autocomplete="off" oninput="openSearch()">
                                <i class="fa fa-search"></i>
                            </div>
                            <div class="seach-output" id="search-pop">
                                <div class="seach-keyword">you searched  <small class="ml-1 mr-1" id="countQuery"></small> <div id="searched_query">software</div></div>
                                <div class="seached-holder">
                                    <div class="timeline ml-2" id="holderSearch">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sign-in-btn create-account">
                            <ul>
                                <li class="all_trades_found" onclick="openTrade()"><a>All trades</a></li>
                                <li class="dis_short_devs"><a class="" data-toggle="tab" href="#signmeup" role="tab">
                                     I don't have account?, Sign me up
                                </a></li>
                            </ul>
                        </div>

                        <!-- show all trades supported -->
                        <!-- =========================================================================================== -->
                        <div class="all-course" id="all-trades">
                            <div class="title-course-trade mb-3">all Trades supported</div>
                            <div class="all-course-holder d-flex" id="fetch_all_trades">
        
                            </div>
                        </div>
                        <!-- end illustration -->
                        <!-- ============================================================================================= -->
                    </div>
                </div>
            </div>
            <!-- end secord navbar -->
            <!-- =================================================================================================================== -->
        </nav>
        <!-- end top navbar present -->
        <!-- ====================================================================================================================== -->
        <!-- ====================================================================================================================== -->

        
        <!-- TOP BACKGROUND IMAGE -->
        <!-- ====================================================================================================== -->
        <!-- ====================================================================================================== -->
        <div class="carousel slide shadow-none" data-ride="carousel" id="slides">
            <div class="carousel-inner shadow-none">
                <ul class="carousel-indicators">
                    <li class="active" data-target="#slides" data-slide-to="0"></li>
                    <li class="" data-target="#slides" data-slide-to="1"></li>
                    <li class="" data-target="#slides" data-slide-to="2"></li>
                    <li class="" data-target="#slides" data-slide-to="3"></li>
                    <li class="" data-target="#slides" data-slide-to="4"></li>
                    <li class="" data-target="#slides" data-slide-to="5"></li>
                    <li class="" data-target="#slides" data-slide-to="6"></li>
                    <li class="" data-target="#slides" data-slide-to="7"></li>
                </ul>
                <div class="carousel-inner shadow-sm">
                    <!-- start carousel items -->
                    <div class="carousel-item shadow-sm">
                        <img src="Images/index-img/slides/slide-1.jpg" class="shadow-none" height="100%" width="100%">
                    </div>
                    <div class="carousel-item"><img src="Images/index-img/slides/slide-4.jpg" alt="" height="100%" width="100%"></div>
                    <div class="carousel-item"><img src="Images/index-img/slides/slide-5.jpg" alt="" height="100%" width="100%"></div>
                    <div class="carousel-item"><img src="Images/index-img/slides/slide-6.jpg" alt="" height="100%" width="100%"></div>
                    <div class="carousel-item"><img src="Images/index-img/slides/slide-7.jpg" alt="" height="100%" width="100%"></div>
                    <div class="carousel-item"><img src="Images/index-img/slides/slide-8.jpg" alt="" height="100%" width="100%"></div>
                    <div class="carousel-item active"><img src="Images/index-img/slides/slide-9.jpg" alt="" height="100%" width="100%"></div>
                    <div class="carousel-item"><img src="Images/index-img/slides/slide-10.jpg" alt="" height="100%" width="100%"></div>
                    <!-- end carousel items -->
                </div>
            </div>
            <div class="over-carousel">
                <div class="container carousel-caption-down wow fadeInLeft col-md-6">
                    <p> 
                        Education opens up the mind, Expands it and allows you to improve your life for future, for tomorrow
                        belongs to those who prepare for it today.so, "start where you are. Use what you have. Do what you can". 
                        We never fail, We success or learn.
                    </p>
                </div>
           </div>  
        </div>
        <!-- end image non slide -->
        <!-- ============================================================================================================================================= -->
        <!-- ============================================================================================================================================= -->


        <!-- thumbnail -->
        <!-- ==================================================================================================================================================== -->
        <!-- ==================================================================================================================================================== -->
        <div class="thumbnail ml-auto mr-auto">
            <div class="container">
                <div class="align-thumbnails">
                    <div class="dis-grid">

                        <!-- LEFT THUMBNAIL CONTENT -->
                        <!-- ================================================================================================================================ -->
                        <div class="left_thumb_content">
                            <!-- short -->
                            <!-- =============================================================================================================== -->
                            <div>
                                <div class="active-column wow fadeInUp">
                                    <div class="img-full"><img src="images/index-img/world-1.jpg" alt="" width="100%" height="100%"></div>
                                    <div class="over-img-full">World required people who read and mantain thier future in mental way.</div>
                                </div>
                                <div class="active-column mt-4 wow fadeInUp">
                                    <div class="img-full"><img src="images/index-img/knowledge.jpg" alt="" width="100%" height="100%"></div>
                                    <div class="over-img-full">knowledge is not to know many things, Is to know who you are and what you deserve.</div>
                                </div>
                                <div class="connect_world mt-3 wow fadeInUp">
                                    <div class="img-full"><img src="images/index-img/connect.jpg" alt="" width="100%" height="100%"></div>
                                    <div class="over-img-full">Connect World's Education</div>
                                </div>
                            </div>
                            <!-- get started intro -->
                            <!-- =============================================================================================================== -->
                        </div>
                        <!-- ==================================================================================================================================== -->


                        <!-- MIDDLE THUMBNAIL CNTENT -->
                        <!-- ===================================================================================================================================== -->
                        <div class="middle_thumb_content">
                            <!-- first thumb nail -->
                            <!-- ========================================================================================================================== -->
                            <div>
                                <div class="thumbnail-items thumb-1 wow fadeInUp">
                                    <div class="thumbnail-images"><img src="images/index-img/thumbnail/thumbnail-2.jpg" alt="" width="100%" height="100%"></div>
                                    <div class="course-desc"> The history of specific area as your daily story</div>
                                    <div class="course-sub-desc">
                                        World history and topics to what you 
                                        like that makes your daily knowledge you ever had,
                                        Story we give you and story shared by your 
                                        friends.
                                    </div>
                                </div>
                                <div class="middle_img_pre wow fadeInUp">
                                    <div class=""><img src="images/index-img/thumbnail/thumbnail-8.jpg" alt="" width="100%" height="100%"></div>
                                </div>
                                <div class="thumbnail-items mt-3 thumb-1 wow fadeInUp">
                                    <div class="course-desc">Globle news from everywhere you want</div>
                                    <div class="course-sub-desc">
                                        Many great daily News from around world and what people think about,
                                        Minds on topics makes extrimily social communication of thoughts
                                    </div>
                                </div>
                            </div>
                            <!-- end first thumbnail -->
                            <!-- ================================================================================================================================ -->

                            <!-- secord thumbnail -->
                            <!-- ================================================================================================================================= -->
                            <div class="sep-dep-ex wow fadeInUp">
                                <div class="thumbnail-items">
                                    <div class="thumbnail-images"><img src="images/index-img/thumbnail/thumbnail-3.jpg" alt="" width="100%" height="100%"></div>
                                    <div class="course-desc">The world religions and their ancient culture </div>
                                    <div class="course-sub-desc">
                                        Big and many content about main world religion and it short history for
                                        intellectual people to mantain our believe among our religions culture.
                                    </div>
                                </div>
                                <div class="middle_img_pre wow fadeInUp">
                                    <div class=""><img src="images/index-img/thumbnail/thumbnail-7.jpg" alt="" width="100%" height="100%"></div>
                                </div>
                                <div class="thumbnail-items mt-3 wow fadeInUp">
                                    <div class="course-desc"> 
                                        World story on religions and news as updates.
                                    </div>
                                    <div class="course-sub-desc">
                                        Get more updates and thread on world religion
                                        and news at some time, what ather people think about it?,
                                        Everything is all about learning new thing daily.
                                    </div>
                                </div>
                            </div>
                            <!-- end secord thumbnail -->
                            <!-- ===================================================================================================================================== -->
                        </div>
                        <!-- ================================================================================================================================================= -->
                        
                        <!-- RIGHT THUMBNAIL CONTENT -->
                        <!-- ================================================================================================================================================= -->
                        <div class="right_thumb_content">
                            <!-- tab for sign up, sign in and others -->
                            <!-- =================================================================================================================== -->
                            <!-- ======================================================================================================================= -->
                            <div class="tab-content-container user-option wow fadeInUp">
                                <div class="card-content">

                                    <!-- card header -->
                                    <!-- ============================================================================================ -->
                                    <div class="card-header-content">
                                        <ul class="nav nav-tabs d-flex" role="tablist">
                                            
                                            <li class="nav-item">
                                                <a class="nav-link-top active" style="font-size: 16px;" data-toggle="tab" href="#intro" role="tab" style="font-size: 12px;">Top trades</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link-top" style="font-size: 16px;" data-toggle="tab" href="#signmeup" role="tab" style="font-size: 12px;">Sign me up</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link-top" style="font-size: 16px;" data-toggle="tab" href="#signmein" role="tab" style="font-size: 12px;">Sign me in</a>
                                            </li>
                                
                                        </ul>
                                    </div>
                                    <!-- end card header -->
                                    <!-- ========================================================================================================== -->

                                    <!-- card body -->
                                    <!-- ============================================================================================================ -->
                                    <div class="card-body-center">
                                        <!-- Tab panes -->
                                        <!-- ===================================================================================================================== -->
                                        <div class="tab-content">
                                            <!-- INTRODUCTION div -->
                                            <!-- =================================================================================================================== -->
                                            <div class="tab-pane active" id="intro" role="tabpanel">
                                                <div class="timeline" id="show_top_trades">

                                                </div>
                                            </div>
                                            <!-- end introduction div -->
                                            <!-- ==================================================================================================================================================== -->
                                            <!-- ======================================================================================================================================================= -->


                                            <!-- sign me up tab -->
                                            <!-- ====================================================================================================================================================== -->
                                            <!-- ====================================================================================================================================================== -->
                                            <div class="tab-pane" id="signmeup" role="tabpanel" style="padding: 0;">
                                                <!-- background image -->
                                                <!-- =================================================================== -->
                                                <div class="sign-me-up-backimage">
                                                    <img src="images/index-img/sign-me-up-1.jpg" width="100%" height="100%">
                                                </div>
                                                <!-- end background image -->
                                                <!-- ===================================================================== -->

                                                <!-- SIGN UP TAB -->
                                                <!-- =============================================================================================================== -->
                                                <!-- ================================================================================================================= -->
                                                <div class="student-trainer-option">

                                                        <!-- step indicatotr -->
                                                        <!-- =========================================================================== -->
                                                        <div style="text-align:center;margin-top:5px;">
                                                            <span class="step"></span>
                                                            <span class="step"></span>
                                                            <span class="step"></span>
                                                            <span class="step"></span>
                                                            <span class="step"></span>
                                                            <span class="step"></span>
                                                        </div>
                                                        <!-- end step indicator -->
                                                        <!-- ================================================================================== -->

                                                        <!-- next btn -->
                                                        <!-- ================================================================================== -->
                                                        <div class="create-btn d-flex justify-content-between" id="btn-signup">
                                                            <!-- preloader -->
                                                            <div class="container-pre-signup" id="Preloader">
                                                                <div class="shape shape-1"></div>
                                                                <div class="shape shape-2"></div>
                                                                <div class="shape shape-3"></div>
                                                                <div class="shape shape-4"></div>
                                                            </div>
                                                            <!-- end preloader -->
                                                        </div>
                                                        <!-- end next btn -->
                                                        <!-- ====================================================================================== -->

                                                        <!-- present and talk to user and user input-->
                                                        <!-- ======================================================================================= -->
                                                        <div class="tab-holder">
                                                            <form action="navigateUser.php" method="POST">
                                                                <!-- tab zero form option trainer or student -->
                                                                <!-- =============================================================================================================== -->
                                                                <div class="inputs-form tab">
                                                                    <div class="present-section">
                                                                        <div>
                                                                            Thank you for Using intelligent box, you will learn more thing about from history, religions and read more news from everywhere, explore many new connections and people you may like to share things. 
                                                                            Build up your mind and be the one you wish to be in another words be different in this wrestle world, Just join us Today.
                                                                        </div>
                                                                    </div>
                                                                    <div class="student-choise" onclick="nextPrev(1)">Get stated</div>
                                                                </div>
                                                                <!-- end tab one signup -->
                                                                <!-- ================================================================================================================= -->

                                                                <!-- tab one form sign up -->
                                                                <!-- =================================================================================================================== -->
                                                                <div class="inputs-form tab text-center" style="height: 100%">
                                                                    <label class="bmd-label text-center" id="bmd-label">Sign up</label>
                                                                    <div class="firstName form-groups" id="form-firstname">
                                                                        <input type="text" class="form-input" id="firstname-input" placeholder="Firstname" autocomplete="off">
                                                                    </div>
                                                                    <div class="lastName form-groups" id="form-lastname">
                                                                        <input type="text" class="form-input" id="lastname-input" placeholder="Lastname" autocomplete="off">
                                                                    </div>
                                                                    <div class="email form-groups" id="form-email">
                                                                        <input type="text" name="Email" class="form-input" id="email-input" placeholder="E-mail" autocomplete="off">
                                                                    </div>
                                                                    <div class="select_position mb-2">
                                                                        <select name="class" id="section">
                                                                            <option value="student" id="account">Student Account</option>
                                                                            <option value="trainer" id="account">Trainer Account</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="password form-groups" id="form-password">
                                                                        <input type="password" id="password-input" class="form-input"  placeholder="Password" autocomplete="off">
                                                                    </div>
                                                                    <div class="Msg"></div>
                                                                    <div class="passdowrd-message">Password must contain at least eight character longer including at least letters,numbers and symbols</div>
                                                                    <div class="submit-info-btn">
                                                                        <button type="button" class="submit-student" onclick="checkInput(this)">Submit</button>
                                                                    </div>
                                                                </div>
                                                                <!-- end tab one signup -->
                                                                <!-- ======================================================================================================================= -->

                                                            <!-- email validation tab -->
                                                            <!-- =======================================================================================================================-================ -->
                                                            <div class="tab email-validation">
                                                                <div class="validation-email">
                                                                    <div class="title-validation">Intelligent box verification</div>
                                                                    <div class="subtitle-validation">
                                                                        Check code we sent to <span id="sendEmailTo"></span>, input them to verify your account<span class="errorHolder" id="changeTab"></span>
                                                                    </div>
                                                                    <div class="bar-code">
                                                                        <div class="d-flex"><div class="start-code">Ibox--</div><div class="code-area" id="codeArea"><input type="text" name="" id="verifyMyCode" autocomplete="off" max="4" onkeyup="openBtn()"></div></div>
                                                                        <div class="submit-th-code">
                                                                            <div class="loader mr-3 mt-3"> 
                                                                                <svg class="circular" viewBox="25 25 50 50">
                                                                                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
                                                                                </svg> 
                                                                            </div>
                                                                            <button type="button" onclick="verifyMe(this)" id="verifyMeNow"> verify code </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end email validation tab -->
                                                            <!-- ================================================================================================================================ -->
                                                        
                                                            <!-- third tab user selection -->
                                                            <!-- ================================================================================================================================================ -->
                                                            <div class="tab third-tab">
                                                                <button type="button" class="submit-student mb-3" onclick="nextPrev(1)" id="submit-student">Next</button>
                                                                <div class="user-holder">
                                                                    <div class="tab-title">Suggestion students for you !!</div>
                                                                    <div class="subtitle">You will see their Posts and Story on your Home timeline</div>
                                                                    <div class="user-suggetion">
                                                                        <div class="suggestions-list" id="presentStudent">

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- end  selcttion area tab-->
                                                            <!-- ============================================================================================================================================================ -->

                                                            <!-- start  trainer selection area -->
                                                            <!-- ============================================================================================================================================================ -->
                                                            <div class="tab fourth-tab">
                                                                <button type="button" class="submit-student mb-3" onclick="nextPrev(1)" id="submit-student">Next</button>
                                                                <div class="fourth-content">
                                                                    <div class="tab-title">Suggestion trainers for you!!</div>
                                                                    <div class="subtitle">You will need their help in courses and training</div>
                                                                    <div class="user-suggetion">
                                                                        <div class="suggestions-list" id="presenttrainer">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end trainer selection -->
                                                            <!-- ============================================================================================================================================================== -->

                                                            <!-- welcome section -->
                                                            <!-- ============================================================================================================================================================== -->
                                                            <div class="tab welcome-tab">
                                                                <div class="wecome-section text-center">
                                                                    <div class="logo-title">
                                                                        <span>Intelligent box</span>
                                                                    </div>
                                                                    <div class="noticed-word">
                                                                        <p>
                                                                            Welcome to intelligent box we little bit customize your profile but soon you can do it yourself,
                                                                            you can get what people shared on you home timeline and choose which course and department you want to attend.
                                                                        </p>
                                                                    </div>
                                                                    <div class="welcome-word">you are Welcome !!</div>
                                                                    <div class="get-started-btn-welcome">
                                                                        <button type="submit" name="submit-form">Get started</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end welcome section  -->
                                                            <!-- ============================================================================================================================================================== -->
                                                    </div>
                                                    <!-- end step and user input -->
                                                    <!-- ============================================================================================================== -->
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- end sign me up tab -->
                                            <!-- END SIGN UP TAB -->
                                            <!-- ============================================================================================================================================ -->
                                            <!-- ============================================================================================================================================ -->


                                            <!-- sign me in tab -->
                                            <!-- ==================================================================================================================================================== -->
                                            <!-- ==================================================================================================================================================== -->
                                            <div class="tab-pane" id="signmein" role="tabpanel">

                                                <!-- sign in background image -->
                                                <!-- ========================================================================================================================= -->
                                                <div class="sign-me-up-backimage">
                                                    <img src="images/index-img/sign-me-up-1.jpg" width="100%" height="100%">
                                                </div>
                                                <!-- end sign in background -->
                                                <!-- ======================================================================================================================== -->

                                                <!-- sign in tab and input -->
                                                <!-- ========================================================================================================================= -->
                                                <div class="student-trainer-option p-4">
                                                    <!-- normal form -->
                                                    <form action="sign_me_in.php" method="POST" id="signIn">
                                                        <div class="pwdForget inputs-form text-center">
                                                            <div class="user_profile_image ml-auto mr-auto mb-2"><img src="Images/profile-img/profile-image/defaultProfileImage.png" alt="" width="100%" height="100%"></div>
                                                            <label class="bmd-label" onclick="ReadCookie()">Sign in now</label>
                                                            <div class="email form-groups" id="form-email">
                                                                <input type="text" name="submit_email" class="form-input" id="signEmail" autocomplete="off" placeholder="E-mail">
                                                            </div>
                                                            <div class="password form-groups" id="form-password">
                                                                <input type="password" name="submit_password" id="signPwd" class="form-input"  placeholder="Password" autocomplete="off">
                                                            </div>
                                                            <div class="check-remember-me-password d-flex mt-3 justify-content-between">
                                                                <div class="remember-me d-flex">
                                                                    <div class="check"><input type="checkbox" name="rememberUser" id="check-remember-me"></div>
                                                                    <div class="remember ml-2"> remember me </div>
                                                                </div>
                                                                <div class="forget-password">
                                                                    <div class="forget" onclick="forgetStep(1)">Forget password?</div>
                                                                </div>
                                                            </div>

                                                            <div class="signin-btn d-flex mt-3" id="btn-signup">
                                                                <div class="loader mr-3 mt-3"> 
                                                                    <svg class="circular" viewBox="25 25 50 50">
                                                                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
                                                                    </svg> 
                                                                </div>
                                                                <button type="button" name="submitSignin" class="submit-student-signin" onclick="signMeIn(this)" style="background: #041a2f;"><i class="fa fa-sign-in"></i> Sign me in </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!-- end normailForm -->

                                                    <!-- form email verification  -->
                                                    <div class="pwdForget email-verification">
                                                        <div class="email-verification-area">
                                                            <div class="email-verification-title">Email verification</div>
                                                            <div class="subtitle-verification" id="holdMsg">
                                                                Input your current email and Firstname we kept on last logs, so we can send a code to your email
                                                            </div>
                                                            <div class="input-verification">
                                                                <div class="firstname-verify" id="firstname-verify"><input type="text" name="" id="Firstname_forget" placeholder="Firstname" autocomplete="off"></div>
                                                                <div class="current-email"><input type="text" name="" id="email_forget" placeholder="E-mail" autocomplete="off"></div>
                                                            </div>
                                                            <div class="submit-email-verification d-flex">
                                                                <div class="loader mr-3 mt-3"> 
                                                                    <svg class="circular" viewBox="25 25 50 50">
                                                                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
                                                                    </svg> 
                                                                </div>
                                                                <button onclick="verifyEmail()"> 
                                                                    <div>Submit</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end email verification -->

                                                    <!-- email code verification -->
                                                    <div class="pwdForget email-code-verification">
                                                        <div class="verify-code">
                                                            <div class="code-verify-title"> Email code verification </div>
                                                            <div class="subtitle">
                                                                Enter the code we sent to <span id="holdDollar"></span> <span id="errorHolder"></span>
                                                            </div>
                                                            <div class="code-verified-input">
                                                                <div class="d-flex mt-3">
                                                                    <div class="pre-code">Ibox--</div>
                                                                    <div class="input-code-email" id="input-code-email"><input type="text" name="code" id="Verify_My_Digital_Code"></div>
                                                                </div>
                                                                <div class="submit-code d-flex">
                                                                    <div class="loader mr-3 mt-3"> 
                                                                        <svg class="circular" viewBox="25 25 50 50">
                                                                        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
                                                                        </svg> 
                                                                    </div>
                                                                    <button onclick="veriCode(this)"> Submit code </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end email verification  -->

                                                    <!-- new password settings -->
                                                    <div class="pwdForget new-password-setting">
                                                        <div class="input-newpassword">
                                                            <div class="code-verify-title"> New password </div>
                                                            <div class="subtitle">
                                                                Enter your new password down please!!, <span id="holderErrorRow"></span>
                                                            </div>
                                                            <div class="passowrd-input-new mt-1">
                                                                <div class="new-password-input"><input type="password" name="" id="newPassword" placeholder="New password" autocomplete="off"></div>
                                                                <div class="confurm-password"><input type="password" name="" id="confurmPassword" placeholder="Retype password" autocomplete="off"></div>
                                                                <div class="submit-new-password d-flex">
                                                                    <div class="loader mr-3 mt-2"> 
                                                                        <svg class="circular" viewBox="25 25 50 50">
                                                                        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
                                                                        </svg> 
                                                                    </div>
                                                                    <button onclick="newPassword()">Submit new password</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end new password  -->
                                                </div>
                                                <!-- end sign in tab and inputs -->
                                                <!-- ======================================================================================================================================= -->

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
                                                <!-- end cookie section -->
                                                <!-- ================================================================================================================================= -->

                                            </div>
                                            <!-- end top tab-pane  -->
                                            <!-- end sign in tab -->
                                            <!-- ===================================================================================================================================================== -->
                                            <!-- ====================================================================================================================================================== -->


                                            <!-- for footer tab-pane -->
                                            <!-- ======================================================================================================================================================= -->
                                            <!-- ======================================================================================================================================================== -->
                                            <div class="tab-pane" id="aboutus" role="tabpanel">
                                                <div class="about-detail">
                                                    <div class="logo-about"><img src="Images/microbox.png" alt="" width="100%" height="100%"></div>
                                                    <p class="full-desc ml-2">
                                                        <span class="title-company"> MicroBox </span><br>
                                                        <span class="sub-title">MicroBox Developers</span><br><br>
                                                        <span class="company-desc mt-2">
                                                            You can find us on any platforms and share, contuct and visit us and help us to big community, connect with us.
                                                        </span>
                                                        <div class="micro_social">
                                                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                        </div>
                                                    </p>
                                                </div>
                                                <hr>
                                                <div class="about-detail">
                                                    <div class="logo-about"><img src="Images/intelligent_box_brand.png" alt="" width="100%" height="100%"></div>
                                                    <p class="full-desc ml-2">
                                                        <span class="title-company"> Intelligent box </span><br>
                                                        <span class="sub-title"> Online leaning website</span><br><br>
                                                        <span class="company-desc mt-2">
                                                            Site that help any kind of personal to learn through online and get more content on technical training 
                                                            and other related skills, can also meet up with many people to share more content and communicate with them online.
                                                            we really appreciate you help to our community, we highly suggest you to envite your nearby, friends and your classmate to 
                                                            join intelligent box and learn more things you might use in future. 
                                                        </span>
                                                    </p>
                                                </div>
                                                <hr>
                                                <div class="about-detail">
                                                    <div class="logo-about"><img src="Images/index-img/founder.jpg" alt="" width="100%" height="100%"></div>
                                                    <p class="full-desc ml-2">
                                                        <span class="title-company">&copy; MicroBox Founder</span><br>
                                                        <span class="sub-title"> Manirabona Patience </span><br><br>
                                                        <span class="company-desc mt-3">
                                                        Manirabona is software developer who has 2+ of expirience in computer programing and web building
                                                        from world mission school.this site may help you at some point in you realy commit to know some thing different, i hightly recommend to focus 
                                                        on what realy like more then share what you got or better help from our trainer or nearby trainer.
                                                        </span>
                                                    </p>
                                                </div>
                                                <hr>
                                                <div class="mapouter">
                                                    <div class="gmap_canvas">
                                                        <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=fawe&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                        <a href="https://2torrentz.net">edraw max torrent</a>
                                                    </div>
                                                    <style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style>
                                                </div>
                                            </div>
                                            <!-- end about us -->
                                            <!-- ============================================================================================================================================================ -->
                                            <!-- ============================================================================================================================================================ -->


                                            <!-- start contuct us -->
                                            <!-- ======================================================================================================================================== -->
                                            <!-- ========================================================================================================================================= -->
                                            <div class="tab-pane text-center" id="contuctus" role="tabpanel">
                                                <div class="student-trainer-optio">

                                                    <!-- contucts -->
                                                    <!-- ============================================================================================ -->
                                                    <div class="descript-company">
                                                        <div class="email">Email: intelligentbox732@gmail.com</div>
                                                        <div class="Phone number">Phone-number: +250 780289432</div>
                                                        <div class="location">Address: Kigali, Rwanda</div>
                                                    </div>
                                                    <!-- end contucts -->
                                                    <!-- ============================================================================================ -->

                                                    <!-- inputs -->
                                                    <!-- =============================================================================================== -->
                                                    <div class="inputs-form mt-3">
                                                        <label class="bmd-label">Contuct us</label>
                                                        <div class="email form-groups" id="firstname_contuct">
                                                            <input type="text" class="form-input" id="contuct_firstname" autocomplete="off" placeholder="First-name">
                                                        </div>
                                                        <span id="firstnameMsg"></span>
                                                        <div class="email form-groups" id="Email_contuct">
                                                            <input type="text" class="form-input" id="contuct_Email" autocomplete="off" placeholder="E-mail">
                                                        </div>
                                                        <div class="email form-groups" id="subject">
                                                            <input type="text" class="form-input" id="contuct_subject" autocomplete="off" placeholder="Subject">
                                                        </div>
                                                        <div class="password form-groups" id="body_contuct">
                                                            <textarea id="contuct_body" class="form-input"  placeholder="Body" autocomplete="off" oninput="countLetters()"></textarea>
                                                            <span id="countedLetter"></span>
                                                        </div>

                                                        <div class="create-btn d-flex mt-3" id="btn-signup">
                                                            <button type="submit" class="submit-student-signin" onclick="contuctUs()">Send Email</button>
                                                            <div class="loader ml-3 mt-3" id="preloadContuct"> 
                                                                <svg class="circular" viewBox="25 25 50 50">
                                                                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
                                                                </svg> 
                                                            </div>
                                                        </div>
                                                        <div id="holdResponse"></div>
                                                    </div>
                                                    <!-- end inputs -->
                                                    <!-- ======================================================================================================================================= -->

                                                </div>
                                            </div>
                                            <!-- end contuct us -->
                                            <!-- ================================================================================================================================================ -->
                                            <!-- ==================================================================================================================================================== -->


                                            <!-- start developer -->
                                            <!-- developer tab -->
                                            <!-- ======================================================================================================================================================== -->
                                            <!-- ========================================================================================================================================================= -->
                                            <div class="tab-pane" id="developer" role="tabpanel">
                                                <di class="developer-area">
                                                    <div class="meet-team">Meet the Team</div>
                                                    <div class="each-developer">
                                                        <div class="developer-img position-relative">
                                                            <img src="Images/index-img/logo.png" alt="" width="100%" class="backgroundImage">
                                                            <div class="profile_image"><img src="Images/index-img/developer/founder.jpg" alt="" height="100%" width="100%"></div>
                                                        </div>
                                                        <div class="developer-name">Manirabona Patience</div>
                                                        <!-- <div class="function-user">Fullstack Developer</div>
                                                        <div class="function-user">Founder, MicroBox lab</div> -->
                                                        <div class="developer-desc">                                               
                                                            Manirabona has more than 2 years of experience as a Developer and programmer. He is the founder of intelligentBox website and works on intelligent 
                                                            box as full stack developer. With best knwoledge from world mission school and online coding websites
                                                        </div>
                                                        <div class="find-social-network">
                                                            <a href="https://www.facebook.com/nolanil.manirabona"><i class="fa fa-facebook-f"></i></a>
                                                            <a href="https://www.instagram.com/walker5chronicles"><i class="fa fa-instagram"></i></a>
                                                            <a href="https://twitter.com/ManirabonaW"><i class="fa fa-twitter"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="each-developer">
                                                        <div class="developer-img position-relative">
                                                            <img src="Images/index-img/logo.png" alt="" class="backgroundImage">
                                                            <div class="profile_image"><img src="Images/index-img/developer/Chrisostome.jpg" alt="" height="100%" width="100%"></div>
                                                        </div>
                                                        <div class="developer-name">Jean Chrisostom</div>
                                                        <div class="function-user">Fullstack Developer</div>
                                                        <div class="developer-desc">
                                                            Chrisostome is developer and web builder with 3+ years of expirience from world mission school and online web school. 
                                                        </div>
                                                        <div class="find-social-network">
                                                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="each-developer">
                                                        <div class="developer-img position-relative">
                                                            <img src="Images/index-img/logo.png" alt="" class="backgroundImage">
                                                            <div class="profile_image"><img src="Images/index-img/developer/rubagumya-remy.jpg" alt="" height="100%" width="100%"></div>
                                                        </div>
                                                        <div class="developer-name">Rubagumya Remy</div>
                                                        <div class="function-user">Fullstack Developer</div>
                                                        <div class="developer-desc">
                                                            Remy is programer and Web builder with 3+ years of expirience from world mission school and online coding schools. 
                                                        </div>
                                                        <div class="find-social-network">
                                                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                        </div>
                                                    </div>


                                                </div>
                                                <!-- end developer tab -->
                                                <!-- =========================================================================================================================================================== -->
                                            </div>
                                            <!-- end developer -->
                                            <!-- =============================================================================================================================================================== -->
                                            <!-- =============================================================================================================================================================== -->
                                        
                                        </div>
                                        <!-- end tab body -->
                                        <!-- =================================================================================================================================================================================== -->
                                        <!-- =================================================================================================================================================================================== -->

                                        <!-- card footer -->
                                        <!-- ============================================================================================================== -->
                                        <div class="card-footer-bottom">
                                            <ul class="nav nav-tabs d-flex down-tab" role="tablist">
                                                
                                                <li class="nav-item">
                                                    <a class="nav-link-footer" style="font-size: 16px;" data-toggle="tab" href="#aboutus" role="tab" style="font-size: 12px;">About us</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link-footer" style="font-size: 16px;" data-toggle="tab" href="#contuctus" role="tab" style="font-size: 12px;">Contuct us</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link-footer" style="font-size: 16px;" data-toggle="tab" href="#developer" role="tab" style="font-size: 12px;">MicroBox Team</a>
                                                </li>
                                
                                            </ul>
                                        </div>
                                        <!-- end card footer -->
                                        <!-- ================================================================================================================== -->
                                    </div>
                                    <!-- End Tabs on plain Card -->
                                    <!-- ========================================================================================================================= -->
                                </div>
                                <!-- end tab for sign up and sign in -->
                                <!-- ========================================================================================================================================= -->
                                <!-- ========================================================================================================================================= -->

                                <!-- OURSELF -->
                                <!-- ========================================================================================================================================= -->
                                <div class="intelligent_self mt-4 wow fadeInUp">
                                    <div class="self">
                                        <div class="Title_self">Intelligent  Box</div>
                                        <div class="desc_self">
                                            Connect with world's education and learn about Profession skills from profession People from around world. 
                                        </div>
                                        <div class="footer_copyright">
                                            IntelligentBox &copy; 2020, All Reserved
                                        </div>
                                    </div>
                                </div>
                                <!-- ========================================================================================================================================= -->
                            </div>
                            <!-- ================================================================================================================================================ -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end thambnail -->
            <!-- ========================================================================================================================================================= -->
            <!-- ========================================================================================================================================================= -->


            <!-- SECTION BACKGROUND FIXED -->
            <!-- ============================================================================================================================================= -->
            <div class="profession_detail">
                <div class="container">
                    <div class="section-header wow fadeInUp">
                        <div class="prof_title">Different Community</div>
                        <p>Intellectual skills and different Knowledge from different community that makes you person you will always be proud of, 
                            The only thing that will makes you who you want to be is to be who you are now, don't try to be like others, be different to them.
                        </p>
                    </div>
                </div>
            </div>
            <!-- ============================================================================================================================================= -->

            <!-- footer -->
            <!-- ===================================================================================================================================================================== -->
            <!-- ===================================================================================================================================================================== -->
            <div class="box-footer mb-2">
                <div class="container">
                    <div class="inner-footer wow fadeInUp">
                        <!-- terms and condition -->
                        <!-- ====================================================================================================== -->
                        <a href="About/terms_condition.php"><div class="condition d-flex">
                            <div class="condition-icons mt-1"><i class="fab fa-teamspeak"></i> <i class="fa fa-institution"></i></div>
                            <div class="condition-detail ml-2">
                                <div class="condition-title">Terms and Condition</div>
                                <div class="conditio-body"> Read intelligent box terms and condition that every users and members apply regularly</div>
                            </div>
                        </div></a>
                        <!-- end terms and condition -->
                        <!-- ======================================================================================================= -->

                        <!-- privacy and policy -->
                        <!-- ======================================================================================================== -->
                        <a href="About/Privacy.php"><div class="condition d-flex">
                            <div class="condition-icons mt-1"><i class="fa fa-shield"></i></div>
                            <div class="condition-detail ml-2">
                                <div class="condition-title">Privacy and Policy</div>
                                <div class="conditio-body">Privacy, Safety and Security of intelligent box Information and logs of users and members</div>
                            </div>
                        </div></a>
                        <!-- end privacy and policy -->
                        <!-- ============================================================================================================== -->
                        
                        <a><div class="condition">
                            <div class="pre-footer-log">
                                <div class="about-co-operation">I<i class="fa fa-sh"></i>Box</div>
                            </div>
                        </div></a>

                        <!-- help and service -->
                        <!-- ============================================================================================================= -->
                        <div class="condition d-flex">
                            <div class="condition-icons mt-1"><i class="fa fa-question"></i></div>
                            <div class="condition-detail ml-2">
                                <div class="condition-title">Help and Service</div>
                                <div class="conditio-body"> Help and support our future and community of intelligent Box Interconnection</div>
                            </div>
                        </div>
                        <!-- end helping and service -->
                        <!-- ================================================================================================================= -->

                        <!-- cookies -->
                        <!-- ================================================================================================================= -->
                        <div class="condition d-flex">
                            <div class="condition-icons mt-1"><i class="fas fa-stroopwafel"></i> <i class="fa fa-info-circle"></i></div>
                            <div class="condition-detail ml-2">
                                <div class="condition-title">Cookies</div>
                                <div class="conditio-body"> Small information stored in and keep your device known by intelligent box</div>
                            </div>
                        </div>
                        <!-- end cookies -->
                        <!-- ===================================================================================================================== -->
                    </div>
                </div>
            </div>
            <!-- end footer -->
            <!-- ============================================================================================================================================================================= -->
            <!-- ============================================================================================================================================================================= -->

            <!-- javascript external file, type js  and libraries-->
            <!-- ========================================================================================================================================== -->
            <!-- ========================================================================================================================================== -->
            <script src="Assets/js/index.tabStep.validate.js"></script>
            <script src="Assets/js/index.forgetPass.tab.js"></script>
            <script src="Assets/js/index.Signup.box.js"></script>
            <script src="Assets/js/index.Signin.box.js"></script>
            <script src="Assets/js/index.forgetPassword.box.js"></script>
            <script src="Assets/js/index.contuct_us.box.js"></script>
            <script src="Assets/js/index.show_trades.box.js"></script>

            <script src="Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
            <script src="Lib/bootstrap/js/bootstrap-datepicker.js"></script> 
            <script src="Lib/custom/custom.js"></script>
            <script src="Lib/date-picker/bootstrap-switch.js"></script>
            <script src="Lib/date-picker/nouislider.min.js"></script>
            <script src="Lib/easing/easing.min.js"></script>
            <script src="Lib/jquery/jquery-migrate.min.js"></script>
            <script src="Lib/jquery/jquery.bootstrap-wizard.js"></script>
            <script src="Lib/jquery/jquery.counterup.js"></script>
            <script src="Lib/jquery/jquery.fancybox.pack.js"></script>
            <script src="Lib/jquery/jquery.min.js"></script>
            <script src="Lib/jquery/jquery-3.3.1.min"></script>
            <script src="Lib/jquery/jquery.mixitup.js"></script>
            <script src="Lib/jquery/jquery.poptrox.min.js"></script>
            <script src="Lib/jquery/jquery.validate.min.js"></script>
            <script src="Lib/jquery/perfect-scrollbar.jquery.min.js"></script>
            <script src="Lib/lightbox/js/lightbox-plus-jquery.min.js"></script>
            <script src="Lib/material/js/material-dashboard?v=2.1.1.js"></script>
            <script src="Lib/now-ui-kit/now-ui-kit.js"></script>
            <script src="Lib/owlcarousel/owl.carousel.js"></script>
            <script src="Lib/popper/popper.min.js"></script>
            <script src="Lib/skel/skel.min.js"></script>
            <script src="Lib/slick/slick.js"></script>
            <script src="Lib/superfish/superfish.js"></script>
            <script src="Lib/venobox/venobox.js"></script>
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
            
                function scrollToDownload() {
            
                if ($('.section-download').length != 0) {
                    $("html, body").animate({
                    scrollTop: $('.section-download').offset().top
                    }, 1000);
                }
                }
                // Initiate the wowjs animation library
                new WOW().init();
            </script>
            <!-- end libraries -->
            <!-- ================================================================================================================================================== -->
            <!-- ================================================================================================================================================== -->
            
    </body>
 </html>