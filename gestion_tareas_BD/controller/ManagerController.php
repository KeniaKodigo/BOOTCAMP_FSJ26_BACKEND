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
            header('Location: ./tasks.php');
            exit();
        }catch(Error $error){
            return "Error al guardar la tarea: " . $error;
        }
    }

    public static function edit($id_task, $title, $description)
    {
        try{
            TaskModel::update($id_task, $title, $description);
            //header('Location: ./tasks.php');
            //script
            echo '<script>
                window.location.href = "./tasks.php";
            </script>';
        }catch(Error $error){
            return "Error al editar la tarea: " . $error;
        }
    }
}

