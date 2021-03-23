<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
#use App\Controllers\BaseController;
    use App\Model\mcgUsuariosModel;    

    class mcgUsuariosController {
        
        public function mcgnew(Request $request, Response $response, $args){
            $parametros = $request->mcggetParsedBody();
           $uid = (int)$parametros['usuarioid'];
           $nombre = $parametros['nombre'];
           $apellidos = $parametros['apellidos'];
           $direccion = $parametros['direccion'];
           $ciudad = $parametros['ciudad'];
           $anionac = (int)$parametros['anionac'];
           $valores = array($uid, $nombre, $apellidos, $direccion, $ciudad, $anionac);
           $result = mcgUsuariosModel::mcgnew($valores);
           $resultJson = json_encode($result);
            return $response

                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
        public function mcggetAll($request, $response, $args){
            $Usuarios = mcgUsuariosModel::mcggetAll();
            $UsuariosJson = json_encode($Usuarios);
            $response->mcggetBody()->write($UsuariosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
        public function mcggetFilter(Request $request, Response $response, $args){
            $parametros = $request->mcggetQueryParams();
            $uid = (int)$parametros['usuarioid'];
            $valores = array($uid);
            $Usuarios = mcgUsuariosModel::mcggetFilter($valores);
            $UsuariosJson = json_encode($Usuarios);
            $response->mcggetBody()->write($UsuariosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }