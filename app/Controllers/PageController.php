<?php

namespace App\Controllers;

use App\Core\Controller;

class PageController extends Controller
{
    public function about()
    {
        require_once __DIR__ . '/../Views/about.php';
    }
}
