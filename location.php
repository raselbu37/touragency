<?php
session_start();
require_once 'classes/Location.php';
$app = new Location();
$queryResult = $app->allPublishedLocation();


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
<link rel="stylesheet" href="css/default1.css">

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
						<li class="active"><a href="location.php">Location</a></li>
						<li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact </a></li>

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


		<hr/>
		<div class="container">
		<h1 style="text-align:center;">Our Beautifull Places</h1>
		<div id="row_one">
			<div class="container thumbs">
			<?php  while($row = mysqli_fetch_assoc($queryResult)){ ?>
				  <div class="col-sm-12 col-md-12">
					<div class="col-sm-3">
					<img src="admin/<?php echo $row['image'];?>" height="150" width="200" style="margin-bottom:25px;"/>

					</div>
					<div class="col-sm-6">
					<div class="heading">
					<class="text pull-left"><h3><?php echo $row['location_title'];?></h3>
					</div>
					 <div class="caption">
						<p style="text-align:justify;"><?php echo $row['location_description'];?></p>
						<div class="btn-toolbar text-center">
						  <a href="#" role="button" class="btn btn-danger pull-right">More</a>
						</div>
					  </div>
					</div>
				  </div>
				  <?php }?>
				  </div>
			</div>
				</br> 
		</div>
		<hr/>
			<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    Copyright ©2017 rasel	
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