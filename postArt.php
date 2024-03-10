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
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <div style="width: 92%; margin-top:120px; margin-left:4%;margin-right:4%;">
    <table class="table table-dark table-striped">
      <thead><tr class="table-dark">
        <th style="width:100px; height:auto" class="table-dark">Category</th>
        <th style="width:100px; height:auto" class="table-dark">Title</th>
        <th style="width:100px; height:auto" class="table-dark">Price</th>
        <th style="width:100px; height:auto" class="table-dark">Medium</th>
        <th style="width:100px; height:auto" class="table-dark">Comment</th>
        <th style="width:100px; height:auto" class="table-dark">Action</th>
      </tr>
      </thead>
      <tbody class="table-light">
      <?php
include "config/db.php";
$query = "SELECT * FROM artwise.art WHERE status='pending'";
$record = mysqli_query($connect, $query);

if (mysqli_num_rows($record)>0) {
    while($rec = mysqli_fetch_array($record)){
        $productId = $rec['id'];
        $productPrice = $rec['price'];
        $productTitle = $rec['title'];
        $productComment=$rec['comment'];
        $productSize=$rec['size'];
        $productImg=$rec['img'];
        $productMedium=$rec['medium'];
        $productCategory=$rec['category'];
        echo
          '<tr class="table-light">
          <td style="width:50px; height:auto" class="table-dark">' . $productCategory . '</td>
          <td style="width:50px; height:auto" class="table-dark">' . $productTitle . '</td>
          <td style="width:50px; height:auto" class="table-dark">' . $productPrice . '</td>
          <td style="width:50px; height:auto" class="table-dark">' . $productMedium . '</td>
          <td style="width:50px; height:auto" class="table-dark">' . $productComment . '</td>
          <td style="width:50px; height:auto" class="table-dark">
          <a href="downloadImage.php?image='.$productImg.'" style="background-color: #614AA2; color:white; border-radius: 5px;padding:5px;margin:10px; height: 30px; width: 90px;">Download</a>
          <a href=".php?pId='.$productId.'" style="background-color: #614AA2; color:white; border-radius: 5px;padding:5px; height: 30px; width: 90px;">Post</a></td>
          </tr>';
          }
    }

// Close the database connection
mysqli_close($connect);
?>




      </tbody>
    </table>
  </div>
  <!-- ======= Footer ======= -->
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