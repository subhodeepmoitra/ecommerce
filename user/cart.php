<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>TINY TRESSERS--Cart Items</title>
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
                <!-- <li><a href="product.php" class="activee ">Products</a></li> -->
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

<!-- ----------cart item details--------------- -->
    

    
    <div class="container-fluid">
        <div class="row justify-content-around my-5 mx-5">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table text-center table-bordered">
                    <thead class="bg-danger text-white fs-5">
                        <th>Serial No.</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                       <?php
                       session_start();
                       $pTotal = 0;
                       $Total = 0;
                       $i = 0;
                       if(isset($_SESSION['cart'])){
                           foreach($_SESSION['cart'] as $key=> $value){
                               $pTotal = $value['productPrice'] * $value['productQuantity'];
                               $Total += $value['productPrice'] * $value['productQuantity'];
                               $i = $key+1;
                            echo "
                            <form action='Insertcart.php' method='POST'>
                            <tr>
                            <td>$i</td>
                            <td><input type='hidden' name='PName' value ='$value[productName]'>$value[productName]</td>
                            <td><input type='hidden' name='PPrice' value ='$value[productPrice]'>Rs $value[productPrice]</td>
                            <td><input type='text' name='PQuantity' class='text-center' value ='$value[productQuantity]'></td>
                            <td>Rs $pTotal</td>
                            <td><button name='update' class='btn-warning'>Update</button></td>
                            <td><button name='remove' class='btn-danger'>Delete</button></td>
                            <td><input type='hidden' name='item' value= '$value[productName]'></td>
                            </tr>
                            </form>
                            ";
                           } 
                           
                       }
                       ?> 
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3 text-center">
                <h3>TOTAL</h3>
                <h1 class="bg-danger text-white "><?php echo 'Rs '.$Total ?></h1>
                <?php
                if(isset($_SESSION['user'])){
                echo "<a href='Proced_To_Pay.php'><input type='submit' value='Buy Now'></a>";
                }
                else{
                    echo "<a href='login.php'><input type='submit' value='Login'></a>";                    
                }

                ?>
            </div>
        </div>
    </div>
    <br><br><br>&nbsp&nbsp&nbsp<br><br><br>

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
</body>
</html>
