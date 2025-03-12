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

    //metodo para obtener todas las tareas del json
    public static function all(){
        //TaskModel::$file_path
        if(file_exists(self::$file_path)){
            //obtener los datos
            $json = file_get_contents(self::$file_path); //php
            //print_r($json);
            //convertir un arreglo de php a json
            //echo json_encode($json, JSON_PRETTY_PRINT);
            //decodificar el json y lo convierte en un arreglo de PHP
            return json_decode($json, true); //arreglo tipo muiltidimensinal / asociativos
        }
        return [];
    }

    //metodo para guardar la tareas
    public function save(){
        //adonde vamos a guardar la informacion
        //actualizar el json con la nueva tarea
        $tasks = self::all();
        //guardar la nueva tarea
        // array_push($tasks, [
        //     "id_task" => 1,
        //     "title" => "",
        //     "description" => "",
        //     "date" => "",
        //     "status" => "",
        //     "id_employee" => ""
        // ]);

        $tasks[] = [
            "id_task" => $this->id_task,
            "title" => $this->title,
            "description" => $this->description,
            "date" => $this->date,
            "status" => $this->status,
            "id_employee" => $this->id_employee
        ];
        //actualizamos el json con la nueva tarea y mantenemos tareas anteriores
        self::loadJSON($tasks);
        return "Se ha guardado la tarea";
    }

    //metodo que cargue y actualize el json
    private static function loadJSON($tasks){
        $json = json_encode($tasks, JSON_PRETTY_PRINT);
        file_put_contents(self::$file_path, $json);
    }

    //id, title, description
    public static function update($id_task, $title, $description){
        $tasks = self::all(); //[]
        $found = false; //true

        //iteramos las tareas para validar si la tarea existe o no existe
        //... spread operator
        foreach($tasks as &$task){
            if($task['id_task'] == $id_task){
                $task['title'] = $title;
                $task['description'] = $description;
                $found = true;
                //hacemos un break para que ya no se iteren las demas tareas
                break;
            }
        }

        //validando cuando la tarea existe
        if($found){
            self::loadJSON($tasks);
            return "Se ha actualizado la tarea";
        }else{
            return "No se ha encontrado la tarea";
        }

    }
}




