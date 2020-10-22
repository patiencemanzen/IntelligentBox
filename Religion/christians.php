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

       <link rel="stylesheet" href="../Assets/css/each_religion.box.css">
       <!-- external css file/ libraries -->
       <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
       <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
   </head>
   <body class="bg-white">
        
        <!-- Section that will hold header -->
        <!-- ========================================================================================================================================================== -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- end header section -->
        <!-- ========================================================================================================================================================== -->

       <!-- down section -->
       <!-- =========================================================================================================================================================== -->
        <div class="">
            <div class="down-lord d-flex">

                <!-- GLOBAL JS EMAIL -->
                <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
                <input type="hidden" name="" id="hiddenPage" value="christian">
                <!-- END GLOBAL EMAIL -->

                <!-- left side section -->
                <!-- ================================================================================================================= -->
                <div class="left-side-section">
                    <div class="left-side-holder">

                        <!-- background image on top page -->
                        <!-- ========================================================================================================= -->
                        <div class="top-background-image">
                            <img src="../Images/religions/each-religion/christian/top-background-1.jpg" alt="" width="100%" height="100%">
                            <div class="top-name-pre">
                                <div><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                                <div class="mt-1">Real christian</div>
                            </div>
                        </div>
                        <!-- end background image -->
                        <!-- ========================================================================================================= -->

                        <div class="tab-content">

                            <!-- default tab -->
                            <div class="tab-pane active" id="" role="tabpanel">
                                <div class="post-list-holder mt-5">

                                    <!-- each post start -->
                                    <!-- ===================================================================================================================================== -->
                                    <div class="each-religion shadow-sm">
                                        <div class="pl-1">
                                            <div class="title-post">An Introduction to Christian Theology</div><hr>
                                            <div class="full-desc-religion">
                                                Thoughtful, constructive interreligious dialogue depends not only upon the openness of the dialogue
                                                partners to diverse perspectives, but also upon a reliable foundation of correct information about the
                                                various beliefs being discussed. For those who desire a basic understanding of the tenets of Christian
                                                faith, this paper offers a brief history of Christianity and summarizes the central Christian beliefs in
                                                God, Jesus Christ, the Trinity, the Bible and authority, sin and reconciliation, sacraments, spiritual
                                                practices, and ethical living. 
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end each history post -->
                                    <!-- ============================================================================================================================================ -->

                                    <!-- each post start -->
                                    <!-- ===================================================================================================================================== -->
                                    <div class="each-religion shadow-sm">
                                        <div class="pl-1">
                                            <div class="title-post">Introduction</div><hr>
                                            <div class="full-desc-religion">
                                                <p>
                                                    The basics of Christian theology as it is understood in the
                                                    American context. It explains the major beliefs or
                                                    doctrines that are generally accepted by all
                                                    Christians while also highlighting the theological
                                                    diversity of the Christian churches. In other words,
                                                    although all Christians adhere to the doctrines
                                                    discussed here, various groups of Christians often
                                                    interpret these doctrines differently. These
                                                    disagreements usually have historical roots; thus,
                                                    Christianity’s historical development is
                                                    inseparable from its doctrinal development. For
                                                    this reason, the paper gives an overview of
                                                    Christianity’s historical development before
                                                    moving into a discussion of the major Christian
                                                    beliefs. 
                                                </p>
                                                <p>
                                                    As would be the case with any religious tradition,
                                                    the complexity of Christian theology and history
                                                    cannot be explained fully in a brief paper. Many
                                                    nuances of Christian theology and history tend to 
                                                    remain in the background of how Christianity is
                                                    perceived and practiced in the United States;
                                                    frequently, these details may not even be familiar
                                                    to American Christians themselves. Nevertheless,
                                                    some knowledge of these particulars is essential
                                                    to ground an accurate understanding of
                                                    Christianity. 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end each history post -->
                                    <!-- ============================================================================================================================================ -->

                                    <!-- each post start -->
                                    <!-- ======================================================================================================================================== -->
                                    <div class="each-religion-post shadow-sm">
                                        <div><div class="religion-image"><img src="../Images/religions/each-religion/christian/intro.jpg" alt="" width="100%" height="100%"></div></div>
                                        <p class="pl-1 para-decs">
                                            <span class="title-post">Christianity</span><hr>
                                            <span class="full-desc-religion">
                                                Christianity, major religion stemming from the life, teachings, 
                                                and death of Jesus of Nazareth (the Christ, or the Anointed One of God) 
                                                in the 1st century CE. It has become the largest of the world’s religions and, 
                                                geographically, the most widely diffused of all faiths. It has a constituency 
                                                of more than two billion believers. Its largest groups are the Roman Catholic 
                                                Church, the Eastern Orthodox churches, and the Protestant churches. 
                                                The Oriental Orthodox churches constitute one of the oldest branches 
                                                of the tradition but had been out of contact with Western Christianity 
                                                and Eastern Orthodoxy from the middle of the 5th century until the late 
                                                20th century because of a dispute over Christology (the doctrine of 
                                                Jesus Christ’s nature and significance). Significant movements 
                                                within the broader Christian world and sometimes transcending 
                                                denominational boundaries are Pentecostalism, Charismatic Christianity, 
                                                Evangelicalism, and fundamentalism. In addition, there are numerous 
                                                independent churches throughout the world. See also Anglicanism; 
                                                Baptist; Calvinism; Congregationalism; Evangelical church; 
                                                Lutheranism; Oriental Orthodoxy; presbyterian; Reformed and Presbyterian churches.
                                            </span>
                                        </p>
                                    </div>
                                    <!-- end each history post -->
                                    <!-- ===================================================================================================================================== -->

                                    <!-- each post start -->
                                    <!-- ===================================================================================================================================== -->
                                    <div class="each-religion shadow-sm">
                                        <div class="pl-1">
                                            <div class="title-post"> HISTORY OF CHRISTIANITY </div><hr>
                                            <div class="full-desc-religion">
                                                <p>
                                                    The history of Christianity unfolds organically
                                                    through time. It is commonly understood to begin
                                                    with Jesus, who was born two thousand years ago.
                                                    However, because Jesus was Jewish, some date
                                                    Christianity’s roots much further back, to the
                                                    beginnings of Judaism
                                                </p> 

                                                <!-- first section of history of christian -->
                                                <!-- ============================================== -->
                                                <p>
                                                    <span class="sub-title-paragraphy">The Beginnings of Christianity (1-300 C.E.)</span>
                                                    <p>
                                                        Christianity began as a movement within
                                                        Judaism during the first century C.E. At this time,
                                                        the Jewish rabbi now known as Jesus of Nazareth
                                                        undertook a public teaching ministry in which he
                                                        preached about the imminent coming of the
                                                        Kingdom of God. As reported in the Christian
                                                        Scriptures (commonly known among Christians
                                                        as the New Testament), Jesus assembled a core
                                                        group of twelve Jewish disciples, along with many
                                                        other followers. Together they ministered to the
                                                        poor and outcast in present-day Israel and
                                                        Palestine. Around the year 33 C.E., Jesus was
                                                        arrested and executed by the Roman governor.
                                                        However, Jesus’ followers claimed that he rose
                                                        from the dead; they came to believe that he was
                                                        the Son of God and that his death and
                                                        resurrection saved them from their sins. As their
                                                        conviction grew, they named Jesus the “Christ”—
                                                        meaning Messiah or Anointed One—according to
                                                        the prophecies of the Jewish Bible, the Hebrew
                                                        Scriptures (commonly known among Christians
                                                        as the Old Testament). This is the origin of the
                                                        name “Jesus Christ” and led to Jesus’ followers
                                                        being called “Christians.” 
                                                    </p>
                                                    <p>
                                                        After Jesus’ death, “Christians” became identified
                                                        as a particular sect within Judaism. These Jews
                                                        believed that Jesus was the Messiah foretold in
                                                        their Hebrew Scriptures, whose coming they had
                                                        long anticipated. However, as time went on, the
                                                        majority of Jews did not believe that Jesus was the
                                                        Messiah, and their differences with “Christian”
                                                        Jews increased. Further, many non-Jewish people
                                                        did come to believe in Jesus. In this way,
                                                        “Christianity” gradually became a religious
                                                        movement distinct from Judaism, as it is practiced
                                                        today. 
                                                    </p>
                                                </p>
                                                <!-- end first section on brief of history -->
                                                <!-- ======================================= -->

                                                <!-- secord part on christian history -->
                                                <!-- ============================================= -->
                                                <p>
                                                    <span class="sub-title-paragraphy">Further Development (300-1500 C.E.) </span>
                                                    <p>
                                                        Since their religious practices were distinguished
                                                        from Judaism only gradually, Christians of the
                                                        first and second centuries worshipped in small
                                                        pockets throughout the Middle and Near East, and
                                                        their religious practices differed from town to
                                                        town. Moreover, Christianity was often outlawed
                                                        under Roman law; many believers were
                                                        persecuted and executed for professing their faith.
                                                        In the year 313 C.E., the Roman emperor
                                                        Constantine converted to Christianity and
                                                        legalized it, virtually ending the persecutions.
                                                        Noticing that Christians disagreed with one
                                                        another on many important points, such as the
                                                        relationship of Jesus to God, and that these
                                                        debates were causing unrest and confusion in his
                                                        empire, Constantine called Christian leaders
                                                        (bishops) from across the empire to a council at
                                                        Nicaea in 325 C.E. 
                                                        This first major council of the
                                                        Christian churches clarified key points of theology,
                                                        including the Trinity and the divinity of Jesus (see
                                                        discussion below). The primary written
                                                        contribution of this council was the Nicene Creed.
                                                        More debates followed in the succeeding years,
                                                        and the second great council, held in
                                                        Constantinople in 381 C.E., expanded this creed
                                                        into a longer statement of faith that members of
                                                        many Christian churches still recite.
                                                    </p>
                                                    <p>
                                                        Although lively debates over key theological points
                                                        continued, Christianity underwent further 
                                                        unification in the fourth century under the reign
                                                        of Emperor Theodosius and through the theology
                                                        of Bishop Augustine of Hippo (b. 356-d. 430).
                                                        Almost seventy years after Constantine legalized
                                                        Christianity, Theodosius established the
                                                        Christian faith as the official religion of the
                                                        Roman Empire. From then on, Christianity
                                                        spread rapidly. Some converted to Christianity to
                                                        advance in Roman society or out of fear of Roman
                                                        authorities, but many converted willingly. These
                                                        conversions catapulted Christianity forward as a
                                                        leading religion of the Roman Empire, which
                                                        then encompassed most of Europe and North
                                                        Africa. 
                                                    </p>
                                                    <p>
                                                        Shortly after Theodosius’ decree, Augustine
                                                        became bishop of Hippo in North Africa. An adult
                                                        convert to Christianity, Augustine came to be one
                                                        of the most influential theologians in the history
                                                        of the Christian church. At this time, basic
                                                        Christian beliefs were still contested, so
                                                        Augustine articulated much of his theology in
                                                        response to competing interpretations of the faith
                                                        and to non-Christian faiths of the fourth and fifth
                                                        centuries. Through these conflicts, Augustine
                                                        provided significant explorations of the Trinity and
                                                        human sinfulness, as well as the relationship
                                                        between church and state. Augustine’s numerous
                                                        writings greatly influenced Christian thought
                                                        from the fifth century to the Protestant
                                                        Reformation of the sixteenth century and beyond. 
                                                    </p>
                                                    <p>
                                                        Despite his powerful influence, Augustine did not
                                                        end the disputes within Christianity. At the
                                                        church councils, which continued to take place
                                                        every 50-100 years, questions about Jesus’
                                                        humanity and divinity—that is, his identity as the
                                                        Son of God—proved an ongoing source of
                                                        controversy. As Christians from different areas of
                                                        the world drew on the philosophical traditions of
                                                        their cultures to reflect upon these questions, the
                                                        most marked differences arose between Christian
                                                        leaders of the Latin West and those of the Greek
                                                        East. In the year 1054 C.E., these disagreements
                                                        culminated in the “Great Schism” that divided
                                                        Christianity into two major strands, Western and
                                                        Eastern. Today, Eastern Christianity includes the
                                                        Orthodox churches, while Western Christianity
                                                        includes the Catholic and Protestant churches.
                                                        Because the Orthodox Church in America
                                                        accounts for only about one percent of Christians
                                                        in the United States, this primer considers only
                                                        Western Christianity from this point on. 
                                                    </p>
                                                    <p>
                                                        Western Christianity flourished during the High
                                                        Middle Ages of eleventh- to thirteenth-century
                                                        Europe. Christianity inspired exquisite art, music,
                                                        and architecture. As the first universities were
                                                        established, Christian theology became highly
                                                        systematized, most notably in the works of
                                                        Thomas Aquinas (b. 1225-d. 1274). The leader of
                                                        the Western Christian church, the pope, was a
                                                        major figure in European politics. During the
                                                        fourteenth and fifteenth centuries, however, the
                                                        papacy lost some of its moral authority due to
                                                        widespread corruption in the church, and many
                                                        Christians began to question the power of Rome. 
                                                    </p>
                                                </p>
                                                <!-- end secord part of history of cristian -->

                                                <!-- third part history -->
                                                <p>
                                                    <span class="sub-title-paragraphy">The Emergence of Protestant Christianity (1500 C.E.-Present) </span>
                                                    <p>
                                                        These questions eventually led to another major
                                                        split within the Christian church in the early
                                                        sixteenth century. What is now known as
                                                        Protestant Christianity first began to emerge in
                                                        present-day Germany, where Christians protested
                                                        (hence the name “Protestant”) corruption in the
                                                        Christian church. 
                                                    </p>
                                                    <p>
                                                        The key figure of the German protest was a
                                                        Christian monk, Martin Luther (1483-1543). In 1517
                                                        Luther wrote ninety-five theses criticizing various
                                                        corruptions in the church, most notably its
                                                        practice of selling “indulgences.” In their original
                                                        form, indulgences were gifts offered to the church
                                                        by repentant sinners to show their gratitude to
                                                        God for the forgiveness of their sins. By the early
                                                        1500s, the practice had become corrupted, and it
                                                        appeared that the Christian church was selling
                                                        forgiveness rather than merely accepting gifts
                                                        from the faithful. Luther criticized this practice for
                                                        de-emphasizing repentance and making
                                                        Christians think they could buy God’s forgiveness.
                                                        Instead, Luther preached that salvation is a gift
                                                        from God that comes through faith alone upon
                                                        repentance for sin. Luther also objected to the
                                                        hierarchical structure of the Christian church,
                                                        arguing that any Christian could interpret the
                                                        Bible and serve as a minister as well as any other;
                                                        this idea is now known as the “priesthood of all
                                                        believers.” His efforts at reform, however, met
                                                        with resistance, and in 1522 Christian authorities
                                                        condemned his theological claims. Luther
                                                        continued his attempts at reform, and his
                                                        followers eventually formed a new Christian
                                                        group distinct from the original Western or
                                                        “Catholic” church. These Christians became
                                                        known as “Lutherans” and remained most
                                                        numerous in Germany. Today, in the United
                                                        States, Lutherans are one of the larger Protestant
                                                        denominations, numbering about five million. 
                                                    </p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end each history post -->
                                    <!-- ============================================================================================================================================ -->

                                    <!-- each post start -->
                                    <!-- ===================================================================================================================================== -->
                                    <div class="each-religion shadow-sm">
                                        <div class="pl-1">
                                            <div class="title-post">Christian spiritual practice: Wordship and Prayer</div><hr>
                                            <div class="full-desc-religion">
                                                <p>
                                                    Communal worship—informal or formal services
                                                    during which Christians gather to offer praise and
                                                    thanksgiving to God—is central to all Christian
                                                    denominations. Communal worship may occur
                                                    throughout the week, but Catholics and
                                                    Protestants usually attend services on Sunday
                                                    mornings. The style of these services differs
                                                    greatly among the denominations. 
                                                </p>
                                                <p>
                                                    The Catholic Mass is a liturgical celebration that
                                                    includes songs of praise, formal prayers, readings
                                                    from the Hebrew and Christian Scriptures, a talk
                                                    by the priest interpreting the scriptures called the
                                                    “sermon” or “homily,” the recitation of the
                                                    Nicene-Constantinopolitan Creed, and the
                                                    sacrament of Eucharist. The Mass is often
                                                    described as “high church” because of the strict
                                                    organization of the liturgy, the formal prayers,
                                                    and the ceremonial robes worn by the priest. 
                                                </p>
                                                <p>
                                                    Protestant worship ranges from “high church” to
                                                    “low church” forms. Lutheran and Episcopal
                                                    services are quite similar to the Catholic Mass,
                                                    while evangelical worship often consists more
                                                    simply of singing, a scripture reading, and a
                                                    sermon. Christian worship services usually last
                                                    between sixty and ninety minutes but may be
                                                    longer or shorter.
                                                </p>
                                                <p>
                                                    Because Christians believe in a personal God who
                                                    listens to individuals, and because Jesus instructs
                                                    his followers to pray in the Christian Scriptures,
                                                    Christians pray to sustain their relationship with
                                                    God. Prayer takes many forms, including the
                                                    ritualized prayers of worship services, personal
                                                    prayer, group prayer, and even Bible study. Prayers
                                                    may be silent or spoken aloud; contemplative,
                                                    nonverbal forms of prayer are also practiced.
                                                    Intercessory prayer, asking others to pray on one’s
                                                    behalf, is also common. For Catholics, as noted,
                                                    the church includes all believers, even those who
                                                    have died; therefore, Catholics sometimes ask
                                                    saints, including Mary, the mother of God, to
                                                    “intercede” with God on their behalf. Among all
                                                    Christians, the Lord’s Prayer or “Our Father,”
                                                    which Jesus teaches his disciples to pray in the
                                                    Gospels, is the most-recited prayer. 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end each history post -->
                                    <!-- ============================================================================================================================================ -->

                                    <!-- each post start -->
                                    <!-- ===================================================================================================================================== -->
                                    <div class="each-religion shadow-sm">
                                        <div class="pl-1">
                                            <div class="title-post">Ethical christian living</div><hr>
                                            <div class="full-desc-religion">
                                                <p>
                                                    How do these fundamentals of Christian theology
                                                    transfer into action in the lives of Christians? The
                                                    answer is complex, for the multiple expressions of
                                                    Christian faith give rise to various understandings
                                                    of the ethical Christian life. In general, however, 
                                                    Jesus teaches in the Gospels that Christians are to
                                                    love God and to love their neighbors as themselves,
                                                    whether the neighbor be friend or enemy.
                                                    Christians do not always succeed in following this
                                                    command; however, it is manifested in the Christian ideals of vocation, justice, and
                                                    missionary activity. 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end post history -->
                                    <!-- ============================================================================================================================================ -->

                                    <!-- for more info -->
                                    <div class="formore-info shadow-sm">
                                        <div class="books-title">For more content</div>
                                        <div class="book-downlord">
                                            <div class="d-flex">
                                                <div class="file-type"><i class="fa fa-file-pdf-o"></i></div>
                                                <div class="bookName">BCP-Christianity</div>
                                            </div>
                                            <a href="pdf_files/BCP-Christianity.pdf" download="pdf_files/BCP-Christianity.pdf" id="dwnlordlink"><div class="downlord-btn"><i class="fa fa-download"></i></div></a>
                                        </div>
                                        <div class="book-downlord">
                                            <div class="d-flex">
                                                <div class="file-type"><i class="fa fa-file-pdf-o"></i></div>
                                                <div class="bookName">History of christianity</div>
                                            </div>
                                            <a href="pdf_files/history-of-christianity.pdf" download="pdf_files/history-of-christianity.pdf" id="dwnlordlink"><div class="downlord-btn"><i class="fa fa-download"></i></div></a>
                                        </div>
                                        <div class="book-downlord">
                                            <div class="d-flex">
                                                <div class="file-type"><i class="fa fa-file-pdf-o"></i></div>
                                                <div class="bookName">History of christianity church</div>
                                            </div>
                                            <a href="pdf_files/1819-1893,_Schaff._Philip,_History_Of_Christian_Church_[01]_Apostolic_Christianity_AD_1-100,_EN.pdf" download="pdf_files/1819-1893,_Schaff._Philip,_History_Of_Christian_Church_[01]_Apostolic_Christianity_AD_1-100,_EN.pdf" id="dwnlordlink"><div class="downlord-btn"><i class="fa fa-download"></i></div></a>
                                        </div>
                                    </div>
                                    <!-- end more info -->

                                </div>    
                            </div>
                            <!-- end default tabe -->
                            <!-- ==================================================================================================================================================== -->
                        </div>

                    </div>
                </div>
                <!-- edn left side section -->
                <!-- =================================================================================================================================================== -->

                <!-- right side section -->
                <!-- =================================================================================================================================================== -->
                <div class="right-side-section">
                    <div class="right-side-section-holder">
                        <div class="religion_activity_stream">
                            <a href="religion_activity.php?rel=Christian"><div class="link_activity">Home religion</div></a>
                        </div>

                        <!-- tday in history -->
                        <!-- ==================================================================================================================== -->
                        <div class="today-in-history">
                            <div class="t-in-history-title"> Popular topics</div>
                            <div class="tin-history-list mt-3" id="topics_lists">

                            </div>
                        </div>
                        <!-- end today in history -->
                        <!-- ==================================================================================================================================================================== -->

                        <!-- top news and topics -->
                        <!-- ===================================================================================================================================================================== -->
                        <div class="today-in-history">
                            <div class="t-in-history-title"> Common news... </div>
                            <div class="tin-history-list mt-3" id="list_new_topics">

                            </div>
                        </div>
                        <!-- end today in history -->
                        <!-- ==================================================================================================================================================================== -->

                    </div>
                </div>
                <!-- end right side section -->
                <!-- ================================================================================================================================================================================= -->
           </div>
       </div>
       <!-- end down section -->
       <!-- ========================================================================================================================================= -->

       <!-- javascript external file, type js  and libraries-->
       <!-- ========================================================================= -->
       <!-- ========================================================================== -->
       <script src="../Assets/js/religion_content.box.js"></script>
       <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
       <script src="../Lib/jquery/jquery.min.js"></script>
       <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
       <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
       <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
       <!-- end libraries -->
       <!-- ===================================================================================================================================================== -->

   </body>
</html>
<?php }else{
    header("Location: ../Personal-account/account_shortcut.box.php");
    exit();
} ?>