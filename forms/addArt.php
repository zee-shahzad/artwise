<?php
  session_start();
   if (isset($_POST['add'])){
     $email=$_SESSION['email'];
     $category=$_POST["category"];
     $title=$_POST["title"];
     $price=$_POST["price"];
     $size=$_POST["size"];
     $medium=$_POST["medium"];
     $comment=$_POST["comment"];
     $profile = basename($_FILES["profile"]["name"]);
     include "../config/db.php";
       $query1="insert into artwise.art(category,title,price,medium,comment,size,img,status) values ('".$category."','".$title."','".$price."','".$medium."','".$comment."','".$size."','".$profile."','pending')";
       $record1=mysqli_query($connect,$query1);
       if($record1){
         move_uploaded_file($_FILES["profile"]["tmp_name"], "upload/" . basename($_FILES["profile"]["name"]));
         $query2="Select * from artwise.art where id=(Select MAX(id) from artwise.art)";
         $record2=mysqli_query($connect,$query2);
         if(mysqli_num_rows($record2)>0){
           while($product=mysqli_fetch_array($record2)){
             $art_id=$product['id'];
           }
           $query3="select * from artwise.user where email='".$email."'";
           $record3=mysqli_query($connect,$query3);
           if(mysqli_num_rows($record3)>0){
             while($user=mysqli_fetch_array($record3)){
               $user_id=$user['id'];
             }
             $query4="insert into artwise.sell (seller_id,product_id) values('".$user_id."','".$art_id."')";
             $record4=mysqli_query($connect,$query4);
             if($record4>0){
                 echo "<script>
                 alert('Product has been Launched Successfully'); 
                 window.location.href='../myShop.php'; 
                 </script>";
               }
             }
           }
         }
     }
?>
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
      <div style="margin-top: 100px; margin-bottom:100px!" class="login">
         <form action="" enctype="multipart/form-data" method="post" class="login__form">
            <h1 class="login__title">Add Art</h1>

            <div class="login__content">
            <div class="login__box">
                  
                  <div class="login__box-input">
                     <select name="category" class="">
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
                     <input type="text" required name="title" class="login__input" placeholder=" ">
                     <label for="" class="login__label">Title</label>
                  </div>
               </div>
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="number" required name="price" class="login__input" placeholder=" ">
                     <label for="" class="login__label">Price</label>
                  </div>
               </div>
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="text" required name="medium" class="login__input" placeholder=" ">
                     <label for="" class="login__label">Medium</label>
                  </div>
               </div>
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="text" required name="size" class="login__input" placeholder=" ">
                     <label for="" class="login__label">Size</label>
                  </div>
               </div>
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="text" name="comment" class="login__input" placeholder=" ">
                     <label for="" class="login__label">Comment</label>
                  </div>
               </div>
              
               <div class="login__box">
                  
                  <div class="login__box-input">
                     <input type="file" required name="profile" class="login__input" placeholder=" ">
                     <label for="" class="login__label">Image</label>
                  </div>
               </div>
            </div>
            <button type="submit" name="add" class="login__button">Add Art</button>
         </form>
      </div>
      
      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
   </body>
</html>