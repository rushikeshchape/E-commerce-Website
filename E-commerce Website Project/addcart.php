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
    <title>Users</title>
    <link rel="stylesheet" href="adminpanel/css/users.css">
</head>
<body>
    
<div class="header_fixed"> 
<table>
    <thead>
<tr>

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
   
</tbody>
</table>
<?php
    include 'connection.php';

?>
<button class="btncs"><a href="index.php">Continue Shopping....</a></button>

    </div>
    

       
      
</body>
</html>
