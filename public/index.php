<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

$config = require __DIR__ . '/../config/config.php';

$router = new Router();
$router->add('/', ['controller' => 'HomeController', 'action' => 'index']);
$router->add('/about', ['controller' => 'PageController', 'action' => 'about']);
$router->dispatch($_SERVER['REQUEST_URI']);
