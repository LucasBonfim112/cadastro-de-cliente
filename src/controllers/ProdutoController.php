<?php

namespace src\controllers;

use \core\Controller;
use src\models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $this->render('cadproduto');
    }

    public function rend()
    {
        $this->render('produtos');
    }

    public function cadastrarProdutos()
    {
        $res = '';
        $cadastro = new Produto;
        $codigo = $_POST['codigo'];
        $nome  = $_POST['nome'];
        $cor  = $_POST['cor'];
        $preco  = $_POST['preco'];
        $quantidade  = $_POST['quantidade'];

        $res = $cadastro->cadastrar($codigo, $nome, $cor, $preco, $quantidade);



        echo json_encode($res);
    }

    public function listaProduto()
    {
        $produto = new Produto;
        $res = $produto->listar();
        echo json_encode($res);
    }

    public function editarProduto()
    {
        $produto = new Produto;
        $dados = $produto->editar();

        $this->render("editprod", ["dados" => $dados[0]]);
    }

    public function atualizarProd()
    {
        $atualizar = new Produto;

        $idproduto  = $_POST['idproduto'];
        $codigo  = $_POST['codigo'];
        $nome  = $_POST['nome'];
        $cor  =  $_POST['cor'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];

        $atualizar->atualizar($idproduto, $codigo, $nome, $cor, $preco, $quantidade);
    }

    public function excluirProd()
    {
        $idproduto = $_GET['idproduto'];
        $del = new Produto;

        if (isset($_GET["idproduto"])) {

            $del->deletar($idproduto);
        }
        $this->redirect('/produtos');
    }
}
