<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Artwise.pk</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly
  * Updated: Sep 20 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php
  include "config/db.php";
  if ($_SESSION){
  $email=$_SESSION['email'];
  $query='select * from artwise.user where email="'.$email.'"';
  $record=mysqli_query($connect,$query);
  if(mysqli_num_rows($record)) {
    $userRecordStatus=1;
    while ($rec=mysqli_fetch_array($record)){
    $name=$rec['name'];
    $contact=$rec['contact'];
    $address=$rec['address'];
    $userId=$rec['id'];
  }
  echo  
  '<form method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" required  name="name" class="form-control" value='.$name.'>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" required readonly name="email" class="form-control" value='.$email.'>
  </div>
  <div class="mb-3">
    <label  class="form-label">Contact</label>
    <input type="text" required class="form-control" name="contact" value='.$contact.'>
  </div>
  <div class="mb-3">
    <label  class="form-label">Address</label>
    <input type="text" required class="form-control" name="address" value='.$address.'>
  </div>
  <hr style=" width:100%; color:white">
  <button name="placeOrder" type="submit" style="margin-left:40%; background-color:#614AA2; color:white" class="btn">Place Order</button>
</form>';
} 
}
else {
  echo  
  '<form method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" required  name="name" class="form-control" >
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" required name="email" class="form-control">
  </div>
  <div class="mb-3">
    <label  class="form-label">Contact</label>
    <input type="text" required class="form-control" name="contact">
  </div>
  <div class="mb-3">
    <label  class="form-label">Address</label>
    <input type="text" required class="form-control" name="address">
  </div>
  <hr style=" width:100%; color:white">
  <button type="submit" name="placeOrder" style="margin-left:40%; background-color:#614AA2; color:white" class="btn">Place Order</button>
</form>';
}
?>
<?php
// check whether the user exists or not  
  if(isset($_POST['placeOrder'])){
    $userName=$_POST['name'];
    $userEmail=$_POST['email'];
    $userContact=$_POST['contact'];
    $userAddress=$_POST['address'];
    $query6='select * from artwise.user where email="'.$userEmail.'"';
    $record6=mysqli_query($connect,$query6);
    if(mysqli_num_rows($record6)){
      $query1='update artwise.user set name="'.$userName.'", contact="'.$userContact.'", address="'.$userAddress.'" where email="'.$userEmail.'"';
      $record1=mysqli_query($connect, $query1);
    }
    else{
      $query2='insert into artwise.user(name,email,contact,address) values("'.$userName.'","'.$userEmail.'","'.$userContact.'","'.$userAddress.'")';
      $record2=mysqli_query($connect,$query2);
    }
    
     // insert into purchase table
  $productId=$_GET['id'];
  $query3='select * from artwise.sell where product_id="'.$productId.'"';
  $record3=mysqli_query($connect, $query3);
  if (mysqli_num_rows($record3)){
    while($rec3=mysqli_fetch_array($record3)){
      $sellerId=$rec3['seller_id'];
    }
  }
  $query4='select * from artwise.user where email="'.$userEmail.'"';
  $record4=mysqli_query($connect, $query4);
  if (mysqli_num_rows($record4)){
    while($rec4=mysqli_fetch_array($record4)){
      $purchaserId=$rec4['id'];
    }
  }
  $query5='insert into artwise.purchase(purchaser_id,seller_id,product_id) values("'.$purchaserId.'","'.$sellerId.'","'.$productId.'")';
  $record5=mysqli_query($connect,$query5);
  if ($record5){
    $query7='update artwise.art set status="purchasing" where id="'.$productId.'"';
    $record7=mysqli_query($connect,$query7);
    if ($record7){
    echo 
    "<script>
    alert ('Your Product Will Be Delivered within 3 Working Days');
    window.location.href='index.php';
    </script>";
  }
  }
  }
?>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>