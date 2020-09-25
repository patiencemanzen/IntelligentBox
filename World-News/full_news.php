<?php 
  session_start();
  if(isset($_SESSION['Email'])){
      $Session_email_call = $_SESSION['Email'];
      $firstName = $_SESSION['Firstname'];
      $lastName = $_SESSION['Lastname'];
      $user_title = $_SESSION['title'];

      if(isset($_REQUEST['news'])){
        require_once ("../Scyllar.php");

        $new_connection = new Scyllar();
        $get_News = $_REQUEST['news'];

        $select_news = "SELECT * FROM user_common_news WHERE identity='$get_News'";
        $execute_news = mysqli_query($new_connection->Frequency(), $select_news);
        $fetch_news = mysqli_fetch_assoc($execute_news);
            $get_news_image = $fetch_news['news_media'];
            $media_title = $fetch_news['news_title'];
            $media_desc = $fetch_news['news_description'];
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
       <link rel="shortcut icon" href="../Images/intelligent_box_brand.png" type="image/x-icon">

       <!-- external style link, type css file-->
       <link rel="stylesheet" href="../Assets/css/full_news.box.css">

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
        <!-- ==================================================================================================================================================================== -->
        <!-- ========================================================================================================================================================================= -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- end header section -->
        <!-- =========================================================================================================================================================================== -->
        <!-- ============================================================================================================================================================================ -->

       <!-- container down -->
       <!-- =================================================================================================================================================================================== -->
       <!-- ================================================================================================================================================================================== -->
       <div class="down-section container">
           <div class="down-holder">

                <!-- GLOBAL JS EMAIL -->
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                <!-- END GLOBAL EMAIL -->

                <!-- down section full news -->
                <!-- ============================================================================================================================================================================= -->
                <!-- ================================================================================================================================================================================ -->
                <div class="full-news-section mt-3">
                    <div class="inner-section separator">

                        <!-- full story -->
                        <!-- ========================================================================================================================================== -->
                        <div class="full-story-pre">
                            <div><div class="full-image-story"><img src="<?php echo '../Images/world-news-img/'.$get_news_image; ?>" alt="" width="100%" height="100%"></div></div>
                            <p>
                               <span class="story-title"><?php echo $media_title; ?></span><br><br>
                               <span class="story-type"><?php echo $media_desc; ?></span>
                            </p>
                        </div>
                        <!-- end full story -->
                        <!-- ===================================================================================================================================================== -->

                        <!-- full story -->
                        <!-- ====================================================================================================================================================== -->
                        <div class="more-story-related mt-4">
                            <div class="pre-section"><div class="title-section">You might like this stories</div></div>
                            <div class="related-story-list">
                                <?PHP 
                                    $select_top_stories = "SELECT * FROM user_common_news WHERE news_independent='top_story' AND identity != '$get_News'";
                                    $execute_top_stories = mysqli_query($new_connection->Frequency(), $select_top_stories);
                                    while($fetch_top_stories = mysqli_fetch_assoc($execute_top_stories)){ 
                                        $user_identity = $fetch_top_stories['user_email'];
                                        $created_on = $fetch_top_stories['executed_date'];
                                        $date=date_create($created_on);
                                        $news_identity = $fetch_top_stories['identity'];
                                        $posted_media = $fetch_top_stories['news_media'];
                                        $news_title = $fetch_top_stories['news_title'];
                                        $news_description = $fetch_top_stories['news_description']; ?>
                                        <!-- each story -->
                                        <!-- ================================================================================= -->
                                        <a href="full_news.php?news=<?php echo $news_identity?>" style="color:black"><div class="each-story">
                                                <div class="story-image"><img src="<?php echo '../Images/world-news-img/'.$posted_media; ?>" width="100%" height="100%"></div>
                                                <div class="story-related-title"><?php echo $news_title; ?></div>
                                        </div></a>
                                        <!-- end each story -->
                                        <!-- ============================================================================================================== -->
                              <?php } ?>
                            </div>
                        </div>
                        <!-- end full story -->
                        <!-- ================================================================================================================================================================ -->

                        <!-- more related story -->
                        <!-- ======================================================================================================================================================================== -->
                        <div class="more-related">
                            <div class="left-short-story">
                                <?PHP 
                                    $select_top_stories = "SELECT * FROM user_common_news WHERE news_independent='top_story' AND identity != '$get_News' ORDER BY executed_date ASC";
                                    $execute_top_stories = mysqli_query($new_connection->Frequency(), $select_top_stories);
                                    while($fetch_top_stories = mysqli_fetch_assoc($execute_top_stories)){ 
                                        $user_identity = $fetch_top_stories['user_email'];
                                        $created_on = $fetch_top_stories['executed_date'];
                                        $date = date_create($created_on);
                                        $news_identity = $fetch_top_stories['identity'];
                                        $posted_media = $fetch_top_stories['news_media'];
                                        $news_title = $fetch_top_stories['news_title']; ?>

                                        <!-- each short story -->
                                        <!-- ===================================================================================================================== -->
                                        <a href="full_news.php?news=<?php echo $news_identity?>" style="color:black"><div class="each-short-story">
                                            <div class="short-image-story"><img src="<?php echo '../Images/world-news-img/'.$posted_media; ?>" alt="" width="100%" height="100%"></div>
                                            <div class="story-short-desc">
                                                <div class="short-story-hi"><?php echo $news_title; ?></div>
                                                <div class="date-posted"><?php echo date_format($date,"M d, Y"); ?></div>
                                            </div>
                                        </div></a>
                                        <!-- end each short story -->
                                        <!-- ====================================================================================================================== -->
                                <?php } ?>
                            </div>

                            <!-- right short story -->
                            <!-- ================================================================================================================================================================= -->
                            <!-- =============================================================================================================================================================== -->
                            <div class="right-short-story">
                                <div class="most-commented-section">
                                    <div class="most-commented">
                                        <div class="title-section">Most commented</div>
                                    </div>
                                    <div class="commented-list">
                                        <?php 
                                            $select_most_commented = "SELECT user_common_news.identity, COUNT(user_common_news_comments.news_identity) AS comment_count FROM user_common_news_comments INNER JOIN user_common_news ON user_common_news_comments.news_identity = user_common_news.identity GROUP BY user_common_news.identity ORDER BY comment_count DESC LIMIT 5";
                                            $execute_most_commente = mysqli_query($new_connection->Frequency(), $select_most_commented);
                                            while($ftech_most_commente = mysqli_fetch_assoc($execute_most_commente)){ 
                                                $identity = $ftech_most_commente['identity'];
                                                $Select_news = "SELECT * FROM user_common_news WHERE identity='$identity'";
                                                $execute_news = mysqli_query($new_connection->Frequency(), $Select_news);
                                                $fetch_new = mysqli_fetch_assoc($execute_news);
                                                    $getFull_news = $fetch_new['news_title'];
                                                    $creater = $fetch_new['user_email'];

                                                    $date=date_create($fetch_new['executed_date']);
                                                    $great_date = date_format($date,"F d, Y");

                                                    $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$creater'";
                                                    $execute_basic_info = mysqli_query($new_connection->Frequency(), $select_basic_info);
                                                    $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                                                        $firstname_creater = $fetch_basic_info['firstName'];
                                                        $lastname_creater = $fetch_basic_info['lastName'];
                                                ?>
                                                <!-- each commment -->
                                                <!-- ============================================================================================== -->
                                                <div class="each-commented">
                                                    <div class="content-detail"><?php echo $getFull_news; ?></div>
                                                    <div class="user-accurated">
                                                        <div class="name"><i class="fa fa-pencil"></i> <?php if($creater == "intelligentBox@gmail.box"){ echo "Intelligent box"; }else{?> <?php echo $firstname_creater; ?> <?php echo $lastname_creater; ?> <?php } ?></div>
                                                        <div class="date"><?php echo $great_date; ?></div>
                                                        <div class="comment"><i class="fa fa-comment-o mr-1"></i> <?php echo $ftech_most_commente['comment_count']; ?> </div>
                                                    </div>
                                                </div>
                                                <!-- end each comment -->
                                                <!-- ====================================================================================================================== -->
                                            <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <!-- end right short story -->
                            <!-- ==================================================================================================================================================================== -->
                            <!-- =========================================================================================================================================================================== -->
                        </div>
                    </div>
                </div>
                <!-- end it -->
                <!-- ================================================================================================================================================================= -->
                <!-- ======================================================================================================================================================================== -->

                <!-- INITIALIZE MESSAGE BTN AND IT ACCESSORIE -->
                <!-- *********************************************** -->
                <?php require_once ("../header/message.php"); ?>
                <!-- *********************************************** -->
                
           </div>
       </div>
       <!-- end contianer down -->
       <!-- ================================================================================================================================================================= -->
       <!-- ======================================================================================================================================================================== -->
       <!-- ======================================================================================================================================================================== -->
 
       <!-- javascript external file, type js  and libraries-->
       <!-- ================================================ -->

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

   </body>
</html>
<?php } } ?>