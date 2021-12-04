<?php
    include ("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYstudy Contact Us Page</title>
    <link rel="stylesheet" href="contactus.css">
</head>
<body>
<div class="header-container">
        <header>
            <div class="logo">
                <a href="index.php">
                    <img src="./logo.png" alt="" style="width: 180px">
                </a>
            </div>
            <nav>
                <a href="index.php" class="mybutton">HOME</a>
                <a href="courses.php" class="mybutton">COURSE</a>
                <a href="aboutUs.php" class="mybutton">ABOUT US</a>
                <a href="contactus.php" class="mybutton">CONTACT US</a>
                <a href="login.php" class="mybutton">LOGIN</a>
            </nav>

            <!-- wrapper to wrap the element when the max width of window is 1040px -->
            <!-- <div class="burger-wrapper">
                <img src="./images/menu.svg" alt="" style="width: 40px;  display: none;" class="menu">
                <nav class="mobile-nav">
                    <a href="index.php" class="navbutton">HOME</a>
                    <a href="courses.php" class="navbutton">COURSE</a>
                    <a href="aboutUs.php" class="navbutton">ABOUT US</a>
                    <a href="contactus.php" class="navbutton">CONTACT US</a>
                    <a href="login.php" class="navbutton">LOGIN</a>
                </nav>
            </div> -->
        </header>
    </div>

    <div class="container1">
        <div class="service" style="">
            <h1 style="font-family: 'Permanent Marker', cursive; font-size: 50pt;">CONTACT US</h1>
            <div class="scontent">  
                <p>Want to know more about us?</p>
                <p>Want to invest on us?</p>
                <p>Want to know more enquiry?</p>                    
            </div>
            <a href="#creator" id="contactnow"><span>Contact Now</span></a>
        </div>
    </div>
    <div class="container2header" id="creator">
        <p style="display: flex; max-width: 1024px; font-weight: bold; justify-content: center;"></p>
        <div class="container2">
            <div class="personal">
                <h1 style="font-family: 'Permanent Marker', cursive; font-size: 15pt; margin-top: -30px;">CREATOR</h1>
                <img src="./images/kw.png" alt="" style="width: 200px; border-radius: 100px;">
                <p> ~ KHOO KAH WAI</p>
                <p> ~ kahwai@graduate.utm.my</p>
                <p> ~ (+60)11-20212022</p>
            </div>
            <div class="personal">
                <h1 style="font-family: 'Permanent Marker', cursive; font-size: 15pt; margin-top: -30px;">CREATOR</h1>
                <img src="./images/ck.png" alt="" style="width: 230px; border-radius: 150px;">
                <p> ~ H'NG CHEE KEAN</p>
                <p> ~ cheekean@graduate.utm.my</p>
                <p> ~ (+60)11-20222033</p>
            </div>
        </div>
    </div>
    <div class="container3header">

        <div class="container3">
            <div class="messages">
                <h1 style="font-family: 'Permanent Marker', cursive; font-size: 30pt; margin-left: 30px">DROP US A MESSAGES</h1>
            </div>
            <form id="contactusform" method="post" action="contact_us.php"  name="contactus_form" onSubmit="return validation_contactus_form();">
                <div class = "inputwrapper">
                    <nav>
                        <input type="text" name="name" id="name" placeholder="NAME" required >
                        <input type="text" name="email" id="email" placeholder="EMAIL ADDRESS" required>
                    
                    </nav>
                </div>
                <div class="inputwrapper">
                    <textarea name="message" id="message" cols="82" row="10" placeholder="DROP YOUR COMMENT HERE !!!" required></textarea>
                </div>

                <div class=sendmessage>
                    <input type="submit" value="SEND MESSAGES" id="sendmessage" name="contactusbtn">
                </div>

                <!-- <img src="./images/new-email.png" alt="" id="emailimg"> -->
            </form>
        </div>
    </div>

    
</body>
</html>
<script>

    function validation_contactus_form() {
    valid = true;
    if ((document.contactus_form.name.value == "") && (document.contactus_form.email.value == "") && (document.contactus_form.message.value == "")){
        document.contactus_form.name.animate([{background:'red'}], {duration:900});
        document.contactus_form.email.animate([{background:'red'}], {duration:900});
        document.contactus_form.message.animate([{background:'red'}], {duration:900});
        alert ("Please fill in all the information");
        valid= false;
    }else{
        if(document.contactus_form.name.value == ""){
            document.contactus_form.email.animate([{background:'red'}], {duration:900});
            alert ("Please fill in your name/nickname");
            valid = false;
        } else if(document.contactus_form.email.value == ""){
            document.contactus_form.password.animate([{background:'red'}], {duration:900});
            alert ("Please fill in your email");
            valid = false;
        } else if (document.contactus_form.message.value == ""){
            document.contactus_form.message.animate([{background:'red'}], {duration:900});
            alert ("Please fill in your message for us");
            valid = false;
        return valid;
    }
    }
<script/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src ="./cajax.js"></script>
