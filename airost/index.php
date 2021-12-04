<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta name="description" content="This is an online learning platform specially created for Malaysians" />
    <meta name="author" content="Khoo Kah Wai & H'ng Chee Kean" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>MYStudy</title>
    <link rel="stylesheet" href="style.css"/>
    <script src="user.js"></script>
    <script src="dropDownBtnScript.js"></script>
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
                <li class="nav-bar-content"><a href="contactUs.php" class="mybutton">CONTACT US</a></li>
                <li class="nav-bar-content"><a href="login.php" class="mybutton" id="guest-nav" onclick="user()">LOGIN|SIGN UP</a></li>
            </ul>
            <div class="dropdown" id="dropDown">
                
            </div>
        </nav>

    </header>
    
    <main>
        <div id="homePageTitle">
            <img src="images/MyStudyLogoResized.png" alt="Alternate Text" style="width:100px" />
            <h1>MYStudy</h1>
            <p>Malaysians No.1 Choice Online Learning Platform</p>
            <div class="largeButtonContainer">
                <a href="login.php" class="largeButton">Join Now</a>
            </div>
        </div>
        <div class="homePageContent">
            <img class="homeContentImage" src="images/homecontent1.jpg" alt="Alternate Text" style="width:250px" />
            <section class="homeContentContainer">
                <h2 class="homeContentTitle">Malaysians Who Loved to Learn</h2>
                <p class="homeContentParagraph">If you are a Malaysian who loved to learn, this platform is specially built for you.</p>
            </section>
        </div>
        <div class="homePageContent">
            <img class="homeContentImage" src="images/homecontent2.jpeg" alt="Alternate Text" style="width:250px" />
            <section class="homeContentContainer">
                <h2 class="homeContentTitle">An Efficient Learning Platform for Schools or Education Centers</h2>
                <p class="homeContentParagraph">If you are finding a solution to make online learning for your school or education center more efficient, our platform is your best choice.</p>
            </section>
        </div>

        <div class="homePageContent_2">
            <div class="homeContentContainer_2">
                <img class="homeContentImage_2" src="images/affortable.png" style="width:100px" />
                <h2 class="homeContentTitle_2">Affortable Prices</h2>
            </div>            
            <div class="homeContentContainer_2">
                <img class="homeContentImage_2" src="images/safe.png" style="width:100px" />
                <h2 class="homeContentTitle_2">Verified Instructors</h2>
            </div>
            <div class="homeContentContainer_2">
                <img class="homeContentImage_2" src="images/reliable.png" style="width:100px" />
                <h2 class="homeContentTitle_2">Reliable and Safe</h2>
            </div>     
        </div>   
        
    </main>
      
    <footer>
        <p class="footerContent">This Website is created by Khoo Kah Wai & H'ng Chee Kean<br />Airost Internship Programme</p>
    </footer>
</body>
</html>