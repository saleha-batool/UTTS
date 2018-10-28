<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<?php
	require_once('connection.php');
	$sql =mysqli_query($con, "SELECT * FROM drivers where id='".$row['id']."'");  
	$row=mysqli_fetch_array($sql);
    ?>
    <div class="modal-dialog" role="document">
	  <form id="update_form" method="post" class="form" action="update.php"> 
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel-<?php echo $row['id'];?>">Update DRiVER Details</h4>
      </div>
      <div class="modal-body">
	  <input type="hidden" name="id" id="<?php echo $row['id'];?>" value="<?php echo $row['id'];?>">
       <div class="form-group">
		   <label>Enter Employee Name</label> 
	  <input type="text" name="name" id="name-<?php echo $row['id'];?>" placeholder="Enter drivers name" class="form-control"  value="<?php echo $row['name'];?>" />
	   </div>
		<div class="form-group">
	  <label>Enter phone no</label>  
         <input type="text" name="phone" id="phone-<?php echo $row['id'];?>" placeholder="Enter phone number" class="form-control"  value="<?php echo $row['phone'];?>" />
	   </div>
		<div class="form-group">
	   <label>Enter cnic</label>  
       <input type="text" name="cnic" id="cnic-<?php echo $row['id'];?>" placeholder="Enter cnic" class="form-control" value="<?php echo $row['cnic'];?>"  />
	   </div>
		<div class="form-group">
	   <label>Enter Employee Address</label>  
        <input type="text" name="address" id="address-<?php echo $row['id'];?>" class="form-control" value="<?php echo $row['address'];?>"> 
	   </div>
		<div class="form-group">
	  <label>Enter status</label>  
       <input type="text" name="status" id="status-<?php echo $row['id'];?>" placeholder="Enter status" class="form-control" value="<?php echo $row['status'];?>" />
	   </div>
      </div>
      <div class="modal-footer">
		 <button type="button" class="btn btn-primary update" id="button" value="<?php echo $row['id']; ?>">Update record</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
	</div>
	</form>
  </div>
</div>
		