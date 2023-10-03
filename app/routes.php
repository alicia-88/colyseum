<?php
return function (Router $router) {
    $router->addRoute('GET', '/', [PagesController::class, 'home']);
    $router->addRoute('GET', '/clients', [Exo1Controller::class, 'home']);
    $router->addRoute('GET', '/shows', [Exo2Controller::class, 'home']);
};
