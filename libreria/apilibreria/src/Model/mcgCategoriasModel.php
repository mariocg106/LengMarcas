<?php
namespace App\Model;
use App\Config\DB;

class mcgCategoriasModel {
    private static $DB;

    public static function conexionDB(){
        mcgCategoriasModel::$DB = new DB();
    }

    public static function mcggetAll(){
        mcgCategoriasModel::conexionDB();
        $sql = "SELECT * from Categorias";
        $data =mcgCategoriasModel::$DB->run($sql, []);
        return $data->mcgfetchAll();
        var_dump ($data->mcgfetchAll());
    }
}