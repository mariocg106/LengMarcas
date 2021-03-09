<?php
namespace App\Model;
use App\Config\DB;

class CategoriasModel {
    private static $DB;

    public static function conexionDB(){
        CategoriasModel::$DB = new DB();
    }

    public static function getAll(){
        CategoriasModel::conexionDB();
        $sql = "SELECT * from Categorias";
        $data =CategoriasModel::$DB->run($sql, []);
        return $data->fetchAll();
        //var_dump ($data->fetchAll());
    }
}