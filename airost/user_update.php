<?php

include ("connection.php");

$sql = "SELECT * FROM guest";

$result = mysqli_query($con, $sql);

?>

<div id='wrapper' class="wrapper" >
            <h1>beat</h1>
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Nationality</th>
                    <th>IC no. (0 mean null)</th>
                    <th>Prove Image</th>
                    <th>Period</th>
                    <th>Payment</th>
                    <th>Date Register</th>
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
                    <td><?php echo $row['nationality'] ?> </td>
                    <td><?php echo $row['ICnum'] ?> </td>
                    

                    <!-- <td>////</td> -->
                    <td><img src="data:image/jpg;base64, <?php base64_encode($row['img']); ?>" width="80px" height="100px"></td>

            
                    
                    <td><?php $row['period'] ?> </td>
                    <td><?php $row['payment'] ?> </td>
                    <td><?php $row['date'] ?> </td>
                    <!-- <input type="button" name="edit" value="Edit" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" />
                    <button type="button" class="btn btn-success openBtn">Open Modal</button> -->
                <td> <input type="button" name="edit" value="Edit" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" /></td>
                <td><a href="delete.php?id=<?php echo $row["id"]; ?>" onclick='return confirm("Are you sure?")'>DELETE</a></td>
                
           
                </tr>
            <?php  }
            ?>
            </table>
        </div>
</div>