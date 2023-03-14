<?php

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

return [
    'app_name' => $_ENV['APP_NAME'],
    'app_root' => dirname(dirname(__FILE__)) . '/app/',
    'app_url' => $_ENV['APP_URL'],
    'database' => [
        'host' => $_ENV['DB_HOST'],
        'db_connect' => $_ENV['DB_CONNECT'],
        'port' => $_ENV['DB_PORT'],
        'database_name' => $_ENV['DB_NAME'],
        'username' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD']
    ]
];
