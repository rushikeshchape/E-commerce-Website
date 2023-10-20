<?php

$con = mysqli_connect("localhost","root","","ecommerce");

if($con){
  
    ?>
    <script>
        // alert('connection successful')
    </script>
    <?php
}else{
    ?>
    <script>
        alert('connection not  successful')
    </script>
    <?php
   
}
?>
