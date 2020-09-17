

CREATE TABLE `autobiography` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `url_code` varchar(250) NOT NULL,
  `autobio_email` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `autobio_name` varchar(250) NOT NULL,
  `autobio_pages` int(250) NOT NULL,
  `executed_date` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO autobiography VALUES("1","","my Money hard in califonia--8828@autobio.box","Antimatter@gmail.com","my Money hard in califonia","0","2020-06-23 06:06:57");
INSERT INTO autobiography VALUES("3","","Journal to the mar--1762@autobio.box","Antimatter@gmail.com","Journal to the mar","0","2020-06-23 06:06:41");
INSERT INTO autobiography VALUES("4","","make money--4735@autobio.box","fgfhg@gmailc.com","make money","0","2020-06-25 10:06:03");
INSERT INTO autobiography VALUES("5","","nina--3304@autobio.box","Mark@gmail.com","nina","0","2020-06-25 10:06:45");
INSERT INTO autobiography VALUES("6","","last city--9290@autobio.box","eretytey@gmai.ocm","last city","0","2020-06-25 10:06:23");
INSERT INTO autobiography VALUES("7","","Lock and nation--8547@autobio.box","Ady@gmail.com","Lock and nation","0","2020-06-27 01:06:47");
INSERT INTO autobiography VALUES("8","","the rock--5026@autobio.box","peacemaker@gmail.com","the rock","0","2020-07-01 03:07:58");
INSERT INTO autobiography VALUES("9","","My journal--6945@autobio.box","El2@gmail.com","My journal","0","2020-07-03 08:07:27");
INSERT INTO autobiography VALUES("10","","The meaning of the city--2185@autobio.box","El2@gmail.com","The meaning of the city","0","2020-07-03 08:07:03");
INSERT INTO autobiography VALUES("11","430c1ecbf8b2669ddfe43fee8d2031014037aa2d","Man in hood--7851@autobio.box","dangerman@gmail.com","Man in hood","0","2020-07-04 08:07:18");
INSERT INTO autobiography VALUES("12","69898074bafd9871ba7727a42de4e7673a114f48","Grey in forest--1417@autobio.box","dangerman@gmail.com","Grey in forest","0","2020-07-04 09:07:32");



CREATE TABLE `autobiography_content` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `autobiography_identity` int(250) NOT NULL,
  `page_content` varchar(250) DEFAULT NULL,
  `executed_page` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO autobiography_content VALUES("1","11","<p>&ldquo;Education would be much more effective if its purpose was to ensure that by the time they leave school every boy and girl should know how much they do not know, and be imbued with a lifelong desire to know it.&rdquo;<br />
<strong>William ","2020-07-04 09:07:52");
INSERT INTO autobiography_content VALUES("2","11","<p>&ldquo;It is in fact a part of the function of education to help us escape, not from our own time &ndash; for we are bound by that &ndash; but from the intellectual and emotional limitations of our time.&rdquo;<br />
<strong>T.S. Eliot</strong></","2020-07-04 09:07:28");
INSERT INTO autobiography_content VALUES("3","11","<p>&ldquo;The only thing that interferes with my learning is my education.&rdquo;<br />
<strong>Albert Einstein</strong></p>

<p>&ldquo;Education would be much more effective if its purpose was to ensure that by the time they leave school every bo","2020-07-04 09:07:22");



CREATE TABLE `class_tracks` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `class_identity` varchar(250) NOT NULL,
  `student_identity` int(250) NOT NULL,
  `live` varchar(10) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO class_tracks VALUES("5","2","39","on","2020-07-02 08:07:59");
INSERT INTO class_tracks VALUES("6","2","40","on","2020-07-03 06:07:11");
INSERT INTO class_tracks VALUES("8","3","41","on","2020-07-03 07:07:15");
INSERT INTO class_tracks VALUES("9","4","41","on","2020-07-03 07:07:23");
INSERT INTO class_tracks VALUES("10","6","41","on","2020-07-03 07:07:36");
INSERT INTO class_tracks VALUES("11","7","41","on","2020-07-03 07:07:39");
INSERT INTO class_tracks VALUES("12","8","41","on","2020-07-03 11:07:35");
INSERT INTO class_tracks VALUES("13","3","50","on","2020-07-05 01:07:53");
INSERT INTO class_tracks VALUES("14","3","51","on","2020-07-05 01:07:19");
INSERT INTO class_tracks VALUES("15","3","66","on","2020-07-13 08:07:14");
INSERT INTO class_tracks VALUES("16","3","66","on","2020-07-14 08:07:08");
INSERT INTO class_tracks VALUES("17","4","70","on","2020-07-17 01:07:07");
INSERT INTO class_tracks VALUES("18","5","70","on","2020-07-17 01:07:43");
INSERT INTO class_tracks VALUES("19","3","70","on","2020-07-17 01:07:47");
INSERT INTO class_tracks VALUES("20","7","70","on","2020-07-17 01:07:49");
INSERT INTO class_tracks VALUES("21","8","70","on","2020-07-17 01:07:59");



CREATE TABLE `course_content` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `course_identity` varchar(250) NOT NULL,
  `course_content` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO course_content VALUES("1","15","<p>&ldquo;Do not train children to learning by force and harshness, but direct them to it by what amuses their minds, so that you may be better able to discover with accuracy the peculiar bent of the genius of each.&rdquo;<br />
<strong>Plato</stron","2020-07-03 10:07:30");
INSERT INTO course_content VALUES("2","15","<p>&ldquo;No man who worships education has got the best out of education&hellip;. Without a gentle contempt for education no man&#39;s education is complete.&rdquo;<br />
<strong>G.K. Chesterton</strong></p>
","2020-07-03 10:07:25");



CREATE TABLE `course_topic` (
  `identity` int(250) NOT NULL,
  `course_identity` int(250) NOT NULL,
  `topic_name` varchar(250) NOT NULL,
  `topic_desc` varchar(250) NOT NULL,
  `live` varchar(10) NOT NULL,
  `date_created` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `courses` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `class_identity` int(250) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `course_img` varchar(250) NOT NULL,
  `course_desc` varchar(250) NOT NULL,
  `course_instruction` varchar(250) NOT NULL,
  `level` varchar(250) NOT NULL,
  `lessons_count` varchar(250) NOT NULL,
  `live` varchar(10) NOT NULL,
  `date_created` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO courses VALUES("1","11","apply basic algebra and trigonometry","trigonometry.jpg","Basic algebra and trigonometry  ","","five","3","","");
INSERT INTO courses VALUES("5","0","Introduction","Courses_document.png","course","-----","5","0","on","2020-06-27 10:06:36");
INSERT INTO courses VALUES("6","0","astronuts","Course_document.png","course","must sturdy well","5","0","on","2020-06-27 12:06:46");
INSERT INTO courses VALUES("7","0","Introduction","Courses_document.png","course","-----","5","0","on","2020-07-01 07:07:36");
INSERT INTO courses VALUES("8","0","Introduction","Courses_document.png","course","-----","5","0","on","2020-07-02 08:07:15");
INSERT INTO courses VALUES("9","4","Introduction","Courses_document.png","course","-----","5","0","on","2020-07-02 08:07:38");
INSERT INTO courses VALUES("10","4","What is management in computer?","Course_document.png","course","This course should attended by student who already attend first","5","0","on","2020-07-02 12:07:15");
INSERT INTO courses VALUES("11","4","What is management in computer?","Course_document.png","course","This course should attended by student who already attend first","5","0","on","2020-07-02 12:07:26");
INSERT INTO courses VALUES("15","8","Introduction","Courses_document.png","course","-----","5","0","on","2020-07-03 08:07:19");
INSERT INTO courses VALUES("16","9","Introduction","Courses_document.png","course","-----","5","0","on","2020-07-13 07:07:18");
INSERT INTO courses VALUES("17","10","introduction","Courses_document.png","course","-----","5","0","on","2020-07-20 01:07:17");
INSERT INTO courses VALUES("18","10","what is biomedical","Course_document.png","course","this course shall continue untill we finish this class","5","0","on","2020-07-20 01:07:38");
INSERT INTO courses VALUES("19","10","medical help","Course_document.png","course","continiue","5","0","on","2020-07-20 01:07:30");
INSERT INTO courses VALUES("20","10","important","Course_document.png","course","allow","5","0","on","2020-07-20 01:07:11");
INSERT INTO courses VALUES("21","10","summary","Course_document.png","course","summary","5","0","on","2020-07-20 01:07:34");



CREATE TABLE `department_members` (
  `identity` int(11) NOT NULL,
  `user_email` int(11) NOT NULL,
  `department_identity` int(250) NOT NULL,
  `joined` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `departments` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(250) NOT NULL,
  `department_img` varchar(250) NOT NULL,
  `department_desc` varchar(250) NOT NULL,
  `department_course_count` int(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO departments VALUES("1","Obscurity","obscurity.webp","Department that act in all action and stand nowhere, Each and every person in this department can be visible evrywhere","0","2020-07-02 07:23:00");
INSERT INTO departments VALUES("2","software development","sotware_development.jpg","This qualification provides the skills,
knowledge and attitudes for a learner to be
competent in a range of routine tasks and
activities that require the application of a
limited range of basic practical skills in a
defined context","11","18/06/2020");



CREATE TABLE `history_post` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `media` varchar(250) NOT NULL,
  `media_type` varchar(250) NOT NULL,
  `history_section` varchar(250) NOT NULL COMMENT 'history based on...',
  `history_title` varchar(250) DEFAULT NULL,
  `history_sub_title` varchar(250) NOT NULL,
  `history_full_body` varchar(250) DEFAULT NULL,
  `history_side` varchar(250) DEFAULT NULL,
  `status_view` varchar(250) DEFAULT NULL,
  `own_status` varchar(250) DEFAULT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO history_post VALUES("1","1","intelligentBox@gmail.com","IB_story_image1594205107Box--close-up-of-motherboard.png","png","today_in_history","The white house","","Education would be much more effective if its purpose was to ensure that by the time they leave school every boy and girl should know how much they do not know, and be imbued with a lifelong desire to know it.","american","0","0","2020-07-08 12:07:07");
INSERT INTO history_post VALUES("2","1","intelligentBox@gmail.com","IB_story_image1594205585Box--city-wallpaper-10-640x360.png","png","history","The america","","Education would be much more effective if its purpose was to ensure that by the time they leave school every boy and girl should know how much they do not know, and be imbued with a lifelong desire to know it.","american","0","0","2020-07-08 12:07:05");
INSERT INTO history_post VALUES("3","1","intelligentBox@gmail.com","IB_story_image1594209711Box--7-1.png","png","today_in_history","Te main","","It is a thousand times better to have common sense without education than to have education without common sense.","asian","0","0","2020-07-08 02:07:51");
INSERT INTO history_post VALUES("4","60","laloen@gmail.com","IB_story_image1594456103Box--gm (120).jpg","jpg","defined","the car history","none","the main story of cars","world","0","0","2020-07-11 10:07:23");
INSERT INTO history_post VALUES("5","60","laloen@gmail.com","IB_story_image1594461061Box--gm (18).jpg","jpg","defined","the missed island","none","the motion is the worst thing ever , but missing island","world","0","0","2020-07-11 11:07:01");
INSERT INTO history_post VALUES("6","1","intelligentBox@gmail.com","IB_story_image1594461426Box--gm (134).jpg","jpg","history","the wonder land","the story of wonder land and two litter baby","this it sound like crazy story but it true","american","0","0","2020-07-11 11:07:06");



CREATE TABLE `history_post_likes` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `post_identity` int(250) NOT NULL,
  `status_like` int(20) NOT NULL,
  `liked_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO history_post_likes VALUES("1","laloen@gmail.com","2","1","2020-07-11 11:06:43");
INSERT INTO history_post_likes VALUES("2","stard@gmail.com","6","1","2020-07-19 12:18:00");



CREATE TABLE `intelligent_users` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `url_identity` varchar(250) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `verification_Code` int(250) NOT NULL,
  `log_Session` varchar(250) NOT NULL,
  `Verified` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

INSERT INTO intelligent_users VALUES("1","10568232","Manirabona","walker","hseal419@gmail.com","manirabona@gmail.com","student","343896","2020","complete","2020-06-23 10:06:47");
INSERT INTO intelligent_users VALUES("2","20431535","Muganwa","Antimatter","Antimatter@gmail.com","4536eqyeuwyueq","student","857104","2020-06-23 11:06:15","complete","2020-06-23 11:06:15");
INSERT INTO intelligent_users VALUES("3","39537555","Mark","Lainkan","Mark@gmail.com","manirabona@gmail.com","trainer","348794","online","complete","2020-06-24 11:06:03");
INSERT INTO intelligent_users VALUES("4","55825087","erttyery","zdghsgdh","fgfhg@gmailc.com","rdtrfghvbbnm","trainer","332189","2020-06-25 08:06:04","complete","2020-06-25 08:06:04");
INSERT INTO intelligent_users VALUES("5","68655946","typical","Lastname","eretytey@gmai.ocm","dyfwetyrewrtwe","student","221279","2020-06-25 10:06:29","complete","2020-06-25 10:06:29");
INSERT INTO intelligent_users VALUES("6","97327920","Rick","Warren","Warren@gmail.com","dhghsgfgagshgdhjas","student","519694","2020-06-25 12:06:22","complete","2020-06-25 12:06:22");
INSERT INTO intelligent_users VALUES("7","44001060","Fenty","Feinty","feinty@gmail.com","83478374ueiuqwioue","trainer","133106","2020-06-25 01:06:42","complete","2020-06-25 01:06:42");
INSERT INTO intelligent_users VALUES("8","50746651","rubagumya","remy","rubaremy@gmail.com","aaaaaaa","student","303368","online","complete","2020-06-25 01:06:57");
INSERT INTO intelligent_users VALUES("9","81579876","billiand","lolen","lolen@gmail.com","dywuyquwiuiqu","trainer","516501","2020-06-25 03:06:08","complete","2020-06-25 03:06:08");
INSERT INTO intelligent_users VALUES("12","27474414","Markus","ilaniu","ilanius@gmail.com","3457346yeuyquwiyeuiqw","student","904762","2020-06-26 08:06:48","complete","2020-06-26 08:06:48");
INSERT INTO intelligent_users VALUES("13","21321945","logical","gutman","gtman@man.com","34735476tqwyteyuqtwue","trainer","743976","2020-06-26 03:06:21","complete","2020-06-26 03:06:21");
INSERT INTO intelligent_users VALUES("14","13335254","viona","liona","liona@gmail.com","manirabona@gmail.com","student","178441","2020-06-26 07:06:33","complete","2020-06-26 07:06:33");
INSERT INTO intelligent_users VALUES("15","45314603","manirabona","walker","walkerman@gmail.com","manirabona@gmail.com","trainer","270619","2020-06-26 07:06:44","complete","2020-06-26 07:06:44");
INSERT INTO intelligent_users VALUES("16","97627050","manirabona","walkerman","man@gmail.com","manirabona@gmail.com","trainer","682674","2020-06-27 07:06:26","complete","2020-06-27 07:06:26");
INSERT INTO intelligent_users VALUES("17","66973135","Mudahemuka","Elineste","Ady@gmail.com","3246783ueyeuiywqiueyui","trainer","303476","2020-06-27 10:06:59","complete","2020-06-27 10:06:59");
INSERT INTO intelligent_users VALUES("18","96817023","Mayirani","Lolen","laila@gmail.com","456356721yetwqyetyuqw","trainer","228237","2020-06-28 09:06:40","complete","2020-06-28 09:06:40");
INSERT INTO intelligent_users VALUES("19","10796467","shoeless","joe","shoe@gmail.com","rtywetryuteyutwyetqyetqyteuqwteywq","trainer","198769","2020-06-29 07:06:36","complete","2020-06-29 07:06:36");
INSERT INTO intelligent_users VALUES("20","37443218","George","R stewart","stewart@gmail.com","manirabona@gmail.com","trainer","505029","2020-06-29 08:06:15","complete","2020-06-29 08:06:15");
INSERT INTO intelligent_users VALUES("21","21754044","Mike","Karima","Kalima@gmail.com","ewryteytrye46736437","trainer","815188","2020-06-29 09:06:54","complete","2020-06-29 09:06:54");
INSERT INTO intelligent_users VALUES("25","348d786749ee276673634bc3c91f8ae6364e85ce","Steven","Job","jona@gmail.com","manirabona@gmail.com","trainer","970327","2020-06-30 07:06:46","complete","2020-06-30 07:06:46");
INSERT INTO intelligent_users VALUES("26","7ca6d10402bdbd17491af29c31b79548be9a7185","Steven","Salton","Salton@gmail.com","36273627ueruieiw","trainer","761256","2020-06-30 09:06:22","complete","2020-06-30 09:06:22");
INSERT INTO intelligent_users VALUES("27","5065df63186b59cdc196ceab8cea6e0cbdf10be0","Melania","Gutman","Gutman@gmail.com","manirabona@gmail.com","trainer","823668","2020-06-30 02:06:41","complete","2020-06-30 02:06:41");
INSERT INTO intelligent_users VALUES("28","c69e17d744bb08b3a3418356c38c423e8e087653","Joe","Markus","Markus@gmail.com","3562536dshdahja","student","645252","2020-06-30 05:06:10","complete","2020-06-30 05:06:10");
INSERT INTO intelligent_users VALUES("29","1b4b27c04664eb67814a8b078079e1ad9b90b8e4","Didlos","shaker","shaker@gmail.com","manirabona@gmail.com","student","915028","2020-06-30 06:06:15","complete","2020-06-30 06:06:15");
INSERT INTO intelligent_users VALUES("30","bb10cb5c25c48f58aacc7452889c008842c9bff0","braise","mighty","mighty@gmail.com","dghdhasdghasgdhgashdgjhas","student","883961","2020-06-30 06:06:54","complete","2020-06-30 06:06:54");
INSERT INTO intelligent_users VALUES("31","c1751b0f660cd200ad1372ada397099a0d9363f9","Theleza","Marguito","mars@gmail.com","manirabona@gmail.com","trainer","492254","2020-06-30 06:06:45","complete","2020-06-30 06:06:45");
INSERT INTO intelligent_users VALUES("32","84fda2bf2930717f9b6e3eb41d492c44892dcaa9","Stewart","Florida","Flora@gmail.com","eretreytryuetyuwe","trainer","894255","2020-07-01 07:07:55","complete","2020-07-01 07:07:55");
INSERT INTO intelligent_users VALUES("33","9a0981bf75bf9c2a7c9394485a676b2fc38fc3d9","Williams","peacemaker","peacemaker@gmail.com","manirabona@gmail.com","trainer","930594","2020-07-01 08:07:52","complete","2020-07-01 08:07:52");
INSERT INTO intelligent_users VALUES("34","47865c21fd2136b73b03a7bf2acc548b45370cc8","Bill","Brain","Brain@gmail.com","ertqyetyqwetqwetyuqwte","trainer","871905","2020-07-01 12:07:40","complete","2020-07-01 12:07:40");
INSERT INTO intelligent_users VALUES("35","fbfe2d0e243d1c4a6562a7030939d1e11a510604","Robert","Stewart","Rstewart@gmail.com","sdfdhsgdsadkjswuquiey2738712","trainer","853543","2020-07-02 07:07:33","complete","2020-07-02 07:07:33");
INSERT INTO intelligent_users VALUES("36","1bd95f9576616a698f91fd1c14a9649649855a0e","Robert","Jeferson","jeferson@gmail.com","gwetyyqwtey","trainer","575087","2020-07-02 01:07:19","complete","2020-07-02 01:07:19");
INSERT INTO intelligent_users VALUES("38","aafbb5e9da0b37b160d8731d325825e340fc96c1","Radar","Chris","Chri250@gmail.com","fghsdgfhsd34673627","trainer","270818","2020-07-02 03:07:25","complete","2020-07-02 03:07:25");
INSERT INTO intelligent_users VALUES("39","3005413b1df1397a7b7892954c1ae0b7625de814","PAC","Laspardos","las@gmail.com","sdfasdghjasg326726378","student","253059","2020-07-02 06:07:17","complete","2020-07-02 06:07:17");
INSERT INTO intelligent_users VALUES("40","5918e5b46928b66d544d0b24f857f5fdcdb4bce3","Manirabona","Arlington","Arl@gmail.com","346732478yruiyeuyeuiw","student","440396","2020-07-03 06:07:25","complete","2020-07-03 06:07:25");
INSERT INTO intelligent_users VALUES("41","ba7ce9d4b222187086ecff4de89c9adefc7d9c04","erineste","Mudakesha","El2@gmail.com","manirabona@gmail.com","student","940884","2020-07-03 07:07:49","complete","2020-07-03 07:07:49");
INSERT INTO intelligent_users VALUES("42","0874a36e9b7b65eb00b01e699774193e8a42db26","Mukandagije","Announc","annous@gmail.com","sdghjklvghfgfgh","trainer","721692","online","complete","2020-07-03 08:07:04");
INSERT INTO intelligent_users VALUES("43","a2fc0cb1fc12e64458f18572ad54d989269566b7","George","Florida","Flo@gmail.com","drewrtywetrywe","student","671743","online","complete","2020-07-03 06:07:24");
INSERT INTO intelligent_users VALUES("44","257b40b8d2e244815e106e831f70264fc2c1fbe4","alan","walker","alan@gmail.com","manirabona@gmail.com","trainer","488095","offline","complete","2020-07-03 07:07:23");
INSERT INTO intelligent_users VALUES("45","73c1b34d48d25d26d82d30a4f3bf904ed7f121cc","magnom","lolen","main@gmail.com","dghghsahgg3662627","student","686976","2020-07-04 08:07:03","complete","2020-07-04 08:07:03");
INSERT INTO intelligent_users VALUES("46","2fd235be36756f72ff7c9986d9abbe7b073b9209","Henry","Danger","dangerman@gmail.com","manirabona@gmail.com","student","695747","2020-07-04 08:07:33","complete","2020-07-04 08:07:33");
INSERT INTO intelligent_users VALUES("47","5c64e95ec12f00e976ebdce92a9daf1956b15a9a","Chriss","Maric","Maric@gmail.com","463763yyuieyqwui","trainer","956817","2020-07-04 01:07:41","complete","2020-07-04 01:07:41");
INSERT INTO intelligent_users VALUES("48","ba0d95cd9b9a149018aac48cb3f45a8f47d42f30","eric","joshua","joe@gmail.com","djhgdhdgjhagdjhsagdjhs","student","183408","2020-07-04 01:07:32","complete","2020-07-04 01:07:32");
INSERT INTO intelligent_users VALUES("49","3d2cf206818ed4e2c865b2581267183bbffa146b","magic","lowest","lowest@gmail.com","4677eyuywueyuwq","trainer","561847","2020-07-04 04:07:46","complete","2020-07-04 04:07:46");
INSERT INTO intelligent_users VALUES("50","cd963c7734e459778bde8cea10433a70671d44d4","rider","smoker","smoker@gmail.com","manirabona@gmail.com","student","597719","2020-07-05 12:07:21","complete","2020-07-05 12:07:21");
INSERT INTO intelligent_users VALUES("51","d9d291f06695e718e1df54c64ce4ca526dec8034","load","sunday","sunday@gmail.com","wtetqwute37678216372","student","234340","2020-07-05 01:07:13","complete","2020-07-05 01:07:13");
INSERT INTO intelligent_users VALUES("52","79ebfa2eb566e930a8e21fece7a2b02bd8f62ff6","Roben","Hood","hood@gmail.com","dahghjagdjhasgdjhsagdjhas","student","412328","2020-07-07 12:07:02","complete","2020-07-07 12:07:02");
INSERT INTO intelligent_users VALUES("56","2c185fe8dc1e7e12de78b4aa4e743a1d8172f1c5","molin","magathalen","meg@gmail.com","6d540fa994ddbd766fea4789b628fa3a9933ef2b","trainer","411688","2020-07-08 09:07:39","Admin","2020-07-08 09:07:39");
INSERT INTO intelligent_users VALUES("57","9b5f4c73ccc8d466db1e74e0598421d7bcc1ad7d","Quavo","huncho","huncho@gmail.com","dgagdjhgjshgdhas32678637812","student","965625","2020-07-08 06:07:36","complete","2020-07-08 06:07:36");
INSERT INTO intelligent_users VALUES("58","9f0e8872d688a071bfeb0bec76b8de94e984e065","Sia","jackson","sia@gmail.com","dsfhdgjhasgdhjs3264721637","student","310669","2020-07-09 11:07:55","complete","2020-07-09 11:07:55");
INSERT INTO intelligent_users VALUES("59","0653277b4a30920a1ac48993972024c837e3d09a","Storm","Walker","Storm@gmail.com","manirabona@gmail.com","student","919158","2020-07-10 08:07:27","complete","2020-07-10 08:07:27");
INSERT INTO intelligent_users VALUES("60","4ee02772e915bfd7db3de387567bbbf64c1d66d5","Losvert","Laloen","laloen@gmail.com","gahdghsgjh1263216728","student","702930","2020-07-10 08:07:28","complete","2020-07-10 08:07:28");
INSERT INTO intelligent_users VALUES("61","d7f58783847a43bb3cec4fc3002b2d9020284813","Liliane","greek","Greek@gmail.com","ghdghkKWKUIUIQUIJDJ","student","667481","2020-07-11 04:07:37","complete","2020-07-11 04:07:37");
INSERT INTO intelligent_users VALUES("62","8fbb08ef7ad1fad6345beda36ba26ade06c0f20c","gillon","hillo","hillo@gmail.com","ywyetytetuqytwwe","student","723280","2020-07-11 04:07:08","complete","2020-07-11 04:07:08");
INSERT INTO intelligent_users VALUES("63","cfdb606f4d38da6ec017401508315fe7515b221e","galaxy","gelian","gelian@gmail.com","dghdgshdgashgdhjasgdhgasjdhgas","student","245000","offline","complete","2020-07-11 04:07:23");
INSERT INTO intelligent_users VALUES("64","e90d432227850c2c3777908a4ec120d435743a6b","Gregory","Kenny rogers","rogers@gmail.com","dghdghsajd32uy76721","trainer","799121","2020-07-13 03:07:58","complete","2020-07-13 03:07:58");
INSERT INTO intelligent_users VALUES("65","b69e34bc4fc5216d4e1627704cee06686471703e","Madrid","Gueutus","gue@gmail.com","356tuyetqwytewq","trainer","856818","2020-07-13 04:07:19","complete","2020-07-13 04:07:19");
INSERT INTO intelligent_users VALUES("66","ceffc8775ac9c4e3e0e7337fb6f7773f279df805","Kenny","Morgan sia","morg@gmail.com","u346763742euyqwudh","student","891191","2020-07-13 08:07:40","complete","2020-07-13 08:07:40");
INSERT INTO intelligent_users VALUES("67","2201db17bb0d52cfd67a68e97b1e97ef5dcf1a1e","Lalonin","leina kesh","kesh@gmailc.om","dhshdgshajheuyue","student","386276","2020-07-14 04:07:10","complete","2020-07-14 04:07:10");
INSERT INTO intelligent_users VALUES("69","e2563be535f98baf86d08f93696da7f71b7733b0","Ancle","Austin","aurstin250@gmail.com","45631762wqeyui","student","912520","2020-07-15 05:07:17","complete","2020-07-15 05:07:17");
INSERT INTO intelligent_users VALUES("70","4b5c7227883a6520f0984f2c491e53548a41b756","Core","Megany","jennifer@gmail.com","emyfghalsmj","student","710050","offline","complete","2020-07-16 07:07:56");
INSERT INTO intelligent_users VALUES("71","a0f642c3df385f33fae56e6bd6f46a32c590554d","Laerder","Milolinos","minlaender@gmal.com","3265623ywtyutwq","student","235265","2020-07-16 04:07:28","complete","2020-07-16 04:07:28");
INSERT INTO intelligent_users VALUES("73","d4c2b1df22784ceb950d8a52ce16848721d6a41d","greyground","lilan","lilan@gmail.com","manirabona@gmail.com","student","489431","offline","complete","2020-07-17 12:07:43");
INSERT INTO intelligent_users VALUES("74","33bfeed8096b0705680c2ba3650cbcaff6cf901d","Puelto","guiany","quire@gmail.com","46345365ywgeyweuqwy","student","363003","2020-07-18 01:07:34","complete","2020-07-18 01:07:34");
INSERT INTO intelligent_users VALUES("75","710ac3ac27cf699fa5d647bb962f136452c47ce4","lasvelonic","grequary","grequary@gmail.com","346532635ywtqtwqy","student","733837","2020-07-18 04:07:51","complete","2020-07-18 04:07:51");
INSERT INTO intelligent_users VALUES("76","37e295eaf8114b09d0eaa26116a5092ace6f7aa1","george","Lewis","Lewis@gmail.com","46738378euweuqui","student","496641","offline","complete","2020-07-19 08:07:30");
INSERT INTO intelligent_users VALUES("77","a74a6d7732044576eac7b4684bd38a1463381fa9","lewis","stardford","stard@gmail.com","6356278718yquywuey","student","130894","2020-07-19 11:07:19","complete","2020-07-19 11:07:19");
INSERT INTO intelligent_users VALUES("78","364acc7399eba2e37cca765d79ee444bca2515c1","Legaxy","Mark lous","lousM@gmailc.om","64723uywuqiyeuyuqw","student","921478","offline","complete","2020-07-20 08:07:47");
INSERT INTO intelligent_users VALUES("80","420157b5529bec6ac75f0eaf9d9422501ac99176","Anabell","lolin grey","greyMark@gmail.com","manirabona@gmail.com","trainer","543304","2020-07-20 11:07:59","complete","2020-07-20 11:07:59");



CREATE TABLE `interest_art_culture` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `interest_items` varchar(100) NOT NULL,
  `rank` varchar(250) NOT NULL,
  `js_location` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO interest_art_culture VALUES("1","Photography","0","culture");



CREATE TABLE `interest_music` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `interest_items` varchar(200) NOT NULL,
  `rank` varchar(250) NOT NULL,
  `js_location` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO interest_music VALUES("1","Country","0","music");



CREATE TABLE `interest_news` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `interest_items` varchar(100) NOT NULL,
  `rank` varchar(250) NOT NULL,
  `js_location` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO interest_news VALUES("1","Intertainment","0","news");



CREATE TABLE `interest_religion` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `interest_items` varchar(40) NOT NULL,
  `rank` varchar(250) NOT NULL,
  `js_location` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO interest_religion VALUES("1","Christian","0","religion");



CREATE TABLE `interest_sport` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `interest_items` varchar(30) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `js_location` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO interest_sport VALUES("1","basketball","0","sport");
INSERT INTO interest_sport VALUES("2","soccer","0","sport");



CREATE TABLE `messages` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `sender_email` varchar(250) NOT NULL,
  `reciever_email` varchar(250) NOT NULL,
  `message` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT 'message between users',
  `message_read` varchar(10) NOT NULL,
  `message_visibility` varchar(10) NOT NULL,
  `message_display` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO messages VALUES("1","Kalima@gmail.com","stewart@gmail.com","You can teach a student a lesson for a day","1","earlier","on","2020-06-29 11:42:39");
INSERT INTO messages VALUES("2","Kalima@gmail.com","stewart@gmail.com","A teacher affects eternity;","1","earlier","on","2020-06-29 11:44:04");
INSERT INTO messages VALUES("3","morg@gmail.com","<","the main reason why we are here","0","new","on","2020-07-14 06:07:14");
INSERT INTO messages VALUES("7","morg@gmail.com","hseal419@gmail.com, Antimatter@gmail.com, ","the main","0","new","on","2020-07-14 06:07:08");
INSERT INTO messages VALUES("15","morg@gmail.com","hseal419@gmail.com","The array functions are part of the PHP core. There is no installation needed to use these functions.","0","new","on","2020-07-14 08:07:07");
INSERT INTO messages VALUES("16","morg@gmail.com","Antimatter@gmail.com","there we go","0","new","on","2020-07-15 08:07:24");
INSERT INTO messages VALUES("17","morg@gmail.com","hseal419@gmail.com","the nailo gate","0","new","on","2020-07-15 10:07:48");
INSERT INTO messages VALUES("18","morg@gmail.com","hseal419@gmail.com","the megan","0","new","on","2020-07-15 10:07:07");
INSERT INTO messages VALUES("19","morg@gmail.com","hseal419@gmail.com","the mariol","0","new","on","2020-07-15 10:07:14");
INSERT INTO messages VALUES("20","morg@gmail.com","hseal419@gmail.com","the mainal","0","new","on","2020-07-15 10:07:58");
INSERT INTO messages VALUES("21","morg@gmail.com","hseal419@gmail.com","the main","0","new","on","2020-07-15 11:07:32");



CREATE TABLE `more_account_info` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `School` varchar(250) NOT NULL,
  `Department` varchar(250) NOT NULL,
  `level` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `location_visible` varchar(250) DEFAULT NULL,
  `date_of_birth` varchar(250) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO more_account_info VALUES("1","lucky@gmail.com","World mission school","software development","five","+250780289432","kigali/rwanda","","10/20/2020","male","21/06/2020");
INSERT INTO more_account_info VALUES("2","Antimatter@gmail.com","World Mission school","software development","five","+250780289432","Kampala/Uganda","","25/04/2000","male","23/06/2020");
INSERT INTO more_account_info VALUES("3","Mark@gmail.com","Laina greak","Software Development","Five","+250783788373","kigali,Rwanda","","24/04/1998","male","24/06/2020");
INSERT INTO more_account_info VALUES("4","fgfhg@gmailc.com","World","Software Development","Five","+250080289432","kigali,Rwanda","","10/29/2020","Female","25/06/2020");
INSERT INTO more_account_info VALUES("5","las@gmail.com","World mission tvet schools","Software Development","Four","+25078092435","Kigali, Rwanda","","24-02-2020","male","2020-07-02 07:07:17");
INSERT INTO more_account_info VALUES("6","Arl@gmail.com","World mission School","","Five","+250783926584","Kigali, Rwanda","","24/04/2000","male","2020-07-03 06:07:20");
INSERT INTO more_account_info VALUES("7","El2@gmail.com","World mission school","","Five","00000000000000","kigali, Rwanda","","24/05/2000","male","2020-07-03 07:07:41");
INSERT INTO more_account_info VALUES("8","jennifer@gmail.com","World mission school","software development","5","0486362884","kigali/Rwanda","disabled","24/04/2000","Male","2020-07-16 08:07:34");
INSERT INTO more_account_info VALUES("9","lousM@gmailc.om","kabare high school","software development","Four","0987654321","kigali, rwanda","Enabled","04/04/2000","male","2020-07-20 10:07:29");



CREATE TABLE `notification_settings` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `badge` varchar(30) NOT NULL,
  `follow_board` varchar(30) NOT NULL,
  `like_comment` varchar(30) NOT NULL,
  `posts` varchar(30) NOT NULL,
  `noti_email` varchar(30) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO notification_settings VALUES("1","jennifer@gmail.com","Badge_on","On","Badge_off","Badge_off","Badge_off","2020-07-16 11:07:51");
INSERT INTO notification_settings VALUES("2","minlaender@gmal.com","Badge_on","Off","Off","Off","Off","2020-07-16 04:07:29");
INSERT INTO notification_settings VALUES("3","grey@gmail.com","Badge_on","Off","Off","Off","Off","2020-07-17 12:07:11");
INSERT INTO notification_settings VALUES("4","lilan@gmail.com","Badge_on","Off","Off","Off","Off","2020-07-17 12:07:43");
INSERT INTO notification_settings VALUES("5","quire@gmail.com","Badge_on","Off","Off","Off","Off","2020-07-18 01:07:34");
INSERT INTO notification_settings VALUES("6","grequary@gmail.com","Badge_on","Off","Off","Off","Off","2020-07-18 04:07:52");
INSERT INTO notification_settings VALUES("7","Lewis@gmail.com","Badge_on","Off","Off","Off","Off","2020-07-19 08:07:30");
INSERT INTO notification_settings VALUES("8","stard@gmail.com","Badge_on","Off","Off","Off","Off","2020-07-19 11:07:20");
INSERT INTO notification_settings VALUES("9","lousM@gmailc.om","Badge_on","Off","Off","Off","Off","2020-07-20 08:07:48");
INSERT INTO notification_settings VALUES("10","ton@gmail.com","Badge_on","Off","Off","Off","Off","2020-07-20 11:07:02");
INSERT INTO notification_settings VALUES("11","greyMark@gmail.com","Badge_on","Off","Off","Off","Off","2020-07-20 11:07:59");



CREATE TABLE `notifications` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `notification_from_email` varchar(250) NOT NULL,
  `notification_to_email` varchar(250) NOT NULL,
  `notification` varchar(250) NOT NULL,
  `notification_type` varchar(250) NOT NULL,
  `notification_read_status` varchar(250) NOT NULL,
  `notification_visibility` varchar(250) NOT NULL,
  `notification_quite` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO notifications VALUES("1","95dce31fb595e6aa8a203affbd3e4c381d1bfa6a","bd3ec1b965c88c7d14afac7335feb3f0fde1fff5","Core Ellimination Send challenge request","challenge_request","0","new","on","2020-07-04 04:07:26");
INSERT INTO notifications VALUES("2","joe@gmail.com","hseal419@gmail.com","eric joshua invite you to join group","invitation","0","new","on","2020-07-04 04:07:10");
INSERT INTO notifications VALUES("6","95dce31fb595e6aa8a203affbd3e4c381d1bfa6a","32aa24c2e993aebfc077bf0b19e128e8a725d5aa","Core Ellimination Send challenge request","challenge_request","0","new","on","2020-07-04 06:07:38");
INSERT INTO notifications VALUES("8","9e65097b6fc6a446c921c95cd0b931179870852b","c7649ec6b45b5197e0a9be0e7f3691091a9582b6","Buddhism live reject your group challenge","rejection","0","new","on","2020-07-16 07:07:39");
INSERT INTO notifications VALUES("9","c7649ec6b45b5197e0a9be0e7f3691091a9582b6","9e65097b6fc6a446c921c95cd0b931179870852b","Buddhism live Accepted group challenge","accepted","0","new","on","2020-07-16 07:07:55");
INSERT INTO notifications VALUES("10","c7649ec6b45b5197e0a9be0e7f3691091a9582b6","9e65097b6fc6a446c921c95cd0b931179870852b","Buddhism live Accepted group challenge","accepted","0","new","on","2020-07-16 07:07:17");



CREATE TABLE `school_storage` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(250) NOT NULL,
  `school_location` varchar(250) NOT NULL,
  `schhol_master` varchar(250) NOT NULL,
  `school_member_count` varchar(250) NOT NULL,
  `school_department_count` varchar(250) NOT NULL,
  `school_trainer_count` varchar(250) NOT NULL,
  `school_logo_image` varchar(250) NOT NULL,
  `school_master_image` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `shared_contents` (
  `identity` int(240) NOT NULL AUTO_INCREMENT,
  `user_email_from` varchar(250) CHARACTER SET latin1 NOT NULL,
  `user_email_to` varchar(250) CHARACTER SET latin1 NOT NULL,
  `file_shared` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `file_type` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `caption` varchar(250) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_on` varchar(250) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='Shared stuff between members  ';

INSERT INTO shared_contents VALUES("1","jennifer@gmail.com","hseal419@gmail.com","IB_shared_file1594978710Box--islam.pdf","pdf","none","2020-07-17 11:07:30");
INSERT INTO shared_contents VALUES("2","lilan@gmail.com","jennifer@gmail.com","Slides21.pdf","pdf","none","2020-07-17 12:07:31");
INSERT INTO shared_contents VALUES("3","Lewis@gmail.com","hseal419@gmail.com","Slides21.pdf","pdf","none","2020-07-19 09:07:42");



CREATE TABLE `trainer_class` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `department_identity` int(250) NOT NULL,
  `user_identity` varchar(250) NOT NULL,
  `class_url` varchar(250) NOT NULL,
  `class_name` varchar(250) NOT NULL,
  `class_profile_image` varchar(250) NOT NULL,
  `class_desc` varchar(250) NOT NULL,
  `Live` varchar(10) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO trainer_class VALUES("1","1","0","","Intelligent_class","intelligent box_brand.png","Intelligent class that default assigned to every users who already create account","on","2020-07-02 07:23:00");
INSERT INTO trainer_class VALUES("3","1","32","","Computer literacy","IB_class_img1593583056Box--binoculars-looking-at-ocean.png","Much education today is monumentally ineffective. All too often we are giving young people cut flowers when we should be teaching them to grow their own plants.","on","2020-07-01 07:07:36");
INSERT INTO trainer_class VALUES("4","1","35","","Computer Managment","IB_class_img1593670898Box--working-at-night.jpg","The aim of education should be to teach us rather how to think, than what to think — rather to improve our minds, so as to enable us to think for ourselves, than to load the memory with thoughts of other men.","on","2020-07-02 08:07:38");
INSERT INTO trainer_class VALUES("5","0","33","","Make Peace","IB_class_img1593686752Box--6886467_preview.png","The aim of education should be to teach us rather how to think, than what to think — rather to improve our minds, so as to enable us to think for ourselves, than to load the memory with thoughts of other men.","on","2020-07-02 12:07:52");
INSERT INTO trainer_class VALUES("6","2","36","","La !hola","IB_class_img1593688012Box--10473.jpg","The best teachers are those who show you where to look but don’t tell you what to see.","on","2020-07-02 01:07:52");
INSERT INTO trainer_class VALUES("7","2","38","Elimination-3283@users.class","Elimination","IB_class_img1593697534Box--taking-notes-and-working-on-laptop.jpg","Treat people as if they were what they ought to be, and you help them to become what they are capable of becoming.","on","2020-07-02 03:07:34");
INSERT INTO trainer_class VALUES("8","2","42","fdf651eb585e931106160675bc7b90a4ad186dc1","mechanics","IB_class_img1593757759Box--coffee-and-working - Copy.jpg","Do not train children to learning by force and harshness, but direct them to it by what amuses their minds, so that you may be better able to discover with accuracy the peculiar bent of the genius of each.","on","2020-07-03 08:07:19");
INSERT INTO trainer_class VALUES("9","2","65","22077e80ba1fffeac5a5f501e02634140c3fd11d","Networking","IB_class_img1594661958Box--sacha-styles-cLYotY2zfrs-unsplash.jpg","no network found in space","on","2020-07-13 07:07:18");
INSERT INTO trainer_class VALUES("10","2","80","756ecf5befcd5eff7bc8577721b332758c21f930","Biomedical inst","IB_class_img1595244317Box--troy-bridges-SuzmwVqHJdo-unsplash.jpg","we will build new bio live according to human kind and human heritage","on","2020-07-20 01:07:17");



CREATE TABLE `user_answer` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` int(250) NOT NULL,
  `question_identity` varchar(250) NOT NULL,
  `answer` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO user_answer VALUES("1","33","2","get this machine and get you f*ck header out of here","2020-07-01 12:07:31");
INSERT INTO user_answer VALUES("2","33","2","but this may corrupt","2020-07-01 01:07:49");
INSERT INTO user_answer VALUES("3","35","1","be course society recommend us to be our self not them-self ","2020-07-02 11:07:40");
INSERT INTO user_answer VALUES("4","66","2","the right way","2020-07-15 01:07:28");
INSERT INTO user_answer VALUES("5","66","2","the robert","2020-07-15 01:07:33");



CREATE TABLE `user_auto_detection` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `location` varchar(250) DEFAULT NULL,
  `type_of_browser` varchar(250) DEFAULT NULL,
  `ip_address` varchar(250) DEFAULT NULL,
  `operating_system` varchar(250) DEFAULT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

INSERT INTO user_auto_detection VALUES("1","Manirabona","walker","hseal419@gmail.com","","Netscape","::1","Win32","2020-06-23 10:06:47");
INSERT INTO user_auto_detection VALUES("2","Muganwa","Antimatter","Antimatter@gmail.com","","Netscape","::1","Win32","2020-06-23 11:06:16");
INSERT INTO user_auto_detection VALUES("3","Mark","Lainkan","Mark@gmail.com","","Netscape","::1","Win32","2020-06-24 11:06:04");
INSERT INTO user_auto_detection VALUES("4","erttyery","zdghsgdh","fgfhg@gmailc.com","","Netscape","::1","Win32","2020-06-25 08:06:05");
INSERT INTO user_auto_detection VALUES("5","typical","Lastname","eretytey@gmai.ocm","","Netscape","::1","Win32","2020-06-25 10:06:29");
INSERT INTO user_auto_detection VALUES("6","Rick","Warren","Warren@gmail.com","","Netscape","::1","Win32","2020-06-25 12:06:22");
INSERT INTO user_auto_detection VALUES("7","Fenty","Feinty","feinty@gmail.com","","Netscape","::1","Win32","2020-06-25 01:06:42");
INSERT INTO user_auto_detection VALUES("8","rubagumya","remy","rubaremy5@gmail.com","","Netscape","::1","Win32","2020-06-25 01:06:57");
INSERT INTO user_auto_detection VALUES("9","billiand","lolen","lolen@gmail.com","","Netscape","::1","Win32","2020-06-25 03:06:09");
INSERT INTO user_auto_detection VALUES("10","manirabona","aliene","aliene@gmail.com","","Netscape","","Win32","2020-06-26 08:06:47");
INSERT INTO user_auto_detection VALUES("11","Manirabona","Claudius","mcluadius@gmail.com","","Netscape","","Win32","2020-06-26 08:06:07");
INSERT INTO user_auto_detection VALUES("12","Markus","ilaniu","ilanius@gmail.com","","Netscape","::1","Win32","2020-06-26 08:06:48");
INSERT INTO user_auto_detection VALUES("13","logical","gutman","gtman@man.com","","Netscape","::1","Win32","2020-06-26 03:06:22");
INSERT INTO user_auto_detection VALUES("14","viona","liona","liona@gmail.com","","Netscape","::1","Win32","2020-06-26 07:06:33");
INSERT INTO user_auto_detection VALUES("15","manirabona","walker","walkerman@gmail.com","","Netscape","::1","Win32","2020-06-26 07:06:44");
INSERT INTO user_auto_detection VALUES("16","manirabona","walkerman","man@gmail.com","","Netscape","::1","Win32","2020-06-27 07:06:26");
INSERT INTO user_auto_detection VALUES("17","Mudahemuka","Elineste","Ady@gmail.com","","Netscape","::1","Win32","2020-06-27 10:06:00");
INSERT INTO user_auto_detection VALUES("18","Mayirani","Lolen","laila@gmail.com","","Netscape","::1","Win32","2020-06-28 09:06:41");
INSERT INTO user_auto_detection VALUES("19","shoeless","joe","shoe@gmail.com","","Netscape","::1","Win32","2020-06-29 07:06:36");
INSERT INTO user_auto_detection VALUES("20","George","R stewart","stewart@gmail.com","","Netscape","::1","Win32","2020-06-29 08:06:15");
INSERT INTO user_auto_detection VALUES("21","Mike","Karima","Kalima@gmail.com","","Netscape","::1","Win32","2020-06-29 09:06:55");
INSERT INTO user_auto_detection VALUES("22","Steven","Job","Steven@gmail.com","","Netscape","::1","Win32","2020-06-30 07:06:34");
INSERT INTO user_auto_detection VALUES("23","Steven","Stalon","stalon@gmail.com","","Netscape","","Win32","2020-06-30 07:06:05");
INSERT INTO user_auto_detection VALUES("24","Dan","Morrison","Marroson@gmail.com","","Netscape","","Win32","2020-06-30 07:06:53");
INSERT INTO user_auto_detection VALUES("25","Steven","Job","jona@gmail.com","","Netscape","::1","Win32","2020-06-30 07:06:46");
INSERT INTO user_auto_detection VALUES("26","Steven","Salton","Salton@gmail.com","","Netscape","::1","Win32","2020-06-30 09:06:22");
INSERT INTO user_auto_detection VALUES("27","Melania","Gutman","Gutman@gmail.com","","Netscape","::1","Win32","2020-06-30 02:06:42");
INSERT INTO user_auto_detection VALUES("28","Joe","Markus","Markus@gmail.com","","Netscape","::1","Win32","2020-06-30 05:06:11");
INSERT INTO user_auto_detection VALUES("29","Didlos","shaker","shaker@gmail.com","","Netscape","::1","Win32","2020-06-30 06:06:16");
INSERT INTO user_auto_detection VALUES("30","braise","mighty","mighty@gmail.com","","Netscape","::1","Win32","2020-06-30 06:06:55");
INSERT INTO user_auto_detection VALUES("31","Theleza","Marguito","mars@gmail.com","","Netscape","::1","Win32","2020-06-30 06:06:45");
INSERT INTO user_auto_detection VALUES("32","Stewart","Florida","Flora@gmail.com","","Netscape","::1","Win32","2020-07-01 07:07:55");
INSERT INTO user_auto_detection VALUES("33","Williams","peacemaker","peacemaker@gmail.com","","Netscape","::1","Win32","2020-07-01 08:07:53");
INSERT INTO user_auto_detection VALUES("34","Bill","Brain","Brain@gmail.com","","Netscape","::1","Win32","2020-07-01 12:07:41");
INSERT INTO user_auto_detection VALUES("35","Robert","Stewart","Rstewart@gmail.com","","Netscape","::1","Win32","2020-07-02 07:07:33");
INSERT INTO user_auto_detection VALUES("36","Robert","Jeferson","jeferson@gmail.com","","Netscape","::1","Win32","2020-07-02 01:07:19");
INSERT INTO user_auto_detection VALUES("37","Rudahigwa","musinga","musinga@gmail.com","","Netscape","","Win32","2020-07-02 03:07:17");
INSERT INTO user_auto_detection VALUES("38","Radar","Chris","Chri250@gmail.com","","Netscape","::1","Win32","2020-07-02 03:07:25");
INSERT INTO user_auto_detection VALUES("39","PAC","Laspardos","las@gmail.com","","Netscape","::1","Win32","2020-07-02 06:07:17");
INSERT INTO user_auto_detection VALUES("40","Manirabona","Arlington","Arl@gmail.com","","Netscape","::1","Win32","2020-07-03 06:07:25");
INSERT INTO user_auto_detection VALUES("41","erineste","Mudakesha","El2@gmail.com","","Netscape","::1","Win32","2020-07-03 07:07:50");
INSERT INTO user_auto_detection VALUES("42","Mukandagije","Announc","annous@gmail.com","","Netscape","::1","Win32","2020-07-03 08:07:04");
INSERT INTO user_auto_detection VALUES("43","George","Florida","Flo@gmail.com","","Netscape","::1","Win32","2020-07-03 06:07:24");
INSERT INTO user_auto_detection VALUES("44","alan","walker","alan@gmail.com","","Netscape","::1","Win32","2020-07-03 07:07:24");
INSERT INTO user_auto_detection VALUES("45","magnom","lolen","main@gmail.com","","Netscape","::1","Win32","2020-07-04 08:07:03");
INSERT INTO user_auto_detection VALUES("46","Henry","Danger","dangerman@gmail.com","","Netscape","::1","Win32","2020-07-04 08:07:33");
INSERT INTO user_auto_detection VALUES("47","Chriss","Maric","Maric@gmail.com","","Netscape","::1","Win32","2020-07-04 01:07:42");
INSERT INTO user_auto_detection VALUES("48","eric","joshua","joe@gmail.com","","Netscape","::1","Win32","2020-07-04 01:07:32");
INSERT INTO user_auto_detection VALUES("49","magic","lowest","lowest@gmail.com","","Netscape","::1","Win32","2020-07-04 04:07:46");
INSERT INTO user_auto_detection VALUES("50","rider","smoker","smoker@gmail.com","","Netscape","::1","Win32","2020-07-05 12:07:21");
INSERT INTO user_auto_detection VALUES("51","load","sunday","sunday@gmail.com","","Netscape","::1","Win32","2020-07-05 01:07:13");
INSERT INTO user_auto_detection VALUES("52","Roben","Hood","hood@gmail.com","","Netscape","::1","Win32","2020-07-07 12:07:02");
INSERT INTO user_auto_detection VALUES("53","Quavo","huncho","huncho@gmail.com","","Netscape","::1","Win32","2020-07-08 06:07:36");
INSERT INTO user_auto_detection VALUES("54","Sia","jackson","sia@gmail.com","","Netscape","::1","Win32","2020-07-09 11:07:56");
INSERT INTO user_auto_detection VALUES("55","Storm","Walker","Storm@gmail.com","","Netscape","::1","Win32","2020-07-10 08:07:28");
INSERT INTO user_auto_detection VALUES("56","Losvert","Laloen","laloen@gmail.com","","Netscape","::1","Win32","2020-07-10 08:07:29");
INSERT INTO user_auto_detection VALUES("57","Liliane","greek","Greek@gmail.com","","Netscape","::1","Win32","2020-07-11 04:07:37");
INSERT INTO user_auto_detection VALUES("58","gillon","hillo","hillo@gmail.com","","Netscape","::1","Win32","2020-07-11 04:07:08");
INSERT INTO user_auto_detection VALUES("59","galaxy","gelian","gelian@gmail.com","","Netscape","::1","Win32","2020-07-11 04:07:23");
INSERT INTO user_auto_detection VALUES("60","Gregory","Kenny rogers","rogers@gmail.com","","Netscape","::1","Win32","2020-07-13 03:07:59");
INSERT INTO user_auto_detection VALUES("61","Madrid","Gueutus","gue@gmail.com","","Netscape","::1","Win32","2020-07-13 04:07:20");
INSERT INTO user_auto_detection VALUES("62","Kenny","Morgan sia","morg@gmail.com","","Netscape","::1","Win32","2020-07-13 08:07:40");
INSERT INTO user_auto_detection VALUES("63","Lalonin","leina kesh","kesh@gmailc.om","","Netscape","::1","Win32","2020-07-14 04:07:11");
INSERT INTO user_auto_detection VALUES("64","","Game","Game@gmail.com","","Netscape","","Win32","2020-07-14 07:07:53");
INSERT INTO user_auto_detection VALUES("65","Ancle","Austin","aurstin250@gmail.com","","Netscape","::1","Win32","2020-07-15 05:07:17");
INSERT INTO user_auto_detection VALUES("66","Rider","Jennifer","jennifer@gmail.com","","Netscape","::1","Win32","2020-07-16 07:07:57");
INSERT INTO user_auto_detection VALUES("67","Laerder","Milolinos","minlaender@gmal.com","","Netscape","::1","Win32","2020-07-16 04:07:28");
INSERT INTO user_auto_detection VALUES("68","greyground","lilan","lilan@gmail.com","","Netscape","::1","Win32","2020-07-17 12:07:43");
INSERT INTO user_auto_detection VALUES("69","Puelto","guiany","quire@gmail.com","","Netscape","::1","Win32","2020-07-18 01:07:34");
INSERT INTO user_auto_detection VALUES("70","lasvelonic","grequary","grequary@gmail.com","","Netscape","::1","Win32","2020-07-18 04:07:51");
INSERT INTO user_auto_detection VALUES("71","george","Lewis","Lewis@gmail.com","","Netscape","::1","Win32","2020-07-19 08:07:30");
INSERT INTO user_auto_detection VALUES("72","lewis","stardford","stard@gmail.com","","Netscape","::1","Win32","2020-07-19 11:07:20");
INSERT INTO user_auto_detection VALUES("73","Legaxy","Mark lous","lousM@gmailc.om","","Netscape","::1","Win32","2020-07-20 08:07:48");
INSERT INTO user_auto_detection VALUES("74","","washington","ton@gmail.com","","Netscape","","Win32","2020-07-20 11:07:02");
INSERT INTO user_auto_detection VALUES("75","Anabell","lolin grey","greyMark@gmail.com","","Netscape","::1","Win32","2020-07-20 11:07:59");



CREATE TABLE `user_bio` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` int(250) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `bio` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `bio_status` varchar(250) NOT NULL,
  `create_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

INSERT INTO user_bio VALUES("21","92","manirabona","pmanirabona@gmail.com","the negative effect","off","20/06/2020");
INSERT INTO user_bio VALUES("22","92","manirabona","pmanirabona@gmail.com","The more we sticky around the more we learn more","off","20/06/2020");
INSERT INTO user_bio VALUES("23","92","manirabona","pmanirabona@gmail.com","to be","off","20/06/2020");
INSERT INTO user_bio VALUES("24","92","manirabona","pmanirabona@gmail.com","to get","off","20/06/2020");
INSERT INTO user_bio VALUES("25","92","manirabona","pmanirabona@gmail.com","the more we got","off","20/06/2020");
INSERT INTO user_bio VALUES("26","92","manirabona","pmanirabona@gmail.com","“We learn more by looking for the answer to a question and not finding it than we do from learning the answer itself.”","on","20/06/2020");
INSERT INTO user_bio VALUES("27","93","damaseni","louis@gmail.com","selvant is not in mind , is in habital","on","20/06/2020");
INSERT INTO user_bio VALUES("28","3","Mark","Mark@gmail.com","We can easily manage if we will only take, each day, the burden appointed to it. But the load will be too heavy for us if we carry yesterday’s burden over again today, and then add the burden of the morrow before we are required to bear it.","on","24/06/2020");
INSERT INTO user_bio VALUES("29","26","Steven","Salton@gmail.com","I will discuss a popular strategy that developers could integrate within their projects.","on","30/06/2020");
INSERT INTO user_bio VALUES("30","66","Kenny","morg@gmail.com","the main reason we wake up every morning is that we get another chance to work ","on","15/07/2020");
INSERT INTO user_bio VALUES("31","70","Core","jennifer@gmail.com","","off","16/07/2020");
INSERT INTO user_bio VALUES("32","70","Core","jennifer@gmail.com","","off","16/07/2020");
INSERT INTO user_bio VALUES("33","70","Core","jennifer@gmail.com","","off","16/07/2020");
INSERT INTO user_bio VALUES("34","70","Core","jennifer@gmail.com","","off","16/07/2020");
INSERT INTO user_bio VALUES("35","70","Core","jennifer@gmail.com","","off","16/07/2020");
INSERT INTO user_bio VALUES("36","70","Core","jennifer@gmail.com","","off","16/07/2020");
INSERT INTO user_bio VALUES("37","70","Core","jennifer@gmail.com","","off","16/07/2020");
INSERT INTO user_bio VALUES("38","70","Core","jennifer@gmail.com","","off","16/07/2020");
INSERT INTO user_bio VALUES("39","70","Core","jennifer@gmail.com","","off","16/07/2020");
INSERT INTO user_bio VALUES("40","70","Core","jennifer@gmail.com","","off","16/07/2020");
INSERT INTO user_bio VALUES("41","70","Core","jennifer@gmail.com","","off","16/07/2020");
INSERT INTO user_bio VALUES("42","70","Core","jennifer@gmail.com","","on","16/07/2020");
INSERT INTO user_bio VALUES("43","80","Anabell","greyMark@gmail.com","we thought we were more than we thought","on","20/07/2020");



CREATE TABLE `user_challenge` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `challenge_url` varchar(250) NOT NULL,
  `host_user_identity` varchar(250) NOT NULL,
  `defender_user_identity` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO user_challenge VALUES("1","3472734c04883930d3dc7fc3b553df887c1bb4de","95dce31fb595e6aa8a203affbd3e4c381d1bfa6a","32aa24c2e993aebfc077bf0b19e128e8a725d5aa","2020-07-04 07:07:12");
INSERT INTO user_challenge VALUES("2","075c883cf3cff53aa661ce3c8f0661fdb2296f27","c7649ec6b45b5197e0a9be0e7f3691091a9582b6","9e65097b6fc6a446c921c95cd0b931179870852b","2020-07-16 04:07:49");



CREATE TABLE `user_challenge_comment` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `post_identity` varchar(250) NOT NULL,
  `comment` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `comment_read` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO user_challenge_comment VALUES("1","49","lowest@gmail.com","1","this is fantastic","0","2020-07-05 09:20:51");
INSERT INTO user_challenge_comment VALUES("2","49","lowest@gmail.com","1","this is fantstic","0","2020-07-05 09:21:29");
INSERT INTO user_challenge_comment VALUES("3","70","jennifer@gmail.com","2","get there","0","2020-07-16 06:25:11");
INSERT INTO user_challenge_comment VALUES("4","70","jennifer@gmail.com","3","get this now","0","2020-07-16 06:34:37");



CREATE TABLE `user_challenge_comment_like` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `comment_identity` varchar(250) NOT NULL,
  `comment_read` varchar(250) NOT NULL,
  `status_like` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO user_challenge_comment_like VALUES("1","49","lowest@gmail.com","1","1","1","2020-07-05 09:47:22");
INSERT INTO user_challenge_comment_like VALUES("2","70","jennifer@gmail.com","3","1","0","2020-07-16 06:25:59");



CREATE TABLE `user_challenge_comment_reply` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` int(250) NOT NULL,
  `comment_identity` varchar(250) NOT NULL,
  `reply` varchar(250) NOT NULL,
  `date_created` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO user_challenge_comment_reply VALUES("1","49","1","get ride off me","2020-07-05 09:41:19");
INSERT INTO user_challenge_comment_reply VALUES("2","70","3","get there","2020-07-16 06:56:35");



CREATE TABLE `user_challenge_like` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `post_identity` varchar(250) NOT NULL,
  `status_like` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO user_challenge_like VALUES("1","49","lowest@gmail.com","1","1","2020-07-05 09:39:30");
INSERT INTO user_challenge_like VALUES("2","70","jennifer@gmail.com","2","1","2020-07-16 05:47:02");



CREATE TABLE `user_challenge_posts` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `challenge_url` varchar(250) NOT NULL,
  `user_identity` varchar(250) NOT NULL,
  `media` varchar(250) NOT NULL,
  `media_type` varchar(250) NOT NULL,
  `caption` varchar(250) DEFAULT NULL,
  `post_status` varchar(30) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO user_challenge_posts VALUES("1","3472734c04883930d3dc7fc3b553df887c1bb4de","49","IB_challenge_image1593931442Box--23_ford_mustang.jpg","jpg","Many highly intelligent people are poor thinkers. Many people of average intelligence are skilled thinkers. The power of the car is separate from the way the car is driven.","0","2020-07-05 08:07:02");
INSERT INTO user_challenge_posts VALUES("2","075c883cf3cff53aa661ce3c8f0661fdb2296f27","70","IB_challenge_image1594914403Box--gm (59).jpg","jpg","there we go","0","2020-07-16 05:07:43");
INSERT INTO user_challenge_posts VALUES("3","075c883cf3cff53aa661ce3c8f0661fdb2296f27","70","IB_challenge_image1594914630Box--gm (89).jpg","jpg","savage eyes","0","2020-07-16 05:07:30");



CREATE TABLE `user_common_comment_like` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `comment_identity` varchar(250) NOT NULL,
  `status_like` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO user_common_comment_like VALUES("1","95","lucky@gmail.com","1","1","22/062020");
INSERT INTO user_common_comment_like VALUES("2","66","morg@gmail.com","3","1","2020-07-14 09:56:38");
INSERT INTO user_common_comment_like VALUES("3","66","morg@gmail.com","4","0","2020-07-15 12:14:55");



CREATE TABLE `user_common_comment_reply` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `comment_identity` varchar(250) NOT NULL,
  `reply` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO user_common_comment_reply VALUES("1","95","lucky@gmail.com","1","this is replyed comment","22/062020");
INSERT INTO user_common_comment_reply VALUES("2","95","lucky@gmail.com","1","this is the only error i have got been","22/062020");
INSERT INTO user_common_comment_reply VALUES("3","66","morg@gmail.com","3","the main","2020-07-14 09:57:04");
INSERT INTO user_common_comment_reply VALUES("4","66","morg@gmail.com","3","the main","2020-07-15 12:26:19");



CREATE TABLE `user_common_news` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(250) NOT NULL,
  `news_title` varchar(250) DEFAULT NULL,
  `news_media` varchar(250) DEFAULT NULL,
  `news_description` varchar(250) DEFAULT NULL,
  `news_independent` varchar(250) DEFAULT NULL,
  `executed_date` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO user_common_news VALUES("1","intelligentBox@gmail.box","The main resorn why bible translated in english ","IB_world_image1594281757Box--bible_text_192550.png","I hope you'll find them helpful no matter if you're a student that needs a boost of motivation or if you're a teacher of any kind that wants to inspire and make a change in the lives of your students.","african","2020-07-09 10:07:37");
INSERT INTO user_common_news VALUES("2","sia@gmail.com","the oldest car","IB_News_image1594304072Box--gm (116).jpg","Education opens up the mind, expands it and allows you to improve your life in so many ways.","top_story","2020-07-09 04:07:32");
INSERT INTO user_common_news VALUES("3","intelligentBox@gmail.box","the negative","IB_world_image1594317674Box--gm (119).jpg","the negativity of our friend affect our opportunity","african","2020-07-09 08:07:14");
INSERT INTO user_common_news VALUES("4","intelligentBox@gmail.box","The  trending movies","IB_world_image1594318394Box--gm (138).jpg","this movies is now online","top_story","2020-07-09 08:07:14");
INSERT INTO user_common_news VALUES("6","intelligentBox@gmail.box","the negative","IB_world_image1594318561Box--gm (124).jpg","the negativity of this gellery is to produce rice","Asian","2020-07-09 08:07:01");
INSERT INTO user_common_news VALUES("7","sia@gmail.com","savage love","IB_News_image1594357672Box--gm (34).jpg","is somebody break your heart","world","2020-07-10 07:07:52");
INSERT INTO user_common_news VALUES("8","sia@gmail.com","welcome to year year","IB_News_image1594358447Box--2019-joy-lj-1366x768.jpg","this nwe year will be so nice to me","world","2020-07-10 07:07:47");



CREATE TABLE `user_common_news_comments` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(250) NOT NULL,
  `news_identity` varchar(250) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `comment_read_status` varchar(250) NOT NULL,
  `execute_date` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO user_common_news_comments VALUES("1","sia@gmail.com","2","the majority","0","2020-07-09 05:07:56");
INSERT INTO user_common_news_comments VALUES("2","sia@gmail.com","1","allow_to introduce","0","2020-07-09 05:07:49");
INSERT INTO user_common_news_comments VALUES("3","greyMark@gmail.com","1","the more we got","0","2020-07-20 06:07:40");



CREATE TABLE `user_common_post` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `poster_identity` int(250) NOT NULL,
  `poster_email` varchar(250) NOT NULL,
  `media_posted` varchar(250) NOT NULL,
  `media_type` varchar(250) NOT NULL,
  `media_caption` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `post_type` varchar(250) NOT NULL,
  `status_view` varchar(250) DEFAULT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

INSERT INTO user_common_post VALUES("1","1","hseal419@gmail.com","IB_profile_image1592902810Box--gm (125).jpg","jpeg","","profile","0","2020-06-23 11:06:11");
INSERT INTO user_common_post VALUES("3","2","Antimatter@gmail.com","IB_image1592905923Box--african-safari-sunset.jpg","jpg","No caption","feeds","0","2020-06-23 11:06:03");
INSERT INTO user_common_post VALUES("12","2","Antimatter@gmail.com","IB_image1592909892Box--sunrise-glaring-through-the-trees-as-man-takes-to-water.jpg","jpg","get anythings","feeds","0","2020-06-23 12:06:12");
INSERT INTO user_common_post VALUES("13","2","Antimatter@gmail.com","IB_profile_image1592931580Box--nvidia-outs-geforce-game-ready-graphics-driver-361-43-download-now-497922-2.jpg","jpeg","","profile","0","2020-06-23 06:06:40");
INSERT INTO user_common_post VALUES("14","2","Antimatter@gmail.com","IB_image1592935034Box--GBWA-20190205152705.mp4","mp4","","feeds","0","2020-06-23 07:06:14");
INSERT INTO user_common_post VALUES("15","3","Mark@gmail.com","IB_profile_image1592992905Box--emilia-clarke-hd-2017-u1-1366x768.jpg","jpeg","","profile","0","2020-06-24 12:06:46");
INSERT INTO user_common_post VALUES("16","3","Mark@gmail.com","IB_image1592994201Box--gm (122).jpg","jpg","We can easily manage if we will only take, each day, the burden appointed to it. But the load will be too heavy for us if we carry yesterday?s burden over again today, and then add the burden of the morrow before we are required to bear it.","feeds","0","2020-06-24 12:06:21");
INSERT INTO user_common_post VALUES("17","3","Mark@gmail.com","IB_profile_image1593065448Box--72652.jpg","jpeg","","profile","0","2020-06-25 08:06:49");
INSERT INTO user_common_post VALUES("18","3","Mark@gmail.com","IB_image1593065486Box--72658.jpg","jpg","dghjh","feeds","0","2020-06-25 08:06:27");
INSERT INTO user_common_post VALUES("19","7","feinty@gmail.com","IB_profile_image1593084446Box--gm (63).jpg","jpeg","","profile","0","2020-06-25 01:06:26");
INSERT INTO user_common_post VALUES("20","7","feinty@gmail.com","IB_profile_image1593084464Box--gm (144).jpg","jpeg","","profile","0","2020-06-25 01:06:44");
INSERT INTO user_common_post VALUES("21","7","feinty@gmail.com","IB_profile_image1593084488Box--FB_IMG_15876592224218855.jpg","jpeg","","profile","0","2020-06-25 01:06:08");
INSERT INTO user_common_post VALUES("22","7","feinty@gmail.com","IB_profile_image1593084539Box--NASA_fb.jpg","jpeg","","profile","0","2020-06-25 01:06:59");
INSERT INTO user_common_post VALUES("23","13","gtman@man.com","IB_profile_image1593189528Box--Alyssa_Carson.jpg","jpeg","","profile","0","2020-06-26 06:06:48");
INSERT INTO user_common_post VALUES("24","15","walkerman@gmail.com","IB_profile_image1593200412Box--business-women-working.png","jpeg","","profile","0","2020-06-26 09:06:12");
INSERT INTO user_common_post VALUES("25","17","Ady@gmail.com","IB_profile_image1593258838Box--siora-photography-VtNSaArmb-o-unsplash.jpg","jpeg","","profile","0","2020-06-27 01:06:59");
INSERT INTO user_common_post VALUES("26","18","laila@gmail.com","IB_profile_image1593331227Box--hands-typing-code-on-laptop.jpg","jpeg","","profile","0","2020-06-28 10:06:28");
INSERT INTO user_common_post VALUES("27","21","Kalima@gmail.com","IB_profile_image1593416736Box--6886467_preview.png","jpeg","","profile","0","2020-06-29 09:06:36");
INSERT INTO user_common_post VALUES("28","21","Kalima@gmail.com","IB_profile_image1593420278Box--Geek-Art_net.jpg","jpeg","","profile","0","2020-06-29 10:06:39");
INSERT INTO user_common_post VALUES("29","20","stewart@gmail.com","IB_profile_image1593440000Box--artificial-intelligence-3382507__340.png","jpeg","","profile","0","2020-06-29 04:06:21");
INSERT INTO user_common_post VALUES("30","26","Salton@gmail.com","IB_profile_image1593505015Box--gm (84).jpg","jpeg","","profile","0","2020-06-30 10:06:55");
INSERT INTO user_common_post VALUES("31","26","Salton@gmail.com","IB_image1593506145Box--gm (37).jpg","jpg","","feeds","0","2020-06-30 10:06:45");
INSERT INTO user_common_post VALUES("32","26","Salton@gmail.com","IB_image1593506523Box--FB_IMG_15876592224218855.jpg","jpg","","feeds","0","2020-06-30 10:06:03");
INSERT INTO user_common_post VALUES("33","27","Gutman@gmail.com","IB_image1593521458Box--city-wallpaper-29-640x360.png","png","Much education today is monumentally ineffective. All too often we are giving young people cut flowers when we should be teaching them to grow their own plants.","feeds","0","2020-06-30 02:06:58");
INSERT INTO user_common_post VALUES("34","38","Chri250@gmail.com","IB_profile_image1593697327Box--hands-typing-on-laptop.jpg","jpeg","","profile","0","2020-07-02 03:07:07");
INSERT INTO user_common_post VALUES("35","39","las@gmail.com","IB_profile_image1593710190Box--laptop-from-above.jpg","jpeg","","profile","0","2020-07-02 07:07:30");
INSERT INTO user_common_post VALUES("36","46","dangerman@gmail.com","IB_profile_image1593851531Box--6886467_preview.png","jpeg","","profile","0","2020-07-04 10:07:11");
INSERT INTO user_common_post VALUES("37","57","huncho@gmail.com","IB_profile_image1594283785Box--khanh-trung-le-TyrQq272WG0-unsplash.jpg","jpeg","","profile","0","2020-07-09 10:07:26");
INSERT INTO user_common_post VALUES("38","58","sia@gmail.com","IB_profile_image1594288555Box--gm (36).jpg","jpeg","","profile","0","2020-07-09 11:07:55");
INSERT INTO user_common_post VALUES("39","59","Storm@gmail.com","IB_profile_image1594361978Box--gm (93).jpg","jpeg","","profile","0","2020-07-10 08:07:39");
INSERT INTO user_common_post VALUES("40","60","laloen@gmail.com","IB_profile_image1594363295Box--gm (128).jpg","jpeg","","profile","0","2020-07-10 08:07:37");
INSERT INTO user_common_post VALUES("41","61","Greek@gmail.com","IB_profile_image1594478649Box--gm (91).jpg","jpeg","","profile","0","2020-07-11 04:07:09");
INSERT INTO user_common_post VALUES("42","66","morg@gmail.com","IB_image1594712567Box--gm (129).jpg","jpg","the richest car in ðŸš” cars nations","feeds","0","2020-07-14 09:07:47");
INSERT INTO user_common_post VALUES("43","74","quire@gmail.com","IB_profile_image1595083389Box--52d87e4a6da811e43948ebfd-960-640.jpg","jpeg","","profile","0","2020-07-18 04:07:11");



CREATE TABLE `user_common_post_comments` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `post_identity` int(250) NOT NULL,
  `post_type` varchar(250) NOT NULL,
  `comment` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO user_common_post_comments VALUES("1","27","Gutman@gmail.com","33","feeds","A teacher affects eternity; he can never tell where his influence stops.","2020-06-30 02:56:58");
INSERT INTO user_common_post_comments VALUES("2","49","lowest@gmail.com","1","profile","this is fantastic","2020-07-05 09:16:14");
INSERT INTO user_common_post_comments VALUES("3","66","morg@gmail.com","42","feeds","the main reson","2020-07-14 09:44:02");
INSERT INTO user_common_post_comments VALUES("4","66","morg@gmail.com","42","feeds","the naila","2020-07-15 11:51:51");



CREATE TABLE `user_common_post_likes` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `post_identity` int(250) NOT NULL,
  `post_type` varchar(250) NOT NULL,
  `status_like` int(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO user_common_post_likes VALUES("1","66","morg@gmail.com","42","feeds","1","2020-07-14 09:56:07");



CREATE TABLE `user_follow_board` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `host_identity` int(250) NOT NULL,
  `host_email` varchar(250) NOT NULL,
  `host_title` varchar(20) NOT NULL,
  `reciever_identity` int(250) NOT NULL,
  `reciever_email` varchar(250) NOT NULL,
  `reciever_title` varchar(20) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

INSERT INTO user_follow_board VALUES("4","3","Mark@gmail.com","trainer","2","Antimatter@gmail.com","student","2020-06-24 12:06:20");
INSERT INTO user_follow_board VALUES("5","2","Antimatter@gmail.com","student","1","hseal419@gmail.com","student","2020-06-24 01:06:44");
INSERT INTO user_follow_board VALUES("6","5","eretytey@gmai.ocm","student","2","Antimatter@gmail.com","student","2020-06-25 11:06:17");
INSERT INTO user_follow_board VALUES("7","13","gtman@man.com","trainer","1","hseal419@gmail.com","student","2020-06-26 06:06:18");
INSERT INTO user_follow_board VALUES("10","16","man@gmail.com","trainer","1","hseal419@gmail.com","student","2020-06-27 08:06:34");
INSERT INTO user_follow_board VALUES("11","16","man@gmail.com","trainer","0","3","","2020-06-27 08:06:33");
INSERT INTO user_follow_board VALUES("12","16","man@gmail.com","trainer","3","Mark@gmail.com","trainer","2020-06-27 08:06:40");
INSERT INTO user_follow_board VALUES("13","16","man@gmail.com","trainer","12","ilanius@gmail.com","student","2020-06-27 08:06:11");
INSERT INTO user_follow_board VALUES("14","17","Ady@gmail.com","trainer","3","Mark@gmail.com","trainer","2020-06-27 01:06:54");
INSERT INTO user_follow_board VALUES("16","18","laila@gmail.com","trainer","17","Ady@gmail.com","trainer","2020-06-28 01:06:48");
INSERT INTO user_follow_board VALUES("17","21","Kalima@gmail.com","trainer","9","lolen@gmail.com","trainer","2020-06-29 09:06:58");
INSERT INTO user_follow_board VALUES("18","21","Kalima@gmail.com","trainer","4","fgfhg@gmailc.com","trainer","2020-06-29 09:06:07");
INSERT INTO user_follow_board VALUES("19","21","Kalima@gmail.com","trainer","15","walkerman@gmail.com","trainer","2020-06-29 09:06:11");
INSERT INTO user_follow_board VALUES("20","21","Kalima@gmail.com","trainer","16","man@gmail.com","trainer","2020-06-29 09:06:13");
INSERT INTO user_follow_board VALUES("21","21","Kalima@gmail.com","trainer","17","Ady@gmail.com","trainer","2020-06-29 09:06:15");
INSERT INTO user_follow_board VALUES("22","21","Kalima@gmail.com","trainer","18","laila@gmail.com","trainer","2020-06-29 09:06:17");
INSERT INTO user_follow_board VALUES("23","21","Kalima@gmail.com","trainer","19","shoe@gmail.com","trainer","2020-06-29 09:06:18");
INSERT INTO user_follow_board VALUES("24","21","Kalima@gmail.com","trainer","20","stewart@gmail.com","trainer","2020-06-29 09:06:22");
INSERT INTO user_follow_board VALUES("25","26","Salton@gmail.com","trainer","1","hseal419@gmail.com","student","2020-06-30 11:06:21");
INSERT INTO user_follow_board VALUES("26","27","Gutman@gmail.com","trainer","2","Antimatter@gmail.com","student","2020-06-30 02:06:39");
INSERT INTO user_follow_board VALUES("27","27","Gutman@gmail.com","trainer","17","Ady@gmail.com","trainer","2020-06-30 05:06:11");
INSERT INTO user_follow_board VALUES("28","35","Rstewart@gmail.com","trainer","1","hseal419@gmail.com","student","2020-07-02 12:07:49");
INSERT INTO user_follow_board VALUES("29","35","Rstewart@gmail.com","trainer","6","Warren@gmail.com","student","2020-07-02 12:07:58");
INSERT INTO user_follow_board VALUES("30","33","peacemaker@gmail.com","trainer","1","hseal419@gmail.com","student","2020-07-02 12:07:28");
INSERT INTO user_follow_board VALUES("31","36","jeferson@gmail.com","trainer","1","hseal419@gmail.com","student","2020-07-02 01:07:58");
INSERT INTO user_follow_board VALUES("32","36","jeferson@gmail.com","trainer","6","Warren@gmail.com","student","2020-07-02 01:07:04");
INSERT INTO user_follow_board VALUES("33","36","jeferson@gmail.com","trainer","9","lolen@gmail.com","trainer","2020-07-02 01:07:09");
INSERT INTO user_follow_board VALUES("34","36","jeferson@gmail.com","trainer","13","gtman@man.com","trainer","2020-07-02 01:07:12");
INSERT INTO user_follow_board VALUES("35","39","las@gmail.com","student","7","feinty@gmail.com","trainer","2020-07-02 08:07:36");
INSERT INTO user_follow_board VALUES("36","39","las@gmail.com","student","13","gtman@man.com","trainer","2020-07-02 08:07:04");
INSERT INTO user_follow_board VALUES("37","39","las@gmail.com","student","1","hseal419@gmail.com","student","2020-07-02 08:07:37");
INSERT INTO user_follow_board VALUES("38","43","Flo@gmail.com","student","2","Antimatter@gmail.com","student","2020-07-03 07:07:04");
INSERT INTO user_follow_board VALUES("39","43","Flo@gmail.com","student","40","Arl@gmail.com","student","2020-07-03 07:07:59");
INSERT INTO user_follow_board VALUES("40","66","morg@gmail.com","student","1","hseal419@gmail.com","student","2020-07-14 08:07:06");
INSERT INTO user_follow_board VALUES("41","66","morg@gmail.com","student","2","Antimatter@gmail.com","student","2020-07-14 11:07:42");
INSERT INTO user_follow_board VALUES("42","66","morg@gmail.com","student","6","Warren@gmail.com","student","2020-07-14 11:07:46");
INSERT INTO user_follow_board VALUES("43","66","morg@gmail.com","student","12","ilanius@gmail.com","student","2020-07-14 11:07:48");
INSERT INTO user_follow_board VALUES("44","66","morg@gmail.com","student","5","eretytey@gmai.ocm","student","2020-07-14 11:07:59");
INSERT INTO user_follow_board VALUES("45","66","morg@gmail.com","student","28","Markus@gmail.com","student","2020-07-14 11:07:02");
INSERT INTO user_follow_board VALUES("46","67","kesh@gmailc.om","student","1","hseal419@gmail.com","student","14/07/2020");
INSERT INTO user_follow_board VALUES("47","67","kesh@gmailc.om","student","2","Antimatter@gmail.com","student","14/07/2020");
INSERT INTO user_follow_board VALUES("48","67","kesh@gmailc.om","student","39","las@gmail.com","student","14/07/2020");
INSERT INTO user_follow_board VALUES("49","67","kesh@gmailc.om","student","41","El2@gmail.com","student","14/07/2020");
INSERT INTO user_follow_board VALUES("50","67","kesh@gmailc.om","student","13","gtman@man.com","trainer","14/07/2020");
INSERT INTO user_follow_board VALUES("51","67","kesh@gmailc.om","student","15","walkerman@gmail.com","trainer","14/07/2020");
INSERT INTO user_follow_board VALUES("52","70","jennifer@gmail.com","student","2","Antimatter@gmail.com","student","2020-07-17 10:07:06");
INSERT INTO user_follow_board VALUES("53","70","jennifer@gmail.com","student","6","Warren@gmail.com","student","2020-07-17 10:07:09");
INSERT INTO user_follow_board VALUES("54","70","jennifer@gmail.com","student","1","hseal419@gmail.com","student","2020-07-17 10:07:12");
INSERT INTO user_follow_board VALUES("55","70","jennifer@gmail.com","student","12","ilanius@gmail.com","student","2020-07-17 10:07:15");
INSERT INTO user_follow_board VALUES("56","70","jennifer@gmail.com","student","5","eretytey@gmai.ocm","student","2020-07-17 10:07:18");
INSERT INTO user_follow_board VALUES("57","73","lilan@gmail.com","student","70","jennifer@gmail.com","student","2020-07-17 12:07:44");
INSERT INTO user_follow_board VALUES("58","76","Lewis@gmail.com","student","1","hseal419@gmail.com","student","2020-07-19 08:07:05");
INSERT INTO user_follow_board VALUES("59","76","Lewis@gmail.com","student","6","Warren@gmail.com","student","2020-07-19 10:07:59");
INSERT INTO user_follow_board VALUES("60","76","Lewis@gmail.com","student","5","eretytey@gmai.ocm","student","2020-07-19 10:07:04");
INSERT INTO user_follow_board VALUES("61","76","Lewis@gmail.com","student","2","Antimatter@gmail.com","student","2020-07-19 10:07:07");
INSERT INTO user_follow_board VALUES("62","76","Lewis@gmail.com","student","14","liona@gmail.com","student","2020-07-19 10:07:17");
INSERT INTO user_follow_board VALUES("63","77","stard@gmail.com","student","1","hseal419@gmail.com","student","2020-07-19 12:07:31");
INSERT INTO user_follow_board VALUES("64","78","lousM@gmailc.om","student","3","Mark@gmail.com","trainer","2020-07-20 10:07:56");
INSERT INTO user_follow_board VALUES("65","78","lousM@gmailc.om","student","4","fgfhg@gmailc.com","trainer","2020-07-20 10:07:04");
INSERT INTO user_follow_board VALUES("66","80","greyMark@gmail.com","trainer","4","fgfhg@gmailc.com","trainer","2020-07-20 11:07:55");
INSERT INTO user_follow_board VALUES("67","80","greyMark@gmail.com","trainer","9","lolen@gmail.com","trainer","2020-07-20 11:07:58");
INSERT INTO user_follow_board VALUES("68","80","greyMark@gmail.com","trainer","15","walkerman@gmail.com","trainer","2020-07-20 11:07:01");



CREATE TABLE `user_group_challenge_message` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `group_challenge_identity` varchar(250) NOT NULL,
  `group_identity_sender` varchar(250) NOT NULL,
  `user_identity_sender` varchar(250) NOT NULL,
  `group_identity_reciever` varchar(250) NOT NULL,
  `status_read` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `user_group_member` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` int(250) NOT NULL,
  `User_email` varchar(250) NOT NULL,
  `user_title` varchar(250) NOT NULL,
  `group_name` varchar(250) NOT NULL,
  `group_identity` varchar(250) NOT NULL,
  `approval` varchar(250) NOT NULL,
  `joined_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO user_group_member VALUES("2","17","Ady@gmail.com","trainer","Amazone Forest Renkalination","2","no","2020-06-28 08:06:18");
INSERT INTO user_group_member VALUES("4","17","Ady@gmail.com","trainer","Human Sapience  ","4","no","2020-06-28 08:06:44");
INSERT INTO user_group_member VALUES("5","17","Ady@gmail.com","trainer","World cities","5","no","2020-06-28 08:06:04");
INSERT INTO user_group_member VALUES("6","18","laila@gmail.com","trainer","Amazone Forest Renkalination","2","no","2020-06-28 10:06:07");
INSERT INTO user_group_member VALUES("7","20","stewart@gmail.com","trainer","Computer Education","9","no","2020-06-29 04:06:35");
INSERT INTO user_group_member VALUES("8","20","stewart@gmail.com","trainer","Amazone Forest Renkalination","2","no","2020-06-29 04:06:08");
INSERT INTO user_group_member VALUES("9","26","Salton@gmail.com","trainer","Amazone Forest Renkalination","2","no","2020-06-30 12:06:31");
INSERT INTO user_group_member VALUES("10","27","Gutman@gmail.com","trainer","Astronomy people","6","no","2020-06-30 04:06:34");
INSERT INTO user_group_member VALUES("11","27","Gutman@gmail.com","trainer","Amazone Forest Renkalination","2","no","2020-06-30 05:06:49");
INSERT INTO user_group_member VALUES("12","32","Flora@gmail.com","trainer","Human Sapience  ","4","no","2020-07-01 07:07:56");
INSERT INTO user_group_member VALUES("13","33","peacemaker@gmail.com","trainer","Human Sapience  ","4","no","2020-07-01 05:07:20");
INSERT INTO user_group_member VALUES("14","38","Chri250@gmail.com","trainer","World cities","5","no","2020-07-02 03:07:53");
INSERT INTO user_group_member VALUES("15","38","Chri250@gmail.com","trainer","Astronomy people","6","no","2020-07-02 03:07:01");
INSERT INTO user_group_member VALUES("16","39","las@gmail.com","student","Amazone Forest Renkalination","2","no","2020-07-02 07:07:48");
INSERT INTO user_group_member VALUES("17","63","gelian@gmail.com","student","Rebirth in califonia","14","no","2020-07-11 05:07:31");
INSERT INTO user_group_member VALUES("18","65","gue@gmail.com","trainer","Core Ellimination","13","no","2020-07-13 08:07:41");
INSERT INTO user_group_member VALUES("19","66","morg@gmail.com","student","Godzilla Home","3","no","2020-07-14 07:07:39");
INSERT INTO user_group_member VALUES("20","70","jennifer@gmail.com","student","Human Sapience  ","4","no","2020-07-16 01:07:21");
INSERT INTO user_group_member VALUES("21","70","jennifer@gmail.com","student","Buddhism live","16","yes","2020-07-16 05:07:36");



CREATE TABLE `user_group_post` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(250) NOT NULL,
  `group_identity` varchar(250) NOT NULL,
  `user_poster_identity` varchar(250) NOT NULL,
  `poster_email` varchar(250) NOT NULL,
  `media_posted` varchar(250) NOT NULL,
  `media_type` varchar(250) NOT NULL,
  `media_caption` varchar(250) NOT NULL,
  `post_type` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO user_group_post VALUES("1","Computer Education","9","17","Ady@gmail.com","IB_group_image1593274420Box--city-sunset-smoke.jpg","jpg","Global warming is the best problem world have ","feeds","2020-06-27 06:06:40");
INSERT INTO user_group_post VALUES("2","Amazone Forest Renkalination","2","18","laila@gmail.com","IB_group_image1593332112Box--education-teaching-learning-technology-people-concept-tw-two-high-school-students-classmates-helps-friend-catching-up-95507181.jpg","jpg","Uploading files from clients to servers is one of the important features of any PHP application. However, implementation of feature with proper security and hassle-free configuration could be tricky. Developers could use several PHP file upload scrip","feeds","2020-06-28 10:06:12");
INSERT INTO user_group_post VALUES("3","Amazone Forest Renkalination","2","27","Gutman@gmail.com","IB_group_image1593530887Box--gm (55).jpg","jpg","","feeds","2020-06-30 05:06:07");
INSERT INTO user_group_post VALUES("4","Astronomy people","6","38","Chri250@gmail.com","IB_group_image1593697665Box--receiving-shipping-box-on-ipad.jpg","jpg","Treat people as if they were what they ought to be, and you help them to become what they are capable of becoming.","feeds","2020-07-02 03:07:45");
INSERT INTO user_group_post VALUES("5","World cities","5","38","Chri250@gmail.com","IB_group_image1593697711Box--woman-relaxed-work.jpg","jpg","Treat people as if they were what they ought to be, and you help them to become what they are capable of becoming.","feeds","2020-07-02 03:07:31");
INSERT INTO user_group_post VALUES("6","Radar people","11","38","Chri250@gmail.com","IB_group_image1593698910Box--red-mouse-computer.jpg","jpg","Do not train children to learning by force and harshness, but direct them to it by what amuses their minds, so that you may be better able to discover with accuracy the peculiar bent of the genius of each.","feeds","2020-07-02 04:07:30");
INSERT INTO user_group_post VALUES("7","Buddhism live","16","71","minlaender@gmal.com","IB_group_image1594911702Box--IB_image1592907390Box--lush-green-fields-by-mountains-and-waterfall.jpg","jpg","the mountain fuji in now on smoth area","feeds","2020-07-16 05:07:43");
INSERT INTO user_group_post VALUES("8","Buddhism live","16","70","jennifer@gmail.com","IB_group_image1594912719Box--gm (75).jpg","jpg","that real hanker","feeds","2020-07-16 05:07:39");
INSERT INTO user_group_post VALUES("9","Buddhism live","16","70","jennifer@gmail.com","IB_group_image1594913304Box--gm (113).jpg","jpg","Dynamit","feeds","2020-07-16 05:07:24");



CREATE TABLE `user_group_post_comment` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `post_identity` varchar(250) NOT NULL,
  `comment` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `comment_read_status` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO user_group_post_comment VALUES("1","17","Ady@gmail.com","1","get ride off","1","2020-06-27 06:51:01");
INSERT INTO user_group_post_comment VALUES("3","18","laila@gmail.com","2","get ride me","1","2020-06-28 10:47:11");
INSERT INTO user_group_post_comment VALUES("4","18","laila@gmail.com","1","get me down","1","2020-06-28 10:56:25");



CREATE TABLE `user_group_post_comment_like` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` int(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `comment_identity` varchar(250) NOT NULL,
  `comment_status_like` varchar(250) NOT NULL,
  `status_read` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO user_group_post_comment_like VALUES("1","18","laila@gmail.com","1","1","1","2020-06-28 10:59:41");



CREATE TABLE `user_group_post_comment_reply` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `comment_identity` varchar(250) NOT NULL,
  `reply` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `comment_read_status` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO user_group_post_comment_reply VALUES("1","17","Ady@gmail.com","1","get ride","1","2020-06-27 07:01:20");
INSERT INTO user_group_post_comment_reply VALUES("2","18","laila@gmail.com","3","it fine","1","2020-06-28 10:48:41");



CREATE TABLE `user_group_post_like` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `post_identity` varchar(250) NOT NULL,
  `status_like` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO user_group_post_like VALUES("1","","Ady@gmail.com","1","1","2020-06-27 06:25:55");
INSERT INTO user_group_post_like VALUES("2","","Mark@gmail.com","2","1","2020-06-28 10:19:18");
INSERT INTO user_group_post_like VALUES("3","","Chri250@gmail.com","6","1","2020-07-02 06:56:41");



CREATE TABLE `user_groups` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `url_encode` varchar(250) NOT NULL,
  `user_identity` int(250) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `group_name` varchar(250) NOT NULL,
  `group_profile_image` varchar(250) NOT NULL,
  `group_bio` varchar(250) DEFAULT NULL,
  `group_privacy` varchar(250) NOT NULL,
  `group_member_count` int(250) NOT NULL,
  `group_chalenges_count` int(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO user_groups VALUES("1","5a3265011b5f5cf318037ad4bfc95479b3612d76","3","Mark","Lainkan","Mark@gmail.com","Amazone","IB_Group_image1593004650Box--8021493047_6720c89827_k.jpg","Much education today is monumentally ineffective. All too often we are giving young people cut flowers when we should be teaching them to grow their own plants.","Private","1","0","2020-06-24 03:06:30");
INSERT INTO user_groups VALUES("2","bd3ec1b965c88c7d14afac7335feb3f0fde1fff5","3","Mark","Lainkan","Mark@gmail.com","Amazone Forest Renkalination","IB_Group_image1593004798Box--apps.32975.13906265068838635.fa666570-9215-4663-a751-73919e9039ae.jpg","Much education today is monumentally ineffective. All too often we are giving young people cut flowers when we should be teaching them to grow their own plants.","Public","1","0","2020-06-24 03:06:58");
INSERT INTO user_groups VALUES("3","9e9ad765c7fa4b15e5068434eec30beb723e1fc0","3","Mark","Lainkan","Mark@gmail.com","Godzilla Home","IB_Group_image1593010346Box--1024px-brazilian_amazon_rainforest.jpg","Much education today is monumentally ineffective. All too often we are giving young people cut flowers when we should be teaching them to grow their own plants.","Public","1","0","2020-06-24 04:06:26");
INSERT INTO user_groups VALUES("4","86b6f3c0e5677f638ed23e6f680a0a18ba150640","3","Mark","Lainkan","Mark@gmail.com","Human Sapience  ","IB_Group_image1593010743Box--7-1.jpg","Much education today is monumentally ineffective. All too often we are giving young people cut flowers when we should be teaching them to grow their own plants.","Public","1","0","2020-06-24 04:06:03");
INSERT INTO user_groups VALUES("5","f2435c51edbc675d8d35542aee4f98c270b99ed6","3","Mark","Lainkan","Mark@gmail.com","World cities","IB_Group_image1593064798Box--calm-water-in-european-city.jpg","Uploading files from clients to servers is one of the important features of any PHP application and may be helpfull to sociaty in common offers this feature seamlessly in the world","Public","1","0","2020-06-25 07:06:58");
INSERT INTO user_groups VALUES("6","4cf9d4a2f6a8a33f39775999b8a4f45acf7d967d","15","manirabona","walker","Walkerman@Gmail.Com","Astronomy people","IB_Group_image1593190096Box--50-796x417.png","I will discuss a popular strategy that developers could integrate within their projects. In this article","Public","1","0","2020-06-26 06:06:16");
INSERT INTO user_groups VALUES("7","7a2979f2337e0aa8542e1b36a7e2080ce641cfc6","14","viona","liona","liona@gmail.com","Amazing of the earth","IB_Group_image1593193333Box--@truthbynature on Instagram_ “Godzilla_ King of the Monsters.jpg","Uploading files from clients to servers is one of the important features of any PHP application","Public","1","0","2020-06-26 07:06:13");
INSERT INTO user_groups VALUES("8","c1b7a9523025da9508ece9db288d477b2ddba178","14","viona","liona","liona@gmail.com","Ethical hacking","IB_Group_image1593193411Box--hands-typing.jpg","Uploading files from clients to servers is one of the important features of any PHP application","Public","1","0","2020-06-26 07:06:31");
INSERT INTO user_groups VALUES("9","82eb27c8e95a4523caf8c7854679e6b049175ada","17","Mudahemuka","Elineste","Ady@gmail.com","Computer Education","IB_Group_image1593258906Box--arts-crafts-in-blue.jpg","Uploading files from clients to servers is one of the important features of any PHP application","Public","1","0","2020-06-27 01:06:06");
INSERT INTO user_groups VALUES("10","3dddea7d02d78c5de0baa38c6e1106dee5741512","26","Steven","Salton","Salton@gmail.com","Thoth","IB_Group_image1593512163Box--FB_IMG_15876592224218855.jpg"," will discuss a popular strategy that developers could integrate within their projects. In this article, I will show you how you can add PHP file upload functionality on your website using jQuery, AJAX and MySQL","Private","1","0","2020-06-30 12:06:03");
INSERT INTO user_groups VALUES("11","c9209987fcac3a8acc178e29e4c859a49ac1ed20","38","Radar","Chris","Chri250@gmail.com","Radar people","IB_Group_image1593697907Box--shadow-hands-typing.jpg","Treat people as if they were what they ought to be, and you help them to become what they are capable of becoming.","Public","1","0","2020-07-02 03:07:47");
INSERT INTO user_groups VALUES("12","1e9127a8175fd53cfa39fb3467a3bc2a55a53b03","46","Henry","Danger","dangerman@gmail.com","Intelligent people","IB_Group_image1593851623Box--city-wallpaper-2-640x360.png","Education would be much more effective if its purpose was to ensure that by the time they leave school every boy and girl should know how much they do not know, and be imbued with a lifelong desire to know it.","Private","1","0","2020-07-04 10:07:43");
INSERT INTO user_groups VALUES("13","95dce31fb595e6aa8a203affbd3e4c381d1bfa6a","48","eric","joshua","joe@gmail.com","Core Ellimination","IB_Group_image1593862502Box--2.png","Many highly intelligent people are poor thinkers. Many people of average intelligence are skilled thinkers. The power of the car is separate from the way the car is driven.","Public","1","0","2020-07-04 01:07:02");
INSERT INTO user_groups VALUES("14","18db235e9d3f253968a5479a9b0a91830cc0857a","63","galaxy","gelian","gelian@gmail.com","Rebirth in califonia","IB_Group_image1594482380Box--gm (51).jpg","kigali so fresh in summertime","Public","1","0","2020-07-11 05:07:20");
INSERT INTO user_groups VALUES("15","c7649ec6b45b5197e0a9be0e7f3691091a9582b6","70","Core","Megany","jennifer@gmail.com","Football funs","IB_Group_image1594902148Box--gm (74).jpg","The main acter on ground let discuss more on more topics","Public","1","0","2020-07-16 02:07:28");
INSERT INTO user_groups VALUES("16","9e65097b6fc6a446c921c95cd0b931179870852b","71","Laerder","Milolinos","minlaender@gmal.com","Buddhism live","IB_Group_image1594908689Box--lightscape-1xMFU_F-tJ4-unsplash.jpg","The Buddhism live in real world","Public","1","0","2020-07-16 04:07:29");



CREATE TABLE `user_interest` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sports` varchar(250) DEFAULT NULL,
  `news` varchar(250) DEFAULT NULL,
  `musics` varchar(250) DEFAULT NULL,
  `religions` varchar(250) DEFAULT NULL,
  `art_and_culture` varchar(250) DEFAULT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

INSERT INTO user_interest VALUES("1","Markus","ilaniu","ilanius@gmail.com","","","","","","26/06/2020");
INSERT INTO user_interest VALUES("2","logical","gutman","gtman@man.com","","","","","","26/06/2020");
INSERT INTO user_interest VALUES("3","viona","liona","liona@gmail.com","","","","","","26/06/2020");
INSERT INTO user_interest VALUES("4","manirabona","walker","walkerman@gmail.com","","","","","","26/06/2020");
INSERT INTO user_interest VALUES("5","manirabona","walkerman","man@gmail.com","","","","","","27/06/2020");
INSERT INTO user_interest VALUES("6","Mudahemuka","Elineste","Ady@gmail.com","soccer","","","","","27/06/2020");
INSERT INTO user_interest VALUES("7","Mayirani","Lolen","laila@gmail.com","","","","","","28/06/2020");
INSERT INTO user_interest VALUES("8","shoeless","joe","shoe@gmail.com","","","","","","29/06/2020");
INSERT INTO user_interest VALUES("9","George","R stewart","stewart@gmail.com","","","","","","29/06/2020");
INSERT INTO user_interest VALUES("10","Mike","Karima","Kalima@gmail.com","","","","","","29/06/2020");
INSERT INTO user_interest VALUES("11","Steven","Job","Steven@gmail.com","","","","","","30/06/2020");
INSERT INTO user_interest VALUES("12","Steven","Job","jona@gmail.com","","","","","","30/06/2020");
INSERT INTO user_interest VALUES("13","Steven","Salton","Salton@gmail.com","","","","","","30/06/2020");
INSERT INTO user_interest VALUES("14","Melania","Gutman","Gutman@gmail.com","","","","","","30/06/2020");
INSERT INTO user_interest VALUES("15","Joe","Markus","Markus@gmail.com","","","","","","30/06/2020");
INSERT INTO user_interest VALUES("16","Didlos","shaker","shaker@gmail.com","","","","","","30/06/2020");
INSERT INTO user_interest VALUES("17","braise","mighty","mighty@gmail.com","","","","","","30/06/2020");
INSERT INTO user_interest VALUES("18","Theleza","Marguito","mars@gmail.com","","","","","","30/06/2020");
INSERT INTO user_interest VALUES("19","Stewart","Florida","Flora@gmail.com","","","","","","01/07/2020");
INSERT INTO user_interest VALUES("20","Williams","peacemaker","peacemaker@gmail.com","","","","","","01/07/2020");
INSERT INTO user_interest VALUES("21","Bill","Brain","Brain@gmail.com","","","","","","01/07/2020");
INSERT INTO user_interest VALUES("22","Robert","Stewart","Rstewart@gmail.com","","","","","","02/07/2020");
INSERT INTO user_interest VALUES("23","Robert","Jeferson","jeferson@gmail.com","","","","","","02/07/2020");
INSERT INTO user_interest VALUES("24","Radar","Chris","Chri250@gmail.com","","","","","","02/07/2020");
INSERT INTO user_interest VALUES("25","PAC","Laspardos","las@gmail.com","","","","","","02/07/2020");
INSERT INTO user_interest VALUES("26","Manirabona","Arlington","Arl@gmail.com","","","","","","03/07/2020");
INSERT INTO user_interest VALUES("27","erineste","Mudakesha","El2@gmail.com","","","","","","03/07/2020");
INSERT INTO user_interest VALUES("28","Mukandagije","Announc","annous@gmail.com","","","","","","03/07/2020");
INSERT INTO user_interest VALUES("29","George","Florida","Flo@gmail.com","","","","","","03/07/2020");
INSERT INTO user_interest VALUES("30","alan","walker","alan@gmail.com","","","","","","03/07/2020");
INSERT INTO user_interest VALUES("31","magnom","lolen","main@gmail.com","","","","","","04/07/2020");
INSERT INTO user_interest VALUES("32","Henry","Danger","dangerman@gmail.com","","","","","","04/07/2020");
INSERT INTO user_interest VALUES("33","Chriss","Maric","Maric@gmail.com","","","","","","04/07/2020");
INSERT INTO user_interest VALUES("34","eric","joshua","joe@gmail.com","","","","","","04/07/2020");
INSERT INTO user_interest VALUES("35","magic","lowest","lowest@gmail.com","","","","","","04/07/2020");
INSERT INTO user_interest VALUES("36","rider","smoker","smoker@gmail.com","","","","","","05/07/2020");
INSERT INTO user_interest VALUES("37","load","sunday","sunday@gmail.com","","","","","","05/07/2020");
INSERT INTO user_interest VALUES("38","Roben","Hood","hood@gmail.com","","","","","","07/07/2020");
INSERT INTO user_interest VALUES("39","Quavo","huncho","huncho@gmail.com","","","","","","08/07/2020");
INSERT INTO user_interest VALUES("40","Sia","jackson","sia@gmail.com","","","","","","09/07/2020");
INSERT INTO user_interest VALUES("41","Storm","Walker","Storm@gmail.com","","","","","","10/07/2020");
INSERT INTO user_interest VALUES("42","Losvert","Laloen","laloen@gmail.com","","","","","","10/07/2020");
INSERT INTO user_interest VALUES("43","Liliane","greek","Greek@gmail.com","","","","","","11/07/2020");
INSERT INTO user_interest VALUES("44","gillon","hillo","hillo@gmail.com","","","","","","11/07/2020");
INSERT INTO user_interest VALUES("45","galaxy","gelian","gelian@gmail.com","","","","","","11/07/2020");
INSERT INTO user_interest VALUES("46","Gregory","Kenny rogers","rogers@gmail.com","","","","","","13/07/2020");
INSERT INTO user_interest VALUES("47","Madrid","Gueutus","gue@gmail.com","","","","","","13/07/2020");
INSERT INTO user_interest VALUES("48","Kenny","Morgan sia","morg@gmail.com","","","","","","13/07/2020");
INSERT INTO user_interest VALUES("49","Lalonin","leina kesh","kesh@gmailc.om","","","","","","14/07/2020");
INSERT INTO user_interest VALUES("50","Ancle","Austin","aurstin250@gmail.com","","","","","","15/07/2020");
INSERT INTO user_interest VALUES("51","Rider","Jennifer","jennifer@gmail.com","","","","","","16/07/2020");
INSERT INTO user_interest VALUES("52","Laerder","Milolinos","minlaender@gmal.com","","","","","","16/07/2020");
INSERT INTO user_interest VALUES("53","","","morte@gmail.com","","","","","","17/07/2020");
INSERT INTO user_interest VALUES("54","greyground","lilan","lilan@gmail.com","","","","","","17/07/2020");
INSERT INTO user_interest VALUES("55","Puelto","guiany","quire@gmail.com","","","","","","18/07/2020");
INSERT INTO user_interest VALUES("56","lasvelonic","grequary","grequary@gmail.com","","","","","","18/07/2020");
INSERT INTO user_interest VALUES("57","george","Lewis","Lewis@gmail.com","","","","","","19/07/2020");
INSERT INTO user_interest VALUES("58","lewis","stardford","stard@gmail.com","basketballsoccer","Intertainment","Country","Christian","Photography","19/07/2020");
INSERT INTO user_interest VALUES("59","Legaxy","Mark lous","lousM@gmailc.om","","","","","","20/07/2020");
INSERT INTO user_interest VALUES("60","Anabell","lolin grey","greyMark@gmail.com","","","","","","20/07/2020");



CREATE TABLE `user_profile_background_image` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` int(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `background_image` varchar(250) NOT NULL,
  `background_status` varchar(20) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;

INSERT INTO user_profile_background_image VALUES("37","92","pmanirabona@gmail.com","default.jpg","off","20/06/2020");
INSERT INTO user_profile_background_image VALUES("38","92","pmanirabona@gmail.com","IB_background_image1592666408Box--african-safari-sunset.jpg","on","20/06/2020");
INSERT INTO user_profile_background_image VALUES("39","93","louis@gmail.com","default.jpg","off","20/06/2020");
INSERT INTO user_profile_background_image VALUES("40","93","louis@gmail.com","IB_background_image1592675792Box--sunrise-glaring-through-the-trees-as-man-takes-to-water.jpg","on","20/06/2020");
INSERT INTO user_profile_background_image VALUES("41","94","antimatter@gmail.com","default.jpg","off","20/06/2020");
INSERT INTO user_profile_background_image VALUES("42","94","antimatter@gmail.com","IB_background_image1592679622Box--sunrise-over-the-horizon-with-misty-sky.jpg","on","20/06/2020");
INSERT INTO user_profile_background_image VALUES("43","95","lucky@gmail.com","default.jpg","off","21/06/2020");
INSERT INTO user_profile_background_image VALUES("44","95","lucky@gmail.com","IB_background_image1592831904Box--gm (16).jpg","off","22/06/2020");
INSERT INTO user_profile_background_image VALUES("45","95","lucky@gmail.com","IB_background_image1592832181Box--gm (24).jpg","off","22/06/2020");
INSERT INTO user_profile_background_image VALUES("46","95","lucky@gmail.com","IB_background_image1592832207Box--gm (21).jpg","off","22/06/2020");
INSERT INTO user_profile_background_image VALUES("47","95","lucky@gmail.com","IB_background_image1592832310Box--gm (163).jpg","on","22/06/2020");
INSERT INTO user_profile_background_image VALUES("48","96","hseal419@gmail.com","default.jpg","on","23/06/2020");
INSERT INTO user_profile_background_image VALUES("49","97","hseal419@gmail.com","default.jpg","on","23/06/2020");
INSERT INTO user_profile_background_image VALUES("50","1","hseal419@gmail.com","default.jpg","on","23/06/2020");
INSERT INTO user_profile_background_image VALUES("51","2","Antimatter@gmail.com","default.jpg","on","23/06/2020");
INSERT INTO user_profile_background_image VALUES("52","3","Mark@gmail.com","default.jpg","on","24/06/2020");
INSERT INTO user_profile_background_image VALUES("53","4","fgfhg@gmailc.com","default.jpg","on","25/06/2020");
INSERT INTO user_profile_background_image VALUES("54","5","eretytey@gmai.ocm","default.jpg","on","25/06/2020");
INSERT INTO user_profile_background_image VALUES("55","6","Warren@gmail.com","default.jpg","on","25/06/2020");
INSERT INTO user_profile_background_image VALUES("56","7","feinty@gmail.com","default.jpg","on","25/06/2020");
INSERT INTO user_profile_background_image VALUES("57","8","rubaremy5@gmail.com","default.jpg","on","25/06/2020");
INSERT INTO user_profile_background_image VALUES("58","9","lolen@gmail.com","default.jpg","on","25/06/2020");
INSERT INTO user_profile_background_image VALUES("59","12","ilanius@gmail.com","default.jpg","on","26/06/2020");
INSERT INTO user_profile_background_image VALUES("60","13","gtman@man.com","default.jpg","on","26/06/2020");
INSERT INTO user_profile_background_image VALUES("61","14","liona@gmail.com","default.jpg","on","26/06/2020");
INSERT INTO user_profile_background_image VALUES("62","15","walkerman@gmail.com","default.jpg","on","26/06/2020");
INSERT INTO user_profile_background_image VALUES("63","16","man@gmail.com","default.jpg","on","27/06/2020");
INSERT INTO user_profile_background_image VALUES("64","17","Ady@gmail.com","default.jpg","on","27/06/2020");
INSERT INTO user_profile_background_image VALUES("65","18","laila@gmail.com","default.jpg","on","28/06/2020");
INSERT INTO user_profile_background_image VALUES("66","19","shoe@gmail.com","default.jpg","on","29/06/2020");
INSERT INTO user_profile_background_image VALUES("67","20","stewart@gmail.com","default.jpg","on","29/06/2020");
INSERT INTO user_profile_background_image VALUES("68","21","Kalima@gmail.com","default.jpg","on","29/06/2020");
INSERT INTO user_profile_background_image VALUES("69","22","Steven@gmail.com","default.jpg","on","30/06/2020");
INSERT INTO user_profile_background_image VALUES("70","25","jona@gmail.com","default.jpg","on","30/06/2020");
INSERT INTO user_profile_background_image VALUES("71","26","Salton@gmail.com","default.jpg","on","30/06/2020");
INSERT INTO user_profile_background_image VALUES("72","27","Gutman@gmail.com","default.jpg","on","30/06/2020");
INSERT INTO user_profile_background_image VALUES("73","28","Markus@gmail.com","default.jpg","on","30/06/2020");
INSERT INTO user_profile_background_image VALUES("74","29","shaker@gmail.com","default.jpg","on","30/06/2020");
INSERT INTO user_profile_background_image VALUES("75","30","mighty@gmail.com","default.jpg","on","30/06/2020");
INSERT INTO user_profile_background_image VALUES("76","31","mars@gmail.com","default.jpg","on","30/06/2020");
INSERT INTO user_profile_background_image VALUES("77","32","Flora@gmail.com","default.jpg","on","01/07/2020");
INSERT INTO user_profile_background_image VALUES("78","33","peacemaker@gmail.com","default.jpg","on","01/07/2020");
INSERT INTO user_profile_background_image VALUES("79","34","Brain@gmail.com","default.jpg","on","01/07/2020");
INSERT INTO user_profile_background_image VALUES("80","35","Rstewart@gmail.com","default.jpg","on","02/07/2020");
INSERT INTO user_profile_background_image VALUES("81","36","jeferson@gmail.com","default.jpg","on","02/07/2020");
INSERT INTO user_profile_background_image VALUES("82","38","Chri250@gmail.com","default.jpg","on","02/07/2020");
INSERT INTO user_profile_background_image VALUES("83","39","las@gmail.com","default.jpg","on","02/07/2020");
INSERT INTO user_profile_background_image VALUES("84","40","Arl@gmail.com","default.jpg","on","03/07/2020");
INSERT INTO user_profile_background_image VALUES("85","41","El2@gmail.com","default.jpg","on","03/07/2020");
INSERT INTO user_profile_background_image VALUES("86","42","annous@gmail.com","default.jpg","on","03/07/2020");
INSERT INTO user_profile_background_image VALUES("87","43","Flo@gmail.com","default.jpg","on","03/07/2020");
INSERT INTO user_profile_background_image VALUES("88","44","alan@gmail.com","default.jpg","on","03/07/2020");
INSERT INTO user_profile_background_image VALUES("89","45","main@gmail.com","default.jpg","on","04/07/2020");
INSERT INTO user_profile_background_image VALUES("90","46","dangerman@gmail.com","default.jpg","off","04/07/2020");
INSERT INTO user_profile_background_image VALUES("91","46","dangerman@gmail.com","IB_background_image1593850872Box--code-wallpaper-4-610x381.png","on","04/07/2020");
INSERT INTO user_profile_background_image VALUES("92","47","Maric@gmail.com","default.jpg","off","04/07/2020");
INSERT INTO user_profile_background_image VALUES("93","0","Maric@gmail.com","IB_background_image1593861822Box--sunset-as-waves-crash-on-rocky-shore.jpg","off","04/07/2020");
INSERT INTO user_profile_background_image VALUES("94","47","Maric@gmail.com","IB_background_image1593861943Box--72658.jpg","off","04/07/2020");
INSERT INTO user_profile_background_image VALUES("95","47","Maric@gmail.com","IB_background_image1593861995Box--city-wallpaper-26-640x360.png","on","04/07/2020");
INSERT INTO user_profile_background_image VALUES("96","48","joe@gmail.com","default.jpg","on","04/07/2020");
INSERT INTO user_profile_background_image VALUES("97","49","lowest@gmail.com","default.jpg","on","04/07/2020");
INSERT INTO user_profile_background_image VALUES("98","50","smoker@gmail.com","default.jpg","on","05/07/2020");
INSERT INTO user_profile_background_image VALUES("99","51","sunday@gmail.com","default.jpg","on","05/07/2020");
INSERT INTO user_profile_background_image VALUES("100","52","hood@gmail.com","default.jpg","on","07/07/2020");
INSERT INTO user_profile_background_image VALUES("101","57","huncho@gmail.com","default.jpg","on","08/07/2020");
INSERT INTO user_profile_background_image VALUES("102","58","sia@gmail.com","default.jpg","on","09/07/2020");
INSERT INTO user_profile_background_image VALUES("103","59","Storm@gmail.com","default.jpg","on","10/07/2020");
INSERT INTO user_profile_background_image VALUES("104","60","laloen@gmail.com","default.jpg","on","10/07/2020");
INSERT INTO user_profile_background_image VALUES("105","61","Greek@gmail.com","default.jpg","on","11/07/2020");
INSERT INTO user_profile_background_image VALUES("106","62","hillo@gmail.com","default.jpg","on","11/07/2020");
INSERT INTO user_profile_background_image VALUES("107","63","gelian@gmail.com","default.jpg","on","11/07/2020");
INSERT INTO user_profile_background_image VALUES("108","64","rogers@gmail.com","default.jpg","on","13/07/2020");
INSERT INTO user_profile_background_image VALUES("109","65","gue@gmail.com","default.jpg","on","13/07/2020");
INSERT INTO user_profile_background_image VALUES("110","66","morg@gmail.com","default.jpg","on","13/07/2020");
INSERT INTO user_profile_background_image VALUES("111","67","kesh@gmailc.om","default.jpg","on","14/07/2020");
INSERT INTO user_profile_background_image VALUES("112","69","aurstin250@gmail.com","default.jpg","on","15/07/2020");
INSERT INTO user_profile_background_image VALUES("113","70","jennifer@gmail.com","default.jpg","on","16/07/2020");
INSERT INTO user_profile_background_image VALUES("114","71","minlaender@gmal.com","default.jpg","on","16/07/2020");
INSERT INTO user_profile_background_image VALUES("115","0","morte@gmail.com","default.jpg","on","17/07/2020");
INSERT INTO user_profile_background_image VALUES("116","73","lilan@gmail.com","default.jpg","on","17/07/2020");
INSERT INTO user_profile_background_image VALUES("117","74","quire@gmail.com","default.jpg","on","18/07/2020");
INSERT INTO user_profile_background_image VALUES("118","0","grequary@gmail.com","default.jpg","on","18/07/2020");
INSERT INTO user_profile_background_image VALUES("119","76","Lewis@gmail.com","default.jpg","on","19/07/2020");
INSERT INTO user_profile_background_image VALUES("120","77","stard@gmail.com","default.jpg","on","19/07/2020");
INSERT INTO user_profile_background_image VALUES("121","78","lousM@gmailc.om","default.jpg","off","20/07/2020");
INSERT INTO user_profile_background_image VALUES("122","78","lousM@gmailc.om","IB_background_image1595232864Box--gm (104).jpg","on","20/07/2020");
INSERT INTO user_profile_background_image VALUES("123","80","greyMark@gmail.com","default.jpg","off","20/07/2020");
INSERT INTO user_profile_background_image VALUES("124","80","greyMark@gmail.com","IB_background_image1595239946Box--sid-ramirez-KjdMuR4_VGI-unsplash.jpg","off","20/07/2020");
INSERT INTO user_profile_background_image VALUES("125","80","greyMark@gmail.com","IB_background_image1595240215Box--marius-masalar-CyFBmFEsytU-unsplash.jpg","on","20/07/2020");



CREATE TABLE `user_profile_image` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` varchar(250) DEFAULT NULL,
  `firstName` varchar(250) DEFAULT NULL,
  `usr_email` varchar(250) NOT NULL,
  `profile_image` varchar(250) DEFAULT NULL,
  `status_image` varchar(250) DEFAULT NULL,
  `created_on` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=219 DEFAULT CHARSET=latin1;

INSERT INTO user_profile_image VALUES("118","1","Manirabona","hseal419@gmail.com","IB_profile_image1592902810Box--gm (125).jpg","1","2020-06-23 11:06:11");
INSERT INTO user_profile_image VALUES("120","2","Muganwa","Antimatter@gmail.com","IB_profile_image1592931580Box--nvidia-outs-geforce-game-ready-graphics-driver-361-43-download-now-497922-2.jpg","1","2020-06-23 06:06:40");
INSERT INTO user_profile_image VALUES("121","3","Mark","Mark@gmail.com","defaultProfileImage.png","0","24/06/2020");
INSERT INTO user_profile_image VALUES("122","3","Mark","Mark@gmail.com","IB_profile_image1592992905Box--emilia-clarke-hd-2017-u1-1366x768.jpg","0","2020-06-24 12:06:46");
INSERT INTO user_profile_image VALUES("123","3","Mark","Mark@gmail.com","IB_profile_image1593065448Box--72652.jpg","1","2020-06-25 08:06:49");
INSERT INTO user_profile_image VALUES("124","4","erttyery","fgfhg@gmailc.com","defaultProfileImage.png","1","25/06/2020");
INSERT INTO user_profile_image VALUES("125","5","typical","eretytey@gmai.ocm","defaultProfileImage.png","1","25/06/2020");
INSERT INTO user_profile_image VALUES("126","6","Rick","Warren@gmail.com","defaultProfileImage.png","1","25/06/2020");
INSERT INTO user_profile_image VALUES("127","7","Fenty","feinty@gmail.com","defaultProfileImage.png","0","25/06/2020");
INSERT INTO user_profile_image VALUES("128","7","Fenty","feinty@gmail.com","IB_profile_image1593084446Box--gm (63).jpg","0","2020-06-25 01:06:26");
INSERT INTO user_profile_image VALUES("129","7","Fenty","feinty@gmail.com","IB_profile_image1593084464Box--gm (144).jpg","0","2020-06-25 01:06:44");
INSERT INTO user_profile_image VALUES("130","7","Fenty","feinty@gmail.com","IB_profile_image1593084488Box--FB_IMG_15876592224218855.jpg","0","2020-06-25 01:06:08");
INSERT INTO user_profile_image VALUES("131","7","Fenty","feinty@gmail.com","IB_profile_image1593084539Box--NASA_fb.jpg","1","2020-06-25 01:06:59");
INSERT INTO user_profile_image VALUES("132","8","rubagumya","rubaremy5@gmail.com","defaultProfileImage.png","1","25/06/2020");
INSERT INTO user_profile_image VALUES("133","9","billiand","lolen@gmail.com","defaultProfileImage.png","1","25/06/2020");
INSERT INTO user_profile_image VALUES("134","10","manirabona","aliene@gmail.com","defaultProfileImage.png","1","26/06/2020");
INSERT INTO user_profile_image VALUES("135","11","Manirabona","mcluadius@gmail.com","defaultProfileImage.png","1","26/06/2020");
INSERT INTO user_profile_image VALUES("136","12","Markus","ilanius@gmail.com","defaultProfileImage.png","1","26/06/2020");
INSERT INTO user_profile_image VALUES("137","13","logical","gtman@man.com","defaultProfileImage.png","0","26/06/2020");
INSERT INTO user_profile_image VALUES("138","13","logical","gtman@man.com","IB_profile_image1593189528Box--Alyssa_Carson.jpg","1","2020-06-26 06:06:48");
INSERT INTO user_profile_image VALUES("139","14","viona","liona@gmail.com","defaultProfileImage.png","1","26/06/2020");
INSERT INTO user_profile_image VALUES("140","15","manirabona","walkerman@gmail.com","defaultProfileImage.png","0","26/06/2020");
INSERT INTO user_profile_image VALUES("141","15","manirabona","walkerman@gmail.com","IB_profile_image1593200412Box--business-women-working.png","1","2020-06-26 09:06:12");
INSERT INTO user_profile_image VALUES("142","16","manirabona","man@gmail.com","defaultProfileImage.png","1","27/06/2020");
INSERT INTO user_profile_image VALUES("144","17","Mudahemuka","Ady@gmail.com","IB_profile_image1593258838Box--siora-photography-VtNSaArmb-o-unsplash.jpg","1","2020-06-27 01:06:59");
INSERT INTO user_profile_image VALUES("146","18","Mayirani","laila@gmail.com","IB_profile_image1593331227Box--hands-typing-code-on-laptop.jpg","1","2020-06-28 10:06:28");
INSERT INTO user_profile_image VALUES("147","19","shoeless","shoe@gmail.com","defaultProfileImage.png","1","29/06/2020");
INSERT INTO user_profile_image VALUES("148","20","George","stewart@gmail.com","defaultProfileImage.png","0","29/06/2020");
INSERT INTO user_profile_image VALUES("149","21","Mike","Kalima@gmail.com","defaultProfileImage.png","0","29/06/2020");
INSERT INTO user_profile_image VALUES("150","21","Mike","Kalima@gmail.com","IB_profile_image1593416736Box--6886467_preview.png","0","2020-06-29 09:06:36");
INSERT INTO user_profile_image VALUES("151","21","Mike","Kalima@gmail.com","IB_profile_image1593420278Box--Geek-Art_net.jpg","1","2020-06-29 10:06:39");
INSERT INTO user_profile_image VALUES("152","20","George","stewart@gmail.com","IB_profile_image1593440000Box--artificial-intelligence-3382507__340.png","1","2020-06-29 04:06:21");
INSERT INTO user_profile_image VALUES("153","22","Steven","Steven@gmail.com","defaultProfileImage.png","1","30/06/2020");
INSERT INTO user_profile_image VALUES("154","23","Steven","stalon@gmail.com","defaultProfileImage.png","1","30/06/2020");
INSERT INTO user_profile_image VALUES("155","24","Dan","Marroson@gmail.com","defaultProfileImage.png","1","30/06/2020");
INSERT INTO user_profile_image VALUES("156","25","Steven","jona@gmail.com","defaultProfileImage.png","1","30/06/2020");
INSERT INTO user_profile_image VALUES("157","26","Steven","Salton@gmail.com","defaultProfileImage.png","0","30/06/2020");
INSERT INTO user_profile_image VALUES("158","26","Steven","Salton@gmail.com","IB_profile_image1593505015Box--gm (84).jpg","1","2020-06-30 10:06:55");
INSERT INTO user_profile_image VALUES("159","27","Melania","Gutman@gmail.com","defaultProfileImage.png","1","30/06/2020");
INSERT INTO user_profile_image VALUES("160","28","Joe","Markus@gmail.com","defaultProfileImage.png","1","30/06/2020");
INSERT INTO user_profile_image VALUES("161","29","Didlos","shaker@gmail.com","defaultProfileImage.png","1","30/06/2020");
INSERT INTO user_profile_image VALUES("162","30","braise","mighty@gmail.com","defaultProfileImage.png","1","30/06/2020");
INSERT INTO user_profile_image VALUES("163","31","Theleza","mars@gmail.com","defaultProfileImage.png","1","30/06/2020");
INSERT INTO user_profile_image VALUES("164","32","Stewart","Flora@gmail.com","defaultProfileImage.png","1","01/07/2020");
INSERT INTO user_profile_image VALUES("165","33","Williams","peacemaker@gmail.com","defaultProfileImage.png","1","01/07/2020");
INSERT INTO user_profile_image VALUES("166","34","Bill","Brain@gmail.com","defaultProfileImage.png","1","01/07/2020");
INSERT INTO user_profile_image VALUES("167","35","Robert","Rstewart@gmail.com","defaultProfileImage.png","1","02/07/2020");
INSERT INTO user_profile_image VALUES("168","36","Robert","jeferson@gmail.com","defaultProfileImage.png","1","02/07/2020");
INSERT INTO user_profile_image VALUES("169","37","Rudahigwa","musinga@gmail.com","defaultProfileImage.png","1","02/07/2020");
INSERT INTO user_profile_image VALUES("170","38","Radar","Chri250@gmail.com","defaultProfileImage.png","0","02/07/2020");
INSERT INTO user_profile_image VALUES("171","38","Radar","Chri250@gmail.com","IB_profile_image1593697327Box--hands-typing-on-laptop.jpg","1","2020-07-02 03:07:07");
INSERT INTO user_profile_image VALUES("172","39","PAC","las@gmail.com","defaultProfileImage.png","0","02/07/2020");
INSERT INTO user_profile_image VALUES("173","39","PAC","las@gmail.com","IB_profile_image1593710190Box--laptop-from-above.jpg","1","2020-07-02 07:07:30");
INSERT INTO user_profile_image VALUES("174","40","Manirabona","Arl@gmail.com","defaultProfileImage.png","1","03/07/2020");
INSERT INTO user_profile_image VALUES("175","41","erineste","El2@gmail.com","defaultProfileImage.png","1","03/07/2020");
INSERT INTO user_profile_image VALUES("176","42","Mukandagije","annous@gmail.com","defaultProfileImage.png","1","03/07/2020");
INSERT INTO user_profile_image VALUES("177","43","George","Flo@gmail.com","defaultProfileImage.png","1","03/07/2020");
INSERT INTO user_profile_image VALUES("178","44","alan","alan@gmail.com","defaultProfileImage.png","1","03/07/2020");
INSERT INTO user_profile_image VALUES("179","45","magnom","main@gmail.com","defaultProfileImage.png","1","04/07/2020");
INSERT INTO user_profile_image VALUES("180","46","Henry","dangerman@gmail.com","defaultProfileImage.png","0","04/07/2020");
INSERT INTO user_profile_image VALUES("181","46","Henry","dangerman@gmail.com","IB_profile_image1593851531Box--6886467_preview.png","1","2020-07-04 10:07:11");
INSERT INTO user_profile_image VALUES("182","47","Chriss","Maric@gmail.com","defaultProfileImage.png","1","04/07/2020");
INSERT INTO user_profile_image VALUES("183","48","eric","joe@gmail.com","defaultProfileImage.png","1","04/07/2020");
INSERT INTO user_profile_image VALUES("184","49","magic","lowest@gmail.com","defaultProfileImage.png","1","04/07/2020");
INSERT INTO user_profile_image VALUES("185","50","rider","smoker@gmail.com","defaultProfileImage.png","1","05/07/2020");
INSERT INTO user_profile_image VALUES("186","51","load","sunday@gmail.com","defaultProfileImage.png","1","05/07/2020");
INSERT INTO user_profile_image VALUES("187","52","Roben","hood@gmail.com","defaultProfileImage.png","1","07/07/2020");
INSERT INTO user_profile_image VALUES("188","56","molin","meg@gmail.com","defaultProfileImage.png","1","08/07/2020");
INSERT INTO user_profile_image VALUES("189","57","Quavo","huncho@gmail.com","defaultProfileImage.png","0","08/07/2020");
INSERT INTO user_profile_image VALUES("190","57","Quavo","huncho@gmail.com","IB_profile_image1594283785Box--khanh-trung-le-TyrQq272WG0-unsplash.jpg","1","2020-07-09 10:07:26");
INSERT INTO user_profile_image VALUES("191","58","Sia","sia@gmail.com","defaultProfileImage.png","0","09/07/2020");
INSERT INTO user_profile_image VALUES("192","58","Sia","sia@gmail.com","IB_profile_image1594288555Box--gm (36).jpg","1","2020-07-09 11:07:55");
INSERT INTO user_profile_image VALUES("193","59","Storm","Storm@gmail.com","defaultProfileImage.png","0","10/07/2020");
INSERT INTO user_profile_image VALUES("194","59","Storm","Storm@gmail.com","IB_profile_image1594361978Box--gm (93).jpg","1","2020-07-10 08:07:39");
INSERT INTO user_profile_image VALUES("195","60","Losvert","laloen@gmail.com","defaultProfileImage.png","0","10/07/2020");
INSERT INTO user_profile_image VALUES("196","60","Losvert","laloen@gmail.com","IB_profile_image1594363295Box--gm (128).jpg","1","2020-07-10 08:07:37");
INSERT INTO user_profile_image VALUES("197","61","Liliane","Greek@gmail.com","defaultProfileImage.png","0","11/07/2020");
INSERT INTO user_profile_image VALUES("198","61","Liliane","Greek@gmail.com","IB_profile_image1594478649Box--gm (91).jpg","1","2020-07-11 04:07:09");
INSERT INTO user_profile_image VALUES("199","62","gillon","hillo@gmail.com","defaultProfileImage.png","1","11/07/2020");
INSERT INTO user_profile_image VALUES("200","63","galaxy","gelian@gmail.com","defaultProfileImage.png","1","11/07/2020");
INSERT INTO user_profile_image VALUES("201","64","Gregory","rogers@gmail.com","defaultProfileImage.png","1","13/07/2020");
INSERT INTO user_profile_image VALUES("202","65","Madrid","gue@gmail.com","defaultProfileImage.png","1","13/07/2020");
INSERT INTO user_profile_image VALUES("203","66","Kenny","morg@gmail.com","defaultProfileImage.png","1","13/07/2020");
INSERT INTO user_profile_image VALUES("204","67","Lalonin","kesh@gmailc.om","defaultProfileImage.png","1","14/07/2020");
INSERT INTO user_profile_image VALUES("205","68","","Game@gmail.com","defaultProfileImage.png","1","14/07/2020");
INSERT INTO user_profile_image VALUES("206","69","Ancle","aurstin250@gmail.com","defaultProfileImage.png","1","15/07/2020");
INSERT INTO user_profile_image VALUES("207","70","Rider","jennifer@gmail.com","defaultProfileImage.png","1","16/07/2020");
INSERT INTO user_profile_image VALUES("208","71","Laerder","minlaender@gmal.com","defaultProfileImage.png","1","16/07/2020");
INSERT INTO user_profile_image VALUES("209","72","derulo","grey@gmail.com","defaultProfileImage.png","1","17/07/2020");
INSERT INTO user_profile_image VALUES("210","73","greyground","lilan@gmail.com","defaultProfileImage.png","1","17/07/2020");
INSERT INTO user_profile_image VALUES("211","74","Puelto","quire@gmail.com","defaultProfileImage.png","0","18/07/2020");
INSERT INTO user_profile_image VALUES("212","74","Puelto","quire@gmail.com","IB_profile_image1595083389Box--52d87e4a6da811e43948ebfd-960-640.jpg","1","2020-07-18 04:07:11");
INSERT INTO user_profile_image VALUES("213","75","lasvelonic","grequary@gmail.com","defaultProfileImage.png","1","18/07/2020");
INSERT INTO user_profile_image VALUES("214","76","george","Lewis@gmail.com","defaultProfileImage.png","1","19/07/2020");
INSERT INTO user_profile_image VALUES("215","77","lewis","stard@gmail.com","defaultProfileImage.png","1","19/07/2020");
INSERT INTO user_profile_image VALUES("216","78","Legaxy","lousM@gmailc.om","defaultProfileImage.png","1","20/07/2020");
INSERT INTO user_profile_image VALUES("217","79","","ton@gmail.com","defaultProfileImage.png","1","20/07/2020");
INSERT INTO user_profile_image VALUES("218","80","Anabell","greyMark@gmail.com","defaultProfileImage.png","1","20/07/2020");



CREATE TABLE `user_question` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_email_owner` varchar(250) NOT NULL,
  `user_email_to` varchar(250) DEFAULT NULL,
  `question_depend` varchar(250) NOT NULL,
  `media_support` varchar(250) DEFAULT NULL,
  `question` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `question_refreshed` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO user_question VALUES("1","peacemaker@gmail.com","someone","all_users","IB_question_image1593590788Box--2046765-the-best-teams-give-their-absolute-best-fit_400_400.png","Why should society feel responsible only for the education of children, and not for the education of all adults of every age?","new","2020-07-01 10:07:28");
INSERT INTO user_question VALUES("2","Brain@gmail.com","someone","all_users","IB_question_image1593599243Box--3.png","The aim of education should be to teach us rather how to think, than what to think — rather to improve our minds, so as to enable us to think for ourselves, than to load the memory with thoughts of other men.","new","2020-07-01 12:07:23");
INSERT INTO user_question VALUES("3","Rstewart@gmail.com","someone","all_users","IB_question_image1593683756Box--preparing-for-travel.jpg","Why do we need to study hard while our parent work hard for us?","new","2020-07-02 11:07:57");
INSERT INTO user_question VALUES("4","dangerman@gmail.com","someone","software development","IB_question_image1593851476Box--7-1.png","Education would be much more effective if its purpose was to ensure that by the time they leave school every boy and girl should know how much they do not know, and be imbued with a lifelong desire to know it.","new","2020-07-04 10:07:16");
INSERT INTO user_question VALUES("6","greyMark@gmail.com","fgfhg@gmailc.com","personal","IB_que_image1595239084Box--john-schnobrich-FlPc9_VocJ4-unsplash.jpg","the way we click on small device","new","2020-07-20 11:07:04");



CREATE TABLE `user_question_likes` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` int(250) NOT NULL,
  `question_identity` int(250) NOT NULL,
  `status_like` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO user_question_likes VALUES("2","33","1","1","2020-07-01 11:07:23");
INSERT INTO user_question_likes VALUES("3","33","2","1","2020-07-01 01:07:26");
INSERT INTO user_question_likes VALUES("4","40","1","1","2020-07-03 06:07:34");
INSERT INTO user_question_likes VALUES("5","66","3","1","2020-07-15 01:07:58");
INSERT INTO user_question_likes VALUES("6","66","2","1","2020-07-15 01:07:00");
INSERT INTO user_question_likes VALUES("7","80","1","1","2020-07-20 06:07:36");



CREATE TABLE `user_question_views` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` varchar(250) NOT NULL,
  `question_identity` int(250) NOT NULL,
  `view_status` int(10) NOT NULL,
  `viewed_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `user_religion_post` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `religion_email` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `media_posted` varchar(250) NOT NULL,
  `media_type` varchar(250) NOT NULL,
  `caption_title` varchar(250) NOT NULL,
  `caption_sub_title` varchar(250) NOT NULL,
  `media_caption` varchar(250) NOT NULL,
  `media_section` varchar(250) NOT NULL,
  `media_continet` varchar(250) NOT NULL,
  `media_side` varchar(250) NOT NULL,
  `post_status_read` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO user_religion_post VALUES("1","Christian@religion.box","intelligentBox@gmail.box","IB_religion_image1594371695Box--dancer-wallpaper-HD1.jpg","jpg","the main poor","poor may course die","the poor in common that course the hint to rush","Christian","american","content","0","2020-07-10 11:07:35");
INSERT INTO user_religion_post VALUES("2","news@religion.box","intelligentBox@gmail.box","IB_religion_image1594373729Box--gm (39).jpg","jpg","gian","thelolsi","sdgadajshj teh maggs","Christian","african","news","0","2020-07-10 11:07:29");
INSERT INTO user_religion_post VALUES("3","Christian@religion.box@religion.box","","IB_religion_image1594406055Box--gm (52).jpg","jpg","the main low","","this low may harm anyone","Christian@religion.box","world","news","0","2020-07-10 08:07:15");
INSERT INTO user_religion_post VALUES("4","Christian@religion.box","laloen@gmail.com","IB_religion_image1594406326Box--23_ford_mustang.jpg","jpg","mustand","no sub title","the loa","Christian","world","news","0","2020-07-10 08:07:47");



CREATE TABLE `user_religion_post_comment` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` varchar(250) NOT NULL,
  `post_identity` varchar(250) NOT NULL,
  `comment` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `comment_status_read` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO user_religion_post_comment VALUES("1","60","2","the intelligent box now days","0","2020-07-10 07:07:42");



CREATE TABLE `user_religion_post_comment_like` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` varchar(250) NOT NULL,
  `comment_identity` varchar(250) NOT NULL,
  `status_like` varchar(250) NOT NULL,
  `status_read` varchar(250) NOT NULL,
  `create_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO user_religion_post_comment_like VALUES("2","60","1","1","1","2020-07-10 08:01:16");



CREATE TABLE `user_religion_post_like` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `user_identity` int(250) NOT NULL,
  `post_identity` int(250) NOT NULL,
  `status_like` int(20) NOT NULL,
  `read_like` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO user_religion_post_like VALUES("1","60","2","1","1","2020-07-10 07:54:34");



CREATE TABLE `user_topic_ideas` (
  `identity` int(250) NOT NULL AUTO_INCREMENT,
  `topic_identity` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `ideas` varchar(250) NOT NULL,
  `ideas_on` varchar(250) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO user_topic_ideas VALUES("1","2","morg@gmail.com","the marina","2020-07-15 04:07:51");
INSERT INTO user_topic_ideas VALUES("2","2","morg@gmail.com","again","2020-07-15 04:07:01");



CREATE TABLE `user_topics` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(250) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `top_sub_title` varchar(250) NOT NULL,
  `topic_media` varchar(250) DEFAULT NULL,
  `topic_description` varchar(250) DEFAULT NULL,
  `topic_area` varchar(250) NOT NULL,
  `executed_date` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO user_topics VALUES("1","intelligentBox@gmail.box","Abraham Lincoln","","IB_topic_image1594219074Box--city-wallpaper-34-640x360.png","Upon the subject of education â€¦ I can only say that I view it as the most important subject which we as a people may be engaged in.","religion","2020-07-08 04:07:54");
INSERT INTO user_topics VALUES("2","intelligentBox@gmail.box","the main","the manh lolen cover","IB_topic_image1594389064Box--gm (157).jpg","the gillaon rilinane","Christian","2020-07-10 03:07:04");

