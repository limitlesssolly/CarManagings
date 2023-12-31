<?php
require_once "config.php";
class DBh{
	private $servername;
	private $username;
	private $password;
	private $dbname;
	private $conn;
	private $result;
	public $sql;

	function __construct() {
		$this->servername = DB_SERVER;
		$this->username = DB_USER;
		$this->password = DB_PASS;
		$this->dbname = DB_DATABASE;
		$this->connect();
	}

	public function connect(){
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		}
		return $this->conn;
	}
	//3ashan te excute ay quere
	public function execute($sql, $params)
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($params);
    }

	//3ashan tfetch row wahed mene el database
	public function queryOne($sql, $params)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetch();
    }
	public function getConn(){
		return $this->conn;
	}

	function query($sql){
		if (!empty($sql)){
			$this->sql = $sql;
			$this->result = $this->conn->query($sql);
			return $this->result;
		}
		else{
			return false;
		}
	}

	function fetchRow($result=""){
		if (empty($result)){ 
			$result = $this->result; 
		}
		return $result->fetch_assoc();
	}
	public function fetchAll($result = "") {
		if (empty($result)) {
			$result = $this->result;
		}
		return $result->fetch_all(MYSQLI_ASSOC);
	}
	function __destruct(){
		$this->conn->close();
	}
}

?>