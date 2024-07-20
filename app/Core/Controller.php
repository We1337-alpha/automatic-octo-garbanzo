<?php

namespace App\Core;

class Controller
{
    protected $db;

    public function __construct()
    {
        $database = new Database();

        $this->db = $database->getConnection();
    }
}
