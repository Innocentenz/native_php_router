<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;

$router = new Router();

$router->get('/', function (){ echo 'Home Page';});
$router->get('/about', function(){echo 'About Us';});

$router->addNotFoundHandler( function (){
    $title = "Not Found!";
    require_once __DIR__. '/../templates/404.phmtl';
});
$router->run();