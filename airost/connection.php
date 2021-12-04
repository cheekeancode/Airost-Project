<?php

$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";
$dbname= "register_form";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    // die("falied to connect!");
} else{
    // echo("connected succusfully");
}

$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

?>






