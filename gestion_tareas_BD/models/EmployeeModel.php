<?php

require_once "../config/database.php";

class EmployeeModel{

    //metodos reacionados a la data del empleado
    public static function all(){
        $pdo = Connection::getInstance()->getConnection();
        $query = $pdo->query("SELECT id_employee, name FROM employees"); //obtiene la consulta
        $query->execute(); //ejecuta la consulta
        $result = $query->fetchAll(PDO::FETCH_ASSOC); //[] arreglo asociativo
        return $result;
    }
}