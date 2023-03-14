<?php

/**
 * Author: Soulaimane Yahya
 * Date: 2023-03-14
 */

use App\Init;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once __DIR__ . '/autoload.php';

$twigLoader = new FilesystemLoader($config['app_root'] . '/Views');
$twig = new Environment($twigLoader, [
    'cache' => $config['app_root'] . '/Bootstrap/Cache',
]);

$init = new Init($config, $twig);
