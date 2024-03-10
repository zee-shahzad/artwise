<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css">

      <title>Animated login form - Bedimcode</title>
   </head>
   <body background="assets/img/login.jpg">
      <div style="margin-top: 100px; margin-bottom:100px!; margin-right:50px!" class="login">
         <form style="margin-right:50px!" action="handleOpenShop.php" enctype="multipart/form-data"  method="post" class="login__form">
            <h1 class="login__title">Open Shop</h1>

            <div class="login__content">
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="text" required name="name" class="login__input" placeholder=" ">
                     <label for="" class="login__label">Full Name</label>
                  </div>
               </div>
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="text" required name="shop" class="login__input" placeholder=" ">
                     <label for="" class="login__label">Shop Name</label>
                  </div>
               </div>
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="email" required name="email" class="login__input" placeholder=" ">
                     <label for="" class="login__label">Email</label>
                  </div>
               </div>
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="text" required name="address" class="login__input" placeholder=" ">
                     <label for="" class="login__label">Address</label>
                  </div>
               </div>
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="text" required name="contact" class="login__input" placeholder=" ">
                     <label for="" class="login__label">Contact</label>
                  </div>
               </div>
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <select name="profession" class="">
                        <option value=""><h3>--Select Category--</h3></option>
                        <option value="Drawing">Drawing</option>
                        <option value="Painting">Painting</option>
                        <option value="Sculpture">Sculpture</option>
                        <option value="Ceramics">Ceramics</option>
                        <option value="Blue Pottery">Blue Pottery</option>
                        <option value="Digital Art">Digital Arts</option>
                        <option value="Resin Art">Resin Art</option>
                        <option value="Textile Design">Textile Design</option>
                        <option value="Photography">Photography</option>
                        <option value="Craft Design">Craft Design</option>
                        <option value="Print Making">Print Making</option>
                     </select>
                     <!-- <label for="" class="login__label">Profession</label> -->
                  </div>
               </div>
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="file" required name="profile" class="login__input" placeholder=" ">
                     <label for="" class="login__label">Profile</label>
                  </div>
               </div>
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="text" required name="bank" class="login__input" placeholder=" ">
                     <label for="" class="login__label">Bank</label>
                  </div>
               </div>
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="text" required name="account" class="login__input" placeholder=" ">
                     <label for="" class="login__label">Account no</label>
                  </div>
               </div>

               <div class="login__box">
                 

                  <div class="login__box-input">
                     <input type="password" required name="password" class="login__input" id="login-pass" placeholder=" ">
                     <label for="" class="login__label">Password</label>
                     <div style="width: 320px;"></div>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>
               <div class="login__box">
                 

                  <div class="login__box-input">
                     <input type="password" required name="pass" class="login__input" id="login-pass" placeholder=" ">
                     <label for="" class="login__label">Confirm Password</label>
                     <div style="width: 320px;"></div>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>
            </div>
            <button type="submit" name="openShop" class="login__button">Open Shop</button>

            <p class="login__register">
               Already have a Shop?   <a href="login.php">login</a>
            </p>
         </form>
      </div>
      
      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
   </body>
</html>