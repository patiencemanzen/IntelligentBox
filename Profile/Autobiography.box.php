<?php 
    // INITIALISE DATABASE CONNECTION
    // =========================================================================================================
    require_once ("../Scyllar.php");
    // =========================================================================================================

    // CONFIGURE INTERFACE AND MAKE CLASS CALLED 
    interface Auto_sapien {
        public function create_autobio($creater, $autobio);
        public function Display_Autobios($email);
    }

    // CLASS CALLED AUTOBIO
    // =========================================================================================================
    class Autobiography extends Scyllar implements Auto_sapien {
        public function create_autobio($creater, $autobio){
            $select_basic_info = "SELECT * FROM intelligent_users WHERE email='$creater'";
            $execute_basic_info = mysqli_query($this->Frequency(), $select_basic_info);
            $fetch_basic_info = mysqli_fetch_assoc($execute_basic_info);

            // create autobio email
            // ==========================================================================
            $autobio_email = $autobio."--".rand(1000,9999)."@autobio.box";
            $executed_date = Date("Y-m-d h:m:s");
            $url_code = sha1($autobio_email);
            
            // the insert autobio
            // ===========================================================================
            $insert_autobio = "INSERT INTO autobiography VALUE ('','$url_code','$autobio_email','$creater','$autobio','0','$executed_date')";
            $execute_autobio = mysqli_query($this->Frequency(), $insert_autobio);

            if($execute_autobio){
                return true;
            }else{
                return false;
            }
        }

        // MAKE METHOD DISPLAY ALL VALIABLE AUTOBIO
        // ===========================================================================================================
        public function Display_Autobios($email){
            $select_all_autobio = "SELECT * FROM autobiography WHERE user_email='$email'";
            $execute_autobio_illu = mysqli_query($this->Frequency(), $select_all_autobio);
            while($fetch_autobion = mysqli_fetch_assoc($execute_autobio_illu)){
                $auto_bio_email = $fetch_autobion['autobio_email'];
                $autobioName = $fetch_autobion['autobio_name']; 
                $auto_url = $fetch_autobion['url_code']; ?>
                <a href="autobio_read.box.php?autobio=<?php echo $auto_url; ?>" style="color: #14599d"><div class="each-book d-flex" id="<?php echo $auto_bio_email; ?>" onclick="this.nextElementSibling.style.display = 'block'">
                    <i class="fa fa-book mr-2"></i>
                    <div><?php echo $autobioName; ?></div>
                </div></a>
            <?php }
        }

        // FUNCTION SAVE AUTOBIO CONTENT
        // ======================================================================================================================
        public function Save_autobio_content ($autobio_identity, $content){
            $executed_date = Date("Y-m-d h:m:s");
            $insert_autobio_content = "INSERT INTO autobiography_content VALUE ('','$autobio_identity','$content','$executed_date')";
            $execute_autobio_save = mysqli_query($this->Frequency(), $insert_autobio_content);
            if($execute_autobio_save){
                return true;
            }else{
                return false;
            }
        }
    }


    // EXECUTE CLASS AUTOBIO
    // ===========================================================================================================
    $new_Autobio = new Autobiography();

    // IF REQUEST IS TO CREATE NEW AUTOBIO
    // ============================================================================================================
    if(isset($_POST['autobio_creater_email'])){
        $creater_email = $_POST['autobio_creater_email'];
        $autobio_name = $_POST['autobio_name'];

        if($new_Autobio->create_autobio($creater_email, $autobio_name)){
            $response = "Autobiography '$autobio_name' successfully created";
        }else{
            $response = "Fail to create your autobiography";
        }
        exit(json_encode($response));
    }

    // IF REQUEST IS TO RETRIEVE
    // ============================================================================================================
    if(isset($_POST['getEmail'])){
        $new_Autobio->Display_Autobios($_POST['getEmail']);
    }

    // if request ia to save autobiography
    // ===================================================================================================================
    if(isset($_POST['submit_content'])){
        $auto_content = $_POST['content'];
        $auto_identity = $_POST['autobio_identity'];
   
        if($new_Autobio->Save_autobio_content($auto_identity, $auto_content)){
            echo "Autobio content saved succefully";
        }else{
            echo "Fail to save this autobio";
        }
    }

?>