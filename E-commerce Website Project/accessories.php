
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessories</title>
    <link rel="stylesheet" href="css\home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
    include 'include/navbar.php';
    ?>
    <div class="accessories-title">
        <h1>Accessories</h1>
        </div>
        <div class="shoes-collection-container">
        <div class="product-container">
    <?php
    
    include "connection.php";
  
    $query = "SELECT * FROM `acc-collection` ORDER BY id ASC";
    $result = mysqli_query($con,$query);
    while($product = mysqli_fetch_array($result)) {  
        $id=$product['id'];
        $name=$product['name'];
    
?>   


        <div class="product">
            <div class="card">
                <img src="adminpanel/product_images/<?php echo $product['image1']; ?>" name="image" class="productimg" alt="productimage"
                    style="width:100%">
                <h3 name="brand">
                    <?php echo $product['brand']; ?>
                </h3>
                <h4 name="name">
                    <?php echo $product['name']; ?>
                </h4>
                <p class="price" name="price">Rs
                    <?php echo $product['price']; ?>
                </p>
                <!-- <p><button class="addtocart">Add to Cart</button></p> -->
            <p><a href="pro_detailacc.php?id=<?php echo $product['id']; ?>"><button class="addtocart">View Details</button></a></p>

            </div>
        </div>


        <?php
   
}
?>

</div>
<?php
   include 'include/footer.php';
   ?>
</body>
</html>