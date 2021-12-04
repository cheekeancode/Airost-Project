<?php

session_start();

// to check the logout for tutor and admin
if(isset($_SESSION["tutor_name"])){
    unset($_SESSION["tutor_name"]);
    header("location: tutorlogin.php");
}

if(isset($_SESSION["admin_name"])){
    unset($_SESSION["admin_name"]);
    header("location: adminlogin.php");
}

if(isset($_SESSION["user_name"])){
    unset($_SESSION["user_name"]);
    header("location: login.php");
}


