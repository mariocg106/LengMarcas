<?php
namespace App\Model;
use App\Config\DB;

//definimos LibrosModel como una clase estática:
//no se puede hacer un new, no hay $this, no hay método __contruct()
class mcgLibrosModel {
    private static $table = 'libros';
    private static $DB;

    public static function conexionDB(){
        mcgLibrosModel::$DB = new DB();
    }
    public static function getFilter($param){
        mcgLibrosModel::conexionDB();
        $sql = "Select * from libros natural join categorias where categoria = ? and precio > ?"
        $data = mcgLibrosModel::$DB->run($sql, $param);
        return $data->fetchAll();}

    public static function getAll(){
        mcgLibrosModel::conexionDB();
        $sql = "Select * from libros";
        $data = mcgLibrosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
    public static function show($param){
        mcgLibrosModel::conexionDB();
        $sql = 'SELECT * from libros where libro_id = ?';
        $data = mcgLibrosModel::$DB->run($sql, $param);
        return $data->fetch();
    }
}