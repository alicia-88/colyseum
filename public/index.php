<?php
require_once '../app/bootstrap.php';

$router = new Router;

$routes = require_once '../app/routes.php';

$routes($router);
$router->dispatch();
