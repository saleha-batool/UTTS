<?php
	require_once('connection.php');
	if(isset($_POST['show'])){
		?>
		<table class = "table table-bordered alert-warning table-hover">
			<thead>
				        <th width="10%">ID</th>  
						<th width="15%">First Name</th>
				        <th width="15%">Last Name</th>
				        <th width="10%">Roll NO</th>
				        <th width="15%">Email</th> 
						<th width="15%">Phone no</th>  
						<th width="10%">Password</th>
						<th width="15%">Actions</th> 
			</thead>
				<tbody>
					<?php
						$qdriver=mysqli_query($con,"select * from `student`");
						while($row=mysqli_fetch_array($qdriver)){
							?>
								<tr style="color:#000">
									<td><?php echo $row['id']; ?></td> 
                                    <td><?php echo $row['fname']; ?></td> 
									<td><?php echo $row['lname']; ?></td>
                                    <td><?php echo $row['roll_no']; ?></td> 
					                <td><?php echo $row['email']; ?></td>
					                <td><?php echo $row['phone_no']; ?></td>
					                <td style="color: #155B05"><?php echo $row['password']; ?></td>
									<td><button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $row['id']; ?>"><span class = "glyphicon glyphicon-pencil"></span></button> | <button class="btn btn-danger delete" value="<?php echo $row['id']; ?>"><span class = "glyphicon glyphicon-trash"></span></button>
									<?php include('updatedriver.php'); ?>
									</td>
								</tr>
							<?php
						}
 
					?>
				</tbody>
			</table>
		<?php
	}
 
?>

 

 
 