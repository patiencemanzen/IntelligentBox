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

       <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

       <link rel="stylesheet" href="../Assets/css/message.box.css">

       <!-- external css file/ libraries -->
       <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
       <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
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
    <!-- =========================================================================================================================================================== -->
    <div id="expanded_conv">
        <?php 
            require ("../Scyllar.php");
            require_once ("message_content.php");
            $new_connection = new Scyllar();
            $my_email = $Session_email_call;
            $new_data = new Message_content($my_email);

            $conv = 0;    
            $select_each_conv = "SELECT * FROM intelligent_users WHERE email IN (SELECT DISTINCT reciever_email FROM messages WHERE sender_email = '$my_email') OR email IN (SELECT DISTINCT sender_email FROM messages WHERE reciever_email = '$my_email') AND Verified = 'complete' ORDER BY firstName ASC";
            $execute_each_conv = mysqli_query($new_connection->Frequency(), $select_each_conv);
            while($fetch_each_conv = mysqli_fetch_assoc($execute_each_conv)){    
                $conv = $conv + 1;
            }
        ?>
        <div class="expand-message" id="expand-message">
            <div class="left-side-coneversion position-relative">
                <div class="conv-title">
                    <div class="search-conv">
                        <i class="fa fa-search"></i><input type="text" onkeyup="" name="" id="search-conv" placeholder="Search conversation..">
                    </div>
                    <div><div class="conv-notice"> <?php echo $conv; ?> Chats </div></div>
                </div>
                <div class="conv-list">
                    <div class="conv-holder">
                        <ul class="nav" role="tablist" id="list_down_li_chart">
                            
                        </ul>
                    </div>
                </div>
                <div class="add-chat position-relative">
                    <div class="add-convesation" onclick="New_message()"><i class="fa fa-plus"></i></div>
                    <div class="open-conv-ex" id="open-conv-ex">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="rigt-side-chart-area position-relative">

                <!-- when it come to small deivice expand this div-->
                <!-- ==================================================== ============================================-->
                <div class="expand-left" onclick="this.nextElementSibling.style.width = '330px'"><i class="fa fa-navicon"></i></div>
                <div id="sideBar-conv" class="sideBar shadow-sm">
                    <div class="conv-title">
                        <div class="search-conv">
                            <i class="fa fa-search"></i><input type="text" name="" id="search-conv" placeholder="Search conversation..">
                        </div>
                        <div><div class="conv-notice"><?php echo $conv; ?> Chats </div></div>
                        <div class="closebtn" onclick="this.parentNode.parentNode.style.width = '0px'">&times;</div>
                    </div>
                    <div class="conv-list">
                        <div class="conv-holder">
                            <ul class="nav" role="tablist" id="tablist_nav">
                                
                            </ul>
                        </div>
                    </div>
                    <div class="add-chat position-relative">
                        <div class="add-convesation" onclick="New_message()"><i class="fa fa-plus"></i></div>
                        <div class="open-conv-ex" id="open-conv-ex">
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end small deivce -->
                <!-- ========================================================================================================= -->

                <!-- BIG AREA OF CONVARSION -->
                <!-- ============================================================================================================== -->
                <div class="converstion-expand-full">
                    <div class="tab-content">
                        <input type="hidden" name="" id="hiddenEmail" value="<?php echo $my_email; ?>">
                        <!-- ACTIVE CHART WHEN USER CLICKED -->
                        <!-- ====================================================== -->
                        <div class="active tab-pane" role="tabpanel" id="Active_chart">
                           <div class="active_tab"><img src="../Images/Illustrator_img/messages.png" alt="" width="100%" height="100%"></div>
                        </div>
                        <!-- ================================================================================================================================================== -->

                        <!-- common chart -->
                        <!-- =================================================================================================================================================== -->
                        <?php
                            $select_each_conv = "SELECT * FROM intelligent_users WHERE email IN (SELECT DISTINCT reciever_email FROM messages WHERE sender_email = '$my_email') OR email IN (SELECT DISTINCT sender_email FROM messages WHERE reciever_email = '$my_email') AND Verified = 'complete' ORDER BY firstName ASC";
                            $execute_each_conv = mysqli_query($new_connection->Frequency(), $select_each_conv);
                            while($fetch_each_conv = mysqli_fetch_assoc($execute_each_conv)){ 
                                $user_email = $fetch_each_conv['email'];
                                $fisrtName = $fetch_each_conv['firstName'];
                                $lastName = $fetch_each_conv['lastName']; 
                                $user_identity = $fetch_each_conv['identity'];

                                $select_profile = "SELECT * FROM user_profile_image WHERE usr_email='$user_email' AND status_image = '1'";
                                $execute_profile = mysqli_query($new_connection->Frequency(), $select_profile);
                                $fetch_profile = mysqli_fetch_assoc($execute_profile);
                                    $profile = $fetch_profile['profile_image'];
                        ?>
                        <div class="tab-pane position-relative" role="tabpanel" id="conv_<?php echo $user_identity; ?>">
                            <div class="text-center-title-days"><?php echo$fisrtName; ?> <?php echo $lastName; ?></div>
                            <div class="expand-message-each" onclick="this.nextElementSibling.style.display = 'block'"><i class="fa fa-ellipsis-v"></i></div>
                            <div class="message-setting" id="message-setting">
                                <div class="each-setting-list">
                                    <div class="each-setting-msg" id="<?php echo $user_email; ?>" onclick="open_short_conv_area(this)"><i class="fa fa-square"></i> Use short Tab</div>
                                    <!-- <div class="each-setting-msg" id="<?php //echo $user_email; ?>" onclick="delect_conv()">
                                        <div class="delete-msg" onclick="this.nextElementSibling.style.display = 'block'"><i class="fa fa-trash-o"></i> Delete converstion</div>
                                        <div class="visible_div">
                                            <div class="mesg-del">Are you sure?</div>
                                            <div class="delete_option">
                                                <div class="no_option" onclick="this.parentNode.parentNode.style.display = 'none'">No</div>
                                                <div class="yes_option" id="<?php //echo $user_email; ?>" onclick="delete_conv_section(this)">Yes</div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="conv-full-txt" id="getMessage_<?php echo $user_identity; ?>">

                                <script>
                                    setInterval(()=> {
                                        var obj_id = "<?php echo $user_email; ?>";
                                        var my_email = document.getElementById("hiddenEmail").value;
                                        $("#getMessage_<?php echo $user_identity; ?>").load("../header/message_content.php", {
                                            user_info_message: obj_id,
                                            my_email: my_email
                                        });
                                    }, 1000);
                                    $(document).mouseup(function(e){
                                        var setting_msg = $("#message-setting");
                                        if(!setting_msg.is(e.target) && setting_msg.has(e.target).length == 0){
                                            setting_msg.hide();
                                        }
                                    });
                                </script>

                            </div>
                            <div class="add-more-message-input">
                                <div class="input-form-textarea">
                                    <!-- <div><div class="attachmentfile" onclick="open_file()"><i class="fa fa-paperclip"></i></div></div> -->
                                    <div class="textarea-message"><textarea name="" class="position-relative" id="myMessage" data-emojiable="true" data-emoji-input="unicode" rows="1" placeholder="Write message..."></textarea></div>
                                    <div class="mt-2">
                                        <div class="send-message-clip" id="<?php echo $user_email; ?>" onclick="sendMessageExpand(this)"><i class="fa fa-paper-plane-o"></i></div>
                                        <div class='message_container_loader'> 
                                            <div class='shape shape-1'></div>
                                            <div class='shape shape-2'></div>
                                            <div class='shape shape-3'></div>
                                            <div class='shape shape-4'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- end common chart -->
                    <!-- ==================================================================================================================================== -->
                    </div>
                </div>
                <div class="cancel-big-message">
                    <div class="minimize" onclick="minumize_message(this)"><i class="fa fa-minus"></i></div>   
                    <div class="expand" onclick="maximize_message(this)"><i class="fa fa-expand"></i></div>
                    <div class="expand" onclick="close_message(this)"><i class="fa fa-times"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end expanded area -->
    <!-- ==================================================================================================================================================== -->


    <!-- messaging system when user click to message button-->
    <!-- =================================================================================================================================================== -->
    <div id="message_section_holder">
       
    </div>
    <!-- end message -->
    <!-- ============================================================================================================================================ -->
 

    <!-- create new messsage -->
    <!-- ==================================================================================================================================================== -->
    <div class="create-new-message">
        <div id="cd-nav-trigger position-relative" class="cd-nav-trigger" onclick="open_full_conv()">
            <i class="fa fa-envelope-open-o"></i>
            <div id="count_message_small"></div>
        </div>
    </div>
    <!-- end new message -->
    <!-- ===================================================================================================================================================== -->


    <!-- javascript external file, type js  and libraries-->
    <!-- =============================================================================================================================================== -->
    <script src="../Assets/js/message.box.js"></script>
    <script src="../Lib/jquery/jquery.min.js"></script>
    <script src="../Assets/js/messaging_content.box.js"></script>

    <script src="../Lib/ckeditor/ckeditor.js"></script>
    <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
    <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
    <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
    <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
     integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- end libraries -->
    <!-- ========================================================================================================================================= -->
   </body>
</html>