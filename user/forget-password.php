<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINY TRESSERS--Forget-Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<?php
include 'db.php';

if(isset($_POST['submit'])){
    $uname = mysqli_real_escape_string($conn,$_POST['uname']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $conpass = mysqli_real_escape_string($conn, $_POST['conpass']);

    $password = password_hash($pass, PASSWORD_BCRYPT);
    $conpassword = password_hash($conpass, PASSWORD_BCRYPT);

    $q = "UPDATE signup SET Password ='$password', CPassword = '$conpassword' WHERE UserName='$uname'";

    if($pass === $conpass){
        if(mysqli_query($conn,$q)){
            ?>
            <script>
                location.replace("login.php");
                alert("Password updated successfully")
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Password already exists!")
            </script>
            <?php
        }
    }
    else{
        ?>
        <Script>
            alert("Password not match")
        </Script>        
        <?php
    }
}
?>

    <div class="center-forgot">
        <h1>Forgot Password</h1>
        <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
            <div class="txt_field">
                <input type="text" required name="uname">
                <span></span>
                <label>UserName</label>
            </div>
            <div class="txt_field">
                <input type="password" id="password" minlength="4" maxlength="16" required name="pass">
                <i class="fa fa-eye-slash" aria-hidden="true" id="eye"></i>
                <span></span>
                <label for="password">New Password</label>
            </div>
            <div class="txt_field">
                <input type="password" id="cnfrm-password" minlength="4" maxlength="16" required name="conpass">
                <i class="fa fa-eye-slash" aria-hidden="true" id="eye-con"></i>
                <span></span>
                <label for="cnfrm-password">Confirm Password</label>
            </div>
            <div>
            <p id="message"></p>
            </div>
            <input type="submit" onclick="checkPassword()" value="Update" name="submit">
        </form>
        <script src="script.js"></script>
    </div>


</body>
</html>