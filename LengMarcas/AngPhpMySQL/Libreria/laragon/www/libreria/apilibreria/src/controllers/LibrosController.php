<?php

namespace App\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Model\LibrosModel;

class LibrosController{
    
 public function getAll(Request  $request, Response $response, $args){
     echo "Listado de Libros";
     
     $libros = LibrosModel::getAll();
     $libros_JSON = json_encode($libros);
     $response->getBody()->write($libros_JSON);
     return $response
        ->withHeader('Content-Type','application/json')
        ->withStatus(200); 
 }   


}
