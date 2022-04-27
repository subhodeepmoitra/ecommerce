<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINY TRESSERS--Payment Receipt</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="style20.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- html2pdf CDN-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js">
    </script>

</head>

    
<style>
    #button {
        background-color: blue;
        border-radius: 5px;
        color: white;
    }
</style>
    



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="loaded">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <div class="center-div" id="makepdf">
        <div class="table-responsive">
            <center>
                <div class=".container">
                    <br>
                    <br>
                    <center><img src="images/i1.png" width="100px" alt=""></center><br><br>
                        <div class="container text-left">  
                            <?php 
                               $conn = mysqli_connect('localhost','root','','project');
                               $user = $_SESSION['user'];
                               $sql = "SELECT * FROM `signup` where UserName = '$user'";
                               $result = $conn->query($sql);
                               
                               if ($result->num_rows > 0) {
                                   // output data of each row
                                   while($row = $result->fetch_assoc()) {
                                    echo"<form>
                                    <div class='mb-3'>
                                      <h4 class='text-dark'>Name: $row[FullName]</h4>
                                    </div>
                                    <div class='mb-3'>
                                      <h4 class='text-dark'>Phone No: $row[Number]</h4>
                                    </div>
                                    <div class='mb-3'>
                                      <h4 class='text-dark'>Email: $row[Email]</h4>
                                    </div>
                                    <div class='mb-3'>
                                      <h4 class='text-dark'>Address: Address</h4>
                                    </div>
                                  </form>";
                                   }
                               } else {
                                   echo "0 results";
                               }
                             ?>
                        </div><br><br>
                             










                    <h3 style="color:black;"><i>Payment Receipt<i></h3>
                    <div class="container-fluid">
                        <div class="row justify-content-around my-5 mx-5">
                            <div class="col-sm-12 col-md-6 col-lg-9">
                                <table class="table text-center table-bordered">
                                    <thead class=" text-dark fs-5">
                                        <th>Serial No.</th>
                                        <th>Product Name</th>
                                        <th>Product Quantity</th>
                                        <th>Total price</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $pTotal = 0;
                                            $Total = 0;
                                            $i = 0;
                                            if(isset($_SESSION['cart'])){
                                            foreach($_SESSION['cart'] as $key=> $value){
                                            $pTotal = $value['productPrice'] * $value['productQuantity'];
                                            $Total += $value['productPrice'] * $value['productQuantity'];
                                            $i = $key+1;
                                            echo "
                                                <form>
                                                <tr>
                                                <td><h5>$i</h5></td>
                                                <td><h5>$value[productName]</h5></td>
                                                <td><h5>$value[productQuantity]</h5></td>
                                                <td><h5>Rs $pTotal</h5></td>
                                                </tr>
                                                </form>
                                            ";
                                            }              
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>    
                    
                    <div class="col-lg-3 text-center">
                        <h3 class="text-dark">TOTAL</h3>
                        <h1 class="text-dark "><?php echo 'Rs '.$Total ?></h1>
                    </div>
                    <!-- <h3 style="color:blue;">Successful!</h3> -->





                </div><br>

                <div class="container">
                    <button id="button" class="bg-dark mb-5" onclick="generatePDF()">print</button>
                <div id="makepdf">
                <div class="container">
                    <a href="index.php"><button id="button" class="bg-dark mb-5">Home</button></a>
                <div>
            </center>
        </div>

    </div>
    </div>
    
</body>
<script>
    var button = document.getElementById("button");
    var makepdf = document.getElementById("makepdf");

    button.addEventListener("click", function () {
        var mywindow = window.open("", "PRINT",
            "height=400,width=600");

        mywindow.document.write(makepdf.innerHTML);

        mywindow.document.close();
        mywindow.focus();

        mywindow.print();
        mywindow.close();

        return true;
    });

                                // loading animation
    // $('body').append('<div style="" id="loadingDiv"><div class="loader">Loading...</div></div>');
    // $(window).on('load', function () {
    //     setTimeout(removeLoader, 2000); //wait for page load PLUS two seconds.
    // });
    // function removeLoader() {
    //     $("#loadingDiv").fadeOut(500, function () {
    //         // fadeOut complete. Remove the loading div
    //         $("#loadingDiv").remove(); //makes page more lightweight 
    //     });
    // }
</script>
<!-- Place the script below at the bottom of the body -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</html>