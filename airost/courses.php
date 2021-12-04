<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta name="description" content="This is an online learning platform specially created for Malaysians" />
    <meta name="author" content="Khoo Kah Wai & H'ng Chee Kean" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>MYStudy</title>
    <link rel="stylesheet" href="style.css" />
    <script src="user.js"></script>
    <script src="dropDownBtnScript.js"></script>
</head>
<body>
    <header>
        <a href="./index.html">
            <img class="logo" src="images/MyStudyLogo2resized.png" alt="" style="width: 180px">
        </a>
        <nav>
            <ul>
                <li class="nav-bar-content"><a href="index.php" class="mybutton">HOME</a></li>
                <li class="nav-bar-content"><a href="Courses.php" class="mybutton">COURSE</a></li>
                <li class="nav-bar-content"><a href="aboutUs.php" class="mybutton">ABOUT US</a></li>
                <li class="nav-bar-content"><a href="contactUs.php" class="mybutton">CONTACT US</a></li>
                <li class="nav-bar-content"><a href="login.php" class="mybutton" id="guest-nav" onclick="user()">LOGIN|SIGN UP</a></li>
            </ul>
            <div class="dropdown" id="dropDown">

            </div>
        </nav>

    </header>

    <main>
        <h1>Featured Courses</h1>
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
    </main>

    <div class="clr"></div>
    <footer>
        <p class="footerContent">This Website is created by Khoo Kah Wai & H'ng Chee Kean<br />Airost Internship Programme</p>
    </footer>
</body>
</html>