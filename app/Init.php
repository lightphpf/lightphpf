<?php

namespace App;

use App\Core\App;
use App\Core\Controller;

class Init
{
    public $app;
    public $controllers;

    public function __construct(array $config)
    {
        $this->app = new App($config);
        $this->controllers = new Controller($config);
    }
}
