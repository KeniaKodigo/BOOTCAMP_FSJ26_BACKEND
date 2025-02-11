<?php

//crear una calculadora
class Calculadora{
    public static $resultado;
    public $numero1;

    public function sumar(){
        //code..
        $this->numero1 = 12;
    }

    public function restar(){
        $this->sumar();
    }

    public function multiplicar($a, $b){
        return $a * $b;
    }

    public static function dividir($a, $b){
        return $a / $b;
        Calculadora::$resultado = 100;
        self::multiplicar(12,3);
    }

    public static function listar_empleados(){
        //code..
        //conectarme a la bd y obtener los empleados (iterar)
        self::dividir(10,3);
    }

    public function crear_empleado(){ //creo un empleado
        //code..
    }
}

//120 * 90
//instanciar
$calculadora1 = new Calculadora();
echo $calculadora1->multiplicar(120,90);
echo "<br>";
// $calculadora1->dividir(10, 5);
echo Calculadora::dividir(10, 5);
Calculadora::dividir(10, 5);
Calculadora::dividir(12,3);
Calculadora::dividir(45, 5);


