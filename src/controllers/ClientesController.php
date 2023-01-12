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
    public function index()
    {

        $this->render("clientes");
    }
    public function listarCliente()
    {
        $clientes = new Clientes;
        $res = $clientes->ListaCliente();
        echo json_encode($res);
    }


    public function deletar_cliente()
    {
        $idcliente = $_GET['idcliente'];
        $del = new Clientes;

        if (isset($_GET["idcliente"])) {

            $del->deletar($idcliente);
        }
        $this->redirect('/clientes');
    }
    public function editarCliente()
    {
        $clientes = new Clientes;
        $dados = $clientes->editar();

        $this->render("editar", ["dados" => $dados[0]]);
    }

    public function atualizarCad()
    {
        $atualizar = new Clientes;

        $idcliente  = $_POST['idcliente'];
        $nome  = $_POST['nome'];
        $cpf_cnpj  = $_POST['cpf_cnpj'];
        $idade  = $_POST['idade'];
        $data  = $_POST['data'];

        $atualizar->atualizar($idcliente, $nome, $cpf_cnpj, $idade, $data);

        $this->redirect('/clientes');


    }
}
