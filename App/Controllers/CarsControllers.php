<?php

class CarController extends Controller
{
    private $db;


    public function getCars()
    {
        try {
            $query = "SELECT * FROM cars";
            $statement = $this->db->query($query);
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            throw new Exception('Error fetching cars: ' . $e->getMessage());
        }
    }

    public function Add($id, $model, $year, $color, $fuelType)
    {
        try {
            $query = "INSERT INTO cars (id, model, year, color, fuel_type) VALUES (?, ?, ?, ?, ?)";
            $statement = $this->db->prepare($query);
            $statement->execute([$id, $model, $year, $color, $fuelType]);

            return ['success' => true, 'message' => 'Car added successfully'];
        } catch (PDOException $e) {
            throw new Exception('Error adding car: ' . $e->getMessage());
        }
    }

    public function Edit($id, $model, $year, $color, $fuelType)
    {
        try {
            $query = "UPDATE cars SET model=?, year=?, color=?, fuel_type=? WHERE id=?";
            $statement = $this->db->prepare($query);
            $statement->execute([$model, $year, $color, $fuelType, $id]);

            return ['success' => true, 'message' => 'Car edited successfully'];
        } catch (PDOException $e) {
            throw new Exception('Error editing car: ' . $e->getMessage());
        }
    }

    public function Delete($id)
    {
        try {
            $query = "DELETE FROM cars WHERE id=?";
            $statement = $this->db->prepare($query);
            $statement->execute([$id]);

            return ['success' => true, 'message' => 'Car deleted successfully'];
        } catch (PDOException $e) {
            throw new Exception('Error deleting car: ' . $e->getMessage());
        }
    }
}
