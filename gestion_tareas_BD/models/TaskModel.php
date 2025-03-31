<?php

require_once '../config/database.php';

#Clase que se va dedicar a solo tener metodos para consultar el json de las tareas
class TaskModel{
    public $id_task;
    public $title;
    public $description;
    public $date;
    public $status;
    public $id_employee;

    public function __construct($title, $description, $id_employee)
    {
        $this->title = $title;
        $this->description = $description;
        #capturando la fecha actual
        $this->date = date('Y-m-d');
        $this->status = 'Pendiente';
        $this->id_employee = $id_employee;
    }

    //metodo para obtener todas las tareas
    public static function all(){
        # select * from tasks
        $pdo = Connection::getInstance()->getConnection();
        $query = $pdo->query("SELECT t.title, t.description, t.id_task, t.status, t.id_employee, e.name as employee FROM tasks t JOIN employees e ON t.id_employee = e.id_employee"); //obtiene la consulta
        $query->execute(); //ejecuta la consulta
        $result = $query->fetchAll(PDO::FETCH_ASSOC); //[] arreglo asociativo
        return $result;
    }

    //metodo para guardar la tareas
    public function save(){
        //insert into tasks (title, description, date, status, id_employee) values ('', '', '', '', '')
        $pdo = Connection::getInstance()->getConnection();
        //preparamos la consulta para recibir datos
        $query = $pdo->prepare("INSERT INTO tasks(title, description, date_task, status, id_employee) VALUES (?, ?, ?, ?, ?)");
        //pasamos como argumento los atributos que el usuario va llenar en el formulario
        $result = $query->execute(["$this->title","$this->description","$this->date","$this->status","$this->id_employee"]);
        return $result; //esto devuelve un booleano
    }

    //id, title, description
    //UPDATE table SET campos... WHERE id = ?
    public static function update($id_task, $title, $description){
        $pdo = Connection::getInstance()->getConnection();
        $query = $pdo->prepare("UPDATE tasks SET title = ?, description = ? WHERE id_task = ?");
        $result = $query->execute(["$title","$description",$id_task]);
        return $result; //un booleano
    }

}



