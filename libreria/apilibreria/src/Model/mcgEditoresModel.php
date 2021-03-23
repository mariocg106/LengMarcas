<?php
namespace App\Model;
use App\Config\DB;

class mcgEditoresModel {
    private static $DB;

    public static function conexionDB(){
        mcgEditoresModel::$DB = new DB();
    }

    public static function getAll(){
        mcgEditoresModel::conexionDB();
        $sql = "SELECT * from editores";
        $data =mcgEditoresModel::$DB->run($sql, []);
        return $data->fetchAll();
        var_dump ($data->fetchAll());
    }
}