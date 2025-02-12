<?php

class Editorial{
    public $nombre;
}

class Libro {
    public $titulo;
    public Editorial $editorial; //objeto de tipo editorial

    public function __construct($titulo, $editorial)
    {
        $this->titulo = $titulo;
        //composicion
        $this->editorial = new Editorial($editorial);
    }
}

$editorial1 = new Editorial();

$editorial2 = new Editorial();