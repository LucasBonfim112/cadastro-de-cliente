<?php
use core\Router;

$router = new Router();

$router->get('/', 'LoginController@index');
$router->post('/login_acao', 'LoginController@login_acao');
$router->get('/cadastro', 'CadastroController@index');
$router->post('/cadastrar', 'CadastroController@cadastrar');
$router->get('/sair', 'SairController@sair');
