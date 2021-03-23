<?php

namespace App\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Model\mcgCategoriasModel;

class mcgCategoriasController{
    
 public function getAll(Request  $request, Response $response, $args){
     echo "Listado de Categorias";
     
     $Categorias = mcgCategoriasModel::getAll();
     $Categorias_JSON = json_encode($Categorias);
     $response->getBody()->write($Categorias_JSON);
     return $response
        ->withHeader('Content-Type','application/json')
        ->withStatus(200); 
 }   


}
