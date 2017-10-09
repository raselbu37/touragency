<?php

$message='';
if(isset($_POST['btn'])){
require_once 'classes/Travel.php';
$travel=new travel();
$message=$travel->SaveBookingInfo($_POST);
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Travel and Tour</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/font-awesome.min.css" rel="stylesheet" />
<link href="css/style1.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
</head>
<body>
<div id="wrapper">

	<!--header-->
<div class="header-top">
        <div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
			<span class="text-danger"><i class="fa fa-2x fa-phone"></i><b style="color:#000;">Call Us +8801815547037</b><span>
			</div>
			
			
				<div class="col-md-6 col-sm-6">
						<div id="link" style="margin-top:10px;">
                      <ul>
                        <a href="#" style="text-decoration: none;border-radius:50%;" class="fa fa-facebook fa-2x"></a>
						<a href="#" style="text-decoration: none;border-radius:50%;"  class="fa fa-twitter fa-2x"></a>
						<a href="#" style="text-decoration: none;border-radius:50%;"  class="fa fa-google fa-2x"></a>
						<a href="#" style="text-decoration: none;border-radius:50%;"  class="fa fa-linkedin fa-2x"></a>
						<a href="#" style="text-decoration: none;border-radius:50%;"  class="fa fa-youtube fa-2x"></a>
						<a href="#" style="text-decoration: none;border-radius:50%;"  class="fa fa-instagram fa-2x"></a>
                      </ul>				
                       </div>
					</div>
				</div>
   			   
       </div>
	   </div>
         
 
 
		
<div class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myMenu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="" class="navbar-brand" style="padding: 0px 15px 0px 0px;">
                                <img src="images/logo.png" alt="logo" height="50"/>

                        </a>
                </div>
                <div class="collapse navbar-collapse" id="myMenu">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="package.php">Find A Package</a></li>
						<li><a href="guide.php">Find A Guide</a></li>
						<li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact </a></li>
						<li class="active"><a href="book.php">Book</a></li>

                    </ul>
					<nav class="navbar navbar-light navbar-right bg-faded searchArea">
						<form class="form-inline">
							<input class="form-control mr-sm-2" type="text" placeholder="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form>
				</nav>
                </div>
				
            </div>
        </div>
		<div id="row_one">
			<div class="container">

					<form class="well form-horizontal" action=" " method="post"  id="contact_form">
				<fieldset>

				<!-- Form Name -->
			
				<span class="text-danger"><i class="fa fa-2x fa-phone"></i><b style="color:#000;"><h4>Call Us +8801815547037 For Booking</h4></b><span>
				<legend>Or you can fill up the Booking  form  below</legend>

				<!-- Text input-->
					<h2 align="center" style="color:maroon;"><?php echo $message;?></h2>
				<div class="form-group">
				  <label class="col-md-4 control-label">First Name</label>  
				  <div class="col-md-4 inputGroupContainer">
				  <div class="input-group">
				  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input  name="first_name" placeholder="First Name" class="form-control"  type="text" required/>
					</div>
				  </div>
				</div>

				<!-- Text input-->

				<div class="form-group">
				  <label class="col-md-4 control-label" >Last Name</label> 
					<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
				  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input name="last_name" placeholder="Last Name" class="form-control"  type="text" required/>
					</div>
				  </div>
				</div>

				<!-- Text input-->
					   <div class="form-group">
				  <label class="col-md-4 control-label">E-Mail</label>  
					<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" required/>
					</div>
				  </div>
				</div>


				<!-- Text input-->
					   
				<div class="form-group">
				  <label class="col-md-4 control-label">Phone #</label>  
					<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
				  <input name="phone" placeholder="+8801815547037" class="form-control" type="text" required/>
					</div>
				  </div>
				</div>

				<!-- Text input-->
					  
				<div class="form-group">
				  <label class="col-md-4 control-label">Address</label>  
					<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
				  <input name="address" placeholder="Address" class="form-control" type="text" required/>
					</div>
				  </div>
				</div>

				<!-- Select Basic -->
				   
				<div class="form-group"> 
				  <label class="col-md-4 control-label">Packages (* maximum 2 person)</label>
					<div class="col-md-4 selectContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
					<select name="package_status" class="form-control selectpicker" required/>
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
							<textarea class="form-control" cols="25" rows="5" name="comment" placeholder="Plan Description" required/></textarea>
				  </div>
				  </div>
				</div>
				<!-- Success message -->

				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label"></label>
				  <div class="col-md-4">
					<button type="submit" name="btn" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
				  </div>
				</div>

				</fieldset>
				</form>
				
				</div>
			</div><!-- /.container -->
		</div>

			<section class="footer-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="text-center">
								Copyright @2017 rasel	
							</div>
						</div>
					</div>
				</div>
			</section>

			<script src="js/jquery.min.js"></script>
			 <script src="js/jquery-1.12.3.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/script.js"></script>
           <script src="js/owl.carousel.js"></script>
</div>
</body>
</html>