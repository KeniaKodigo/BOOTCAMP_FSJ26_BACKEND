<?php
require_once "../controller/EmployeeController.php";
require_once "../interfaces/ITask.php";

class ManagerController extends EmployeeController implements ITask{
    
    public static function getTasks(){
        try{
            //obtenemos las tareas del metodo del modelo
            $array_tasks = TaskModel::all();
            return $array_tasks;
        }catch(Error $error){
            return "Error al cargar las tareas: " . $error;
        }
    }

    public static function create(TaskModel $task)
    {
        try{
            $task->save();
            //redireccionar vistas
            //header('Location: views/');
            exit();
        }catch(Error $error){
            return "Error al guardar la tarea: " . $error;
        }
    }

    public static function edit($id_task, $title, $description)
    {
        //code..
    }
}

