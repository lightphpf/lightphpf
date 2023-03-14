<?php

namespace App\Core;

class Controller
{
    /**
     * @param string $model
     * @return mixed
     */
    public function model(string $model): mixed
    {
        // instantiate model
        return new $model();
    }

    /**
     * @param string $view
     * @param array $data
     * @return void
     */
    public function view(string $view, array $data = []): void
    {
        if (file_exists(APP_ROOT . "/Views/{$view}.php")) {
            require_once __DIR__ . '/../Views/' . $view . '.php';
        } else {
            dump("View does not exists.");
        }
    }
}
