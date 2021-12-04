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
     background-color:rgb(245, 168, 96);
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
     <h1 id="title">USER INFORMATION</h1>
</div>
<div id='wrapper' class="wrapper" >
     
          <table class="table">
               <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Nationality</th>
                    <th>IC num</th>
                    <th>Prove Image</th>
                    <th>Period</th>
                    <th>Payment</th>
                    <th>Date Register</th>
                    <th>Edit</th>
                    <th>Delete</th>
               </tr>

          <?php
               $result1 = $db->query("SELECT * FROM user"); 
               while( $row = $result1->fetch_assoc()){ 
                   
                    // while($row = mysqli_fetch_assoc($result)){ ?> 

          
               <tr>
                    <td><?php echo $row['id'] ?> </td>
                    <td><?php echo $row['name'] ?> </td>
                    <td><?php echo $row['email'] ?> </td>
                    <td><?php echo $row['nationality'] ?> </td>
                    <td><?php echo $row['ICnum'] ?> </td>
                    
                    <td>
                         <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" alt="no need image" width="150px" height="150px"/>
                    </td>

                    
                    <td><?php echo $row['period'] ?> </td>
                    <td><?php echo $row['payment'] ?> </td>
                    <td><?php echo $row['date'] ?> </td>
                    <!-- <input type="button" name="edit" value="Edit" id="" class="btn btn-info btn-xs edit_data" />
                    <button type="button" class="btn btn-success openBtn">Open Modal</button> -->

                    <form action="admin_user_upd.php" method="post" >            
                         <td>      
                              <input type="hidden" name="id" value="<?php echo $row['id'] ?>" class="btn btn-info btn-xs edit_data" />
                              <input type="submit" name="edit" class="ebtn" value="EDIT">
                         </td>
                    </form> 
                    <form action="admin_delete.php" method="post">
                         <td>      
                              <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                              <input type="submit" name="delete_user" class="dbtn" value="DELETE" onclick='return confirm("Are you sure want to delete this user?")'> 
                         </td>
                    </form>
                         
                      
           
               </tr>
            <?php }  
            ?>
            </table>
        </div>



<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

<div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">PHP Ajax Update MySQL Data Through Bootstrap Modal</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>Enter Employee Name</label>  
                          <input type="text" name="name" id="name" class="form-control" />  
                          <br />  
                          <label>Enter Employee Address</label>  
                          <textarea name="address" id="address" class="form-control"></textarea>  
                          <br />  
                          <label>Select Gender</label>  
                          <select name="gender" id="gender" class="form-control">  
                               <option value="Male">Male</option>  
                               <option value="Female">Female</option>  
                          </select>  
                          <br />  
                          <label>Enter Designation</label>  
                          <input type="text" name="designation" id="designation" class="form-control" />  
                          <br />  
                          <label>Enter Age</label>  
                          <input type="text" name="age" id="age" class="form-control" />  
                          <br />  
                          <input type="hidden" name="employee_id" id="employee_id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>   -->

 <!-- <script>  
 $(document).ready(function(){  
    //   $('#add').click(function(){  
    //        $('#insert').val("Insert");  
    //        $('#insert_form')[0].reset();  
    //   });  
      $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#name').val(data.name);  
                     $('#address').val(data.address);  
                     $('#gender').val(data.gender);  
                     $('#designation').val(data.designation);  
                     $('#age').val(data.age);  
                     $('#employee_id').val(data.id);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#name').val() == "")  
           {  
                alert("Name is required");  
           }  
           else if($('#address').val() == '')  
           {  
                alert("Address is required");  
           }  
           else if($('#designation').val() == '')  
           {  
                alert("Designation is required");  
           }  
           else if($('#age').val() == '')  
           {  
                alert("Age is required");  
           }  
           else  
           {  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
 </script> -->


        <!-- <div id="editback">
    <div id="frmEdit">
        <textarea name="edit-message" id="edit-message" cols="40" rows="5"></textarea>
    </div>
</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="modal_window.js"></script>
<script src="crud.js"></script>

<script>
    $(document).ready(function() {
	var comment_id;
	var edit_window = $("#frmEdit").dialog({autoOpen: false,
      height: 280,
      width: 480,
      modal: true});


function openEditBox(id) {
	edit_window = $("#frmEdit").dialog({
      buttons: {
        "Edit": editComment
      },
      close: function() {
		
        edit_window.dialog( "close" );
      }
    });
	edit_window.dialog( "open" );
	comment_id = id;
	var message = $("#message_" + comment_id + " .message-content").html();
	$("#edit-message").val(message); 
}

// var add_window = $("#frmAdd").dialog({
// 	  autoOpen: false,
// 	  height: 280,
// 	  width: 480,
// 	  modal: true,
// 	  buttons: {
// 		"Post": addComment
// 	  },
// 	  close: function() {
// 		add_window.dialog( "close" );
// 	  }
// 	});

	// function addComment() {
	// 	add_window.dialog( "close" );
	// 	callCrudAction('add','');
	// } 

	$( "#btnAddAction" ).button().on( "click", function() {
	  add_window.dialog( "open" );
	});

	$( ".btnEditAction").button().on( "click", function() {
		openEditBox($(this).attr("id"));
	});
});


function editComment() {
	edit_window.dialog( "close" );
	callCrudAction('edit',comment_id);
} 
</script>

<style>

.wrapper{
    z-index: 1;
}
.btnEditAction{
    z-index: 0;
    position: relative;
    overflow: hidden;
    color: red;
    background-color: green;
}

#frmEdit{
    position: relative;
    overflow: hidden;
    background-color: blue;
    color: red;
    /* width: 300%;
    min-height: 500%;
    background-color: rgba(0,0,0,0.8);
    z-index: 1;
    margin-top: -5000px;
} */

    
</style> -->