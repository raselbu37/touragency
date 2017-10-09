<?php 
Class Guide{
	protected $link;
	public function __construct(){
		$this->link=mysqli_connect('localhost','root','','db_travel');
	}
	public function saveGuideInfo($data){
	   
	  
	  
	  if(isset($_POST['btn'])) {
      
        $directory = 'guide_images/';
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
					$sql = "INSERT INTO guideed (guide_name,guide_description,publication_status,image)VALUES('$_POST[guide_name]','$_POST[guide_description]','$_POST[publication_status]','$targetFile')";
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
	
	
	public function getAllGuideInfo(){
		 $sql = "SELECT * FROM guideed";
	  if(mysqli_query($this->link,$sql)){
		 $queryResult=mysqli_query($this->link,$sql);
		  return $queryResult;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
	  }	
	  }
	  
		 

	public function getGuideInfoById($id){
		$sql="SELECT * FROM guideed WHERE id='$id'";
		if(mysqli_query($this->link,$sql)){
		  $queryResult=mysqli_query($this->link,$sql);
		  return $queryResult;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
	}
	  }
	  
	 public function updateGuideInfo($data, $id) {
        
        $this->link = mysqli_connect('localhost','root','','db_travel');
        $sql = "UPDATE guideed SET guide_name = '$data[guide_name]',  guide_description= '$data[guide_description]', publication_status='$data[publication_status]', image='$targetFile' WHERE id='$id' ";
        if ( mysqli_query($this->link, $sql) )  {
            header('Location: manage-guide.php');
        } else {
            die('Query problem'.mysqli_error($this->link));
        }
    }
	public function DeleteGuideInfo($id){
        $this->link = mysqli_connect('localhost','root','','db_travel');
		$sql="DELETE FROM guideed WHERE id='$id'";
		if(mysqli_query($this->link,$sql)){
		  $message='Delete Guide Info Successfully.';
		  return $message;
	  }else{
		  die('Query Problem'.mysqli_error($this->link));
	  }
	}
}

?>