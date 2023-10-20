<?php
session_start();

if(isset($_POST['addtocart'])){
    if(isset($_SESSION['cart'])){
        $session_array_id = array_column($_SESSION['cart'],"id");

        if(!in_array($_GET['id'], $session_array_id)){
            $session_array = array(
                $name = $_POST['name'],
                $price = $_POST['price'],
                $size = $_POST['size'],
                $quantity = $_POST['qty'],
                $id = $_POST['id']
            );
        }

    }else{
        $session_array = array(
            'id' => $_GET['id'],
            "name" => $_POST['name'],
            "size" => $_POST['size'],
            "price" => $_POST['price'],
            "qty" => $_POST['qty']


        );
        $_SESSION['cart'][] = $session_array;
    }
}


?>
<link rel="stylesheet" href="adminpanel/css/users.css">

<div class="header_fixed"> 
<?php
    $output = "";
    $output .= "

    <table>
    <thead>
<tr>
<th>id</th>
<th>Name</th>
<th>Size</th>
<th>Quantity</th>
<th>Price</th>
<th>Total Price</th>
<th>Action</th>

</tr>
</thead>

    ";
    if(!empty($_SESSION['cart'])){

        foreach($_SESSION['cart'] as $key => $value){
            $output .= "
          <tbody> 
            <tr>
                <td>".$value['id'];"</td>
                <td>".$value['name'];"</td>
                <td>".$value['size'];"</td>
                <td>".$value['qty'];"</td>
                <td>".$value['price'];"</td>
                <td>Rs".number_format($value['price'] * $value['qty'])."</td>
                <td>
                    <a href='managecart.php?action=remove&id=".$value['id']."'>
                    <button>Remove</button>
                    </a>
                    </td>
</tbody>
</table>

            ";
        }
    }
?>
</div>