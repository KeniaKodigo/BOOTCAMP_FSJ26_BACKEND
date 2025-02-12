<?php

class Libro {
    public $titulo;

    public function __construct()
    {
        
    }
}

//ejemplos
$libro = new Libro();


class Usuario{
    public $prestamos = [];

    public function solicitarPrestamos(Libro $libro){

    }
}

$usuario = new Usuario(); //juanito
$usuario->solicitarPrestamos("El principito");
