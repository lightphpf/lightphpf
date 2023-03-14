<?php

namespace App\Controllers;

use App\Core\Controller;

class About extends Controller
{
    /**
     * about page
     * @return void
     */
    public function index(): void
    {
        $data = [
            'title' => 'About Us'
        ];

        $this->view('about', $data);
    }
}
