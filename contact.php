 y76<?php
session_start();
require_once 'classes/Application.php';
$app = new Application();
$queryResult = $app->allPublishedTravel();


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
						<li><a href="location.php">Location</a></li>
						<li><a href="gallery.php">Gallery</a></li>
                        <li class="active"><a href="contact.php">Contact </a></li>

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

					<section>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="panel panel-default">

                                            <div class="panel-body pedding-bottom-zero">
                                                <!-- Content Row -->
                                                <div class="row">
                                                    <!-- Map Column -->
                                                    <div class="col-md-8">
                                                        <!-- Embedded Google Map -->
                                                        <h2 class="text text-danger">Our Google Map Location</h2>
													<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.597383186224!2d90.3652189144463!3d23.7617326845837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf57c94aacb5%3A0x26708c3125d7d2be!2sBangladesh+University!5e0!3m2!1sen!2sbd!4v1502460441098" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>													</div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
													<div class="panel-group">
                                                        <h3 class="text text-danger">Contact Details</h3>
                                                        <hr/>
                                                        <span><b>House No : </b> 1 / 15</span> <br/>
                                                        <span><b>Road No : </b> 01 </span> <br/>
                                                        <span> 1/15 Iqbal Road,Mohammadpur,Dhaka-1207 </span> <br/>
                                                        <span class="glyphicon glyphicon-phone"></span> : +8801815547037<br/>
                                                        <span class="glyphicon glyphicon-envelope"></span> : tour@gmail.com<br/>
                                                        <div class="con-info clearfix">
                                                            <i class="fa fa-fax fa-lg"></i>
                                                            <span>fax: +880-1815547037</span>
                                                        </div>
                                                        <p><i class="fa fa-clock-o"></i> 
                                                            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                                                        <ul class="list-unstyled list-inline list-social-icons">
                                                            <li>
                                                                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                                                            </li>
                                                        </ul>
														
														
														
				

                                                    </div>
													
													
													
													
                                                    </div>
													<!--this is live chat start-->

	

										<!--this is live chat start-->


												</div>

                                                <!-- Contact Form -->
                                                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                                         
                                                    <div class="col-md-8">
                                                               <div class="row">
                                                        <h3 class="text text-primary">Full Free to Send us a Message</h3>
                                                        <form action="" method="post" enctype="multipart/form-data" >
                                                            <div class="control-group form-group">
                                                                <div class="controls">
                                                                    <label>Full Name:</label>
                                                                    <input type="text" name="full_name"   placeholder="Please enter your name." class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <div class="control-group form-group">
                                                                <div class="controls">
                                                                    <label>Phone Number:</label>
                                                                    <input type="number"  name="phone_number"   placeholder="Please enter your phone number." class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <div class="control-group form-group">
                                                                <div class="controls">
                                                                    <label>Email Address:</label>
                                                                    <input type="email" name="email_address"  placeholder="Please enter your email address." class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <div class="control-group form-group">
                                                                <div class="controls">
                                                                    <label>Message:</label>
                                                                    <textarea name="message" rows="10" cols="100"    placeholder="Please enter your message" class="form-control" required/></textarea>
                                                                </div>
                                                            </div>
													 <div class="control-group form-group">
													<div class="controls">
                                                           <label></label>
                                                           <input type="submit" name="btn" value="Send Message" class="btn btn-primary" class="form-control" required/>
                                                </div>
												</div>
												 </form>
                                                <!-- /.row -->

                                            </div>
											<?php
														
														$message='';
														if(isset($_POST['btn'])){
														require_once 'classes/Travel.php';
														$travel=new Travel();
														$message=$queryResult=$travel->saveContactInfo($_POST);
														}
														?>
                                                    </div>
											
											
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

		
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
	
				<script>
				
				</script>

</div>
</body>
</html>