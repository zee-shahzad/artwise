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
<style>
 
/*****************globals*************/
body {
  font-family: 'open sans';
  overflow-x: hidden; 
  background-color: black;
}

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

/*# sourceMappingURL=style.css.map */
</style>
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
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <?php 
    $id=$_GET['id'];
    include "config/db.php";
    $query="select * from artwise.art where id='".$id."'";
    $record=mysqli_query ($connect, $query);
    while ($rec=mysqli_fetch_assoc($record)){
      $category=$rec['category'];
      $title=$rec['title'];
      $price=$rec['price'];
      $comment=$rec['comment'];
      $size=$rec['size'];
      $medium=$rec['medium'];
      $img=$rec['img'];
    }
  echo '<div style="margin-top: 100px;" class="container">
  <div class="card">
    <div class="container-fliud">
      <div class="wrapper row">
        <div class="preview col-md-6">
          
          <div class="preview-pic tab-content">
            <div class="tab-pane active" id="pic-1"><img style="height:450px; width:600px" src="forms/upload/'.$img.'" /></div>
          </div>
          
        </div>
        <div class="details col-md-6">
          <h3 class="product-title">'.$category.'</h3>
          <p class="product-description">'.$title.'</p>
          <h4 class="price">current price: <span style="color:#614AA2">PKR'.$price.'</span></h4>
          <h5 class="sizes">Medium:
            <span class="size" >'.$size.'</span>
          </h5>
          <h5 class="sizes">Medium:
            <span class="size" >'.$medium.'</span>
          </h5>
          <p class="product-description">'.$comment.'</p>
          <div class="action">
            <a style="background-color:#614AA2;" class="add-to-cart btn btn-default" href="checkout.php?id='.$id.'" type="button">Checkout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>';
?>
    </div>
  </div>
 
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <p>Related Arts</p>
      </div>
    </div>
    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-0">
  <?php
  $query1='select * from artwise.art where category="'.$category.'" and status in ("pending","active")';
  $record1=mysqli_query($connect,$query1);
  while($rec1=mysqli_fetch_array($record1)){
    $id=$rec1['id'];
    $img=$rec1['img'];
  echo
        '<div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="specific_item.php?id='.$id.'" class="" data-gall="gallery-item">
              <img style="width:470px; height:300px" src="forms/upload/'.$img.'" alt="" class="img-fluid">
            </a>
          </div>
        </div>';
  }
  ?>
      </div>
    </div>
  
   <!-- End Gallery Section -->
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