<?php 
    include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta name="description" content="This is an online learning platform specially created for Malaysians" />
    <meta name="author" content="Khoo Kah Wai & H'ng Chee Kean" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>CourseName</title>
    <link rel="stylesheet" href="style.css" />
    <script src="user.js"></script>
    <script src="dropDownBtnScript.js"></script>
    <script>
        var login = false;
    </script>
</head>

<body>
    <header>
        <a href="./index.html">
            <img class="logo" src="images/MyStudyLogo2resized.png" alt="" style="width: 180px">
        </a>

        <nav>
            <ul>
                <li class="nav-bar-content"><a href="index.php" class="mybutton">HOME</a></li>
                <li class="nav-bar-content"><a href="courses.php" class="mybutton">COURSE</a></li>
                <li class="nav-bar-content"><a href="aboutUs.php" class="mybutton">ABOUT US</a></li>
                <li class="nav-bar-content"><a href="contactUs.php" class="mybutton">CONTACT US</a></li>
                <li class="nav-bar-content"><a href="login.php" class="mybutton" id="guest-nav" onclick="user()">LOGIN|SIGN UP</a></li>
            </ul>
            <div class="dropdown" id="dropDown">

            </div>
        </nav>
    </header>

    <main>
        <div class="courseDetailContainer">
            <h1 class="cd-courseName">Course Name</h1>
            <div class="cd-imageContainer">
                <img class="cd-thumbnail" src="images/gallery.png" />
            </div>
            <p class="cd-intro">This is just an exampleThis is just an exampleThis is just an exampleThis is just an exampleThis is just an exampleThis is just an exampleThis is just an example</p>
            <div class="clr"></div>
            <div class="cd-contentContainer">
                <h1 class="cd-contentName">Unit 1</h1>
                <a href="https://www.youtube.com/watch?v=zOjov-2OZ0E" class="cd-contentTopic">Introduction to programming</a>
                <a class="cd-contentDownload" href="images/edit.png" download>
                    <img src="images/download.png" alt="edit png" style="width:25px" />
                </a>
            </div>
            <div class="cd-contentContainer">
                <h1 class="cd-contentName">Unit 1</h1>
                <a href="" class="cd-contentTopic">Topic 1</a>
                <a class="cd-contentDownload" href="images/edit.png" download>
                    <img src="images/download.png" alt="edit png" style="width:25px" />
                </a>
            </div>
            <div class="cd-contentContainer">
                <h1 class="cd-contentName">Unit 1</h1>
                <a href="" class="cd-contentTopic">Topic 1</a>
                <a class="cd-contentDownload" href="images/edit.png" download>
                    <img src="images/download.png" alt="edit png" style="width:25px" />
                </a>
            </div>
        </div>
    </main>

    <footer>
        <p class="footerContent">This Website is created by Khoo Kah Wai & H'ng Chee Kean<br />Airost Internship Programme</p>
    </footer>
</body>

</html>