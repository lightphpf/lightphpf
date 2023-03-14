<?php

namespace App\Core;

use Twig\Environment;

class Controller
{
    private $config;
    protected $twig;
    protected $app_name;
    protected $app_url;

    public function __construct(array $config, Environment $twig)
    {
        $this->twig = $twig;
        $this->config = $config;
        
        $this->app_name = $config['app_name'];
        $this->app_url = $config['app_url'];
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
