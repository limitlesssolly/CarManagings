<?php

require_once 'admins.php';

class AdminController
{
    private $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function index()
    {
        // Display a list of cars
        $cars = $this->adminModel->getAllCars();
        include 'views/admin/cars/index.php';
    }

    public function show($carId)
    {
        // Display details of a specific car
        $car = $this->adminModel->getCarById($carId);
        include 'views/admin/cars/show.php'; 
    }

    public function create()
    {
        // Show the form for adding a new car
        include 'views/admin/cars/create.php'; 
    }

    public function store()
    {
        // Handle the form submission for adding a new car
        $carDetails = $_POST; // Assuming you're using POST data
        $this->adminModel->addCar($carDetails);

        // Redirect to the list of cars or show a success message
        header('Location: /admin/cars'); 
        exit;
    }

    public function edit($carId)
    {
        // Show the form for editing a car
        $car = $this->adminModel->getCarById($carId);
        include 'views/admin/cars/edit.php';
    }

    public function update($carId)
    {
        // Handle the form submission for updating a car
        $newDetails = $_POST; // Assuming you're using POST data
        $this->adminModel->updateCar($carId, $newDetails);

        // Redirect to the list of cars or show a success message
        header('Location: /admin/cars'); 
        exit;
    }

    public function delete($carId)
    {
        // Delete a car
        $this->adminModel->deleteCar($carId);

        // Redirect to the list of cars or show a success message
        header('Location: /admin/cars');
        exit;
    }
}
