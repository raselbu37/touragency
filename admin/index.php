<?php
session_start();
$userId=isset($_SESSION['userId']);
if($userId){
	header('Location:dashboard.php');
	
}

$message='';
if(isset($_POST['btn'])){
require_once '../classes/Login.php';
$login=new Login();
$message=$login->adminLoginCheck($_POST);
}
?>
<h1 align="center" class="text text-danger"><?php echo $message; ?></h1>

<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

  </head>
  <body class="login-bg">
	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
						<form action="" method="post">
			                <h6>Sign In</h6>
							<div class="form-group">
			                <input class="form-control" type="text" name="email" placeholder="Enter Your Email">
							</div>
							<div class="form-group">
							<input class="form-control" type="password" name="password" placeholder="Enter Your Password">
							</div>
							<div class="form-group">

                                    <div class="checkbox">
                                        <label><input type="checkbox" name="remember" value="Remember Me">Remember Me</label>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <input type="submit" name="btn" value="Sign In" class="btn btn-primary" style="width:100%">
                                </div> 
						</form>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>