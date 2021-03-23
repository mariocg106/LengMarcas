<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


$app->group('/api', function(RouteCollectorProxy $group){
$group->get('/detallepedidos','App\Controllers\mcgDetallepedidosController:mcggetAll');
$group->post('/detallepedidos/mcgnew', 'App\Controllers\mcgDetallepedidosController:mcgnew');
$group->get('/detallepedidos/mcgfilter', 'App\Controllers\mcgDetallepedidosController:mcgfilter');
});


