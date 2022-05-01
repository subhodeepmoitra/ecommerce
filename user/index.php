<?php
include 'db.php';
include 'db1.php';
include 'session.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINY TRESSERS--Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="sca.js"></script>

</head>
<body>


<div class="header">
<div class="container">
    <div class="navbar">
        <div class="logo">
            <a href="index.php
            "><img src="images/logo2.png" alt="logo" width="125px"> </a>
        </div>

        <!-- ----------Search Box----------- -->

        <div class="ho">
            <form action="">
                <!-- <div class="poi"> -->
            <i class="fa fa-search" aria-hidden="true"></i>
            <div class="poipoi">
             <input type="search" id="search" class="search" placeholder="Search data">
</div>
             <button type="submit" id="search" class="search-button">Search</button>
            
            <!-- </div> -->
              <!-- </div> -->
            </form>
        </div>
        <div id="display"></div>

        

        <!-- <div class="Box">
            <form action="">
            <i class="fa fa-search" aria-hidden="true"></i>
            <div class="autocomplete">
            <input  id="myInput" type="search" name="search" onkeyup="myFunction()" >
            <button type="submit" class="search-button" >Search</button> -->
            <!-- <div class="searchinput"> -->
             
                <!-- <li>Boys Graphic Print Hosiery T'Shirt </li>
                <li>Full Sleeve Solid Boys Casual Jacket </li>
                <li>New Gen-india T'Shirt(Black & White) </li>
                <li>Graphic Print Pure Cotton T'Shirt Combo </li>
                <li>MammyPoko Pants Extra-L(96 Pieces) </li>
                <li>HIMALAYA Happy Gift PackS </li> -->
             
             <!-- </div> -->
             <!-- </div>
            </form>
        </div> -->
        <!-- ----------Menu Items----------- -->

        <nav>
            <ul id="MenuItems">
                <!-- <i class="fa fa-search" aria-hidden="true"></i>
                <input type="search" name="" class="search"> -->
                <li><a href="index.php" class="activee active">Home</a></li>
                <li><a href="product.php" class="activee">Products</a></li>
                <li><a href="about.html" class="activee">About</a></li>
                <li><a href="contact.php" class="activee">Contact</a></li>
                <li><a href="account.php" class="activee">Account</a></li>
            </ul>
        </nav>
        <a href="cart.php" class="cart"><img src="images/cart.png" alt="cart" width="30px" height="30px"></a>
        <img src="images/menu.png" class="menu-icon" 
        onclick ="menutoggle()">
    </div>
    <div class="row">
        <div class="col-2">
            <h1 class="title-design">Give Your Baby<br>A New Life!</h1>
            <p>Giving birth and being born brings us into the essence of creation, where the human spirit is courageous and bold and the body<br> miracle of wisdom.</p>
            <a href="product.php" class="btn">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
            <img src="images/image01.png" alt="image">
        </div>
    </div>
</div>    
</div>

<!-- ---------featured categories----------- -->
<div class="categories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="images/category-1.jpg" alt="categories">
            </div>
            <div class="col-3">
                <img src="images/category-2.jpg" alt="categories">
            </div>
            <div class="col-3">
                <img src="images/category-3.jpg" alt="categories">
            </div>
        </div>
    </div>
</div>

<!-- ---------girls products----------- -->
<div class="small-container">
    <h2 class="title">Girls Product</h2>
    <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
          <?php
          $sql = "SELECT * FROM `product` where categories_id='1'";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                 $product_name = $row['name'];
                  echo "<div class='card mb-5' style='width: 18rem;'>
                  <a href='"."productdetails.php?product_name=$product_name"."'> <img src='../images/$row[image]' class='card-img-top' alt='...'>
                  <div class='card-body'>
                  <h5 class='card-title text-center'>$row[name]</h5>
                  <h5 class='card-text text-center'>Rs $row[price]</h5></a>
                  </div>
                  </div>
                     ";
  
              }
          } else {
              echo "0 results";
          }
        ?>
      </div>
    </div>
  </div>
    
    
    <!-- ---------------boys product------------------ -->

    <br><h2 class="title">Boys Products</h2>
    <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
          <?php
          $sql = "SELECT * FROM `product` where categories_id='2'";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  $product_name = $row['name'];
                  echo "<div class='card mb-5' style='width: 18rem;'>
                  <a href='"."productdetails.php?product_name=$product_name"."'> <img src='../images/$row[image]' class='card-img-top' alt='...'>
                  <div class='card-body'>
                  <h5 class='card-title text-center'>$row[name]</h5>
                  <h5 class='card-text text-center'>Rs $row[price]</h5></a>
                  </div>
                  </div>
";
                  
              }
          } else {
              echo "0 results";
          }
        ?>
      </div>
    </div>
  </div>
  
  
  
      <!-- ---------------badies product------------------ -->
  
    <br><h2 class="title">Babies Products</h2>
    <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
          <?php
          $sql = "SELECT * FROM `product` where categories_id='3'";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  $product_name = $row['name'];
                  echo "<div class='card mb-5' style='width: 18rem;'>
                 <a href='"."productdetails.php?product_name=$product_name"."'> <img src='../images/$row[image]' class='card-img-top' alt='...'>
                  <div class='card-body'>
                  <h5 class='card-title text-center'>$row[name]</h5>
                  <h5 class='card-text text-center'>Rs $row[price]</h5></a>
                  </div>
                  </div>
";
                  
              }
          } else {
              echo "0 results";
          }
        ?>
      </div>
    </div>
  </div>

<!-- ------------offer-------------- -->



<!-- ------------testimonial--------------- -->
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <span class="quote">&#8220;</span>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                 Eius totam modi molestias quod quisquam error quas, quis sit enim.</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9734;</span>
                </div>
                <img src="images/user-1.jpg" alt="user">
                <h3>Deblina Banerjee</h3>
            </div>
            <div class="col-3">
                <span class="quote">&#8220;</span>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                 Eius totam modi molestias quod quisquam error quas, quis sit enim.</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9734;</span>
                </div>
                <img src="images/user-2.jpg" alt="user">
                <h3>Priti Debnath</h3>
            </div>
            <div class="col-3">
                <span class="quote">&#8220;</span>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Eius totam modi molestias quod quisquam error quas, quis sit enim.</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9734;</span>
                </div>
                <img src="images/user-3.jpg" alt="user">
                <h3>Anwesha Chatterjee</h3>
            </div>
        </div>
    </div>
</div>
<!-- ---------------brands--------------- -->
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/logo-godrej.png" alt="logo">
            </div>
            <div class="col-5">
                <img src="images/pampers1.jpg" alt="logo" width="90px" height="75px">
            </div>
            <div class="col-5">
                <img src="images/sp2.png" alt="logo">
            </div>
            <div class="col-5">
                <img src="images/huggies1.png" alt="logo" width="85px" height="80px">
            </div>
            <div class="col-5">
                <img src="images/logo-paypal.png" alt="logo">
            </div>
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
                <p>Our Purpose Is To Make The Pleasure and Benefits of Your Baby
                 Accessible to the Many</p>
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
        <p class="copyright">Â© Copyright <script>document.write(new Date().getFullYear())</script> - TINY TRESSERS</p>
    </div>
</div>

<?php

// include "footer.php";

?>

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
       <!-- <script src="suggestions.js"></script> -->
       




</body>
</html>