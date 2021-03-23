<?php
namespace App\Model;
use App\Config\DB;

//definimos LibrosModel como una clase estática:
//no se puede hacer un new, no hay $this, no hay método __contruct()
class mcgPerfilesModel {
    private static $table = 'Perfiles';
    private static $DB;

    public static function conexionDB(){
        mcgPerfilesModel::$DB = new DB();
    }
    public static function mcgnew($valores){
        // print_r(array_keys($param));
        try{
             $values = array_values($valores);
             mcgPerfilesModel::conexionDB();
             $sql = "insert into Perfiles (perfilid, email, facebook, instagram, foto, userid) 
                     values (?, ?, ?, ?, ?, ?)";
             $data = mcgPerfilesModel::$DB->run($sql, $values);
             return "Perfil ". $values['perfilid'] . " insertado correctamente ";
        } catch(Exception $e){
           return $e->getMessage();
        }
    }