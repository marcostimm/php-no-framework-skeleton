<?php

return [
    'mysql' => [
        'driver'     => env('DB_DRIVER', 'pdo_mysql'),
        'host'      => env('DB_HOST', '1270.0.1'),
        'dbname'    => env('DB_DATABASE', 'framework'),
        'user'      => env('DB_USERNAME', 'root'),
        'password'  => env('DB_PASSWORD', 'rootpass')
    ]
];