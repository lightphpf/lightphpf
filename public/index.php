<?php

use App\Init;
use Dotenv\Dotenv;

/**
 * Time Zone Setting
 */
date_default_timezone_set('Europe/London');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

define('APP_NAME', $_ENV['APP_NAME']);
define('APP_ROOT', dirname(dirname(__FILE__)) . '/app/');
define('URL_ROOT', $_ENV['URLROOT']);
define('DB_HOST', $_ENV['DB_HOST']);
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USERNAME', $_ENV['DB_USERNAME']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

$init = new Init();
