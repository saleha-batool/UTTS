<?php
require_once('connection.php');

 if(isset($_POST['del']))
 $sql = "DELETE FROM drivers WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($con, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>
