<?php

use Monolog\Logger as MonologLogger;

return [
    'database' => [
        'name' => 'pawtp4',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=localhost',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
    'logger' => [
        'level' => MonologLogger::INFO
    ],
    'twig' => [
        'templates_dir' => __DIR__ . '/app/views',
        'templates_cache_dir' => __DIR__ . '/app/views/cache'
    ]
];
