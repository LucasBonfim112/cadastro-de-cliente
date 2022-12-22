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
        $cpf_cnpj  = $_POST['cpf_cnpj'];
        $idade  = $_POST['idade'];
        $data  = $_POST['data'];

        if (!empty($nome) && !empty($cpf_cnpj) && !empty($idade) && !empty($data)) {

            $cadastro->cadastrar($nome, $cpf_cnpj, $idade, $data);
            header('Location: cadastro');
        } else {
            header('Location: cadastro');
            echo 'Preencha todos os campos';
        }
    }
}
