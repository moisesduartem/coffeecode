<?php 

require_once __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

/**
 * Controllers
 */
$router->namespace('Source\App');

/**
 * Web @ home
 */

$router->group(null);
$router->get('/', 'Web:home');

/**
 * Tratamento de erros no servidor
 * (404, 401, 501, etc)
 */

$router->group('ooops');
$router->get('/{errcode}', 'Web:error');

$router->dispatch();

if ($router->error()) {
	$router->redirect("/ooops/{$router->error()}");
}

