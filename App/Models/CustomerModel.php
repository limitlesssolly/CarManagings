<?php
include_once "../App/Database/db.php";

class Customer
{
    public $ID;
    public $Name;
    public $Email;
    public $Phone;

    public function AddCustomer($name, $email, $phone, $password)
    {
        $sql = "INSERT INTO customers (Name, Email, Phone, Password) VALUES ('$name', '$email', '$phone', '$password')";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return 0;
        } else {
            echo "error";
        }
    }

    public function getCustomers()
    {
        $sql = "SELECT * FROM customers";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return $result;
        } else {
            return "error";
        }
    }

    public function editCustomer($id, $name, $email, $phone, $pass)
    {
        $sql = "UPDATE customers SET Name='$name', Email='$email', Phone='$phone', Password='$pass' WHERE ID='$id'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return 'true';
        } else {
            echo "error";
        }
    }

    public function removeCustomer($id)
    {
        $sql = "DELETE FROM customers WHERE id='$id'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return 'successful';
        } else {
            echo "error";
        }
    }

    public function readCustomer($id)
    {
        $sql = "SELECT * FROM customers WHERE ID=" . $id;
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return $result;
        } else {
            return "notfound";
        }
    }

  
}
?>
