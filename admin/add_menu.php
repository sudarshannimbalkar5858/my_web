<?php
include '../db.php';
if(isset($_POST['add'])){
    $item=$_POST['item'];
    $price=$_POST['price'];
    mysqli_query($conn,"INSERT INTO menu VALUES(NULL,'$item','$price')");
}
?>
<form method="post">
<input type="text" name="item" placeholder="Food Name">
<input type="number" name="price" placeholder="Price">
<button name="add">Add Menu</button>
</form>
