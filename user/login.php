<?php session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINY TRESSERS--Your login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>


<?php

include 'db.php';

if(isset($_POST['submit'])){
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $uname_search = " select * from signup where UserName='$uname' ";
    $query = mysqli_query($conn, $uname_search);

    $uname_count = mysqli_num_rows($query);

    $_SESSION['user'] = $uname;

    if($uname_count){
        $uname_pass = mysqli_fetch_assoc($query);
        $db_pass = $uname_pass['Password'];
        $pass_decode = password_verify($pass, $db_pass);
        
        if($pass_decode){
            ?>

        <script>
            alert("Welcome back good to see you!")
        </script>

            <?php
            ?>
            <Script>
                location.replace("index.php");
            </Script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Password or UserName not match")
            </script>
            <?php
        }

    }else{
        ?>

        <script>
            alert("UserName Not Match")
        </script>

        <?php
    }
    
}


?>



    <div class="center-login">
        <h1>Login</h1>
        <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" >
            <div class="txt_field">
                <input type="text" required name="uname">
                <span></span>
                <label>UserName</label>
            </div>
            <div class="txt_field">
                <input type="password" id="password" required name="pass">
                <i class="fa fa-eye-slash" aria-hidden="true" id="eye"></i>
                <span></span>
                <label >Password</label>
            </div>
            <div class="psss"><a href="forget-password.php">Forgot Password?</a></div>
            <input type="submit" value="Login" name="submit">
            <div class="signup_link">
                Not have an account?<a href="signup.php">Register</a>
            </div>
        </form>
        <script src="script.js"></script>
    </div>
</body>
</html>