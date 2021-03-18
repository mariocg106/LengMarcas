<?php

namespace App\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Model\EditoresModel;

class EditoresController{
    
 public function getAll(Request  $request, Response $response, $args){
     echo "Listado de EditoresDDD";
     
     $Editores = EditoresModel::getAll();
     $Editores_JSON = json_encode($Editores);
     $response->getBody()->write($Editores_JSON);
     return $response
        ->withHeader('Content-Type','application/json')
        ->withStatus(200); 
 }   


}
