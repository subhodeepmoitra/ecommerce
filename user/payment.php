<?php
session_start();
$Total = 0;
if(isset($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $key=> $value){
        $Total += $value['productPrice'] * $value['productQuantity'];
    } 
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TINY TRESSERS--Payment</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Payment-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<style>
    .button{
        color: #fff;
        background: #198754;
        border-color: #198754;
        border-radius: 5px;
        margin-left: 15px;
        margin-bottom: 15px;
        width: 410px;
        height: 45px;
        font-size: 20px;
    }
</style>

<body>                          
    <div class="row .payment-dialog-row">
        <div class="col-12 col-md-4 offset-md-4">
            <div class="card credit-card-box">
                <div class="card-header">
                    <h3><span class="panel-title-text">Payment Details </span><img class="img-fluid panel-title-image" src="assets/img/accepted_cards.png"></h3>
                </div>
                <div class="card-body">
                    <form id="payment-form" method="POST">
                    <div class="row">
                    <div class="col-12">
                                <div class="form-group mb-3"><label class="form-label" for="customerName">Account Holder</label>
                                    <div class="input-group"><h5 class="text-danger"><?php echo $_SESSION['user'] ?></h5></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3"><label class="form-label" for="customerName">Card Holder</label>
                                    <div class="input-group"><input class="form-control" type="text" id="holderName" required placeholder="Valid Card Holder"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-3"><label class="form-label" for="cardNumber">Card number </label>
                                    <div class="input-group"><input class="form-control" type="tel" id="cardNumber" required placeholder="Valid Card Number" minlength="16" maxlength="16"><span class="input-group-text"><i class="fa fa-credit-card"></i></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group mb-3"><label class="form-label" for="cardExpiry"><span>expiration </span><span>EXP </span> date</label><input class="form-control" required type="tel" minlength="5" maxlength="5" id="cardExpiry" placeholder="MM / YY"></div>
                            </div>
                            <div class="col-5 pull-right">
                                <div class="form-group mb-3"><label class="form-label" for="cardCVC">cv code</label><input class="form-control" type="password" maxlength="3"
                                pattern="[0-9]*" inputmode="numeric" required id="cardCVC" placeholder="CVC"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12"><input type="submit" id="submit" class="btn btn-success btn-lg d-block w-100" name="upload"  value="<?php echo 'Rs: '.$Total.' Pay' ?>">
                        </div>
                        </div>
                        <?php
                        if(isset($_POST['upload'])){
                            ?>
                            <script>
                                swal({
                                        title: "Congratulations!",
                                        text: "Payment Successfully Done!",
                                        icon: "success",
                                        button: "OK",
                                    });
                            </script>
                            <?php
                        }
                        ?>
                    </form>
                </div>
                <?php
                if(isset($_POST['upload'])){
                    echo "<form method='POST'>
                    <div class='row'>
                            <div class='col-12'><button class='button' type='submit' name='receipt'>Receipt</button></div>
                        </div> 
                    </form>";
                }
                ?>
                <?php
                if(isset($_POST['receipt'])){
                    ?>
                    <Script>
                        swal({
                                title: "Download Your Payment Receipt",
                            }).then(function() {
                                window.location = "receipt.php";
                            });

                    // location.replace("receipt.php");
                    </Script>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    
</body>

</html>

