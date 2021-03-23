<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


$app->group('/api', function(RouteCollectorProxy $group){
$group->get('/libros','App\Controllers\mcgLibrosController:mcggetAll');
$group->post('/libros/mcgnew', 'App\Controllers\mcgLibrosController:mcgnew');
$group->get('/libros/mcgfilter', 'App\Controllers\mcgLibrosController:mcgfilter');
});


