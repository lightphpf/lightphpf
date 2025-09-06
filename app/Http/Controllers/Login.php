<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;

final class Login extends BaseController
{
    /**
     * login page
     * @return void
     */
    public function index(): void
    {
        $template = $this->twig->load('auth/login.twig');

        echo $template->render([
            'app_url' => $this->app_url,
            'app_name' => $this->app_name,
            'title' => 'Login'
        ]);
    }
}
