<?php 
    session_start();
    if(isset($_SESSION['Email'])){
        $Session_email_call = $_SESSION['Email'];
        $firstName = $_SESSION['Firstname'];
        $lastName = $_SESSION['Lastname'];
        $user_title = $_SESSION['title'];

        require_once ("../Scyllar.php");
        $new_connection = new Scyllar();

        $selectImage = "SELECT * FROM user_profile_image WHERE usr_email='$Session_email_call' AND status_image='1'";
        $executeImage = mysqli_query($new_connection->Frequency(),$selectImage);
        $fetchImage = mysqli_fetch_assoc($executeImage); 
            $profile_image = $fetchImage['profile_image'];
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
       <link rel="stylesheet" href="../Assets/css/religions.box.css">

       <!-- external css file/ libraries -->
       <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
       <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
       <link rel="stylesheet" href="../Lib/animate/animate.min.css">
       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
       <link rel="stylesheet" href="../Lib/lightbox/css/lightbox.min.css">
       <link rel="stylesheet" href="../Lib/slick/slick.css">
       <link rel="stylesheet" href="../Lib/venobox/venobox.css">
   
   </head>
   <body>

        <!-- Section that will hold header -->
        <!-- ================================================================================================================ -->
        <!-- ================================================================================================================ -->
        <!-- ================================================================================================================ -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- end header section -->
        <!-- ================================================================================================================ -->
        <!-- ================================================================================================================ -->
        <!-- ================================================================================================================ -->


       <!-- down section -->
       <!-- ================================================================================================================== -->
       <!-- ================================================================================================================== -->
       <!-- ================================================================================================================== -->
       <div class="container down-section">
           <div class="down-holde">

                <!-- GLOBAL JS EMAIL -->
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                <!-- END GLOBAL EMAIL -->

               <!-- top-background -->
               <!-- ========================================================================================================== -->
               <div class="top-background">
                   <img src="../Images/religions/top-background.png" alt="" width="100%" height="100%">
                   <div class="user-img-title">
                       <div class="user-img ml-auto mr-auto"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div>
                       <div class="title-religion mt-3">
                           <div class="quota"><i class="fa fa-user-o mr-2"></i> <?php echo $firstName; ?> <?php echo $lastName; ?></div>
                           <div class="quotes mt-2">
                                Prayer is not asking. It is a longing of the soul. It is daily admission of one's weakness. 
                                It is better in prayer to have a heart without words than words without a heart.
                           </div>
                       </div>
                   </div>
                </div>
                <!-- end background -->
                <!-- ========================================================================================================== -->

                <!-- down section -->
                <!-- =========================================================================================================== -->
                <div class="religions mt-4">
                    <div class="down-holder">

                        <!-- every religion -->
                        <!-- ============================================================================================================ -->
                        <div class="every-religion d-flex">
                            <div class="left-section mr-2">
                                <!-- 1 quotes -->
                                <div class="q1-quotes">
                                    <div class="d-flex">
                                        <div class="quotars">
                                            <div class="quote-img"><img src="../Images/religions/each-religion/christian/enoc-valenzuela-WJolaNbXt90-unsplash.jpg" alt="" width="100%" height="100%"></div>
                                            <div class="quote-img"><img src="../Images/religions/each-religion/christian/aaron-burden-H8s0PF2rcQs-unsplash.jpg" alt="" width="100%" height="100%"></div>
                                        </div>
                                        <div class="quote-detal ml-2 mt-1">
                                            <div class="lines">Christians Religion</div>
                                            <div class="quotes1-on-line mt-2 ml-2">
                                                Life is wasted if we do not grasp the glory of the cross, cherish it for the treasure that it is, and cleave to it as the hightest price of every pleasure
                                                and the deepest comfort in every pain.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex user-statistic mt-3 d-flex justify-content-between">
                                        <div class="member"><i class="fa fa-street-view mr-2"></i> Visitors <span class="view_chris">
                                            <script>
                                                setInterval(()=> {
                                                    $(document).ready(function(){
                                                        var post_identity_col = "1";
                                                        $(".view_chris").load("religion_content.php", {
                                                            getViews: post_identity_col
                                                        });
                                                    });
                                                }, 1000);
                                            </script>
                                        </span></div>
                                        <div class="news"><i class="fa fa-newspaper-o mr-2"></i> <span id="news_chris">
                                            <script>
                                                setInterval(()=> {
                                                    $(document).ready(function(){
                                                        var section = "Christian";
                                                        $("#news_chris").load("religion_content.php", {
                                                            getSection: section
                                                        });
                                                    });
                                                }, 1000);
                                            </script>
                                        </span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="back-img-religion">
                                <img src="../Images/religions/each-religion/christian/intro.jpg" alt="" width="100%" height="100%">
                                <a style="color: black" id="1" onclick="submit_view(this)"><div class="join"><i class="fa fa-plus"></i></div></a>
                                <script>     
                                    function submit_view(obj){
                                        var post_identity_row = obj.id;
                                        var requestNews = document.getElementById("hiddenEmail").value;
                                        $(document).ready(function(){
                                            $(this).load("religion_content.php", {
                                                getUser_post_identity: post_identity_row,
                                                user_email_post: requestNews
                                            }, function(data){
                                                window.location.assign("christians.php");
                                            });
                                        });
                                    }
                                </script>
                            </div>
                        </div>
                        <!-- end religion -->
                        <!-- ================================================================================================================= -->
                        
                        <!-- every religion -->
                        <!-- ========================================================================================================================== -->
                        <div class="every-religion  d-flex">
                            <div class="left-section mr-2">
                                <!-- 1 quotes -->
                                <div class="q1-quotes">
                                    <div class="d-flex">
                                        <div class="quotars">
                                            <div class="quote-img"><img src="../Images/religions/each-religion/islam/haidan-Az_mSeq7vQQ-unsplash.jpg" alt="" width="100%" height="100%"></div>
                                            <div class="quote-img"><img src="../Images/religions/each-religion/islam/syed-hussaini-ZGkyggqS8Io-unsplash.jpg" alt="" width="100%" height="100%"></div>
                                        </div>
                                        <div class="quote-detal ml-2 mt-1">
                                            <div class="lines">Islam Religion</div>
                                            <div class="quotes1-on-line mt-2 ml-2">
                                                When allah talks to giving to those who are in need of money, food, clothing, etc. in surah al-isra,
                                                He doesn't refer to it as "helping miskeen" or "giving charity to the miskeen" allah refers to 
                                                this act as giving them what they diserve .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex user-statistic mt-3 d-flex justify-content-between">
                                        <div class="member"><i class="fa fa-street-view mr-2"></i> Visitors <span class="view_isl">
                                            <script>
                                                setInterval(()=> {
                                                    $(document).ready(function(){
                                                        var post_identity_col = "2";
                                                        $(".view_isl").load("religion_content.php", {
                                                            getViews: post_identity_col
                                                        });
                                                    });
                                                }, 1000);
                                            </script>
                                        </span></div>
                                        <div class="news"><i class="fa fa-newspaper-o mr-2"></i> <span id="news_isl">
                                            <script>
                                                setInterval(()=> {
                                                    $(document).ready(function(){
                                                        var section = "islam";
                                                        $("#news_isl").load("religion_content.php", {
                                                            getSection: section
                                                        });
                                                    });
                                                }, 1000);
                                            </script>
                                        </span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="back-img-religion">
                                <img src="../Images/religions/each-religion/islam/mhrezaa-qYUdX2ET2o0-unsplash.jpg" alt="" width="100%">
                                <a style="color: black" id="2" onclick="submit_view_islam(this)"><div class="join"><i class="fa fa-plus"></i></div></a>
                                <script>     
                                    function submit_view_islam(obj){
                                        var post_identity_row = obj.id;
                                        var requestNews = document.getElementById("hiddenEmail").value;
                                        $(document).ready(function(){
                                            $(this).load("religion_content.php", {
                                                getUser_post_identity: post_identity_row
                                            }, function(data){
                                                window.location.assign("islam.php");
                                            });
                                        });
                                    }
                                </script>
                            </div>
                        </div>
                        <!-- end religion -->
                        <!-- ================================================================================================================================= -->

                             <!-- every religion -->
                         <!-- ========================================================================================================================================== -->
                         <div class="every-religion  d-flex">
                            <div class="left-section mr-2">
                                <!-- 1 quotes -->
                                <div class="q1-quotes">
                                    <div class="d-flex">
                                        <div class="quotars">
                                            <div class="quote-img"><img src="../Images/religions/each-religion/budhism/lightscape-1xMFU_F-tJ4-unsplash.jpg" alt="" width="100%" height="100%"></div>
                                            <div class="quote-img"><img src="../Images/religions/each-religion/budhism/tester-Tyvg1zigZ14-unsplash.jpg" alt="" width="100%" height="100%"></div>
                                        </div>
                                        <div class="quote-detal ml-2 mt-1">
                                            <div class="lines">Buddhism Religion</div>
                                            <div class="quotes1-on-line mt-2 ml-2">
                                                Believe nothing, no matter where you read it, or who said it, no matter if i have said it, unless it agrees with your own reason and your own common sense.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex user-statistic mt-3 d-flex justify-content-between">
                                        <div class="member"><i class="fa fa-street-view mr-2"></i> visitors <span id="vistors-view">
                                            <script>
                                                setInterval(()=> {
                                                    $(document).ready(function(){
                                                        var post_identity_col = "3";
                                                        $("#vistors-view").load("religion_content.php", {
                                                            getViews: post_identity_col
                                                        });
                                                    });
                                                }, 1000);
                                            </script>
                                        </span></div>
                                        <div class="news"><i class="fa fa-newspaper-o mr-2"></i> <span id="news_buddhi">
                                            <script>
                                                setInterval(()=> {
                                                    $(document).ready(function(){
                                                        var section = "budhism";
                                                        $("#news_buddhi").load("religion_content.php", {
                                                            getSection: section
                                                        });
                                                    });
                                                }, 1000);
                                            </script>
                                        </span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="back-img-religion">
                                <img src="../Images/religions/each-religion/budhism/sacha-styles-cLYotY2zfrs-unsplash.jpg" alt="" width="100%">
                                <a style="color: black" id="3" onclick="submit_view_buddh(this)"><div class="join"><i class="fa fa-plus"></i></div></a>
                                <script>     
                                    function submit_view_buddh(obj){
                                        var post_identity_row = obj.id;
                                        var requestNews = document.getElementById("hiddenEmail").value;
                                        $(document).ready(function(){
                                            $(this).load("religion_content.php", {
                                                getUser_post_identity: post_identity_row
                                            }, function(data){
                                                window.location.assign("buddhism.php");
                                            });
                                        });
                                    }
                                </script>
                            </div>
                        </div>
                        <!-- end religion -->
                        <!-- ================================================================================================================================================== -->

                        <!-- every religion -->
                        <!-- ====================================================================================================================================== -->
                        <div class="every-religion  d-flex">
                            <div class="left-section mr-2">
                                <!-- 1 quotes -->
                                <div class="q1-quotes">
                                    <div class="d-flex">
                                        <div class="quotars">
                                            <div class="quote-img"><img src="../Images/religions/each-religion/hinduism/shaouraav-shreshtha-jB7zLsOMWCk-unsplash.jpg" alt="" width="100%" height="100%"></div>
                                            <div class="quote-img"><img src="../Images/religions/each-religion/hinduism/marcus-lewis-OJ6LOiMcQ5k-unsplash.jpg" alt="" width="100%" height="100%"></div>
                                        </div>
                                        <div class="quote-detal ml-2 mt-1">
                                            <div class="lines">Hinduism Religion</div>
                                            <div class="quotes1-on-line mt-2 ml-2">
                                                Anyone who is steady in his determination for the advanced stage of spiritual realization and can equally tolerate the onsloughts of distress
                                                and happiness is certainly a person eligible for liberation.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex user-statistic mt-3 d-flex justify-content-between">
                                        <div class="member"><i class="fa fa-street-view mr-2"></i> visitors <span id="visitors_hindu">
                                            <script>
                                                setInterval(()=> {
                                                    $(document).ready(function(){
                                                        var post_identity_col = "5";
                                                        $("#visitors_hindu").load("religion_content.php", {
                                                            getViews: post_identity_col
                                                        });
                                                    });
                                                }, 1000);
                                            </script>
                                        </span></div>
                                        <div class="news"><i class="fa fa-newspaper-o mr-2"></i> <span id="news_hindu">
                                            <script>
                                                setInterval(()=> {
                                                    $(document).ready(function(){
                                                        var section = "hinduism";
                                                        $("#news_hindu").load("religion_content.php", {
                                                            getSection: section
                                                        });
                                                    });
                                                }, 1000);
                                            </script>
                                        </span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="back-img-religion">
                                <img src="../Images/religions/each-religion/hinduism/jose-luis-sanchez-pereyra-EJGNv7UFDKM-unsplash.jpg" alt="" width="100%">
                                <a style="color: black" id="5" onclick="submit_view_hindu(this)"><div class="join"><i class="fa fa-plus"></i></div></a>
                                <script>     
                                    function submit_view_hindu(obj){
                                        var post_identity_row = obj.id;
                                        var requestNews = document.getElementById("hiddenEmail").value;
                                        $(document).ready(function(){
                                            $(this).load("religion_content.php", {
                                                getUser_post_identity: post_identity_row
                                            }, function(data){
                                                window.location.assign("hidduism.php");
                                            });
                                        });
                                    }
                                </script>
                            </div>
                        </div>
                        <!-- end religion -->
                        <!-- ==================================================================================================================================== -->


                        <!-- every religion -->
                        <!-- ===================================================================================================================================================== -->
                        <div class="every-religion  d-flex">
                            <div class="left-section mr-2">
                                <!-- 1 quotes -->
                                <div class="q1-quotes">
                                    <div class="d-flex">
                                        <div class="quotars">
                                            <div class="quote-img"><img src="../Images/religions/each-religion/judaism/judaism-cont.jpg" alt="" width="100%" height="100%"></div>
                                            <div class="quote-img"><img src="../Images/religions/each-religion/judaism/african.jpg" alt="" width="100%" height="100%"></div>
                                        </div>
                                        <div class="quote-detal ml-2 mt-1">
                                            <div class="lines">Judaism Religion</div>
                                            <div class="quotes1-on-line mt-2 ml-2">
                                                if i am i becourse you are you, and you are you becourse i am i, then i am not i and you are not you but if i am i becourse i am i, and you are you
                                                becourse you are you then i am i and you are you
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex user-statistic mt-3 d-flex justify-content-between">
                                        <div class="member"><i class="fa fa-street-view mr-2"></i> visitors <span id="visitors_jud">
                                            <script>
                                                setInterval(()=> {
                                                    $(document).ready(function(){
                                                        var post_identity_col = "6";
                                                        $("#visitors_jud").load("religion_content.php", {
                                                            getViews: post_identity_col
                                                        });
                                                    });
                                                }, 1000);
                                            </script>
                                        </span></div>
                                        <div class="news"><i class="fa fa-newspaper-o mr-2"></i> <span id="news_jud">
                                            <script>
                                                setInterval(()=> {
                                                    $(document).ready(function(){
                                                        var section = "judaism";
                                                        $("#news_jud").load("religion_content.php", {
                                                            getSection: section
                                                        });
                                                    });
                                                }, 1000);
                                            </script>
                                        </span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="back-img-religion">
                                <img src="../Images/religions/each-religion/judaism/main-image.jpg" alt="" width="100%">
                                <a style="color: black" id="6" onclick="submit_view_jud(this)"><div class="join"><i class="fa fa-plus"></i></div></a>
                                <script>     
                                    function submit_view_jud(obj){
                                        var post_identity_row = obj.id;
                                        var requestNews = document.getElementById("hiddenEmail").value;
                                        $(document).ready(function(){
                                            $(this).load("religion_content.php", {
                                                getUser_post_identity: post_identity_row
                                            }, function(data){
                                                window.location.assign("judaism.php");
                                            });
                                        });
                                    }
                                </script>
                            </div>
                        </div>
                        <!-- end religion -->
                        <!-- ==================================================================================================================================================== -->

                        <!-- INITIALIZE MESSAGE BTN AND IT ACCESSORIE -->
                        <!-- *********************************************** -->
                        <?php require_once ("../header/message.php"); ?>
                        <!-- *********************************************** -->
                    </div>
                </div>
                <!-- end down section -->
                <!-- ======================================================================================================================================================================== -->
                <!-- ======================================================================================================================================================================== -->

           </div>
       </div>
       <!-- end down section -->
       <!-- ====================================================================================================================================================================================== -->
       <!-- ====================================================================================================================================================================================== -->

 
       <!-- javascript external file, type js  and libraries-->
       <!-- ================================================ -->
       <!-- ========================================================================= -->

       <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
       <script src="../Lib/bootstrap/js/bootstrap-datepicker.js"></script> 
       <script src="../Lib/custom/custom.js"></script>
       <script src="../Lib/date-picker/bootstrap-switch.js"></script>
       <script src="../Lib/date-picker/nouislider.min.js"></script>
       <script src="../Lib/easing/easing.min.js"></script>
       <script src="../Lib/jquery/jquery-migrate.min.js"></script>
       <script src="../Lib/jquery/jquery.min.js"></script>
       <script src="../Lib/lightbox/js/lightbox-plus-jquery.min.js"></script>
       <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
       <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
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
       </script>
       <!-- end libraries -->
       <!-- =========================================================================================================================== -->

   </body>
</html>
<?php }else{
    header("Location: ../account_shortcut.box.php?session");
    exit();
} ?>