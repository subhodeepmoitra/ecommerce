<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINY TRESSERS--Signup Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    

<?php 
    
    include 'db.php';

    if(isset($_POST['submit'])){
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $uname = mysqli_real_escape_string($conn, $_POST['uname']);
        $pnum = mysqli_real_escape_string($conn, $_POST['pnum']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $conpass = mysqli_real_escape_string($conn, $_POST['conpass']);
    
        $password = password_hash($pass, PASSWORD_BCRYPT);
        $conpassword = password_hash($conpass, PASSWORD_BCRYPT);
    
        $emailquery = " select * from signup where Email='$email' ";
        $query = mysqli_query($conn,$emailquery);

        $uesrnamequery = " select * from signup where UserName='$uname' ";
        $query1 = mysqli_query($conn,$uesrnamequery);

    
        $emailcount = mysqli_num_rows($query);
        $usernamecount = mysqli_num_rows($query1);
        
        
        $_SESSION['user'] = $uname;

        if($usernamecount>0){
            ?>
            <script>
                alert("User Name already exists");
            </script>
            <?php
        }
        else{
            if($emailcount>0){
                ?>
                <script>
                    alert("Email already exists");
                </script>
                <?php
            }
            else{
                if($pass === $conpass){
        
        
                    $q = "insert into signup (FullName, UserName, Number, Email, Password, CPassword) values('$fname','$uname','$pnum','$email','$password','$conpassword')";
                    
                    $iquery = mysqli_query($conn, $q);
                    if($iquery){
                        ?>
                        <Script>
                            alert("Congratulations you have successfully registered yourself!");
                        </Script>
                        <?php
                     }
                     else{
                         ?>
                         <Script>
                             alert("An Error Has Been Occurred");
                         </Script>
                         <?php
                     }
                    ?>
                    <Script>
                    location.replace("index.php");
                    </Script>
                    <?php
                }else{
                    ?>
                     <Script>
                    alert("Password not match")
                    </Script>
                    <?php
                }
            }
        }
    }    

?>
    
        
    <div class="center">
        <h1>Registration</h1>
        <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
            <div class="txt_field">
                <input type="text" required name="fname">
                <span></span>
                <label>Full Name</label>
            </div>
            <div class="txt_field">
                <input type="text" required name="uname">
                <span></span>
                <label>UserName</label>
            </div>
            <div class="txt_field">
                <input type="tel" minlength="10" maxlength="10" required name="pnum">
                <span></span>
                <label>Phone Number</label>
            </div>
            <div class="txt_field">
                <input type="email" required name="email">
                <span></span>
                <label>Email ID</label>
            </div>
            <div class="txt_field">
                <input type="password" id="password" minlength="4" maxlength="16" required name="pass">
                <i class="fa fa-eye-slash" aria-hidden="true" id="eye"></i>
                <span></span>
                <label for="password">Password</label>
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
            <input type="submit" onclick="checkPassword()" value="Register" name="submit">
            <div class="signup_link">
                Already have an account?<a href="login.php">Login</a>
            </div>
        </form>
        <script src="script.js"></script>
    </div>
</body>
</html>