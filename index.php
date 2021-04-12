<?php

use CoffeeCode\Router\Router;

session_start();

require __DIR__ . "/vendor/autoload.php";

$router = new Router(BASE_URL);
$router->namespace('App\Controller');


$router->group(null);
$router->get('/', 'Web:home');
$router->get('/dashboard', 'Web:dashboard');
$router->get('/presenca-faltas', 'Web:presenseAbsences');

$router->group('login');
$router->post('/', 'Web:login');

$router->group('logout');
$router->get('/', 'Web:logout');


$router->group('error');
$router->get('/{errcode}', "Web:error");

$router->dispatch();

if($router->error()){
  $router->redirect("/error/{$router->error()}");
}

