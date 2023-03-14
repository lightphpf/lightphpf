<?php

namespace App\Controllers;

use App\Models\User;
use App\Core\Controller;

class Home extends Controller
{
    /**
     * home page
     * @return void
     */
    public function index(): void
    {
        $user = $this->model(User::class);

        $this->view('index', [
            'users' => $user->getUsers(),
            'title' => 'Home page'
        ]);
    }
}
