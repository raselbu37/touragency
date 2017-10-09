<?php
class Login{
	protected $link;
	public function __construct(){
		$this->link=mysqli_connect('localhost','root','','db_travel');
		
	}
	public function adminLoginCheck($data){
		$password=md5($data['password']);
	$sql="SELECT * FROM users WHERE email='$data[email]' AND password='$password'";
	if(mysqli_query($this->link,$sql)){
		$queryResult=mysqli_query($this->link,$sql);
		$userInfo=mysqli_fetch_assoc($queryResult); 
		if($userInfo){
			session_start();
			$_SESSION['userId']=$userInfo['id'];
			$_SESSION['userName']=$userInfo['name'];
			
			header('Location:dashboard.php');
		}else{
			$message='Your Email And Password Is Incorrect.';
			return $message;
		}
		//echo '<pre>';.
		
		
		//print_r($userInfo);
	}else{
		die('Query problem'.mysqli_error($this->link));
	}
	}
	
		  public function userLogout() {
        session_start();
        unset($_SESSION['userId']);
        unset($_SESSION['userName']);
        
        header('Location: index.php');
    }
}






?>