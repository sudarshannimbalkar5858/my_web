<?php
session_start();
if(isset($_POST['item'])){
    $_SESSION['item']=$_POST['item'];
    $_SESSION['price']=$_POST['price'];
}
?>
<div class="container">
<h2>Cart</h2>
Item: <?php echo $_SESSION['item']; ?><br>
Price: ₹<?php echo $_SESSION['price']; ?><br><br>
<a href="order.php">Place Order</a>
</div>
