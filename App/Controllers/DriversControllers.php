<?php

require_once("../Models/drivers.php");

$driver = new Driver();

if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["id"])) {
                $driver->addDriver($_GET["id"], $_POST["name"],$_POST["email"],$_POST["phone"],$_POST["dateofemployment"],$_POST["status"]);
            }
            break;
        case "remove":
            $driver->removeDriver($_GET["id"]);
            break;
    }
}
