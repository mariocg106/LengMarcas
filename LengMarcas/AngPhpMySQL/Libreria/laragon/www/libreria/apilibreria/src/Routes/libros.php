<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;



$app->get('/api/libros','App\controllers\LibrosController:getAll');

//$app->get('/api/libros/new','App\controllers\LibrosController:new');

