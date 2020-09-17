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
       <link rel="stylesheet" href="../Assets/css/each_religion.box.css">

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
        <!-- =========================================================================================================== -->
        <!-- =========================================================================================================== -->
        <!-- =========================================================================================================== -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- end header section -->
        <!-- =========================================================================================================== -->
        <!-- =========================================================================================================== -->
        <!-- =========================================================================================================== -->

       <!-- down section -->
       <!-- ==================================================================================================================== -->
       <!-- ===================================================================================================================== -->
       <!-- ===================================================================================================================== -->
       <div class="container">
            <div class="down-lord d-flex">

                <!-- GLOBAL JS EMAIL -->
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                <input type="hidden" name="" id="hiddenPage" value="hinduism">
                <!-- END GLOBAL EMAIL -->
               
                <!-- left side section -->
                <!-- ======================================================================================================================== -->
                <!-- ======================================================================================================================== -->
                <div class="left-side-section col-xs-12 col-xl-7 col-sm-12 col-md-3 col-lg-3">
                    <div class="left-side-holder">

                        <!-- background image on top page -->
                        <!-- ===================================================================================================================== -->
                        <!-- ====================================================================================================================== -->
                        <div class="top-background-image">
                            <img src="../Images/religions/each-religion/budhism/mains.jpg" alt="" width="100%" height="100%">
                            <div class="top-name-pre">
                                <div><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                                <div class="mt-1">Real Buddhist</div>
                            </div>
                        </div>
                        <!-- end background image -->
                        <!-- ======================================================================================================================= -->
                        <!-- ======================================================================================================================= -->


                        <!-- continetal present -->
                        <!-- ====================================================================================================================================== -->
                        <!-- ====================================================================================================================================== -->
                        <!-- <div class="continetal-pre mt-3">
                            <div class="present-map d-flex justify-content-between">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li><a class="active" data-toggle="tab" href="#america-history" role="tab">
                                        <div class="america">
                                            <img src="../Images/religions/each-religion/budhism/N-S-america.jpg" alt="" width="100%" height="100%">
                                            <div class="name">In North & south <br>america</div>
                                        </div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#africa-history" role="tab">
                                        <div class="africa">
                                            <img src="../Images/religions/each-religion/budhism/Africe.jpg" alt="" width="100%" height="100%">
                                            <div class="name">In africa</div>
                                        </div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#europe-history" role="tab">
                                        <div class="Europe">
                                            <img src="../Images/religions/each-religion/budhism/europe.jpg" alt="" width="100%" height="100%">
                                            <div class="name">In Europe</div>
                                        </div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#asia-history" role="tab">
                                        <div class="asia">
                                            <img src="../Images/religions/each-religion/budhism/sacha-styles-cLYotY2zfrs-unsplash.jpg" alt="" width="100%" height="100%">
                                            <div class="name">In Asia</div>
                                        </div>
                                    </a></li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- end continetal present -->
                        <!-- ======================================================================================================================================== -->
                        <!-- ======================================================================================================================================== -->

                        <div class="tab-content">

                            <!-- default tab -->
                            <!-- ============================================================================================================================================== -->
                            <!-- ============================================================================================================================================== -->
                            <div class="tab-pane active" id="" role="tabpanel">
                                <div class="default-holder mt-5">
                                    <!-- each post start -->
                                    <!-- ===================================================================================================================================== -->
                                    <div class="each-religion-post shadow-sm">
                                        <div><div class="religion-image"><img src="../Images/religions/each-religion/budhism/original (4).jpg" alt="" width="100%" height="100%"></div></div>
                                        <p class="pl-1">
                                            <span class="title-post">Buddhism</span><hr>
                                            <span class="full-desc-religion">
                                                Buddhism, religion and philosophy that developed from the teachings 
                                                of the Buddha (Sanskrit: “Awakened One”), a teacher who lived in 
                                                northern India between the mid-6th and mid-4th centuries BCE 
                                                (before the Common Era). Spreading from India to Central and 
                                                Southeast Asia, China, Korea, and Japan, Buddhism has played a 
                                                central role in the spiritual, cultural, and social life of 
                                                Asia, and, beginning in the 20th century, it spread to the West.
                                            </span><br><br>
                                            <span class="full-desc-religion">
                                                Buddhism was believed to have started in India by Siddhartha Gautama. Siddhartha was born
                                                around the fifth century BCE to a tribal chief of a clan in southern Nepal. According to
                                                Buddhist literature, it was prophesied that he would become a king if he stayed at home or a
                                                great sage and the savior of humanity if he left. Siddhartha's father did not want his son to leave
                                                home because he wanted his son to be a king and follow in his footsteps. As the story goes,
                                                Siddhartha grew up surrounded by riches and luxury and knew only pleasures. He lived in
                                                palaces and was shielded from any pain or ugliness by his father so that he would not
                                                experience human suffering. But Siddhartha became restless with his life of luxury. He
                                                wondered what else there was to life and demanded to see the outside world. His father gave in
                                                to his demand and allowed him to see the outside world, yet he tried to limit his experiences
                                                with others to young and healthy people. That is not what happened. 
                                            </span><br><br>
                                            <span class="full-desc-religion">
                                                According to the story, during his travels in the outside world, Siddhartha came across four
                                                sights that left a lasting impression on him. (1) Since he had never seen old and decrepit people
                                                before, he was shocked when he came across an old man. (2) When he was trying to find out
                                                more about old men he stumbled upon a very ill person. This was even more shocking as he had
                                                never known or seen illness before. (3) Then he saw a funeral party by the side of a river. This
                                                too was new and most shocking of all for him. (4) Lastly, he encountered a traveling monk who
                                                had given up all the pleasures of the flesh. His face was so serene that the image stayed in
                                                Siddhartha‘s thoughts for a long time. 
                                            </span><br><br>
                                            <span class="full-desc-religion">
                                                Siddhartha is said to have learned some simple truths from which he had been shielded:
                                                we all get sick, grow old and die. He decided to abandon his previous life and devote himself to
                                                working out a way to end suffering. His initial method was to emulate the traveling monk, deny
                                                all pleasure, and follow a life of extreme asceticism. But this state of being nearly killed him.
                                                What saved him was that one day he heard someone speak about the strings on a musical
                                                instrument: if a string is too tight it will break and be ruined; if it is too loose, you cannot make
                                                beautiful music. Siddhartha applied this to his own existence and formulated the idea of the
                                                Middle Way: do not deny the physical body totally and yet do not live life to indulge the body's
                                                every whim. Siddhartha meditated on this for some time and eventually came to an
                                                understanding of the concept of enlightenment. After this, he became known as ―Buddha‖ or the
                                                ―enlightened one.‖ Eventually, he started teaching his philosophy and gained a large following.
                                                After going through a life of self-denial, discipline and meditation, he is said to have attained
                                                enlightenment which resulted in the alleviation of his pain and suffering. He then embarked on
                                                a journey of teaching others the path that would liberate them from the cycle of life and death. 
                                            </span><br><br>
                                            <span class="full-desc-religion">
                                                Gradually, Buddhism spread to numerous countries. The original Indian foundation was
                                                expanded by the inclusion of Central Asian, East Asian, and Southeast Asian cultures. Today
                                                Buddhism has spread to almost all the countries of the world with the population of Buddhists
                                                estimated to be around 500 million. The largest population is in China, while Thailand,
                                                Cambodia and Myanmar have the highest proportion of Buddhists in their population. <br>
                                                Buddhism also is becoming more widely practiced in America, Australia and the United
                                                Kingdom.
                                            </span><br><br>
                                            <span class="full-desc-religion">
                                                Although there are many divisions or schools within Buddhism, there are two main branches
                                                which differ in some areas of focus. Theravada Buddhism focuses on individual enlightenment
                                                and experience as well as monastic life. Mahayana Buddhism focuses on collective freedom
                                                from suffering and teaching the ways to enlightenment. Zen and Tibetan Buddhism, both
                                                considered offshoots of the Mahayana tradition, are the two types of Buddhism most people in
                                                western countries practice. 
                                            </span>
                                        </p>
                                    </div>
                                    <!-- end each history post -->
                                    <!-- ========================================================================================================================================== -->

                                    <!-- each post start -->
                                    <!-- =========================================================================================================================================== -->
                                    <div class="each-religion shadow-sm">
                                        <div class="pl-1">
                                            <div class="title-post">Foundations of Buddhism and cultural context</div><hr>
                                            <div class="full-desc-religion">
                                                Buddhism arose in northeastern India sometime between the late 6th century and 
                                                the early 4th century BCE, a period of great social change and intense religious activity. 
                                                There is disagreement among scholars about the dates of the Buddha’s birth and death. 
                                                Many modern scholars believe that the historical Buddha lived from about 563 to about 
                                                483 BCE. Many others believe that he lived about 100 years later (from about 448 to 368 BCE). 
                                                At this time in India, there was much discontent with Brahmanic (Hindu high-caste) sacrifice and ritual. 
                                                In northwestern India there were ascetics who tried to create a more personal and spiritual religious 
                                                experience than that found in the Vedas (Hindu sacred scriptures). In the literature that grew out of 
                                                this movement, the Upanishads, a new emphasis on renunciation and transcendental knowledge can be found. 
                                                Northeastern India, which was less influenced by Vedic tradition, became the breeding ground of many new sects. 
                                                Society in this area was troubled by the breakdown of tribal unity and the expansion of several petty kingdoms. 
                                                Religiously, this was a time of doubt, turmoil, and experimentation.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end each history post -->
                                    <!-- =========================================================================================================================================== -->
                                    <div class="each-religion shadow-sm">
                                        <div class="pl-1">
                                            <div class="title-post">THE KEY PRINCIPLES OF BUDDHISM</div><hr>
                                            <div class="full-desc-religion">
                                                Buddhism is different from many other faith traditions in that it is not centered on the
                                                relationship between humans and a high god. Buddhists do not believe in a personal creator
                                                God. In a sense then, Buddhism is more than a religion; it is a tradition that focuses on personal
                                                spiritual development. To many, it is more of a philosophy and a humanistic way of life which
                                                can be summed up as striving to lead a moral life; being aware of one‘s thoughts and actions;
                                                and developing wisdom, compassion and understanding. The key principles with which are
                                                briefly outlined below.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="each-religion shadow-sm">
                                        <div class="pl-1">
                                            <div class="title-post">Buddhism’s Four Noble Truths.</div><hr>
                                            <div class="full-desc-religion">
                                                The Four Noble Truths are for those seeking enlightenment and refuge from suffering. In brief,
                                                they are: 
                                                <ul>
                                                    <li>Suffering exists.</li>
                                                    <li>Suffering arises from attachment to desires.</li>
                                                    <li>Sufferingceases when attachment to desire ceases.</li>
                                                    <li>Freedom from suffering is possible by practicing the Eightfold Path.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="each-religion shadow-sm">
                                        <div class="pl-1">
                                            <div class="title-post">the Eightfold Path and The Middle Way</div><hr>
                                            <div class="full-desc-religion">
                                                The Eightfold Path is expressed as the roads to the cessation of suffering and to enlightenment
                                                for the purpose of personal happiness and the happiness of all others. They are:
                                                <ul>
                                                    <li>Right View/Right Understanding.</li>
                                                    <li>Right Thought/Right Intention.</li>
                                                    <li>Right Speech.</li>
                                                    <li>Right Action.</li>
                                                    <li>Right Livelihood</li>
                                                    <li>Right Effort</li>
                                                    <li>Right Mindfulness</li>
                                                    <li>Right Concentration</li>
                                                </ul>
                                                The path is usually divided by Buddhist practitioners into three
                                                sections – the wisdom section comprising of right understanding and right intention; the
                                                morality section comprising of right speech, right action and right livelihood; and the mental
                                                development section consisting of right effort, right mindfulness and right concentration.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- for more info -->
                                    <div class="formore-info shadow-sm">
                                        <div class="books-title">For more content</div>
                                        <div class="book-downlord">
                                            <div class="d-flex">
                                                <div class="file-type"><i class="fa fa-file-pdf-o"></i></div>
                                                <div class="bookName">THE BUDDHIST CORE VALUES</div>
                                            </div>
                                            <a href="pdf_files/50be10cb9.pdf" download="pdf_files/50be10cb9.pdf" id="dwnlordlink"><div class="downlord-btn"><i class="fa fa-download"></i></div></a>
                                        </div>
                                        <div class="book-downlord">
                                            <div class="d-flex">
                                                <div class="file-type"><i class="fa fa-file-pdf-o"></i></div>
                                                <div class="bookName">History of Indian Buddhism</div>
                                            </div>
                                            <a href="pdf_files/History of Indian Buddhism_Lamotte.pdf" download="pdf_files/History of Indian Buddhism_Lamotte.pdf" id="dwnlordlink"><div class="downlord-btn"><i class="fa fa-download"></i></div></a>
                                        </div>
                                    </div>
                                    <!-- end more info -->
                                </div>
                            </div>
                            <!-- end default tab -->
                            <!-- =========================================================================================================================================== -->
                            <!-- ================================================================================================================================================== -->

                            <!-- for north and sourth america -->
                            <!-- ================================================================================================================================================ -->
                            <!-- ================================================================================================================================================= -->
                            <div class="tab-pane" id="america-history" role="tabpanel">

                            </div>
                            <!-- end north south america -->
                            <!-- ============================================================================================================================== -->
                            <!-- =============================================================================================================================== -->

                            <!-- start africa in history -->
                            <!-- =============================================================================================================================== -->
                            <!-- ================================================================================================================================ -->
                            <div class="tab-pane" id="africa-history" role="tabpanel">
                                
                            </div>
                            <!-- end african in histroy -->
                            <!-- ================================================================================================================================= -->
                            <!-- ================================================================================================================================= -->

                            <!-- start asia histroy -->
                            <!-- ================================================================================================================================== -->
                            <!-- ================================================================================================================================ -->
                            <div class="tab-pane" id="asia-history" role="tabpanel">
                                
                            </div>
                            <!-- end asia histroy -->
                            <!-- =================================================================================================================================== -->
                            <!-- ====================================================================================================================================== -->

                            <!-- start europe history -->
                            <!-- ====================================================================================================================================== -->
                            <!-- ====================================================================================================================================== -->
                            <div class="tab-pane" id="europe-history" role="tabpanel">
                               
                            </div>
                            <!-- end europe history -->
                            <!-- ====================================================================================================================================== -->
                            <!-- ======================================================================================================================================== -->
                        </div>

                    </div>
                </div>
                <!-- edn left side section -->
                <!-- ========================================================================================================================================================= -->
                <!-- ========================================================================================================================================================= -->


                <!-- right side section -->
                <!-- ================================================================================================================================================================ -->
                <!-- ================================================================================================================================================================= -->
                <div class="right-side-section col-xs-12 col-xl-5 col-sm-12 col-md-3 col-lg-3">
                    <div class="right-side-section-holder">

                        <div class="religion_activity_stream">
                            <a href="religion_activity.php?rel=Budhism"><div class="link_activity">Home religion</div></a>
                        </div>

                        <!-- tday in history -->
                        <!-- ========================================================================================================================================== -->
                        <!-- ================================================================================================================================================== -->
                        <div class="today-in-history">
                            <div class="t-in-history-title"> Popular topics</div>
                            <div class="tin-history-list mt-3" id="topics_lists">

                            </div>
                        </div>
                        <!-- end today in history -->
                        <!-- ================================================================================================================================================================ -->
                        <!-- ============================================================================================================================================================================== -->


                        <!-- top new and topics -->
                        <!-- ========================================================================================================================================================================= -->
                        <!-- ========================================================================================================================================================================= -->
                        <div class="today-in-history mt-3">
                            <div class="t-in-history-title"> Top news and topics... </div>
                            <div class="tin-history-list mt-3" id="list_new_topics">

                            </div>
                        </div>
                        <!-- end today in history -->
                        <!-- ============================================================================================================================================================= -->
                        <!-- ============================================================================================================================================================= -->

                    </div>
                </div>
                <!-- end right side section -->
                <!-- ====================================================================================================================================================================== -->
                <!-- ============================================================================================================================================================================= -->

                <!-- INITIALIZE MESSAGE BTN AND IT ACCESSORIE -->
                <!-- *********************************************** -->
                <?php require_once ("../header/message.php"); ?>
                <!-- *********************************************** -->
           </div>
       </div>
       <!-- end down section -->
       <!-- ================================================================================================================================================================================= -->
       <!-- ====================================================================================================================================================================================== -->
       <!-- ======================================================================================================================================================================================== -->


 
       <!-- javascript external file, type js  and libraries-->
       <!-- ================================================ -->
       <!-- ================================================================================================================================================== -->
       <script src="../Assets/js/religion_content.box.js"></script>
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
       <!-- end libraries -->
       <!-- ======================================================================================================================================================================= -->
       <!-- ============================================================================================================================================================================ -->

   </body>
</html>
<?php } ?>