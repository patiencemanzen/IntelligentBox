<?php 
    session_start(); 
    if(isset($_POST['submit-start-up'])){        
        require_once ("../Scyllar.php");
        $new_connection = new Scyllar(); 

        $user_email = $_POST['user-setted-email'];
        $selectCurrentInfo = "SELECT * FROM intelligent_users WHERE email='$user_email'";
        $executeCurrentInfo = mysqli_query($new_connection->Frequency(),$selectCurrentInfo);
        if(mysqli_num_rows($executeCurrentInfo) > 0){
            $rows = mysqli_fetch_assoc($executeCurrentInfo);
            $identity = $rows['identity'];
            $created_on = Date("Y-m-d h:m:s");

            $updateTitle = "UPDATE intelligent_users SET Verified='complete' WHERE email='$user_email'";
            $executeTitle = mysqli_query($this->Frequency(),$updateTitle);

            // upload image
            // =============================================================
            $setDefault = "INSERT INTO user_profile_background_image VALUE ('','$identity','$user_email','user-default-background.png','on','$created_on')";
            $executeProfile = mysqli_query($this->Frequency(),$setDefault);

            //   initialize varibles for sessions    
            $identity = $rows['identity'];
            $firstname = $rows['firstName'];
            $lastname = $rows['lastName'];
            $email = $rows['email'];
            $user_title = $rows['title'];

            //  setup session and navigate user to profile page
            $_SESSION['identity'] = $identity;
            $_SESSION['Firstname'] = $firstname;
            $_SESSION['Lastname'] = $lastname;
            $_SESSION['Email'] = $email;
            $_SESSION['title'] = $user_title;
            
            //  then navigate user to profile page 
            header("Location: ../Profile/profile.php"); 
        }
    }
?>