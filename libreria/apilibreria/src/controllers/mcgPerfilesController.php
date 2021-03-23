<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
#use App\Controllers\BaseController;
    use App\Model\mcgUsuariosModel;    

    class mcgUsuariosController {
        
        public function new(Request $request, Response $response, $args){
            $parametros = $request->getParsedBody();
           $perfilid = (int)$parametros['perfilid'];
           $email = $parametros['email'];
           $face = $parametros['facebook'];
           $insta = $parametros['instagram'];
           $foto = $parametros['foto'];
           $userid = (int)$parametros['userid'];
           $valores = array($perfilid, $email, $face, $insta, $foto, $userid);
           $result = mcgUsuariosModel::new($valores);
           $resultJson = json_encode($result);
            return $response

                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }