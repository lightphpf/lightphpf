<?php

namespace App;

use App\Core\App;
use App\Core\Controller;

class Init
{
    public $app;
    public $controllers;

    public function __construct()
    {
        $this->app = new App();
        $this->controllers = new Controller();
    }
}
