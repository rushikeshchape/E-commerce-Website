<?php
    session_start();
    unset($_SESSION['firstname']);
    unset($_SESSION['id']);
    ?>
    <h1>View Cart</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
    <style>
        .container{
            border:2px solid black;
            height:300px;
            width:70vw;
            padding:10px;
        }

        .input{
            height: 30px;
            border-radius:20px;
            margin:20px;
            
        }
    </style>
    <link rel="stylesheet" href="adminpanel/css/users.css">
</head>
<body>
    
<div class="header_fixed"> 
<table>
    <thead>
<tr>
<th>Srno</th>
<th>Name</th>
<th>Price</th>
<th>Size</th>
<th>Quantity</th>
<th>Total Price</th>
<th>Update</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
    <?php
    $bill=0;
    $sno =1;
        foreach($_SESSION as $products){
            $p=0;
            $q=0;
            echo "<tr>";
                echo "<td>".($sno++)."</td>";
                echo "<form action='editcart.php' method='post'>";
                foreach($products as $key => $value){
                    if($key == 3){
                        echo "<td><input type='text' name='name$key' value='".$value."' ></td>";
                        $q=$value;
                    }else if($key ==2){
                       echo "<input type='hidden' name='name$key' value='".$value."'>";
                        echo "<td>".$value."</td>";
                       
                    }else if($key == 1){
                       echo "<input type='hidden' name='name$key' value='".$value."'>";
                        echo "<td>".$value."</td>";
                        $p=$value;
                    }else if($key == 0){
                       echo "<input type='hidden' name='name$key' value='".$value."'>";
                        echo "<td>".$value."</td>";
                    }
                }
                $value1 = $value;
                $bill = $q * $p;
                echo "<td>".($bill)."</td>";
                echo "<td><input type='submit' class='cartbtnup' name='event' value='Update'></td>";
                echo "<td><input type='submit' name='event' class='cartbtndel' value='Delete'></td>";

                echo "</form>";
            echo "</tr>";

        }
        
    ?>
</tbody>
</table>
<?php
// include 'connection.php';
// $email_search = "select * from register where email = '$email' ";
// $query = mysqli_query($con,$email_search);

// $email_count = mysqli_num_rows($query);
// if($email_count){
//   $email_pass = mysqli_fetch_assoc($query);
//  $db_pass = $email_pass['cpassword'];

//  $_SESSION['firstname'] = $email_pass['firstname'];
 
//  echo $_SESSION['firstname'];
//}

?>
<button class="btncs"><a href="index.php">Continue Shopping....</a></button>

    
<form action="" method="POST">
    <div class="checkout">
            <div class="container">
            <div class="detail">
                <div>
                    <label>Name : </label><input type="text" name="name" class="input" placeholder="Name"><br>
                    <label>Phone : </label><input type="number" name="phone" class="input" placeholder="Phone"><br>
                    <label>Address : </label><input type="text" name="address" class="input" placeholder="Address"><br>

                    <input type="submit" name="submit" value="Buy" class="cartbtnbuy">


                </div>
            </div>

        </div>
    </form>
<?php

include "connection.php";

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
 

  
      $insertquery = "INSERT INTO `order`(`name`, `phone`, `address`) values('$name','$phone','$address')";
      
      $iquery = mysqli_query($con, $insertquery);
      
      if($iquery){
        ?>
        <script>
          alert("Order Placed Successfully");
          
          </script>
       
       <?php
       
         }else{
          ?>
          <script>
            alert(" Not Inserted ");
          </script>
          <?php
        }
?>
<?php
}
?>

    </div>
    </div>   
