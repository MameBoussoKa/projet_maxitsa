<?php

namespace App\Controller;

class DashboardController
{
    public function index()
    {
        require_once __DIR__ . '/../../template/dashboard.html';
    }
}