<?php 
    session_start();
    if(isset($_SESSION['Email'])){
        $Session_email_call = $_SESSION['Email'];
        $firstName = $_SESSION['Firstname'];
        $lastName = $_SESSION['Lastname'];
        $user_title = $_SESSION['title'];

        if(isset($_REQUEST['group']) && isset($_REQUEST['function']) == 'view'){
            require_once ("../Scyllar.php");

            $new_connection = new Scyllar();
            $url_code = $_REQUEST['group'];

            $select_all_detail = "SELECT * FROM user_groups WHERE url_encode = '$url_code'";
            $execute_all_detail = mysqli_query($new_connection->Frequency(), $select_all_detail);
            $fetch_detail = mysqli_fetch_assoc($execute_all_detail);
                $group_identity = $fetch_detail['identity'];
                $group_name = $fetch_detail['group_name'];
                $background_image = $fetch_detail['group_profile_image'];
                $group_bio = $fetch_detail['group_bio'];
                $group_privacy = $fetch_detail['group_privacy'];
                $group_member_count = $fetch_detail['group_member_count'];
                $group_chalenges_count = $fetch_detail['group_chalenges_count'];
                $created_on = $fetch_detail['created_on'];

                $create_firstName = $fetch_detail['firstName'];
                $creater_lastName = $fetch_detail['lastName'];
                $email = $fetch_detail['email'];

                $select_my_info = "SELECT * FROM intelligent_users WHERE email = '$email'";
                $execute_info = mysqli_query($new_connection->Frequency(), $select_my_info);
                $fetch_info = mysqli_fetch_assoc($execute_info);
                    $user_identity = $fetch_info['identity'];

                $posts = 0;
                $select_posts = "SELECT * FROM user_group_post WHERE group_identity = '$group_identity'";
                $execute_posts = mysqli_query($new_connection->Frequency(), $select_posts);
                while($fetch_posts = mysqli_fetch_assoc($execute_posts)){
                    $posts = $posts + 1;
                }

                $select_member_check = "SELECT * FROM user_group_member WHERE User_email = '$Session_email_call' AND group_identity = '$group_identity'";
                $execute_query = mysqli_query($new_connection->Frequency(), $select_member_check);

                $select_friend = "SELECT * FROM user_follow_board WHERE host_email = '$Session_email_call' AND reciever_email = '$email' OR reciever_email = '$Session_email_call' AND host_email = '$email'";
                $execute_friend = mysqli_query($new_connection->Frequency(), $select_friend);
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
        <link rel="stylesheet" href="../Assets/css/each-group.css">

        <!-- external css file/ libraries -->
        <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
        <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
        <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
    </head>
    <body class="bg-white">

        <!-- SECTION HEADER -->
        <!-- ============================================================================================================================ -->
        <div class="header-holder">
            <?php require_once ("../header/header.php"); ?>
        </div>
        <!-- ============================================================================================================================= -->

        <!-- GROUP_CONTENT -->
        <!-- ================================================================================================================================== -->
        <div class="group-content">
            <!-- GLOBAL JS EMAIL -->
            <input type="hidden" name="" id="hiddenEmail" value="<?php echo $Session_email_call; ?>">
            <input type="hidden" name="" id="hiddenIdentity" value="<?php echo $group_identity; ?>">
            <!-- END GLOBAL EMAIL -->
            <div class="container">
                <div class="left-content">
                    <div class="related_group">
                        <div class="rel-title">Groups</div>
                        <div class="groups-list" id="rel-group">

                        </div>
                    </div>
                </div>
                <div class="right-content">

                    <!-- TOP GROUP BACKGROUND -->
                    <!-- ============================================================================================================================= -->
                    <div class="top-background-section">
                        <div class="top-background-image"><img src="<?php echo '../Images/groups/'.$background_image; ?>" alt="<?php echo $group_name; ?>' profile image'" width="100%" height="100%"></div>
                        <div class="top-background-group-detail">
                            <div class="group-desc">Join to post, challenge and comments in this group</div>
                            <?php if(mysqli_num_rows($execute_query) > 0){
                                $fetch_group_info = mysqli_fetch_assoc($execute_query);?>
                                <?php if($fetch_group_info['approval'] == "no"){?>
                                    <div class="join-btn"><button>Wait admin to Accept your request</button></div>
                                <?php }else{ ?>
                                    <a href="<?php echo 'index.php?group='.$url_code; ?>"><div class="join-btn"><button>You already join this group, share more</button></div></a>
                                <?php } ?>
                            <?php }else{
                                $fetch_group_info = mysqli_fetch_assoc($execute_query); ?>
                                <div class="join-btn"><button id="<?php echo $group_identity; ?>" onclick="join_group(this)">Join this group!</button></div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- ============================================================================================================================= -->

                    <!-- GROUP SHORT CONTENT -->
                    <!-- ============================================================================================================================== -->
                    <div class="group-short-desc">
                        <div class="group-posts" id="list-group-posts">

                        </div>
                        <div class="group-desc-content">
                            <div class="group-detail">
                                <div class="group-name-title"><?php echo $group_name; ?></div>
                                <div class="group-bio">
                                    <div class="none"></div>
                                    <div class="bio"><?php echo $group_bio; ?></div>
                                </div>
                                <div class="sort-group-detail">
                                    <div class="created_by">
                                        <div><div class="creater-img"><img src="../Images/groups/IB_Group_image1601456270Box--1018471 (1).jpg" alt="" width="100%" height="100%"></div></div>
                                        <div class="creater-detail">
                                            <div class="creater-name">Created by <?php echo $create_firstName; ?> <?php echo $creater_lastName; ?></div>
                                            <?php if(mysqli_num_rows($execute_friend) > 0){ ?>
                                                <div class="join-creater"><i class="fa fa-rss"></i> Connected with <?php echo $creater_lastName; ?></div>
                                            <?php }else{ ?>
                                                <div class="join-creater" id="<?php echo $email; ?>" onclick="followUser(this)">Follow <?php echo $creater_lastName; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="table-content">
                                        <div class="member">
                                            <div class="desc-1">Member</div>
                                            <div class="desc-re"><?php echo $group_member_count; ?></div>
                                        </div>
                                        <div class="member">
                                            <div class="desc-1">Challenges</div>
                                            <div class="desc-re"><?php echo $group_chalenges_count; ?></div>
                                        </div>
                                        <div class="member">
                                            <div class="desc-1">Posts</div>
                                            <div class="desc-re"><?php echo $posts; ?></div>
                                        </div>
                                    </div>
                                    <!-- <?php //if(mysqli_num_rows($execute_query) > 0){
                                        //$fetch_group_info = mysqli_fetch_assoc($execute_query);?>
                                        <?php //if($fetch_group_info['approval'] == "no"){?>
                                            <div class="join-btn mt-3 text-right"><button>Wait admin Acception</button></div>
                                        <?php //}else{ ?>
                                            <a href="<?php //echo 'index.php?group='.$url_code; ?>"><div class="join-btn mt-3 text-right"><button>Share what you Got!</button></div></a>
                                        <?php //} ?>
                                    <?php //}else{ ?>
                                        <div class="join-btn mt-3 text-right"><button id="<?php //echo $group_identity; ?>" onclick="join_group(this)">Join them!</button></div>
                                    <?php //} ?> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- =============================================================================================================================== -->

                </div>
            </div>
        </div>
        <!-- ================================================================================================================================== -->
        
        <!-- javascript external file, type js  and libraries-->
        <!-- ================================================ -->
        <script src="../Assets/js/each-group.js"></script>
        <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="../Lib/jquery/jquery.min.js"></script>
        <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
        <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
        <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
    </body>
</html>
<?php } else{
    header("Location: ../Group-discusion/Groups.php");
    exit();
  } 
}else{
    header("Location: ../account_shortcut.box.php?session");
    exit();
} ?>