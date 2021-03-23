<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
#use App\Controllers\BaseController;
    use App\Model\mcgLibrosModel;    

    class mcgLibrosController {
        
        public function new(Request $request, Response $response, $args){
            $response->getBody()->write("Insertar un nuevo Libro");
            $parametros = $request->getParsedBody();
           $libroid = (int)$parametros['libro_id'];
           $nombre = $parametros['nombre_libro'];
           $precio = $parametros['precio'];
           $stock = $parametros['stock'];
           $imagen = $parametros['imagen'];
           $entrega = $parametros['entrega'];
           $editorid = $parametros['editor_id'];
           $descripcion = $parametros['descripcion'];
           $categoriaid = $parametros['categoriaid'];
           $valores = array($libroid, $nombre, $precio, $stock, $imagen, $entrega, $editorid, $descripcion, $categoriaid);
           $result = mcgLibrosModel::new($valores);
           $resultJson = json_encode($result);
            return $response

                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
        public function getAll($request, $response, $args){
            $libros = mcgLibrosModel::getAll();
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
        public function getFilter(Request $request, Response $response, $args){
            $parametros = $request->getQueryParams();
            $nombrecategoria = $parametros['nombre_categoria'];
            $precio = (int) $parametros['precio'];
            $valores = array($uid);
            $Libros = mcgLibrosModel::getFilter($valores);
            $LibrosJson = json_encode($Libros);
            $response->getBody()->write($LibrosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }

    }