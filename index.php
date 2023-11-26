<?php

include_once 'App/Controllers/HomeController.php';
include_once 'Routes/routehome.php';

$routes = include_once 'Routes/router.php';

// run($_SERVER['REQUEST_URI'], $routes);

$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '':
    case '/':
    case '/home':
        require __DIR__ . '../Views/Pages/home.php';
        break;
    }
