<?php

//es un contrato que solo tiene metodos abstractos
interface ICourses{
    public function temario(); //metodo sin comportamiento
    public function getDuration();
}

class CursoBasico implements ICourses{
    public $title;
    public $price;

    public function getDuration()
    {
        return 30;
    }

    public function temario()
    {
        
    }

}

class CursoIntermedio implements ICourses{
    public $title;
    public $price;

    public function getDuration()
    {
        return 45;
    }

    public function temario(){
        
    }
}

class CursoAvanzado implements ICourses{
    public $title;
    public $price;

    public function getDuration()
    {
        return 60;
    }

    public function temario(){
        //code..
    }
}

//agregar una nueva clase
class CursoEspecial implements ICourses{
    public function getDuration()
    {
        return 15;
    }

    public function temario(){
        //code..
    }
}