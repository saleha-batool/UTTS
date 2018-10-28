<?php
	require_once('connection.php');
	if(isset($_POST['show'])){
		?>
		<table class = "table table-bordered alert-warning table-hover">
			<thead>
				        <th width="10%">ID</th>  
						<th width="15%">Name</th>  
						<th width="15%">Phone no</th>  
						<th width="15%">Cnic</th> 
						<th width="25%">Address</th> 
						<th width="10%">Status</th>
						<th width="15%">Actions</th> 
			</thead>
				<tbody>
					<?php
						$qdriver=mysqli_query($con,"select * from `drivers`");
						while($row=mysqli_fetch_array($qdriver)){
							?>
								<tr style="color:#000">
									<td><?php echo $row['id']; ?></td> 
                                    <td><?php echo $row['name']; ?></td>  
                                    <td><?php echo $row['phone']; ?></td> 
					                <td><?php echo $row['cnic']; ?></td>
					                <td><?php echo $row['address']; ?></td>
					                <td style="color: #155B05"><?php echo $row['status']; ?></td>
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

 

 
 