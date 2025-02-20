<?php

//intermediarios
abstract class Usuario{
    public $nombre;
    public $telefono;

    public function __construct($nombre, $telefono)
    {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
    }

    public abstract function verPerfil();
}

class Estudiante extends Usuario{
    public $carnet;

    public function verPerfil()
    {
        return "Soy un estudiante :)";
    }
}


class Profesor extends Usuario{

    public function verPerfil()
    {
        return "Soy un profesor a tiempo completo! :)";
    }
}

class ProfesorInvitados extends Usuario{
    public function verPerfil()
    {
        return "Soy un profesor y trabajo por horas! :)";
    }
}


class GestorInscripcion {
    private Usuario $usuario;

    public function __construct(Usuario $usuario) { //estudiante, profesor, profesor invitado
        $this->usuario = $usuario;
    }
}

$estudiante = new Estudiante("Kenia",768903);

$profesor = new Profesor("Pablo Chacon",5678);

$inscripcion = new GestorInscripcion($estudiante);
$inscripcion2 = new GestorInscripcion($profesor);
print_r($inscripcion);