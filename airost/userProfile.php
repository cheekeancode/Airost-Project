<?php

include("connection.php");
session_start();
error_reporting(0);

    include("login_form.php");

    if(!isset($_SESSION["user_name"])){
        header("location: login.php");
    }

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta name="description" content="This is an online learning platform specially created for Malaysians" />
    <meta name="author" content="Khoo Kah Wai & H'ng Chee Kean" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>My Profile</title>
    <link rel="stylesheet" href="style.css" />
    <script src="user.js"></script>
    <script src="dropDownBtnScript.js"></script>
</head>
<body>
    <header>
        <a href="index.php">
            <img class="logo" src="images/MyStudyLogo2resized.png" alt="" style="width: 180px">
        </a>
        <nav>
            <ul class="nav-bar">
                <!-- <li class="nav-bar-content"><a href="index.php" class="mybutton">HOME</a></li>
                <li class="nav-bar-content"><a href="courses.php" class="mybutton">COURSE</a></li>
                <li class="nav-bar-content"><a href="aboutUs.php" class="mybutton">ABOUT US</a></li>
                <li class="nav-bar-content"><a href="contactUs.php" class="mybutton">CONTACT US</a></li> -->
            </ul>
            <div class="dropdown" id="dropDown">
                <input type="image" src="images/navIcon.png" onclick="myFunction()" class="dropbtn">
                <div id="myDropdown" class="dropdown-content">
                <a href="userProfile.php">My Profile</a>
                <a href="userProfileEdit.php">My Courses</a>
                <a href="atutorlogout.php">My Courses</a>
            </div>
        </nav>

    </header>

    <main>
        <img src="images/user.png" alt="User Profile" id="userProfileImg" />

        <div class="userProfile">
            <h1 id="userProfileTitle">My Profile</h1>
            <table class="userProfileTable">
                <tr>
                    <th class="userProfile">Name</th>
                    <th style="width:5px">:</th>
                    <td class="userProfile">Khoo Kah Wai</td>
                </tr>
                <tr>
                    <th class="userProfile">Email</th>
                    <th style="width:5px">:</th>
                    <td class="userProfile">kahwai0227@gmail.com</td>
                </tr>
                <tr>
                    <th class="userProfile">UserID</th>
                    <th style="width:5px">:</th>
                    <td class="userProfile">1234567890</td>
                </tr>
                <tr>
                    <th class="userProfile">School</th>
                    <th style="width:5px">:</th>
                    <td class="userProfile">SMK Rawang</td>
                </tr>
                <tr>
                    <th class="userProfile">Birthday</th>
                    <th style="width:5px">:</th>
                    <td class="userProfile">27/02/2000</td>
                </tr>
                <tr>
                    <th class="userProfile">HP.no</th>
                    <th style="width:5px">:</th>
                    <td class="userProfile">0123456789</td>
                </tr>
            </table>

            <div id="profileEditBtnContainer">
                <a id="profileEditBtn" href="userProfileEdit.php">Edit Profile</a>
            </div>
        </div>
       
    </main>

    <div class="clr"></div>

    <footer>
        <p class="footerContent">This Website is created by Khoo Kah Wai & H'ng Chee Kean<br />Airost Internship Programme</p>
    </footer>
</body>
</html>