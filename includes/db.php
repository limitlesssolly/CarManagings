<?php
// $sql = "DELETE FROM drivers WHERE fullname = $fullname";

// if ($conn->query($sql) === TRUE) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . $conn->error;
// } 
class DB {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "24sevenlimousine";
	public $conn;

	function __construct() {
		$this->conn = $this->connectDB();
	}

	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
    if(!$conn){
      die("Connection failed: " . mysqli_connect_error());
    }
		return $conn;
	}
}