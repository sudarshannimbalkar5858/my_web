
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome Admin 👑</h1>
    <p>Email: <?php echo $_SESSION['admin']; ?></p>
    <a href="add_menu.php">Add Menu</a><br>
    <a href="view_orders.php">View Orders</a>
    <a href="/login.php">Logout</a>
</body>
</html>

<h2>Admin Dashboard</h2>
