<?php


class EmployeeModel{
    private static $file_path = '../data/employee.json';

    //metodos reacionados a la data del empleado
    public static function all(){
        $json = file_get_contents(self::$file_path); //json
        return json_decode($json, true); //arreglo []
    }
}