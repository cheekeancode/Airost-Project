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

    <title>MY Courses</title>
    <link rel="stylesheet" href="style.css" />
    <script src="user.js"></script>
    <script src="dropDownBtnScript.js"></script>
    <script>
        var login = false;
    </script>
</head>
<body>
    <header>
        <a href="#">
            <img class="logo" src="images/MyStudyLogo2resized.png" alt="" style="width: 180px">
        </a>
        <nav>
            <ul>
                <!-- <li class="nav-bar-content"><a href="index.php" class="mybutton">HOME</a></li>
                <li class="nav-bar-content"><a href="courses.php" class="mybutton">COURSE</a></li>
                <li class="nav-bar-content"><a href="aboutUs.php" class="mybutton">ABOUT US</a></li>
                <li class="nav-bar-content"><a href="contactUs.php" class="mybutton">CONTACT US</a></li> -->
                <li class="nav-bar-content"><a href="#" class="mybutton" id="guest-nav" onclick="user()">click me</a></li>
            </ul>
            <div class="dropdown" id="dropDown">

            </div>
        </nav>

    </header>

    <main>
        <h1>My Courses</h1>

        <a target="_blank" class="courseBtn" href="courseDetails.php">
            <div class="coursesContainer">
                <div class="thumbnailContainer">
                    <img src="images/gallery.png" class="courseThumbnail" />
                </div>
                <div class="courseInfo">
                    <h1 class="courseName">Course Name</h1>
                    <p class="courseIntro">Course intro</p>
                </div>
            </div>
        </a>        
        
        <a target="_blank" class="courseBtn" href="courseDetails.php">
            <div class="coursesContainer">
                <div class="thumbnailContainer">
                    <img src="images/gallery.png" class="courseThumbnail" />
                </div>
                <div class="courseInfo">
                    <h1 class="courseName">Course Name</h1>
                    <p class="courseIntro">Course intro</p>
                </div>
            </div>
        </a>

        <div class="clr"></div>

    </main>
    <br />
    <footer>
        <p class="footerContent">This Website is created by Khoo Kah Wai & H'ng Chee Kean<br />Airost Internship Programme</p>
    </footer>
</body>
</html>