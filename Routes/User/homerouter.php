<?php

$config['rewrite_short_tags'] = FALSE;

$url = $_SERVER['REQUEST_URI'];

$segments = explode('/', $url);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    if (count($segments) > 3) {
        include 'Views/Pages/404.php';
        exit();
    }
    include 'Views/Pages/home.php';
}
