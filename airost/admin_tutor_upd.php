<!-- this page is for the admin to update the information of tutor -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Admin Update User Information</title>
</head>

<style>
    body{
    background-color:skyblue;
}

</style>
<body>
    <?php
    require("connection.php");

    $id = $_POST['id'];

    $query = "SELECT * FROM tutor WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
    
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
            <div class="container">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <h2>Admin Panel: Update Data of Tutor</h2>
                            <p style="color:darkorange">*Admin only allow to edit FULL NAME and EMAIL of Tutor !!!</p>
                            <hr>
                            <br>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <div class="form-group">
                                    <label for="">FULL NAME</label>
                                    <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" placeholder="Tutor's Full Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="" style="padding-top:20px;">EMAIL</label>
                                    <input style="margin-bottom:80px;" type="text" name="email" class="form-control" value="<?php echo $row['email'] ?>" placeholder="Tutor's Email" required>
                                </div>
                                <button type="submit" name="update" class="btn btn-primary"> Update Data </button>

                                <a href="admin.php?tutor_information" class="btn btn-danger"> CANCEL </a>
                            </form>

                        </div>
                    </div>
                    
                    <?php
                    if(isset($_POST['update']))
                    {
                        $name = $_POST['name'];
                        $email = $_POST['email'];

                        $query = "UPDATE tutor SET name='$name', email='$email' WHERE id='$id'  ";
                        $query_run = mysqli_query($con, $query);

                        if($query_run)
                        {
                            echo '<script> alert("Data Updated"); window.location.href="./admin.php?tutor_information"</script>';
                            // header("location: admin.php?user_information");
                        }
                        else
                        {
                            echo '<script> alert("Data Updated Unsuccessfullly"); </script>';
                        }
                    }
                    ?>

                </div>
            </div>
            <?php
        }
    }
    else
    {
        // echo '<script> alert("No Record Found"); </script>';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>No Record Found</h4>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

</body>
</html>