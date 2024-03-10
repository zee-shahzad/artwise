<?php
    $productId=$_GET['pId'];
    include "config/db.php";
    $query = 'UPDATE artwise.art SET status="purchased" WHERE id="' . $productId . '"';
    $record7 = mysqli_query($connect, $query);

    if ($record7) {
        header('location: orders.php');
    }
    
?>