<?php

    error_reporting(0);
    session_start();

    include("connection.php");

    if(isset($_POST['contactusbtn'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $message = $_POST['message'];

    
        $query = "insert into guest (name, email, message) values ('$name', '$email', '$message')";
        $result = mysqli_query($con, $query);
        header("contactus.html");
        if($result){
        
            echo"<script> alert('Thanks for your message !!!  We will contact you soon Remember to check your email'); window.location.href= 'contactus.html';</script>";
        } else{
        
            echo"<script> alert('Thanks for your message !!! \n We will contact you soon \n Remember to check your email'); window.location.href= 'contactus.html';</script>";
        }
        
        
        }
