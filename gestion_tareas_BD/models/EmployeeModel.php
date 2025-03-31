<?php

class EmployeeModel{

    //metodos reacionados a la data del empleado
    public static function all(){
        $pdo = Connection::getInstance()->getConnection();
        $query = $pdo->query("SELECT id_employee, name FROM employees"); //obtiene la consulta
        $query->execute(); //ejecuta la consulta
        $result = $query->fetchAll(PDO::FETCH_ASSOC); //[] arreglo asociativo
        return $result;
    }

    //metodo para verificar correo y contrasena del empleado 
    public static function findByEmailAndPassword($email, $password){
        $pdo = Connection::getInstance()->getConnection();
        $query = $pdo->prepare("SELECT * FROM employees WHERE email = :email AND password = :pass"); //1 persona
        $query->bindParam(":email", $email);
        $query->bindParam(":pass", $password);
        $query->execute();

        $employee = $query->fetch(PDO::FETCH_ASSOC); //solo traeme un registro asociar a un arreglo
        return $employee;
    }
}