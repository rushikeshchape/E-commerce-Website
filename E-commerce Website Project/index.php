<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>

    <link rel="stylesheet" href="css\home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel=" icon" href="g18bulk.png" type="image/x-icon">
</head>

<body>
    <?php
    include 'include/navbar.php';
    ?>
    <div class="headbar">
        <h1>Welcome 
        </h1>
        <div class="logoutbtn">
           <a href="logout.php"> <button>Logout</button></a>
        </div>
    </div>
    <!-- Slider -->
    <div class="banner">



       <a href="men.php"><img src="adminpanel/product_images/banner.jpg" style="width:100%"></a>
    </div>

    <div class="featurehead">
        <h2>Featured Product</h2>
    </div>

    <div class="product-container">
    <?php
    include "connection.php";
  
    $query = "SELECT * FROM featureproduct ORDER BY id ASC";
    $result = mysqli_query($con,$query);
    while($product = mysqli_fetch_array($result)) {  
        $id=$product['id'];
    
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
            <p><a href="pro_detailfeature.php?id=<?php echo $product['id']; ?>"><button class="addtocart">View Details</button></a></p>

            </div>
        </div>


        <?php
   
}
?>

    </div>


    <div class="collectionhead">
        <h2>Awesome Collection</h2>
    </div>
    <section class="collection-container">
        
            <a href="men.php" class="collection"><img src="adminpanel/product_images/men-collection.png" alt="men-collection">
                <p class="collection-title">Men-Collections</p>
            </a>
            <a href="women.php" class="collection"><img src="adminpanel/product_images/women-collection.png" alt="women-collection"><p class="collection-title">Women-Collections</p></a>

            <a href="accessories.php" class="collection"><img src="adminpanel/product_images/accessories-collection.png" alt="accessories-img"><p class="collection-title">Accessories</p></a>
        
    </section>
   <?php
   include 'include/footer.php';
   ?>
</body>

</html>