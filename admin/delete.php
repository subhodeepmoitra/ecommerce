<?php

$Id = $_GET['ID'];
$conn = mysqli_connect('localhost','root','','project');
mysqli_query($conn, "DELETE FROM `signup` WHERE id = $Id");
header("location:user.php");

?>