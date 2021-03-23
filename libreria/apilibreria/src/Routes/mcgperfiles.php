<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


$app->group('/api', function(RouteCollectorProxy $group){
$group->get('/perfiles','App\Controllers\mcgPerfilesController:mcggetAll');
$group->post('/perfiles/mcgnew', 'App\Controllers\mcgPerfilesController:mcgnew');
$group->get('/perfiles/mcgfilter', 'App\Controllers\mcgDerfilesController:mcgfilter');
});


