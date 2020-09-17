<?php 
  
    // INITIALIZE DATABASE CONNECTION
    // =========================================================================================================
    require_once ("../Scyllar.php");
    // =========================================================================================================

    // CLASS FOR MANIPULATE CLASSESS
    // =========================================================================================================
    class School extends Scyllar {
        public function Save_class ($class_name,$class_desc, $course_name, $class_section, $class_img, $user_email){
            $select_department_identity = "SELECT identity FROM departments WHERE department_name='$class_section'";
            $execute_department_idenity = mysqli_query($this->Frequency(), $select_department_identity);
            $fetch_identity = mysqli_fetch_assoc($execute_department_idenity);
                $department_identity = $fetch_identity['identity'];

            $select_usr_indentity = "SELECT * FROM intelligent_users WHERE email='$user_email'";
            $execute_usr_identity = mysqli_query($this->Frequency(), $select_usr_indentity);
            $fetch_usr_identity = mysqli_fetch_assoc($execute_usr_identity);
                $usr_identity = $fetch_usr_identity['identity'];
                $date_created = Date("Y-m-d h:m:s");
                $class_url = sha1($class_name.'-'.rand(1000,9999).'@users.class');
                
            $insert_class = "INSERT INTO trainer_class VALUE ('','$department_identity','$usr_identity','$class_url','$class_name','$class_img','$class_desc','on','$date_created')";
            $execute_class = mysqli_query($this->Frequency(), $insert_class);
            
            $retrive_class = "SELECT * FROM trainer_class WHERE class_name='$class_name' AND user_identity='$usr_identity'";
            $execute_class_retrival = mysqli_query($this->Frequency(), $retrive_class);
            $fetch_class = mysqli_fetch_assoc($execute_class_retrival);
                $getClass_identity = $fetch_class['identity'];

            $insert_course = "INSERT INTO courses VALUE ('','$getClass_identity','$course_name','Courses_document.png','course','-----','5','0','on','$date_created')";
            $execute_course = mysqli_query($this->Frequency(), $insert_course);  

            // insert notification
            // ===========================
            $notification = $fetch_usr_identity['firstName']." Create new class, be first to join";
            $date_created = Date("Y-m-d h:m:s");
            $insert_notification = "INSERT INTO notifications VALUE ('','$user_email','$notification','class','0','new','on','$date_created')";
            $execute_notification = mysqli_query($this->Frequency(), $insert_notification); 
            
            if($execute_class){
                return true;
            }else{
                return false;
            }
        }
    }


    // IF REQUEST IT O CREATE CLASS
    // ============================================================================================================
    $class_name = $_POST['class_name'];
    $class_desc = $_POST['class_desc'];
    $course_name = $_POST['course_name'];
    $select_dep = $_POST['select_dep'];
    $user_email_inputed = $_POST['user_email'];

    $class_image_inputed = 'IB_class_img'.time().'Box'.'--'.$_FILES['class_image']['name'];
    $file_size = $_FILES['class_image']['size'];

    $location = "../Images/class_img/".$class_image_inputed;
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $valid_extensions = array("jpg","jpeg","png");

    // check extension
    if(!in_array(strtolower($imageFileType), $valid_extensions)) {
        $response = "Check extentension";
    }else{
        if($file_size < 20971520){
            if(move_uploaded_file($_FILES['class_image']['tmp_name'],$location)){
                $create_class = new School();
                if($create_class->Save_class ($class_name,$class_desc, $course_name, $select_dep, $class_image_inputed, $user_email_inputed)){
                    header("location: profile.php?success");
                    exit();
                }else{
                    echo "Fail to insert class";
                }
            }
        }
    }
?>