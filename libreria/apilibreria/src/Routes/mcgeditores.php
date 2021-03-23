<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;



$app->mcgget('/api/editores','App\controllers\mcgEditoresController:mcggetAll');