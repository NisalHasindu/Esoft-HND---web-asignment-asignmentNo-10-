<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php
    $error = array();
    if(isset($_POST['btnCreateAccount'])){
        /*
        if(empty(trim($_POST['txtFirstName']))){
            $error[] = 'first name is required';
        }

        if(empty(trim($_POST['txtLastName']))){
            $error[] = 'last name is required';
        }

        if(empty(trim($_POST['txtEmail']))){
            $error[] = 'e-mail is required';
        }

        if(empty(trim($_POST['txtMobileNo']))){
            $error[] = 'mobile number is required';
        }

        if(empty(trim($_POST['txtNic']))){
            $error[] = 'NIC is required';
        }

        if(empty(trim($_POST['txtAddress']))){
            $error[] = 'address of ZIP is required';
        }

        if(empty(trim($_POST['txtConformPassword']))){
            $error[] = 'conform password is required';
        }

        if(!empty($error)){
            
            echo "<script>for(var i=0; i<$error.lenght; i++){alert('$error[i]');}</script>";
            
        }
        */

        $email = mysqli_real_escape_string($connection, $_POST['txtEmail']);
        $query = "SELECT * FROM tbluser WHERE email = '{$email}' LIMIT 1";
        $excute_query = mysqli_query($connection, $query);

        if($excute_query){
            if(mysqli_num_rows($excute_query)==1){
                $error[] = 'user allrady exists!';
                echo "<script>alert('user allrady exists!');</script>";
            }
        }

        //checking are thair any errors
        if(empty($error)){
            //senitizie the varibales
            $firstName = mysqli_real_escape_string($connection, $_POST['txtFirstName']);
            $lastName = mysqli_real_escape_string($connection, $_POST['txtLastName']);
            $userType = $_POST['userType'];
            $conformPassword = mysqli_real_escape_string($connection, $_POST['txtConformPassword']);
            //email is allrady senitizied
            $mobileNo = mysqli_real_escape_string($connection, $_POST['txtMobileNo']);
            $address = mysqli_real_escape_string($connection, $_POST['txtAddress']);
            $nic = mysqli_real_escape_string($connection, $_POST['txtNic']);
            $userStatus = 'not borrowed user';

            $newPassword = mysqli_real_escape_string($connection, $_POST['txtNewPassword']);

            //check whether the new password and new password are matched
            if($newPassword == $conformPassword){
                //encript the password
                $hashed_password = sha1($conformPassword);

                //insert query for add new user to database
                $query = "INSERT INTO tbluser (firstName,lastName,userType,password,email,mobileNo,AddressOrZip,NIC,userStatus) VALUES('$firstName','$lastName','$userType','$hashed_password','$email','$mobileNo','$address','$nic','$userStatus')";
                $excute_query = mysqli_query($connection, $query);

                if($excute_query){
                    echo "<script>alert('your account was created! please login.');</script>";
                }else{
                    echo "<script>alert('sign  up failed, try agan!');</script>";
                }
            }else{
                echo "<script>alert('new password miss match with conform password!');</script>";
            }
        }
    }
?>

<?php
    //user login mekanisme
    if(isset($_POST['btnLogin'])){
        $email = mysqli_real_escape_string($connection, $_POST['txtEmail_login']);
        $password = mysqli_real_escape_string($connection, $_POST['txtPassword_login']);
        //encript the password user typed
        $hashed_password = sha1($password);
        //prepare database query
        $query = "SELECT * FROM tbluser WHERE email = '$email' AND password='$hashed_password' LIMIT 1";
        //excute query
        $excute_query = mysqli_query($connection, $query);

        if($excute_query){
            if(mysqli_num_rows($excute_query)==1){
                //stor user details to a varibale
                $user = mysqli_fetch_assoc($excute_query);
                //pass first name and user type to session variable
                $_SESSION['firstName'] = $user['firstName'];
                $_SESSION['userType'] = $user['userType'];
                //rederect to the home page
                header('Location: home.php');
            }else{
                //if not show error massage
                echo "<script>alert('inalied email name or password!');</script>";
            }
        }else{
            //if not show error massage
            echo "<script>alert('databse query failed!');</script>";
        }
    }
?>
<!-- the user login page for online library management system-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- add meta view point tag for make web page responsive -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="inc/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>
<!-- create the header class -->
    <div class="header">
    <!-- set the logo and name -->
        
        <div class="logo">
        <img src="img/fulllogo.png" alt="logo">
        </div>
        <!-- create the login form -->
        <div class="loginText">
        <p id="loginText">Login</p>
            <form action="index.php" method="post" id="frmLogin" class="non_visible">
                <input type="text" name="txtEmail_login" id="loginEmail" placeholder="e-mail" autofocus required>
                <input type="password" name="txtPassword_login" id="password" placeholder="password" required>
                <i class="far fa-eye" id="eye"></i>
                <button type="submit" name="btnLogin" id="btnLogin">Login</button>
            </form>
        </div>
        
    </div>


    <!-- create the main division -->
    <div class="main">
        <!-- set background image to the page -->
        <div class="background_img"><img src="img/Computer.png"></div>


        <div class="signUp">
            <!-- create signup form -->
            <form action="index.php" method="post" id="frmSignUp">
                <h2>Sign Up</h2>
                <p>Sign up for Lowa State University online library</p>
                <input type="text" name="txtFirstName" placeholder="First Name" id="txtFirstName" maxlength="50" required>
                <input type="text" name="txtLastName" placeholder="Last Name" id="txtLastName" maxlength="50" required>
                <input type="text" name="txtEmail" placeholder="E-mail" id="txtEmail" maxlength="50" required>
                <input type="tel" name="txtMobileNo" placeholder="Mobile No" maxlength="10" id="txtMobileNo" pattern="[0]{1}[0-9]{9}" required>
                <input type="text" name="txtNic" placeholder="NIC" id="txtNic" maxlength="20" required>
                <input type="text" name="txtAddress" placeholder="Address/ZIP" id="txtAddress" maxlength="100" required>
                <p>Select the profession</p>
                <input type="radio" name="userType" value="student" id="rdoStudent" checked><label for="rdoStudent" id="txtRdo">Student</label>
                <input type="radio" name="userType" value="profeser" id="rdoProfeser"><label for="rdoProfeser" id="txtRdo">Profeser</label>
                <hr>
                <p>Create new password</p>
                <input type="password" name="txtNewPassword" placeholder="New Password" id="newPassword" class="txtNewPassword">
                <input type="password" name="txtConformPassword" placeholder="Conform Password" id="conformPassword" class="txtConformPassword">
                <hr>
                <button type="submit" name="btnCreateAccount" id="btnCreateAccount" onclick="matchPassword()">Create Account</button>
                <p id="temaAndCondition">The librarian reserves the right to terminate this account ar any time in the violation of library rules.</p>
            </form>
        </div>
    <!-- set the footer -->
    </div>
    <div class="footer">www.onlinelibrarymanagementsystem.com</div>
    <script src="inc/script.js"></script>
</body>
</html>
<?php mysqli_close($connection); ?>