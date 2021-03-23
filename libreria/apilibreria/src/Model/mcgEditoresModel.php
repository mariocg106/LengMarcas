<?php
namespace App\Model;
use App\Config\DB;

class mcgEditoresModel {
    private static $DB;

    public static function conexionDB(){
        mcgEditoresModel::$DB = new DB();
    }

    public static function mcggetAll(){
        mcgEditoresModel::conexionDB();
        $sql = "SELECT * from editores";
        $data =mcgEditoresModel::$DB->run($sql, []);
        return $data->mcgfetchAll();
        var_dump ($data->mcgfetchAll());
    }
}