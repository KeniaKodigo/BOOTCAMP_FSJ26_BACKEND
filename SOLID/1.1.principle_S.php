<?php

require_once "./1.principle_S.php";

class Payments{

    public function registerPayment(Student $student, $amount) {
        return "El estudiante " . $student->name . " pago $$amount";
        // switch($type){
        //     case "tarjeta credito":
        //         //code...
        //         //numero, fecha, codigo, usuario
        //         break;

        //     case "efectivo":
        //         //code..
        //         break;

        //     case "deposito Agricola":
        //         //code.. numero de cuenta, subir el comprobante
        // }
    }

    public function getPayments() {
        //code..
    }
}

//creando a estudiantes
$juanito = new Student("juanito perez","juanito@gmail.com","JP2025");

//instanciar
$pago = new Payments();
echo $pago->registerPayment($juanito, 25);

//clase para cada forma de pago