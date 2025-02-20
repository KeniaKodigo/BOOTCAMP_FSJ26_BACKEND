<?php

//intermediarios
interface IUsuario{
    public function verPerfil();
}

class Estudiante implements IUsuario{
    public $nombre;
    public $carnet;

    public function verPerfil()
    {
        return "Soy un estudiante :)";
    }
}


class Profesor implements IUsuario{
    public $nombre;

    public function verPerfil()
    {
        return "Soy un profesor a tiempo completo! :)";
    }
}

class ProfesorInvitados implements IUsuario{
    public $nombre;

    public function verPerfil()
    {
        return "Soy un profesor y trabajo por horas! :)";
    }
}


class GestorInscripcion {
    private IUsuario $usuario;

    public function __construct(IUsuario $usuario) { //estudiante, profesor, profesor invitado
        $this->usuario = $usuario;
    }
}

$estudiante = new Estudiante("Kenia",768903);
$profesor = new Profesor("Pablo Chacon",5678);

$inscripcion = new GestorInscripcion($estudiante);
$inscripcion2 = new GestorInscripcion($profesor);
print_r($inscripcion);