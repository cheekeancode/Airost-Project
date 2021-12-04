<?php

include("connection.php");
session_start();


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
        <a href="#">
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
                    <a href="userCourses.php">My Courses</a>
                    <a href="atutorlogout.php">Log Out</a>
                </div>
            </div>
        </nav>

    </header>

    <main>
        <div id="editProfileImg">
            <a href="editProfileImg.php">
                <img src="images/user.png" alt="User Profile" id="editUserProfileImg" />
                <div id="profileImgEditBtn"><img src="images/edit.png" alt="Edit btn" style="width:50px; padding:20px" /></div>
            </a>
        </div>

        <div class="userProfile">
            <h1 id="userProfileTitle">My Profile</h1>
            <form action="userProfile.php" method="post">
                <label for="newName">Name:</label>
                <input type="text" name="newName" />
                <label for="newEmail">Email:</label>
                <input type="text" name="newEmail" />
                <label for="newSchool">School:</label>
                <input type="text" name="newSchool" />
                <label for="newBirthday">Birthday:</label>
                <input type="date" name="newBirthday" />
                <label for="newHp">HP.no:</label>
                <input type="text" name="newHp" />
                <input type="submit" name="submitBtn" value="Save" />
            </form>

        </div>

    </main>

    <div class="clr"></div>

    <footer>
        <p class="footerContent">This Website is created by Khoo Kah Wai & H'ng Chee Kean<br />Airost Internship Programme</p>
    </footer>
</body>
</html>
