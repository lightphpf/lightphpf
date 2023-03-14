<?php

use App\Init;

/**
 * Time Zone Setting
 */
date_default_timezone_set('Europe/London');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';
$config = require_once __DIR__ . '/../config/app.php';

define('APP_NAME', $config['app_name']);
define('APP_ROOT', dirname(dirname(__FILE__)) . '/app/');
define('URL_ROOT', $config['url_root']);
define('DB_HOST', $config['database']['host']);
define('DB_CONNECT', $config['database']['db_connect']);
define('DB_PORT', $config['database']['port']);
define('DB_NAME', $config['database']['database_name']);
define('DB_USERNAME', $config['database']['username']);
define('DB_PASSWORD', $config['database']['password']);

$init = new Init($config);
