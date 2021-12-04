<?php
    require_once "connection.php";

    $sql = "SELECT * FROM tutor";

    $result = mysqli_query($con, $sql);

?>

<style>

#title{
    display:block; 
    padding-top:120px; 
    padding-bottom:20px; 
    background-color: rgb(189, 130, 238);
    text-align:center;
    color: black;

}

#wrapper{
    padding:150px 100px;
    justify-content: center;
    float:center;
    /* padding */
}
table{
    text-align:center;
    margin-left: auto;
    margin-right: auto;
    /* justify-content: center; */
}

th{
padding: 15px 25px;
background-color: rgb(8, 22, 100);
color: white;
}

td{
    border-bottom: 1px solid #ddd;
    padding: 10px;
}

tr:nth-child(even){
    background-color: skyblue;
}

tr:nth-child(odd){
    background-color: rgb(86, 172, 206);
}

tr:hover{
    background-color: rgb(123, 153, 165);
}

.ebtn{
     border: none;
     color: white;
     background-color: green;
     padding: 10px 15px;
     border-radius: 15px;
}

.ebtn:hover{
     background-color: darkgreen;
     transform: scale(1.1);
     transition: 0.5s;
}

.dbtn{
     border: none;
     color: white;
     background-color: red;
     padding: 10px 15px;
     border-radius: 15px;
}

.dbtn:hover{
     background-color: brown;
     transform: scale(1.1);
     transition: 0.5s;
}

</style>

<div>
     <h1 id="title">TUTOR INFORMATION</h1>
</div>

<div id='wrapper' class="wrapper" >
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

            <?php
            while($row = mysqli_fetch_assoc($result)){ 
            ?>
                <tr>
                    <td><?php echo $row['id'] ?> </td>
                    <td><?php echo $row['name'] ?> </td>
                    <td><?php echo $row['email'] ?> </td>
                    
                    <form action="admin_tutor_upd.php" method="post" >            
                        <td>      
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>" class="btn btn-info btn-xs edit_data" />
                            <input type="submit" name="edit" class="ebtn" value="EDIT">
                        </td>
                    </form> 
                    <form action="admin_delete.php" method="post">
                        <td>      
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            <input type="submit" name="delete_tutor" class="dbtn" value="DELETE" onclick='return confirm("Are you sure want to delete this tutor?")'> 
                        </td>
                    </form>
                </tr>
            <?php  }
            ?>
            </table>
        </div>