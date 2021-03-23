<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;

//contendrá los entrypoints (acciones CRUD) de la tabla usuarios

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/usuarios', 'App\Controllers\mcgUsuariosController:mgcgetAll');
    $group->post('/usuarios/mgcnew', 'App\Controllers\mcgUsuariosController:mgcnew');
    $group->get('/usuarios/mgcfilter', 'App\Controllers\mcgUsuariosController:mgcfilter');    
});