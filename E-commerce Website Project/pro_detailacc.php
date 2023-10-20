<!-- <?php
// session_start();
// if(!isset($_SESSION['firstname'])){
//         //  echo "you are logout";
// header('location: signin.php');
// }
?> -->

<link rel="stylesheet" href="css/home.css">    
<div class="small-container single-product">
    <script src="jquery-3.5.1.js"></script>
    
    <?php
    include('connection.php');
    
    $id=$_GET['id'];
    $query = " SELECT * FROM `acc-collection` WHERE id='$id' ";
    $result = mysqli_query($con,$query);
    while($product = mysqli_fetch_array($result)) {  
    
?>
<form action="insertcart.php" method="post">
    <div class="row">
        <div class="col-2">
            <img name="image1" src="adminpanel/product_images/<?php echo $product['image1']; ?>" name="image" width="100%" id="ProductImg" alt="productimg">
            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="adminpanel/product_images/<?php echo $product['image1']; ?>"  width="100%" class="small-img" alt="productimg">
                </div>
                <div class="small-img-col">
                    <img src="adminpanel/product_images/<?php echo $product['image2']; ?>" width="100%" class="small-img" alt="productimg">
                </div>
                <div class="small-img-col">
                    <img src="adminpanel/product_images/<?php echo $product['image3']; ?>" width="100%" class="small-img" alt="productimg">
                </div>
                <div class="small-img-col">
                    <img src="adminpanel/product_images/<?php echo $product['image4']; ?>" width="100%" class="small-img" alt="productimg">
                </div>

            </div>
        </div>
        
        <div class="col-2">
            <input type="text" value="<?php echo $product['prodtype']; ?>" name="prodtype" readonly >
            <input type="hidden" value="<?php echo $product['id']; ?>" name="id" readonly >

            <h1><input type="text" value="<?php echo $product['name']; ?>" name="name" readonly >
</h1>                
            <h4><input type="text" value="<?php echo $product['price']; ?>" name="price" readonly ></h4>
            <select name="size" >
                <option value="0">Select Size</option>
                <option>XXL</option>
                <option>XL</option>
                <option>L</option>
                <option>M</option>
                <option>S</option>

            </select>
           <input type="number" name="qty" placeholder="Qty" required>
           
           <!-- <a class="btn"  href="cart.php?name=<?php echo $product['name']; ?>  ">Add to Cart</a> -->
            <!-- <input type="submit" class="btn" value="Add to Cart"> -->
            <a href="insertcart.php?id=<?php echo $product['id']; ?>"><button class="btn">Add to cart</button></a>

            <h3>Product Details</h3>
            <br>
            <p><?php echo $product['description']; ?></p>
        </div>

    </div>
    <?php
                }
            
       ?>

</div>
</form>
<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");

    SmallImg[0].onclick = function () {
        ProductImg.src = SmallImg[0].src;
    }
    SmallImg[1].onclick = function () {
        ProductImg.src = SmallImg[1].src;
    }
    SmallImg[2].onclick = function () {
        ProductImg.src = SmallImg[2].src;
    }
    SmallImg[3].onclick = function () {
        ProductImg.src = SmallImg[3].src;
    }
</script>
