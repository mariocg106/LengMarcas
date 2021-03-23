<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;

//contendrá los entrypoints (acciones CRUD) de la tabla usuarios

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/usuarios', 'App\Controllers\mcgUsuariosController:getAll');
    $group->post('/usuarios/new', 'App\Controllers\mcgUsuariosController:new');
    $group->get('/usuarios/filter', 'App\Controllers\mcgUsuariosController:filter');    
});