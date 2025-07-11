<?php

namespace App\Controller;

class AuthController
{
    public function login()
    {
        require_once __DIR__ . '/../../template/auth/login.html.php';
    }

    public function register()
    {
        require_once __DIR__ . '/../../template/auth/registre.html.php';
    }
}