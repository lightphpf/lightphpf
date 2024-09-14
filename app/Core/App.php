<?php

declare(strict_types=1);

namespace App\Core;

use Twig\Environment;

class App
{
    protected $currentController = '\App\Controllers\Home';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(array $config, Environment $twig)
    {
        $url = $this->getUrl();

        // Look in BLL for first value
        if ($url && file_exists($config['app_root'] . "/Controllers/" . ucwords($url[0]) . ".php")) {
            // If exists, set as controller
            $this->currentController = '\App\Controllers\\' . ucwords($url[0]);
            // Unset 0 Index
            unset($url[0]);
        }

        // Instantiate controller class
        $this->currentController = new $this->currentController($config, $twig);

        // Check for second part of url
        if (isset($url[1])) {
            // Check to see if method exists in controller
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                // Unset 1 index
                unset($url[1]);
            }
        }

        // Get params
        $this->params = $url ? array_values($url) : [];

        // Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    /**
     * @return string[]|void
     */
    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
