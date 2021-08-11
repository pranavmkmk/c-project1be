<?php
class Database{
	
	private $host  = 'database-2.ctywx5ws6fek.ap-south-1.rds.amazonaws.com';
    private $user  = 'admin';
    private $password   = "admin123";
    private $database  = "db1"; 
    
    public function getConnection(){		
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>
