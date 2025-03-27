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
            $result = $task->save();
            if($result){
                //redireccionar vistas
                header('Location: ./tasks.php');
                exit();
            }else{
                echo "Error al guardar la tarea";
            }
            
        }catch(Error $error){
            return "Error al guardar la tarea: " . $error;
        }
    }

    public static function edit($id_task, $title, $description)
    {
        try{
            $result = TaskModel::update($id_task, $title, $description);
            if($result){
                echo '<script>
                    window.location.href = "./tasks.php";
                </script>';
            }else{
                echo "Error al editar la tarea";
            }
        }catch(Error $error){
            return "Error al editar la tarea: " . $error;
        }
    }
}

