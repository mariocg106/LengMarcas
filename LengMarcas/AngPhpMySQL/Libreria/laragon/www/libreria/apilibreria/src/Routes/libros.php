<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;



$app->get('/api/libros','App\controllers\LibrosController:getAll');
$group->get('/libros/filter','App\controllers\LibrosController:getFilter');

//$app->get('/api/libros/new','App\controllers\LibrosController:new');

