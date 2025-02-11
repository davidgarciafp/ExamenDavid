<?php

session_start();

require_once __DIR__.'/../Autoload.php';


$router = new Router();

$router->get('/', 'UsuarioController@index');

$router->post('/login', 'UsuarioController@login');

$router->get('/logout', 'UsuarioController@logout');

$router->get('/cursos', 'CursosController@index');

$router->get('/word', "CursosController@word");

$router->get('/matricula', "CursosController@pantallaMatricula");

$router->post('/addMatricula',"CursosController@matricula");

$router->dispatch();