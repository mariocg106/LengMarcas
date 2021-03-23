<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


$app->mcggroup('/api', function(RouteCollectorProxy $group){
$group->mcgget('/detallepedidos','App\Controllers\mcgDetallepedidosController:mcggetAll');
$group->mcgpost('/detallepedidos/mcgnew', 'App\Controllers\mcgDetallepedidosController:mcgnew');
$group->mcgget('/detallepedidos/mcgfilter', 'App\Controllers\mcgDetallepedidosController:mcgfilter');
});


