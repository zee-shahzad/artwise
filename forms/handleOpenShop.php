
<?php
   if (isset($_POST['openShop'])) {
      include "../config/db.php";
      $name=$_POST["name"];
      $shop=$_POST["shop"];
      $email=$_POST["email"];
      $address=$_POST["address"];
      $contact=$_POST["contact"];
      $profession=$_POST["profession"];
      $profile = basename($_FILES["profile"]["name"]);
      //$image=$_POST['profile'];
      //$profile=basename($image);
      $bank=$_POST["bank"];
      $account=$_POST["account"];
      $password=$_POST["password"];
      $pass=$_POST["pass"];
      if($password===$pass){
          $query1='select * from artwise.shop where email="'.$email.'"';
          $record1=mysqli_query($connect, $query1);
          if (mysqli_num_rows($record1)>0){

              echo "<script>
                alert('Email already Exists');
                window.location.href = 'openShop.php';
             </script>";

          }
          else{
            $query2 = 'select * from artwise.user where email="'.$email.'"';
            $record2 = mysqli_query($connect,$query2);
            if(mysqli_num_rows ($record2)>0){
                $query3= "INSERT INTO artwise.shop (name,shop, email, contact, address,profession,profile,bank,acc, password,status) VALUES ('$name','$shop', '$email', '$contact', '$address','$profession','$profile','$bank','$account', '$pass','pending')";
                $record3=mysqli_query($connect,$query3);
                if ($record3>0){
                    move_uploaded_file($_FILES["profile"]["tmp_name"], "upload/" . basename($_FILES["profile"]["name"]));
                }
                $query6 = "UPDATE artwise.user SET name='$name', email='$email', contact='$contact', address='$address', password='$password' WHERE email='$email'";

                $record6=mysqli_query($connect,$query6);
                if($record6){
                    print_r("<script>
                    alert ('Added Successfully');
                    window.location.href='login.php';
                    </script>"); 
                }
              }
              else{
                $query4= "INSERT INTO artwise.shop (name,shop, email, contact, address,profession,profile,bank,acc, password,status) VALUES ('$name','$shop', '$email', '$contact', '$address','$profession','$profile','$bank','$account', '$pass','pending')";
                $record4=mysqli_query($connect,$query4);
                if ($record4>0){
                    move_uploaded_file($_FILES["profile"]["tmp_name"], "upload/" . basename($_FILES["profile"]["name"]));

                }
                $query5 = "INSERT INTO artwise.user (name, email, contact, address, password) VALUES ('$name', '$email', '$contact', '$address', '$pass')";
                $record5 = mysqli_query($connect,$query5);
                if($record5>0){
                    print_r("<script>
                    alert ('Shop Added Successfully');
                    window.location.href='login.php';
                    </script>");
                }
                else{
                    print_r("<script>
                    alert ('Shop could not be Added');
                    window.location.href='openShop.php';
                    </script>");
                }
              }
          }
      }
      else{
          echo '<script>
             alert("Failed Password Confirmation");
             window.location.href = "openShop.php";
          </script>';
      }
  }
?>