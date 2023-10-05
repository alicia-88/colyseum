<?php
return function (Router $router) {
    $router->addRoute('GET', '/', [PagesController::class, 'home']);
    $router->addRoute('GET', '/clients', [Exo1Controller::class, 'home']);
    $router->addRoute('GET', '/showstypes', [Exo2Controller::class, 'home']);
    $router->addRoute('GET', '/clients/20', [Exo3Controller::class, 'home']);
    $router->addRoute('GET', '/clients/fidelity', [Exo4Controller::class, 'home']);
    $router->addRoute('GET', '/clients/m', [Exo5Controller::class, 'home']);
    $router->addRoute('GET', '/shows', [Exo6Controller::class, 'home']);
    $router->addRoute('GET', '/client', [Exo7Controller::class, 'home']);
};
