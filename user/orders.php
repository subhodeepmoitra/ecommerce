<?php

$conn = mysqli_connect('localhost','root','','project');

$fname = $_GET['fname'];
$lname = $_GET['lname'];
$email = $_GET['email'];
$phno = $_GET['phno'];
$hno = $_GET['hno'];
$address = $_GET['address'];
$pin = $_GET['pin'];
$city = $_GET['city'];
$state = $_GET['state'];

$q = "insert into orders (FirstName,LastName,Email,Pno,Hno,Address,Pin,City,State) values ('$fname','$lname','$email','$phno','$hno','$address','$pin','$city','$state')";
$x = mysqli_query($conn,$q);
if($x==1){
    header("location:https://rzp.io/l/Hnu5Nrsl?msd=Done");
}
else{
    header("location:Form design.html?msd=Not Done");
}
?>
