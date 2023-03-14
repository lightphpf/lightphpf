<?php

namespace App\Core;

class Controller
{
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * @param string $model
     * @return mixed
     */
    public function model(string $model): mixed
    {
        // instantiate model
        return new $model($this->config['database']);
    }

    /**
     * @param string $view
     * @param array $data
     * @return void
     */
    public function view(string $view, array $data = []): void
    {
        $data['app_name'] = $this->config['app_name'];
        $data['app_root'] = $this->config['app_root'];

        if (file_exists($data['app_root'] . "/Views/{$view}.php")) {
            require_once __DIR__ . '/../Views/' . $view . '.php';
        } else {
            dump("View does not exists.");
        }
    }
}
