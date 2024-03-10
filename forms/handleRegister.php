
<?php
   if (isset($_POST['register'])) {
      include "../config/db.php";
      $name=$_POST['name'];
      $email=$_POST['email'];
      $contact=$_POST['contact'];
      $address=$_POST['address'];
      $password=$_POST['password'];
      $pass=$_POST['pass'];
      If($password===$pass){
        $query1 = 'SELECT * FROM artwise.user WHERE email = "' . $email . '"';
          $record1=mysqli_query($connect, $query1);
          if (mysqli_num_rows($record1)>0){
              echo "<script>
                alert('Emai is already Taken');
                window.location.href = 'register.php';
             </script>";

          }
          else{
            $query = "INSERT INTO artwise.user (name, email, contact, address, password) VALUES ('$name', '$email', '$contact', '$address', '$pass')";


              $record = mysqli_query($connect,$query);
              if($record>0){
                  echo '<script>
                   alert("User Added Successfully");
                   window.location.href = "login.php";
                </script>';
              }
              else{
                  echo '<script>
                   alert("Registration Failed");
                   window.location.href = "register.php";
                </script>';
              }
          }
      }
      else{
          echo '<script>
             alert("Failed Password Confirmation");
             window.location.href = "register.php";
          </script>';
      }
  }
?>