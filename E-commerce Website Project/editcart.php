<?php
    session_start();
    $name = $_POST['name0'];
    $price = $_POST['name1'];
    $size = $_POST['name2'];
    $quantity = $_POST['name3'];
    $id = $_POST['name5'];
    $event = $_POST['event'];

    $product= array($name,$price,$size,$quantity,$id);
    
    if($event == "Update"){
            $_SESSION[$name] = $product;
    }else if($event == "Delete"){
        unset($_SESSION[$name]);
    }
    
    header('location:viewcart.php');
?>