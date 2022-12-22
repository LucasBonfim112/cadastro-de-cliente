<?php

namespace src\controllers;

use \core\Controller;
use \src\models\Login;

class LoginController extends Controller
{

    public function login_acao()
    {
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        if ($login && $senha ) {
            $acesso = new Login();
            $acesso->verificarLogin($login, $senha);
        }
    }

    public function index()
    {
        $this->render('login');
    }
}
