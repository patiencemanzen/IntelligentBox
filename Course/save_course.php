<?php 

    //  INITIALIZE DATABASE
    // ==========================================================================================================
    require_once ("../Scyllar.php");
    // ==========================================================================================================

    // CLASS COURSE AND IMPLEMANTION
    // ===========================================================================================================
    class Course_data extends Scyllar {
        public function save_course($course_identity, $course_content){
            $created_on = Date("Y-m-d h:m:s");
            $insertion_content = "INSERT INTO course_content VALUE ('','$course_identity','$course_content','$created_on')";
            $execute_content = mysqli_query($this->Frequency(), $insertion_content);
            if($execute_content){
                return true;
            }else{
                return false;
            }
        }
    }

    if(isset($_POST['submit_course'])){
        $course_content_inputted = $_POST['content'];
        $course_identity = $_POST['course_identity'];

        $new_course_data = new Course_data();
        if($new_course_data->save_course($course_identity, $course_content_inputted)){
            header("location: write_course.php?success");
            exit();
        }else{
            echo "Fail to insert";
            exit();
        }
    }

?>