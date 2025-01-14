<?php


require_once __DIR__.'/../Autoload.php';


$router = new Router();

$router->get('/', 'UsuarioController@index');

$router->post('/login', 'UsuarioController@login');

$router->get('/logout', 'UsuarioController@logout');

$router->get('/multas', 'MultasController@index');

$router->get ('/word', "MultasController@word");

$router->get ('/registre', "PrincipalController@registre");

$router->post('/registre/create', "PrincipalController@createRegistre");

$router->post('/pagament',"MultasController@pagament");

$router->dispatch();