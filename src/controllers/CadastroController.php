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
        $res = '';
        $cadastro = new Cadastro;
        $nome  = $_POST['nome'];
        $cpf_cnpj  = preg_replace('/\D/', '', $_POST['cpf_cnpj']);
        $idade  = $_POST['idade'];
        $data  = $_POST['data'];

        $dados = $cadastro->verificarCpf($cpf_cnpj);

        if ($dados[0]['existecpf'] == 0) {
            if (!empty($nome) && !empty($cpf_cnpj) && !empty($idade) && !empty($data)) {
                $res =  $cadastro->cadastrar($nome, $cpf_cnpj, $idade, $data);
                $this->render('clientes');
            } else {
                $this->render('cadastro');
            }
        } else {
            $this->render('cadastro');
        }

        echo json_encode($res);
    }

    public function validarCad()
    {
        $cpf_cnpj = preg_replace('/\D/', '', $_POST['cpf_cnpj']);

        $valid = new Cadastro;

        $dados = $valid->verificarCpf($cpf_cnpj);


        if ($dados[0]['existecpf'] == 0) {
            echo json_encode(['existe' => false]);
        } else {
            echo json_encode(['existe' => true]);
        }
    }
}
