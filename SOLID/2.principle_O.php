<?php

#Abierto / Cerrado

//clase padre
class Course {
    public $title;

    public function getDuration() {
        //code..
    }

    public function temario(){

    }
}

//extiendo en clases
class CursoBasico extends Course{
    public function getDuration()
    {
        return 30;
    }

}

class CursoIntermedio extends Course{
    public function getDuration()
    {
        return 45;
    }

    public function temario(){
        
    }
}

class CursoAvanzado extends Course{
    public function getDuration()
    {
        return 60;
    }

    public function temario(){
        //code..
    }
}

//agregar una nueva clase
class CursoEspecial extends Course{
    public function getDuration()
    {
        return 15;
    }
}