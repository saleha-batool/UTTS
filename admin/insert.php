 <?php  
require_once('connection.php');
if(isset($_POST['add'])){
$name=$_POST['name'];
$phone=$_POST['phone'];
$cnic=$_POST['cnic'];
$address=$_POST['address'];
$status=$_POST['status'];

	 
  /* $query1 ="SELECT * FROM drivers";
   $res= mysqli_query($con , $query1);
	   while($row=mysqli_fetch_array($res)){
		  $dbcnic= $row["cnic"];
		  $dbphone= $row["phone"];*/
		   
		  /*if(!$cnic==$dbcnic || !$phone==$dbphone){   */
			$query = "INSERT INTO drivers(name, phone, cnic, address, status)  
              VALUES('$name', '$phone', '$cnic', '$address', '$status')"; 

           if(mysqli_query($con , $query))  
            {  
              echo 'Data Inserted';  
             }
		   else{
	             die('Error: '. mysqli_error($con));
               }
		 /* }
		   else{
			  echo 'data exists';
		   }}*/
}
 ?>