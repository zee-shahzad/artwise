<?php
    $connect=mysqli_connect('localhost','root', '','artwise');
    if(mysqli_connect_errno()>0){
        echo mysqli_connect_err();
    }
?>