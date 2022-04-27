<?php

if(isset($_POST['submit'])){

    include 'db.php';

    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $img_des = "../images/".$image_name;
    $description = $_POST['description'];
    move_uploaded_file($image_loc, "../images/".$image_name);
    $quantity = $_POST['Pquantity'];
    $product_category = $_POST['Pages'];
    

    mysqli_query($conn, "INSERT INTO `product`(`PName`, `PPrice`, `Pimage`, `description`, `Pquantity`, `PCategory`) VALUES ('$product_name','$product_price','$img_des', '$description', '$quantity','$product_category')");
    header("location: product.php");
}

?>



