<?php 
    //  INITIALIZE DATABASE 
    // =========================================================================================================
    require_once ("../Scyllar.php");
    // =========================================================================================================

    // INITIALIZE CLASS COURSE_PROCESS
    // =========================================================================================================
    class Course_process extends Scyllar {
        public function search_course($search){
            $main_query = trim($search);
            $search_course = "SELECT * FROM built_in_courses WHERE course_name LIKE '%$main_query%'";
            $execute_course = mysqli_query($this->Frequency(), $search_course);
            if(mysqli_num_rows($execute_course) > 0){
                while($fetch_courses = mysqli_fetch_assoc($execute_course)){
                    $course_name = $fetch_courses['course_name'];
                    $course_image = $fetch_courses['course_image'];
                    $course_lessons = $fetch_courses['course_lessons'];
                    $course_link = $fetch_courses['course_link']; ?>

                    <a href="<?php echo $course_link; ?>"><div class="each-search">
                        <div class="search-result-img"><img src="<?php echo '../Images/course-img/'.$course_image; ?>" alt=""></div>
                        <div class="search-detail">
                            <div class="search-name"><?php echo $course_name; ?></div>
                            <div class="search-lessons"><?php echo $course_lessons?> lessons</div>
                        </div>
                    </div></a>
                <?php } 
            }else{
            
            }
        }
    }
    // ==============================================================================================================

    $COURSE_CONTENT = new Course_process();

    // IF REQUEST IS TO SEARCH COURSE
    // ==============================================================================================================
    if(isset($_POST['search_string_query'])){
       $COURSE_CONTENT->search_course($_POST['search_string_query']);
    }
?>