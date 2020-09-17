<?php 

    //  INITIALIZE DATABASE CONNECTION
    // ========================================================================================================
    require_once ("../Scyllar.php");
    // ========================================================================================================

    // CLASS CONTENT INITIALIZATION
    // =========================================================================================================
    class Content extends Scyllar {

        public function approved_member ($group_identity){
            $select_approved_member = "SELECT * FROM  user_group_member WHERE group_identity='$group_identity' AND approval='yes'";
            $execute_approved_member = mysqli_query($this->Frequency(), $select_approved_member);
            if(mysqli_num_rows($execute_approved_member) > 0){
                while($fetch_approved_member = mysqli_fetch_assoc($execute_approved_member)){
                    $user_email = $fetch_approved_member['User_email'];
                    $approved_date = $fetch_approved_member['joined_on'];
                    $format_date = date_format(date_create($approved_date), 'M d,Y');

                    $select_full_info = "SELECT * FROM intelligent_users WHERE email='$user_email'";
                    $execute_full_info = mysqli_query($this->Frequency(), $select_full_info);
                    $fetch_full_info = mysqli_fetch_assoc($execute_full_info);
                        $full_firstname = $fetch_full_info['firstName'];
                        $full_lastname = $fetch_full_info['lastName'];
                     
                    $select_profile_image = "SELECT * FROM user_profile_image WHERE usr_email='$user_email'";
                    $execute_profile_image = mysqli_query($this->Frequency(), $select_profile_image);
                    $fetch_profile_image = mysqli_fetch_assoc($execute_profile_image);
                        $profile_image = $fetch_profile_image['profile_image']; ?>   
                        <!-- each member -->
                        <!-- =========================================================================================================================== -->
                        <div class="each-member">
                            <div><div class="member-img"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="member-detail">
                                <div class="member-name"><?php echo $full_firstname; ?> <?php echo $full_lastname; ?></div>
                                <div class="member-email"><?php echo $user_email; ?></div>
                                <div class="joined"><i class="fa fa-calendar-check-o"></i> joined <?php echo $format_date; ?></div>
                            </div>
                        </div>
                        <!-- end each member -->
                        <!-- ================================================================================================================================= -->
                <?php }
            }else{ ?>
                <div class="no-member">
                    <span>no member found, please invite more</span>
                </div>
            <?php }
        }

        public function outsideRequest($group_identity){
            $select_approved_member = "SELECT * FROM  user_group_member WHERE group_identity='$group_identity' AND approval='no'";
            $execute_approved_member = mysqli_query($this->Frequency(), $select_approved_member);
            if(mysqli_num_rows($execute_approved_member) > 0){
                while($fetch_approved_member = mysqli_fetch_assoc($execute_approved_member)){
                    $user_email = $fetch_approved_member['User_email'];
                    $approved_date = $fetch_approved_member['joined_on'];
                    $format_date = date_format(date_create($approved_date), 'M d,Y');

                    $select_full_info = "SELECT * FROM intelligent_users WHERE email='$user_email'";
                    $execute_full_info = mysqli_query($this->Frequency(), $select_full_info);
                    $fetch_full_info = mysqli_fetch_assoc($execute_full_info);
                        $full_firstname = $fetch_full_info['firstName'];
                        $full_lastname = $fetch_full_info['lastName'];
                     
                    $select_profile_image = "SELECT * FROM user_profile_image WHERE usr_email='$user_email'";
                    $execute_profile_image = mysqli_query($this->Frequency(), $select_profile_image);
                    $fetch_profile_image = mysqli_fetch_assoc($execute_profile_image);
                        $profile_image = $fetch_profile_image['profile_image']; ?>  
                        <div class="each-request">
                            <div><div class="group-challenge-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="challenge-request-detail">
                                <div class="group-challenge-name"><?php echo $full_firstname; ?> <?php echo $full_lastname; ?></div>
                                <div class="short-ch-desc">
                                    <div class="group-type"><i class="fa fa-graduation-cap mr-1"></i>Sotware Development</div>
                                </div>
                                <div><div class="time-sended-not">september 23, 2020</div></div>
                            </div>
                            <div class="accurate-challenge">
                                <div><button class="reject">Remove</button></div>
                                <div class=""><button class="accept-challenge" id="<?php echo $user_email; ?>" onclick="allow_user(this)">Allow</button></div>
                            </div>
                        </div>
                <?php }
            }else{ ?>
                <div class="no-member">
                    <span>no member request found, please publish you group for more member</span>
                </div>
            <?php }
        }

        public function Wainting_member ($group_identity){
            $select_approved_member = "SELECT * FROM  user_group_member WHERE group_identity='$group_identity' AND approval='no'";
            $execute_approved_member = mysqli_query($this->Frequency(), $select_approved_member);
            if(mysqli_num_rows($execute_approved_member) > 0){
                while($fetch_approved_member = mysqli_fetch_assoc($execute_approved_member)){
                    $user_email = $fetch_approved_member['User_email'];
                    $approved_date = $fetch_approved_member['joined_on'];
                    $format_date = date_format(date_create($approved_date), 'M d,Y');

                    $select_full_info = "SELECT * FROM intelligent_users WHERE email='$user_email'";
                    $execute_full_info = mysqli_query($this->Frequency(), $select_full_info);
                    $fetch_full_info = mysqli_fetch_assoc($execute_full_info);
                        $full_firstname = $fetch_full_info['firstName'];
                        $full_lastname = $fetch_full_info['lastName'];
                     
                    $select_profile_image = "SELECT * FROM user_profile_image WHERE usr_email='$user_email'";
                    $execute_profile_image = mysqli_query($this->Frequency(), $select_profile_image);
                    $fetch_profile_image = mysqli_fetch_assoc($execute_profile_image);
                        $profile_image = $fetch_profile_image['profile_image']; ?>  
                         
                        <div class="each-member">
                            <div><div class="member-img"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                            <div class="member-detail mt-2">
                                <div class="member-name"><?php echo $full_firstname; ?> <?php echo $full_lastname; ?></div>
                                <div class="member-email"><?php echo $user_email; ?></div>
                            </div>
                            <div class="accurate-challenge ml-2">
                                <div><button class="reject">Remove</button></div>
                                <div class=""><button class="accept-challenge" id="<?php echo $user_email; ?>" onclick="allow_user(this)">Allow</button></div>
                            </div>
                        </div>
                <?php }
            }else{ ?>
                <div class="no-member">
                    <span>no member request found, please publish you group for more member</span>
                </div>
            <?php }
        }

        public function aprove_member($useremail, $group_identity){
             $update_group_member = "UPDATE user_group_member SET approval='yes' WHERE User_email='$useremail' AND group_identity='$group_identity'";
             $execute_group_member = mysqli_query($this->Frequency(), $update_group_member);
        }

        public function show_media_photo($group_identity){
            $select_media_photo = "SELECT * FROM user_group_post WHERE group_identity='$group_identity' AND media_type != 'mp4'";
            $execute_media_photo = mysqli_query($this->Frequency(), $select_media_photo);
            if(mysqli_num_rows($execute_media_photo) > 0){
                while($fetch_media_photo = mysqli_fetch_assoc($execute_media_photo)){
                    $media_photo = $fetch_media_photo['media_posted']; ?>
                        <a href="<?php echo '../Images/group_discusion/'.$media_photo; ?>" data-lightbox="mygallery"><div class="shared-photo"><div class="inner-photo"><img src="<?php echo '../Images/group_discusion/'.$media_photo; ?>" alt="" width="100%" height="100%"></div></div></a>
                <?php }
            }else{ ?>
                <div class="no-member">
                    <span>No Photo</span>
                </div>
            <?php }
        }

        public function show_media_video($group_identity){
            $select_media_video = "SELECT * FROM user_group_post WHERE group_identity='$group_identity' AND media_type='mp4'";
            $execute_media_video = mysqli_query($this->Frequency(), $select_media_video);
            if(mysqli_num_rows($execute_media_video)){
                while($fetch_media_video = mysqli_fetch_assoc($execute_media_video)){
                    $media_video = $fetch_media_video['media_posted']; ?>
                        <div class="video-shared"><div class="inner-video"><video src="<?php echo '../Images/group_discusion/'.$media_video; ?>" width="100%" height="100%"></video></div></div>
                <?php } 
            }
        }

        
        public function count_member($group_identity){
            $member = 0;
            $count_member = "SELECT * FROM user_group_member WHERE group_identity='$group_identity' AND approval='yes'";
            $execute_member = mysqli_query($this->Frequency(), $count_member);
            while($fetch_member = mysqli_fetch_assoc($execute_member)){
                $member = $member + 1;
            }?>
            <div class="count-member">with <span><?php echo $member; ?></span> Member</div>
        <?php }

        public function Active_member ($group_identity, $my_email){
            $select_member = "SELECT * FROM user_group_member WHERE group_identity='$group_identity' AND User_email != '$my_email' AND approval='yes'";
            $execute_member = mysqli_query($this->Frequency(), $select_member);
            if(mysqli_num_rows($execute_member) > 0){
                while($fetch_member = mysqli_fetch_assoc($execute_member)){
                    $user_email = $fetch_member['User_email'];

                    $select_full_info = "SELECT * FROM intelligent_users WHERE email='$user_email'";
                    $execute_full_info = mysqli_query($this->Frequency(), $select_full_info);
                    $fetch_full_info = mysqli_fetch_assoc($execute_full_info);
                        $full_firstname = $fetch_full_info['firstName'];
                        $full_lastname = $fetch_full_info['lastName'];
                        $full_title = $fetch_full_info['title'];
                        $user_identity = $fetch_full_info['identity'];
                    
                    $get_profile_image = "SELECT * FROM user_profile_image WHERE usr_email='$user_email'";
                    $execute_image = mysqli_query($this->Frequency(), $get_profile_image);
                    $fetch_profile_image = mysqli_fetch_assoc($execute_image);
                        $image_active = $fetch_profile_image['profile_image']; 

                    $selectBio = "SELECT bio FROM user_bio WHERE email='$user_email' AND bio_status='on'";
                    $executeBio = mysqli_query($this->Frequency(),$selectBio);
                        $fetchBio = mysqli_fetch_assoc($executeBio);

                    $followers = 0;
                    $selectFollowers = "SELECT * FROM user_follow_board WHERE reciever_email='$user_email'";
                    $executeFollowers = mysqli_query($this->Frequency(),$selectFollowers);
                    while($fetchFollowers = mysqli_fetch_assoc($executeFollowers)){
                        $followers = $followers + 1;
                    }
        
                    $Following = 0;
                    $selectFollowing = "SELECT * FROM user_follow_board WHERE host_email='$user_email'";
                    $execute_following = mysqli_query($this->Frequency(),$selectFollowing);
                    while($fetchFollowing = mysqli_fetch_assoc($execute_following)){
                        $Following = $Following + 1;
                    }  ?>

                    <!-- each user -->
                    <!-- ========================================================================================================================================================== -->
                    <!-- ========================================================================================================================================================== -->
                    <div class="position-relative" onmouseover="about_user(this)" onmouseout="about_user(this)">
                        <div class="each-learner shadow-sm">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="learner-image">
                                        <div class="img"><img src="<?php echo '../Images/profile-img/profile-image/'.$image_active; ?>" alt="" width="100%" height="100%"></div>
                                    </div>
                                    <div class="name">
                                        <div><?php echo $full_firstname; ?> <?php echo $full_lastname; ?></div>
                                        <div><?php echo $user_email; ?></div>
                                    </div>
                                </div>
                                <?php 
                                    $select_relation = "SELECT * FROM intelligent_users WHERE email='$user_email' AND email IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$my_email') AND email IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$my_email')";
                                    $execute_relation = mysqli_query($this->Frequency(), $select_relation);
                                    if(mysqli_num_rows($execute_relation) > 0 ){ ?>
                                        <!-- <div class="follow mt-2 ml-2"><button>Following</button></div> -->
                                   <?php }else{ ?>
                                        <div class="follow mt-2 ml-2"><button id="<?php echo $user_email; ?>" onclick="followUser(this)">Follow</button></div>
                                   <?php } ?>
                            </div>
                        </div>
                        <!-- about user -->
                        <div class="about-usr">
                            <div class="about-specification">
                                <div><div class="user-about-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$image_active; ?>" alt="" width="100%" height="100%"></div></div>
                                <div class="about-info mt-3">
                                    <div class="firstname"><span><?php echo $full_firstname; ?> <?php echo $full_lastname; ?></span></div>
                                    <div class="email"><span><?php echo $user_email; ?></span></div>
                                    <div class="department"><span><?php echo $fetchBio['bio']; ?></span></div>
                                    <!-- <div class="school">world mission school</div> -->
                                </div>
                            </div>
                            <div class="activity-status">
                                <div class="followers">followers <span><?php echo $followers; ?></span></div>
                                <div class="following">Following <span><?php echo $Following; ?></span></div>
                                <div class="trainer">Classess <span>0</span></div>
                            </div>
                        </div>
                        <!-- end about user -->
                    </div>
                    <!-- end each user -->
                    <!-- ========================================================================================================================================================== -->
                    <!-- ========================================================================================================================================================== -->

                <?php }            
            }else{ ?>
                <div class="no-data-found d-flex flex-column text-center">
                    <i class="fa fa-user-o"></i>
                    <span>No Member in this group</span>
                </div>
           <?php }
        }

        private function count_Mmeber_discussion($group_identity){
            $member_count = 0;
            $count_member = "SELECT * FROM user_group_member WHERE group_identity='$group_identity' AND approval='yes'";
            $execute_member = mysqli_query($this->Frequency(), $count_member);
            while($fetch_member = mysqli_fetch_assoc($execute_member)){
                $member_count = $member_count + 1;
            } 
            echo $member_count;
        }


        // GET FRIEND THAT ALREADY USE THIS GROUP
        // =====================================================================================================
        public function most_user ($group_identity, $user_email){
            $select_friend_group = "SELECT * FROM intelligent_users WHERE email IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$user_email') AND email IN (SELECT DISTINCT User_email FROM user_group_member WHERE group_identity='$group_identity' AND approval='yes') LIMIT 3";
            $execute_friend_group = mysqli_query($this->Frequency(), $select_friend_group);
            $fetch_friend_group = mysqli_fetch_assoc($execute_friend_group);
                $getMailer = $fetch_friend_group['email'];

                $get_profile_image = "SELECT * FROM user_profile_image WHERE usr_email='$getMailer'";
                $execute_image = mysqli_query($this->Frequency(), $get_profile_image);
                while($fetch_profile_image = mysqli_fetch_assoc($execute_image)){
                    $image = $fetch_profile_image['profile_image']; ?>

                    <div><div class="first-friends-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$image; ?>" alt="" width="100%" height="100%"></div></div>
                    <!-- <div><div class="middle-friend-image"><img src="<?php //echo '../Images/profile-img/profile-image/'.$image; ?>" alt="" width="100%" height="100%"></div></div>
                    <div><div class="third-friend-image"><img src="<?php //echo '../Images/profile-img/profile-image/'.$image; ?>" alt="" width="100%" height="100%"></div></div> -->
         <?php  } ?>
              <div class="count-member">+ <?php $this->count_Mmeber_discussion($group_identity); ?> member</div>
  <?php }

        
        public function discover_people($user_email, $title){
            $discover_people = "SELECT * FROM intelligent_users WHERE email IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$user_email') OR email IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$user_email') AND email != '$user_email' AND title='$title' AND Verified='complete'";
            $execute_people = mysqli_query($this->Frequency(), $discover_people);
            while($fetch_people = mysqli_fetch_assoc($execute_people)){
                $people_email = $fetch_people['email'];
                $firstName = $fetch_people['firstName'];
                $lastName = $fetch_people['lastName'];

                $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$people_email' AND status_image='1'";
                $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                    $fetch_image = mysqli_fetch_assoc($execute_image); ?>
                    
                    <!-- each disc0ver -->
                    <!-- ================================================================================================================================== -->
                    <div class="each-discovery">
                        <div class="d-flex">
                            <div><div class="discover-image">
                                <img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%">
                            </div></div>
                            <div class="discovery-detail">
                                <div class="dis-name"><?php echo $firstName; ?> <?php echo $lastName; ?></div>
                                <div class="dis-dep">& <?php echo $people_email; ?></div>
                            </div>
                        </div>
                        <div class="follow-over"><button class="follow-discovery" id="<?php echo $people_email; ?>" onclick="invite(this)">Invite</button></div>
                    </div>
                    <!-- end discover -->
                    <!-- ========================================================================================================================================== -->
                                                        
            <?php }
        }

        // METHORD FOR INVITE USERS
        // =====================================================================================================================================================================
        public function invite_users($invite, $inviter){
            $discover_people = "SELECT * FROM intelligent_users WHERE email='$inviter'";
            $execute_people = mysqli_query($this->Frequency(), $discover_people);
            $fetch_people = mysqli_fetch_assoc($execute_people);
                $firstName = $fetch_people['firstName'];
                $lastName = $fetch_people['lastName'];
                $notification = $firstName.' '.$lastName.' invite you to join group';
                $created_on = Date("Y-m-d h:m:s");

            $insert_invitation = "INSERT INTO `notifications` (`identity`, `notification_from_email`, `notification_to_email`, `notification`, `notification_type`, `notification_read_status`, `notification_visibility`, `notification_quite`, `created_on`) VALUES ('', '$inviter', '$invite', '$notification', 'invitation', '0', 'new', 'on', '$created_on')";
            $execute_invitation = mysqli_query($this->Frequency(), $insert_invitation);
            if($execute_invitation){
               return true;
            }else{
                return false;
            }
        }

        public function all_groups ($user_email, $group_identity){
            $select_all_groups = "SELECT * FROM user_groups WHERE identity != '$group_identity'";
            $execute_all_groups = mysqli_query($this->Frequency(), $select_all_groups);
            while($fetch_all_groups = mysqli_fetch_assoc($execute_all_groups)){
                $groups_profile_image = $fetch_all_groups['group_profile_image'];
                $group_name = $fetch_all_groups['group_name'];
                $group_privacy = $fetch_all_groups['group_privacy'];
                $group_identity = $fetch_all_groups['identity'];
                $creater = $fetch_all_groups['email'];

                $member = 0;
                $select_member = "SELECT * FROM user_group_member WHERE group_identity='$group_identity'";
                $execute_member_count = mysqli_query($this->Frequency(), $select_member);
                while($fetch_member_count = mysqli_fetch_assoc($execute_member_count)){
                    $member = $member + 1;
                }

                if($group_privacy == "Public"){ ?>
                    <div class="each-request">
                        <div><div class="group-challenge-image"><img src="<?php echo '../Images/groups/'.$groups_profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                        <div class="challenge-request-detail">
                            <div class="group-challenge-name"><?php echo $group_name; ?></div>
                            <div class="short-ch-desc">
                                <div class="group-type"><i class="fa fa-unlock mr-1"></i> Public group</div>
                                <div class="member-group-count"><?php echo $member; ?> Mmebers</div>
                            </div>
                            <div><div class="time-sended-not">User groups</div></div>
                        </div>
                        <div class="accurate-challenge">
                            <div class=""><button class="accept-challenge" id="<?php echo $group_identity; ?>" onclick="request_challenge(this)">Challenge request</button></div>
                        </div>
                    </div>
                <?php }else{

                }
            }
        }

        public function challenge_request ($inviter_identity, $invite_identity){
            $select_basic_info = "SELECT * FROM user_groups WHERE identity='$inviter_identity'";
            $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
            $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                $url_code_inviter = $fetch_basic_info['url_encode'];
                $group_name = $fetch_basic_info['group_name'];

            $select_basic_invite_info = "SELECT * FROM user_groups WHERE identity='$invite_identity'";
            $execute_invite_info = mysqli_query($this->Frequency(), $select_basic_invite_info);
            $fetch_invite_info = mysqli_fetch_assoc($execute_invite_info);
                $url_invite_code = $fetch_invite_info['url_encode'];    

            $notification = $group_name.' Send challenge request';  
            $created_on = Date("Y-m-d h:m:s");  
            $insert_request = "INSERT INTO `notifications` (`identity`, `notification_from_email`, `notification_to_email`, `notification`, `notification_type`, `notification_read_status`, `notification_visibility`, `notification_quite`, `created_on`) VALUES ('', '$url_code_inviter', '$url_invite_code', '$notification', 'challenge_request', '0', 'new', 'on', '$created_on')";
            $execute_request = mysqli_query($this->Frequency(), $insert_request);
            if($execute_request){
                return true;
            }else{
                return false;
            }
        }

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

            if($days > 30){
               return $PostedDate;
            }if($days < 30){
                return $days." Day(s) ago";
            }if($days < 0){
                return $hours." Hour(s) ago";
            }
        }

        public function recieve_challenge_request($group_identity){
            $select_basic_info = "SELECT * FROM user_groups WHERE identity='$group_identity'";
            $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
            $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                $url_code_inviter = $fetch_basic_info['url_encode'];
                $group_name = $fetch_basic_info['group_name'];

            $select_notification = "SELECT * FROM notifications WHERE notification_to_email='$url_code_inviter' ORDER BY created_on ASC";
            $execute_notification = mysqli_query($this->Frequency(), $select_notification);
            while($fetch_notification = mysqli_fetch_assoc($execute_notification)){
                $get_group_url = $fetch_notification['notification_from_email'];
                $get_current_titme = $fetch_notification['created_on'];
                $get_notification_type = $fetch_notification['notification_type'];

                $select_basic_info = "SELECT * FROM user_groups WHERE url_encode='$get_group_url'";
                $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                    $group_name = $fetch_basic_info['group_name'];
                    $group_profile_image = $fetch_basic_info['group_profile_image'];
                    $get_group_identity = $fetch_basic_info['identity'];
                    $group_privacy = $fetch_basic_info['group_privacy'];
                    
                    $member = 0;
                    $select_member = "SELECT * FROM user_group_member WHERE group_identity='$get_group_identity'";
                    $execute_member_count = mysqli_query($this->Frequency(), $select_member);
                    while($fetch_member_count = mysqli_fetch_assoc($execute_member_count)){
                        $member = $member + 1;
                    } 

                if($get_notification_type == "rejection"){ ?>
                    <div class="each-request">
                        <div><div class="group-challenge-image"><img src="<?php echo '../Images/groups/'.$group_profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                        <div class="challenge-request-detail">
                            <div class="group-challenge-name"><?php echo $group_name; ?></div>
                            <div class="short-ch-desc">
                                <div class="group-type"><?php if($group_privacy == "Private"){?> <i class="fa fa-lock mr-1"></i> Private group <?php }else{ ?> <i class="fa fa-unlock mr-1"></i> Public group <?php } ?></div>
                                <div class="member-group-count"><?php echo $member; ?> Mmebers</div>
                            </div>
                            <div><div class="time-sended-not"><?php echo $fetch_notification['notification'];?> <?php echo $this->count_date($get_current_titme); ?></div></div>
                        </div>
                    </div>
                <?php }else if($get_notification_type == "accepted"){ ?>
                    <div class="each-request">
                        <div><div class="group-challenge-image"><img src="<?php echo '../Images/groups/'.$group_profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                        <div class="challenge-request-detail">
                            <div class="group-challenge-name"><?php echo $group_name; ?></div>
                            <div class="short-ch-desc">
                                <div class="group-type"><?php if($group_privacy == "Private"){?> <i class="fa fa-lock mr-1"></i> Private group <?php }else{ ?> <i class="fa fa-unlock mr-1"></i> Public group <?php } ?></div>
                                <div class="member-group-count"><?php echo $member; ?> Mmebers</div>
                            </div>
                            <div><div class="time-sended-not"><?php echo $fetch_notification['notification'];?> <?php echo $this->count_date($get_current_titme); ?></div></div>
                        </div>
                    </div>
                <?php  }else{ ?>
                    <div class="each-request">
                        <div><div class="group-challenge-image"><img src="<?php echo '../Images/groups/'.$group_profile_image; ?>" alt="" width="100%" height="100%"></div></div>
                        <div class="challenge-request-detail">
                            <div class="group-challenge-name"><?php echo $group_name; ?></div>
                            <div class="short-ch-desc">
                                <div class="group-type"><?php if($group_privacy == "Private"){?> <i class="fa fa-lock mr-1"></i> Private group <?php }else{ ?> <i class="fa fa-unlock mr-1"></i> Public group <?php } ?></div>
                                <div class="member-group-count"><?php echo $member; ?> Mmebers</div>
                            </div>
                            <div><div class="time-sended-not"><?php echo $fetch_notification['notification'];?> <?php echo $this->count_date($get_current_titme); ?></div></div>
                        </div>
                        <div class="accurate-challenge">
                            <div><button class="reject" id="<?php echo  $get_group_url; ?>" onclick="reject_challenge(this)">Reject</button></div>
                            <div class=""><button class="accept-challenge" id="<?php echo $get_group_url; ?>" onclick="accept_challenge(this)">Accept</button></div>
                        </div>
                    </div>
              <?php  } 
            }    
        }

        public function count_notification_request($group_identity){
            $select_basic_info = "SELECT * FROM user_groups WHERE identity='$group_identity'";
            $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
            $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                $url_code = $fetch_basic_info['url_encode'];
                
            $noti_request = 0;
            $select_notification = "SELECT * FROM notifications WHERE notification_type='challenge_request' AND notification_to_email='$url_code' AND notification_read_status='0'";
            $execute_notification = mysqli_query($this->Frequency(), $select_notification);
            while($fetch_notification = mysqli_fetch_assoc($execute_notification)){
                $noti_request = $noti_request + 1;
            } 
            if($noti_request == '0'){

            }else{ ?>
            <div class="counter-request"><span><?php echo $noti_request; ?></span></div>
       <?php } }

       public function reject_challenge($group_identity, $challenge_from){
            $select_basic_info = "SELECT * FROM user_groups WHERE identity='$group_identity'";
            $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
            $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                $url_code_inviter = $fetch_basic_info['url_encode'];
                $get_group_name = $fetch_basic_info['group_name'];
                $notification = $get_group_name.' reject your group challenge';
                $created_on = Date("Y-m-d h:m:s");
                
            $update = "DELETE FROM notifications WHERE notification_from_email='$challenge_from' AND notification_to_email='$url_code_inviter'";
            $execute_rejection = mysqli_query($this->Frequency(), $update);

            $insert_rejection = "INSERT INTO `notifications` (`identity`, `notification_from_email`, `notification_to_email`, `notification`, `notification_type`, `notification_read_status`, `notification_visibility`, `notification_quite`, `created_on`) VALUES ('', '$url_code_inviter', '$challenge_from', '$notification', 'rejection', '0', 'new', 'on', '$created_on')";
            $execute_rejection = mysqli_query($this->Frequency(), $insert_rejection);
       }

       public function accept_challenge($challenge_from, $get_group_identity){
            $select_basic_info = "SELECT * FROM user_groups WHERE identity='$get_group_identity'";
            $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
            $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                $url_code_inviter = $fetch_basic_info['url_encode'];
                $get_group_name = $fetch_basic_info['group_name'];
           
            $challenge_url = sha1($challenge_from.'@'.$url_code_inviter);   
            $created_on = Date("Y-m-d h:m:s"); 
            $insert_challenge = "INSERT INTO user_challenge VALUE ('','$challenge_url','$challenge_from','$url_code_inviter','$created_on')";    
            $execute_challenge = mysqli_query($this->Frequency(), $insert_challenge);
        
            $notification = $get_group_name.' Accepted group challenge';
            $update_notification = "UPDATE notifications SET notification_type='accepted', notification='$notification' WHERE notification_from_email='$challenge_from' AND notification_to_email='$url_code_inviter'";
            $execute_notification = mysqli_query($this->Frequency(), $update_notification);
       }

       public function get_all_challenge($group_identity){
           $select_all_challenge_info = "SELECT * from user_groups WHERE identity='$group_identity'";
           $execute_url = mysqli_query($this->Frequency(), $select_all_challenge_info);
           $fetch_challnge_url = mysqli_fetch_assoc($execute_url);
                $group_url = $fetch_challnge_url['url_encode'];

            $select_challenges = "SELECT * FROM user_challenge WHERE host_user_identity='$group_url' OR defender_user_identity='$group_url'";
            $execute_challenge = mysqli_query($this->Frequency(), $select_challenges);
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
                    $get_defender_name = $fetch_url_defender['group_name']; ?>

                    <a href="../Chalenges/challenge.php?challenge=<?php echo $get_challenge_url_page; ?>"><div class="each_challenge mb-2">
                        <div class="first_group"><img src="<?php echo '../Images/groups/'.$get_profile_image; ?>" alt="" width="100%" height="100%" data-toggle="tooltip" data-placement="bottom" title="<?php echo $get_group_name.' and '.$get_defender_name; ?>"></div>
                        <div class="secord_group"><img src="<?php echo '../Images/groups/'.$get_defender_profile_image; ?>" alt="" width="100%" height="100%" data-toggle="tooltip" data-placement="bottom" title="<?php echo $get_group_name.' and '.$get_defender_name; ?>"></div>
                    </div></a>
            <?php }
                 
       }

       public function update_group_desc ($group_identity, $inputed_bio){
           $update_desc = "UPDATE user_groups SET group_bio='$inputed_bio' WHERE identity='$group_identity'";
           $execute_updates = mysqli_query($this->Frequency(), $update_desc);
           if($execute_updates){
               return true;
           }else{
               return false;
           }
       }

        //    methord fr deleting groups
        // ==================================================================================================================================
        public function Delete_group($creater, $group_url){
            $DELETE_group = "DELETE FROM user_groups WHERE url_encode='$group_url' AND email='$creater'";
            $execute_deletion = mysqli_query($this->Frequency(), $DELETE_group);
        }

        // METHOD GET PROFILE IMAGE
        // =============================================================================================================================
        public function getProfileImage($Email){
            $selectImage = "SELECT * FROM user_profile_image WHERE usr_email='$Email' AND status_image='1'";
            $executeImage = mysqli_query($this->Frequency(),$selectImage);
            $fetchImage = mysqli_fetch_assoc($executeImage); ?>
                <img src="<?php echo '../Images/profile-img/profile-image/'.$fetchImage['profile_image'] ?>" width="100%" height="100%">
        <?php }

        // SEARCH MEMBER
        // ====================================================================================================================================
        public function getMemberSearch($search, $group_identity, $my_email){
            $mainSearch = strtolower($search);
            $select_member = "SELECT DISTINCT User_email FROM user_group_member WHERE group_identity='$group_identity' AND User_email LIKE '%$mainSearch%' AND User_email != '$my_email'";
            $execute_member = mysqli_query($this->Frequency(), $select_member);
            if(mysqli_num_rows($execute_member) > 0){ 
                while($fetch_users = mysqli_fetch_assoc($execute_member)){
                    $EM_result = $fetch_users['User_email'];
                    $select_basic_info = "SELECT * FROM intelligent_users WHERE  email='$EM_result'";
                    $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
                    $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);
                        $firstname_result = $fetch_basic_info['firstName'];
                        $lastname_result = $fetch_basic_info['lastName'];

                    $select_basic_info = "SELECT * FROM intelligent_users WHERE firstName='$firstname_result' OR lastName='$lastname_result' OR email='$mainSearch'";
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
            } else { ?>
                <div class="no-data-found text-center mt-5">
                    <i class="fa fa-search"></i>
                    <div>No Member found</div>
                </div>
           <?php }
        }

    }

    // IMPLEMMENT CLASS REQUEST 
    // ==========================================================================================================
    
    // if request is to show approved member
    // =========================================================================================================
    if(isset($_POST['approved'])){
        $new_content = new Content();
        $new_content->approved_member($_POST['approved']);
    }

    // if request is to show waiting request member
    // ========================================================================================================
    if(isset($_POST['Waiting_approval'])) {
        $new_content = new Content();
        $new_content->Wainting_member($_POST['Waiting_approval']);
    }

    // if request is to show all photo
    // =========================================================================================================
    if(isset($_POST['media_photo'])){
        $new_content = new Content();
        $new_content->show_media_photo($_POST['media_photo']);
    }

    // if request is to show all video
    // =========================================================================================================
    if(isset($_POST['media_Vdeo'])){
        $new_content = new Content();
        $new_content->show_media_video($_POST['media_Vdeo']);
    }

    // if request is count member
    // ==========================================================================================================
    if(isset($_POST['getAmmountMember'])){
        $new_content = new Content();
        $new_content->count_member($_POST['getAmmountMember']);
    }

    // if request is to count active member
    // ===========================================================================================================
    if(isset($_POST['getActive_member'])){
        $new_content = new Content();
        $new_content->Active_member($_POST['getActive_member'], $_POST['getMy_email']);
    }

    // if request is to count and display my friend participate in this group
    // ==========================================================================================================
    if(isset($_POST['getMost_users'])){
        $new_content = new Content();
        $new_content->most_user($_POST['getMost_users'], $_POST['GethiddenEmail']);
    }

       // if requst is to show discoverable people
    // ===================================================================================================================
    if(isset($_POST['discoverStudent'])){
        $show_discoverable = new Content();
        $show_discoverable->discover_people($_POST['discoverStudent'], $_POST['title']);
    }

    // if requst is to discover trainer
    // ===================================================================================================================
    if(isset($_POST['discoverTrainer'])){
        $show_discoverable = new Content();
        $show_discoverable->discover_people($_POST['discoverTrainer'], $_POST['title_trainer']);
    }

    // if request is to invite users
    // ==========================================================================================================================
    if(isset($_POST['inviterEmail'])){
        $new_invitation = new Content();
        if($new_invitation->invite_users($_POST['inviteEmail'], $_POST['inviterEmail'])){
            $response = "Invited";
        }else{
            $response = "Not invited";
        }
        exit(json_encode($response));
    }

    // if request is to show all groups on group admin page
    // ==========================================================================================================================
    if(isset($_POST['request_all_groups'])){
        $show_group = new Content();
        $show_group->all_groups($_POST['request_all_groups'], $_POST['group_identity']);
    }

    // if request is to send request of challenge
    // ==========================================================================================================================
    if(isset($_POST['getInviter_identity'])){
        $challenge_request = new Content();
        $challenge_request->challenge_request($_POST['getInviter_identity'], $_POST['getGroup_identity']);
    }

    // if request is to show all request recieved challenge
    // ===========================================================================================================================
    if(isset($_POST['getgroup_request'])){
        $recieve_request = new Content();
        $recieve_request->recieve_challenge_request($_POST['getgroup_request']);
    }

    // if request is to count challene recieve 
    // =============================================================================================================================
    if(isset($_POST['getChallenge_count'])){
        $count_challenge = new Content();
        $count_challenge->count_notification_request($_POST['getChallenge_count']);
    }

    // if request is to reject challenge
    // ===================================================================================================================================
    if(isset($_POST['getGroup_reject'])){
        $reject_challenge = new Content();
        $reject_challenge->reject_challenge($_POST['getGroup_reject'], $_POST['getChallenge_from']);
    }

    // if request is to accept challenge
    // ======================================================================================================================================
    if(isset($_POST['get_group_identity'])){
        $accept_challenge = new Content();
        $accept_challenge->accept_challenge($_POST['challenge_from_group'], $_POST['get_group_identity']);
    }

    // if requst is to fetch all challenge tha i have achived
    // ============================================================================================================-==========================
    if(isset($_POST['get_all_challenge'])){
        $new_challenge = new Content();
        $new_challenge->get_all_challenge($_POST['get_all_challenge']);
    }

    // if request is to update group description
    // ==============================================================================================================
    if(isset($_POST['group_desc'])){
        $new_bio = new Content();
        if($new_bio->update_group_desc($_POST['group_identity'], $_POST['group_desc'])){
            $response = "submittted";
        }else{
            $response = "fail to submit";
        }
        exit(json_encode($response));
    }

    // if request is to delete group
    // ======================================================================================================================
    if(isset($_POST['delete_url'])){
        $delete = new Content();
        if($delete->Delete_group($_POST['getCreater'], $_POST['delete_url'])){
            header("location: ../Profile/profile.php");
        }else{
            
        }
    }

    // if request is retrive profile
    // ==============================================================================================================================
    if(isset($_POST['getProfileImage'])){
        $new_profile = new Content();
        $new_profile->getProfileImage($_POST['getProfileImage']);
    }

    // if request is to search member
    // ================================================================================================================================
    if(isset($_POST['search_member'])){
        $new_search = new Content();
        $new_search->getMemberSearch($_POST['getSearch'], $_POST['group_identity_search'], $_POST['search_member']);
    }

    // if request is to approve member
    // ============================2===========================================================================================
    if(isset($_POST['GetGroup_identity'])){
        $new_approva = new Content();
        $new_approva->aprove_member($_POST['getUser_email'], $_POST['GetGroup_identity']);
    }

    // if request is to recieve outside request
    // ================================================================================================================================
    if(isset($_POST['suggest_request'])){
        $new_request = new Content();
        $new_request->outsideRequest($_POST['suggest_request']);
    }
?>