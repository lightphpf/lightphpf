<?php

namespace App\Controllers;

use App\Core\Controller;

class Contact extends Controller
{
    /**
     * contact page
     * @return void
     */
    public function index(): void
    {
        $data = [
            'title' => 'Contact Us'
        ];

        $this->view('contact', $data);
    }
}
