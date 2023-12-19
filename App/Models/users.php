<?php
require_once "../../../Views/View.php";
require "Model.php";
include_once "../../../App/Database/db.php";
include_once "../../../App/Database/Dbh.php";
class User extends Model {
    protected $id;
    protected $name;
    protected $email;
    protected $password;
    protected $phone;
    private $users;
    function __construct($name = "", $email = "", $phone = "", $password = "") {
        $this->db = $this->connect();
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;

    }
    function setID($id) {
        return $this->id = $id;
    }
    function getID() {
        return $this->id;
    }
    function setName($name) {
        return $this->name = $name;
    }
    function getName() {
        return $this->name;
    }
    function getEmail() {
        return $this->email;
    }
    function setEmail($email) {
        return $this->email = $email;
    }
    function getPhone() {
        return $this->phone;
    }
    function setPhone($phone) {
        return $this->phone = $phone;
    }
    function getPass() {
        return $this->password;
    }
    function setPass($password) {
        return $this->password = $password;
    }

    function getUser() {
        return $this->users;
    }
    function fillArray() {
        $this->users = array();
        $this->db = $this->connect();
        $result = $this->readUsers();
        while($row = $result->fetch_assoc()) {
            array_push($this->users, new User($row["Name"], $row["Email"], $row["Phone"], $row["Pass"]));
        }
    }

	function readUsers(){
		$sql = "SELECT * FROM users";
		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}
    public function insert($name,$email,$phone,$password) {
        try {
        $sql = "INSERT INTO users (Name,Email,Phone,Pass) VALUES ('$name','$email','$phone','$password')";
        if($this->db->query($sql) === true){
			echo "successfull";
			$this->fillArray();
		} else {
            echo "error";
 
        }}catch (Exception $e) {
            echo "Error:" . $e->getMessage();
        }

    }
        function readUser($id){
		$id=$_SESSION["id"];
        $sql = "SELECT * FROM `users` WHERE id=$id";
        $dbh = new Dbh();
        $result = $dbh->query($sql);
        if ($result->num_rows == 1){
            $row = $dbh->fetchRow($result);
            $this->name = $row["Name"];
            $_SESSION["Name"] = $row["Name"];
            $this->email = $row["Email"];
            $_SESSION["Email"] = $row["Email"];
            $this->phone = $row["Phone"];
            $_SESSION["Phone"] = $row["Phone"];
            $this->password = $row["Pass"];
            $_SESSION["Password"] = $row["Pass"];
                $this->fillArray();
        }
        else {
            $this->name = "";
            $this->password="";
            $this->age = "";
            $this->phone = "";
        }
      }
      
      function editUser($id, $name, $email, $phone, $password) {
        $id = $_SESSION["id"];
        $sql = "UPDATE `users` SET `Name`='$name', `Email`='$email', `Phone`='$phone', `Pass`='$password' WHERE `id`='$id'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            $this->readUser($id);

        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($GLOBALS['conn']);
        }
    }
    function deleteUser() {
        $id=$_SESSION["id"];
        $sql = "delete from users where `id`='$id'";
        if($this->db->query($sql) === true) {
            session_destroy();
            header("Location:signup.php");

        } else {
            echo "ERROR: Could not able to execute $sql. ";
        }
    }
    function LogOut($id) {
        $id = $_SESSION["id"];
        session_destroy();

    }
    function rate($name, $email, $rating, $review) {
        $sql = "INSERT INTO ratings (name, email, rating, review) VALUES ('$name','$email', '$rating','$review')";
        if($this->db->query($sql) === true) {
            echo "Rating Saved Successfully.";
            $this->fillArray();
        } else {
            echo "Fee Mashakel";
        }
    }
function history(){
    $email=$_SESSION["Email"];
$dbh = new Dbh();
    $sql = "SELECT `PickupDate`, `pickupTime`, `pickupLocation`, `pickupDestination`,  `DriverID` FROM rides WHERE `UserEmail` = '$email'";
    $dbh = new Dbh();
    $result = $dbh->query($sql);
    $rowsCount = $result->num_rows;
for ($j = 1; $j <= $rowsCount; $j++) {
    $row = $dbh->fetchRow($result);

    if ($row) {
        $driverID = $row["DriverID"];
        $pickupLoc = $row["pickupLocation"];
        $Dest = $row["pickupDestination"];
        $time = $row["pickupTime"];
        $date = $row["PickupDate"];

        $history[$j] = array(
          $driverID => $driverID,
          $pickupLoc => $pickupLoc,
          $Dest => $Dest,
          $time => $time,
          $date => $date
        );
    } else {
        echo "There is no previous ride for you with us.";
    }
}
}
    static function getRatings(){
        $sql = "SELECT * FROM ratings";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        return $result;
     }

 }
?>