<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        require_once __DIR__ . '/../Views/index.php';
    }
}
