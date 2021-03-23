<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
#use App\Controllers\BaseController;
    use App\Model\mcgUsuariosModel;    

    class mcgUsuariosController {
        
        public function new(Request $request, Response $response, $args){
            $parametros = $request->getParsedBody();
           $uid = (int)$parametros['usuarioid'];
           $nombre = $parametros['nombre'];
           $apellidos = $parametros['apellidos'];
           $direccion = $parametros['direccion'];
           $ciudad = $parametros['ciudad'];
           $anionac = (int)$parametros['anionac'];
           $valores = array($uid, $nombre, $apellidos, $direccion, $ciudad, $anionac);
           $result = mcgUsuariosModel::new($valores);
           $resultJson = json_encode($result);
            return $response

                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
        public function getAll($request, $response, $args){
            $Usuarios = mcgUsuariosModel::getAll();
            $UsuariosJson = json_encode($Usuarios);
            $response->getBody()->write($UsuariosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
        public function getFilter(Request $request, Response $response, $args){
            $parametros = $request->getQueryParams();
            $uid = (int)$parametros['usuarioid'];
            $valores = array($uid);
            $Usuarios = mcgUsuariosModel::getFilter($valores);
            $UsuariosJson = json_encode($Usuarios);
            $response->getBody()->write($UsuariosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }