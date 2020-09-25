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
        <!-- ================================================================================================================================== -->
        <!-- ================================================================================================================================== -->
        <!-- ================================================================================================================================== -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- end header section -->
        <!-- ================================================================================================================================== -->
        <!-- =================================================================================================================================== -->
        <!-- ================================================================================================================================== -->


        <!-- down section -->
        <!-- ================================================================================================================================== -->
        <!-- ================================================================================================================================== -->
        <!-- ================================================================================================================================== -->
        <div class="container">
            <div class="down-lord d-flex">
               
                <!-- GLOBAL JS EMAIL -->
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                <input type="hidden" name="" id="hiddenPage" value="islam">
                <!-- END GLOBAL EMAIL -->

                <!-- left side section -->
                <!-- ============================================================================================================================ -->
                <!-- ============================================================================================================================ -->
                <div class="left-side-section col-xs-12 col-xl-7 col-sm-12 col-md-3 col-lg-3">
                    <div class="left-side-holder">

                        <!-- background image on top page -->
                        <!-- ============================================================================================================================== -->
                        <!-- =============================================================================================================================== -->
                        <div class="top-background-image">
                            <img src="../Images/religions/each-religion/islam/ashkan-forouzani-7blIFp0kFP4-unsplash.jpg" alt="" width="100%" height="100%">
                            <div class="top-name-pre">
                                <div><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                                <div class="mt-1">Real Muslim</div>
                            </div>
                        </div>
                        <!-- end background image -->
                        <!-- ================================================================================================================================== -->
                        <!-- =================================================================================================================================== -->

                        <!-- continetal present -->
                        <!-- ========================================================================================================================================= -->
                        <!-- ============================================================================================================================================== -->
                        <!-- <div class="continetal-pre mt-3">
                            <div class="present-map d-flex justify-content-between">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li><a class="active" data-toggle="tab" href="#america-history" role="tab">
                                        <div class="america">
                                            <img src="../Images/religions/each-religion/islam/haidan-Az_mSeq7vQQ-unsplash.jpg" alt="" width="100%" height="100%">
                                            <div class="name">In North & south <br>america</div>
                                        </div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#africa-history" role="tab">
                                        <div class="africa">
                                            <img src="../Images/religions/each-religion/islam/izuddin-helmi-adnan-vApfWetW1HY-unsplash.jpg" alt="" width="100%" height="100%">
                                            <div class="name">In africa</div>
                                        </div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#europe-history" role="tab">
                                        <div class="Europe">
                                            <img src="../Images/religions/each-religion/islam/izuddin-helmi-adnan-JFirQekVo3U-unsplash.jpg" alt="" width="100%" height="100%">
                                            <div class="name">In Europe</div>
                                        </div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#asia-history" role="tab">
                                        <div class="asia">
                                            <img src="../Images/religions/each-religion/islam/fahrul-azmi-gyKmF0vnfBs-unsplash.jpg" alt="" width="100%" height="100%">
                                            <div class="name">In Asia</div>
                                        </div>
                                    </a></li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- end continetal present -->
                        <!-- =================================================================================================================================== -->
                        <!-- =================================================================================================================================== -->

                        <div class="tab-content">

                            <!-- default tab -->
                            <div class="tab-pane active" id="" role="tabpanel">
                                <div class="default-holder mt-5">

                                    <!-- each history -->
                                    <!-- ======================================================================================================================== -->
                                    <div class="each-religion shadow-sm">
                                        <div class="pl-1">
                                            <div class="title-post">A Brief Overview of the History of Islam</div><hr>
                                            <div class="full-desc-religion">
                                                <p>
                                                    The origin of Islam is placed around 610 CE when Muhammad, a highly spiritual and religious
                                                    man who spent months in praying and self contemplation in a secluded cave near the town of
                                                    Mecca, is thought to have received divine messages. The story is that one morning Muhammad
                                                    heard the voice of the angel Gabriel and, through him, Allah spoke words of wisdom. The
                                                    words were first recited by Muhammad, later his disciples, and then recorded as text which
                                                    came to known as the Holy Qur’an. Thus followers of Islam consider the Qur’an not the work
                                                    of Muhammad but as direct revelations from Allah.
                                                </p>
                                                <p>
                                                    Islam, which literally means “submission,” was founded on the teachings of the Prophet
                                                    Muhammad as an expression of surrender to the will of Allah. The Qur’an, the sacred text of
                                                    Islam, contains the teachings of the Prophet that were revealed to him from Allah. Traditional
                                                    Muslims believe that Allah is the one true God with no partner or equal and that the inspiration
                                                    of this belief system comes straight from God and the vehicle chosen by him to deliver these
                                                    teaching to the general population, the Prophet Muhammad. 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end each history -->
                                    <!-- ======================================================================================================================== -->

                                    <!-- each post start -->
                                    <!-- =================================================================================================================== -->
                                    <div class="each-religion-post shadow-sm">
                                        <div><div class="religion-image"><img src="../Images/religions/each-religion/islam/masjid-pogung-dalangan-DBsQFuIbXg4-unsplash.jpg" alt="" width="100%" height="100%"></div></div>
                                        <p class="pl-1">
                                            <span class="title-post">Muslim</span><hr>
                                            <span class="full-desc-religion">
                                                Islam, major world religion promulgated by the Prophet Muhammad in Arabia in the 7th century CE. The Arabic term islām, literally “surrender,” 
                                                illuminates the fundamental religious idea of Islam—that the believer (called a Muslim, from the active particle of islām) accepts surrender 
                                                to the will of Allah (in Arabic, Allāh: God). Allah is viewed as the sole God—creator, sustainer, and restorer of the world. The will of Allah, to 
                                                which human beings must submit, is made known through the sacred scriptures, the Qurʾān (often spelled Koran in English), which Allah revealed to his messenger, 
                                                Muhammad. In Islam Muhammad is considered the last of a series of prophets (including Adam, Noah, Abraham, Moses, Solomon, and Jesus), and his message simultaneously 
                                                consummates and completes the “revelations” attributed to earlier prophets.
                                            </span>
                                        </p>
                                    </div>
                                    <!-- end each history post -->
                                    <!-- ======================================================================================================================= -->

                                    <!-- each religion -->
                                    <!-- ========================================================================= -->
                                    <div class="each-religion shadow-sm">
                                        <div class="pl-1">
                                            <div class="full-desc-religion">
                                                <p>
                                                    Muhammad is said to have returned from the cave a changed man. The first person he preached
                                                    to on his return was his wife Khadija, who became the first disciple of this new religion.
                                                    Muhammad, encouraged by this, began to preach the revelations to the public at large through
                                                    his sermons. 
                                                </p>
                                                <p>
                                                    Many people were impressed by verses of the Qur’an and converted to Islam out of their free
                                                    will. However, since the growing popularity of Islam jeopardized Muhammad’s and his
                                                    disciples lives, the entire community moved from Mecca to Medina circa 622 CE. 
                                                </p>
                                                <p>
                                                    This move became a crucial event in the history of Islam and came to be known as Hijra. The
                                                    Muslim calendar begins with the day of this migration. The people of Medina accepted Islam
                                                    with and the spread of this new religion gained momentum. Later with well-organized finances
                                                    and a vast army, Muhammad conquered and converted Mecca as well. He did not stop here but
                                                    sent numerous emissaries to different parts of Arabia. Today Islam remains one of the most
                                                    flourishing religions in the world; it is the second largest with around 23% of the earth’s
                                                    population identifying as Muslim.
                                                </p>
                                                <p>
                                                    The main teaching in the Qur’an is the belief in Allah, the one and true God. The followers of
                                                    Islam are traditionally divided into two main branches, the Sunni and Shia. Each group,
                                                    although they follow the same religion, interpret certain events and teachings of Islam
                                                    differently. 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end each religion -->
                                    <!-- ==================================================================================================================================== -->

                                    <!-- each religion -->
                                    <!-- ====================================================================================================================================== -->
                                    <div class="each-religion shadow-sm">
                                        <div class="pl-1">
                                            <span class="title-post mt-2">Islam’s Universal Values.</span>
                                            <div class="full-desc-religion">
                                                <!-- Islam’s Universal Values -->
                                                <!-- ================================================================================================== -->
                                                <p>
                                                    <p>
                                                        “Islam endorses certain universal values that need to shape our
                                                        modern ethical frameworks and perception of the law. Universal here refers to overarching and
                                                        general values and concepts that the Qur’an and the traditions of the Prophet endorse for all
                                                        human beings, and not particularly for Muslims, regardless of their color, race, gender, and
                                                        religion..... The four values become not only a system of laws, but a religious, moral, legal,
                                                        individual and societal obligation.”
                                                    </p>
                                                </p>
                                                <!-- end Islam’s Universal Values -->
                                                <!-- ================================================================================================= -->

                                                <!-- Dignity of the Human Being -->
                                                <!-- =================================================================================================== -->
                                                <p>
                                                    <span class="sub-title-paragraphy"> Dignity of the Human Being </span>
                                                    <p>
                                                        This value pertains to all humans regardless of their beliefs,
                                                        religion, race or origin. “This dignity is manifested by certain capacities foremost among them
                                                        are reason and free-will. Dignifying humankind requires the respect and protection of the wellbeing and the free choice of the individual.” (Qur’an, 18:29) 
                                                    </p>
                                                </p>
                                                <!-- end Dignity of the Human Being -->
                                                <!-- ==================================================================================================== -->

                                                <!-- Pluralism and Toleration of Diversity -->
                                                <!-- =========================================================================================================== -->
                                                <p>
                                                    <span class="sub-title-paragraphy">Pluralism and Toleration of Diversity</span>
                                                    <p>
                                                        “Another universal value of Islam is the equal origin of
                                                        all humans, regardless of their color, race or ethnicity....The recognition of diversity goes
                                                        beyond mere forbearance or resignation, it allows for mutual acceptance, toleration and
                                                        appreciation of difference.”
                                                    </p>
                                                </p>
                                                <!-- end Pluralism and Toleration of Diversity -->
                                                <!-- ============================================================================================================ -->
                                            
                                                <!-- Individual and Public Liberties  -->
                                                <!-- ============================================================================================================= -->
                                                <p>
                                                    <span class="sub-title-paragraphy">Individual and Public Liberties</span>
                                                    <p>
                                                        “Individual rights include security of life and property,
                                                        protection of honor and dignity, sanctity and security of private life against state violation,
                                                        security of personal freedoms, protection of religious sentiments, and equality of all Muslims
                                                        and non-Muslims before the law. Political rights comprise the right to protest against tyranny,
                                                        freedom of expression, freedom of association, freedom of conscience and conviction,
                                                        protection from arbitrary imprisonment, and the right to participate in public life. Socioeconomic rights entail the right to the basic necessities of life (food, shelter, clothing,
                                                        education). 
                                                    </p>
                                                </p>
                                                <!-- end individual -->
                                                <!-- ============================================================================================================== -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end each religion -->
                                    <!-- ====================================================================================================================================== -->

                                    <!-- for more info -->
                                    <!-- ===================================================================================================================================== -->
                                    <div class="formore-info shadow-sm">
                                        <div class="books-title">For more content</div>
                                        <div class="book-downlord">
                                            <div class="d-flex">
                                                <div class="file-type"><i class="fa fa-file-pdf-o"></i></div>
                                                <div class="bookName">rise of islam</div>
                                            </div>
                                            <a href="pdf_files/ms-hss-memt-unit_2_--_chapter_3-_rise_of_islam.pdf" download="pdf_files/ms-hss-memt-unit_2_--_chapter_3-_rise_of_islam.pdf" id="dwnlordlink"><div class="downlord-btn"><i class="fa fa-download"></i></div></a>
                                        </div>
                                        <div class="book-downlord">
                                            <div class="d-flex">
                                                <div class="file-type"><i class="fa fa-file-pdf-o"></i></div>
                                                <div class="bookName">The Spread of Islam</div>
                                            </div>
                                            <a href="pdf_files/26.pdf" download="pdf_files/26.pdf" id="dwnlordlink"><div class="downlord-btn"><i class="fa fa-download"></i></div></a>
                                        </div>
                                    </div>
                                    <!-- end more info -->
                                    <!-- ================================================================================================================================================== -->

                                </div>
                            </div>
                            <!-- end default tab -->
                            <!-- =========================================================================================================================================================== -->
                            <!-- =========================================================================================================================================================== -->

                            <!-- for north and sourth america -->
                            <!-- ========================================================================================================================= -->
                            <!-- ========================================================================================================================= -->
                            <div class="tab-pane" id="america-history" role="tabpanel">
                                
                            </div>
                            <!-- end north south america -->
                            <!-- ============================================================================================================================ -->
                            <!-- ============================================================================================================================ -->


                            <!-- start africa in history -->
                            <!-- ================================================================================================================================ -->
                            <!-- ================================================================================================================================ -->
                            <div class="tab-pane" id="africa-history" role="tabpanel">
                                
                            </div>
                            <!-- end african in histroy -->
                            <!-- ================================================================================================================================= -->
                            <!-- ================================================================================================================================= -->

                            <!-- start asia histroy -->
                            <!-- ================================================================================================================================== -->
                            <!-- =================================================================================================================================== -->
                            <div class="tab-pane" id="asia-history" role="tabpanel">
                                
                            </div>
                            <!-- end asia histroy -->
                            <!-- =================================================================================================================================== -->
                            <!-- =================================================================================================================================== -->

                            <!-- start europe history -->
                            <!-- ===================================================================================================================================== -->
                            <!-- ===================================================================================================================================== -->
                            <div class="tab-pane" id="europe-history" role="tabpanel">
                               
                            </div>
                            <!-- end europe history -->
                            <!-- ===================================================================================================================================== -->
                            <!-- ===================================================================================================================================== -->
                        </div>

                    </div>
                </div>
                <!-- edn left side section -->
                <!-- ====================================================================================================================================================== -->
                <!-- ======================================================================================================================================================= -->

                <!-- right side section -->
                <!-- ====================================================================================================================================================== -->
                <!-- ====================================================================================================================================================== -->
                <div class="right-side-section col-xs-12 col-xl-5 col-sm-12 col-md-3 col-lg-3">
                    <div class="right-side-section-holder">

                        <div class="religion_activity_stream">
                            <a href="religion_activity.php?rel=Islam"><div class="link_activity">Home religion</div></a>
                        </div>
                        
                        <!-- tday in history -->
                        <!-- ========================================================================================================================================= -->
                        <!-- =============================================================================================================================================== -->
                        <div class="today-in-history">
                            <div class="t-in-history-title"> Popular topics</div>
                            <div class="tin-history-list mt-3" id="topics_lists">

                            </div>
                        </div>
                        <!-- end today in history -->
                        <!-- ========================================================================================================================================= -->
                        <!-- =========================================================================================================================================== -->

                        <!-- top news and topics -->
                        <!-- =============================================================================================================================================== -->
                        <!-- =============================================================================================================================================== -->
                        <div class="today-in-history mt-3">
                            <div class="t-in-history-title"> Top news and topics... </div>
                            <div class="tin-history-list mt-3" id="list_new_topics">

                            </div>
                        </div>
                        <!-- end today in history -->
                        <!-- ========================================================================================================================================== -->
                        <!-- ========================================================================================================================================== -->

                    </div>
                </div>
                <!-- end right side section -->
                <!-- ================================================================================================================================================ -->
                <!-- ================================================================================================================================================ -->

                <!-- INITIALIZE MESSAGE BTN AND IT ACCESSORIE -->
                <!-- *********************************************** -->
                <?php require_once ("../header/message.php"); ?>
                <!-- *********************************************** -->
           </div>
       </div>
       <!-- end down section -->
       <!-- ======================================================================= -->
       <!-- ======================================================================= -->
       <!-- ======================================================================= -->
 
       <!-- javascript external file, type js  and libraries-->
       <!-- ================================================ -->
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

   </body>
</html>
<?php } ?>