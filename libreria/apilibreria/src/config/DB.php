<?php
namespace App\Config;
use \PDO;
use App\Config\config;

class DB {
    protected $pdo;
    //establece la conexion al hacer un new DB() desde el controlador
    public function __construct() {
        //OPCIONES EN COMO MYSQL LE PASA DATOS A PHP(APACHE)
        $opciones = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //que PDO lance las excepciones si hay errores
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ //los resultados los regrese en un objeto
        ];
        //cadena de conexion a la base de datos
        $dsn = "mysql:host=".config::DB_HOST.
        ";port=".config::DB_PORT.
        ";dbname=".config::DB_NAME.
        ";charset=".config::DB_CHARSET;
        //se establece la conexion a la bd
        $this->pdo = new PDO($dsn, config::DB_USER, config::DB_PASSWD, $opciones);
    }
    public function run($sql, $args = []){
        // Ejecutará las consulta $sql con parámetros que le pasemos
        //sql --> select * from articulos where id = ? and precio > ?
        //En args meteremos variables del where de una consulta --> $args = [10, 56.7]
        if (!$args){
            $data = $this->pdo->query($sql);
            return $data;
        }
        $sentencia = $this->pdo->prepare($sql);
        $sentencia->execute($args);
        return $sentencia;
    }
    }