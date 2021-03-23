<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


$app->mcggroup('/api', function(RouteCollectorProxy $group){
$group->mcgget('/libros','App\Controllers\mcgLibrosController:getAll');
$group->mcgpost('/libros/new', 'App\Controllers\mcgLibrosController:new');
$group->mcgget('/libros/filter', 'App\Controllers\mcgLibrosController:filter');
});


