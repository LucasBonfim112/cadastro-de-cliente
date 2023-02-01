<?php

namespace src\controllers;

use \core\Controller;
use src\models\Clientes;
use src\models\Vendas;

class VendaProdutosController extends Controller
{


    public function index()
    {

        // print_r($_POST);
        // die;
        $cliente = new Clientes;
        $produto = new Vendas;

        $valor = $produto->ProdutoVenda(); //1
        $dados = $cliente->ListaCliente(); //2
        $this->render('venderprod', ["dados" => $valor[0], "valor" => $dados]);
    }

    public function vender()
    {
        $vender = new Vendas;
        $codigo = $_POST["idproduto"];
        $quantidade = $_POST["quantidade"];
        $preco = $_POST["preco"];
        $idcliente = $_POST["idcliente"];

        if (!empty($preco) && !empty($quantidade)) {
            $vender->vendido($quantidade, $preco, $idcliente, $codigo );
            header("Location: produtos");
            // $this->render("produtos");
        }
    }
}
