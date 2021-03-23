<?php
namespace App\Model;
use App\Config\DB;

//definimos LibrosModel como una clase estática:
//no se puede hacer un new, no hay $this, no hay método __contruct()
class mcgDestallepedidosModel {
    private static $table = 'libros';
    private static $DB;

    public static function conexionDB(){
        mcgDestallepedidosModel::$DB = new DB();
    }
    public static function mcggetFilter($param){
        mcgDestallepedidosModel::conexionDB();
        $sql = "Select * from destallepedidos where ?"
        $data = mcgLibrosModel::$DB->run($sql, $param);
        return $data->mcgfetchAll();}*/

    public static function mcggetAll(){
        mcgDestallepedidosModel::conexionDB();
        $sql = "Select * from libros";
        $data = mcgDestallepedidosModel::$DB->run($sql, []);
        return $data->mcgfetchAll();
    }
    public static function mcgshow($param){
        mcgDestallepedidosModel::conexionDB();
        $sql = 'SELECT * from libros where libro_id = ?';
        $data = mcgDestallepedidosModel::$DB->run($sql, $param);
        return $data->mcgfetch();
    }
    public static function mcgnew($valores){
        // print_r(array_keys($param));
        try{
             $values = array_values($valores);
             mcgDetallepedidosModel::conexionDB();
             $sql = "insert into detallepedidos (CodigoLibro, CodigoUsuario, Cantidad, descuento, fecha) 
                     values (?, ?, ?, ?, ?, ?)";
             $data = mcgDetallepedidosModel::$DB->run($sql, $values);
             return "Pedido ". $values['CodigoLibro'] . " insertado correctamente ";
        } catch(Exception $e){
           return $e->getMessage();
        }
}