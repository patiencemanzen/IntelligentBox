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
       <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

       <!-- external style link, type css file-->
       <link rel="stylesheet" href="../Assets/css/message.box.css">
       <link href="emoji/emoji-picker/lib/css/emoji.css" rel="stylesheet">

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
       <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
       integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       <!-- Optional theme -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
       integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

       <!-- matrial design -->
       <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
       <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">

       <!-- for emoji by manirabona -->
       <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
       integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
       crossorigin="anonymous"></script>
      
   </head>
   <body >

    <!-- GLOBAL JS EMAIL -->
    <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
    <!-- END GLOBAL EMAIL -->

    <!-- expanded message area -->
    <!-- ========================================================================================================================================================== -->
    <!-- =========================================================================================================================================================== -->
    <div id="expanded_conv">
    
    </div>
    <!-- end expanded area -->
    <!-- =================================================================================================================================================== -->
    <!-- ==================================================================================================================================================== -->



    <!-- messaging system when user click to message button-->
    <!-- message section -->
    <!-- =================================================================================================================================================== -->
    <div id="message_section_holder">

    </div>
    <!-- end message -->
    <!-- ============================================================================================================================================ -->
    <!-- ============================================================================================================================================ -->
 

    <!-- create new messsage -->
    <!-- ==================================================================================================================================================== -->
    <!-- ==================================================================================================================================================== -->
    <div class="create-new-message">
        <div id="cd-nav-trigger" class="cd-nav-trigger" onclick="New_message()">
            <i class="fa fa-envelope-open-o" onclick="New_message()"></i>
        </div>
        <div class="hold-messaging" id="hold-messaging">
            <!-- messsage picker -->
            <!-- ==================================================== -->
            <div class="message-picker">
                <div class="picker-title">
                    <span>New message</span>
                    <div class="select">
                        <div class="count-selected">3</div>
                        <div class="fetch-selected" onclick="openConv()">Select</div>
                    </div>
                </div>
                <!-- picked user -->
                <div class="picked-message" id="picked-message">

                </div>

                <!-- search user -->
                <div class="seach-message">
                    <div class="search-new">
                        <i class="fa fa-search"></i>
                        <input type="text" name="" id="search-user-message" onkeyup="search_new_message_user()" placeholder="Search Outside worlds ...">
                    </div>
                </div>

                <!-- suggestion user -->
                <div class="user-list" id="user_picker_list">

                </div>

            </div>
            <!-- end message picker -->
            <!-- ==================================================== -->
            <!-- ======================================================== -->
        </div>
    </div>
    <!-- end new message -->
    <!-- ===================================================================================================================================================== -->
    <!-- ===================================================================================================================================================== -->


    <!-- javascript external file, type js  and libraries-->
    <!-- =============================================================================================================================================== -->
    <!-- =============================================================================================================================================== -->

    <script src="../Assets/js/message.box.js"></script>
    <script src="../Lib/jquery/jquery.min.js"></script>
    <script src="../Assets/js/messaging_content.box.js"></script>

    <script src="../Lib/ckeditor/ckeditor.js"></script>
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
    <script src="../Lib/venobox/venobox.min.js"></script>
    <script src="../Lib/wow/wow.min.js"></script>
    <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
     integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- end libraries -->
    <!-- ========================================================================================================================================= -->
    <!-- ========================================================================================================================================== -->
    <!-- Latest compiled and minified JavaScript -->


    <!-- emoji area libraries -->
    <!-- ================================================================================================================================ -->
    <!-- ================================================================================================================================ -->
    <script src="emoji/jquery/jquery-3.2.1.min.js"></script>
    <script src="emoji/emoji-picker/lib/js/config.js"></script>
    <script src="emoji/emoji-picker/lib/js/util.js"></script>
    <script src="emoji/emoji-picker/lib/js/jquery.emojiarea.js"></script>
    <script src="emoji/emoji-picker/lib/js/emoji-picker.js"></script>
    <script>
        $(function () {
            // Initializes and creates emoji set from sprite sheet
            window.emojiPicker = new EmojiPicker({
                emojiable_selector: '[data-emojiable=true]',
                assetsPath: 'emoji/emoji-picker/lib/img/',
                popupButtonClasses: 'icon-smile'
            });
            window.emojiPicker.discover();
        });
    </script>
    <style>
        .icon-smile:before {
            content: " ";
            width: 16px;
            height: 16px;
            display: flex;
            background: url(icon-smile.png);
        }
    </style>
    <!-- end libraries -->
    <!-- ================================================================================================================================= -->
    <!-- ================================================================================================================================= -->

   </body>
</html>