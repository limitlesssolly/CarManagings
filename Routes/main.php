<?php

// Get the current URL
$url = $_SERVER['REQUEST_URI'];

// segments
$segments = explode('/', $url);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    // EXAMPLE: if the url is /about/anythingElse
    // Then dont show the about page
    if (count($segments) > 3) {
        include 'Views/Pages/404.php';// show the 404 page
        exit();
    }

    include 'Views/Pages/index.php';
//     exit();
}