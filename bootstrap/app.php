<?php

use App\Config\Config;
use App\Exceptions\Handler;
use App\Session\SessionStore;

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

try {
    $dotenv = (new \Dotenv\Dotenv(base_path()))->load();
} catch (Dotenv\Exception\Dotenv\Exception\InvalidPathException $e) {
    
}

require_once base_path('/bootstrap/container.php');

$route = $container->get(\League\Route\RouteCollection::class);

require_once base_path('bootstrap/middleware.php');

require_once base_path('routes/web.php');

try {
    $response = $route->dispatch(
        $container->get('request'), $container->get('response')
    );
} catch (\Exception $e) {
    $handler = new Handler(
        $e,
        $container->get(SessionStore::class)
    );

    $response = $handler->respond();
}

