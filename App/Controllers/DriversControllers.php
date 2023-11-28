<?php

require_once("drivers.php");

$driver = new Driver();

if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["name"])) {
                $driver->addDriver($_GET["id"], $_POST["name"]);
            }
            break;
        case "remove":
            $driver->removeDriver($_GET["id"]);
            break;
    }
}
