<!-- admin dashboard page -->
<?php 
    session_start();

    include("connection.php");

    if(!isset($_SESSION["admin_name"])){
      header("location: adminlogin.php");
  }

  $name=$_SESSION["admin_name"];
    // if(isset($_GET['user_information'])){
    //   include("user_information.php");
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Page</title>
    <link rel="stylesheet" href="css-reset.css">
</head>

<style>
*{
    margin:0;
    padding: 0;
}
.header-container{
    background-color: rgb(22, 22, 22);
    min-height: 100px;
    position: fixed;
    width: 100%;
    margin-left: 0;
}

header{
    background-color: rgb(22, 22, 22);
    min-height: 100px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo{
    margin-right: 0; 
    margin-top: 0;
}

.mybutton{
    color:white;
    padding: 10px 25px;
    text-decoration: none;
}

.mybutton:hover{
    background-color: rgb(11, 202, 139);
}

.sidenav {
  height: 100%;
  width: 0%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 15px 8px 15px 28px;
  text-decoration: none;
  font-size: 18px;
  color: #818181;
  display: block;
  transition: 0.3s;
  /* margin-top: 20px; */
}

.sidenav a:hover {
  color: #f1f1f1;
  background-color: rgb(11, 202, 139);
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-top: 20px;
  padding-left: 10px;
  padding: 1px 10px;
}

.openbtn:hover{
    background-color: rgb(11, 202, 139);
}



.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 15px;

}

.active, .collapsible:hover {
  background-color: #555;
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.management {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}

.container{
  min-width:1000px;
  min-height: 780px;
  background-color: rgb(146, 183, 250);
}

.r1wrap{
    max-width: 1000px;
    min-height: 100px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 50px;
  
}

.r2wrap{
  max-width: 1000px;
    min-height: 100px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 50px;
}

.num_user{
  background-color: rgb(253, 95, 95);
  display: inline-block;
  height: 150px;
  padding: 50px 20px;
  width: 200px;
  text-align: center;
  align-items: center;
  margin-right: 130px;  
  border-radius: 25px;
  box-shadow: grey 6px 6px;
}

.num_tutor{
  background-color: rgb(59, 59, 248);
  display: inline-block;
  height: 150px;
  padding: 50px 20px;
  width: 200px;
  text-align: center;
  margin-right: 135px;
  border-radius: 25px;
  box-shadow: grey 6px 6px;
}

.num_guest{
  background-color: rgb(180, 180, 48);
  display: inline-block;
  height: 150px;
  padding: 50px 20px;
  margin-top:100px;
  /* width: 25%; */
  width: 200px;
  text-align: center;
  border-radius: 25px;
  box-shadow: grey 6px 6px;

}

.num_my{
  background-color: rgb(230, 138, 34);
  display: inline-block;
  height: 150px;
  padding: 50px 20px;
  width: 200px;
  text-align: center;
  border-radius: 25px;
  box-shadow: grey 6px 6px;
}

.num_nonmy{
  background-color: rgb(22, 116, 22);
  display: inline-block;
  height: 150px;
  padding: 50px 20px;
  width: 200px;
  /* margin-right: 15px; */
  text-align: center;
  border-radius: 25px;
  box-shadow: grey 6px 6px;
}

.num_course{
  background-color: rgb(122, 77, 122);
  display: inline-block;
  height: 150px;
  padding: 50px 20px;
  /* width: 25%; */
  margin-right:3px;
  width: 200px;
  text-align: center;
  border-radius: 25px;
  box-shadow: grey 6px 6px;
}



</style>

<body>
    <div class="header-container">
        <header>
            <div class="openbtn">
            <span style="font-size:30px;cursor:pointer;color: aliceblue; padding: 5px;margin-left: 20px;" onclick="openNav()">&#9776;</span>
            </div>
            <div class="logo">
                <a href="#">
                    <img src="./logo.png" alt="" style="width: 180px; padding-left: 50px;">
                </a>
                <span style="color: aquamarine;"> Admin Panel</span>
            </div>
            <nav>
                <a href="admin.php" class="mybutton">Dashboard</a>
                <a href="atutorlogout.php" class="mybutton">Log out</a>
            </nav>
        </header>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <button class="collapsible" style=" margin-top: 40px;">Course Management</button>
            <div class="management">
                <a href="admin.php?course_information">Course Information</a>
            </div>
            <button class="collapsible">User Management</button>
                <div class="management">
                    <a href="admin.php?user_information">User Infromation</a>
                </div>
            <button class="collapsible">Tutor Management</button>
                <div class="management">
                    <a href="admin.php?tutor_information">Tutor information</a>
                </div>
            <button class="collapsible">Guest Management</button>
                <div class="management">
                    <a href="admin.php?guest_contactus">Contact Us Guest </a>
                </div>
        </div>
    </div>
    <div class="container">
      <?php 
        if(!isset($_GET['user_information'])&&!isset($_GET['guest_contactus'])&&!isset($_GET['tutor_information'])&&!isset($_GET['course_information'])){ 
      ?>
    
          <div class= "r1wrap">
          <nav>
            <div class="num_user" >
              <h1><br>Total number of User</h1>
              <?php
                $query = "SELECT * FROM user";
                $query_run = mysqli_query($con, $query);

                if($total_user = mysqli_num_rows($query_run)){
                  echo '<h1 style="margin-top: 20px; font-size:30pt; color:white;">'.$total_user.'</h1>';
              }
              ?>
            </div>
          
            
            <div class="num_tutor">
              <h1><br>Number of Tutor</h1>
              <?php
                $query1 = "SELECT * FROM tutor";
                $query_run1 = mysqli_query($con, $query1);

                if($total_tutor = mysqli_num_rows($query_run1)){
                  echo '<h1 style="margin-top: 47px; font-size:30pt; color:white;">'.$total_tutor.'</h1>';
              }
              ?>
            </div>
          
            <div class="num_guest">
              <h1><br>Messages of Guest from Contact Us</h1>
              <?php
                $query2 = "SELECT * FROM guest";
                $query_run2 = mysqli_query($con, $query2);

                if($total_guest = mysqli_num_rows($query_run2)){
                  echo '<h1 style="margin-top: 20px; font-size:30pt; color:white;">'.$total_guest.'</h1>';
              }
              ?>
            </div>
          </nav>
          </div>

          <div class="r2wrap">
            <div class="num_my">
              <h1 style="font-size: 20pt">Number of User from Malaysia</h1>
              <?php
                $query3 = "SELECT * FROM user WHERE `nationality`='malaysian'";
                $query_run3 = mysqli_query($con, $query3);

                if($m_user = mysqli_num_rows($query_run3)){
                  echo '<h1 style="margin-top: 20px; font-size:30pt; color:white;">'.$m_user.'</h1>';
              }
              ?>
            </div>

            <div class="num_nonmy">
              <h1 style="font-size: 16.1pt">Number of User from Other Countries</h1>
              <?php
                $query4 = "SELECT * FROM user WHERE `nationality`='non-malaysian'";
                $query_run4 = mysqli_query($con, $query4);

                if($nm_user = mysqli_num_rows($query_run4)){
                  echo '<h1 style="margin-top: 20px; font-size:30pt; color:white;">'.$nm_user.'</h1>';
              }
              ?>
            </div>

            <div class="num_course">
              <h1 style="font-size: 16.1pt">Total Course Created</h1>
              <?php
                $query5 = "SELECT * FROM course";
                $query_run5 = mysqli_query($con, $query5);

                if($total_course = mysqli_num_rows($query_run5)){
                  echo '<h1 style="margin-top: 20px; font-size:30pt; color:white;">'.$total_course.'</h1>';
              }
              ?>
            </div>
          </nav>
          </div>
      <?php }
      ?>

<?php
      if(isset($_GET['course_information'])){ 
        include("course_information.php"); ?> 
        <div id='wrapper'>
        </div>
    <?php } ?>

    <?php
      if(isset($_GET['user_information'])){ 
        include("user_information.php"); ?> 
        <div id='wrapper'>
        </div>
    <?php } ?>

    <?php
      if(isset($_GET['guest_contactus'])){ 
        include("guest_contactus.php"); ?> 
        <div id='wrapper'>
        </div>
    <?php } ?>

    <?php
      if(isset($_GET['tutor_information'])){ 
        include("tutor_information.php"); ?> 
        <div id='wrapper'>
        </div>
    <?php } ?>

    </div>
</body>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>


</html>