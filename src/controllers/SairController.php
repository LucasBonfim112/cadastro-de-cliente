<?php

namespace src\controllers;

use \core\Controller;
use src\models\Sair;

class SairController extends Controller
{

    public function sair()
    {
        $logout = new Sair;
        $logout->sair();
        $this->render('login');
    }
}
