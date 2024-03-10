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
          <li id="openShop"><a class="nav-link scrollto" href="forms/openShop.php">Open a Shop</a></li>
          <li id="myShop"><a class="nav-link scrollto" href="myShop.php">My Shop</a></li>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Category</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Artists</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li style="width:30px;margin-left:20px;margin-right:20px; height: 30px;"><a class="nav-link scrollto" href="#gallery"><i style="font-size: 1.2em;" class="bi bi-bag"></i></a></li>
          <li id="admin" class="dropdown"><a href="#"><span style="margin:20px">Admin</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="forms/add_admin.php">Add New Admin</a></li>
              <li><a href="users_data.php">Add Shop</a></li>
              <li><a href="postArt.php">Add Art</a></li>
              <li><a href="orders.php">Orders</a></li>
              <li><a href="post_art.php">Update Password</a></li>
            </ul>
          </li>
        </ul> 
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <?php
  
   if(empty($_SESSION)){
    echo "<script>
    var div = document.getElementById('admin');
    div.style.display = 'none';
    var div1 = document.getElementById('myShop');
    div1.style.display = 'none';
    </script>";
   }
   else{
    if (!empty($_GET['accStatus'])){
    $accStatus=$_GET['accStatus'];
    if($accStatus==='shop'){
      echo "<script>
      var div = document.getElementById('admin');
      div.style.display = 'none';
      var div1 = document.getElementById('openShop');
      div1.style.display = 'none';
      </script>";
    }
    else if($accStatus==='admin_shop'){
      echo "<script>
      var div = document.getElementById('openShop');
      div.style.display = 'none';
      </script>";
    }
    else if($accStatus==='admin_user'){
      echo "<script>
      var div = document.getElementById('myShop');
      div.style.display = 'none';
      </script>";
    }
    else if($accStatus==='user'){
      echo "<script>
      var div = document.getElementById('myShop');
      div.style.display = 'none';
      var div1 = document.getElementById('admin');
      div1.style.display = 'none';
      </script>";
    }
    else if($accStatus==='admin'){
      echo "<script>
      var div = document.getElementById('myShop');
      div.style.display = 'none';
      </script>";
    }}
    else{
      echo "<script>
      var div = document.getElementById('myShop');
      div.style.display = 'none';
      var div1 = document.getElementById('admin');
      div1.style.display = 'none';
      </script>";
    }

   }
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>A World of <span>Wise Artists</span></h1>
          <h2>Explore the Beauty that the World of Art has to Offer</h2>

          <div class="btns">
            <a href="forms/login.php" class="btn-menu animated fadeInUp scrollto">Login</a>
            <a href="forms/register.php" class="btn-book animated fadeInUp scrollto">Register</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
   
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/32.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Welcome to ARTWISE.PK</h3>
            <p class="fst-italic">
            At ARTWISE.PK we believe in the transformative power of art. Our platform is a celebration of creativity, a space where art enthusiasts, collectors, and creators are appreciated.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> We are committed to supporting artists by providing a platform to showcase their work.</li>
              <li><i class="bi bi-check-circle"></i>Every piece on our platform is carefully curated to ensure a diverse and high-quality collection.</li>
              <li><i class="bi bi-check-circle"></i>ARTWISE.PK is more than just a marketplace. It's a community where art enthusiasts can engage in discussions, discover new artists, and share their love for creativity.</li>
            </ul>
            <p>
            Our mission is to make art accessible to everyone and to support artists in their journey. We aim to create a platform that not only connects art lovers with extraordinary pieces but also provides a space for emerging and established artists to thrive.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Our Services</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Free Shipping</h4>
              <p>With our commitment to customer satisfaction, we've made it easier than ever for you to indulge in the joy of shopping.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>24/7 Customer Service</h4>
              <p>Our dedicated customer service team is available 24 hours a day, 7 days a week.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4>High Quality Arts</h4>
              <p>Every creation tells a story of mastery and inspiration. Immerse yourself in a world of charm and with our commitment.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Check Our Art Categories</p>
        </div>
        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/17.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="specificCategory.php?category=Drawing">Drawing</a>
            </div>
            <div class="menu-ingredients">
              Life is the art of drawing without any eraser 
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/3.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="specificCategory.php?category=Painting">Painting</a>
            </div>
            <div class="menu-ingredients">
              We dream of painting and then we paint our dream
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/11.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="specificCategory.php?category=Sculpture">Sculpture</a>
            </div>
            <div class="menu-ingredients">
              Stone carving is easy, it's the stone that is hard
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/24.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="specificCategory.php?category=Ceramics">Ceramics</a>
            </div>
            <div class="menu-ingredients">
              Turn, turm my wheel!
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/41.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="specificCategory.php?category=Blue Pottery">Blue Pottery</a>
            </div>
            <div class="menu-ingredients">
              Happiness is making your first pot in a pottery wheel
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/8.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="specificCategory.php?category=Digital Art">Digital Arts</a>
            </div>
            <div class="menu-ingredients">
              Digital art is where the future lies
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/40.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="specificCategory.php?category=Resin Art">Resin Arts</a>
            </div>
            <div class="menu-ingredients">
              In resin art, every pour has a story
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/10.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="specificCategory.php?category=Textile Design">Textile Design</a>
            </div>
            <div class="menu-ingredients">
              The act of sewing is a process of emotional repair
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/42.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="specificCategory.php?category=Photography">Photography</a>
            </div>
            <div class="menu-ingredients">
              A picture is a poem without words
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/6.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="specificCategory.php?category=Craft Design">Craft Design</a>
            </div>
            <div class="menu-ingredients">
              Craft Makes our homes more human
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/43.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="specificCategory.php?category=Print Making">Print Making</a>
            </div>
            <div class="menu-ingredients">
              It's fun to print it in CMYK 
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

   

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <!-- <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt=""> -->
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <p>Gallery</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">
          <?php
           include "config/db.php";
           $queryArt="SELECT * FROM artwise.art WHERE status IN ('pending', 'active')";
           $recordArt=mysqli_query($connect,$queryArt);
           if(mysqli_num_rows($recordArt)>0){
             for ($i = 0; $i < 4; $i++){
               $record_Art=mysqli_fetch_assoc($recordArt);
               $id=$record_Art['id'];
               $img=$record_Art['img'];
          echo 
          '<div class="col-lg-3 col-md-4">  
            <div class="gallery-item">
              <a href="specific_item.php?id='.$id.'" class="" data-gall="gallery-item">
                <img style="width:470px; height:300px" src="forms/upload/'.$img.'" alt="" class="img-fluid">
              </a>
            </div>
          </div>';
             }
           }
          ?>
          <div class="text-center"><button style="margin: 20px; background-color: #614AA2; color:white; border-radius: 30px; height: 50px; width: 150px;" onclick="art()" type="submit">See More</button></div>
      
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Artist Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Artists</h2>
          <p>Our Proffesional Artists</p>
        </div>

        <div class="row">
          <?php

          include "config/db.php";
          $querychef="SELECT * FROM artwise.shop WHERE status IN ('pending', 'active')";
          $recordchef=mysqli_query($connect,$querychef);
          if(mysqli_num_rows($recordchef)>0){
            for ($i = 0; $i < 3; $i++){
              $record_chef=mysqli_fetch_assoc($recordchef);
              $id=$record_chef['id'];
              $img=$record_chef['profile'];
              $shopName=$record_chef['shop'];
              $profession=$record_chef['profession'];
          print_r( '<div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img style="width:470px; height:300px" src="forms/upload/'.$img.'" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <a href="specificShop.php?id='.$id.'"><h4>'.$shopName.'</h4></a>
                  <span>'.$profession.'</span>
                </div>
              </div>
            </div>
          </div>');
        }
      }
          ?>
        </div>
        
        <div class="text-center"><button onclick="chefs()" style="background-color: #614AA2; color:white; border-radius: 30px; height: 50px; width: 150px;" type="submit">See More</button></div>
      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>
      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>362, Quaid-e-Azam Block, MDA Officers Corporative Housing Society, Jinnah Road Multan</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  9:00 AM - 5:00 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p style="color:#bab3a6 !important"> <a href="mailto:artwise.pk@gmail.com">artwise.pk@gmail.com</a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+923214463345</p>
                <p>+923320644118</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    <!-- review section   -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Review</h2>
          <p>Review us</p>
        </div>
      </div>
      <div class="container" data-aos="fade-up">
          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End review Section -->

  </main><!-- End #main -->

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
  <script>
    function chefs(){
      window.location.href="allArtists.php";
    }
    function art(){
      window.location.href="all_items.php";
    }

  </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>