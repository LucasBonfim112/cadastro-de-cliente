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
