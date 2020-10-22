<?php 
   
	//////////////////////////////////////////////////////

    // INTELLIGENT BOX
    // DESIGNED & DEVELOPED by Manirabona Patience
    
    // author: Mnirabona Patience,
    // Email:  Hseal419@gmail.com,
    // location: Kigali,Rwanda,
    // pro: Intelligent Box E-learning,
    // version: 1.0.0
    
	//////////////////////////////////////////////////////

    //  INITIALIZE DATABASE CONENCTION
    // ==============================================================================================================
    // ==============================================================================================================
    require_once ("Scyllar.php");
    // ===============================================================================================================
    // ===============================================================================================================

    // MAKE AND CONFIGURE INTERFACE
    // ==============================================================================================================
    // ==============================================================================================================
    interface Illumination {
        public function show_trades ();
        public function show_all_trades();
        public function search_trades($search_query);
        public function readCookie($user_email, $user_password);
    }

    // MAKE AND CONFIGURE CLASS CALLED BIG_SUN
    // =================================================================================================================
    // ==================================================================================================================
    class Big_Sun extends Scyllar implements Illumination {


        // ILLUSTRATE BIG TRADE WE GOT
        // ================================================
        public function show_trades(){
            $select_trades = "SELECT * FROM departments WHERE department_name != 'Obscurity'";
            $execute_trades = mysqli_query($this->Frequency(),$select_trades);
            while($fetch_trades = mysqli_fetch_assoc($execute_trades)){
                $department_name = $fetch_trades['department_name'];
                $department_img = $fetch_trades['department_img'];
                $department_desc = $fetch_trades['department_desc'];
                $department_course_count = $fetch_trades['department_course_count'];

                $learner = 0;
                $select_learner = "SELECT * FROM more_account_info WHERE Department='$department_name'";
                $execute_learner = mysqli_query($this->Frequency(), $select_learner);
                while($fetch_learner = mysqli_fetch_assoc($execute_learner)){
                    $learner = $learner + 1;
                }

                $trainer = 0;
                $select_learner = "SELECT * FROM intelligent_users WHERE email IN (SELECT DISTINCT email FROM more_account_info WHERE Department='$department_name') AND title ='trainer'";
                $execute_learner = mysqli_query($this->Frequency(), $select_learner);
                while($fetch_learner = mysqli_fetch_assoc($execute_learner)){
                    $trainer = $trainer + 1;
                } ?>

                <!-- each card present top trades -->
                <!-- ======================================================================================================== -->
                <div class="container right">
                    <div class="content">
                        <div class="title-depart text-center"><?php echo $department_name; ?></div>
                        <img src="<?php echo 'Images/Department/'.$department_img; ?>" alt="<?php echo $department_name; ?>" width="100%">
                        <p class="desc-trades"><?php echo $department_desc; ?></p>
                        <div class="dep-status d-flex justify-content-between">
                            <div class="status"><i class="fa fa-graduation-cap"></i> course <span><?php echo $department_course_count; ?></span></div>
                            <div class="status"><i class="fa fa-user-circle-o"></i> leaners <span><?php echo $learner; ?></span></div>
                            <div class="status"><i class="fa fa-user-plus"></i> trainer <span><?php echo $trainer; ?></span></div>
                        </div>  
                    </div>
                </div>
                <!-- end each trades -->
                <!-- ======================================================================================================================== -->

            <?php }
        }


        // SHOW ALL TRADES
        // ==========================================================================================================================================
        // ===========================================================================================================================================
        public function show_all_trades (){
            $show_all_trades = "SELECT * FROM departments WHERE department_name != 'Obscurity'";
            $execute_all_trades = mysqli_query($this->Frequency(),$show_all_trades);
            while($fetch_all_trades = mysqli_fetch_assoc($execute_all_trades)){
                $department_name = $fetch_all_trades['department_name'];
                $department_img = $fetch_all_trades['department_img'];
                $department_desc = $fetch_all_trades['department_desc'];
                $department_course_count = $fetch_all_trades['department_course_count']; 

                $learner = 0;
                $select_learner = "SELECT * FROM more_account_info WHERE Department='$department_name'";
                $execute_learner = mysqli_query($this->Frequency(), $select_learner);
                while($fetch_learner = mysqli_fetch_assoc($execute_learner)){
                    $learner = $learner + 1;
                }

                $trainer = 0;
                $select_learner = "SELECT * FROM intelligent_users WHERE email IN (SELECT DISTINCT email FROM more_account_info WHERE Department='$department_name') AND title ='trainer'";
                $execute_learner = mysqli_query($this->Frequency(), $select_learner);
                while($fetch_learner = mysqli_fetch_assoc($execute_learner)){
                    $trainer = $trainer + 1;
                } ?>

                    <div class="eachdepartment">
                        <div class="department-image">
                            <img src="<?php echo 'Images/Department/'.$department_img; ?>" alt="" width="100%" height="100%">
                            <div class="department-name"><?php echo $department_name; ?></div>
                        </div>
                        <div class="department-bio"><?php echo $department_desc; ?></div>
                        <div class="department-status d-flex justify-content-between">
                            <div class="members"><i class="fa fa-user-circle-o"></i> <span><?php echo $learner; ?></span></div>
                            <div class="courses"><i class="fa fa-graduation-cap"></i> <span><?php echo $department_course_count; ?></span></div>
                            <div class="trainer"><i class="fa fa-assistive-listening-systems"></i> <span><?php echo $trainer; ?></span></div>
                        </div>
                    </div>

            <?php }
        }


        // IF USER SEARCH TRADES THEN RUN THIS FUNCTION
        // =================================================================================================================
        public function search_trades($searched_query){
            $selectSearched_query = "SELECT * FROM departments WHERE department_name LIKE '%$searched_query%'";
            $execute_searched_query = mysqli_query($this->Frequency(),$selectSearched_query);
            while($fetch_searched_query = mysqli_fetch_assoc($execute_searched_query)){
                $department_name = $fetch_searched_query['department_name'];
                $department_img = $fetch_searched_query['department_img'];
                $department_desc = $fetch_searched_query['department_desc'];
                $department_course_count = $fetch_searched_query['department_course_count'];
                
                $learner = 0;
                $select_learner = "SELECT * FROM more_account_info WHERE Department='$department_name'";
                $execute_learner = mysqli_query($this->Frequency(), $select_learner);
                while($fetch_learner = mysqli_fetch_assoc($execute_learner)){
                    $learner = $learner + 1;
                }

                $trainer = 0;
                $select_learner = "SELECT * FROM intelligent_users WHERE email IN (SELECT DISTINCT email FROM more_account_info WHERE Department='$department_name') AND title ='trainer'";
                $execute_learner = mysqli_query($this->Frequency(), $select_learner);
                while($fetch_learner = mysqli_fetch_assoc($execute_learner)){
                    $trainer = $trainer + 1;
                } ?>

                <div class="container right">
                    <div class="content course-searched">
                        <div class="title-course"><div><?php echo $department_name; ?></div></div>
                        <img src="Images/index-img/top-course/software.jpg" alt="">
                        <p class="mt-2"><?php echo $department_desc; ?></p>
                        <div class="status d-flex justify-content-between">
                            <div class="courses"><i class="fa fa-graduation-cap mr-2"></i><span><?php echo $department_course_count; ?></span></div>
                            <div class="leaner"><i class="fa fa-user-circle-o mr-2"></i><span><?php echo $learner; ?></span></div>
                            <div class="trainer"><i class="fa fa-user-plus mr-2"></i><span><?php echo $trainer; ?></span></div>
                        </div>  
                    </div>
                </div>

            <?php }
        }

        public function readCookie($user_email, $user_password){ 
            $selectBackgroundImage = "SELECT profile_image FROM user_profile_image WHERE usr_email='$user_email' AND status_image='1'";
            $execute_background = mysqli_query($this->Frequency(),$selectBackgroundImage);
            $fetch_image = mysqli_fetch_assoc($execute_background);
                $profile_image = $fetch_image['profile_image'];
            
            $select_more_trainer = "SELECT * FROM intelligent_users WHERE email='$user_email'";
            $execute_trainer = mysqli_query($this->Frequency(),$select_more_trainer);
            $fetch_trainer = mysqli_fetch_assoc($execute_trainer);
                $getFirstname = $fetch_trainer['firstName'];
                $getLastname = $fetch_trainer['lastName'];    
            ?>
            <div class="user-login-session">
                <div class="input-set">
                    <div class="close-user-session" onclick="unsetCookies()"><i class="fa fa-times"></i></div>
                    <div class="usr-image"><img src="<?php echo '../Images/profile-img/profile-image/'.$profile_image; ?>" alt="" width="100%" height="100%"></div>
                    <div class="user-name mt-2 mb-1" id="user_name_cookie"><?php echo $getFirstname; ?> <?php echo $getLastname; ?></div>
                    <form action="sign-in-cookie.php" method="POST" id="formCookie">
                        <input type="hidden" name="submit_email" value="<?php echo $user_email; ?>">
                        <!-- <div class="mt-1 ckeckForgetme">
                            <input type="checkbox" name="rememberUser" class="mt-2" value="forgetMe" > Foreget Me
                        </div> -->
                        <div class="submit-btn-session">
                            <button type="submit" name="submitSignin" id="submit-cookie" class="submit-co_user"><i class="fa fa-sign-in"></i> Login as <?php echo $getLastname; ?> </button>
                        </div>
                    </form>
                </div>
            </div>
            <script>
                function getCookie(cname) {
                    var name = cname + "=";
                    var ca = document.cookie.split(';');
                    for(var i = 0; i < ca.length; i++) {
                            var c = ca[i];
                            while (c.charAt(0) == ' ') {
                                c = c.substring(1);
                            }
                        if (c.indexOf(name) == 0) {
                            return c.substring(name.length, c.length);
                        }
                    }
                    return "";
                }
                function unsetCookies(){
                    document.cookie = "Scyllar_Email=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
                    document.cookie = "Scyllar_password=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
                    document.querySelector('.user-login-session').style.display = 'none';
                }
            </script>
        <?php 
        }
    }

    // IMPLEMENT CLASS BIG_SUN
    // ===============================================================================================================================================
    // ===============================================================================================================================================
    $big_data = new Big_Sun();

    // if is top trade
    // ==============================
    if(isset($_POST['getIndicator'])){
        $big_data->show_trades();
    }

    // if is all trade
    // ================================
    if(isset($_POST['varIndicator'])){
       $big_data->show_all_trades();
    }

    // if user search the run methord called
    // =======================================
    if(isset($_POST['inputedSearch_query'])){
        $searched_query_string = $_POST['inputedSearch_query'];
        $big_data->search_trades($searched_query_string);
    }
   
    if(isset($_POST['cookie'])){
        $big_data->readCookie($_POST['getCookie_email'], $_POST['getCookie_pass']);
    }
?>