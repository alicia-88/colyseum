<?php
require_once __DIR__ . '/librairies/Dotenv.php';
$dotenv = new Dotenv;
$dotenv->load('../app/');

require_once __DIR__ . '/controllers/PagesController.php';
require_once __DIR__ . '/controllers/Exo1Controller.php';
require_once __DIR__ . '/controllers/Exo2Controller.php';

require_once __DIR__ . '/librairies/Route.php';
require_once __DIR__ . '/librairies/Router.php';
