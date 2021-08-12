<?php

namespace app\controllers;

use app\core\Request;

class AuthController extends BaseController
{

    public function showLogin()
    {
        return $this->render('auth/login');
    }

    public function login(Request $request)
    {
        # code...
    }

    public function showRegister()
    {
        return $this->render('auth/register');
    }

    public function register(Request $request)
    {
        # code...
    }
}