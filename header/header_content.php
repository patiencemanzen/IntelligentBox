<?php 
    //  INITIALIZE DATABASE CONNECTION 
    // =========================================================================================================
    require_once ("../Scyllar.php");
    // =========================================================================================================

    // CLASS NOTIFICATION IMPLEMENTATION
    // =========================================================================================================
    class Notification_pop extends Scyllar {

        private function count_date($selected_date){
            $PostedDate = $selected_date;
            $currDate = Date("Y-m-d h:i:s");

            $date1 = strtotime($PostedDate);  
            $date2 = strtotime($currDate);  
            
            $diff = abs($date2 - $date1); 
            $years = floor($diff / (365*60*60*24));  
            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
            $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24)); 
            $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60)); 
            $minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);
            $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60)); 

            return $hours." Hour(s) ago";
        }

        public function all_notification ($user_email){
            $select_notification = "SELECT * FROM notifications WHERE notification_from_email IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$user_email') OR notification_from_email IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$user_email') AND notification_from_email != '$user_email' ORDER BY created_on DESC";
            $execute_notification = mysqli_query($this->Frequency(), $select_notification);
            if(mysqli_num_rows($execute_notification) > 0){ ?>

                <!-- when it is new notification -->
                <!-- <div class="noti-title"><i class="fa fa-bell-o"></i> <span>New</span></div> -->
                <div class="noti-list">
                    <?php while($fetch_new_notifiation = mysqli_fetch_assoc($execute_notification)){
                        $notifier_email = $fetch_new_notifiation['notification_from__email'];
                        $notification = $fetch_new_notifiation['notification'];
                        $notification_type = $fetch_new_notifiation['notification_type'];
                        $created_on = $fetch_new_notifiation['created_on'];
                        $notification_visibility = $fetch_new_notifiation['notification_visibility'];
                        $notification_read_status = $fetch_new_notifiation['notification_read_status'];

                        $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$notifier_email'";
                        $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                        $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                            $firstname = $fetch_basic_info['firstName'];
                            $lastname = $fetch_basic_info['lastName'];

                        // get notifier profile image
                        // ====================================================================
                        $select_profile_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$notifier_email' AND status_image='1'";
                        $execute_profile_image = mysqli_query($this->Frequency(),$select_profile_image);
                        $fetchResult = mysqli_fetch_assoc($execute_profile_image);
                            $profile_image = $fetchResult['profile_image']; 
                            if($notification_visibility == "new"){ ?>  
                                <div class="each-notification d-flex">
                                    <div class="notifier-image"><div class="noti-img-def"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                                    <div class="noti-detali ml-2">
                                        <div class="name-noti"><?php echo $firstname; ?> <?php echo $lastname; ?></div>
                                        <div class="noti-lesson"><?php echo $notification; ?></div>
                                        <div class="time-ageo"><i class="fa fa-globe mr-1"></i> <?php echo $this->count_date($created_on); ?></div>
                                    </div>
                                    <?php if($notification_type == "bell"){?>
                                        <div class="present-noti-type"><i class="fa fa-bell-o"></i></div>
                                    <?php }else if($notification_type == "post"){?>
                                        <div class="present-noti-type"><i class="fa fa-photo"></i></div>
                                    <?php }else if($notification_type == 'profile'){ ?>
                                        <div class="present-noti-type"><i class="fa fa-user-o"></i></div>
                                    <?php }else if($notification_type == 'class'){ ?>
                                        <div class="present-noti-type"><i class="fa fa-graduation-cap"></i></div>
                                    <?php }else if($notification_type == "like"){?>
                                        <div class="present-noti-type"><i class="fa fa-thumbs-o-up"></i></div>
                                    <?php }else if($notification_type == "comment"){?>
                                        <div class="present-noti-type"><i class="fa fa-comment-o"></i></div>
                                    <?php }else if($notification_type == "follow"){ ?>
                                        <div class="present-noti-type"><i class="fa fa-rss"></i></div>
                                    <?php }else if($notification_type == "question"){ ?>
                                        <div class="present-noti-type"><i class="fa fa-question"></i></div>
                                    <?php }else if($notification_type == "group"){ ?>
                                        <div class="present-noti-type"><i class="fa fa-group"></i></div>
                                    <?php }else if($notification_type == "invitation"){ ?>
                                        <div class="present-noti-type"><i class="fa fa-envelope-open-text"></i></div>
                                    <?php }else if($notification_type == "challenge_request"){ ?>
                                        <div class="present-noti-type"><i class="fa fa-superpowers"></i></div>
                                    <?php }else if($notification_type == "rejection"){ ?>
                                        <div class="present-noti-type"><i class="fa fa-minus-square-o"></i></div>
                                    <?php }else if($notification_type == "class"){ ?>
                                        <div class="present-noti-type"><i class="fa fa-layer-group"></i></div>
                                    <?php } ?>
                                </div>
                            <?php }else{ ?>
                                <div class="each-notification d-flex bg-white">
                                    <div class="notifier-image"><div class="noti-img-def"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                                    <div class="noti-detali ml-2">
                                        <div class="name-noti"><?php echo $firstname; ?> <?php echo $lastname; ?></div>
                                        <div class="noti-lesson"><?php echo $notification; ?></div>
                                        <div class="time-ageo"><i class="fa fa-globe mr-1"></i> <?php echo $this->count_date($created_on); ?></div>
                                    </div>
                                    <?php if($notification_type == "bell"){?>
                                        <div class="present-noti-type"><i class="fa fa-bell-o"></i></div>
                                    <?php }else if($notification_type == "post"){?>
                                        <div class="present-noti-type"><i class="fa fa-photo"></i></div>
                                    <?php }else if($notification_type == 'profile'){ ?>
                                        <div class="present-noti-type"><i class="fa fa-user-o"></i></div>
                                    <?php }else if($notification_type == 'class'){ ?>
                                        <div class="present-noti-type"><i class="fa fa-graduation-cap"></i></div>
                                    <?php }else if($notification_type == "like"){?>
                                        <div class="present-noti-type"><i class="fa fa-thumbs-o-up"></i></div>
                                    <?php }else if($notification_type == "comment"){?>
                                        <div class="present-noti-type"><i class="fa fa-comment-o"></i></div>
                                    <?php }else if($notification_type == "follow"){ ?>
                                        <div class="present-noti-type"><i class="fa fa-rss"></i></div>
                                    <?php }else if($notification_type == "question"){ ?>
                                        <div class="present-noti-type"><i class="fa fa-question"></i></div>
                                    <?php }else if($notification_type == "group"){ ?>
                                        <div class="present-noti-type"><i class="fa fa-group"></i></div>
                                    <?php }else if($notification_type == "invitation"){ ?>
                                        <div class="present-noti-type"><i class="fa fa-envelope-open-text"></i></div>
                                    <?php }else if($notification_type == "challenge_request"){ ?>
                                        <div class="present-noti-type"><i class="fa fa-superpowers"></i></div>
                                    <?php }else if($notification_type == "rejection"){ ?>
                                        <div class="present-noti-type"><i class="fa fa-minus-square-o"></i></div>
                                    <?php }else if($notification_type == "class"){ ?>
                                        <div class="present-noti-type"><i class="fa fa-layer-group"></i></div>
                                    <?php } ?>
                                </div>
                            <?php } 
                        } ?>
                </div>
                <!-- end new notification -->
            <?php }else{ ?>
                <div class="error_occur mt-5">
                    <div><i class="fa fa-bell-slash-o"></i></div>
                    <div class="message_found">No Notifications found yet</div>
                </div>
            <?php }
        }

        // COUNT NOTIFICATION
        // =================================================================================
        public function count_notification ($user_email){
            // select new notification
            $notification = 0;
            $select_new_notification = "SELECT * FROM notifications WHERE notification_from_email IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$user_email') AND notification_from_email != '$user_email' AND notification_visibility='new' AND notification_read_status='0'";
            $execute_new_notification = mysqli_query($this->Frequency(), $select_new_notification);
            while($fetch_new_notification = mysqli_fetch_assoc($execute_new_notification)){
                $notification = $notification + 1;
            }
            if($notification == "0"){

            }else{ ?>
                <div class="counter"><?php echo $notification; ?></div>
            <?php }
        }
        
        public function unset_notification_count ($user_mail){
            $unset_notification = "UPDATE notifications SET notification_read_status='1',notification_visibility='earlier' WHERE notification_from__email IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$user_mail') OR notification_from__email IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$user_mail') AND notification_from__email != '$user_mail'";
            $execute_unsetion = mysqli_query($this->Frequency(), $unset_notification);
        }


        // METHORD SHOW MESSAGES
        // =======================================================================================
        public function show_messages ($user_mailer){
            $select_message = "SELECT DISTINCT sender_email FROM messages WHERE reciever_email='$user_mailer' AND message_display='on'";
            $execute_message = mysqli_query($this->Frequency(), $select_message);
            if(mysqli_num_rows($execute_message) > 0 ){
                while($fetch_message = mysqli_fetch_assoc($execute_message)){
                    $sender_email = $fetch_message['sender_email'];

                    $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$sender_email'";
                    $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                    $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                        $firstname = $fetch_basic_info['firstName'];
                        $lastname = $fetch_basic_info['lastName'];

                    // get notifier profile image
                    // ====================================================================
                    $select_profile_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$sender_email' AND status_image='1'";
                    $execute_profile_image = mysqli_query($this->Frequency(),$select_profile_image);
                    $fetchResult = mysqli_fetch_assoc($execute_profile_image);
                        $profile_image = $fetchResult['profile_image'];

                    
                    $select_message_content = "SELECT * FROM messages WHERE sender_email='$sender_email' AND reciever_email='$user_mailer' AND message_display='on'";
                    $execute_message_content = mysqli_query($this->Frequency(), $select_message_content);
                    $fetch_message_content = mysqli_fetch_assoc($execute_message_content);
                        $message_visibility = $fetch_message_content['message_visibility'];
                        $created_on = $fetch_message_content['created_on'];

                    $select_message_text = "SELECT message FROM messages WHERE sender_email='$sender_email' AND reciever_email='$user_mailer' AND message_read='0' AND message_visibility='new' ORDER BY created_on DESC";
                    $execute_message_text = mysqli_query($this->Frequency(), $select_message_text);
                    $fetch_message_text = mysqli_fetch_array($execute_message_text);  
                    
                    if($message_visibility == "new"){ ?>
                        <!-- when it is new messages -->
                        <!-- <div class="noti-title"><i class="fa fa-envelope-open-o"></i> <span>New 4</span></div> -->
                        <div class="noti-list">
                            <div class="each-notification d-flex">
                                <div class="notifier-image"><div class="noti-img-def"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                                <div class="noti-detali ml-2">
                                    <div class="name-noti"><?php echo $firstname; ?> <?php echo $lastname; ?></div>
                                    <div class="noti-lesson" style="font-size: 14px; text-transform: none;"><?php echo $fetch_message_text[0]; ?></div>
                                    <div class="time-ageo"><i class="fa fa-globe mr-1"></i> <?php echo $this->count_date($created_on); ?></div>
                                </div>
                                <?php
                                    $each_message_count = 0; 
                                    $count_each_message = "SELECT * FROM messages WHERE sender_email='$sender_email' AND reciever_email='$user_mailer' AND message_visibility='new' AND message_read='0'";
                                    $execute_each_message = mysqli_query($this->Frequency(), $count_each_message);
                                    while($fetch_count_message = mysqli_fetch_assoc($execute_each_message)){
                                        $each_message_count = $each_message_count + 1;
                                    }

                                    if($each_message_count == 0){

                                    }else{ ?>
                                        <div class="present-msg-type"><i class="fa fa-envelope-open-o"></i> <?php echo $each_message_count; ?></div>
                                    <?php }
                                ?>
                            </div>
                        </div>
                        <!-- end new messages -->
                    <?php }else if($message_visibility == "earlier"){ ?>
                        <?php 
                            $select_message_text = "SELECT message FROM messages WHERE sender_email='$sender_email' AND reciever_email='$user_mailer' AND message_display='on' ORDER BY created_on DESC";
                            $execute_message_text = mysqli_query($this->Frequency(), $select_message_text);
                            $fetch_message_text = mysqli_fetch_array($execute_message_text);
                        ?>
                        <!-- when it is new messages -->
                        <!-- <div class="noti-title"><i class="fa fa-envelope-open-o"></i> <span>New 4</span></div> -->
                        <div class="noti-list">
                            <div class="each-notification d-flex">
                                <div class="notifier-image"><div class="noti-img-def"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                                <div class="noti-detali ml-2">
                                    <div class="name-noti"><?php echo $firstname; ?> <?php echo $lastname; ?></div>
                                    <div class="noti-lesson" style="font-size: 14px; text-transform: none;"><?php echo $fetch_message_text[0]; ?></div>
                                    <div class="time-ageo"><i class="fa fa-globe mr-1"></i> <?php echo $this->count_date($created_on); ?></div>
                                </div>
                                <?php
                                    $each_message_count = 0; 
                                    $count_each_message = "SELECT * FROM messages WHERE sender_email='$sender_email' AND reciever_email='$user_mailer' AND message_visibility='new' AND message_read='0'";
                                    $execute_each_message = mysqli_query($this->Frequency(), $count_each_message);
                                    while($fetch_count_message = mysqli_fetch_assoc($execute_each_message)){
                                        $each_message_count = $each_message_count + 1;
                                    }

                                    if($each_message_count == "0"){

                                    }else{ ?>
                                        <div class="present-msg-type"><i class="fa fa-envelope-open-o"></i> <?php echo $each_message_count; ?></div>
                                    <?php }
                                ?>
                            </div>
                        </div>
                        <!-- end new messages -->
                    <?php } ?>
               <?php }
            }else{ ?>
                <div class="error_occur mt-5">
                    <div><i class="fa fa-envelope-open-o"></i></div>
                    <div class="message_found">No Messages found yet</div>
                </div>
            <?php }
        }

        public function count_message ($user_mail){
            $messages = 0;
            $count_message = "SELECT * FROM messages WHERE  reciever_email='$user_mail' AND message_visibility='new' AND message_read='0'";
            $execute_message = mysqli_query($this->Frequency(), $count_message);
            while($fetch_count_message = mysqli_fetch_assoc($execute_message)){
                $messages = $messages + 1;
            }
            if($messages == "0"){

            }else{ ?>
                <div class="counter"><?php echo $messages; ?></div>
            <?php }
        }

        public function unsetMessage($user_mail){
            $update_message = "UPDATE messages SET message_read='1',message_visibility='earlier' WHERE reciever_email='$user_mail'";
            $execute_update = mysqli_query($this->Frequency(), $update_message);
        }

        public function search_users($user_name){
            $user_name = strtolower(trim($user_name));
            $select_user = "SELECT * FROM intelligent_users WHERE firstName LIKE '%$user_name%' OR lastName LIKE '%$user_name%' OR email LIKE '%$user_name%' AND Verified='complete'";
            $execute_search = mysqli_query($this->Frequency(), $select_user);
            if(mysqli_num_rows($execute_search) > 0){
                while($fetch_users = mysqli_fetch_assoc($execute_search)){
                    $firstname_result = $fetch_users['firstName'];
                    $lastname_result = $fetch_users['lastName'];

                    $select_basic_info = "SELECT * FROM intelligent_users WHERE firstName='$firstname_result' OR lastName='$lastname_result' OR email='$user_name'";
                    $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                    $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                        $email = $fetch_basic_info['email'];

                    $select_profile_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$email' AND status_image='1'";
                    $execute_profile_image = mysqli_query($this->Frequency(),$select_profile_image);
                    $fetchResult = mysqli_fetch_assoc($execute_profile_image);
                        $profile_image = $fetchResult['profile_image']; 
                        
                    $select_basic_info = "SELECT * FROM intelligent_users WHERE  email='$email'";
                    $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                    $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                        $firstname = $fetch_basic_info['firstName'];
                        $lastname = $fetch_basic_info['lastName'];
                        $url_code = $fetch_basic_info['url_identity']; ?>

                        <a href="../Profile/public_profile.box.php?scyllar=<?php echo $url_code; ?>"><div class="each-result">
                            <div class="user-result-image"><div class="result-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="result-detail">
                                <div class="name-result"><?php echo $firstname; ?> <?php echo $lastname; ?></div>
                            </div>
                        </div></a>
                <?php }
            }else{ ?>
            <div class="no-data-found text-center mt-5">
                <i class="fa fa-search"></i>
                <div>No data found</div>
            </div>
          <?php }
        }

        public function getProfileImage($Email){
            $selectImage = "SELECT * FROM user_profile_image WHERE usr_email='$Email' AND status_image='1'";
            $executeImage = mysqli_query($this->Frequency(),$selectImage);
            $fetchImage = mysqli_fetch_assoc($executeImage); ?>
                <img src="<?php echo '../Images/profile-img/profile-image/'.$fetchImage['profile_image'] ?>" width="100%" height="100%">
        <?php }

        public function get_all_challenge($user_email){
            $select_basic_info = "SELECT * FROM intelligent_users WHERE  email='$user_email'";
            $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
            $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                $get_user_identity = $fetch_basic_info['identity'];

            $select_challenges = "SELECT * FROM user_challenge WHERE host_user_identity IN (SELECT DISTINCT url_encode FROM user_groups WHERE identity IN(SELECT DISTINCT group_identity FROM user_group_member WHERE User_email='$user_email')) OR defender_user_identity IN (SELECT DISTINCT url_encode FROM user_groups WHERE identity IN(SELECT DISTINCT group_identity FROM user_group_member WHERE User_email='$user_email'))";
            $execute_challenge = mysqli_query($this->Frequency(), $select_challenges);
            if(mysqli_num_rows($execute_challenge) > 0 ){
            while($fetch_challenges = mysqli_fetch_assoc($execute_challenge)){
                $get_challenge_url_page = $fetch_challenges['challenge_url'];
                $fetch_challenger_url = $fetch_challenges['host_user_identity'];
                $fetch_defender_url = $fetch_challenges['defender_user_identity'];

                $select_challenger = "SELECT * from user_groups WHERE url_encode='$fetch_challenger_url'";
                $execute_url = mysqli_query($this->Frequency(), $select_challenger);
                $fetch_challnge_url = mysqli_fetch_assoc($execute_url);
                    $get_profile_image = $fetch_challnge_url['group_profile_image'];
                    $get_group_name = $fetch_challnge_url['group_name'];

                $select_defender = "SELECT * from user_groups WHERE url_encode='$fetch_defender_url'";
                $execute_url_defender = mysqli_query($this->Frequency(), $select_defender);
                $fetch_url_defender = mysqli_fetch_assoc($execute_url_defender);
                    $get_defender_profile_image = $fetch_url_defender['group_profile_image'];
                    $get_defender_name = $fetch_url_defender['group_name']; 
                 
                // select current challenge user
                // =============================================================================
                $select_current_challenger = "SELECT * FROM user_challenge_posts WHERE challenge_url='$get_challenge_url_page'";
                $execute_current_challenge = mysqli_query($this->Frequency(), $select_current_challenger);
                while($fetch_users_info = mysqli_fetch_assoc($execute_current_challenge)){
                    $user_identity = $fetch_users_info['user_identity'];
                    $fetch_time = $fetch_users_info['created_on'];
                   
                $select_basic = "SELECT * FROM intelligent_users WHERE identity='$user_identity'";
                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic);
                $fetch_basic = mysqli_fetch_assoc($execute_basic_info);
                     $firstName = $fetch_basic['firstName'];
                     $lastName = $fetch_basic['lastName'];    
                ?>
                     <a href="../Chalenges/challenge.php?challenge=<?php echo $get_challenge_url_page; ?>"><div class="each-notification d-flex">
                        <div class="notifier-image position-relative">
                            <div class="each_challenge position-relative">
                                <div class="first_group_noti"><img src="<?php echo '../Images/groups/'.$get_profile_image; ?>" alt="" width="100%" height="100%" data-toggle="tooltip" data-placement="bottom" title="<?php echo $get_group_name.' and '.$get_defender_name; ?>"></div>
                                <div class="secord_group"><img src="<?php echo '../Images/groups/'.$get_defender_profile_image; ?>" alt="" width="100%" height="100%" data-toggle="tooltip" data-placement="bottom" title="<?php echo $get_group_name.' and '.$get_defender_name; ?>"></div>
                            </div>
                        </div>
                        <div class="noti-detali ml-2">
                            <div class="name-noti"> <?php echo $firstName; ?> <?php echo $lastName; ?> </div>
                            <div class="noti-lesson"><?php echo $lastName; ?> Present New challenge </div>
                            <div class="time-ageo"><i class="fa fa-globe mr-1"></i> <?php echo $this->count_date($fetch_time); ?></div>
                        </div>
                        <div class="present-msg-type"><i class="fa fa-superpowers"></i></div>
                    </div></a>
            <?php }}
            }else{ ?>
                <div class="error_occur">
                    <div><i class="fa fa-superpowers"></i></div>
                    <div class="message_found">No Challenges found yet</div>
                </div>
           <?php }  
        }

        public function getLine($email){
            $select_line = "SELECT * FROM intelligent_users WHERE email='$email'";
            $execute_line = mysqli_query($this->Frequency(), $select_line);
            $fetch_line = mysqli_fetch_assoc($execute_line);
                $line = $fetch_line['log_Session'];
              
            if($line == "offline"){
                echo "Offline now";
            }else if($line == "online"){
                echo "Online now";
            }else{
                echo "Logen first time";
            }
        }
        
    }


    // ECHO CLASS NOTIFICATION
    // =========================================================================================================================================
    // IF REQUEST IS TO SHOW ALL NOTIFICATION
    // ==========================================================================================================================================
    if(isset($_POST['getNotification'])){
        $new_notification = new Notification_pop();
        $new_notification->all_notification($_POST['getNotification']);
    }

    // if request is to count all notification
    // ==========================================================================================================================================
    if(isset($_POST['count_notify'])){
        $new_count_notification = new Notification_pop();
        $new_count_notification->count_notification($_POST['count_notify']);
    }

    // if request is to unset notification count
    // ================================================================================================================================================
    if(isset($_POST['unsetCount_notification'])){
        $unset_new_notification = new Notification_pop();
        $unset_new_notification->unset_notification_count($_POST['unsetCount_notification']);
    }

    // if request is to count message and display it
    // ================================================================================================================================================
    if(isset($_POST['getMessages'])){
        $new_message = new Notification_pop();
        $new_message->show_messages($_POST['getMessages']);
    }

    // if request is to count message found
    // =================================================================================================================================================
    if(isset($_POST['countMessage'])){
        $count_messages = new Notification_pop();
        $count_messages->count_message($_POST['countMessage']);
    }

    // if request is to unset message read
    // ==========================================================================================================================================
    if(isset($_POST['unsetCount_message'])){
        $unset_message = new Notification_pop();
        $unset_message->unsetMessage($_POST['unsetCount_message']);
    }

    // if request is search users
    // ===========================================================================================================================================
    if(isset($_POST['searchUser'])){
        $search_user = new Notification_pop();
        $search_user->search_users(strtolower($_POST['searchUser']));
    }

    // if request is to display header profile image
    // ============================================================================================================================================
    if(isset($_POST['getHeaderProfileImage'])){
        $profile_image_header = new Notification_pop();
        $profile_image_header->getProfileImage($_POST['getHeaderProfileImage']);
    }

    // if request is to fetch all challenge groups
    // ===================================================================================================================================================
    if(isset($_POST['getChallenges'])){
        $new_challenge = new Notification_pop();
        $new_challenge->get_all_challenge($_POST['getChallenges']);
    }

    // if request is to shw online user
    // ==============================================================================================================
    if(isset($_POST['getLine_user_on'])){
        $new_session = new Notification_pop();
        $new_session->getLine($_POST['getLine_user_on']);
    }
?>