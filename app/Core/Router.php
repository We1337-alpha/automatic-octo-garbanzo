<?php

namespace App\Core;

class Router
{
    protected $routes = [];

    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }

    public function dispatch($url)
    {
        if (array_key_exists($url, $this->routes)) {
            $controller = $this->routes[$url]['controller'];
            $action = $this->routes[$url]['action'];

            $controller = "App\\Controllers\\$controller";
            $controller_object = new $controller();

            $controller_object->$action();
        } else {
            echo "No route matched.";
        }
    }
}
