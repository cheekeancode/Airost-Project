<?php

session_start();
error_reporting(0);

    include("connection.php");
    include("login_form.php");

    if(!isset($_SESSION["user_name"])){
        header("location: login.html");
    }

    echo $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is User Page</h1>
    
    <h1 style="background-color: orange; padding:20px 30px;">Hi <?=$_SESSION['user_name'] ?></h1>

    <a href="login.html" style="font-size:20px;">log out</a>
</body>
</html>