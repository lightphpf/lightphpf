<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$twigLoader = new FilesystemLoader($config['app_root'] . '/Views');
$twig = new Environment($twigLoader, [
    'cache' => $config['app_root'] . '/Bootstrap/Cache',
]);

return $twig;
