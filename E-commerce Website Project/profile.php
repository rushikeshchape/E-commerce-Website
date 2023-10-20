<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
         <div class="wrapper">
        
<?php
include 'connection.php';
    
    $q = mysqli_query($con,"SELECT * FROM register WHERE id='$_SESSION[id]' ;");
    $row = mysqli_fetch_assoc($q);
?>

        <div class="left">
            <img src="adminpanel/product_images/<?php echo $row['profile']; ?>" alt="userimg" width="100"  >
            <h4><?php echo $row['firstname']; echo $row['lastname']; ?></h4>
            

        </div>
        <div class="right">
            <div class="info">
                <form action="" method="post">
                <input type="submit" class="btnedit" name="submit" value="Edit">
                <button class="btnhome"><a href="index.php">Home</a></button>

</form>
<?php
if(isset($_POST['submit'])){
    header('location:editpro.php');
}
?>
                <h3>Information</h3>
                <div class="info_data">
                    <div class="data">
                        <h4>First Name</h4>
                        <p><?php echo $row['firstname']; ?></p>
                        <h4>Email</h4>
                        <p><?php echo $row['email'] ; ?></p>
                        <h4>Gender</h4>
                        <p><?php echo $row['gender'] ; ?></p>
                        

                    </div>
                    <div class="data">
                        <h4>Last Name</h4>
                        <p><?php echo $row['lastname'] ; ?></p>
                        <h4>Phone</h4>
                        <p><?php echo $row['phone'] ; ?></p>
                        <h4>Address</h4>
                        <p><?php echo $row['address'] ; ?></p>
                    </div>
                </div>
            </div>

 
            <!-- <div class="projects">
                <h3>Projects</h3>
                <div class="projects_data">
                    <div class="data">
                        <h4>Recent</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia exercitationem optio accusantium accusamus libero aliquid natus tempore. Quis a voluptate neque facilis fugit, ipsa omnis ad rem, suscipit obcaecati non?</p>
                    </div>
                    <div class="data">
                        <h4>Moses view</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, dicta.</p>
                    </div>
                </div>
            </div> --> 
            
        </div>
     
    </div>
          
    

   
   
</body>

</html>
