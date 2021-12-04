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

    <title>About Us</title>
    <link rel="stylesheet" href="style.css" />
    <script src="user.js"></script>
    <script src="dropDownBtnScript.js"></script>
    <script>
        var login = false;
    </script>
</head>
<body>
    <header>
        <a href="index.php">
            <img class="logo" src="images/MyStudyLogo2resized.png" alt="" style="width: 180px">
        </a>
        <nav>
            <ul>
                <li class="nav-bar-content"><a href="index.php" class="mybutton">HOME</a></li>
                <li class="nav-bar-content"><a href="courses.php" class="mybutton">COURSE</a></li>
                <li class="nav-bar-content"><a href="aboutUs.php" class="mybutton">ABOUT US</a></li>
                <li class="nav-bar-content"><a href="contactus.php" class="mybutton">CONTACT US</a></li>
                <li class="nav-bar-content"><a href="login.php" class="mybutton" id="guest-nav" onclick="user()">LOGIN|SIGN UP</a></li>
            </ul>
            <div class="dropdown" id="dropDown">

            </div>
        </nav>

    </header>
    <main>
        <section class="au-contentContainer">
            <h1 class="au-title">About Us</h1>
            <p class="au-paragraph">We are students from UTM, this is the website we build for our Airost Internship Program. We found out that recently there are many poor-quality online courses all around the internet. Many Malaysians wants to improve themselves by learning new skills. Some of them paid money to enroll into these courses but at the end they did not get what they wanted. Furthermore, unlike universities and colleges, most schools and smaller education centers does not have an efficient online learning platform. We intended to solve this problem by building a safe and reliable platform for Malaysians who loved to learn.</p>
        </section>

        <section class="au-contentContainer">
            <h2 class="au-title">Our Mission</h2>
            <div id="ourMission-listContainer">
                <ul>
                    <li id="ourMission-list">Create a reliable, safe and affortable online learning platform for Malaysians.</li>
                    <li id="ourMission-list">Provide an efficient online learning platform for schools and educatian centers.</li>
                </ul>
            </div>

        </section>
    </main>

    <footer>
        <p class="footerContent">This Website is created by Khoo Kah Wai & H'ng Chee Kean<br />Airost Internship Programme</p>
    </footer>
</body>
</html>