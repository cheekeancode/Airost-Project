var login = false;
function user() {
    login = true;
    if (login == true) {
        var userNavButton = '<input type="image" src="images/navIcon.png" onclick="myFunction()" class="dropbtn"><div id="myDropdown" class="dropdown-content"><a href="userProfile.php">My Profile</a><a href="userCourses.php">My Courses</a><a href="atutorlogout.php">Log out</a></div>';
        var myobj = document.getElementById("guest-nav");
        myobj.remove();
        document.getElementById("dropDown").innerHTML = userNavButton;
    }
}
