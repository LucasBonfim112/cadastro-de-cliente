<?php

namespace src\controllers;
use \core\Controller;
use src\models\Cadastro;

class CadastroController extends Controller
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
        $this->render('cadastro');
    }
    public function cadastrar()
    {

        $cadastro = new Cadastro;
        $nome  = $_POST['nome'];
        $cpf_cnpj  = preg_replace('/\D/', '', $_POST['cpf_cnpj']);
        $idade  = $_POST['idade'];
        $data  = $_POST['data'];

        if (strlen($cpf_cnpj) == '11') {
            $cpf = $cpf_cnpj;

            if (!empty($nome) && !empty($cpf_cnpj) && !empty($idade) && !empty($data) && strlen($cpf) == '11') {
                $cadastro->cadastrar($nome, $cpf_cnpj, $idade, $data);
                header('Location: 404');
            }
        } else if (strlen($cpf_cnpj) == '14') {
            $cnpj = $cpf_cnpj;

            if (!empty($nome) && !empty($cpf_cnpj) && !empty($idade) && !empty($data) && strlen($cnpj) == '14') {
                $cadastro->cadastrar($nome, $cpf_cnpj, $idade, $data);
                header('Location: clientes');
            }
        }
    }
}
