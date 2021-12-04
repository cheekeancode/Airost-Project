<?php
session_start();

    include("connection.php");

    // if the save button on peersonal details page clicked update&upload the img to the database 
    if(isset($_POST['save_tutor_img'])){

            $id = $_POST["id"];
            $fileName = basename($_FILES["pic"]["name"]); 
            $pic = $_FILES['pic']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($pic));
            $insert = $db->query("UPDATE tutor SET pic ='$imgContent' WHERE id='$id'");

            if($insert){
                echo"<script> alert('Save Image Successfully') ;  window.location.href = 'tutor.php?personal_details'</script>";
        
                
            } else{
                echo"<script> alert('Save Image Unsuccessfully');  window.location.href = 'tutor.php?personal_details'</script>";
            }
        } 