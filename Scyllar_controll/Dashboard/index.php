<?php 
  session_start();
  if(isset($_SESSION['admin_email'])){
    $admin_email = $_SESSION['admin_email'];
    $admin_name = $_SESSION['name'];

    require_once ("../../Scyllar.php");
    $new_connection = new Scyllar(); ?>
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
  <meta name="robots" content="index, follow" />
  <meta name="apple-mobile-web-app-capable" content="yes">

  <title>intelligentBox</title>

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link href="../../Assets/css/Dashboard.box.css" rel="stylesheet" />

  <!-- external css file/ libraries -->
  <link rel="stylesheet" href="../../Lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Lib/material/css/material-dashboard.css?v=2.1.1">
  <link rel="stylesheet" href="../../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
  <link rel="stylesheet" href="../../Lib/font-awesome/css/font-awesome.min.css">

</head>

<body class="index-page sidebar-collapse">

  <!-- MAIN BODY CONTAIN THREE SECTION -->
  <!-- ========================================================================================================================= -->
  <div class="Dash-body">

    <!-- LEFT SECTION -->
    <!-- =============================================================================================================== -->
    <div class="left-section-database">
      <div class="link-middle-content">
        <ul class="nav browse" role="tablist">
          <li><a class="active" data-toggle="tab" href="#Browse" role="tab">Browse</a></li>
        </ul>
        <div class="title-database">Database</div>
        <div class="left-database-tables">
          <ul class="nav tables" role="tablist" id="tables_list">
            <?php 
            $select_database_table = "SHOW TABLES";
            $execute_tables = mysqli_query($new_connection->Frequency(), $select_database_table);
            while($fetch_tables = mysqli_fetch_assoc($execute_tables)){
                $tables = $fetch_tables['Tables_in_behemoth']; ?>
                <li><a data-toggle="tab" href="#<?php echo $tables; ?>" role="tab"><?php echo $tables; ?></a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- =============================================================================================================== -->

    <!-- MIDDLE SECTION -->
    <!-- ================================================================================================================ -->
    <div class="middle-section-content">

      <!-- ALL TABS CONTROLL -->
      <!-- ================================================================================================================================= -->
      <div class="Browse-content-main tab-content">

        <div class="top-middel-nav position-relative">
          <div><div class="search-users"><i class="fa fa-search mr-2 ml-1"></i><input type="text" name="" id="" placeholder="Search everything"></div></div>
          <div class="count-users">
            <div class="count-student"> Student <i class="fa fa-caret-right"></i> <span id="count_student"> </span></div>
            <div class="count-trainer">Trainer <i class="fa fa-caret-right"></i> <span id="count_trainer"></span></div>
          </div>
          <div class="admin-profile position-relative">
            <div><div class="admin-profile-image"><img src="../../Images/dash_image/Drake-promo-official-768x461.jpg" alt="" width="100%" height="100%"></div></div>
            <div class="name">
              <div><?php echo $admin_name; ?></div>
              <div><?php echo $admin_email; ?></div>
            </div>
            <div class="dropdown-usr-settings">
              <div class="top-status">
                <div class="drop-items">
                  <a href="../../index.php"><i class="fa fa-sign-in"></i> Home site </a>
                </div>
                <div class="drop-items">
                  <a href="../admin.php?logout"><i class="fa fa-power-off"></i> log out system </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="logo-pre">
          <div><i class="fa fa-dashboard"></i> Intelligent Box</div>
        </div>

        <div class="dash-nav-all tab-content">

          <div class="dash-nav-all active tab-pane" id="Browse" role="tabpanel">
            <ul class="nav dashbar" role="tablist">
              <li><a class="active" data-toggle="tab" href="#student" role="tab">Student</a></li>
              <li><a data-toggle="tab" href="#trainer" role="tab">Trianer</a></li>
              <li><a data-toggle="tab" href="#classes" role="tab">Classes</a></li>
              <li><a data-toggle="tab" href="#groups" role="tab">groups</a></li>
              <li><a data-toggle="tab" href="#media" role="tab">Media</a></li>
              <li><a data-toggle="tab" href="#trades" role="tab">Departments / Trades</a></li>
              <li><a data-toggle="tab" href="#question_answers" role="tab">User questions & answers</a></li>
            </ul>

            <div class="dash-nav-all tab-content">

              <!-- tab for student -->
              <!-- =================================================================== -->
              <div class="active tab-pane dash-nav-all" id="student" role="tabpanel">
                <div class="student-list" id="all_student">

                </div>
              </div>
              <!-- end tab student -->
              <!-- ============================================================================= -->

              <!-- tab fro trainer -->
              <!-- ============================================================================= -->
              <div class="tab-pane dash-nav-all" id="trainer" role="tabpanel">
                <div class="position-relative">
                  <!-- <div class="user-config">
                    <button class="add-users">Add trainer</button>
                  </div> -->
                  <!-- add trainer -->
                  <!-- =================================================================================================== -->
                  <div class="add-user-form">
                    <div class="add-trainer">
                      <div class="add-title">Add trainer</div>
                      <div class="input-data" id="input_firstname"><input type="text" name="" id="trainer_firstname" placeholder="Firstname" autocomplete="off"></div>
                      <div class="input-data" id="input_lastname"><input type="text" name="" id="trainer_lastname" placeholder="Lastname" autocomplete="off"></div>
                      <div class="input-data" id="input_email"><input type="text" name="" id="trainer_email" placeholder="Email" autocomplete="off"></div>
                      <div class="trainer_error"></div>
                      <div class="submit-form"><button class="submit-info-btn" onclick="submit_trainer(this)">Submit trainer</button></div>
                    </div>
                  </div>
                  <!-- ==================================================================================================== -->
                </div>
                <div class="student-list" id="trainer_list">

                </div>
              </div>
              <!-- ============================================================================= -->
              
              <!-- tab fro classes -->
              <!-- ============================================================================= -->
              <div class="tab-pane dash-nav-all position-relative" id="classes" role="tabpanel">
                <div class="create-class">
                  <div class="add-title text-left">Create Class</div>
                  <div class="add_photo"><button><i class="fa fa-photo"></i> add photo</button></div>
                  <div class="preview-image"><img src="../../Images/dash_image/teacher-a-stack-of-books.jpg" alt="" width="100%" height="100%"></div>
                  <div class="form-class">
                    <div class="class-input"><input type="text" name="" id="" placeholder="class name"></div>
                    <div class="submit-class"><button class="sub-class">create</button></div>
                  </div>
                </div>

                <div class="defined-class" id="class_list">

                </div>
              </div>
              <!-- ============================================================================= -->

              <!-- tab fro groups -->
              <!-- ============================================================================= -->
              <div class="tab-pane dash-nav-all" id="groups" role="tabpanel">
                <div class="defined-class" id="groups_list">

                </div>
              </div>
              <!-- ============================================================================= -->

              <!-- tab fro media -->
              <!-- ============================================================================= -->
              <div class="tab-pane dash-nav-all" id="media" role="tabpanel">
                  <div class="photo-shared">
                    <div class="defined-class" id="all_media">
  
                    </div>
                  </div>
              </div>
              <!-- ============================================================================= -->

              <!-- tab fro trades -->
              <!-- ============================================================================= -->
              <div class="tab-pane dash-nav-all" id="trades" role="tabpanel">
                <div class="defined-class" id="all_trades">

                </div>
              </div>
              <!-- ============================================================================= -->

              <!-- tab fro question&answers -->
              <!-- ============================================================================= -->
              <div class="tab-pane dash-nav-all" id="question_answers" role="tabpanel">
                <div class="defined-class" id="question_answers">

                </div>
              </div>
              <!-- ============================================================================= -->

            </div>
          </div>
          
          <?php 
            $select_database_table = "SHOW TABLES";
            $execute_tables = mysqli_query($new_connection->Frequency(), $select_database_table);
            while($fetch_tables = mysqli_fetch_assoc($execute_tables)){
              $tables = $fetch_tables['Tables_in_behemoth']; ?>
              <div class="tab-pane dash-nav-all p-4" id="<?php echo $tables; ?>" role="tabpanel">
                <div class="database-tables">
                  <div class="table_name"><?php echo $tables; ?></div>
                  <table id="customers">
                    <tr>
                      <?php 
                        $select_all_tables_data = "SELECT * FROM $tables";
                        $execute_row = mysqli_query($new_connection->Frequency(), $select_all_tables_data);
                        $fetch_row = mysqli_fetch_assoc($execute_row);
                            foreach ($fetch_row as $col => $value) { ?>
                              <th><?php echo $col; ?></th>
                          <?php } ?>
                    </tr>
                    <?php 
                        $select_all_tables_data = "SELECT * FROM $tables";
                        $execute_data = mysqli_query($new_connection->Frequency(), $select_all_tables_data);
                        while($fetch_data = mysqli_fetch_assoc($execute_data)){ ?>
                      <tr>
                        <?php 
                          $fetch_column = mysqli_fetch_assoc($execute_data);
                          foreach ($fetch_column as $row => $values) { ?>
                            <td><?php echo $values; ?></td>
                          <?php } ?>
                      </tr>
                    <?php } ?>
                  </table>
                </div>
              </div>
          <?php } ?>

          <div class="dash-nav-all tab-pane" role="tabpanel" id="history">
            <ul class="nav dashbar" role="tablist">
              <li><a class="active" data-toggle="tab" href="#world_history" role="tab"><i class="fa fa-history"></i> World history</a></li>
              <li><a data-toggle="tab" href="#today_history" role="tab"><i class="fa fa-calendar-o"></i> Today history</a></li>
            </ul>

            <div class="tab-content">
              <div class="active tab-pane dash-nav-all position-relative" role="tabpanel" id="world_history">

                <div class="world-history">
                  <div class="create-story position-relative">
                    <form action="dash_upadates.box.php" method="POST" enctype="multipart/form-data">
                      <div class="create-title">create history news</div>
                      <input type="file" name="story_image" id="story_image" style="display: none">
                      <div class="add_photo"><button type="button" id="choose_button" onclick="triggerInputFile_story()"><i class="fa fa-photo"></i> add photo</button></div>
                      <div class="image-preview" id="image-preview">
                        <img src="../images/texture-2870745__340.jpg" id="get_image" alt="" width="100%" height="100%">
                      </div>
                      <div class="add-text">
                        <div class="add-story-title"><select name="select_section" id="select_option">
                          <option value="history">World history</option>
                          <option value="today_in_history">Today in history</option>
                        </select></div>
                        <div class="add-story-title"><select name="history_side" id="select_option">
                          <option value="african">African</option>
                          <option value="american">American</option>
                          <option value="Asian">Asian</option>
                          <option value="europian">Europian</option>
                        </select></div>
                        <div class="add-story-title"><textarea name="story_title" id="story_title" cols="30" rows="1" placeholder="Story title"></textarea></div>
                        <div class="add-story-title"><textarea name="story_sub_title" id="story_sub_title" cols="30" rows="1" placeholder="Story sub title"></textarea></div>
                        <div class="add-story-desc"><textarea name="story_desc" id="story_desc" cols="30" rows="5" placeholder="Story desc"></textarea></div>
                      </div>
                      <div class="submit-story"><button type="submit" name="submit_story"><i class="fa fa-share-alt"></i> Share story</button></div>
                    </form>
                  </div>
                </div>

                <div class="current-history-found">
                  <div class="defined-class" id="history_list">

                  </div>
                </div>

              </div>

              <!-- today in history -->
              <!-- ============================================================================================= -->
              <div class="tab-pane dash-nav-all position-relative" role="tabpanel" id="today_history">
                <div class="current-history-found">
                  <div class="defined-class" id="today_in_history">

                  </div>
                </div>
              </div>
            </div>
            <!-- end today inhistory -->
            <!-- ============================================================================================== -->
          </div>

          <div class="dash-nav-all tab-pane" role="tabpanel" id="religion">
            <ul class="nav dashbar" role="tablist">
              <li><a class="active" data-toggle="tab" href="#all_religion" role="tab">All religion</a></li>
              <li><a data-toggle="tab" href="#topics" role="tab">Topics</a></li>
              <li><a data-toggle="tab" href="#news" role="tab">News</a></li>
              <li><a data-toggle="tab" href="#religion_content" role="tab">Religion content</a></li>
            </ul>

            <div class="tab-content">
              <!-- all relgion -->
              <!-- ============================================================= -->
              <div class="active dash-nav-all tab-pane" role="tabpanel" id="all_religion">

                <!-- every religion -->
                <!-- ============================================================================================================ -->
                <div class="every-religion d-flex">
                    <div class="left-section mr-2">
                        <!-- 1 quotes -->
                        <div class="q1-quotes">
                            <div class="d-flex">
                                <div class="">
                                    <div class="quote-img"><img src="../../Images/religions/each-religion/christian/enoc-valenzuela-WJolaNbXt90-unsplash.jpg" alt="" width="100%" height="100%"></div>
                                    <div class="quote-img"><img src="../../Images/religions/each-religion/christian/aaron-burden-H8s0PF2rcQs-unsplash.jpg" alt="" width="100%" height="100%"></div>
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
                                                $(".view_chris").load("dash_content.box.php", {
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
                                                $("#news_chris").load("dash_content.box.php", {
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
                        <img src="../../Images/religions/each-religion/christian/intro.jpg" alt="" width="100%" height="100%">
                        <a style="color: black" id="1" onclick="submit_view(this)"><div class="join"><i class="fa fa-plus"></i></div></a>
                        <script>     
                            function submit_view(obj){
                                var post_identity_row = obj.id;
                                var requestNews = document.getElementById("hiddenEmail").value;
                                $(document).ready(function(){
                                    $(this).load("dash_content.box.php", {
                                        getUser_post_identity: post_identity_row
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
                                <div class="">
                                    <div class="quote-img"><img src="../../Images/religions/each-religion/islam/haidan-Az_mSeq7vQQ-unsplash.jpg" alt="" width="100%" height="100%"></div>
                                    <div class="quote-img"><img src="../../Images/religions/each-religion/islam/syed-hussaini-ZGkyggqS8Io-unsplash.jpg" alt="" width="100%" height="100%"></div>
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
                                                $(".view_isl").load("dash_content.box.php", {
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
                                                $("#news_isl").load("dash_content.box.php", {
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
                        <img src="../../Images/religions/each-religion/islam/mhrezaa-qYUdX2ET2o0-unsplash.jpg" alt="" width="100%">
                        <a style="color: black" id="2" onclick="submit_view_islam(this)"><div class="join"><i class="fa fa-plus"></i></div></a>
                        <script>     
                            function submit_view_islam(obj){
                                var post_identity_row = obj.id;
                                var requestNews = document.getElementById("hiddenEmail").value;
                                $(document).ready(function(){
                                    $(this).load("dash_content.box.php", {
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
                              <div class="">
                                  <div class="quote-img"><img src="../../Images/religions/each-religion/budhism/lightscape-1xMFU_F-tJ4-unsplash.jpg" alt="" width="100%" height="100%"></div>
                                  <div class="quote-img"><img src="../../Images/religions/each-religion/budhism/tester-Tyvg1zigZ14-unsplash.jpg" alt="" width="100%" height="100%"></div>
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
                                              $("#vistors-view").load("dash_content.box.php", {
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
                                              $("#news_buddhi").load("dash_content.box.php", {
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
                      <img src="../../Images/religions/each-religion/budhism/sacha-styles-cLYotY2zfrs-unsplash.jpg" alt="" width="100%">
                      <a style="color: black" id="3" onclick="submit_view_buddh(this)"><div class="join"><i class="fa fa-plus"></i></div></a>
                      <script>     
                          function submit_view_buddh(obj){
                              var post_identity_row = obj.id;
                              var requestNews = document.getElementById("hiddenEmail").value;
                              $(document).ready(function(){
                                  $(this).load("dash_content.box.php", {
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
                                <div class="">
                                    <div class="quote-img"><img src="../../Images/religions/each-religion/hinduism/shaouraav-shreshtha-jB7zLsOMWCk-unsplash.jpg" alt="" width="100%" height="100%"></div>
                                    <div class="quote-img"><img src="../../Images/religions/each-religion/hinduism/marcus-lewis-OJ6LOiMcQ5k-unsplash.jpg" alt="" width="100%" height="100%"></div>
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
                                                $("#visitors_hindu").load("dash_content.box.php", {
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
                                                $("#news_hindu").load("dash_content.box.php", {
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
                        <img src="../../Images/religions/each-religion/hinduism/jose-luis-sanchez-pereyra-EJGNv7UFDKM-unsplash.jpg" alt="" width="100%">
                        <a style="color: black" id="5" onclick="submit_view_hindu(this)"><div class="join"><i class="fa fa-plus"></i></div></a>
                        <script>     
                            function submit_view_hindu(obj){
                                var post_identity_row = obj.id;
                                var requestNews = document.getElementById("hiddenEmail").value;
                                $(document).ready(function(){
                                    $(this).load("dash_content.box.php", {
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
                                <div class="">
                                    <div class="quote-img"><img src="../../Images/religions/each-religion/judaism/judaism-cont.jpg" alt="" width="100%" height="100%"></div>
                                    <div class="quote-img"><img src="../../Images/religions/each-religion/judaism/african.jpg" alt="" width="100%" height="100%"></div>
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
                                                $("#visitors_jud").load("dash_content.box.php", {
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
                                                $("#news_jud").load("dash_content.box.php", {
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
                        <img src="../../Images/religions/each-religion/judaism/main-image.jpg" alt="" width="100%">
                        <a style="color: black" id="6" onclick="submit_view_jud(this)"><div class="join"><i class="fa fa-plus"></i></div></a>
                        <script>     
                            function submit_view_jud(obj){
                                var post_identity_row = obj.id;
                                var requestNews = document.getElementById("hiddenEmail").value;
                                $(document).ready(function(){
                                    $(this).load("dash_content.box.php", {
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

              </div>
              <!-- ============================================================== -->

              <!-- topics -->
              <!-- ============================================================== -->
              <div class="dash-nav-all tab-pane" role="tabpanel" id="topics">
                <div class="religional-topics position-relative">
                  <div class="world-history">
                    <div class="create-story position-relative">
                      <form action="dash_upadates.box.php" method="POST" enctype="multipart/form-data">
                        <div class="create-title">Create topics</div>
                        <input type="file" name="image_file" id="image_file" style="display: none;">
                        <div class="add_photo"><button type="button" onclick="triggerTopics()"><i class="fa fa-photo"></i> add photo</button></div>
                        <div class="image-preview" id="Topics_image">
                          <img src="" id="image_pre" alt="" width="100%" height="100%">
                        </div>
                        <div class="add-text">
                          <div class="add-story-title"><select name="section_religion_topics" id="">
                            <option value="Christian">Christian</option>
                            <option value="islam">Islam</option>
                            <option value="irreligious">irreligious</option>
                            <option value="Hinduism">Hinduism</option>
                            <option value="Budhism">Budhism</option>
                            <option value="Judaism">Judaism</option>
                          </select></div>
                          <div class="add-story-title"><textarea name="topics_title" id="topics_title" cols="30" rows="2" placeholder="Topic title"></textarea></div>
                          <div class="add-story-title"><textarea name="topics_sub_title" id="topics_sub_title" cols="30" rows="2" placeholder="Topic sub title"></textarea></div>
                          <div class="add-story-desc"><textarea name="topics_desc" id="topics_desc" cols="30" rows="10" placeholder="Topic desc"></textarea></div>
                        </div>
                        <div class="submit-story"><button type="submit" name="submit_topics"><i class="fa fa-share-alt"></i> Share story</button></div>
                      </form>
                    </div>
                  </div>
                  <div class="defined-class" id="topics_area">

                  </div>
                </div>
              </div>
              <!-- =============================================================== -->

               <!-- news -->
              <!-- ============================================================== -->
              <div class="dash-nav-all tab-pane position-relative" role="tabpanel" id="news">
                <div class="story_news" id="news_uploaded">
                  
                </div>
              </div>
              <!-- =============================================================== -->

              <!-- all relgion content -->
              <!-- ========================================================================== -->
              <div class="dash-nav-all tab-pane position-relative" role="tabpanel" id="religion_content">
                <div class="world-history">
                  <div class="create-story position-relative">
                    <div class="create-title">Share news <i class="fa fa-newspaper-o"></i></div>
                    <div class="add_photo"><button type="button" id="" onclick="trigger_content()"><i class="fa fa-photo"></i> add photo</button></div>
                    <div class="image-preview" id="preview_content_image">
                      <img src="" id="preview_image_continet" alt="" width="100%" height="100%">
                    </div>
                    <form action="dash_upadates.box.php" method="POST" enctype="multipart/form-data">
                      <div class="add-text">
                        <input type="file" name="content_images" id="content_images" style="display: none;">
                        <div class="add-story-title"><select name="section_continet" id="">
                          <option value="african">African</option>
                          <option value="american">American</option>
                          <option value="asian">Asian</option>
                          <option value="europian">Europian</option>
                        </select></div>
                        <div class="add-story-title"><select name="section_religion" id="">
                          <option value="Christian">Christian</option>
                          <option value="islam">Christian</option>
                          <option value="irreligious">irreligious</option>
                          <option value="Hinduism">Hinduism</option>
                          <option value="Budhism">Budhism</option>
                          <option value="Judaism">Judaism</option>
                          <option value="news">news</option>
                        </select></div>
                        <div class="add-story-title"><select name="section_side" id="">
                          <option value="content">Content</option>
                          <option value="news">news</option>
                        </select></div>
                        <div class="add-story-title"><textarea name="content_title" id="" cols="30" rows="1" placeholder="Content title"></textarea></div>
                        <div class="add-story-title"><textarea name="content_sub_title" id="" cols="30" rows="1" placeholder="Content sub title"></textarea></div>
                        <div class="add-story-desc"><textarea name="content_desc" id="" cols="30" rows="5" placeholder="Content desc"></textarea></div>
                      </div>
                      <div class="submit-story"><button type="submit" name="submit_content"><i class="fa fa-share-alt"></i> Share Content</button></div>
                    </form>
                  </div>
                </div>
                <div class="story_news" id="content_list_religion">
                  
                </div>
              </div>
              <!-- ========================================================================== -->

            </div>
          </div>

          <div class="dash-nav-all tab-pane" role="tabpanel" id="world">
            <ul class="nav dashbar" role="tablist">
              <li><a class="active" data-toggle="tab" href="#global_news" role="tab"><i class="fa fa-newspaper-o"></i> Global news</a></li>
              <li><a data-toggle="tab" href="#top_stories" role="tab"><i class="fa fa-sort-numeric-asc"></i> Top stories</a></li>
            </ul>
            <div class="tab-content">
              <!-- ALL COMMON NEWS -->
              <!-- ===================================================== -->
              <div class="active dash-nav-all tab-pane position-relative" role="tabpanel" id="global_news">
                <div class="world-history">
                  <div class="create-story position-relative">
                    <div class="create-title">Share news <i class="fa fa-newspaper-o"></i></div>
                    <div class="add_photo"><button type="button" id="" onclick="triggerWorldNews()"><i class="fa fa-photo"></i> add photo</button></div>
                    <div class="image-preview" id="preview_world_news">
                      <img src="" id="preview_new" alt="" width="100%" height="100%">
                    </div>
                    <form action="dash_upadates.box.php" method="POST" enctype="multipart/form-data">
                      <div class="add-text">
                        <input type="file" name="World_news_images" id="World_news_images" style="display: none;">
                        <div class="add-story-title"><select name="continet" id="">
                          <option value="african">African</option>
                          <option value="American">American</option>
                          <option value="Asian">Asia</option>
                          <option value="Europian">Europe</option>
                          <option value="top_story">Top story</option>
                          <option value="world">world</option>
                        </select></div>
                        <div class="add-story-title"><textarea name="world_news_title" id="" cols="30" rows="2" placeholder="News title"></textarea></div>
                        <div class="add-story-desc"><textarea name="world_news_desc" id="" cols="30" rows="10" placeholder="News desc"></textarea></div>
                      </div>
                      <div class="submit-story"><button type="submit" name="submit_world_news"><i class="fa fa-share-alt"></i> Share News</button></div>
                    </form>
                  </div>
                </div>
                <div class="defined-class" id="world_news_trend">

                </div>
              </div>
              <!-- ===================================================== -->

              <!-- TOP STORIES -->
              <!-- ======================================================= -->
              <div class="dash-nav-all tab-pane" role="tabpanel" id="top_stories">
                <div class="defined-class" id="select-top-story">
    
                 
                </div>
              </div>
              <!-- ======================================================= -->
            </div>
          </div>

          <div class="dash-nav-all tab-pane" role="tabpanel" id="schools">
            <span>schools</span>
          </div>

        </div>

      </div>
      <!-- ================================================================================================================================= -->
    </div>
    <!-- ================================================================================================================ -->

    <!-- RIGHT SECTION -->
    <!-- ================================================================================================================ -->
    <div class="right-section-controller">
      <div class="admin-addition">
        <div class="ad-title">Global Addition</div>

        <ul class="nav addition" role="tablist">

          <li><a class="nav-link" data-toggle="tab" href="#history" role="tab">
              <div class="world-creater">
                <div class="creater-history">
                  <div class="profile-image-create"><img src="../../Images/dash_image/texture-2870745__340.jpg" alt="" width="100%"
                      height="100%"></div>
                  <div class="create-detail">
                    <div class="opri-name">World History</div>
                    <div class="pre-posts">World story</div>
                    <div class="today-history">Today in history </div>
                  </div>
                </div>
              </div>
            </a></li>

          <li><a class="nav-link" data-toggle="tab" href="#religion" role="tab">
              <div class="world-creater">
                <div class="creater-history">
                  <div class="profile-image-create"><img src="../../Images/dash_image/religion.jpg" alt="" width="100%" height="100%">
                  </div>
                  <div class="create-detail">
                    <div class="opri-name">World Religion</div>
                    <div class="pre-posts">Topics </div>
                    <div class="top-story">news </div>
                    <div class=""></div>
                  </div>
                </div>
              </div>
            </a></li>

          <li><a class="nav-link" data-toggle="tab" href="#world" role="tab">
              <div class="world-creater">
                <div class="creater-history">
                  <div class="profile-image-create"><img src="../../Images/dash_image/world_news.jpg" alt="" width="100%"
                      height="100%"></div>
                  <div class="create-detail">
                    <div class="opri-name">World News</div>
                    <div class="pre-posts">Story</div>
                    <div class="top-story">Top story </div>
                    <div class=""></div>
                  </div>
                </div>
              </div>
            </a></li>

          <li><a class="nav-link" data-toggle="tab" href="#schools" role="tab">
              <div class="world-creater">
                <div class="creater-history">
                  <div class="profile-image-create"><img src="../../Images/dash_image/teacher-a-stack-of-books.jpg" alt=""
                      width="100%" height="100%"></div>
                  <div class="create-detail">
                    <div class="opri-name">Schools advertize</div>
                    <div class="pre-posts">Schools 456</div>
                    <div class="top-story">Ads 46</div>
                    <div class=""></div>
                  </div>
                </div>
              </div>
            </a></li>
        </ul>

        <div class="backup ml-auto mr-auto">
          <a id="slide" onclick="backupDatabase(obj)">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Data Backup
          </a>
        </div>

        <!-- backed database file -->
        <!-- ================================================================================================= -->
        <div class="backedup_files ml-auto mr-auto">
          <div class="bcked">
            <div class="file-title">Backedup database files</div>
            <ul class="files" id="files_backed">

            </ul>
          </div>
        </div>
        <!-- ================================================================================================== -->

      </div>
    </div>
    <!-- ================================================================================================================= -->

  </div>
  <!-- ============================================================================================================================== -->


  <!-- javascript external file, type js  and libraries-->
  <!-- =============================================================================================================================== -->
  <script src="../../Assets/js/video_controll.box.js"></script>
  <script src="../../Assets/js/Dash_contents.js"></script>

  <script src="../../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../../Lib/jquery/jquery.min.js"></script>
  <script src="../../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
  <script src="../../Lib/now-ui-kit/now-ui-kit.js"></script>
  <script src="../../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
  <script>
    $(document).ready(function () {
      //init DateTimePickers
      md.initFormExtendedDatetimepickers();
    });
  </script>
  <!-- end libraries -->
  <!-- ========================================================================================================================== -->
</body>
</html>
<?php } ?>