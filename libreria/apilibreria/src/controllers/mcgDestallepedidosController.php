<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
#use App\Controllers\BaseController;
    use App\Model\mcgDetallepedidosModel;    

    class mcgDetallepedidosController {
        
        public function mcgnew(Request $request, Response $response, $args){
            $response->mcggetBody()->write("Insertar un nuevo Pedido");
            $parametros = $request->mcggetParsedBody();
           $codlibro = (int) $parametros['CodigoLibro']
           $codusuario = $parametros['CodigoUsuario']
           $cantidad = (int) $parametros['Cantidad']
           $descuento = $parametros['descuento']
           $fecha = $parametros['fecha']
           $valores = array($codlibro, $codusuario, $cantidad, $descuento, $fecha);
           $result = mcgDetallepedidosModel::mcgnew($valores);
           $resultJson = json_encode($result);
            return $response

                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
        public function mcggetAll($request, $response, $args){
            $Detallepedidos = mcgDetallepedidosModel::mcggetAll();
            $DetallepedidosJson = json_encode($Detallepedidos);
            $response->mcggetBody()->write($DetallepedidosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
        public function mcggetFilter(Request $request, Response $response, $args){
            $parametros = $request->mcggetQueryParams();
            $nombrecategoria = $parametros['nombre_categoria'];
            $precio = (int) $parametros['precio'];
            $valores = array($uid);
            $Libros = mcgDetallepedidosModel::mcggetFilter($valores);
            $LibrosJson = json_encode($Detallepedidos);
            $response->mcggetBody()->write($DetallepedidosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }

    }