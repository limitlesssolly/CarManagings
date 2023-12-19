<?php
include_once "../App/Database/db.php";
class Admin
{
    public $ID;
    public $Name;
    public $Email;
    public $Phone;

    public function AddAdmin($name,$email, $phone,$password){
        $sql = "INSERT INTO admin (Name, Email, Phone,Password) VALUES ('$name','$email', '$phone','$password')";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return 0;
        }
         else{
            echo "error";
        }
    }

    public function getAdmins(){
		$sql = "SELECT * FROM admin";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return $result;
         }
         else{
            return "error";
         }
	}

    function editAdmin($id,$name,$email, $phone,$pass)
    {
        $sql = "UPDATE admin  SET Name='$name',Email='$email', Phone='$phone',Password='$pass' where ID='$id'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return 'true';
         }
         else{
            echo "error";
         }
        
    }

    function removeAdmin($id)
    {
        $sql = "DELETE FROM admin WHERE id='$id'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return 'sucessful';
         }
         else{
            echo "error";
         }
    }
    
    function readAdmin($id)
    {
        $sql = "SELECT * FROM admin where ID=".$id;
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return $result;
         }
         else{
            return "notfound";
         }
    }
    public function if_Emailexists($email)
    {
        $sql = "SELECT * FROM admin where Email='$email'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if (mysqli_num_rows($result) == 0) {
            return $result;
         }
         else{
            return "exists";
         }
    }

    public function getRatings() {
        $sql = "SELECT * FROM rates";
        $result = mysqli_query($GLOBALS['conn'], $sql);
    
        $ratings = array();
    
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                $ratings[] = $row;
            }
        }
    
        return $ratings;
    }
}
?>
