<?php
require_once "../models/TaskModel.php";

interface ITask{
    public static function getTasks();
    public static function create(TaskModel $task);
    public static function edit($id_task, $title, $description);
}