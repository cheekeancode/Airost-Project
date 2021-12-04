<!-- Basically this file consists of all delete button from different page and delete the information from database -->
<?php

include("connection.php");

if(isset($_POST['delete_user']))

{
    $id = $_POST['id'];

    $query = "DELETE FROM user WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);  

    if($query_run) {
        echo '<script> alert("Data about the user have been deleted"); window.location.href="./admin.php?user_information"</script>';
        // header("location: admin.php?user_information");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

if(isset($_POST['delete_guest']))
{
    $id = $_POST['id'];

    $query = "DELETE FROM guest WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);    

    if($query_run) {
    
        echo '<script> alert("You have deleted a comment from guest"); window.location.href="./admin.php?guest_contactus"</script>';
        // header("location: admin.php?user_information");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

if(isset($_POST['delete_tutor']))
{
    $id = $_POST['id'];

    $query = "DELETE FROM tutor WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);    

    if($query_run) {
    
        echo '<script> alert("Data about the tutor have been deleted"); window.location.href="./admin.php?tutor_information"</script>';
        // header("location: admin.php?user_information");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

if(isset($_POST['delete_course']))
{
    $id = $_POST['id'];

    $query = "DELETE FROM course WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);    

    if($query_run) {
    
        echo '<script> alert("Data about the course have been deleted"); window.location.href="./tutor.php?"</script>';
        // header("location: admin.php?user_information");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

if(isset($_POST['admin_delete_course']))
{
    $id = $_POST['id'];

    $query = "DELETE FROM course WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);    

    if($query_run) {
    
        echo '<script> alert("Data about the course have been deleted"); window.location.href="admin.php?course_information"</script>';
        // header("location: admin.php?user_information");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}
?>