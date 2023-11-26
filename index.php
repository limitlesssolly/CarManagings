<?php

include_once 'App/Controllers/HomeController.php';
// include_once 'Routes/routehome.php';

$routes = include_once 'Routes/router.php';

$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '':
    case '/':
    case '/home':
        require __DIR__ . '../Views/Pages/home.php';
        break;
    
    case '/admin':
        require __DIR__ . '../Views/Pages/Admin/dashboardlogin.php';
        break;
    case '/Cars':
        require __DIR__ . '../Views/Pages/Admin/Cars/carshowdash.php';
    }