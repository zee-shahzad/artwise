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
      <div style="margin-top: 100px; margin-bottom:100px!; margin-right:50px" class="login">
         <form action="handleAddAdmin.php" method='post' class="login__form">
            <h1 class="login__title">Add New Admin</h1>

            <div class="login__content">
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="text" required name='name' class="login__input" placeholder=" ">
                     <label for="" class="login__label">Full Name</label>
                  </div>
               </div>
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="email" required name='email' class="login__input" placeholder=" ">
                     <label for="" class="login__label">Email</label>
                  </div>
               </div>
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="text" required name='address' class="login__input" placeholder=" ">
                     <label for="" class="login__label">Address</label>
                  </div>
               </div>
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="text" required name='contact' class="login__input" placeholder=" ">
                     <label for="" class="login__label">Contact</label>
                  </div>
               </div>
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="text" required name='cnic' class="login__input" placeholder=" ">
                     <label for="" class="login__label">CNIC</label>
                  </div>
               </div>
              

               <div class="login__box">
                 

                  <div class="login__box-input">
                     <input type="password" required name='password' class="login__input" id="login-pass" placeholder=" ">
                     <label for="" class="login__label">Password</label>
                     <div style="width: 320px;"></div>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>
               <div class="login__box">
                 

                  <div class="login__box-input">
                     <input type="password" required name='pass' class="login__input" id="login-pass" placeholder=" ">
                     <label for="" class="login__label">Confirm Password</label>
                     <div style="width: 320px;"></div>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>
            </div>
            <button type="submit" name='addAdmin' class="login__button">Add Admin</button>
         </form>
      </div>
      
      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
   </body>
</html>