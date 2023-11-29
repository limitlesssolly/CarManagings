<?php

if(parse_url($_SERVER['REQUEST_URI'])['path']=='/CarManagings/')
{
    header("Location:Views/Pages/home.php");
}

// $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// echo $uri;
// $routes = [
//     '/CarManaging/' => header("Location:Views/Pages/index.php"),
//     '/CarManaging/about' => 'header("Location:Views/Pages/index.php")',
//     '/contact' => 'controllers/contact.php',
// ];

// function routeToController($uri, $routes) {
//     if (array_key_exists($uri, $routes)) {
//         require $routes[$uri];
//     } else {
//         abort();
//     }
// }

// function abort($code = 404) {
//     http_response_code($code);

//     require "views/{$code}.php";

//     die();
// }

// routeToController($uri, $routes);










?>












 