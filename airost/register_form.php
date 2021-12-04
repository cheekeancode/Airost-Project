<?php
session_start();

    include("connection.php");

    // $file_name = "register_form.php";
    // $path = "C:\Users\Chee Kean\Desktop\programming\XAAMP\htdocs\airost".$file_name;
    // $user_name = "laptop-uj6b8j28\chee kean";
    
    // chown($path, $user_name);
    // chmod($file_name, 755);

    error_reporting(0);

    if(isset($_POST['signupbutton'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $password = $_POST['password'];
        $nationality = $_POST['nationality'];
        $ICnum = $_POST['ICnum'];
        $fileName = basename($_FILES["img"]["name"]); 
        $img = $_FILES['img']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($img));
        // $img = basename($_FILES["img"]["name"]);
        // $img = addslashes(file_get_contents($_FILES["img"]["name"]));
        // $imgtype = pathinfo($img, PATHINFO_EXTENSION);
        // // $img = $_FILES['img']['name'];
        // in_array($imgtype);
        // $tmp_img = $_FILES["img"]["tmp_name"];
        // $imgContent = addslashes(file_get_contents($tmp_img));
        // // $folder = "upload_img/".basename($img);
        // $imgExt = explode('.', $img);
        // $imgActualExt = strtolower(end($imgExt));
        // $imgNewName = uniqid('', true).".".$imgActualExt;
        // $fileDestination = "image/".basename($img);
        // move_uploaded_file($_FILES["img"]["tmp_name"], $fileDestination);
        // move_uploaded_file($tmp_img, $folder);

        $period = $_POST['period'];
        $payment = $_POST['payment'];

        $sql = "SELECT * FROM user WHERE email='$email' ";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) >0){
            echo"<script> alert('The email already exist in our database. Please click back to change another valid email address !!!'); window.location.href = 'javascript:history.go(-1)'</script>";
            // header("location:javascript://history.go(-1)");
            // header("Location: " . $_SERVER["HTTP_REFERER"]);
        } else {
            $insert = $db->query("INSERT into user (name, email, password, nationality, ICnum, img, period, payment) VALUES ('$name', '$email', '$password', '$nationality', '$ICnum', '$imgContent', '$period', '$payment')"); 
            if ($insert){
                echo"<script> alert('Register successfully') ; window.location.href = 'login.php' </script>";
                // if(move_uploaded_file($tmp_img, $fileDestination)){
                //     echo("sucuessful added");
                // } else{
                //     echo("not added");
                // }
                // copy($tmp_img, $fileDestination);
                // move_uploaded_file($_FILES['img']['tmp_name'], 'upload/'.$_FILES['img']['name']);
                
            } else{
                echo"<script> alert('Register unsuccessfully');  window.location.href = 'login.php'</script>";
            }

        }
        
        // mysqli_query($con, $query);

    //
    }
