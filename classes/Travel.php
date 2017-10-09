<?php 
Class Travel{
	protected $link;
	public function __construct(){
		$this->link=mysqli_connect('localhost','root','','db_travel');
	}
	public function saveTravelInfo($data){
	   
	  
	  
	  if(isset($_POST['btn'])) {
      
        $directory = 'pack_images/';
        $targetFile =$directory.$_FILES['image']['name'];
        $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);
        $fileSize = $_FILES['image']['size']; 
       $check  = getimagesize($_FILES['image']['tmp_name']);
       if($check) {
           if (file_exists($targetFile) ) {
               die('image already exist. please try once again');
           } else {
               
               if( $fileType != 'jpg' && $fileType != 'gif') {
                   die('File Type not match');
               } else {
                   if($fileSize> 500000) {
                       die('File size is too large');
                   } else {
                     move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
					$sql = "INSERT INTO packages (package_title,package_description,publication_status,image)VALUES('$data[package_title]','$data[package_description]','$data[publication_status]','$targetFile')";
					if($queryResult=mysqli_query($this->link,$sql)){
					$message='image Uploaded and Save Successfully.';
					return $message;
					}else{
					if(mysqli_query($this->link,$sql)){
					$message='Package Info Save Successfully.';
					return $message;
				}else{
					die('Query Problem'.mysqli_error($this->link));
					}
				}
				}
			}
		}
		
		
	}else{
		die('This is not an Image,please Try Again');
	}
	
}




	  
	  
	}
	
	
	public function getAllPackageInfo(){
		 $sql = "SELECT * FROM packages";
	  if(mysqli_query($this->link,$sql)){
		 $queryResult=mysqli_query($this->link,$sql);
		  return $queryResult;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
	  }	
	  }
	  
		 

	public function getPackageInfoById($id){
		$sql="SELECT * FROM packages WHERE id='$id'";
		if(mysqli_query($this->link,$sql)){
		  $queryResult=mysqli_query($this->link,$sql);
		  return $queryResult;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
	}
	  }
	  
	 public function updatePackageInfo($data, $id) {
        
        $this->link = mysqli_connect('localhost','root','','db_travel');
        $sql = "UPDATE packages SET package_title = '$data[package_title]', package_description = '$data[package_description]', publication_status='$data[publication_status]', image='$targetFile' WHERE id='$id' ";
        if ( mysqli_query($this->link, $sql) )  {
            header('Location: manage-package.php');
        } else {
            die('Query problem'.mysqli_error($this->link));
        }
    }
	public function DeletePackageInfo($id){
        $this->link = mysqli_connect('localhost','root','','db_travel');
		$sql="DELETE FROM packages WHERE id='$id'";
		if(mysqli_query($this->link,$sql)){
		  $message='Delete Package Info Successfully.';
		  return $message;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
	  }
	}


	
/***********ContactUs**********/

	public function SaveContactInfo($data){
		$sql="INSERT INTO contacts (full_name,phone_number,email_address,message) VALUES('$data[full_name]','$data[phone_number]','$data[email_address]','$data[message]')";
		if(mysqli_query($this->link,$sql)){
			$message='Message Successfully Submitted';
			return $message;
		}else{
			die('Query problem'.mysqli_error($this->link));
		}
		
	}
	
	public function getAllContactInfo(){
		 $sql = "SELECT * FROM contacts";
	  if(mysqli_query($this->link,$sql)){
		 $queryResult=mysqli_query($this->link,$sql);
		  return $queryResult;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
	  }	
	  }
	  
	  public function getContactInfoById($id){
		$sql="SELECT * FROM contacts WHERE id='$id'";
		if(mysqli_query($this->link,$sql)){
		  $queryResult=mysqli_query($this->link,$sql);
		  return $queryResult;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
	}
	  }
	  
	
	public function DeleteContactInfo($id){
        $this->link = mysqli_connect('localhost','root','','db_travel');
		$sql="DELETE FROM contacts WHERE id='$id'";
		if(mysqli_query($this->link,$sql)){
		  $message='Delete Contact Info Successfully.';
		  return $message;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
	  }
	}
	/***********Booking************/
	public function SaveBookingInfo($data){
		$sql="INSERT INTO booking (first_name,last_name,email,phone,address,package_status,comment,publication_status) VALUES('$data[first_name]','$data[last_name]','$data[email]','$data[phone]','$data[address]','$data[package_status]','$data[comment]','$data[publication_status]')";
		if(mysqli_query($this->link,$sql)){
			$message='Your Information is Submitted.Wait For Confirmation!Thank You.';
			return $message;
		}else{
			die('Query problem'.mysqli_error($this->link));
		}
		
	}
	
	public function getAllBookingInfo(){
		 $sql = "SELECT * FROM booking";
	  if(mysqli_query($this->link,$sql)){
		 $queryResult=mysqli_query($this->link,$sql);
		  return $queryResult;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
		}	
	  }
	  public function getBookingInfoById($id){
		$sql="SELECT * FROM booking WHERE id='$id'";
		if(mysqli_query($this->link,$sql)){
		  $queryResult=mysqli_query($this->link,$sql);
		  return $queryResult;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
		}
	  }
	  
	  public function updateBookingInfo($data, $id) {
        
        $this->link = mysqli_connect('localhost','root','','db_travel');
        $sql = "UPDATE booking SET first_name = '$data[first_name]', last_name = '$data[last_name]', email = '$data[email]', phone = '$data[phone]', address = '$data[address]', package_status = '$data[package_status]', comment = '$data[comment]', publication_status='$data[publication_status]' WHERE id='$id' ";
        if ( mysqli_query($this->link, $sql) )  {
            header('Location: view-booking.php');
        } else {
            die('Query problem'.mysqli_error($this->link));
        }
    }
	  
	public function DeleteBookingInfo($id){
        $this->link = mysqli_connect('localhost','root','','db_travel');
		$sql="DELETE FROM booking WHERE id='$id'";
		if(mysqli_query($this->link,$sql)){
		  $message='Delete booking Info Successfully.';
		  return $message;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
	  }
	}
	
	/***********Guide HIre************/
	public function SaveGuidehireInfo($data){
		$sql="INSERT INTO guidehire (first_name,last_name,email,phone,address,package_status,comment) VALUES('$data[first_name]','$data[last_name]','$data[email]','$data[phone]','$data[address]','$data[package_status]','$data[comment]')";
		if(mysqli_query($this->link,$sql)){
			$message='Your Information is Submitted.Wait For Confirmation!Thank You.';
			return $message;
		}else{
			die('Query problem'.mysqli_error($this->link));
		}
		
	}
	
	public function getAllGuidehireInfo(){
		 $sql = "SELECT * FROM guidehire";
	  if(mysqli_query($this->link,$sql)){
		 $queryResult=mysqli_query($this->link,$sql);
		  return $queryResult;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
	  }	
	  }
	  
	  public function getGuidehireInfoById($id){
		$sql="SELECT * FROM guidehire WHERE id='$id'";
		if(mysqli_query($this->link,$sql)){
		  $queryResult=mysqli_query($this->link,$sql);
		  return $queryResult;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
		}
	  }
	  
	  public function updateGuidehireInfo($data, $id) {
        
        $this->link = mysqli_connect('localhost','root','','db_travel');
        $sql = "UPDATE guidehire SET first_name = '$data[first_name]', last_name = '$data[last_name]', email = '$data[email]', phone = '$data[phone]', address = '$data[address]', package_status = '$data[package_status]', comment = '$data[comment]', publication_status='$data[publication_status]' WHERE id='$id' ";
        if ( mysqli_query($this->link, $sql) )  {
            header('Location: view-guidehire.php');
        } else {
            die('Query problem'.mysqli_error($this->link));
        }
    }
	  
	public function DeleteGuidehireInfo($id){
        $this->link = mysqli_connect('localhost','root','','db_travel');
		$sql="DELETE FROM guidehire WHERE id='$id'";
		if(mysqli_query($this->link,$sql)){
		  $message='Delete guidehire Info Successfully.';
		  return $message;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
	  }
	}
	/******* Add location ***/
		public function saveLocationInfo($data){
	   
	  
	  
	  if(isset($_POST['btn'])) {
      
        $directory = 'location_images/';
        $targetFile =$directory.$_FILES['image']['name'];
        $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);
        $fileSize = $_FILES['image']['size']; 
       $check  = getimagesize($_FILES['image']['tmp_name']);
       if($check) {
           if (file_exists($targetFile) ) {
               die('image already exist. please try once again');
           } else {
               
               if( $fileType != 'jpg' && $fileType != 'gif') {
                   die('File Type not match');
               } else {
                   if($fileSize> 500000) {
                       die('File size is too large');
                   } else {
                     move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
					$sql = "INSERT INTO location (location_title,location_description,publication_status,image)VALUES('$_POST[location_title]','$_POST[location_description]','$_POST[publication_status]','$targetFile')";
					if($queryResult=mysqli_query($this->link,$sql)){
					$message='image Uploaded and Save Successfully.';
					return $message;
					}else{
					if(mysqli_query($this->link,$sql)){
					$message='Location Info Save Successfully.';
					return $message;
				}else{
					die('Query Problem'.mysqli_error($this->link));
					}
				}
				}
			}
		}

		
		
	}else{
		die('This is not an Image,please Try Again');
		}
	
	}
}
	public function getAllLocationInfo(){
		 $sql = "SELECT * FROM location";
	  if(mysqli_query($this->link,$sql)){
		 $queryResult=mysqli_query($this->link,$sql);
		  return $queryResult;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
	  }	
	  }
	  
	public function getLocationInfoById($id){
		$sql="SELECT * FROM location WHERE id='$id'";
		if(mysqli_query($this->link,$sql)){
		  $queryResult=mysqli_query($this->link,$sql);
		  return $queryResult;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
	}
	  }
	  
	 public function updateLocationInfo($data, $id) {
        
        $this->link = mysqli_connect('localhost','root','','db_travel');
        $sql = "UPDATE location SET location_title = '$data[location_title]', location_description = '$data[location_description]', publication_status='$data[publication_status]', image='$targetFile' WHERE id='$id' ";
        if ( mysqli_query($this->link, $sql) )  {
            header('Location: manage-location.php');
        } else {
            die('Query problem'.mysqli_error($this->link));
        }
    }
	public function DeleteLocationInfo($id){
        $this->link = mysqli_connect('localhost','root','','db_travel');
		$sql="DELETE FROM location WHERE id='$id'";
		if(mysqli_query($this->link,$sql)){
		  $message='Delete location Info Successfully.';
		  return $message;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
	  }
	}



	  
	  

	
}
?>