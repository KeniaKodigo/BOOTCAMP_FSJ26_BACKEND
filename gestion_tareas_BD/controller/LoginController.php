<?php

require_once "config/database.php";
require_once "models/EmployeeModel.php";

class LoginController{

    public static function login($email, $password){
        //llamando al metodo del modelo para verificar el empleado
        $employee = EmployeeModel::findByEmailAndPassword($email, $password);
        
        if($employee){
            //echo $employee['name'] .  " su rol es" . $employee['id_role'];
            //nombre del empleado, su id y su correo
            $role = $employee['id_role'];
            //declarando sessiones
            $_SESSION['employee'] = $employee['name'];
            $_SESSION['code'] = $employee['id_employee'];

            if($role == 1){
                header('Location: ./admin.php');
            }else{
                header('Location: ./views/employee.php');
            }

        }else{
            return "<div class='alert alert-danger' role='alert'>
                    Credenciales Incorrectas!
                </div>";
        }
    }

    public static function logout(){
        //destruyendo la sesion
        session_start();
        //destruir su informacion
        session_destroy();
        //destruir las variables de la sesion
        session_unset();

        header('Location: index.php');
    }
    
}