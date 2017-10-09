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


$x=$_GET['id'];
require_once '../classes/Travel.php';
$travel=new Travel();
$queryResult=$travel->getGuidehireInfoById($x);
$guidehiregInfo=mysqli_fetch_assoc($queryResult);

if(isset($_POST['btn'])){
	$travel->updateGuidehireInfo($_POST, $x);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Tour And TravellsAdmin</title>
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
			
 <form class="well form-horizontal" action=" " method="post"  id="contact_form" style="height:600px;">
				<fieldset>

	
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label">First Name</label>  
				  <div class="col-md-4 inputGroupContainer">
				  <div class="input-group">
				  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input  name="first_name" placeholder="First Name" value="<?php echo $guidehiregInfo['first_name'];?>" class="form-control"  type="text" required/>
					</div>
				  </div>
				</div>

				<!-- Text input-->

				<div class="form-group">
				  <label class="col-md-4 control-label" >Last Name</label> 
					<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
				  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input name="last_name" placeholder="Last Name" value="<?php echo $guidehiregInfo['last_name'];?>"class="form-control"  type="text" required/>
					</div>
				  </div>
				</div>

				<!-- Text input-->
					   <div class="form-group">
				  <label class="col-md-4 control-label">E-Mail</label>  
					<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				  <input name="email" placeholder="E-Mail Address" value="<?php echo $guidehiregInfo['email'];?>"class="form-control"  type="text" required/>
					</div>
				  </div>
				</div>


				<!-- Text input-->
					   
				<div class="form-group">
				  <label class="col-md-4 control-label">Phone #</label>  
					<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
				  <input name="phone" placeholder="+8801815547037" value="<?php echo $guidehiregInfo['phone'];?>"class="form-control" type="text" required/>
					</div>
				  </div>
				</div>

				<!-- Text input-->
					  
				<div class="form-group">
				  <label class="col-md-4 control-label">Address</label>  
					<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
				  <input name="address" placeholder="Address" value="<?php echo $guidehiregInfo['address'];?>" class="form-control" type="text" required/>
					</div>
				  </div>
				</div>

				<!-- Select Basic -->
				   
				<div class="form-group"> 
				  <label class="col-md-4 control-label">Packages (* maximum 2 person)</label>
					<div class="col-md-4 selectContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
					<select name="package_status" value="<?php echo $guidehiregInfo['package_status'];?>" class="form-control selectpicker" required/>
					  <option>Please select your packages</option>
					  <option>Dhaka (TK 7000/-)</option>
					  <option>Comilla (TK 8000/-)</option>
					  <option >Chittagong (TK 9000/-)</option>
					  <option >Rangamati (TK 10000/-)</option>
					  <option >Coxs Bazar (TK 12000/-)</option>
					  <option >Saint Martin (TK 15000/-)</option>
					</select>
				  </div>
				</div>
				</div>
					
				<div class="form-group">
				  <label class="col-md-4 control-label">What About Your Plan for Your Tour?</label>
					<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							<textarea class="form-control" cols="25" rows="5" name="comment" placeholder="Plan Description" required/><?php echo $guidehiregInfo['comment'];?></textarea>
				  </div>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="col-md-4 control-label">Publication Status</label>
					<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
					<select name="publication_status" value="<?php echo $guidehiregInfo['publication_status'];?>" class="form-control selectpicker" required/>
					  <option>--publication Status--</option>
					  <option value="Accept">Accept</option>
					  <option value="pending">pending</option>				  
					  </div>
				  </div>
				</div>
				<!-- Success message -->

				<!-- Button -->
				<div class="form-group">
				  <div class="col-md-4">
				  <div class="input-group">
					<input type="submit" name="btn" value="Update" class="form-control" class="btn btn-danger pull-right" style='margin-top:10px;'>
				  </div>
				  </div>
				</div>

				</fieldset>
				</form>
				

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