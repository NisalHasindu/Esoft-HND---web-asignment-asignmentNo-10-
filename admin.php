<!-- the admin page for online library management system-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- add meta view point tag for make web page responsive -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="inc/admin_bookDetails_style.css">
    <link rel="stylesheet" href="inc/admin_userDetails_style.css">
    <link rel="stylesheet" href="inc/style.css">
    <link rel="stylesheet" href="inc/style_admin.css">
    <link rel="stylesheet" href="inc/style_home.css">
    <link rel="stylesheet" href="inc/admin_bookIssueDetails_style.css">
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
                <p id="profileName">admin</p>
                <h2 id="userName">USER NAME</h2>
                <button type="input" id="btnLogout">Logout</button>
        </div>
        
    </div>
    <div class="divManueStrip">
        <div id="mnuBookDetails" onclick="goToBookDetails()">Book Details</div>
        <div id="mnuUserDetails" onclick="goToUserDetails()">User Details</div>
        <div id="mnuBookIssueDetails" onclick="goToBookIssueDetails()">Book Issue Details</div>
        <p id="dateTime">00/00/0000 00:00:00</p>
        
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
    <div class="footer">www.onlinelibrarymanagementsystem.com</div>
     <!--impot jqury files-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--import jsvscript files-->
    <script src="inc/script_home.js"></script>
    <script src="inc/home_script.js"></script>
    <script src="inc/admin_bookDetails_script.js"></script>
    <script src="inc/admin_userDetails_script.js"></script>
    <script src="inc/admin_bookIssueDetails_script.js"></script>
    <script src="inc/admin_Date_time_script.js"></script>
</body>
</html>