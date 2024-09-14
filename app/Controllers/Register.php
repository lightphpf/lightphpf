<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;

class Register extends Controller
{
    /**
     * register page
     * @return void
     */
    public function index(): void
    {
        $template = $this->twig->load('auth/register.twig');

        echo $template->render([
            'app_url' => $this->app_url,
            'app_name' => $this->app_name,
            'title' => 'Register'
        ]);
    }
}
