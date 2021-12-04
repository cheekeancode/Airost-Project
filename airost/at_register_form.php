<?php
session_start();

    include("connection.php");

    // $file_name = "register_form.php";
    // $path = "C:\Users\Chee Kean\Desktop\programming\XAAMP\htdocs\airost".$file_name;
    // $user_name = "laptop-uj6b8j28\chee kean";
    
    // chown($path, $user_name);
    // chmod($file_name, 755);

    // error_reporting(0);

    if(isset($_POST['tsingupbutton'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];


        $sql = "SELECT * FROM tutor WHERE email='$email' ";
        $result = mysqli_query($con, $sql);

        $pattern = '/^(?=.*[0-9])(?=.*[a-z]).{8,}$/';

        if (!preg_match($pattern, $password)){
            echo"<script> alert('Password must contain at least 1 number, 1 lowerCase letter and 8 characters !!!'); window.location.href = 'javascript:history.go(-1)' </script>";
        } else {   
            if ($password != $confirmpassword){
                echo"<script> alert('Please ensure that password and confirm password you key in are the same !!!'); window.location.href = 'javascript:history.go(-1)'</script>";

            } else {
                if (mysqli_num_rows($result) >0){
                    echo"<script> alert('The email already exist in our database. Please click back to change another valid email address !!!'); window.location.href = 'javascript:history.go(-1)'</script>";
                    // header("location:javascript://history.go(-1)");
                    // header("Location: " . $_SERVER["HTTP_REFERER"]);
                } else {
                    $query = "insert into tutor (name, email, password) values ('$name', '$email', '$password')";
                    $result2 = mysqli_query($con, $query);
                    if ($result2){
                        echo"<script> alert('Register successfully'); window.location.href = 'tutorlogin.php'</script>";
                
                        
                    } else{
                        echo"<script> alert('Register unsuccessfully');  window.location.href = 'tutorlogin.php'</script>";
                    }

                }}}
        
        // mysqli_query($con, $query);

    //
    }

    if(isset($_POST['asingupbutton'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];


        $sql = "SELECT * FROM admin WHERE email='$email' ";
        $result = mysqli_query($con, $sql);

        $pattern = '/^(?=.*[0-9])(?=.*[a-z]).{8,}$/';

        if (!preg_match($pattern, $password)){
            echo"<script> alert('Password must contain at least 1 number, 1 lowerCase letter and 8 characters !!!'); window.location.href = 'javascript:history.go(-1)' </script>";
        } else {   
            if ($password != $confirmpassword){
                echo"<script> alert('Please ensure that password and confirm password you key in are the same !!!'); window.location.href = 'javascript:history.go(-1)'</script>";

            } else {
                if (mysqli_num_rows($result) >0){
                    echo"<script> alert('The email already exist in our database. Please click back to change another valid email address !!!'); window.location.href = 'javascript:history.go(-1)'</script>";
                
                } else {
                    $query = "insert into admin (name, email, password) values ('$name', '$email', '$password')";
                    $result2 = mysqli_query($con, $query);
                    if ($result2){
                        echo"<script> alert('Register successfully'); window.location.href = 'adminlogin.php'</script>";
                
                        
                    } else{
                        echo"<script> alert('Register unsuccessfully');  window.location.href = 'adminlogin.php'</script>";
                    }

                }}}
        
        // mysqli_query($con, $query);

    //
    }
