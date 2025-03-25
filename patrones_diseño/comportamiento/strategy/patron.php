<?php

interface StrategyPagos{
    public function procesarPago($monto);
}

#creando las estrategias
class Paypall implements StrategyPagos{

    public function procesarPago($monto){
        return "Pago por paypall, monto a pagar: $$monto";
    }
}

class TarjetaCredito implements StrategyPagos{

    public function procesarPago($monto){
        return "Pago por Tarjeta de Credito, monto a pagar: $$monto";
    }
}

class Criptomoneda implements StrategyPagos{

    public function procesarPago($monto){
        return "Pago por Criptomoneda, monto a pagar: $$monto";
    }
}


/**
 * clases de alto nivel no deben depender de las clases de bajo nivel ambas deben
 * de depender de abstracciones
 */

#clase donde se van a recibir las estrategias
class Procesar{
    #atributo privado
    //validando que el atributo privado solo reciba informacion de la interfaz Strategy
    private StrategyPagos $estrategia;

    //set (capturar) y get (retornar) (encapsulamiento)
    #metodo donde recibimos la estrategia
    public function setPagos(StrategyPagos $pago){
        $this->estrategia = $pago; //escogemos la estrategia
    }

    #metodo donde retornamos el comportamiento de la estrategia que elegimos
    public function procesar_pago($monto){
        return $this->estrategia->procesarPago($monto);
        //return "Usted esta pagando con tarjeta, ingrese el PIN";
    }
}

$pago = new Procesar();
$pago->setPagos(new Paypall);
echo $pago->procesar_pago(100);

echo "<br>";
$pago2 = new Procesar();
$pago2->setPagos(new TarjetaCredito);
echo $pago2->procesar_pago(230);

