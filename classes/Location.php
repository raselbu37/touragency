<?php

class Location {
    protected $link;
    
    public function __construct() {
        $this->link = mysqli_connect('localhost', 'root', '', 'db_travel');
    }
    public function allPublishedLocation() {
         $sql= "SELECT * FROM location WHERE publication_status = 1";
        $getData = 'Hai';
        $queryResult = $this->queryExecute($sql, $getData);
        return $queryResult;
    }
    
    
    
    public function queryExecute($sql, $getData=NULL) {
        if(mysqli_query($this->link, $sql)) {
            if($getData) {
                $queryResult = mysqli_query($this->link, $sql);
                return $queryResult;
            } else {
                $message = "Location info save successfully";
                return $message;
            }
        } else {
            die('Query problem'.  mysqli_error($this->link));
        }
    }
	
	
	
	
	
	
		
	
}
