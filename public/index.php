<?php

require __DIR__.'/../vendor/autoload.php';

Core\Env::loadDotenv();

$router = new Core\Router();
$router->addRoute('/', ['controller' => 'Home', 'action' => 'indexAction']);
$router->addRoute('/test', ['controller' => 'Test', 'action' => 'index']);

$request = new Core\Request();
$router->execute($request);

// echo $_SERVER["QUERY_STRING"];
// echo "\n";
// echo $_SERVER["REQUEST_URI"];