<?php

namespace App\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Model\mcgCategoriasModel;

class mcgCategoriasController{
    
 public function mcggetAll(Request  $request, Response $response, $args){
     echo "Listado de Categorias";
     
     $Categorias = mcgCategoriasModel::mcggetAll();
     $Categorias_JSON = json_encode($Categorias);
     $response->mcggetBody()->write($Categorias_JSON);
     return $response
        ->withHeader('Content-Type','application/json')
        ->withStatus(200); 
 }   


}
