<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/register.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<form action="" method="post" \>
  <div class="container">
    <div class="head">
    <div class="title">Registration</div>
  </div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="firstname" placeholder="Enter your firstname" required >
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lastname" placeholder="Enter your lastname" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone" placeholder="Enter your number" maxlength="10" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" name="cpassword" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="address" placeholder="Enter your Address" required>
          </div>
          <div class="input-box">
            <span class="details">Profile Photo</span>
            <input type="file" name="profile" required>
          </div>

          <!-- <input type="file" class="form-control" name="c_image" required> -->
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="male" id="dot-1">
          <input type="radio" name="gender" value="female" id="dot-2">
          
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          
          </div>
        </div>
</form>
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
        <div class="signin">
            <p>Already have an account? <a href="signin.php">Sign in</a></p>
        </div>
      </form>
    </div>
  </div>



  <?php

include "connection.php";

if(isset($_POST['submit'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];
  $profile = $_POST['profile'];
 

  $pass = password_hash($password, PASSWORD_BCRYPT);
  $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

  $emailquery = "select * from register where email= '$email' " ;
  $query = mysqli_query($con,$emailquery);

  $emailcount = mysqli_num_rows($query);

  if($emailcount>0){
    ?>
    <script>
      alert("Email already exist");
    </script>
    
   
    <?php
  }else{
    if($password === $cpassword){

      $insertquery = "insert into register(firstname, lastname, email, phone, password, cpassword, address, gender, profile) values('$firstname','$lastname','$email','$phone','$pass','$cpass','$address','$gender','$profile')";
      
      $iquery = mysqli_query($con, $insertquery);
      
      if($iquery){
        ?>
        <script>
          alert("Inserted Successfully");
        </script>
       
        <?php
         }else{
          ?>
          <script>
            alert(" Not Inserted ");
          </script>
          <?php
        }
      }

    else{
      ?>
      <script>
        alert("Password no matching");
      </script>
     
      <?php
      
    }
  }

 
  

}

 

?>
