<?php 

    include("connection.php");

    if(!isset($_SESSION["tutor_name"])){
        header("location: tutorlogin.html");
    }

    $name=$_SESSION["tutor_name"];
    $id = $_SESSION['tutor_id'];

    // $sql = "SELECT * FROM tutor";

    // $result = mysqli_query($con, $sql);

    // echo($_SESSION["tutor_name"]);
    // echo($_SESSION["tutor_name"]);
    // echo($_SESSION["tutor_name"]);
    // echo($_SESSION["tutor_name"]);
    // echo($_SESSION["tutor_name"]);
    // echo($_SESSION["tutor_name"]);
    // echo($_SESSION["tutor_name"]);
    // echo($_SESSION["tutor_name"]);

    
?>

<style>
    /* .wrapper{
        background-color: violet;
        padding: 2px;
        padding-top: 30px;
        margin-left:50px;
    } */

    .row{
        background-color: lightgrey;
        padding: 80px;
        margin-left: 50px;
        margin-right: 35px;
        min-height: 470px;
        padding-top: 20px;
    }

    .col{
        float: left;
        width: 40%;
        padding: 35px;
        padding-left: 0px;
        padding-top: 60px;
        margin-right: 15px;
    }

    .col p{
        font-size: 18pt;
        margin-bottom: 20px;
    }

    form input[type="submit"]{
        float:right;
        border: solid green 1px;
        background-color: lightgreen;
        padding: 10px 30px;
        border-radius: 10px;

    }

    form input[type="submit"]:hover{
        background-color: green;
        
    }

</style>


<div id='wrapper' class="wrapper" >
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    
    
    <div class="row">
        <h1 style="padding-top: 30px; padding-bottom:10px;">Personal Details</h1>
        <hr style="border: 1px solid black">
        <div class=col>
        <?php
               $result = $db->query("SELECT pic FROM tutor WHERE id=$id"); 
               if($row = $result->fetch_assoc()){ ?>
        <img id="tutor_img" alt="no image uploaded yet" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pic']); ?>" width="380px" height="350px" style="border-radius:200px; margin-top:-30px;" />
        <?php } ?>
        <form action="save_tutor_img.php" method="post" enctype="multipart/form-data">
            <input type="file" accept="image/*" name="pic" onchange="document.getElementById('tutor_img').src = window.URL.createObjectURL(this.files[0])" required>
            <input type="hidden" name="id" value="<?php echo ($_SESSION['tutor_id']) ?>">
            <input type="submit" name="save_tutor_img" class="btn btn-success" value="SAVE Image">

        </form>
        </div>
        <div class=col style="padding-left: 45px">
            <p>Name: <?php echo($_SESSION['tutor_name'])?></p>
            <p>Email: <?php echo($_SESSION['tutor_email'])?></p>
            <p style="white-space:pre-wrap;">Education:<br><?php echo($_SESSION['tutor_education'])?></p>
            <p style="margin-bottom: 50px;">Motto: <?php echo($_SESSION['tutor_motto'])?></p>
                <form action="tutor_upd.php" method="post" >            
                    <input type="hidden" name="id" value="<?php echo ($_SESSION['tutor_id']) ?>" class="btn btn-info btn-xs edit_data" />
                    <input type="submit" name="edit" class="btn btn-success" value="EDIT">
                </form>
        </div>
    </div>
</div>

<!-- <script>

document.getElementById('update_post').addEventListener('click', function () {
var post = document.createElement('p');
var postText = document.getElementById('post-text').value;
post.textContent = postText;
post.innerHTML = post.innerHTML.replace(/\n/g, '<br>\n');  // <-- THIS FIXES THE LINE BREAKS
var card = document.createElement('div');
card.appendChild(post);
var cardStack = document.getElementById('card-stack');
cardStack.insertBefore(card, cardStack.firstChild);
});

</script> -->