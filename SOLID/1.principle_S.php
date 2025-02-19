<?php

#Responsabilidad Unica

class Student {
    public $name;
    public $email;
    public $carnet;

    public function __construct($name, $email, $carnet)
    {
        $this->name = $name;
        $this->email = $email;
        $this->carnet = $carnet;
    }

    public function getStudents(){
        //code..
    }
}