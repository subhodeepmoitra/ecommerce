<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);


if(isset($_GET['submit'])){
  $name = $_GET['name'];
  $email = $_GET['email'];
  $message = $_GET['message'];
 
  
  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'tinytressers@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'project_pass'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('tinytressers@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('tinytressers@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

    $mail->send();
    

  }
  catch (Exception $e){} 
  header("location:index.php?msd=Done");
}

?>