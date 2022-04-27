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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <title>TINY TRESSERS--Proced To Pay</title>
</head>
<body>
    

  <div class="container text-center">
    <div class="row">
      <div class="col-md-6 m-auto border border-primary mt-4 pt-2 pb-3 mb-4 d-inline">
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
                 <h2><label  class='form-label'>Full Name</label></h2>
                 <h4 class='text-secondary'>$row[FullName]</h4>
               </div>
               <div class='mb-3'>
                 <h2><label  class='form-label'>Phone Number</label></2>
                 <h4 class='text-secondary'>$row[Number]</h4>
               </div>
               <div class='mb-3'>
                 <h2><label  class='form-label'>Email</label></h2>
                 <h4 class='text-secondary'>$row[Email]</h4>
               </div>
               <div class='mb-3'>
                 <h2><label  class='form-label'>Address</label></h2>
                 <h4 class='text-secondary'>Address</h4>
               </div>
             </form>";
              }
          } else {
              echo "0 results";
          }
        ?>
          <form>
            <div class="mb-3">
              <h2><label for="exampleInputEmail1" class="form-label">Amount</label></h2>
              <h1 class="text-danger"><?php echo 'Rs: '.$Total ?></h1>
            </div>
          </form>
          <a href="payment.php"><input type="submit" class="btn btn-success" value="Proced To Pay"></a>
      </div>
    </div>
  </div>


</body>
</html>