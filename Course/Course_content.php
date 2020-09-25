<?php 
    //  INITIALIZE DATABASE 
    // =========================================================================================================
    require_once ("../Scyllar.php");
    // =========================================================================================================

    // CLASS CALLED COURSES_INTERFACE
    // =========================================================================================================
    class Course_interface extends Scyllar {

        public function show_classes ($user_email){
            $select_identity = "SELECT * FROM intelligent_users WHERE email='$user_email'";
            $execute_identity = mysqli_query($this->Frequency(), $select_identity);
            $fetch_identity = mysqli_fetch_assoc($execute_identity);
                $get_Identity = $fetch_identity['identity'];
                $getFirstName = $fetch_identity['firstName'];
                $getLastName = $fetch_identity['lastName'];

            $select_classes = "SELECT * FROM trainer_class WHERE user_identity != '$get_Identity' AND class_name !='Intelligent_class' AND Live='on'";
            $execute_classes = mysqli_query($this->Frequency(), $select_classes);
            while($fetch_class = mysqli_fetch_assoc($execute_classes)){ 
                $getProfileImage = $fetch_class['class_profile_image'];
                $getClassName = $fetch_class['class_name'];
                $getClass_identity = $fetch_class['identity'];
                $getClass_desc = $fetch_class['class_desc'];

                $count_learner = 0;
                $select_learner = "SELECT * FROM class_tracks WHERE class_identity='$getClass_identity'";
                $execute_class = mysqli_query($this->Frequency(), $select_learner);
                while($fetch_learner = mysqli_fetch_assoc($execute_class)){
                    $count_learner = $count_learner + 1;
                }

                $countCourse = 0;
                $select_course = "SELECT * FROM courses WHERE class_identity='$getClass_identity'";
                $execute_course_count = mysqli_query($this->Frequency(), $select_course);
                while($fetch_course = mysqli_fetch_assoc($execute_course_count)){
                    $countCourse = $countCourse + 1;
                } ?>

                <!-- each department -->
                <!-- ============================================ -->
                <div class="eachdepartment">
                    <div class="department-image">
                        <img src="<?php echo '../Images/class_img/'.$getProfileImage; ?>" alt="" width="100%" height="100%">
                        <div class="department-name"><?php echo $getClassName; ?></div>
                        <div class="study-now" id="<?php echo $getClass_identity; ?>" onclick="join_class(this)">join now</div>
                    </div>
                    <div class="department-bio"><?php echo $getClass_desc; ?></div>
                    <div class="department-status d-flex justify-content-between">
                        <div class="members"><i class="fa fa-user-circle-o"></i> <span><?php echo $count_learner; ?></span></div>
                        <div class="courses"><i class="fa fa-graduation-cap"></i> <span><?php echo $countCourse; ?></span></div>
                    </div>
                </div>
                <!-- end each department -->
                <!-- ================================================== -->
        <?php }
        }

        private function count_member($group_identity){
            $member = 0;
            $count_member = "SELECT * FROM user_group_member WHERE group_identity='$group_identity'";
            $execute_member = mysqli_query($this->Frequency(), $count_member);
            while($fetch_member = mysqli_fetch_assoc($execute_member)){
                $member = $member + 1;
            }
            return $member;
        }

        public function all_groups ($user_email){
            $select_all_groups = "SELECT * FROM user_groups WHERE group_name NOT IN (SELECT DISTINCT group_name FROM user_group_member WHERE User_email='$user_email') AND group_name NOT IN (SELECT DISTINCT group_name FROM user_group_member WHERE approval='yes' AND approval='no')";
            $execute_all_groups = mysqli_query($this->Frequency(), $select_all_groups);
            while($fetch_all_groups = mysqli_fetch_assoc($execute_all_groups)){
                $groups_profile_image = $fetch_all_groups['group_profile_image'];
                $group_name = $fetch_all_groups['group_name'];
                $url_encode = $fetch_all_groups['url_encode'];
                $group_bio = $fetch_all_groups['group_bio'];
                $group_privacy = $fetch_all_groups['group_privacy'];
                $group_identity = $fetch_all_groups['identity'];
                $creater = $fetch_all_groups['email'];

                $select_user_image = "SELECT profile_image FROM user_profile_image WHERE usr_email='$creater' AND status_image='1'";
                $execute_image = mysqli_query($this->Frequency(), $select_user_image);
                $fetch_image = mysqli_fetch_assoc($execute_image); 

                if($group_privacy == "Public"){ ?>
                    <!-- each group -->
                    <!-- ============================================================================== -->
                    <div class="eachdegroup mr-3 ml-2" >
                        <div class="department-image-group">
                            <div class="group-background-image"><img src="<?php echo '../Images/groups/'.$groups_profile_image; ?>" alt="" width="100%" height="100%"></div>
                            <div class="group-profile-image">
                                <img src="<?php echo '../Images/profile-img/profile-image/'.$fetch_image['profile_image']; ?>" alt="" width="100%" height="100%">
                            </div>
                            <div class="group-name"><?php echo $group_name; ?></div>
                        </div>
                        <div class="department-bio-group mt-3"><?php echo $group_bio; ?></div>
                        <div class="group-status d-flex justify-content-between">
                            <div class="members"><i class="fa fa-user-circle-o"></i> <span><?php echo $this->count_member($group_identity); ?></span></div>
                            <div class="trainer" id="<?php echo $group_identity; ?>" onclick="join_goup(this)"><i class="fa fa-plus"></i> join now</div>
                        </div>
                    </div>
                    <!-- end each group -->
                    <!-- ============================================================================================= -->
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
        
        public function get_department_course(){
            $select_department = "SELECT * FROM departments WHERE department_name != 'Obscurity'";
            $execute_deprtament = mysqli_query($this->Frequency(), $select_department); ?>
                <!-- more course related to this -->
                <!-- ========================================================================================================================================================================================== -->
                <!-- ============================================================================================================================================================================================= -->
                <div class="discuss-in-group  mt-4">
                    <div class="title-learner">Discover more trades</div>
                    <div class="group-list">

            <?php while($fetch_department = mysqli_fetch_assoc($execute_deprtament)){
                $deptment_identity = $fetch_department['identity'];
                $deptment_name = $fetch_department['department_name'];
                $department_bio = $fetch_department['department_desc'];
                $department_img = $fetch_department['department_img'];
                $department_identity = $fetch_department['identity'];
                $departme_count_course = $fetch_department['department_course_count'];

                $learner = 0;
                $select_learner = "SELECT * FROM more_account_info WHERE Department='$deptment_name'";
                $execute_learner = mysqli_query($this->Frequency(), $select_learner);
                while($fetch_learner = mysqli_fetch_assoc($execute_learner)){
                    $learner = $learner + 1;
                } ?>

                <!-- each trades -->
                <!-- =============================================================================================================================== -->
                <div class="each-trade">
                    <div class="trade-image position-relative">
                        <img src="<?php echo '../Images/Department/'.$department_img; ?>" alt="" width="100%" height="100%">
                        <div class="admin-image-ame d-flex">
                            <div class="trade-name ml-2"><?php echo $deptment_name; ?></div>
                        </div>
                    </div>
                    <div class="trade-bio"><?php echo $department_bio; ?></div>
                    <div class="user-accurate justify-content-between">
                        <div class="member mt-2">Learners <span><?php echo $learner; ?></span></div>
                        <div class="challenge mt-2">courses <span><?php echo $departme_count_course; ?></span></div>
                        <div class="ask">
                            <a href="<?php echo '../'.$deptment_name.'/'.$deptment_name.'.php?depElect='.$department_identity ?>" style="color: #041a2f">
                                <button>Learn Today</button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end each trades -->
                <!-- =============================================================================================================================================== -->
                <!-- =============================================================================================================================================== -->

            <?php } ?>
                </div>
                </div>
                <!-- end more course related -->
                <!-- ============================================================================================================================================================================================= -->
                <!-- =============================================================================================================================================================================================== -->
        <?php }

        public function search_dep($user_search){
            $select_dep = "SELECT * FROM departments WHERE department_name LIKE '%$user_search%' AND department_name != 'Obscurity'";
            $execute_dep_search = mysqli_query($this->Frequency(), $select_dep);?>
            <div class="discuss-in-group  mt-4">
                <div class="title-learner">Results</div>
                <div class="group-list">
            <?php if(mysqli_num_rows($execute_dep_search) > 0 ){ 
                while($fetch_department = mysqli_fetch_assoc($execute_dep_search)){
                    $deptment_identity = $fetch_department['identity'];
                    $deptment_name = $fetch_department['department_name'];
                    $department_bio = $fetch_department['department_desc'];
                    $department_img = $fetch_department['department_img'];
                    $department_identity = $fetch_department['identity'];
                    $departme_count_course = $fetch_department['department_course_count'];
    
                    $learner = 0;
                    $select_learner = "SELECT * FROM more_account_info WHERE Department='$deptment_name'";
                    $execute_learner = mysqli_query($this->Frequency(), $select_learner);
                    while($fetch_learner = mysqli_fetch_assoc($execute_learner)){
                        $learner = $learner + 1;
                    } ?>
    
                    <!-- each trades -->
                    <!-- =============================================================================================================================== -->
                    <div class="each-trade">
                        <div class="trade-image position-relative">
                            <img src="<?php echo '../Images/Department/'.$department_img; ?>" alt="" width="100%" height="100%">
                            <div class="admin-image-ame d-flex">
                                <div class="trade-name ml-2"><?php echo $deptment_name; ?></div>
                            </div>
                        </div>
                        <div class="trade-bio"><?php echo $department_bio; ?></div>
                        <div class="user-accurate justify-content-between">
                            <div class="member">Learners <span><?php echo $learner; ?></span></div>
                            <div class="challenge">courses <span><?php echo $departme_count_course; ?></span></div>
                            <div class="ask">
                                <a href="<?php echo '../'.$deptment_name.'/'.$deptment_name.'.php?depElect='.$department_identity ?>" style="color: #041a2f">
                                    <button>Learn Today</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end each trades -->
                    <!-- =============================================================================================================================================== -->
                    <!-- =============================================================================================================================================== -->
    
                <?php } }else{ ?>
                <div class="each-course p-3">
                    <?php echo "No result found"; ?>
                </div>
            <?php } ?>
                </div>
            </div>
        <?php  }

        public function join_class($user_email, $class_identity){
            $select_profile_detail = "SELECT * FROM intelligent_users WHERE email='$user_email'";
            $execute_profile_detail = mysqli_query($this->Frequency(),$select_profile_detail);
            $fetch_profile_detail = mysqli_fetch_assoc($execute_profile_detail);
                $user_identity = $fetch_profile_detail['identity'];
                
            $created_on = Date("Y-m-d h:m:s");
            $insert_class = "INSERT INTO class_tracks VALUE ('','$class_identity','$user_identity','on','$created_on')";
            $execute_class = mysqli_query($this->Frequency(), $insert_class);
        }
    }

    // IMPLEMENT CLASS COURSE 
    // =======================================================================================================================================
    $new_course = new Course_interface();

    // iff request is to show all classes
    // =======================================================================================================================================
    if(isset($_POST['getClass_mail'])){
        $new_course->show_classes($_POST['getClass_mail']);
    }

    // if request is to show all groups
    // ===========================================================================================================
    if(isset($_POST['request_all_groups'])){
        $new_course->all_groups($_POST['request_all_groups']);
    }

    // if request is to save member joined
    // ===========================================================================================================
    if(isset($_POST['getGroup_identity'])){
        if($new_course->join_user ($_POST['getUser_email'], $_POST['getGroup_identity'])){
            $response = "joined";
        }else{
            $response = "join fail";
        }
        exit(json_encode($response));
    }

    // get all department
    // =============================================================================================================
    if(isset($_POST['getDepartment'])){
        $new_course->get_department_course();
    }

    // if request is to search dep
    // ==================================================================================================================
    if(isset($_POST['getSearch'])){
        $new_course->search_dep($_POST['getSearch']);
    }

    // if request is to save joined class
    // =============================================================================================================================
    if(isset($_POST['getClass_identity'])){
        $new_course->join_class($_POST['getUser'], $_POST['getClass_identity']);
    }

?>