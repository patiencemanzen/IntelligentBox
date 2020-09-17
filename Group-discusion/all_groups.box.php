<?php 

    //  INITIALIZE DATABASE CONNECTION
    // ========================================================================================================================================
    require_once ("../Scyllar.php");
    // ========================================================================================================================================

    // COMPILE CLASS CALL GROUPS_INTERFACE
    // =======================================================================================================================================
    class Groups_interface extends Scyllar {

        private function count_member($group_identity){
            $member = 0;
            $count_member = "SELECT * FROM user_group_member WHERE group_identity='$group_identity' AND approval='yes'";
            $execute_member = mysqli_query($this->Frequency(), $count_member);
            while($fetch_member = mysqli_fetch_assoc($execute_member)){
                $member = $member + 1;
            }
            return $member;
        }

        public function all_groups ($user_email){
            $select_all_groups = "SELECT * FROM user_groups WHERE group_name NOT IN (SELECT DISTINCT group_name FROM user_group_member WHERE User_email='$user_email') AND group_name NOT IN (SELECT DISTINCT group_name FROM user_groups WHERE email='$user_email')";
            $execute_all_groups = mysqli_query($this->Frequency(), $select_all_groups);
            while($fetch_all_groups = mysqli_fetch_assoc($execute_all_groups)){
                $groups_profile_image = $fetch_all_groups['group_profile_image'];
                $group_name = $fetch_all_groups['group_name'];
                $url_encode = $fetch_all_groups['url_encode'];
                $group_bio = $fetch_all_groups['group_bio'];
                $group_privacy = $fetch_all_groups['group_privacy'];
                $group_identity = $fetch_all_groups['identity'];

                $Trainer = 0;
                $selectTrainer = "SELECT * FROM user_group_member WHERE group_identity='$group_identity'";
                $executeTrainer = mysqli_query($this->Frequency(),$selectTrainer);
                while($fetchTrainer = mysqli_fetch_assoc($executeTrainer)){
                    $Trainer = $Trainer + 1;
                }

                if($group_privacy == "Public"){ ?>
                    <!-- each department cntent -->
                    <!-- ===================================================================================================== -->
                    <div class="eachdepartment">
                        <div class="department-image">
                            <img src="<?php echo '../Images/groups/'.$groups_profile_image; ?>" alt="" width="100%" height="100%">
                            <div class="department-name"><?php echo $group_name; ?></div>
                            <div class="study-now" id="<?php echo $group_identity; ?>" onclick="join_goup(this)">Join now</div>
                        </div>
                        <div class="department-bio"><?php echo $group_bio; ?></div>
                        <div class="department-status d-flex justify-content-between">
                            <div class="members"><i class="fa fa-user-circle-o"></i> <span><?php echo $this->count_member($group_identity); ?></span></div>
                            <div class="courses"><i class="fa fa-graduation-cap"></i> <span>0</span></div>
                            <div class="trainer"><i class="fa fa-assistive-listening-systems"></i> <span><?php echo $Trainer; ?></span></div>
                            <div class="likes"><i class="fa fa-thumbs-o-up"></i> <span>0</span></div>
                        </div>
                    </div>
                    <!-- end each department -->
                    <!-- ====================================================================================================== -->
                <?php }else{

                }
            }
        }

        public function join_user ($user_email, $group_identity){
            $select_basics = "SELECT * FROM intelligent_users WHERE email='$user_email'";
            $execute_basic = mysqli_query($this->Frequency(), $select_basics);
            $fetch_user_info = mysqli_fetch_assoc($execute_basic);
                $user_identity = $fetch_user_info['identity'];
                $user_title = $fetch_user_info['title'];

            $select_group_info = "SELECT * FROM user_groups WHERE identity='$group_identity'";
            $execute_group_info = mysqli_query($this->Frequency(), $select_group_info);
            $fetch_group_info = mysqli_fetch_assoc($execute_group_info);
                $group_name = $fetch_group_info['group_name'];
                $date_created = Date("Y-m-d h:m:s");
                
            $join_user = "INSERT INTO user_group_member VALUE ('','$user_identity','$user_email','$user_title','$group_name','$group_identity','no','$date_created')";
            $execute_user_join = mysqli_query($this->Frequency(), $join_user);
            if($execute_user_join){
                return true;
            }else{
                return false;
            }
        }

        public function search_groups($search){
            $main_search = strtolower($search);
            $select_group = "SELECT * FROM user_groups WHERE group_name LIKE '%$main_search%'";
            $execute_group = mysqli_query($this->Frequency(), $select_group);
            if(mysqli_num_rows($execute_group) > 0){
                while($fetch_all_groups = mysqli_fetch_assoc($execute_group)){
                    $groups_profile_image = $fetch_all_groups['group_profile_image'];
                    $group_name = $fetch_all_groups['group_name'];
                    $url_encode = $fetch_all_groups['url_encode'];
                    $group_bio = $fetch_all_groups['group_bio'];
                    $group_privacy = $fetch_all_groups['group_privacy'];
                    $group_identity = $fetch_all_groups['identity'];
    
                    $Trainer = 0;
                    $selectTrainer = "SELECT * FROM user_group_member WHERE group_identity='$group_identity'";
                    $executeTrainer = mysqli_query($this->Frequency(),$selectTrainer);
                    while($fetchTrainer = mysqli_fetch_assoc($executeTrainer)){
                        $Trainer = $Trainer + 1;
                    }
    
                    if($group_privacy == "Public"){ ?>
                        <!-- each department cntent -->
                        <!-- ===================================================================================================== -->
                        <div class="eachdepartment">
                            <div class="department-image">
                                <img src="<?php echo '../Images/groups/'.$groups_profile_image; ?>" alt="" width="100%" height="100%">
                                <div class="department-name"><?php echo $group_name; ?></div>
                                <div class="study-now" id="<?php echo $group_identity; ?>" onclick="join_goup(this)">Join now</div>
                            </div>
                            <div class="department-bio"><?php echo $group_bio; ?></div>
                            <div class="department-status d-flex justify-content-between">
                                <div class="members"><i class="fa fa-user-circle-o"></i> <span><?php echo $this->count_member($group_identity); ?></span></div>
                                <div class="courses"><i class="fa fa-graduation-cap"></i> <span>0</span></div>
                                <div class="trainer"><i class="fa fa-assistive-listening-systems"></i> <span><?php echo $Trainer; ?></span></div>
                                <div class="likes"><i class="fa fa-thumbs-o-up"></i> <span>0</span></div>
                            </div>
                        </div>
                        <!-- end each department -->
                        <!-- ====================================================================================================== -->
                    <?php }else{
    
                    }
                }
            }else{

            }
        }
    }

    // IMPLEMENT CLASS GROUP_INTERFACE
    // ===========================================================================================================
    $new_interface = new Groups_interface();

    // if request is to show all groups
    // ===========================================================================================================
    if(isset($_POST['request_all_groups'])){
        $new_interface->all_groups($_POST['request_all_groups']);
    }

    // if request is to save member joined
    // ===========================================================================================================
    if(isset($_POST['getGroup_identity'])){
        if($new_interface->join_user ($_POST['getUser_email'], $_POST['getGroup_identity'])){
            $response = "joined";
        }else{
            $response = "join fail";
        }
        exit(json_encode($response));
    }

    // if request is to search group
    // ==========================================================================================================
    if(isset($_POST['search'])){
        $new_interface->search_groups($_POST['search']);
    }

?>