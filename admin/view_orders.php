<?php
include '../db.php';
$resna=mysqli_query($conn,"SELECT * FROM users");
$result=mysqli_query($conn,"SELECT * FROM orders");
while($row=mysqli_fetch_assoc($result)){
    echo $row['item_name']." - ₹".$row['price']." - ".$row['status']."<br>";
}

