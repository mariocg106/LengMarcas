<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


$app->mcggroup('/api', function(RouteCollectorProxy $group){
$group->mcgget('/detallepedidos','App\Controllers\mcgDetallepedidosController:getAll');
$group->mcgpost('/detallepedidos/new', 'App\Controllers\mcgDetallepedidosController:new');
$group->mcgget('/etallepedidos/filter', 'App\Controllers\mcgDetallepedidosController:filter');
});


