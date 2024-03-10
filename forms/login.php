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
   <body background="assets/img/login.png">
      <div class="login">
         <form action="handleLogin.php" method="post" class="login__form">
            <h1 class="login__title">LOGIN</h1>

            <div class="login__content">
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="email" required name="email" class="login__input" placeholder=" ">
                     <label for="" class="login__label">Email</label>
                  </div>
               </div>
               <div class="login__box">
                  <div class="login__box-input">
                     <input type="password" name="password" required class="login__input" id="login-pass" placeholder=" ">
                     <label for="" class="login__label">Password</label>
                     <div style="width: 320px;"></div>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>
            </div>
            <button type="submit" name="login" class="login__button">Login</button>

            <p class="login__register">
               Don't have an account? <a href="register.php">Register</a>
            </p>
         </form>
      </div>
      
      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
   </body>
</html>