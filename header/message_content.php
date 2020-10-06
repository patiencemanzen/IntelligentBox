<?php 
    //  INITIALIZE DATABASE CONNECTION
    // =======================================================================================================
    require_once ("../Scyllar.php");
    // =======================================================================================================

    // CLASS MESSAGE_CONTENT
    // =======================================================================================================
    class Message_content extends Scyllar {
        private $E_mail;

        // CONSTRUCTER
        // ========================================================================================================
        public function __construct($email){
            $this->E_mail = $email;
        }

        function timeAgo($time_ago){
            $time_ago = strtotime($time_ago);
            $cur_time   = time();
            $time_elapsed   = $cur_time - $time_ago;
            $seconds    = $time_elapsed ;
            $minutes    = round($time_elapsed / 60 );
            $hours      = round($time_elapsed / 3600);
            $days       = round($time_elapsed / 86400 );
            $weeks      = round($time_elapsed / 604800);
            $months     = round($time_elapsed / 2600640 );
            $years      = round($time_elapsed / 31207680 );
            // Seconds
            if($seconds <= 60){
                return "just now";
            }
            //Minutes
            else if($minutes <=60){
                if($minutes==1){
                    return "one minute ago";
                }
                else{
                    return "$minutes minutes ago";
                }
            }
            //Hours
            else if($hours <=24){
                if($hours==1){
                    return "an hour ago";
                }else{
                    return "$hours hrs ago";
                }
            }
            //Days
            else if($days <= 7){
                if($days==1){
                    return "yesterday";
                }else{
                    return "$days days ago";
                }
            }
            //Weeks
            else if($weeks <= 4.3){
                if($weeks==1){
                    return "a week ago";
                }else{
                    return "$weeks weeks ago";
                }
            }
            //Months
            else if($months <=12){
                if($months==1){
                    return "a month ago";
                }else{
                    return "$months months ago";
                }
            }
            //Years
            else{
                if($years==1){
                    return "one year ago";
                }else{
                    return "$years years ago";
                }
            }
        }

        // SELECT USER TO CHOOSE
        // ==============================================================================================================
        public function My_comp(){
            $select_more_trainer = "SELECT * FROM intelligent_users WHERE email IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$this->E_mail') OR email IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$this->E_mail') AND email != '$this->E_mail' AND Verified='complete'";
            $execute_trainer = mysqli_query($this->Frequency(),$select_more_trainer);
            if(mysqli_num_rows($execute_trainer) > 0){
                while($fetch_trainer = mysqli_fetch_assoc($execute_trainer)){
                    $getFirstname = $fetch_trainer['firstName'];
                    $getLastname = $fetch_trainer['lastName'];
                    $getEmail = $fetch_trainer['email'];
                    $getIdentity = $fetch_trainer['identity'];

                    $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$getEmail' AND status_image='1'";
                    $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                    $fetch_image = mysqli_fetch_assoc($execute_image); ?>

                        <div class="each-messager">
                            <div><div class="user-messager-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image'] ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="messager-detail">
                                <div class="messager-name-select"><?php echo $getFirstname; ?> <?php echo $getLastname; ?></div>
                                <div class="messger-function"><?php echo $getEmail; ?></div>
                                <div class="line" id="line_<?php echo $getIdentity; ?>">
                                    <script>
                                        setInterval(()=> {
                                            $(document).ready(function(){
                                                var user_mail_line = "<?php echo $getEmail; ?>";
                                                $("#line_<?php echo $getIdentity; ?>").load("../header/header_content.php", {
                                                    getLine_user_on: user_mail_line
                                                });
                                            });
                                        }, 1000);
                                    </script>
                                </div>
                            </div>
                            <div class="check_user"><input type="checkbox" name="user_chosen" onclick="display_me(this)" class="user_choose" value="<?php echo $getEmail; ?>"></div>
                        </div>

                <?php }
            }
        }

        public function start_conv($inputted_data, $email){ 
            $arrlength = count($inputted_data);
            $first_email = $inputted_data[0];
            for($x = 0; $x < $arrlength; $x++) {
                $check_exist = "SELECT * FROM messages WHERE sender_email = '$email' AND reciever_email = '$inputted_data[$x]' OR reciever_email='$email' AND sender_email = '$inputted_data[$x]'";
                $execute_exist = mysqli_query($this->Frequency(), $check_exist);
                if(mysqli_num_rows($execute_exist) > 0){

                }else{
                    $created_on = Date("Y-m-d h:m:s");
                    $insert_conv = "INSERT INTO messages VALUES ('','$email','$inputted_data[$x]','New conversation from {$inputted_data[$x]}','0','new','on','$created_on')";
                    $execute_new_conv = mysqli_query($this->Frequency(), $insert_conv);
                }
            } 
        }

        // DISPLAY SHORT MESSAGING AREA
        // ================================================================================================================================
        public function message_area($inputted_data){ 
            $first_email = $inputted_data; ?>
            <div class="message-area" id="message-area">
                <div class="message-holder">
                    <input type="hidden" name="hidden_reciever_email" id="hidden_reciever_email" value="<?php echo $first_email; ?>">
                    <div class="message-title d-flex">
                        <?php
                            $select_all_basic = "SELECT * FROM intelligent_users WHERE email='$first_email'";
                            $execute_basic = mysqli_query($this->Frequency(), $select_all_basic);
                            $fetch_basic = mysqli_fetch_assoc($execute_basic);
                                $firstname = $fetch_basic['firstName'];
                                $lastname = $fetch_basic['lastName'];

                            $select_profile_image = "SELECT * FROM user_profile_image WHERE usr_email='$first_email' AND status_image = '1'";
                            $executeimage = mysqli_query($this->Frequency(), $select_profile_image);
                            $fetch_profile_image = mysqli_fetch_assoc($executeimage);
                                $profile_image = $fetch_profile_image['profile_image'];
                        ?>
                        <div class="image-holder">
                            <div class="reciever-image">
                                <img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%">
                                <!-- <div class="online-user-full-conv"><div class="inner-full-conv"></div></div> -->
                            </div>
                        </div>
                        <div class="user-name ml-2">
                            <div><?php echo $firstname; ?> <?php echo $lastname; ?></div>
                            <div id="messenger_email"><?php echo $first_email; ?></div>
                        </div>

                        <div class="remove-chart d-flex">
                            <div class="minimize-chats" onclick="mini_chats()"><i class="fa fa-arrow-down"></i></div>
                            <div class="pull-up" onclick="max_chat()"><i class="fa fa-arrow-up"></i></div>
                            <div class="remove-chart-history" onclick="close_short_message()"><i class="fa fa-times"></i></div>
                        </div>
                    </div>

                    <script>
                        setInterval(() => {
                            recieve_message();
                        }, 1000);
                        function recieve_message(){
                            $(document).ready(function(){
                                var hidden_reciever_email = document.getElementById("hidden_reciever_email").value;
                                var my_email = document.getElementById("hiddenEmail").value;
                                $("#chart-area").load("../header/message_content.php", {
                                    getCharter: hidden_reciever_email,
                                    my_email: my_email
                                });
                            });
                        } 
                        function mini_chats(){
                            var chart = document.getElementById('message-area');
                            chart.style.bottom = "-375px";
                        }
                        
                        function max_chat(){
                            var chart = document.getElementById('message-area');
                            chart.style.bottom = "50px";
                        }
                        function close_short_message(){
                            var chart = document.getElementById('message-area');
                            chart.style.display = "none";
                        }
                    </script>

                    <div class="chart-history">
                        <div class="chat-message-list" id="chart-area">        
                        
                        </div>
                    </div>

                    <div class="create-message">
                        <div class="message-creation">
                            <div class="down-message-area">
                                <div class="type-message">
                                    <textarea name="" rows="2" class="position-relative" id="myMessage" placeholder="Type your message..." id="text" onclick="init()"></textarea>
                                </div>
                                <div class="btn-send-messages"><button id="<?php  echo $inputted_data; ?>" onclick="sendMessage(this)" class="btn-send-message"><i class="fa fa-paper-plane-o bg-white"></i></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }

        // SAVE MESSAGE GIVEN
        // ================================================================================================================
        public function Save_message($messenger, $messages, $reciever){
            $created_on = Date("Y-m-d h:m:s");
            $insert_message = "INSERT INTO messages VALUES ('','$messenger','$reciever','$messages','0','new','on','$created_on')";
            $execute_message = mysqli_query($this->Frequency(), $insert_message);
        }

        // DISPLAY ALL MESSAGE RECIEVED
        // ========================================================================================================================
        public function fetch_messages($sender, $reciever){
            $select_all_message = "SELECT * FROM messages WHERE sender_email='$sender' AND reciever_email='$reciever' OR sender_email='$reciever' AND reciever_email='$sender' ORDER BY identity ASC";
            $execute_message = mysqli_query($this->Frequency(), $select_all_message);
            if(mysqli_num_rows($execute_message) > 0){
                while($fetch_message = mysqli_fetch_assoc($execute_message)){
                    $sender_email = $fetch_message['sender_email'];
                    $reciever_email = $fetch_message['reciever_email'];
                    $message_recieved = $fetch_message['message'];

                    $send = date_create($fetch_message['created_on']);
                    $formatHour = date_format($send,"H:m"); 

                    $select_reciever_profile = "SELECT * FROM user_profile_image WHERE usr_email='$reciever_email' AND status_image = '1'";
                    $execute_reciever_profile = mysqli_query($this->Frequency(), $select_reciever_profile);
                    $fetch_reciever_profile = mysqli_fetch_assoc($execute_reciever_profile);
                        $profile_reciever = $fetch_reciever_profile['profile_image'];

                    $select_sender_profile = "SELECT * FROM user_profile_image WHERE usr_email='$sender_email' AND status_image = '1'";
                    $execute_sender_profile = mysqli_query($this->Frequency(), $select_sender_profile);
                    $fetch_sender_profile = mysqli_fetch_assoc($execute_sender_profile);
                        $profile_sender = $fetch_sender_profile['profile_image'];    

                    if($sender_email == $sender){ ?>
                        <div class="message-row you-message">
                            <div class="message-content">
                                <div class="message-text"><?php echo $message_recieved; ?></div>
                                <div class="message-time"><?php echo $formatHour; ?></div>
                            </div>
                        </div>
                    <?php }else { ?>
                        <div class="message-row other-message">
                            <div class="message-content">
                                <img src="<?php echo '../Images/profile-img/profile-image/'.$profile_sender; ?>" alt="">
                                <div class="message-detail">
                                    <div class="message-text"><?php echo $message_recieved; ?></div>
                                    <div class="message-time"><?php echo $formatHour; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php  }
                }
            }else{ ?>
                <div class="no-message">
                    <i class="fa fa-envelope-open-o"></i>
                    <div class="no-data">No conversation found <br> start new now!</div>
                </div>
           <?php }
        }


        // FUNCTION GET CHART LINK
        // =============================================================================================================================================
        public function chart_link($my_email){
            $select_each_conv = "SELECT * FROM intelligent_users WHERE email IN (SELECT DISTINCT reciever_email FROM messages WHERE sender_email = '$my_email') OR email IN (SELECT DISTINCT sender_email FROM messages WHERE reciever_email = '$my_email') AND Verified = 'complete' ORDER BY firstName ASC";
            $execute_each_conv = mysqli_query($this->Frequency(), $select_each_conv);
            while($fetch_each_conv = mysqli_fetch_assoc($execute_each_conv)){ 
                $user_email = $fetch_each_conv['email'];
                $fisrtName = $fetch_each_conv['firstName'];
                $lastName = $fetch_each_conv['lastName']; 
                $user_identity = $fetch_each_conv['identity'];

                $select_profile = "SELECT * FROM user_profile_image WHERE usr_email='$user_email' AND status_image = '1'";
                $execute_profile = mysqli_query($this->Frequency(), $select_profile);
                $fetch_profile = mysqli_fetch_assoc($execute_profile);
                    $profile = $fetch_profile['profile_image']; 

                $select_message_text = "SELECT message FROM messages WHERE sender_email='$user_email' AND reciever_email='$my_email' OR sender_email='$my_email' AND reciever_email='$user_email' AND message_display='on' ORDER BY created_on DESC";
                $execute_message_text = mysqli_query($this->Frequency(), $select_message_text);
                $fetch_message_text = mysqli_fetch_array($execute_message_text); 

                $select_message_txt = "SELECT * FROM messages WHERE sender_email='$user_email' AND reciever_email='$my_email' OR sender_email='$my_email' AND reciever_email='$user_email' AND message_display='on' ORDER BY created_on asc";
                $execute_message_txt = mysqli_query($this->Frequency(), $select_message_txt);
                $fetch_message_txt = mysqli_fetch_assoc($execute_message_txt);
                    $txt_mailer = $fetch_message_txt['sender_email']; 
                    $txt_date = $fetch_message_txt['created_on']; ?>
                <li><a class="position-relative" id="<?php echo $user_email; ?>" onclick="unsetMessage(this)" data-toggle="tab" href="#conv_<?php echo $user_identity; ?>" role="tab">
                    <div class="each-conv position-relative">
                        <div class="pos-img"><div class="conv-owner-image position-relative">
                            <img src="<?php echo '../Images/profile-img/profile-image/'.$profile; ?>" alt="" width="100%" height="100%">
                        </div></div>
                        <div class="message-own">
                            <div class="messager-name">
                                <div class="n1"><?php echo $fisrtName; ?> <?php echo $lastName; ?></div>
                                <div class="time-status"><?php echo $this->timeAgo($txt_date)?></div>
                            </div>
                            <div class="message-short"><?php if($txt_mailer == $my_email){?><?php echo 'You: '.$fetch_message_text[0]; ?> <?php }else{ ?><?php echo $fetch_message_text[0]; ?><?php } ?></div>
                        </div>
                        <div class="counter-link-message"><?php echo $this->count_message($my_email); ?></div>
                    </div>
                </a></li> 
                <script>
                    function unsetMessage(obj){
                        var my_email = "<?php echo $my_email; ?>";
                        var user_email = obj.id;

                        $(document).ready(function(){
                            $(this).load("../header/message_content.php", {
                                my_emails: my_email,
                                fr_email: user_email
                            })
                        });
                    }
                </script>
        <?php } 
        }

        public function count_message ($user_mail){
            $messages = 0;
            $count_message = "SELECT * FROM messages WHERE reciever_email='$user_mail' AND message_visibility='new' AND sender_email != '$user_mail' AND message_read='0'";
            $execute_message = mysqli_query($this->Frequency(), $count_message);
            while($fetch_count_message = mysqli_fetch_assoc($execute_message)){
                $messages = $messages + 1;
            }
            if($messages == "0"){

            }else{ ?>
                <div class="counter"><?php echo $messages; ?></div>
            <?php }
        }

        public function unsetMessage($my_email, $user_email){
            $update_message_table_to_user = "UPDATE messages SET message_visibility = 'earlier' WHERE sender_email = '$user_email' AND 	reciever_email = '$my_email'";
            $execute_updates = mysqli_query($this->Frequency(), $update_message_table_to_user);
        }

        public function search_message_conv($my_search, $my_email){
            $convert_input = trim(strtolower($my_search));

            $select_each_conv = "SELECT * FROM intelligent_users WHERE email IN (SELECT DISTINCT reciever_email FROM messages WHERE sender_email = $my_email AND sender_email IN (SELECT * FROM intelligent_users WHERE firstName LIKE %'$convert_input'%)) OR email IN (SELECT DISTINCT sender_email FROM messages WHERE reciever_email = $my_email AND reciever_email IN (SELECT * FROM intelligent_users WHERE firstName LIKE %'$convert_input'%)) AND Verified = 'complete'";
            $execute_each_conv = mysqli_query($this->Frequency(), $select_each_conv);
            if(mysqli_num_rows($execute_each_conv) > 0){
                while($fetch_each_conv = mysqli_fetch_assoc($execute_each_conv)){ 
                    $user_email = $fetch_each_conv['email'];
                    $fisrtName = $fetch_each_conv['firstName'];
                    $lastName = $fetch_each_conv['lastName']; 
                    $user_identity = $fetch_each_conv['identity'];
    
                    $select_profile = "SELECT * FROM user_profile_image WHERE usr_email='$user_email' AND status_image = '1'";
                    $execute_profile = mysqli_query($this->Frequency(), $select_profile);
                    $fetch_profile = mysqli_fetch_assoc($execute_profile);
                        $profile = $fetch_profile['profile_image']; 
    
                    $select_message_text = "SELECT message FROM messages WHERE sender_email='$user_email' AND reciever_email='$my_email' OR sender_email='$my_email' AND reciever_email='$user_email' AND message_display='on' ORDER BY created_on DESC";
                    $execute_message_text = mysqli_query($this->Frequency(), $select_message_text);
                    $fetch_message_text = mysqli_fetch_array($execute_message_text); 
    
                    $select_message_txt = "SELECT * FROM messages WHERE sender_email='$user_email' AND reciever_email='$my_email' OR sender_email='$my_email' AND reciever_email='$user_email' AND message_display='on' ORDER BY created_on DESC";
                    $execute_message_txt = mysqli_query($this->Frequency(), $select_message_txt);
                    $fetch_message_txt = mysqli_fetch_assoc($execute_message_txt);
                        $txt_mailer = $fetch_message_txt['sender_email']; 
                        $txt_date = $fetch_message_txt['created_on']; ?>
                    <li><a class="" data-toggle="tab" href="#conv_<?php echo $user_identity; ?>" role="tab">
                        <div class="each-conv">
                            <div><div class="conv-owner-image position-relative">
                                <img src="<?php echo '../Images/profile-img/profile-image/'.$profile; ?>" alt="" width="100%" height="100%">
                            </div></div>
                            <div class="message-own">
                                <div class="messager-name">
                                    <div class="n1"><?php echo $fisrtName; ?> <?php echo $lastName; ?></div>
                                    <div class="time-status"><?php echo $this->timeAgo($txt_date)?></div>
                                </div>
                                <div class="message-short"><?php if($txt_mailer == $my_email){?><?php echo 'You: '.$fetch_message_text[0]; ?> <?php }else{ ?><?php echo $fetch_message_text[0]; ?><?php } ?></div>
                            </div>
                        </div>
                    </a></li> 
            <?php } 
            }else{ ?>
                <li><a class="" data-toggle="tab" href="#conv" role="tab">
                    <div class="each-conv">
                        <div class="message-own">
                            <div class="messager-name">
                                <div class="n1">No chat found</div>
                            </div>
                            <div class="message-short">Please add new chat to enjoy your feeling!</div>
                        </div>
                    </div>
                </a></li> 
            <?php }
        }

        // PRESENT MESSAGE FOUND ON EACH CONV
        // ==========================================================================================================================================================
        public function Message_found($sender, $reciever){
            $select_all_message = "SELECT * FROM messages WHERE sender_email='$sender' AND reciever_email='$reciever' OR sender_email='$reciever' AND reciever_email='$sender' ORDER BY identity ASC";
            $execute_message = mysqli_query($this->Frequency(), $select_all_message);
            while($fetch_message = mysqli_fetch_assoc($execute_message)){
                $sender_email = $fetch_message['sender_email'];
                $reciever_email = $fetch_message['reciever_email'];
                $message_recieved = $fetch_message['message'];
                $send = date_create($fetch_message['created_on']);
                $formatHour = date_format($send,"H:m"); 

                // RECIEVER DETAIL
                // ======================================================================================
                $select_basic_reciever = "SELECT * FROM intelligent_users WHERE email='$reciever_email'";
                $execute_basic_reciever = mysqli_query($this->Frequency(), $select_basic_reciever);
                $fetch_reciever_basic = mysqli_fetch_assoc($execute_basic_reciever);
                    $reciever_firstname = $fetch_reciever_basic['firstName'];
                    $reciever_lastName = $fetch_reciever_basic['lastName'];

                $select_reciever_profile = "SELECT * FROM user_profile_image WHERE usr_email='$reciever_email' AND status_image = '1'";
                $execute_reciever_profile = mysqli_query($this->Frequency(), $select_reciever_profile);
                $fetch_reciever_profile = mysqli_fetch_assoc($execute_reciever_profile);
                    $profile_reciever = $fetch_reciever_profile['profile_image'];
                // ========================================================================================== 

                // SENDER EMAIL DETAIL
                // ==================================================================================
                $select_basic_sender = "SELECT * FROM intelligent_users WHERE email='$sender_email'";
                $execute_basic_sender = mysqli_query($this->Frequency(), $select_basic_sender);
                $fetch_sender_basic = mysqli_fetch_assoc($execute_basic_sender);
                    $sender_firstname = $fetch_sender_basic['firstName'];
                    $sender_lastName = $fetch_sender_basic['lastName'];

                $select_sender_profile = "SELECT * FROM user_profile_image WHERE usr_email='$sender_email' AND status_image = '1'";
                $execute_sender_profile = mysqli_query($this->Frequency(), $select_sender_profile);
                $fetch_sender_profile = mysqli_fetch_assoc($execute_sender_profile);
                    $profile_sender = $fetch_sender_profile['profile_image'];    
                // ====================================================================================

                if($sender_email == $sender){ ?>
                    <div class="reciever-message-area">
                        <div class="person-recieve">
                            <div class="message-detail-conv-recieve">
                                <div class="messager-name-time-recieve">
                                    <div class="name-message-recieve"><?php echo $sender_firstname; ?> <?php echo $sender_lastName; ?></div>
                                    <div class="time-elaspe"><?php echo $formatHour; ?></div>
                                </div>
                                <div class="full-message-recieved"><?php echo $message_recieved; ?></div>
                            </div>
                            <div><div class="user-conv-image-recieved"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_sender; ?>" alt="" height="100%" width="100%"></div></div>
                        </div>
                    </div>      
                <?php }else { ?>
                    <div class="sender-area-message">
                        <div class="person-send">
                            <div><div class="user-conv-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_sender; ?>" alt="" height="100%" width="100%"></div></div>
                            <div class="message-detail-conv-send">
                                <div class="messager-name-time">
                                    <div class="name-messager"><?php echo $sender_firstname; ?> <?php echo $sender_lastName; ?></div>
                                    <div class="time-elaspe"><?php echo $formatHour; ?></div>
                                </div>
                                <div class="full-message"><?php echo $message_recieved; ?></div>
                            </div>
                        </div>
                    </div>
                <?php  }
            }
        }

        public function search_new_message($email, $search){
            $search = strtolower($search);
            $select_more_trainer = "SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$email'";
            $execute_trainer = mysqli_query($this->Frequency(),$select_more_trainer);
            if(mysqli_num_rows($execute_trainer) > 0){
                $select_basic_sender = "SELECT * FROM intelligent_users WHERE firstName LIKE '%$search%' OR lastName LIKE '%$search%'";
                $execute_basic_sender = mysqli_query($this->Frequency(), $select_basic_sender);
                while($fetch_sender_basic = mysqli_fetch_assoc($execute_basic_sender)){
                    $firstname = $fetch_sender_basic['firstName'];
                    $lastName = $fetch_sender_basic['lastName'];
                    $getEmail = $fetch_sender_basic['email'];

                    $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$getEmail' AND status_image='1'";
                    $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                    $fetch_image = mysqli_fetch_assoc($execute_image); ?>

                    <div class="each-messager">
                        <div><div class="user-messager-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image'] ?>" alt="" width="100%" height="100%"></div></div>
                        <div class="messager-detail">
                            <div class="messager-name-select"><?php echo $firstname; ?> <?php echo $lastName; ?></div>
                            <div class="messger-function"><?php echo $getEmail; ?></div>
                        </div>
                        <div class="check_user"><input type="checkbox" name="user_chosen" onclick="display_me(this)" class="user_choose" value="<?php echo $getEmail; ?>"></div>
                    </div>

                <?php }
            }else{ 
                $select_more = "SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$email'";
                $execute_trainer = mysqli_query($this->Frequency(),$select_more);
                if(mysqli_num_rows($execute_trainer) > 0){

                    $select_basic_sender = "SELECT * FROM intelligent_users WHERE firstName LIKE '%$search%' OR lastName LIKE '%$search%' OR email LIKE '%$email%'";
                    $execute_basic_sender = mysqli_query($this->Frequency(), $select_basic_sender);
                    while($fetch_sender_basic = mysqli_fetch_assoc($execute_basic_sender)){
                        $firstname = $fetch_sender_basic['firstName'];
                        $lastName = $fetch_sender_basic['lastName'];
                        $getEmail = $fetch_sender_basic['email'];

                        $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$getEmail' AND status_image='1'";
                        $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                        $fetch_image = mysqli_fetch_assoc($execute_image); ?>

                        <div class="each-messager">
                            <div><div class="user-messager-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image'] ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="messager-detail">
                                <div class="messager-name-select"><?php echo $firstname; ?> <?php echo $lastName; ?></div>
                                <div class="messger-function"><?php echo $getEmail; ?></div>
                            </div>
                            <div class="check_user"><input type="checkbox" name="user_chosen" onclick="display_me(this)" class="user_choose" value="<?php echo $getEmail; ?>"></div>
                        </div>
              <?php } }else{ ?>
                <div class="no-data-found text-center mt-5">
                    <i class="fa fa-search"></i>
                    <div>No data found</div>
                </div>
            <?php }
            }
        }

        public function delete_converstion($user_deletion_email){
            $delete_conv1 = "UPDATE messages SET Sender_active='false' WHERE sender_email = '$this->E_mail' AND reciever_email = '$user_deletion_email'";
            $execute_deletion1 = mysqli_query($this->Frequency(), $delete_conv1);

            $delete_conv2 = "UPDATE messages SET reciever_active='false' WHERE reciever_email = '$this->E_mail' AND sender_email = '$user_deletion_email'";
            $execute_deletion2 = mysqli_query($this->Frequency(), $delete_conv2);
        }
    }


    // IMPLEMENT CLASS Message content
    // ===========================================================================================================================================
    
    // if request is to present all my friends
    // ===============================================================
    if(isset($_POST['display_users'])){
        $new_content = new Message_content($_POST['display_users']);
        $new_content->My_comp();
    }

    // if request is to display message area
    // ===============================================================
    
    if(isset($_POST['data_inputted'])){
        $new_content = new Message_content($_POST['getUser']);
        $inputted_data = $_POST['data_inputted'];
        $new_content->start_conv($inputted_data, $_POST['getUser']);  
    }

    // if( request is to save message
    // =====================================================================================================
    if(isset($_POST['getArrayData'])){
        $new_content = new Message_content($_POST['messeger']);
        $new_content->Save_message($_POST['messeger'], $_POST['getMessage'], $_POST['getArrayData']);
    }

    // if request is to recieve message
    // ======================================================================================================
    if(isset($_POST['getCharter'])){
        $new_content = new Message_content($_POST['my_email']);
        $new_content->fetch_messages($_POST['my_email'], $_POST['getCharter']);
    }

    // if request is to display all chart link
    // =======================================================================================================
    if(isset($_POST['getChart'])){
        $new_content = new Message_content($_POST['getChart']);
        $new_content->chart_link($_POST['getChart']);
    }

    // if request is ti fetch all message
    // ========================================================================================================
    if(isset($_POST['user_info_message'])){
        $new_content = new Message_content($_POST['my_email']);
        $new_content->Message_found($_POST['my_email'], $_POST['user_info_message']);
    }

    // if request is to fetch search message
    // ===================================================================================================
    if(isset($_POST['search_new_message'])){
        $new_search = new Message_content($_POST['searcher_email']);
        $new_search->search_new_message($_POST['searcher_email'], $_POST['search_new_message']);
    }

    // if request is to search chat
    // ========================================================================================================
    if(isset($_POST['search_conv'])){
        $new_search = new Message_content($_POST['user_email_conv']);
        $new_search->search_message_conv($_POST['search_conv'], $_POST['user_email_conv']);
    }

    // if request is to unset message
    // ======================================================================================================
    if(isset($_POST['fr_email'])){
        $new_search = new Message_content($_POST['fr_email']);
        $new_search->unsetMessage($_POST['my_emails'], $_POST['fr_email']);
    }

    // if request is to convert into short form
    // ==========================================================================================================
    if(isset($_POST['short_conv_area'])){
        $new_search = new Message_content($_POST['getUser_conv']);
        $new_search->message_area($_POST['short_conv_area']);
    }

    // if rquest is to delete converstion
    // ===============================================================================================================
    if(isset($_POST['user_delete_email'])){
        $new_search = new Message_content($_POST['my_use_email']);
        $new_search->delete_converstion($_POST['user_delete_email']);
    }
?>