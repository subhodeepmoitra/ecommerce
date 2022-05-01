<?php
 $conn = mysqli_connect('localhost','root','','project');
 $productname = $_GET['product_name'];
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINY TRESSERS--Product Details</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

</head>
<body>

<div class="container">
    <div class="navbar">
        <div class="logo">
            <a href="index.php"><img src="images/logo2.png" alt="logo" width="125px"></a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="index.php" class="activee">Home</a></li>
                <li><a href="product.php" class="activee">Products</a></li>
                <li><a href="about.html" class="activee">About</a></li>
                <li><a href="contact.php" class="activee">Contact</a></li>
                <li><a href="account.php" class="activee">Account</a></li>
            </ul>
        </nav>
        <a href="Form design.html"><img src="images/cart.png" alt="cart" width="30px" height="30px"></a>
        <img src="images/menu.png" class="menu-icon" 
        onclick="menutoggle()">
    </div>
</div>    
<!-- -------------single product------------ -->

<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
        <div class="row">
          <?php
           $Record = mysqli_query($conn,"select product.*,categories.categories from product,categories where name='$productname' LIMIT 1");
            while($row = mysqli_fetch_array($Record)){
            echo "
                  <div class='clo-md-6 col-lg-4 m-auto mb-3'>
                  <form action='Insertcart.php' method='POST'>
                  <div class='card m-auto' style='width: 16rem;'>
                  <img src='../images/$row[image]' class='card-img-top' alt='...'>
                  <div class='card-body text-left'>
                  <h5>$row[name]</h5>
                  <input type='hidden' name='PName' value='$row[name]'>
                  <input type='hidden' name='PPrice' value='$row[price]'>
                  <input type='hidden' name='PQuantity' value='1'  placeholder='Quantity'>
                  <input type='submit' name='addCart' class='btn btn-warning text-white w-100' value='Add to Cart'>
                  </div>
                  </div>
                  </form>
                  </div>";
                }
              
        ?>
      </div>
          
        </div>
        <div class="col-2">
            <?php
            $Record = mysqli_query($conn,"select product.*,categories.categories from product,categories where name='$productname' LIMIT 1");
            while($row = mysqli_fetch_array($Record)){
                echo "<h2 class='hh'>$row[name]</h2>
                <p class='rupee'>Rs $row[price]</p>
            <h3>Product Details<span>&reg;</span></h3><br>
            <p>$row[description]</p>
            ";
            }
            ?>
            </h4><br>
            <a href="Form design.html" class="btn">Buy Now</a>
            
            <br>
            <p>
            <?php 
            
            ?></p>
        </div>
    </div>
</div>



<!-- ---------------brands--------------- -->


<!-- ------------footer------------ -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android ios mobile phone.</p>
                <div class="app-logo">
                    <img src="images/play-store.png" alt="image">
                    <img src="images/app-store.png" alt="image">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="images/logo3.png" alt="logo">
                <p>Our Purpose Is To Make The Pleasure and Benefits of Your Child Accessible to the Many</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>instagram</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">© Copyright <script>document.write(new Date().getFullYear())</script> - TINY TRESSERS</p>
    </div>
</div>

<!-- ----------js for toggle menu----------- -->
<script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";
    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px"
        }
        else
        {
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>
<!-- --------------JS for product gallery------------- -->
<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");
    
        SmallImg[0].onclick = function(){
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function(){
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function(){
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function(){
            ProductImg.src = SmallImg[3].src;
        }


</script>

<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("MenuItems");
    var btns = header.getElementsByClassName("activeee");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
      });
    }
    </script>
    

</body>
</html>