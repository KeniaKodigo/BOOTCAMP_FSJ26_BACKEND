<?php
require_once "../controller/EmployeeController.php";
require_once "../interfaces/ITask.php";

class ManagerController extends EmployeeController implements ITask{
    
    public static function getTasks(){
        //code..
    }

    public static function create(TaskModel $task)
    {
        //code..
    }

    public static function edit($id_task, $title, $description)
    {
        //code..
    }
}

