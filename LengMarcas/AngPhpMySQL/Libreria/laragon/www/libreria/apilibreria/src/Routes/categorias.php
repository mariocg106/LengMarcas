<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;



$app->get('/api/categorias','App\controllers\CategoriasController:getAll');

//$app->get('/api/libros/new','App\controllers\LibrosController:new');
