<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="css/home.css">
</head>

<body>

<form action="" method="post">
   
    
    <?php
    include 'connection.php';
    $sql = "SELECT * FROM `register` WHERE id ='$_SESSION[id]'";
    $result = mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $email= $row['email'];
        $phone = $row['phone'];
        $gender = $row['gender'];
        $address = $row['address'];
        $profile = $row['profile'];


    }
    ?>
    <div class="wrapper">
        <div class="left">
            <img src="adminpanel/product_images/<?php echo $profile; ?>" alt="userimg" width="100">
            <input type="file" name="profile">
        </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                <div class="data">
                    <h4>First Name</h4>
                    <p>
                    <input type="text" name="firstname" value="<?php echo $firstname; ?>">
                </p>
                <h4>Email</h4>
                <p>
                    <input type="text" name="email" value="<?php echo $email; ?>">
                    
                </p>
                <h4>Gender</h4>
                    <p>
                    <input type="text" name="gender" value="<?php echo $gender; ?>">

                    </p>


                </div>
                <div class="data">
                    <h4>Last Name</h4>
                    <p>
                    <input type="text" name="lastname" value="<?php echo $lastname; ?>">

                    </p>
                    <h4>Phone</h4>
                    <p>
                    <input type="text" name="phone" value="<?php echo $phone; ?>">

                    </p>
                    <h4>Address</h4>
                    <p>
                        <input type="text" name="address" value="<?php echo $address; ?>">
                        
                    </p>
                </div>

            </div>
        </div>
    </div>
   <input type="submit" name="submit" value="Save" class="btnsave">
   <button class="btnback"><a href="profile.php">Back</a></button>


</div>

        </form>
        <?php
        if(isset($_POST['submit'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email= $_POST['email'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $profile = $_POST['profile'];

            $sql1 = "UPDATE register SET firstname='$firstname', lastname='$lastname', email='$email', phone='$phone', gender='$gender', address='$address', profile='$profile' WHERE id='".$_SESSION['id']."'; ";
            if(mysqli_query($con,$sql1)){
                ?>
                   <script> 
                   alert("Saved Successfully");
                   </script>

                <?php
                header('location:profile.php');
            }
        }
        ?>