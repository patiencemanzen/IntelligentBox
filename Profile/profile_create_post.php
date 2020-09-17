<?php 

    //  SET SESION 
    // =========================================================================================================
    session_start();
    $user_poster_email = $_SESSION['Email'];

    //   INITIALIZE DATABASE CONNECTION 
    // =========================================================================================================
    require_once ("../Scyllar.php");
    // =========================================================================================================

    // INITIALIZE AND CONFIGURE CLASS CALLED gLOBAL MEDIA
    // =========================================================================================================
    // BUT FIRST OFF ALL INITIALIZE INTERFACE CALLED PUBLIC MEDIA
    // ==========================================================================================================
    interface Public_Media {
        public function save_post($public_media,$media_section, $public_caption, $email,$media_type);
    }

    class Global_Media extends Scyllar implements Public_Media{
 
        // CONFIGURE POST
        // =====================================================================================================
        public function save_post($public_media,$media_section, $public_caption, $email,$media_type){
            $select_basic_identity = "SELECT identity FROM intelligent_users WHERE email='$email'";
            $execute_identity = mysqli_query($this->Frequency(), $select_basic_identity);
            $fetch_identity = mysqli_fetch_assoc($execute_identity);
            $identity = $fetch_identity['identity'];
            $created_on = date("Y-m-d h:m:s");

            // then insert post
            // =================================================================================================
            $insert_media = "INSERT user_common_post VALUE ('','$identity','$email','$public_media','$media_section','$public_caption','$media_type','0','$created_on')";
            $execute_media_insertion = mysqli_query($this->Frequency(), $insert_media);
            if($execute_media_insertion){
                return true;
            }else{
                return false;
            }
        }
    }


    // get inputted 
    // ==================================================================================
    if(isset($_POST['submit_file'])){
        $email_inputted = $user_poster_email;
        $caption_inputed = $_POST['user_caption'];
        $media_section_type = "feeds";
        
        $filename = 'IB_image'.time().'Box'.'--'.$_FILES['file_media']['name'];
        $file_size = $_FILES['file_media']['size'];

        $location = "../Images/activity_stream/".$filename;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);

        if($imageFileType == "mp4"){
            $location = "../videos/activity_stream-vd/".$filename;
        }else{
            $location = "../Images/activity_stream/".$filename;
        }
        $valid_extensions = array("jpg","jpeg","png","mp4","");

        // check extension
        if($_FILES['file_media']['name'] ==""){
            $empty = $_FILES['file_media']['name'];
            $newGlobal = new Global_Media();
            if($newGlobal->save_post($empty, $imageFileType, $caption_inputed, $email_inputted, $media_section_type)){
                header("location: profile.php?success");
                exit();
            }else{
                header("location: profile.php?fail");
                exit();
            }
        }else{
            if(!in_array(strtolower($imageFileType), $valid_extensions)) {
                header("location: profile.php?extension");
                exit();
            }else{
                if($file_size < 20971520){
                    if(move_uploaded_file($_FILES['file_media']['tmp_name'],$location)){
                        $newGlobal = new Global_Media();
                        if($newGlobal->save_post($filename, $imageFileType, $caption_inputed, $email_inputted, $media_section_type)){
                            header("location: profile.php?success");
                            exit();
                        }else{
                            header("location: profile.php?fail");
                            exit();
                        }
                    }else{
                        header("location: profile.php?move_fail");
                        exit();
                    }
                }else{
                    header("location: profile.php?file_size");
                    exit();
                }
            }   
        }
        // exit(json_encode($response));
    }
?>