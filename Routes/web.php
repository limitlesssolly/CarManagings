<?php


// use classes\Route;
use classestoo\HomeController;

classes\Route::get('/', [HomeController::class, 'index']);

?>