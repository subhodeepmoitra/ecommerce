<?php include 'sendmail.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINY TRESSERS--Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">


</head>
<body>




<div class="header">
<div class="container">
    <div class="navbar">
        <div class="logo">
            <a href="index.php"><img src="images/logo2.png" alt="logo" width="125px"></a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="index.php" class="activee">Home</a></li>
                <!-- <li><a href="product.php" class="activee">Products</a></li> -->
                <li><a href="about.html" class="activee">About</a></li>
                <li><a href="contact.php" class="activee active">Contact</a></li>
                <li><a href="account.php" class="activee">Account</a></li>
            </ul>
        </nav>
        <a href="cart.php"><img src="images/cart.png" alt="cart" width="30px" height="30px"></a>
        <img src="images/menu.png" class="menu-icon" 
        onclick ="menutoggle()">
    </div>
</div>

<div class="head">
    <h1>Hello...What Can We Help You!!!</h1>
</div>

 <div class="contact-section">
    <div class="contact-info">
      <div><i class="fas fa-home"></i>505 Main Road, Kolkata, West Bengal</div>
      <div><i class="fas fa-phone-alt"></i>+91 6299273302</div>
      <div><i class="fas fa-paper-plane"></i>tinytressers@gmail.com</div>
      <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
    </div>
    <!-- <h2>Feedback</h2> -->
    <div class="contact-form">
      <!-- <h2>Feedback</h2> -->
      <form class="contact" action="sendmail.php" method="get">
        <input type="text" name="name" class="text-box" placeholder="Full Name" required>
        <input type="email" name="email" class="text-box" placeholder="Email" required>
        <textarea  name="message" rows="5" placeholder="Your Feedback" required></textarea>
        <input type="submit" name="submit"  value="Send">
      </form>
    </div>
  </div>









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
    
    <!-- <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script> -->


</body>
</html>
