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
                <input type="hidden" name="" id="hiddenPage" value="judaism">
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
                            <img src="../Images/religions/each-religion/judaism/judaism-cont.jpg" alt="" width="100%" height="100%">
                            <div class="top-name-pre">
                                <div><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                                <div class="mt-1">Real Judaism</div>
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
                                            <img src="../Images/religions/each-religion/judaism/noth.jpg" alt="" width="100%" height="100%">
                                            <div class="name">In North & south <br>america</div>
                                        </div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#africa-history" role="tab">
                                        <div class="africa">
                                            <img src="../Images/religions/each-religion/judaism/african.jpg" alt="" width="100%" height="100%">
                                            <div class="name">In africa</div>
                                        </div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#europe-history" role="tab">
                                        <div class="Europe">
                                            <img src="../Images/religions/each-religion/judaism/europe.jpg" alt="" width="100%" height="100%">
                                            <div class="name">In Europe</div>
                                        </div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#asia-history" role="tab">
                                        <div class="asia">
                                            <img src="../Images/religions/each-religion/judaism/tepme.jpg" alt="" width="100%" height="100%">
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
                                            <div class="title-post">overview short history of judaism</div><hr>
                                            <div class="full-desc-religion">
                                                <p>
                                                    Judaism embraces the intricate religious and cultural
                                                    development of the Jewish people through more than
                                                    thirty centuries of history, stretching from Biblical times
                                                    to medieval Spain to the Enlightenment, and then to the
                                                    Holocaust and the founding of the modern state of
                                                    Israel. The result is an experience that reflects the
                                                    elliptical relationship between religious practice and
                                                    peoplehood. From a religious perspective Judaism is a
                                                    theistic system, but from a peoplehood perspective, it is
                                                    also the group memory of the manifold communities
                                                    and cultures formed by Jews through the ages. It
                                                    consists not only of Torah (divine revelation) 
                                                    and mitzvoth (divine commandments), but also the diverse cultures of the Hebrew, Yiddish, and Ladino
                                                    languages. It includes not only the visible markers of religious observance, such as the kippah or the
                                                    payot or the tzitzit, but also the communal structures of the kehillah, the mellah, and the shtetl. It
                                                    includes politics—whether in Poland, America, or Israel. And it includes the whole range of Jewish
                                                    education and family life, food and festival, music and dance, and custom and humor.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end each history -->
                                    <!-- ======================================================================================================================== -->

                                    <!-- each post start -->
                                    <!-- =================================================================================================================== -->
                                    <div class="each-religion-post shadow-sm">
                                        <div><div class="religion-image"><img src="../Images/religions/each-religion/judaism/main-image.jpg" alt="" width="100%" height="100%"></div></div>
                                        <p class="pl-1">
                                            <span class="title-post">Judaism</span><hr>
                                            <span class="full-desc-religion">
                                                Judaism is perhaps best conceptualized as a triad with three points of
                                                reference: God, Torah, and the people of Israel (that is, the Jewish
                                                people). None is central; all are interdependent, with varying degrees of
                                                emphasis at various times. God is the God of Israel, the God of all
                                                creation, the one God. Torah embodies Judaism’s intellectual culture,
                                                focusing on the study, understanding, and interpretation of sacred texts.
                                                Israel focuses on Judaism as a historical culture and the civilization of a
                                                particular people; the “peoplehood” of the Jews includes customs and
                                                foods, arts and music, dance and folkways that are part of a way of life.
                                                Judaism is critically concerned with the evolving relationship between
                                                God, Torah, and the Jewish people, a relationship described as a
                                                covenant. In the covenantal triad, God emphasizes the vertical
                                                relationship of the Jewish people to the Divine; Israel emphasizes the
                                                horizontal relationship Jews bear to one another, and Torah is both
                                                vertical and horizontal, for it defines the way of life of a whole people
                                                lived in relationship to God.
                                            </span><br>
                                            <span class="full-desc-religion">
                                                These three connotations of Judaism as a monotheistic system, as a
                                                literary tradition, and as a historical culture are sometimes viewed
                                                separately. For example, there are Jews who see themselves as culturally
                                                Jewish, but who are also non-religious or atheist, often identifying more
                                                strongly with Jewish “peoplehood” than with traditional understandings of God and Torah. Even so, all
                                                Jews would recognize that these three points of reference have shaped and guided Jewish experience
                                                through the ages. 
                                            </span>
                                        </p>
                                    </div>
                                    <!-- end each history post -->
                                    <!-- ======================================================================================================================= -->

                                    <!-- each religion -->
                                    <!-- ========================================================================= -->
                                    <div class="each-religion shadow-sm">
                                        <div class="pl-1">
                                            <span class="title-post">Modern Jewish Culture</span><hr>
                                            <div class="full-desc-religion">
                                                <p>
                                                    The philosophical endeavor to reconcile traditional religion with modern culture has long had a place
                                                    in Jewish history. Philo of first-century Alexandria, Rav Saadia Gaon of tenth-century Babylonia,
                                                    Maimonides of twelfth-century Spain and Egypt: many great Jewish thinkers have taken pains to
                                                    integrate the Judaism of the Torah and the Talmud with the best of contemporary thought.
                                                    Maimonides not only codified Jewish Law in his monumental work the Mishneh Torah, he also
                                                    wrote Guide for the Perplexed, which addresses an educated audience perplexed by the contradictions
                                                    of the Torah and Aristotelian philosophy. The book had a great influence on the development of Jewish
                                                    intellectual traditions. 
                                                </p>
                                                <p>
                                                    By the modern period, ideological syncretism became the norm for Jewish laity and scholars.
                                                    Throughout the seventeenth and eighteenth centuries in cosmopolitan centers such as Amsterdam and
                                                    Venice, many Jews began to participate in the life of the majority culture. Toward the end of the
                                                    eighteenth century, the promise of civil equality was held out to Jews in France, Germany, and other
                                                    European nations on the conditions that they would assimilate into modern, mainstream customs. The
                                                    argument was made that if only Jews would shed their particular customs and become members of
                                                    Enlightenment society, they would finally find acceptance among the peoples of Europe.
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
                                                <p>
                                                    Hence a new movement was born for the improvement of the
                                                    Jews: the Haskalah (“the Jewish Enlightenment”). Centered in
                                                    Berlin and fathered by the German-Jewish philosopher Moses
                                                    Mendelssohn, the Haskalah was one of the first important
                                                    movements of Jewish modernity. While preserving the essentials
                                                    of Judaism, it sought to change the public image of the Jew through
                                                    secular education. Its motto, “Be a Jew at home and a German in
                                                    the street,” became the underlying ethos of modern Jewish
                                                    acculturation. Out of the Berlin Haskalah emerged the academic
                                                    group Wissenschaft des Judentums (“the science of Judaism”),
                                                    which hoped to improve the image of Judaism through scientific
                                                    research and objective analysis of Jewish sources. The
                                                    Wissenschaft movement was the fountainhead of all
                                                    contemporary academic Jewish studies. The Haskalah and
                                                    Wissenschaft movements soon altered the nature of Judaism itself,
                                                    and a third movement was born: Reform Judaism.
                                                </p>
                                                <p>Reform Judaism originated in Germany in the early nineteenth
                                                    century and has served as the foundation for many subsequent
                                                    Jewish responses to modernity. In Hamburg in 1818, a group of
                                                    reform-minded Jews started a synagogue which they called a temple, a name once reserved for the
                                                    Temple in Jerusalem in the expectation of return, but now applied to a place of worship in Germany
                                                    where Jews had put down roots as citizens. By mid-century, the Reform movement gained the
                                                    leadership of more radical German Jews like Rabbi Abraham Geiger and Rabbi Samuel Holdheim. The
                                                    more moderate Historical School (today called Conservative Judaism) was founded by Zecharias
                                                    Frankel; the neo-Orthodox trend (today’s modern Orthodox Judaism) was first championed by Samson
                                                    Raphael Hirsch. Even the Hasidic world found a modernizer in the Musar movement of Israel Salanter.
                                                    To varying degrees and in diverse ways, they all represent the attempt to reshape traditional Judaism
                                                    in order to conform more closely to the universalist ethos of
                                                    Enlightenment-influenced Western Christianity, so that Jews
                                                    might integrate more easily into the modern nation-state</p>
                                                <div style="overflow: auto;">
                                                    <div><div style="width: 200px;float: left;margin-right: 10px;border-radius: 4px;background: #f6f7fd;"><img src="../Images/religions/each-religion/judaism/jews.png" alt="" width="100%" height="100%" style="border-radius: 4px;"></div></div>
                                                    <p class="pl-1">
                                                        Other Jewish responses to the modern world include new
                                                        cultural and political ideologies. As the Haskalah spread
                                                        eastward, for example, the movement took on a more literary
                                                        character. The spread of modern Jewish literature in Hebrew
                                                        and Yiddish literary movements was one outgrowth of the
                                                        Russian Haskalah. Another was the rise of new forms of political
                                                        Jewish expression, including Zionism, Diaspora Nationalism,
                                                        and Bundism. Zionism referred to the idea of the restoration of
                                                        the Jewish homeland in Palestine. The theory of Disapora
                                                        Nationalism held that the Jews of Eastern Europe might form
                                                        their own autonomous polity based upon the Yiddish language
                                                        and secular political principles rather than traditional Judaism.
                                                        Bundism was the Jewish socialist movement born in response to
                                                        the anti-Semitism of “internationalist” socialism. While DiasporaNationalist and Bundist movements would not have the same success as Zionism, they were important
                                                        expressions of a distinctively Jewish secularism. Secular Jewish culture lives on today in phenomena
                                                        such as the Yiddish revival, Klezmer music, and many other areas of Jewish arts and letters.
                                                    </p>
                                                 </div>    
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end each religion -->
                                    <!-- ==================================================================================================================================== -->

                
                                    <!-- for more info -->
                                    <!-- ===================================================================================================================================== -->
                                    <div class="formore-info shadow-sm">
                                        <div class="books-title">For more content</div>
                                        <div class="book-downlord">
                                            <div class="d-flex">
                                                <div class="file-type"><i class="fa fa-file-pdf-o"></i></div>
                                                <div class="bookName">judaism book</div>
                                            </div>
                                            <a href="pdf_files/judaism.pdf" download="pdf_files/judaism.pdf" id="dwnlordlink"><div class="downlord-btn"><i class="fa fa-download"></i></div></a>
                                        </div>
                                        <div class="book-downlord">
                                            <div class="d-flex">
                                                <div class="file-type"><i class="fa fa-file-pdf-o"></i></div>
                                                <div class="bookName">Judaism 2book</div>
                                            </div>
                                            <a href="pdf_files/ch3_4.pdf" download="pdf_files/ch3_4.pdf" id="dwnlordlink"><div class="downlord-btn"><i class="fa fa-download"></i></div></a>
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
                            <a href="religion_activity.php?rel=judaism"><div class="link_activity">Home religion</div></a>
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