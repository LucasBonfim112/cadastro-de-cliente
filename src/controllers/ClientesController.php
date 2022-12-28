<?php

namespace src\controllers;

use \core\Controller;
use src\models\Clientes;

class ClientesController extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['token']) && empty(($_SESSION["token"]))) {
            $this->render('login');
            die;
        }
    }
    public function lista_cliente()
    {
        $this->cliente = new Clientes;
        $clientes = $this->cliente->ListaCliente();
        $this->render('clientes', ["dados" => $clientes]);
    }
}
