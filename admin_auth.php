<?php
session_start();
require 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE email='$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $admin = mysqli_fetch_assoc($result);

    if($password === $admin['password']) {
        $_SESSION['admin'] = $admin['email'];
        header("Location:admin/dashboard.php");
        exit();
    }
}

echo "<script>alert('Invalid Admin Credentials'); window.location='pass.php';</script>";
