<?php
    require_once "connection.php";

//     $sql = "SELECT * FROM user";

//     $result = mysqli_query($con, $sql);

?>

<style>

#title{
     display:block; 
     padding-top:120px; 
     padding-bottom:20px; 
     background-color:lightgreen;
     text-align:center;
     color: black;
     
}

.container{
  min-height: 780px;
  min-width: 1250px;
  background-color: rgb(146, 183, 250);
}

#wrapper{
    padding:100px 5px;
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
     <h1 id="title">COURSE INFORMATION</h1>
</div>
<div id='wrapper' class="wrapper" >
     
          <table class="table">
               <tr>
                    <th>Id</th>
                    <th>Course Field</th>
                    <th>Course Name</th>
                    <th>Course Level</th>
                    <th>Number of lessons</th>
                    <th>Instructor</th>
                    <th>Delete</th>
                </tr>

        <?php
               $result1 = $db->query("SELECT * FROM course"); 
                while( $row = $result1->fetch_assoc()){ 

                    // while($row = mysqli_fetch_assoc($result)){ ?> 

        
                <tr>
                    <td><?php echo $row['id'] ?> </td>
                    <td><?php echo $row['c_field'] ?> </td>
                    <td><?php echo $row['c_name'] ?> </td>
                    <td><?php echo $row['c_level'] ?> </td>
                    <td><?php echo $row['lesson'] ?> </td>
                    <td><?php echo $row['tutor'] ?> </td>
            
                    <!-- <input type="button" name="edit" value="Edit" id="" class="btn btn-info btn-xs edit_data" />
                    <button type="button" class="btn btn-success openBtn">Open Modal</button> -->

                    <form action="admin_delete.php" method="post">
                        <td>      
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            <input type="submit" name="admin_delete_course" class="dbtn" value="DELETE" onclick='return confirm("Are you sure want to delete this course?")'> 
                        </td>
                    </form>
               </tr>
            <?php }  
            ?>
            </table>
        </div>
