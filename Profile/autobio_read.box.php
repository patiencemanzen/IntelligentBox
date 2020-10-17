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

      if(isset($_REQUEST['autobio'])){
            require_once ("../Scyllar.php");
            $url_code = $_REQUEST['autobio'];
            $new_connection = new Scyllar();

            $select_basic_info = "SELECT * FROM autobiography WHERE url_code='$url_code'";
            $execute_basci_info = mysqli_query($new_connection->Frequency(), $select_basic_info);
            $fetch_basic_info = mysqli_fetch_assoc($execute_basci_info);
                $book_name = $fetch_basic_info['autobio_name'];
                $creater_email = $fetch_basic_info['user_email'];
                $autobio_identity = $fetch_basic_info['identity'];

            $select_creater_name = "SELECT * FROM intelligent_users WHERE email='$creater_email'";
            $execute_creater_name = mysqli_query($new_connection->Frequency(), $select_creater_name);
            $fetch_creater_info = mysqli_fetch_assoc($execute_creater_name);
                $firstName = $fetch_creater_info['firstName'];
                $lastName = $fetch_creater_info['lastName'];

            class Auto_page extends Scyllar {
                public function getBackgroundImage($email){
                    $selectBackgroundImage = "SELECT background_image FROM user_profile_background_image WHERE user_email='$email' AND background_status='on'";
                    $execute_background = mysqli_query($this->Frequency(),$selectBackgroundImage);
                    $fetch_image = mysqli_fetch_assoc($execute_background); ?>
                    <img src="<?php echo '../Images/profile-img/background-img/'.$fetch_image['background_image'] ?>" width="100%" height="100%">
                <?php }
        
                // METHOD GET PROFILE IMAGE
                // =============================================================================================================================
                public function getProfileImage($Email){
                    $selectImage = "SELECT * FROM user_profile_image WHERE usr_email='$Email' AND status_image='1'";
                    $executeImage = mysqli_query($this->Frequency(),$selectImage);
                    $fetchImage = mysqli_fetch_assoc($executeImage); ?>
                        <img src="<?php echo '../Images/profile-img/profile-image/'.$fetchImage['profile_image'] ?>" width="100%" height="100%">
                <?php }

                public function getContent($autobio_identity){
                    $select_autobio_content = "SELECT * FROM autobiography_content WHERE autobiography_identity='$autobio_identity'";
                    $execute_autobio = mysqli_query($this->Frequency(), $select_autobio_content);
                    if(mysqli_num_rows($execute_autobio)){
                       while($fetch_auto_content = mysqli_fetch_assoc($execute_autobio)){
                           $content = $fetch_auto_content['page_content']; ?>
                            <div class="sub-full-desc">
                                <?php echo $content; ?>
                            </div>
                      <?php }
                    }else{ ?>
                        <div class="no_auto">
                            <span> Start write you autobiography now </span>
                        </div>
                    <?php }
                }
            }  
            
            $new_data = new Auto_page();
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

       <link rel="shortcut icon" href="../Images/intelligent_box_brand.png" type="image/x-icon">
       <link rel="stylesheet" href="../Assets/css/Autobiography.box.css">

       <!-- external css file/ libraries -->
       <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
       <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
   </head>
   <body class="bg-white">
       
       <!-- Section that will hold header -->
       <!-- ===================================================================================================== -->
       <div class="header-holder">
           <?php require_once ("../header/header.php"); ?>
       </div>
       <!-- ======================================================================================================= -->


       <!-- down section -->
       <!-- ======================================================================================================== -->
       <div class="down-lord">
           <div class="container">

                <!-- left side section -->
                <!-- =========================================================================================== -->
                <div class="left-side-section col-xs-12 col-xl-7 col-sm-12 col-md-12 col-lg-10">
                    <div class="left-side-holder">

                        <!-- background image on top page -->
                        <!-- ============================================================================================= -->
                        <div class="top-background-image">
                            <?php $new_data->getBackgroundImage($creater_email); ?>
                            <div class="over-profile-detail">
                                <div class="user_profile_image"><?php $new_data->getProfileImage($creater_email); ?></div>
                                <div class="top-name-pre"><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                            </div>
                        </div>
                        <!-- ================================================================================================ -->

                        <!-- read autobiongraphy -->
                        <!-- ================================================================================================== -->
                        <div class="history-post">
                            <div class="post-list-holder">
                                <div class="autobio_book"><?php echo $book_name; ?></div>
                                <?php $new_data->getContent($autobio_identity); ?>
                            </div>
                        </div>
                        <!-- ======================================================================================================================= -->
                        
                        <!-- Write autobiography -->
                        <!-- ================================================================================================== -->
                        <div class="history-post mb-2">
                            <form action="Autobiography.box.php" method="POST">
                                <input type="hidden" name="autobio_identity" value="<?php echo $autobio_identity; ?>">
                                <input type="hidden" name="autoId" value="<?php echo $url_code; ?>">
                                <textarea name="content" id="" cols="30" rows="10"></textarea>
                                <div class="btn-submit-auto">
                                    <button type="submit" name="submit_content" class="upload_auto">save and upload</button>
                                </div>
                            </form>
                        </div>
                        <!-- ======================================================================================================================= -->

                    </div>
                </div>
                <!-- ========================================================================================== -->

           </div>
       </div>
       <!-- ========================================================================================================= -->
 

       <!-- javascript external file, type js  and libraries-->
       <!-- ========================================================================= -->
       <script src="../Assets/js/video_controll.box.js"></script>
       
       <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
       <script src="../Lib/jquery/jquery.min.js"></script>
       <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
       <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
       <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
       <script src="../Lib/ckeditor/ckeditor.js"></script> 
       <script>
            CKEDITOR.replace('content');
        </script>
       <!-- ========================================================================================================================= -->

   </body>
</html>
<?php } } ?>