<?php 
  session_start();
  if(isset($_SESSION['Email'])){
      $Session_email_call = $_SESSION['Email'];
      $firstName = $_SESSION['Firstname'];
      $lastName = $_SESSION['Lastname'];
      $user_title = $_SESSION['title'];

      if(isset($_REQUEST['group'])){
        $url_page_data = $_REQUEST['group'];
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
       <link rel="stylesheet" href="../Assets/css/group_admin.box.css">

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
    <?php 
        // INITIALIZE DATABASE CONNECTION
        // =====================================================================================================
        require_once ("../Scyllar.php");
        $new_connection = new Scyllar();
        // =====================================================================================================

        // UNCLASSFIED VARIABLE
        // =====================================================================================================
        $select_group_info = "SELECT * FROM user_groups WHERE url_encode='$url_page_data'";
        $execute_group_info = mysqli_query($new_connection->Frequency(), $select_group_info);
        $fetch_info = mysqli_fetch_assoc($execute_group_info);
            $group_image = $fetch_info['group_profile_image'];
            $group_name = $fetch_info['group_name'];
            $group_bio = $fetch_info['group_bio'];
            $group_privacy = $fetch_info['group_privacy'];
            $creater = $fetch_info['email']; 
            $creater_firstname = $fetch_info['firstName'];
            $creater_lastname = $fetch_info['lastName'];  
            $group_identity = $fetch_info['identity']; 
         
        // ======================================================================================================

        // INTERFACE CALLED GROUP_PAGE
        // ======================================================================================================
        interface group_Page {
            public function creater_image ($E_mail);
        }

        // CLASS CONTAIN ALL METHORD OF THIS PAGE
        // ======================================================================================================
        class Group_Info extends Scyllar {

            // select creater profile image
            // ==================================================================================================
            public function creater_image($email){
                $select_profile_image = "SELECT * FROM user_profile_image WHERE usr_email='$email' AND status_image='1'";
                $execute_profile_image = mysqli_query($this->Frequency(), $select_profile_image);
                $fetch_profile_image = mysqli_fetch_assoc($execute_profile_image);
                    $profile_image =  $fetch_profile_image['profile_image'];
                return $profile_image;
            }
        }
        // =====================================================================================================

        $new_info = new Group_Info();
        ?>
         
            <!-- Section that will hold header -->
            <!-- ================================================================================================================================== -->
            <!-- ================================================================================================================================== -->
            <!-- ================================================================================================================================== -->
            <div class="header-holder">
                <?php require_once ("../header/header.php"); ?>
            </div>
            <!-- end header section -->
            <!-- =================================================================================================================================== -->
            <!-- =================================================================================================================================== -->
            <!-- =================================================================================================================================== -->


            <!-- start body section -->
            <!-- ================================================================================================================================ -->
            <!-- ================================================================================================================================ -->
            <!-- ================================================================================================================================ -->
            <div class="body-section mt-5">
                <div class=" d-flex align-content-center align-items-center alignment">

                    <!-- GLOBAL JS EMAIL -->
                    <input type="hidden" name="" id="hiddenEmail" value="<?php echo $creater; ?>">
                    <input type="hidden" name="" id="hiddenIdentity" value="<?php echo $group_identity; ?>">
                    <!-- END GLOBAL EMAIL -->


                    <!-- admin panel tools -->
                    <!-- =================================================================================================================================== -->
                    <!-- =================================================================================================================================== -->
                    <div class="admin-panel">
                        <div class="panel-holder">

                            <!-- user present admin panel -->
                            <!-- ====================================================================================================================== -->
                            <div class="group-icon">
                                <div class="group-image"><div class="pre-group-image"><img src="<?php echo '../Images/groups/'.$group_image; ?>" alt="" width="100%" height="100%"></div></div>
                                <div class="group-name-admin">
                                    <div class="group-name"><?php echo $group_name; ?></div>
                                    <div class="the-owner">
                                        <div class="belong">By</div>
                                        <div><div class="admin-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$new_info->creater_image($creater); ?>" alt="" width="100%" height="100%"></div></div>
                                        <div class="admin-name"><?php echo $creater_firstname; ?> <?php echo $creater_lastname; ?></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end user present panel -->
                            <!-- ======================================================================================================================== -->

                            <!-- configuration area -->
                            <!-- ========================================================================================================================= -->
                            <div class="configuration">
                                <div class="title-conf"><i class="fa fa-cogs"></i> Admin tools</div>
                                <div class="list-conf">
                                
                                    <ul class="nav admin-tools-list d-table" role="tablist">
                                        <li><a class="active" data-toggle="tab" href="#description" role="tab">
                                            <div class="each-conf">
                                                <div class="icon-pre-conf-type"><i class="fa fa-address-card-o"></i></div>
                                                <div class="conf-title">Edit group description</div>
                                            </div>
                                        </a></li>
                                        <li><a class="" data-toggle="tab" href="#Challenge" role="tab">
                                            <div class="each-conf">
                                                <div class="icon-pre-conf-type"><i class="fa fa-superpowers"></i></div>
                                                <div class="conf-title">Challenge Requests</div>
                                                <div id="count_challenge"></div>
                                            </div>
                                        </a></li>
                                        <li><a class="" data-toggle="tab" href="#Challenge_create" role="tab">
                                            <div class="each-conf">
                                                <div class="icon-pre-conf-type"><i class="fa fa-plus"></i></div>
                                                <div class="conf-title">Create challenge</div>
                                            </div>
                                        </a></li>
                                        <li><a class="" data-toggle="tab" href="#Member-request" role="tab">
                                            <div class="each-conf">
                                                <div class="icon-pre-conf-type"><i class="fa fa-users"></i></div>
                                                <div class="conf-title">Outside User Requests</div>
                                                <!-- <div class="counter-request"><span>5</span></div> -->
                                            </div>
                                        </a></li>
                                        <!-- <li><a class="" data-toggle="tab" href="#Membership" role="tab">  
                                            <div class="each-conf">
                                                <div class="icon-pre-conf-type"><i class="fa fa-user-secret"></i></div>
                                                <div class="conf-title">Raised member Questions</div>
                                                <div class="counter-request"><span>790</span></div>
                                            </div>
                                        </a></li> -->


                                        <!-- <div class="each-conf" onclick="document.getElementById('settings_bill').style.display = 'block'">
                                            <div class="icon-pre-conf-type"><i class="fa fa-cog"></i></div>
                                            <div class="conf-title">Settings and Group Info</div>
                                            <div class="settings-and-info" id="settings_bill">
                                                <div class="settings-pre">
                                                    Settings and Group Info 
                                                    <div><i class="fa fa-times" onclick="document.getElementById('settings_bill').style.display = 'none'"></i></div>
                                                </div>
                                                <div class="setting-list">

                                                    <div class="each-setting">
                                                        <div class="title-settings">Group Name</div>
                                                        <div class="reply-setting">Intelligent People</div>
                                                    </div>
                                                    <div class="each-setting">
                                                        <div class="title-settings">Edit Profile photo</div>
                                                    </div>
                                                   
                                                    <div class="each-setting">
                                                        <div class="title-settings">Group Privacy</div>
                                                        <div class="reply-setting"><i class="fa fa-globe mr-1"></i> Public</div>
                                                    </div>
                                                    <div class="each-setting">
                                                        <div class="title-settings">Who can recieve user requests</div>
                                                        <div class="reply-setting">Members of group</div>
                                                    </div>
                                                    <div class="each-setting">
                                                        <div class="title-settings">Who can post in this group</div>
                                                        <div class="reply-setting">Everyone</div>
                                                    </div>
                                                    <div class="each-setting">
                                                        <div class="title-settings">Who can see group description</div>
                                                        <div class="reply-setting">Group member</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="each-conf" onclick="document.getElementById('confum_delete').style.display = 'block'">
                                            <div class="icon-pre-conf-type"><i class="fa fa-sign-out"></i></div>
                                            <div class="conf-title">Exit Group</div>
                                            <div class="confum_delete" id="confum_delete">
                                                <div class="conf-msg">Are you sure you want to leave this group ?</div>
                                                <div class="conf-option">
                                                    <div class="no"><button onclick="document.getElementById('confum_delete').style.display = 'none'">No</button></div>
                                                    <div class="yes"><button id="<?php echo $url_page_data; ?>" onclick="delete_group(this)">Yes</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                    
                                </div>
                            </div>
                            <!-- end configuration -->
                            <!-- =========================================================================================================================== -->
                            
                        </div>
                    </div>
                    <!-- end panel tools -->
                    <!-- ================================================================================================================================== -->
                    <!-- ================================================================================================================================== -->

                    <!-- ADMIN PANEL ON SMALL DEVICE -->
                    <!-- ======================================================================================================================================== -->
                    <!-- ======================================================================================================================================== -->
                    <div id="smallAdmin" class="smallAdmin">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                        <div class="panel-holder">
                            <!-- user present admin panel -->
                            <!-- ====================================================================================================================== -->
                            <div class="group-icon">
                                <div class="group-image"><div class="pre-group-image"><img src="<?php echo '../Images/groups/'.$group_image; ?>" alt="" width="100%" height="100%"></div></div>
                                <div class="group-name-admin">
                                    <div class="group-name"><?php echo $group_name; ?></div>
                                    <div class="the-owner">
                                        <div class="belong">By</div>
                                        <div><div class="admin-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$new_info->creater_image($creater); ?>" alt="" width="100%" height="100%"></div></div>
                                        <div class="admin-name"><?php echo $creater_firstname; ?> <?php echo $creater_lastname; ?></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end user present panel -->
                            <!-- ======================================================================================================================== -->

                            <!-- configuration area -->
                            <!-- ========================================================================================================================= -->
                            <div class="configuration">
                                <div class="title-conf"><i class="fa fa-cogs"></i> Admin tools</div>
                                <div class="list-conf">
                                    <ul class="nav nav-tabs admin-tools-list d-table" role="tablist">
                                        <li><a class="active" data-toggle="tab" href="#description" role="tab">
                                            <div class="each-conf">
                                                <div class="icon-pre-conf-type"><i class="fa fa-address-card-o"></i></div>
                                                <div class="conf-title">Edit group description</div>
                                            </div>
                                        </a></li>
                                        <li><a class="" data-toggle="tab" href="#Challenge" role="tab">
                                            <div class="each-conf">
                                                <div class="icon-pre-conf-type"><i class="fa fa-superpowers"></i></div>
                                                <div class="conf-title">Challenge Requests</div>
                                                <div class="counter-request"><span>79</span></div>
                                            </div>
                                        </a></li>
                                        <li><a class="" data-toggle="tab" href="#Challenge_create" role="tab">
                                            <div class="each-conf">
                                                <div class="icon-pre-conf-type"><i class="fa fa-plus"></i></div>
                                                <div class="conf-title">Create challenge</div>
                                            </div>
                                        </a></li>
                                        <li><a class="" data-toggle="tab" href="#Member-request" role="tab">
                                            <div class="each-conf">
                                                <div class="icon-pre-conf-type"><i class="fa fa-users"></i></div>
                                                <div class="conf-title">Outside User Requests</div>
                                                <!-- <div class="counter-request"><span>5</span></div> -->
                                            </div>
                                        </a></li>
                                        <!-- <li><a class="" data-toggle="tab" href="#Membership" role="tab">  
                                            <div class="each-conf">
                                                <div class="icon-pre-conf-type"><i class="fa fa-user-secret"></i></div>
                                                <div class="conf-title">Raised member Questions</div>
                                                <div class="counter-request"><span>790</span></div>
                                            </div>
                                        </a></li> -->

                                        <!-- <div class="each-conf" onclick="document.getElementById('settings-and-information').style.display = 'block'">
                                            <div class="icon-pre-conf-type"><i class="fa fa-cog"></i></div>
                                            <div class="conf-title">Settings and Group Info</div>
                                            <div class="settings-and-info" id="settings-and-information">
                                                <div class="settings-pre">
                                                    Settings and Group Info 
                                                    <div><i class="fa fa-times" onclick="document.getElementById('settings-and-information').style.display = 'none'"></i></div>
                                                </div>
                                                <div class="setting-list">

                                                    <div class="each-setting">
                                                        <div class="title-settings">Group Name</div>
                                                        <div class="reply-setting">Intelligent People</div>
                                                    </div>
                                                    <div class="each-setting">
                                                        <div class="title-settings">Edit Cover photo</div>
                                                    </div>
                                                    <div class="each-setting">
                                                        <div class="title-settings">Group Description</div>
                                                        <div class="reply-setting group-description-settings">
                                                            No body learn without commitment
                                                        </div>
                                                    </div>
                                                    <div class="each-setting">
                                                        <div class="title-settings">Group Privacy</div>
                                                        <div class="reply-setting"><i class="fa fa-globe mr-1"></i> Public</div>
                                                    </div>
                                                    <div class="each-setting">
                                                        <div class="title-settings">Who can recieve user requests</div>
                                                        <div class="reply-setting">Members of group</div>
                                                    </div>
                                                    <div class="each-setting">
                                                        <div class="title-settings">Who can post in this group</div>
                                                        <div class="reply-setting">Everyone</div>
                                                    </div>
                                                    <div class="each-setting">
                                                        <div class="title-settings">Who can see group description</div>
                                                        <div class="reply-setting">Group member</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="each-conf">
                                            <div class="icon-pre-conf-type"><i class="fa fa-sign-out"></i></div>
                                            <div class="conf-title">Exit Group</div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <!-- end configuration -->
                            <!-- =========================================================================================================================== -->
                        </div>
                    </div>
                    <!-- END SMALL DEVICE NOTICE -->
                    <!-- ======================================================================================================================================== -->
                    <!-- ======================================================================================================================================== -->

                    <!-- left-side-content -->
                    <!-- =================================================================================================================================== -->
                    <!-- =================================================================================================================================== -->
                    <div class="left-side col-xs-12 col-sm-12 col-md-6">

                        <div class="left-holder">

                            <!-- first top backgrounnd image and dow content -->
                            <!-- ===================================================================================================================== -->
                            <div class="top-section">
                                <div class="top-background position-relative"><img src="<?php echo '../Images/groups/'.$group_image; ?>" width="100%" height="100%"></div>
                                <div class="group-top-detail">
                                    <div class="name-search position-relative">
                                        <div class="group-name-title d-flex"><i class="fa fa-align-justify mr-2" onclick="openNav()"></i> <i class="fa fa-align-left mr-2"></i><?php echo $group_name; ?></div>
                                        <div class="d-flex">
                                            <!-- popup discovery -->
                                            <!-- ============================================================================================================================================ -->
                                            <div class="position-relative">
                                                <div onclick="document.getElementById('discover').style.display = 'block'"><button class="invite-friend"><i class="fa fa-plus mr-1"></i>Envite People</button></div>

                                                <!-- popup disocver section -->
                                                <!-- ================================================================================================================================================== -->
                                                <div class="settings-and-info" id="discover">
                                                    <div class="settings-pre">
                                                        Envite
                                                        <i onclick="document.getElementById('discover').style.display = 'none'" class="fa fa-times"></i>
                                                    </div>
                                                    <div class="setting-list">

                                                        <!-- each discovery holder -->
                                                        <!-- =================================================================================================================== -->
                                                        <!-- =================================================================================================================== -->
                                                        <div class="each-setting">
                                                            <div class="title-settings">Students</div>
                                                            <div class="reply-setting" id="discover-student">

                                                            </div>
                                                        </div>
                                                        <!-- end discovery holder -->
                                                        <!-- ===================================================================================================================================== -->
                                                        <!-- ===================================================================================================================================== -->
                                                    
                                                        <!-- discver trainers -->
                                                        <!-- ============================================================================================================================================= -->
                                                        <!-- ============================================================================================================================================= -->
                                                        <div class="each-setting">
                                                            <div class="title-settings">Trainers</div>
                                                            <div class="reply-setting" id="discover-trainer">

                                                            </div>
                                                        </div>
                                                        <!-- end discovery trainer -->
                                                        <!-- =========================================================================================================================================================== -->
                                                        <!-- ================================================================================================================================================================ -->
                                                        
                                                    </div>
                                                </div>
                                                <!-- end popup discoevry -->
                                                <!-- ================================================================================================================================ -->

                                            </div>
                                            <!-- end top popup discovry -->
                                            <!-- ================================================================================================================================================================================= -->
                                            <!-- ================================================================================================================================================================================= -->

                                            <div class="search-member position-relative">
                                                <input type="text" name="" id="search_member" placeholder="Search members..." autocomplete="off" onkeyup="openResult()">
                                                <div class="searched-result" id="searched-results">
                                                    <div class="list-result" id="result_search">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-nav-bar position-relative">
                                    <ul class="nav nav-tabs group-element" role="tablist">
                                        <li><a class="active" data-toggle="tab" href="#discussion" role="tab">
                                            <div class="name">Discussion</div>
                                        </a></li>
                                        <li><a class="" data-toggle="tab" href="#Member" role="tab">
                                            <div class="name">Members</div>
                                        </a></li>
                                        <li><a class="" data-toggle="tab" href="#media" role="tab">
                                            <div class="name">Media</div>
                                        </a></li>
                                    </ul>
                                    <div class="short-desc-group d-flex">
                                        <div class="privat-public">
                                            <?php if($group_privacy == "Private"){?>
                                                <i class="fa fa-lock mr-1"></i><span><?php echo $group_privacy; ?> Group</span>
                                            <?php }else{ ?>
                                                <i class="fa fa-unlock mr-1"></i><span><?php echo $group_privacy; ?> Group</span>
                                            <?php } ?>
                                        </div>
                                        <div class="member-count" id="member-count">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end top background -->
                            <!-- =============================================================================================================== -->
                            <!-- =============================================================================================================== -->


                            <!-- start tab for configuration and settings connected with admin panel -->
                            <!-- ================================================================================================================ -->
                            <!-- ================================================================================================================ -->
                            <div class="tab-content">
                                <!-- tab for group descript -->
                                <div class="tab-pane" role="tabpanel" id="description">
                                    <div class="group-description mt-4 ml-auto mr-auto">
                                        <div class="title-group-desc">Add group discription <i class="fa fa-pencil"></i></div>
                                        <div class="short-msg">The group discription is visible to participants of this group and to everyone who want to join this group </div>
                                        <div class="current_description">
                                            <div class="short-msg-current">Current group description</div>
                                            <div class="current_bio"><?php echo $group_bio; ?></div>
                                        </div>
                                        <div class="textarea-desc">
                                            <div class="textarea-desc-input" id="textarea-desc-input"><textarea name="" id="group_desc" cols="30" rows="5" placeholder="Edit this Description..." oninput="count_letters()"></textarea></div>
                                            <div class="d-flex mt-2 justify-content-between">
                                                <div class="count-word"><span id="counted_lelter"></span>/3678 <span id="loading"></span></div>
                                                <button class="btn-save-desc" onclick="submit_bio(this)">Add to group</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end group description -->

                                <!-- tab for challenges request -->
                                <div class="tab-pane" role="tabpanel" id="Challenge">
                                    <div class="group-description mt-4 ml-auto mr-auto">
                                        <div class="title-group-desc">Challenge Requests <i class="fa fa-superpowers"></i></div>
                                        <div class="short-msg">All Challenge Requests Listed Down</div>
                                        <div class="textarea-desc" id="notification_request">

                                        </div>
                                    </div>
                                </div>
                                <!-- end challenes request -->

                                <!-- tab for challenges request -->
                                <div class="tab-pane" role="tabpanel" id="Challenge_create">
                                    <div class="group-description mt-4 ml-auto mr-auto">
                                        <div class="title-group-desc">Create challenge</div>
                                        <div class="short-msg">Which group you want to challenge</div>
                                        <div class="textarea-desc" id="textarea-desc">

                                        </div>
                                    </div>
                                </div>
                                <!-- end challenes request -->

                                <!-- tab for member request -->
                                <div class="tab-pane" role="tabpanel" id="Member-request">
                                    <div class="group-description mt-4 ml-auto mr-auto">
                                        <div class="title-group-desc">Outside user Requests <i class="fa fa-users"></i></div>
                                        <div class="short-msg">All Requests Listed Down</div>
                                        <div class="textarea-desc" id="list_approval_request">

                                        </div>
                                    </div>
                                </div>
                                <!-- end member request -->

                                <!-- tabe for membership -->
                                <div class="tab-pane" role="tabpanel" id="Membership">
                                    <div class="group-description mt-4 ml-auto mr-auto">
                                        <div class="title-group-desc">Raised Questions <i class="fa fa-balance-scale"></i></div>
                                        <div class="short-msg">Questions raise by group member</div>
                                        <div class="textarea-desc">

                                            <div class="each-request">
                                                <div><div class="group-challenge-image"><img src="../Images/religions/each-religion/judaism/robert-zunikoff-q8gPhy6JcSQ-unsplash.jpg" alt="" width="100%" height="100%"></div></div>
                                                <div class="challenge-request-detail">
                                                    <div class="group-challenge-name">Manirabona Hirwa patience</div>
                                                    <div class="short-ch-desc">
                                                        <div class="group-type"><span>Said </span>
                                                            The group below is making us ignorance more that we think, 
                                                            so i suggest to write this to youryou can change something on post topics
                                                        </div>
                                                    </div>
                                                    <div><div class="time-sended-not"><i class="fa fa-calendar-check-o"></i> september 23, 2020</div></div>
                                                </div>
                                                <div class="accurate-challenge">
                                                    <div><button class="reject">Ignore</button></div>
                                                    <div class=""><button class="accept-challenge">Reply</button></div>
                                                </div>
                                            </div>
                                            <div class="each-request">
                                                <div><div class="group-challenge-image"><img src="../Images/religions/each-religion/judaism/robert-zunikoff-q8gPhy6JcSQ-unsplash.jpg" alt="" width="100%" height="100%"></div></div>
                                                <div class="challenge-request-detail">
                                                    <div class="group-challenge-name">Kwizera bertin</div>
                                                    <div class="short-ch-desc">
                                                        <div class="group-type">
                                                            <span>Said </span>
                                                            The group below is making us ignorance more that we think, 
                                                            so i suggest to write this to youryou can change something on post topics
                                                        </div>
                                                    </div>
                                                    <div><div class="time-sended-not"><i class="fa fa-calendar-check-o"></i> Just now</div></div>
                                                </div>
                                                <div class="accurate-challenge">
                                                    <div><button class="reject">Ignore</button></div>
                                                    <div class=""><button class="accept-challenge">Reply</button></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end membership -->

                                <!-- tab for Topics  -->
                                <div class="tab-pane" role="tabpanel" id="Topics">
                                    <h1>Topics</h1>
                                </div>
                                <!-- end tab Topics -->

                                <!-- tab Rules -->
                                <div class="tab-pane" role="tabpanel" id="Settings">
                                    <h1>Settings</h1>
                                </div>
                                <!-- end tab Rules -->
                            </div>
                            <!-- end settings and connection with admin panel-->
                            <!-- ========================================================================================================================================== -->
                            <!-- =========================================================================================================================================== -->



                            <!-- create post -->
                            <!-- =========================================================================================================================================== -->
                            <!-- ============================================================================================================================================== -->
                            <div class="position-relative">
                                <div class="create-post mt-4">
                                    <div class="create-title">create post</div>
                                    <div class="ask mt-2 mb-2">
                                        <div><div class="owner-image-pre"><img src="<?php echo '../Images/groups/'.$group_image; ?>" alt="" width="100%" height="100%"></div></div>
                                        <div class="what-going-on" onclick="createPostLeft(this)"> what going on there?</div>
                                    </div>
                                </div>
                                <!-- popup of create post -->
                                <div class="post-creation" id="post-creation">
                                    <div class="title-post-creation position-relative">
                                        <div>Define your post</div>
                                        <div class="close-creation" onclick="document.getElementById('post-creation').style.display = 'none'"><i class="fa fa-times"></i></div>
                                    </div>
                                    <form action="group_posts.box.php" method="POST" enctype="multipart/form-data">
                                        <div class="create-area-body">
                                            <div class="image-preview-post">
                                                <div class="for-image" id="when_photo">
                                                    <img src="" class="preview_photo" alt="" width="100%" height="100%">
                                                </div>
                                            </div>
                                            <div class="caption-area">
                                                <div><div class="caption-textarea position-relative"><textarea name="user_caption" id="" rows="9" cols="30" placeholder="What going on there?" autocomplete="off"></textarea></div></div>
                                            </div>
                                        </div>
                                        <div class="option-creation">
                                            <div class="choose-option-area">
                                                <input type="hidden" name="group_name" value="<?php echo  $group_name; ?>">
                                                <input type="hidden" name="group_identity" value="<?php echo $group_identity; ?>">
                                                <input type="hidden" name="url_code" value="<?php echo $url_encode; ?>">
                                                <input type="file" name="file_media" id="group_posts" style="display: none;">
                                                <div class="choose-image-btn"><button type="button" onclick="triggerInputFile_post()"><i class="fa fa-image mr-2"></i> choose media</button></div>
                                            </div>
                                            <div class="create-post-btn">
                                                <div class=""><button name="submit_file" type="submit">create now</button></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end popup -->
                            </div>
                            <!-- end create post -->
                            <!-- ==================================================================================================================================== -->
                            <!-- ==================================================================================================================================== -->
                        


                            <!-- tabs for group element and member discusion and media connected with navbar down top background image-->
                            <!-- ===================================================================================================================================== -->
                            <!-- ====================================================================================================================================== -->
                            <div class="department-name-course mr-auto ml-auto">

                                <div class="tab-content">

                                    <!-- tab for discussion -->
                                    <!-- ====================================================================================================================== -->
                                    <div class="tab-pane active" role="tabpanel" id="discussion">
                                        <!-- posts -->
                                        <div class="course-department mt-4">
                                            <div class="section-title">
                                                <div>Activity Stream</div>
                                            </div>
                                            <div class="activity-list mt-3" id="hold_last_post">

                                            </div>
                                        </div>
                                        <!-- end course department -->
                                    </div>
                                    <!-- end discussion tab -->
                                    <!-- =========================================================================================================================================== -->


                                    <!-- tab for members -->
                                    <!-- ================================================================================================================================================== -->
                                    <div class="tab-pane" role="tabpanel" id="Member">
                                        <div class="course-department mt-4">
                                            <div class="section-title">
                                                <div>Members</div>
                                            </div>
                                            <div class="activity-list members-section mt-3">

                                                <!-- accepted user -->
                                                <!-- =============================================================================================================================== -->
                                                <div class="member-list mr-auto ml-auto">
                                                    <div class="Approved"><i class="fa fa-check mr-1"></i> Approved </div>
                                                    <input type="hidden" name="" id="group_identity" value="<?php echo $group_identity; ?>">
                                                    <div id="approved_list">

                                                    </div>
                                                </div>
                                                <!-- end accepted -->
                                                <!-- ============================================================================================================================================== -->

                                                <!-- member wainting approval -->
                                                <!-- ================================================================================================================================================ -->
                                                <div class="wait-approval-member mr-auto ml-auto">
                                                    <div class="unApproved-list">
                                                        <div class="Approved"><i class="fa fa-dot-circle-o mr-1"></i> Waiting Approval </div>
                                                        <div id="waiting_approval">

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end waiting approval -->
                                                <!-- ================================================================================================================================================= -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab for memebr -->
                                    <!-- ============================================================================================================================================================= -->


                                    <!-- tab for media -->
                                    <!-- ==================================================================================================================================================================== -->
                                    <div class="tab-pane" role="tabpanel" id="media">
                                        <div class="course-department mt-4">
                                            <div class="section-title">
                                                <div>Media</div>
                                            </div>
                                            <div class="activity-list media-section mt-3">
                                                <div class="media-divider">
                                                    <!-- photos shared -->
                                                    <!-- ========================================================================================================= -->
                                                    <div class="photos-shared" id="group_photoes">

                                                    </div>
                                                    <!-- end photos shared -->
                                                    <!-- =========================================================================================================== -->

                                                    <!-- video shared -->
                                                    <!-- ============================================================================================================= -->
                                                    <div class="video-shared" id="group_video">

                                                    </div>
                                                    <!-- end video shared -->
                                                    <!-- =============================================================================================================== -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab for media -->
                                    <!-- ======================================================================================================================================= -->

                                </div>

                            </div>
                            <!-- end media,discussion and member tabs content -->
                            <!-- ==================================================================================================================================== -->
                            <!-- ==================================================================================================================================== -->

                        </div>
                    </div>
                    <!-- end left side-content -->
                    <!-- ============================================================================================================================= -->
                    <!-- ============================================================================================================================= -->

                </div>

                <!-- ERROR HANDLING -->
                <!-- ======================================================================================================================================================== -->
                <?php if(isset($_REQUEST['msg']) == "extentension"){?>
                    <div class="Display_error">
                        <div class="error-icon"><i class="fa fa-exclamation-triangle"></i></div>
                        <div class="check-word_error"> Check file extension and try again </div>
                    </div>
                <?php }else if(isset($_REQUEST['msg']) ==  "success"){?>
                    <div class="Display_error">
                        <div class="error-icon"><i class="fa fa-check"></i></div>
                        <div class="check-word_error"> Post successfully applied </div>
                    </div>
                <?php }else if(isset($_REQUEST['msg']) == "fail"){?>
                    <div class="Display_error">
                        <div class="error-icon"><i class="fa fa-times"></i></div>
                        <div class="check-word_error"> Fail to upload your post, try again </div>
                    </div>
                <?php }else if(isset($_REQUEST['msg']) == "move_fail"){?>
                    <div class="Display_error">
                        <div class="error-icon"><i class="fa fa-times"></i></div>
                        <div class="check-word_error"> Save uploaded file fail, try another </div>
                    </div>
                <?php }else if(isset($_REQUEST['msg']) == "size"){?>
                    <div class="Display_error">
                        <div class="error-icon"><i class="fa fa-times"></i></div>
                        <div class="check-word_error"> Too large file, try another </div>
                    </div>
                <?php } ?>

                <!-- when it come to group challenge page redirection -->
                <!-- ======================================================================================================== -->
                <div class="div_challenges_hold" id="challenges_holder">
                    
                </div>
                <!-- ======================================================================================================== -->
            </div>
            <!-- end body section -->
            <!-- ==================================================================================================================================== -->
            <!-- ==================================================================================================================================== -->
            <!-- ==================================================================================================================================== -->
            
    
        <!-- javascript external file, type js  and libraries-->
        <!-- ================================================ -->
        <!-- =========================================================================== -->
        <!-- =========================================================================== -->
        <script src="../Assets/js/group_admin.box.js"></script>
        <script src="../Assets/js/group_discussion_posts.box.js"></script>
        <script src="../Assets/js/group_discussion_content.js"></script>

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
        <!-- =========================================================================================================================== -->
        <!-- =========================================================================================================================== -->

   </body>
</html>
<?php }else{
        echo "not assigned"; 
   }
   } ?>