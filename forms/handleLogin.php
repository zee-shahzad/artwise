<?php
   session_start();
    if (isset($_POST['login'])){
        $admin=false;
        $shop=false;
        $user=false;
        include "../config/db.php";
        $email=$_POST["email"];
        $password=$_POST["password"];
        $query1="select * from artwise.shop where email='".$email."' and password='".$password."'";
        $record1 =mysqli_query($connect,$query1);
        if(mysqli_num_rows($record1)===1){
            $user_data=mysqli_fetch_assoc($record1);
            $_SESSION['email']=$user_data["email"];
            $_SESSION['password']=$user_data["password"];
            $random=$_SESSION;
            $shop=true;
        }
        $query2="select * from artwise.user where email='".$email."' and password='".$password."'";
        $record2 =mysqli_query($connect,$query2);
        if(mysqli_num_rows($record2)===1){
            $user_data=mysqli_fetch_assoc($record2);
            $_SESSION['email']=$user_data["email"];
            $_SESSION['password']=$user_data["password"];
            $random=$_SESSION;
            $user=true;
        }
        $query3="select * from artwise.admin where email='".$email."' and password='".$password."'";
        $record3 =mysqli_query($connect,$query3);
        if(mysqli_num_rows($record3)===1){
            $user_data=mysqli_fetch_assoc($record3);
            $_SESSION['email']=$user_data["email"];
            $_SESSION['password']=$user_data["password"];
            $random=$_SESSION;
            $admin=true;
        }
        if ($user === true && $shop === true && $admin === true) {
            header('Location: ../index.php?accStatus=admin_shop');
        }
        else if($user===true && $shop===true && $admin===false){
            header('Location: ../index.php?accStatus=shop'); 
        }
        else if($user===true && $shop===false && $admin===true){
            header('Location: ../index.php?accStatus=admin_user');
        }
        else if($user===true && $shop===false && $admin===false){
            header('Location: ../index.php?accStatus=user');
        }
        else if($user===false && $shop===false && $admin===true){
            header('Location: ../index.php?accStatus=admin');
        }
        else {
            echo"<script>
            alert('Invalid Email or Password');
            window.location.href='login.php';
            </script>"; 
        }
        exit();
    }
?>