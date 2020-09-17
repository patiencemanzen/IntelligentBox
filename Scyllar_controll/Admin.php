<?php 

    // INTIIALIZE DATABASE CONNECTION
    // ===========================================================================================================
    session_start();
    require_once ("../Scyllar.php");
    // ==========================================================================================================

    // CLASS ADMIN
    // ==========================================================================================================
    class Admin_face extends Scyllar {
        public function admin($admin_email, $admin_passwrd){
            if(($admin_email == "Pmanirabona@gmail.com") && ($admin_passwrd == "human_sapience@world.box")){
                $_SESSION['admin_email'] = $admin_email;
                $_SESSION['name'] = "Manirabona H patience";
                header("location: Dashboard/");
            }else{
                header("location: index.box.php?not_admin");
                exit();
            }
        }
    }

    // implement class admin face
    // ==========================================================================================================
    $new_admin = new Admin_face();

    if(isset($_POST['submit_admin'])){
        $admin_email = $_POST['admin-email'];
        $admin_password = $_POST['admin-password'];
        $new_admin->admin($admin_email, $admin_password);
    }

    if(isset($_REQUEST['logout'])){
        unset($_SESSION['admin_email']);
        unset($_SESSION['name']);
        session_destroy();
        header("location: index.box.php?logout");
    }
?>