<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
            'blade_template_path' => __DIR__ . '/../templates/',
            'blade_cache_path' => __DIR__ . '/../cache/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        // Database connection settings
        "db" => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'database' => 'goowia',
            'username' => 'root',
            'password' => '4911697',
            'collation' => 'utf8_general_ci',
            'prefix' => ''
        ],
    ],
];
