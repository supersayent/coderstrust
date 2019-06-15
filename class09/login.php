<?php
session_start();
include 'Connection.php';
$conn = new Connection;
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $res = $conn->getAll("SELECT * FROM users WHERE username='$username' AND password='$password'",null);
    //print_r(count($res));
    if(count($res)){
        foreach ($res as $r){
            $_SESSION['logged_id'] = $r['id'];
        }
        header("location:index.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username"><br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Login"><br>
    </form>
</body>
</html>