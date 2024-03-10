<?php
   if (isset($_POST['addAdmin'])) {
      include "../config/db.php";
      $name = $_POST['name'];
      $email=$_POST['email'];
      $address=$_POST['address'];
      $contact=$_POST['contact'];
      $cnic=$_POST['cnic'];
      $password=$_POST['password'];
      $pass=$_POST['pass'];
      If($password===$pass){
          $query1='select * from artwise.admin where email="'.$email.'"';
          $record1=mysqli_query($connect, $query1);
          if (mysqli_num_rows($record1)>0){
              echo "<script>
                alert('Emai already Exists');
                window.location.href = 'add_admin.php';
             </script>";

          }
          else{
              $query="insert into artwise.admin (name,email,address,contact,cnic,password) values ('".$name."','".$email."','".$address."','".$contact."','".$cnic."','".$pass."')";
              $record = mysqli_query($connect,$query);
              if($record>0){
                  echo '<script>
                   alert("Admin Added Successfully");
                   window.location.href = "../index.php";
                </script>';
              }
              else{
                  echo '<script>
                   alert("Registration Failed");
                   window.location.href = "add_admin.php";
                </script>';
              }
          }
      }
      else{
          echo '<script>
             alert("Failed Password Confirmation");
             window.location.href = "add_admin.php";
          </script>';
      }
  }
?>