<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sair','HomeController@logout');

$router->get('/login','AuthController@login');

$router->post('/login','AuthController@loginAction');

$router->get('/register','AuthController@register');

$router->post('/register','AuthController@registerAction');

$router->post('/post','PostController@addPost');

// $router->get('/sobre/{nome}', 'HomeController@sobreP');
// $router->get('/sobre', 'HomeController@sobre');