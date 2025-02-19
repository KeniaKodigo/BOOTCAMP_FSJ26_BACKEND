<?php

#Abierto / Cerrado

//clase padre
abstract class Courses {
    public $title;
    public $price;
    public $description;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public abstract function getDuration(); //metodos obligatorios

    public function temario(){
        //code..
        return "Temario para cada curso";
    }
}

//$curso = new Courses(); //creando un objeto


//extiendo en clases
class CursoBasico extends Courses{
    public function getDuration()
    {
        return 30;
    }

}

$curso_basico1 = new CursoBasico("Basico FSJ26");

class CursoIntermedio extends Courses{
    public function getDuration()
    {
        return 45;
    }

    public function temario(){
        
    }
}

class CursoAvanzado extends Courses{
    public function getDuration()
    {
        return 60;
    }

    public function temario(){
        //code..
    }
}

//agregar una nueva clase
class CursoEspecial extends Courses{
    public function getDuration()
    {
        return 15;
    }
}