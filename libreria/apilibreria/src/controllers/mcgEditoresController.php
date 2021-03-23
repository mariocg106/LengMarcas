<?php

namespace App\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Model\mcgEditoresModel;

class mcgEditoresController{
    
 public function mcggetAll(Request  $request, Response $response, $args){
     echo "Listado de Editoreddds"; 
     $Editores = mcgEditoresModel::mcggetAll();
     $Editores_JSON = json_encode($Editores);
     $response->mcggetBody()->write($Editores_JSON);
     return $response
        ->withHeader('Content-Type','application/json')
        ->withStatus(200); 
 }   


}
