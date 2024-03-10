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

  <!-- ======= Top Bar ======= -->
  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
      <h1 class="logo me-auto me-lg-0"><a href="index.php">ARTWISE.pk</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php#menu">Category</a></li>
          <li><a class="nav-link scrollto" href="index.php#events">Events</a></li>
          <li><a class="nav-link scrollto" href="index.php#chefs">Artists</a></li>
          <li><a class="nav-link scrollto" href="index.php#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
          <li style="width:30px; height: 30px;"><a class="nav-link scrollto" href="#contact"><i style="font-size: 1.2em;" class="bi bi-bag"></i></a></li>
          <li><a class="nav-link scrollto" href="forms/addArt.php">Add an Art</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <?php
  $email=$_SESSION['email'];
  include "config/db.php";
  $query='Select * from artwise.shop where email="'.$email.'"';
  $record=mysqli_query($connect,$query);
  while($rec=mysqli_fetch_assoc($record)){
    $user_id=$rec['id'];
    $profile=$rec['profile'];
    $shopName=$rec['shop'];
    $name=$rec['name'];
    $email=$rec['email'];
    $profession=$rec['profession'];
  }
  echo '<section style="margin-top: 120px; " class="h-100 gradient-custom-2">
  <div style="margin:auto; padding: auto;" class="container h-100">
    <div class="row h-100">
      <div class="col-12">
        <div class="card">
          <div class="rounded-top text-white d-flex flex-row" style="background-image: url('.'assets/img/2.jpg'.'); height:200px;">
            <div class="ms-4 mt-5px d-flex flex-column" style="width: 300px">
              <img src="forms/upload/'.$profile.'" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style=" width: 250px !important;height: 200px !important; object-fit: contain;z-index: 1;" ></div>

              <div class="" style="margin-top: 100px;">
              <h5>'.$shopName.'</h5>
              <p>'.$profession.'</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>';
?>
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <p>My Arts</p>
      </div>
    </div>
    
    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
    
      <div class="row g-0">
        <?php 
        $query1='select * from artwise.sell where seller_id="'.$user_id.'"';
        $record1=mysqli_query($connect,$query1);
        while ($rec1=mysqli_fetch_assoc($record1)){
          $pro_id=$rec1['product_id'];
          $query2='select * from artwise.art where id="'.$pro_id.'" and status in ("pending","active")';
          $record2=mysqli_query($connect,$query2);
          while($rec2=mysqli_fetch_assoc($record2)){
            $product_id=$rec2['id'];
            $img=$rec2['img'];
          echo'<div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="specific_item.php?id='.$product_id.'" class="" data-gall="gallery-item">
                <img style="width:470px; height:300px" src="forms/upload/'.$img.'" alt="" class="img-fluid">
              </a>
            </div>
          </div>';
        }
        }
        ?>
      </div>
    </div><!-- End Gallery Section -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-4 col-md-6">
              <div class="footer-info">
                <h3>Art Wise.pk</h3>
                <p>
                  Multan, Pakistan <br>
                  <strong>Phone:</strong> +923214463345<br>
                  <strong>Email:</strong> artwise.pk@gmail.com<br>
                </p>
                <div class="social-links mt-3">
                  <a href="https://www.facebook.com/profile.php?id=61553784243029&mibextid=ZbWKwL" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="https://instagram.com/artwisepk_?igshid=MTNiYzNiMzkwZA==" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="https://wa.me/qr/GUWAXYYQJBX6F1" class="linkedin"><i class="bi bi-whatsapp"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#why-us">Why Us</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> Quality Arts</li>
                <li><i class="bx bx-chevron-right"></i> 24/7 Service</li>
                <li><i class="bx bx-chevron-right"></i>Time Delivery</li>
                <li><i class="bx bx-chevron-right"></i>Free Shipping</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Artwise.pk</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
          Designed by <a href="">BootstrapMade</a>
        </div>
      </div>
    </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
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