<?php
namespace App\Model;
use App\Config\DB;

//definimos LibrosModel como una clase estática:
//no se puede hacer un new, no hay $this, no hay método __contruct()
class mcgUsuariosModel {
    private static $table = 'usuarios';
    private static $DB;

    public static function conexionDB(){
        mcgUsuariosModel::$DB = new DB();
    }
    public static function new($valores){
        // print_r(array_keys($param));
        try{
             $values = array_values($valores);
             mcgUsuariosModel::conexionDB();
             $sql = "insert into usuarios (usuarioid, nombre, apellidos, direccion, ciudad, anioNac) 
                     values (?, ?, ?, ?, ?, ?)";
             $data = mcgUsuariosModel::$DB->run($sql, $values);
             return "Usuario ". $values['nombre'] . " insertado correctamente ";
        } catch(Exception $e){
           return $e->getMessage();
        }
    }
    public static function getFilter($param){
        mcgUsuariosModel::conexionDB();
        $sql = "Select * from libros where usuarioid = ?"
        $data = mcgUsuariosModel::$DB->run($sql, $param);
        return $data->fetchAll();
    }

    public static function getAll(){
        mcgUsuariosModel::conexionDB();
        $sql = "Select * from usuarios";
        $data = mcgUsuariosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
    public static function show($param){
        mcgUsuariosModel::conexionDB();
        $sql = 'SELECT * from Usuarios where Usuario_id = ?';
        $data = mcgUsuariosModel::$DB->run($sql, $param);
        return $data->fetch();
    }
}