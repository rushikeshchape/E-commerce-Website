<?php
    include 'connection.php';
    session_start();
    
    $name = $_POST['name'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $quantity = $_POST['qty'];
    $id = $_POST['id'];    
    
    $product= array($name,$price,$size,$quantity,$id);
    // print_r($product);

    $_SESSION[$name] = $product;
    header('location:viewcart.php');
?>