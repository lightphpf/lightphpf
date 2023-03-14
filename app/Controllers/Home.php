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

        $template = $this->twig->load('index.twig');
        
        echo $template->render([
            'app_url' => $this->app_url,
            'app_name' => $this->app_name,
            'title' => 'Home Page',
            'users' => $user->getUsers()
        ]);
    }
}
