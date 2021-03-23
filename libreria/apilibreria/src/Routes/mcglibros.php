<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


$app->group('/api', function(RouteCollectorProxy $group){
$group->get('/libros','App\Controllers\mcgLibrosController:getAll');
$group->post('/libros/new', 'App\Controllers\mcgLibrosController:new');
$group->get('/libros/filter', 'App\Controllers\mcgLibrosController:filter');
});


