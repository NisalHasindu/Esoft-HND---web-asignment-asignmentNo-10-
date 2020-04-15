<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php
    if(!isset($_SESSION['firstName'])){
        header('Location:index.php');
    }
?>
<!-- the main page for online library management system-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- add meta view point tag for make web page responsive -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="inc/style.css">
    <link rel="stylesheet" href="inc/style_home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>

<body>
<!-- create the header class -->
    <div class="header">
    <!-- set the logo and name -->
        
        <div class="logo">
        <img src="img/fulllogo.png" alt="logo">
        </div>

        <!-- add profile for the header-->
        <i class="fas fa-user-alt" id="profileIcon"></i>
        <div id="divProfile" class="hideProfile">
                <img src="img/user-circle-solid.svg" alt="" id="profilPic">
                <p id="profileName">&nbsp;●&nbsp;&nbsp;<?php echo $_SESSION['userType'];?></p>
                <p id="userName"><i class="fas fa-user-alt"></i> <?php echo $_SESSION['firstName'];?></p>
                <a href="logout.php">
                    <button type="input" id="btnLogout"><i class="fas fa-power-off" id="power"></i>Logout</button>
                </a>
                
        </div>
        
    </div>
    
    <!-- create the main division -->
    <div class="divMain">
        <!--create main container-->
        <main>
            <div class="loding">
                <img src="img/unnamed.gif" alt="loding">
            </div>
        </main>
    </div>



    <!-- set the footer -->
    </div>
    <div class="footer">www.onlinelibrarymanagementsystem.com</div>
     <!--impot jqury files-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--import jsvscript files-->
    <script src="inc/myprofile_script.js"></script>
    <script src="inc/script_home.js"></script>
    <script src="inc/homePageContantScript.js"></script>
    <script src="inc/home_script.js"></script>
</body>
</html>
<?php mysqli_close($connection); ?>