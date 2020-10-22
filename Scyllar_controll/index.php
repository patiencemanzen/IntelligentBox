<!DOCTYPE html>
<html lang="en">
    <head>
       <!-- meta tags -->
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
       <meta name="description" content="intelligentBox is The system that help the tvet school or any other kind of Person who want to learn the lessons of tvet Rwanda and others related to intellectual skills through online and meet up with many other student who also is learning the related thing and get challenge with them" />
       <meta name="keywords" content="social network,social media, learning, e-learning, share, friends, challenge, tvet, lessons, schools, create, skills, account, signin, online charting, online learning, courses, groups" />
       <meta name="author" content="Manirabona Patience" />
       <meta name="robots" content="index, follow"/>
       <meta name="apple-mobile-web-app-capable" content="yes">

       <title>intelligentBox</title>

       <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

       <link rel="stylesheet" href="../Assets/css/Login_admin.box.css">

       <link rel="stylesheet" href="../Lib/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="../Lib/material/css/material-dashboard.css?v=2.1.1">
       <link rel="stylesheet" href="../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
       <link rel="stylesheet" href="../Lib/font-awesome/css/font-awesome.min.css">
   
    </head>
    <body class="bg-white">

        <!-- NAV BAR -->
        <!-- ======================================================================================================================================= -->
         <div class="dash-navbar">
             <div class="logo"><a href="../Intelligent-Users/index.php">IntelligentBox</a></div>
         </div>
        <!-- ======================================================================================================================================= -->

        <!-- ADMIN LOGIN -->
        <!-- ======================================================================================================================================= -->
        <div class="logn-interface">
            <div class="title-logo">Admin Login</div>
            <div class="login-inputs">
              <form action="Admin.php" method="POST" id="form-admin">
                <div class="admin-email" id="admin-email_input"><input type="text" name="admin-email" id="admin-email" placeholder="E-mail" autocomplete="off"></div>
                <div class="admin-password" id="admin-password-input"><input type="password" name="admin-password" id="admin-password" placeholder="Password" autocomplete="off"></div>
                <div class="error-log"></div>
                <div class="submit_info"><button name="submit_admin" type="submit" class="submit" onclick="submit_admin(this)">Login</button></div>
              </form>
            </div>
        </div>
        <!-- ======================================================================================================================================= -->
        
        <!-- javascript external file, type js  and libraries-->
        <!-- ================================================ -->
        <script src="../Assets/js/Dash_content.box.js"></script>
        <script src="../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="../Lib/jquery/jquery.min.js"></script>
        <script src="../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
        <script src="../Lib/now-ui-kit/now-ui-kit.js"></script>
        <script src="../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
        <!-- end libraries -->
        <!-- ============================================================================================== -->

    </body>
</html>