<?php

#Clase que se va dedicar a solo tener metodos para consultar el json de las tareas
class TaskModel{
    public $id_task;
    public $title;
    public $description;
    public $date;
    public $status;
    public $id_employee;

    //atributo que va tener la ruta del json
    private static $file_path = '../data/tasks.json';

    public function __construct($id_task, $title, $description, $id_employee)
    {
        $this->id_task = $id_task;
        $this->title = $title;
        $this->description = $description;
        #capturando la fecha actual
        $this->date = date('Y-m-d');
        $this->status = 'Pendiente';
        $this->id_employee = $id_employee;
    }
}
