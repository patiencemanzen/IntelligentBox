<?php 
    require_once ("../Scyllar.php");
    $new_connection = new Scyllar();

    session_start();
    if(isset($_SESSION['Email'])){
        $email = $_SESSION['Email'];
        $update_log_session = "UPDATE intelligent_users SET log_session='offline' WHERE email='$email'";
        $execute_logout = mysqli_query($new_connection->Frequency(), $update_log_session);
        
        unset($_SESSION['identity']);
        unset($_SESSION['Firstname']);
        unset($_SESSION['Lastname']);
        unset($_SESSION['Email']);
        unset($_SESSION['title']);
        session_destroy();

        header("location: ../index.php?logout");
    }
 
?>