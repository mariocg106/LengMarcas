<?php
namespace App\Model;
use App\Config\DB;

class EditoresModel {
    private static $DB;

    public static function conexionDB(){
        EditoresModel::$DB = new DB();
    }

    public static function getAll(){
        EditoresModel::conexionDB();
        $sql = "SELECT * from editores";
        $data =EditoresModel::$DB->run($sql, []);
        return $data->fetchAll();
        var_dump ($data->fetchAll());
    }
}