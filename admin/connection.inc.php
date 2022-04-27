<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/project/admin/');
define('SITE_PATH','http://127.0.0.1/project/admin/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'../images/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'../images/');
?>