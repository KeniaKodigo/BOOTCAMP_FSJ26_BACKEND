<?php

#conectarnos a la base de datos (singleton) => tener una instancia unica
class Connection {
    private static $instance = null;
    private $pdo;

    private function __construct() {
        //conectandonos a la bd PDO
        try{
            //tipo de conexion, servidor, nombre de la base de datos
            $dsn = "mysql:host=b3sb0xo0r6wa1wluyxev-mysql.services.clever-cloud.com;dbname=b3sb0xo0r6wa1wluyxev;charset=utf8";

            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            //instanciando la conexion
            $this->pdo = new PDO($dsn,"uywmr0oaxolubowp","BBoCFUEJOGvbCYNYOu6Y",$options); //objeto
        }catch(PDOException $e){
            echo "Error al conectarnos a la base de datos: " . $e->getMessage();
        }
    }

    //metodo para obtener la instancia de la conexion
    public static function getInstance(){
        if(!self::$instance){
            //si es la primera vez que se conecta a la base de datos
            self::$instance = new Connection();
        }
        return self::$instance;
    }

    //metodo para obtener el objeto de la conexion
    public function getConnection(){
        return $this->pdo;
    }
}