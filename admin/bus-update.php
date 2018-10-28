<?php
require_once('connection.php');


if(isset($_POST['update'])){
$id=$_POST['id'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$cnic=$_POST['cnic'];
$address=$_POST['address'];
$status=$_POST['status'];
  
			$query = "UPDATE drivers SET name='$name', phone='$phone', cnic='$cnic', address='$address', status='$status' where id='$id'"; 

           if(mysqli_query($con , $query))  
            {  
              echo 'Data Updated';  
             }
		   else{
	             die('Error: ' . mysqli_error($con));
               }
		  }

?>
