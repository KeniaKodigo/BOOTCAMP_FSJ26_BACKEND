<?php

require_once "../controller/ManagerController.php";
require_once "../models/TaskModel.php";

$admin = new ManagerController(100,"sara lopez",5678990,"sarita@gmil.com",600);
//print_r($admin);

ManagerController::getTasks(); //obtiene todas las tareas

ManagerController::getTasks();

// $tarea = new TaskModel();

//ManagerController::create($tarea);
print_r(TaskModel::all());

// $array = [[1,23],[34,5]];
// json_encode($array, JSON_PRETTY_PRINT); 

// json_decode('../data/employee.json'); //formato de php

$task = new TaskModel(1,"Practicar POO","aprender poo y solid",2);
$task->save();