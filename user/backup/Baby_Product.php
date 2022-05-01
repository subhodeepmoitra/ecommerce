<?php include 'session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>TINY TRESSERS-- Boy's Products</title>
</head>
<body>
<div class="container">
    <div class="navbar">
        <div class="logo">
            <a href="index.php"><img src="images/logo2.png" alt="logo" width="125px"></a>
        </div>

        <!-- ----------Search Box----------- -->

        <div class="Box">
            <form action="">
            <i class="fa fa-search" aria-hidden="true"></i>
            <input type="search" name="" class="search">
            <button type="submit" class="search-button">Search</button>
            </form>
        </div>

        <!-- ----------Menu Items----------- -->

        <nav>
            <ul id="MenuItems">
                <li><a href="index.php" class="activee">Home</a></li>
                <!-- <li><a href="product.php" class="activee active">Products</a></li> -->
                <li><a href="about.html" class="activee">About</a></li>
                <li><a href="contact.php" class="activee">Contact</a></li>
                <li><a href="account.php" class="activee">Account</a></li>
            </ul>
        </nav>
        <a href="cart.php"><img src="images/cart.png" alt="cart" width="30px" height="30px"></a>
        <img src="images/menu.png" class="menu-icon" 
        onclick="menutoggle()">
    </div>
</div>


<!-- ---------Boy's products----------- -->
<br><br><div class="small-container">
    <h2 class="title">All Products</h2>
    <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
          <?php
            $conn = mysqli_connect('localhost','root','','project');
            $Record = mysqli_query($conn,"SELECT * FROM `product`");
            while($row = mysqli_fetch_array($Record)){
              $check_page = $row['PCategory'];
              if($check_page === 'babyProducts'){
            echo "
                  <div class='clo-md-6 col-lg-4 m-auto mb-3'>
                  <form action='Insertcart.php' method='POST'>
                  <div class='card m-auto' style='width: 18rem;'>
                  <img src='../admin/admin/$row[Pimage]' class='card-img-top' alt='...'>
                  <div class='card-body text-center'>
                  <h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>
                  <p class='card-text text-danger fs-4 fw-bold'>Rs  $row[PPrice]</p>
                  <input type='hidden' name='PName' value='$row[PName]'>
                  <input type='hidden' name='PPrice' value='$row[PPrice]'>
                  <input type='hidden' name='PQuantity' value='1'  placeholder='Quantity'>
                  <input type='submit' name='addCart' class='btn btn-warning text-white w-100' value='Add to Cart'>
                  </div>
                  </div>
                  </form>
                  </div>";
                }
              }
        ?>
      </div>
    </div>
  </div>

</div>

<!-- ------------footer------------ -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3 class="sizeb">Download Our App</h3>
                <p>Download App for Android ios mobile phone.</p>
                <div class="app-logo">
                    <img src="images/play-store.png" alt="image">
                    <img src="images/app-store.png" alt="image">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="images/logo3.png" alt="logo">
                <p>Our Purpose Is To Make The Pleasure and Benefits of Your Baby Accessible to the Many</p>
            </div>
            <div class="footer-col-3">
                <h3 class="size">Useful Links</h3>
                <ul class="sizec">
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Discount</li>
                    
                </ul>
            </div>
            <div class="footer-col-4">
                <h3 class="sizea">Follow Us</h3>
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