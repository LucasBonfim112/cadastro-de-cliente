<?php

use core\Router;

$router = new Router();

$router->get('/', 'LoginController@index');
$router->post('/login_acao', 'LoginController@login_acao');
$router->get('/cadastro', 'CadastroController@index');
$router->post('/cadastrar', 'CadastroController@cadastrar');
$router->post('/validarCad', 'CadastroController@validarCad');
$router->get('/sair', 'SairController@sair');
$router->get('/clientes', 'ClientesController@index');
$router->get('/listarclientes', 'ClientesController@listarCliente');
$router->get('/editar', 'ClientesController@editarCliente');
$router->get('/deletar', 'ClientesController@deletar_cliente');
$router->post('/atualizar', 'ClientesController@atualizarCad');
$router->post('/cadProdutos', 'ProdutoController@cadastrarProdutos');
$router->get('/produtoscad', 'ProdutoController@index');
$router->get('/produtos', 'ProdutoController@rend');
$router->get('/listarProdutos', 'ProdutoController@listaProduto');
$router->get('/editprod', 'ProdutoController@editarProduto');
$router->post('/atualizarProd', 'ProdutoController@atualizarProd');
$router->get('/excluir', 'ProdutoController@excluirProd');
$router->post('/validarProd', 'ProdutoController@validarCadProd');



$router->get('/vendas', 'VendaProdutosController@index');

$router->post('/fazerpedido', 'VendaProdutosController@carrinho');
$router->post('/finalizarpedido', 'VendaProdutosController@finalizar_pedido');
$router->post('/cancelarpedido', 'VendaProdutosController@cancelar_pedido');
$router->post('/tiraritem', 'VendaProdutosController@tirarItem');
