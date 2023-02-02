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

        $this->render('venderprod', ["dados" => $valor, "valor" => $dados]);
    }

    public function carrinho()
    {

        //adicionar o pedido no carrinho
        $vender = new Vendas;
        $idsituacao = $_POST["idsituacao"];
        $idcliente = $_POST["idcliente"];
    }

    public function finalizar_pedido()
    {
        //finalizar o pedido 

    }


    public function cancelar_pedido()
    {
        // cancelar o pedido / tirar todos os itens

    }

    public function tirarItem()
    {
        // remove apenas o item selecionado

    }
}
