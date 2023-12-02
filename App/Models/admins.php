<?php
require_once 'Dbh.php';

class AdminModel
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = new Dbh(); // Assuming you have a database connection class
    }

    // Example method to get admin details by ID
    public function getAdminById($adminId)
    {
        $sql = "SELECT * FROM admin WHERE id = ?";
        $params = [$adminId];
        return $this->dbh->queryOne($sql, $params);
    }

    // Example method to update admin details
    public function updateAdminDetails($adminId, $newData)
    {
        $sql = "UPDATE admin SET name = ?, email = ? WHERE id = ?";
        $params = [$newData['name'], $newData['email'], $adminId];
        return $this->dbh->execute($sql, $params);
    }

    // Add more methods as needed, such as adding/removing users, managing vehicles, etc.
}
?>
