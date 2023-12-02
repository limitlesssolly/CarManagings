<?php
require_once 'Dbh.php';

class AdminModel
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = new Dbh();
    }

    public function getAllCars()
    {
        $sql = "SELECT * FROM cars";
        return $this->dbh->queryAll($sql);
    }


    public function getCarById($carId)
    {
        $sql = "SELECT * FROM cars WHERE id = ?";
        $params = [$carId];
        return $this->dbh->queryOne($sql, $params);
    }

    public function addCar($carDetails)
    {
        $sql = "INSERT INTO cars (brand, model, capacity) VALUES (?, ?, ?)";
        $params = [$carDetails['brand'], $carDetails['model'], $carDetails['capacity']];
        return $this->dbh->execute($sql, $params);
    }
    public function updateCar($carId, $newDetails)
    {
        $sql = "UPDATE cars SET brand = ?, model = ?, capacity = ? WHERE id = ?";
        $params = [$newDetails['brand'], $newDetails['model'], $newDetails['capacity'], $carId];
        return $this->dbh->execute($sql, $params);
    }

    public function deleteCar($carId)
    {
        $sql = "DELETE FROM cars WHERE id = ?";
        $params = [$carId];
        return $this->dbh->execute($sql, $params);
    }

    public function getAllUsers()
    {
        $sql = "SELECT * FROM user";
        return $this->dbh->queryAll($sql);
    }


    public function getUserById($carId)
    {
        $sql = "SELECT * FROM user WHERE id = ?";
        $params = [$carId];
        return $this->dbh->queryOne($sql, $params);
    }

    public function addUser($userData)
{
    $sql = "INSERT INTO users (firstname,lastname,username, password, email) VALUES (?, ?, ?, ?, ?)";
    $params = [$userData['firstname'],$userData['lastname'],$userData['username'], $userData['password'], $userData['email']];
    return $this->dbh->execute($sql, $params);
}
public function editUser($userId, $newUserData)
{
    $sql = "UPDATE users SET username = ?, password = ?, email = ? WHERE id = ?";
    $params = [$newUserData['username'], $newUserData['password'], $newUserData['email'], $userId];
    return $this->dbh->execute($sql, $params);
}

public function deleteUser($userId)
{
    $sql = "DELETE FROM users WHERE id = ?";
    $params = [$userId];
    return $this->dbh->execute($sql, $params);
}

public function assignTripToDriver($tripId, $driverId)
{
    $sql = "UPDATE trips SET driver_id = ? WHERE id = ?";
    $params = [$driverId, $tripId];
    return $this->dbh->execute($sql, $params);
}
}
?>
