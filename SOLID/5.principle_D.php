<?php

class Estudiantes{
    public $nombre;
    public $carnet;

    public function __construct($nombre, $carnet)
    {
        $this->nombre = $nombre;
        $this->carnet = $carnet;
    }
}

class GestorInscripciones {
    private Estudiantes $estudiante;

    public function __construct(Estudiantes $estudiante) {
        $this->estudiante = $estudiante;
    }
}

class Profesores{
    public $nombre;


    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
}

$estudiante = new Estudiantes("Kenia","KP2024");

$profesor = new Profesores("Pablo Chacon");

$inscripcion = new GestorInscripciones($estudiante);
$inscripcion2 = new GestorInscripciones($profesor);
print_r($inscripcion);