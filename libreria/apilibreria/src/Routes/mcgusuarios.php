<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;

//contendrá los entrypoints (acciones CRUD) de la tabla usuarios

$app->mcggroup('/api', function(RouteCollectorProxy $group){
    $group->mcgget('/usuarios', 'App\Controllers\mcgUsuariosController:getAll');
    $group->mcgpost('/usuarios/new', 'App\Controllers\mcgUsuariosController:new');
    $group->mcgget('/usuarios/filter', 'App\Controllers\mcgUsuariosController:filter');    
});