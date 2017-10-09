<?php 
Class User{
	protected $link;
	public function __construct(){
		$this->link=mysqli_connect('localhost','root','','db_travel');
	}
	public function saveUserInfo($data){
		 $sql = "INSERT INTO users (user_name,email,password)VALUES ('$data[user_name]','$data[email]','$data[password]')";
	   if(mysqli_query($this->link,$sql)){
		  $message='User Add Successfully.';
		  return $message;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
	  }
	}
	public function getAllUserInfo(){
		$sql="SELECT * FROM users";	
		if(mysqli_query($this->link,$sql)){
			$queryResult=mysqli_query($this->link,$sql);
			return $queryResult;
		}else{
			die('Query problem'.mysqli_error($this->link));
		}
		
	}
	public function getUserInfoById($id){
		$sql="SELECT * FROM users WHERE id='$id'";
		if(mysqli_query($this->link,$sql)){
			$queryResult=mysqli_query($this->link,$sql);
			return $queryResult;
		}else{
			die('Query problem'.mysqli_error($this->link));
		}
	}
	 public function updateUserInfo($data, $id) {
        
        $this->link = mysqli_connect('localhost','root','','db_travel');
        $sql = "UPDATE users SET user_name = '$data[user_name]', email = '$data[email]', password='$data[password]]' WHERE id='$id' ";
        if ( mysqli_query($this->link, $sql) )  {
            header('Location: manage-user.php');
        } else {
            die('Query problem'.mysqli_error($this->link));
        }
    }
	public function DeleteUserInfo($id){
        $this->link = mysqli_connect('localhost','root','','db_travel');
		$sql="DELETE FROM users WHERE id='$id'";
		if(mysqli_query($this->link,$sql)){
		  $message='Delete User Info Successfully.';
		  return $message;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
	  }
	}
	
}

?>