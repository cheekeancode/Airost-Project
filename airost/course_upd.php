
<?php
    include("connection.php");
    session_start();

    if(isset($_POST['tupdate_course'])){
        $tutor = $_SESSION["tutor_name"];
        $c_field= $_POST['c_field'];
        $c_name= $_POST['c_name'];
        $c_level = $_POST['c_level'];
        $c_description = $_POST['c_description'];
        $c_outcome = $_POST['c_outcome'];
        $lesson = $_POST['lesson'];

        $title1 = $_POST['title1'];
        $message1 = $_POST['message1'];
        $link1 = $_POST['link1'];

        $title2 = $_POST['title2'];
        $message2 = $_POST['message2'];
        $link2 = $_POST['link2'];

        $title3 = $_POST['title3'];
        $message3 = $_POST['message3'];
        $link3 = $_POST['link3'];
        
        $title4 = $_POST['title4'];
        $message4 = $_POST['message4'];
        $link4 = $_POST['link4'];
        
        $title5 = $_POST['title5'];
        $message5 = $_POST['message5'];
        $link5 = $_POST['link5'];

        if ($lesson == "1"){
            if(empty($title1) && empty($message1) && empty($link1)){
                echo "<script> alert('Please fill in the all the inputs for lesson 1 !!!'); </script>";
            } else if (!empty($title2) && !empty($message2) && !empty($link2) &&!empty($title3) && !empty($message3) && !empty($link3) && !empty($title4) && !empty($message4) && !empty($link4) && !empty($title5) && !empty($message5) && !empty($link5)){
                echo "<script> alert('Please check and clear all the inputs for lesson 2, 3, 4, 5 !!!'); </script>";
            }
        } else if ($lesson == "2"){
            if(empty($title1) && empty($message1) && empty($link1) && empty($title2) && empty($message2) && empty($link2)){
                echo "<script> alert('Please fill in the all the inputs for lesson 1 & 2 !!!'); </script>";   
            } else if (!empty($title3) && !empty($message3) && !empty($link3) && !empty($title4) && !empty($message4) && !empty($link4) && !empty($title5) && !empty($message5) && !empty($link5)){
                alert('Please check and clear all the inputs for lesson 3, 4, 5 !!!');
            }
        } else if ($lesson == "3"){
            if(empty($title1) && empty($message1) && empty($link1) && empty($title2) && empty($message2) && empty($link2) && empty($title3) && empty($message3) && empty($link3)){
                echo "<script> alert('Please fill in the all the inputs for lesson 1, 2 & 3 !!!'); </script>";
            } else if (!empty($title4) && !empty($message4) && !empty($link4) && !empty($title5) && !empty($message5) && !empty($link5)){
                alert('Please check and clear all the inputs for lesson 4, 5 !!!');
            }
        } else if ($lesson == "4"){
            if(empty($title1) && empty($message1) && empty($link1) && empty($title2) && empty($message2) && empty($link2) && empty($title3) && empty($message3) && empty($link3) && empty($title4) && empty($message4) && empty($link4)){
                echo "<script> alert('Please fill in the all the inputs for lesson 1, 2, 3 & 4 !!!'); </script>";
            } else if (!empty($title5) && !empty($message5) && !empty($link5)){
                alert('Please check and clear all the inputs for lesson 5 !!!');
            }
        } else if ($lesson == "5"){
            if(empty($title1) && empty($message1) && empty($link1) && empty($title2) && empty($message2) && empty($link2) && empty($title3) && empty($message3) && empty($link3) && empty($title4) && empty($message4) && empty($link4) && empty($title5) && empty($message5) && empty($link5)){
                echo "<script> alert('Please fill in the all the inputs for lesson 1, 2, 3, 4 & 5 !!!'); </script>";
            }
        } else {

                        $query = " UPDATE course SET c_field='$c_field', c_name='$c_name', c_level='$c_level', c_description='$c_description', c_outcome='$c_outcome', lesson='$lesson', title1='$title1', title2='$title2', title3='$title3', title4='$title4', title5='$title5', message1='$message1', message2='$message2', message3='$message3', message4='$message4', message5='$message5', link1='$link1', link2='$link2', link3='$link3', link4='$link4', link5='$link5'
                        WHERE id='$id'  ";
                        $query_run1 = mysqli_query($con, $query);

                        if($query_run)
                        {
                            echo '<script> alert("Data Updated"); </script>';
                            // header("location: admin.php?user_information");
                        }
                        else
                        {
                            echo '<script> alert("Data Updated Unsuccessfullly"); </script>';
                        }
                }
            }

            ?>