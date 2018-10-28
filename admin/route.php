 <?php  
require_once('connection.php'); 
 $query = "SELECT * FROM route ORDER BY id ASC";  
 $result = mysqli_query($con, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title></title>  
		  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		    <link href="css/sb-admin.css" rel="stylesheet">
      </head>  
      <body> 
		  
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
                <a class="navbar-brand" href="index.php">Admin Panel</a>
            </div>
        <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>Admin</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>Admin</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>Admin</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
				<!-- admin -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                     <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
                    </li>
                    <li>
                        <a href="bus.php"><i class="fa fa-fw fa-bar-chart-o"></i> Buses </a>
                    </li>
                    <li>
                        <a href="driver.php"><i class="fa fa-fw fa-table"></i> Drivers </a>
                    </li>
                    <li>
                        <a href="std.php"><i class="fa fa-fw fa-edit"></i> Students </a>
                    </li>
					<li>
                        <a href="route.php"><i class="fa fa-fw fa-edit"></i> Routes </a>
                    </li>
                    
				<!-- dropdown-->	
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Notifications <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-exclamation-triangle"></i> Emergency Alert </a>
                            </li>
                            <li>
								<a href="#"><i class="fa fa-fw fa-comments"></i> Complaints </a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Settings </a>
                    </li>
					
                    <li  >
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
        
           <br /> 
             
  <div class="container">
	        <h3 align="center">Route Details</h3>  
	<br/>
	  <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search" class="form-control" />
    </div>
   </div>
   <div id="result"></div>
	  
	  
	  <div align=right>
<button type="button" class="btn btn-success right" data-toggle="modal" data-target="#add_Modal" ><i class="glyphicon glyphicon-plus"></i>Add record</button> 
	</div><br/> <br/> 
<!-- Modal -->
<div class="modal fade" id="add_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
	  <form method="post" class="form" action="route-insert.php" enctype='multipart/form-data'> 
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ADD NEW Route</h4>
      </div>
      <div class="modal-body">
       <div class="form-group">
		   <label>Enter Route Name</label> 
	  <input type="text" name="name" id="name" placeholder="Enter Route Name" class="form-control" required />
	   </div>
		<div class="form-group">
	  <label>Enter Details</label>  
         <input type="text" name="details" id="details" placeholder="Enter Details" class="form-control" required />
	   </div> 
		  <div class="form-group">
		<label>Choose Map Image</label>  
       <input type="file" name="image" id="image" placeholder="Enter Map Image" class="form-control" required />
	   </div>
		<div class="form-group">
	  <label>Enter status</label>  
       <input type="text" name="status" id="status" placeholder="Enter status" class="form-control" required/>
	   </div>
      </div>
      <div class="modal-footer">
		 <button type="submit" class="btn btn-primary" id="submit" >Add record</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
	</div>
	</form>
  </div>
</div>
	  

	<div class="table table-responsive">  
                     <br />  
                                    
                </div>   
</div><!--end conatiner-->
		</div><!--end page wrapper-->
	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
		
<script type = "text/javascript">
	$(document).ready(function(){
		showUser();
		//Add New
		$(document).on('click', '#addnew', function(){
		    $name=$('#name').val();
            $details=$('#details').val();
            
	        $image=$('#image').val();
	        $status=$('#status').val();
				$.ajax({
					type: "POST",
					url: "route-insert.php",
					data: {
						name:$name,details:$details,image:$image,status:$status,
						add:1,
					},
					success: function(data){
						alert(data);
					}
				});			
		});
		//Delete
		$(document).on('click', '.delete', function(){
			$id=$(this).val();
			if(confirm("Are you sure you want to delete this?")){
				$.ajax({
					type: "POST",
					url: "route-delete.php",
					data: {
						id: $id,
						del: 1,
					},
					success: function(data){
						alert(data);
						showUser();
					}
				});
			}
		});
		//Update
		$(document).on('click', '.update', function(){
			$uid=$(this).val();
			$('#edit'+$uid).modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
			$name=$('#name-'+$uid).val();
            $details=$('#details-'+$uid).val();
            $bus=$('#bus-'+$uid).val();
	        $map=$('#map-'+$uid).val();
	        $status=$('#status-'+$uid).val();
				$.ajax({
					type: "POST",
					url: "route-update.php",
					data: {
						id: $uid,
						name:$name,details:$details,bus:$bus,map:$map,status:$status,
						update: 1,
					},
					success: function(data){
						alert(data);
						showUser();
					}
				});
		});
 
	});
 
	//Showing our Table
	function showUser(){
		$.ajax({
			url: 'route-fetch.php',
			type: 'POST',
			async: false,
			data:{
				show: 1
			},
			success: function(response){
				$('.table').html(response);
			}
		});
	}
 
</script>

 
  
		  
		  
		  
		  
		  
		  