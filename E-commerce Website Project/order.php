<?php
$id=$_GET['id'];
echo $id;

include('connection.php');

$id=$_GET['id'];
$query = " SELECT * FROM `acc-collection` WHERE id='$id' ";
$result = mysqli_query($con,$query);
while($product = mysqli_fetch_array($result)) {  


    echo $product['name']; 
    echo $product['price']; 
    

    
}  
?>