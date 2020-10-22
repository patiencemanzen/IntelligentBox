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

       <title>intelligentBox</title>

       <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon">
       
       <!-- external style link, type css file-->
       <link rel="stylesheet" href="../Assets/css/each_religion.box.css">

       <!-- external css file/ libraries -->
       <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
       <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
   
   </head>
   <body>
        
        <!-- Section that will hold header -->
        <!-- =========================================================================================================== -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- end header section -->
        <!-- =========================================================================================================== -->

       <!-- down section -->
       <!-- ===================================================================================================================== -->
       <div class="container">
            <div class="down-lord d-flex">

                <!-- GLOBAL JS EMAIL -->
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                <input type="hidden" name="" id="hiddenPage" value="hinduism">
                <!-- END GLOBAL EMAIL -->
               
                <!-- left side section -->
                <!-- ======================================================================================================================== -->
                <div class="left-side-section col-xs-12 col-xl-7 col-sm-12 col-md-3 col-lg-3">
                    <div class="left-side-holder">

                        <!-- background image on top page -->
                        <!-- ====================================================================================================================== -->
                        <div class="top-background-image">
                            <img src="../Images/religions/each-religion/hinduism/main.jpg" alt="" width="100%" height="100%">
                            <div class="top-name-pre">
                                <div><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                                <div class="mt-1">Real Hinduism</div>
                            </div>
                        </div>
                        <!-- end background image -->
                        <!-- ======================================================================================================================= -->


                        <!-- continetal present -->
                        <!-- ====================================================================================================================================== -->
                        <!-- ====================================================================================================================================== -->
                        <!-- <div class="continetal-pre mt-3">
                            <div class="present-map d-flex justify-content-between">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li><a class="active" data-toggle="tab" href="#america-history" role="tab">
                                        <div class="america">
                                            <img src="../Images/religions/each-religion/hinduism/american.jpg" alt="" width="100%" height="100%">
                                            <div class="name">In North & south <br>america</div>
                                        </div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#africa-history" role="tab">
                                        <div class="africa">
                                            <img src="../Images/religions/each-religion/hinduism/african.jpg" alt="" width="100%" height="100%">
                                            <div class="name">In africa</div>
                                        </div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#europe-history" role="tab">
                                        <div class="Europe">
                                            <img src="../Images/religions/each-religion/hinduism/europe.jpg" alt="" width="100%" height="100%">
                                            <div class="name">In Europe</div>
                                        </div>
                                    </a></li>
                                    <li><a class="" data-toggle="tab" href="#asia-history" role="tab">
                                        <div class="asia">
                                            <img src="../Images/religions/each-religion/hinduism/asia.jpg" alt="" width="100%" height="100%">
                                            <div class="name">In Asia</div>
                                        </div>
                                    </a></li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- end continetal present -->
                        <!-- ======================================================================================================================================== -->

                        <div class="tab-content">

                            <!-- default tab -->
                            <!-- ============================================================================================================================================== -->
                            <div class="tab-pane active" id="" role="tabpanel">
                                <div class="default-holder mt-5">
                                    <!-- each post start -->
                                    <!-- ===================================================================================================================================== -->
                                    <div class="each-religion-post shadow-sm">
                                        <div><div class="religion-image"><img src="../Images/religions/each-religion/hinduism/jose-luis-sanchez-pereyra-EJGNv7UFDKM-unsplash.jpg" alt="" width="100%" height="100%"></div></div>
                                        <p class="pl-1">
                                            <span class="title-post">Hinduism</span><hr>
                                            <span class="full-desc-religion">
                                                Hinduism essentially originated as a set of rules or regulations to help people lead a disciplined life. This set of
                                                rules adhered to the fulfillment of duties, moral values, and the importance of self-realization through
                                                meditation. It is not confined to the teachings of a specific person or a single deity. In fact, it is polytheistic in
                                                the practice of worshipping innumerable gods, each corresponding to either a philosophy, a natural power, or a
                                                representation of a certain moral value or quality. 
                                            </span><br>
                                            <span class="full-desc-religion">
                                                <span class="concert">According to wikipedia</span>:: <span class="concert">Hinduism: </span>
                                                is the predominant and indigenous religious
                                                tradition of the Indian Subcontinent. Hinduism is often
                                                referred to as Sanātana Dharma (a Sanskrit phrase meaning
                                                “the eternal law“) by its adherents. Generic “types” of
                                                Hinduism that attempt to accommodate a variety of complex
                                                views span folk and Vedic Hinduism to bhakti tradition, as in
                                                Vaishnavism. Hinduism also includes yogic traditions and a
                                                wide spectrum of “daily morality” based on the notion of
                                                karma and societal norms such as Hindu marriage customs.
                                                Hinduism is formed of diverse traditions and has no
                                                single founder. Among its roots is the historical Vedic
                                                religion of Iron Age India, and as such Hinduism is often
                                                called the “oldest living religion“ or the “oldest living major
                                                religion”.
                                                A large body of texts is classified as Hindu, divided into
                                                Śruti (“revealed”) and Smriti (“remembered”) texts. These
                                                texts discuss theology, philosophy and mythology, and
                                                provide information on the practice of dharma (religious
                                                living). Among these texts, the Vedas are the foremost in
                                                authority, importance and antiquity. Other major scriptures
                                                include the Upanishads, Purāṇas and the epics Mahābhārata
                                                and Rāmāyaṇa. The Bhagavad Gītā, a treatise from the
                                                Mahābhārata, spoken by Krishna, is of special importance.
                                            </span><br><br>
                                            <span class="full-desc-religion">
                                                <span class="concert">short history</span>
                                                The earliest evidence for prehistoric religion in India date
                                                back to the late Neolithic in the early Harappan period (5500–
                                                2600 BCE). The beliefs and practices of the pre-classical
                                                era (1500–500 BCE) are called the “historical Vedic religion“.
                                                Modern Hinduism grew out of the Vedas, the oldest of which
                                                is the Rigveda, dated to 1700–1100 BCE. The Vedas center
                                                on worship of deities such as Indra, Varuna and Agni, and on
                                                the Soma ritual. Fire-sacrifices, called yajña were performed,
                                                and Vedic mantras chanted but no temples or icons were
                                                built. The oldest Vedic traditions exhibit strong similarities
                                                to Zoroastrianism and other Indo-European religions.
                                            
                                                The major Sanskrit epics, Ramayana and Mahabharata,
                                                were compiled over a protracted period during the late
                                                centuries BCE and the early centuries CE. They contain
                                                mythological stories about the rulers and wars of ancient
                                                India, and are interspersed with religious and philosophical
                                                treatises. 
                                            </span><br><br>
                                            <span class="full-desc-religion">
                                                Hinduism is an accumulation of diverse traditions and has no specific person to point out as its founder. It was
                                                not started as a religious system but rather as a regulated way of life which, with the passage of time, was
                                                transformed into religious concepts. Writings originally meant for the betterment of life of the common people
                                                took up the form of holy books such as the Vedas, Upanishads and Puranas which existed to enlighten
                                                practitioners. The four Vedas -- the Rig Veda, the Sama Veda, the Yajur Veda and the Atharva Veda -- are the
                                                authentic texts of Hinduism and are comprised of hymns, incantations, rituals and the importance of practicing
                                                them in daily life. The concept of God in Hinduism is largely empathic with natural powers such as Agni
                                                (fire),Vayu (wind) and Varuna (water). The concept of “Trimurti” or “Three-forms” (comprising of the Gods
                                                Brahma,Vishnu and Shiva) is related to the three stages of life: birth, life and death. Hinduism, therefore, is a
                                                philosophical approach to life as much as it is a religious concept. 
                                            </span><br>
                                            <span class="full-desc-religion">
                                                According to Klaus Klostermaier, a prominent scholar of Hinduism, the Hindu tradition has proven to be open
                                                to new ideas and scientific thought and that numerous elements of Hinduism overlap with and share the values
                                                of humanism. Scholars often refer to Hinduism as a “way of life.” Humanism also is a way of life, the lifestyle
                                                of many people across the world. 
                                            </span><br><br>
                                            <span class="full-desc-religion">
                                                Researchers indicate that constructing a reliable timeline for Hinduism is challenging for several reasons
                                                including the fact that Hinduism is extremely diverse and only relatively recently was conceived as a single,
                                                distinct religion and, secondly, its written narratives span many eras of time and forms of existence.
                                                Nonetheless, researchers have drawn up extensive timelines for Hinduism. Most sources identify the roots of
                                                Hinduism with the Aryan migration into India around 1500 BCE and with the subsequent composition of the
                                                Rig Veda. 
                                            </span>
                                        </p>
                                    </div>
                                    <!-- end each history post -->
                                    <!-- ========================================================================================================================================== -->

                                    <!-- each post start -->
                                    <!-- =========================================================================================================================================== -->
                                    <div class="each-religion shadow-sm">
                                        <div class="pl-1">
                                            <div class="title-post">The Key Principles, Beliefs and Concepts of Hinduism</div><hr>
                                            <div class="full-desc-religion">
                                                <ul>
                                                    <li> Hinduism gives less importance to the image of God in one’s mind than to what values one carries and how
                                                        the individual evolves. The evolution of the individual mind and personality is more important in the Hindu
                                                        value system than the faith or religion one adheres to. Because of the importance it gives to the values ingrained
                                                        in all religions, it is – along with Buddhism – often referred to as the most secular religion in the world. </li>
                                                    <li>Hinduism is heterogeneous in that it consists of several schools of thought. There is variation in local
                                                        practices and the worship of particular deities. However, there are central tenants that unify it as one tradition.
                                                        The core of traditional Hinduism is faith in Brahman, the underlying universal life force that encompasses and
                                                        embodies existence which may be worshiped in personal forms such as Vishnu, Shiva or Shakti. </li>
                                                    <li>Hinduism allows people to develop and grow at their own pace by making different spiritual paths available
                                                        to them. It allows various schools of thought under its broad principles. </li> 
                                                    <li>Hinduism grants absolute and complete freedom of belief and worship. </li>   
                                                    <li>Hinduism is both a religion and a way of life.</li> 
                                                    <li>The set of rules for “good living” or “Dharmic” living that have been laid down constitute the Hindu religion. </li>      
                                                </ul>
                                                <div class="key_concert">
                                                    <span class="concert">Dharma</span>According to Hinduism, all humans are born with certain duties and obligations. Hindu scriptures
                                                    teach that when a person fulfills his or her duties, all will benefit and when all people submit to their individual
                                                    dharma, the society as a whole flourishes. Dharma has been described in a number of ways: right conduct,
                                                    righteous living, and moral law. It connotes not only rules but also duties that arise from rules. Anyone who
                                                    makes dharma central to one’s life strives to do the right thing according to one’s duty and obligations.
                                                </div>
                                                <div class="key_concert">
                                                    <span class="concert">Karma</span>Most Hindus share a belief in the concept of karma, the effect of past actions on present circumstances.
                                                    Traditionally, Hindus believe in reincarnation -- the cycle of life, death and rebirth -- and karma is connected to
                                                    this belief. According to Hindu philosophy, if one’s thoughts and deeds are kind and compassionate, the “soul”
                                                    will reap positive results. Karma directly influences the life situation into which one is “reborn.” If a person
                                                    creates good karma, he or she will be reborn into a pleasant situation in the next life
                                                </div>
                                                <div class="key_concert">
                                                    <span class="concert">Moksha</span>Moksha means liberation or the soul’s release from the cycle of death and rebirth. It occurs when the
                                                    soul unites with Brahman by realizing its true nature. Several paths can lead to this, including “the path of
                                                    duty.” 
                                                </div>
                                                <div class="key_concert">
                                                    <span class="concert">Brahman</span>The conception of Brahman has not been replicated by any other religion and is exclusive to
                                                    Hinduism. “.... Brahman does not refer to the anthropomorphic concept of God of the Abrahamic religions.... 
                                                    Brahman is not a ‘He’ at all, but rather ... the transcendent origin of all things.” 
                                                </div>
                                                <div class="key_concert">
                                                    <span class="concert">Yamas.</span> In order to achieve liberation from the cycle of birth, death and rebirth, Hindus who practice Raja Yoga
                                                    (one school of Hindu philosophy) place value on a number of essential morals called yamas and niyamas. The
                                                    first yama is nonviolence, a core moral value on which all other yamas are said to be built. The yamas, which
                                                    refer to a person's behavior in day-to-day life, include truthfulness, honesty and compassion.
                                                </div>
                                                <div class="key_concert">
                                                    <span class="concert">Niyamas</span> In addition to the code of personal behaviors in the yamas, Hindu scriptures teach that following a
                                                    code of practices called niyamas will improve a person's karma. The niyamas include, among other things,
                                                    showing modesty and giving to others. 
                                                </div>
                                            </div>
                                            <div class="full-desc-religion">
                                                In short, “Hinduism is a religion based on universality. It gives less importance to the image of God in your
                                                mind than to what values one carries and how the individual evolves. The evolution of the individual mind and
                                                personality is more important in the Hindu value system than the faith or religion one adheres to. Because of the
                                                importance it gives to the good value systems ingrained in all religions, it is – along with Buddhism –the most
                                                secular and most tolerant religion in the world.”
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end each history post -->
                                    <!-- =========================================================================================================================================== -->
                                    <!-- for more info -->
                                    <div class="formore-info shadow-sm">
                                            <div class="books-title">For more content</div>
                                            <div class="book-downlord">
                                                <div class="d-flex">
                                                    <div class="file-type"><i class="fa fa-file-pdf-o"></i></div>
                                                    <div class="bookName">hinduism</div>
                                                </div>
                                                <a href="pdf_files/hinduism.pdf" download="pdf_files/hinduism.pdf" id="dwnlordlink"><div class="downlord-btn"><i class="fa fa-download"></i></div></a>
                                            </div>
                                            <div class="book-downlord">
                                                <div class="d-flex">
                                                    <div class="file-type"><i class="fa fa-file-pdf-o"></i></div>
                                                    <div class="bookName">MSHinduism</div>
                                                </div>
                                                <a href="pdf_files/MSHinduism.pdf" download="pdf_files/MSHinduism.pdf" id="dwnlordlink"><div class="downlord-btn"><i class="fa fa-download"></i></div></a>
                                            </div>
                                            <div class="book-downlord">
                                                <div class="d-flex">
                                                    <div class="file-type"><i class="fa fa-file-pdf-o"></i></div>
                                                    <div class="bookName">hindu-history_ch1_ancient-times</div>
                                                </div>
                                                <a href="pdf_files/hindu-history_ch1_ancient-times.pdf" download="pdf_files/hindu-history_ch1_ancient-times.pdf" id="dwnlordlink"><div class="downlord-btn"><i class="fa fa-download"></i></div></a>
                                            </div>
                                        </div>
                                        <!-- end more info -->
                                </div>
                            </div>
                            <!-- end default tab -->
                            <!-- ================================================================================================================================================== -->

                            <!-- for north and sourth america -->
                            <!-- ================================================================================================================================================= -->
                            <div class="tab-pane" id="america-history" role="tabpanel">

                            </div>
                            <!-- end north south america -->
                            <!-- =============================================================================================================================== -->

                            <!-- start africa in history -->
                            <!-- ================================================================================================================================ -->
                            <div class="tab-pane" id="africa-history" role="tabpanel">
                                
                            </div>
                            <!-- end african in histroy -->
                            <!-- ================================================================================================================================= -->

                            <!-- start asia histroy -->
                            <!-- ================================================================================================================================ -->
                            <div class="tab-pane" id="asia-history" role="tabpanel">
                                
                            </div>
                            <!-- end asia histroy -->
                            <!-- ====================================================================================================================================== -->

                            <!-- start europe history -->
                            <!-- ====================================================================================================================================== -->
                            <div class="tab-pane" id="europe-history" role="tabpanel">
                               
                            </div>
                            <!-- end europe history -->
                            <!-- ======================================================================================================================================== -->
                        </div>

                    </div>
                </div>
                <!-- edn left side section -->
                <!-- ========================================================================================================================================================= -->


                <!-- right side section -->
                <!-- ================================================================================================================================================================= -->
                <div class="right-side-section col-xs-12 col-xl-5 col-sm-12 col-md-3 col-lg-3">
                    <div class="right-side-section-holder">

                        <div class="religion_activity_stream">
                            <a href="religion_activity.php?rel=Budhism"><div class="link_activity">Home religion</div></a>
                        </div>

                        <!-- tday in history -->
                        <!-- ================================================================================================================================================== -->
                        <div class="today-in-history">
                            <div class="t-in-history-title"> Popular topics</div>
                            <div class="tin-history-list mt-3" id="topics_lists">

                            </div>
                        </div>
                        <!-- end today in history -->
                        <!-- ============================================================================================================================================================================== -->


                        <!-- top new and topics -->
                        <!-- ========================================================================================================================================================================= -->
                        <div class="today-in-history mt-3">
                            <div class="t-in-history-title"> Top news and topics... </div>
                            <div class="tin-history-list mt-3" id="list_new_topics">

                            </div>
                        </div>
                        <!-- end today in history -->
                        <!-- ============================================================================================================================================================= -->

                    </div>
                </div>
                <!-- end right side section -->
                <!-- ============================================================================================================================================================================= -->

                <!-- INITIALIZE MESSAGE BTN AND IT ACCESSORIE -->
                <!-- *********************************************** -->
                <?php require_once ("../header/message.php"); ?>
                <!-- *********************************************** -->
           </div>
       </div>
       <!-- end down section -->
       <!-- ======================================================================================================================================================================================== -->

       <!-- javascript external file, type js  and libraries-->
       <!-- ================================================================================================================================================== -->
       <script src="../Assets/js/religion_content.box.js"></script>
       <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
       <script src="../Lib/jquery/jquery.min.js"></script>
       <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
       <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
       <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
       <!-- end libraries -->
       <!-- ============================================================================================================================================================================ -->

   </body>
</html>
<?php }else{
    header("Location: ../Personal-account/account_shortcut.box.php");
    exit();
} ?>