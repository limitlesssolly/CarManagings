<?php

// $basePath = __FILE__;
// echo __FILE__;

$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '':
    case '/':
    case '/home':
        require __DIR__ . '../Views/Pages/index.php';
        break;

    case '/Admin':
        require __DIR__ . '../Views/dashboardlogin.php';
        break;

    // case '/views/authors':
    //     require __DIR__ . '../Views/authors.php';
    //     break;

    // case '/about':
    //     require __DIR__ . '../Views/aboutus.php';
    //     break;

    // default:
    //     http_response_code(404);
    //     require __DIR__ . '../Views/Pages/404.php';
    //     break;
}