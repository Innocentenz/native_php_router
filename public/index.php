<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;

$router = new Router();

$router->get('/', function (){ echo 'HomePage';});
$router->get('/about', function(){echo 'AboutUs';});

$router->run();