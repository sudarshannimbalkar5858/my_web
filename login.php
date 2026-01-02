<?php
session_start();
include 'db.php';
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $q=mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password'");
    if(mysqli_num_rows($q)>0){
        $_SESSION['user']=$email;
        header("Location: menu.php");
    }else{
        header("Location: register.php");
        
    }
}
?>


<form method="post" class="container">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>
</form>
    