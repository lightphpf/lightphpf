<?php

namespace App;

use App\Core\App;
use App\Core\Controller;
use Twig\Environment;

class Init
{
    public $app;
    public $controllers;

    public function __construct(array $config, Environment $twig)
    {
        $this->app = new App($config, $twig);
        $this->controllers = new Controller($config, $twig);
    }
}
