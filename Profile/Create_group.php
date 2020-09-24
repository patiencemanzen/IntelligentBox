<?php 

    // INITIALIZE DATABASE CONNECTION
    // =======================================================================================================
    require_once ("../Scyllar.php");
    // =======================================================================================================

    // INTERFACE iNITALIZE GROUP
    // ========================================================================================================
    interface Initialize_group {
        public function save_group ();
    }

    // CLASS CREATE GROUP
    // ========================================================================================================
    class Create_group extends Scyllar implements Initialize_group {
        private $Group_name;
        private $Group_bio;
        private $Creater;
        private $Group_img;
        private $code;
        private $Group_privacy;

        public function __construct($group_name, $group_bio, $creater, $profile_image, $encoded_url, $group_privacy){
            $this->Group_name = $group_name;
            $this->Group_bio = $group_bio;
            $this->Creater = $creater;
            $this->Group_img = $profile_image;
            $this->code = $encoded_url;
            $this->Group_privacy = $group_privacy;
        }

        // SAVE GROUP USER USERS
        // =======================================================================================================
        public function save_group(){
            $select_info = "SELECT * FROM intelligent_users WHERE email='$this->Creater'";
            $execute_info = mysqli_query($this->Frequency(), $select_info);
            $fetch_info = mysqli_fetch_assoc($execute_info);
                $firstName = $fetch_info['firstName'];
                $lastName = $fetch_info['lastName'];
                $user_identity = $fetch_info['identity'];
                $create_on = Date("Y-m-d h:m:s");

            $save_group = "INSERT INTO user_groups VALUE ('','$this->code','$user_identity','$firstName','$lastName','$this->Creater','$this->Group_name','$this->Group_img','$this->Group_bio','$this->Group_privacy','1','0','$create_on')";
            $execute_group_creation = mysqli_query($this->Frequency(), $save_group);
            if($execute_group_creation){
                $notification = "{$lastName} you successfully create your group, Now you can manage, share and invite your friend";
                $date_created = Date("Y-m-d h:m:s");
                $insert_notification = "INSERT INTO notifications VALUES ('','nowhere','$this->Creater', '$this->code','$notification','group','0','new','on','$date_created')";
                $execute_notification = mysqli_query($this->Frequency(), $insert_notification);
                return true;
            }else{
                return false;
            }
        }

    }

    // if request is to save group info
    // ========================================================================================================================================================
    $group_name_init = $_POST['group_name'];
    $group_bio_init = $_POST['group_bio'];
    $creater_email = $_POST['creater_email'];
    $group_privacy = $_POST['group_section'];

    $group_img_make = 'IB_Group_image'.time().'Box'.'--'.$_FILES['group_image']['name'];
    $file_size = $_FILES['group_image']['size'];
    $location = "../Images/groups/".$group_img_make;
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $valid_extensions = array("jpg","jpeg","png");

    // check extension
    if(!in_array(strtolower($imageFileType), $valid_extensions)) {
        header("location: profile.php?check_extension");
        exit();
    }else{
        if(move_uploaded_file($_FILES['group_image']['tmp_name'],$location)){
            $url_decode = $group_img_make."@".$creater_email.".group";    
            $url_encode = sha1($url_decode); 

            $group_savior = new Create_group($group_name_init, $group_bio_init, $creater_email, $group_img_make, $url_encode, $group_privacy);
            if($group_savior->save_group()){
                header("location: ../Group-discusion/Group_admin.php?group=".$url_encode);
            }else{
                header("location: profile.php?fail_create_group");
                exit();
            }
        }else{
            header("location: profile.php?transfer_fail");
            exit();
        }
    }
?>