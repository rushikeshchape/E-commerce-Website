<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>
        <div class="container" >
          <!-- sign in page -->
          <div class="form-container sign-in-container">
            <form method="POST" action="signin.php" class="form">
              <h1 class="form__title">Login</h1>
              <div class="form__input-group">
                <label for="email">E-mail: </label>
                <input type="text" class="form__input" name="email"  maxlength="200" required> 
              </div>
              <div class="form__input-group">
                <label for="pass">Password: </label>
                <input type="text" class="form__input" name="password"  maxlength="20" required> 
              </div>
              <div class="form__input-group">
                <button type="submit" name="submit" class="form__button">Submit</button>
              </div>
           </form>
          </div>
          
         <!--  create account page -->
        
          
         <div class="overlay-container">
              <div class="overlay">
                  <div class="overlay-panel overlay-left">
                      <h1>Welcome Back!</h1>
                      <p>Please login with your personal info</p>
                      <button class="ghost" id="signIn">Sign In</button>
                  </div>
                  <div class="overlay-panel overlay-right">
                      <h1>Hello, Friend!</h1>
                      <p>Enter your personal details and start journey with us</p>
                      <button class="register" id="signUp"><a href="register.php">Register</a></button>
                  </div>
              </div>
          </div>
       </div>
        
    
        
      </body>
    
</body>
</html>

<?php

include "connection.php";

if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $email_search = "select * from register where email = '$email' ";
  $query = mysqli_query($con,$email_search);

  $email_count = mysqli_num_rows($query);
  if($email_count){
    $email_pass = mysqli_fetch_assoc($query);
   $db_pass = $email_pass['cpassword'];

   $_SESSION['firstname'] = $email_pass['firstname'];
   $_SESSION['id'] = $email_pass['id'];
   

   $pass_decode = password_verify($password,$db_pass);

   if($pass_decode){
    ?>
    <script>
      alert("Login Successful");
    </script>
   
    <?php
    ?>
  <script>
    location.replace("index.php");
  </script>
    <?php

   }else{
  
     ?>
     <script>
       alert("Password Incorrect");
     </script>
    
     <?php
   }


  }else{
    ?>
    <script>
      alert("Invalid E-mail");
    </script>
   
    <?php
  }

}
?>