<?php

$route->get('/', '\App\Controllers\HomeController::index')->setName('home');


$route->group('/auth', function ($route) {
    $route->get('/sigin', 'App\Controllers\Auth\LoginController::index')->setName('auth.login');
    $route->post('/sigin', 'App\Controllers\Auth\LoginController::sigin');
});