<?php
session_start();
$userId=isset($_SESSION['userId']);
if($userId==NULL){
	header('Location:dashboard.php');
}

if(isset($_GET['logout'])){
	require_once '../classes/Login.php';
	$login=new Login();
	$login->userLogout();
}





require_once '../classes/Travel.php';
$travel=new Travel();
if(isset($_GET['a'])){
		$id=$_GET['id'];
		$travel->getAllPackageInfoById($id);
		
}

if(isset($_POST['btn'])){
	$travel->updatePackageInfo($_POST);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Tour And Travells Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php">Tour And Travells</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rasel<b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="#">Profile</a></li>
	                          <li><a href="?logout=true">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-3" style="height:600px;">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                   
				    <li class="current"><a href="dashboard.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="add-package.php"><i class="glyphicon glyphicon-calendar"></i>Add packages</a></li>
                    <li><a href="manage-package.php"><i class="glyphicon glyphicon-stats"></i>View All Packages</a></li>
	                 <li><a href="add-guide.php"><i class="glyphicon glyphicon-list"></i>Add Guide Info</a></li>
                    <li><a href="manage-guide.php"><i class="glyphicon glyphicon-list"></i>View All Guide Info</a></li>
                    <li><a href="view-contact.php"><i class="glyphicon glyphicon-record"></i>View All Contact Info</a></li>
					<li><a href="view-booking.php"><i class="glyphicon glyphicon-record"></i>View All Booking Info</a></li>
					<li><a href="view-guidehire.php"><i class="glyphicon glyphicon-record"></i>View All Guide Hire Info</a></li>
					<li><a href="add-location.php"><i class="glyphicon glyphicon-record"></i>Add Location Info</a></li>
					<li><a href="manage-location.php"><i class="glyphicon glyphicon-list"></i>View All Location Info</a></li>
                    <li><a href="?logout=true"><i class="glyphicon glyphicon-tasks"></i>Logout</a></li>
				   
                </ul>
             </div>
		  </div>
		  <div class="container">
		  <div class="col-md-9">
		  	<div class="row">
			
			<div class="well">
                         
						 
						 <h2 class="text-center text-warning">Add Package Content Here</h2>
						 

                            <div class="panel-body">

				        <form action="" method="post" enctype="multipart/form-data">

						<div class="form-group">
                            <label>Image:</label> 
								<input type="file" name="image" accept="image/*">                        
								<img src="<?php echo $packInfo['image'];?>" height="50" width="50">
								</div>

						  <div class="form-group">
                            <label>Package Title:</label> 
                            <input type="text" name="package_title" value="<?php echo $packInfo['package_title'];?>" class="form-control">
                         </div>
                             <div class="form-group">
                            <label>Package Description:</label> 
                            <textarea name="package_description" cols="30" rows="5" class="form-control"><?php echo $packInfo['package_description'];?></textarea>
                         </div>
                             <div class="form-group">
                            <label>publication Status:</label>
                              <select name="publication_status" value="<?php echo $packInfo['publication_status'];?>" class="form-control">
                                  <option>---Select Publication Status---</option>
                                  <option value="1">Published</option>
                                  <option  value="0">Unpublished</option>
                              </select>
                            </div>
							
                        <div class="form-group">
                            <input type="submit" name="btn" id="submit" value="Update Package Info" class="btn btn-primary">
							 </div>
							</form>
                        </div>
                   </div>
				   </div>
		  		
		  </div>
		</div>
    </div>
</div>
    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2017 <a href='#'>Rasel</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>