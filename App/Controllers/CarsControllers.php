<?php

require_once("../Models/cars.php");

$car = new Car();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $model = htmlspecialchars($_POST["model"]);
    $year = htmlspecialchars($_POST["year"]);
    $color = htmlspecialchars($_POST["color"]);
    $fuelType = htmlspecialchars($_POST["fuelType"]);
}

if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["id"])) {
                $car->addCar($_GET["id"], $model, $year, $color, $fuelType);
            }
            break;
        case "remove":
            $car->removeCar($_GET["id"]);
            break;
    }
}


?>
