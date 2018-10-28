 <?php  
require_once('connection.php');
if(isset($_POST['submit'])){
$name=$_POST['name'];
$details=$_POST['details'];
$status=$_POST['status'];
				
               //username check
                /* $sql="select * from `route` where `name`= '$name'";
                $result=mysqli_query($con, $sql);
                if($result->num_rows > 0){
				echo("already exist");               
                }*/
                //insert record
				   $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
				
					$query=mysqli_query($con,"insert into `route` (`name`,`details`,`map_pic`,`status`) values ('$name','$details','$file','$status')");
	
	               if($query){
					echo("data inserted");
                     }
				/*	if($res){}*/
				
				else{
					die('Error: '. mysqli_error($con));
				}	
	 
  /* $query1 ="SELECT * FROM drivers";
   $res= mysqli_query($con , $query1);
	   while($row=mysqli_fetch_array($res)){
		  $dbcnic= $row["cnic"];
		  $dbphone= $row["phone"];*/
		   
		  /*if(!$cnic==$dbcnic || !$phone==$dbphone){   */
			
			/*		$query = "INSERT INTO routes(bus_id ,name ,details ,map_picture, status)  
              VALUES('$bus','$name', '$details', '$map', '$status')"; 

           if(mysqli_query($con , $query))  
            {  
              echo 'Data Inserted';  
             }
		   else{
	             
               }*/
		 /* }
		   else{
			  echo 'data exists';
		   }}*/
}
 ?>