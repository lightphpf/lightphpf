<?php

use App\Bootstrap\Bootstrap;

/**
 * Author: Soulaimane Yahya
 * Date: 2023-03-14
 */

session_name('lightphpf_session');
session_start();

/*
* Time Zone Setting
*/
date_default_timezone_set('Europe/London');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

$config = require_once __DIR__ . '/../config/app.php';
$twig = require_once __DIR__ . '/../config/twig.php';

(new Bootstrap(
    $config,
    $twig
));
