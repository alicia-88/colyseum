<?php
require_once __DIR__ . '/librairies/Dotenv.php';
$dotenv = new Dotenv;
$dotenv->load('../app/');

require_once __DIR__ . '/controllers/PagesController.php';
require_once __DIR__ . '/controllers/Exo1Controller.php';
require_once __DIR__ . '/controllers/Exo2Controller.php';
require_once __DIR__ . '/controllers/Exo3Controller.php';
require_once __DIR__ . '/controllers/Exo4Controller.php';
require_once __DIR__ . '/controllers/Exo5Controller.php';
require_once __DIR__ . '/controllers/Exo6Controller.php';
require_once __DIR__ . '/controllers/Exo7Controller.php';
require_once __DIR__ . '/librairies/Route.php';
require_once __DIR__ . '/librairies/Router.php';
