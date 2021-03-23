<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


$app->mcggroup('/api', function(RouteCollectorProxy $group){
$group->mcgget('/libros','App\Controllers\mcgLibrosController:mcggetAll');
$group->mcgpost('/libros/mcgnew', 'App\Controllers\mcgLibrosController:mcgnew');
$group->mcgget('/libros/mcgfilter', 'App\Controllers\mcgLibrosController:mcgfilter');
});


