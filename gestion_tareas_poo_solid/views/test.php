<?php

require_once "../controller/ManagerController.php";

$admin = new ManagerController(100,"sara lopez",5678990,"sarita@gmil.com",600);
//print_r($admin);

ManagerController::getTasks(); //obtiene todas las tareas

ManagerController::getTasks();

// $tarea = new TaskModel();
// ManagerController::create($tarea);