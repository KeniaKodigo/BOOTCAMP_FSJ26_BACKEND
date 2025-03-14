<?php

class ProcesarPagos {
    public function procesar($metodo, $monto) {
        if ($metodo == 'PayPal') {
            // Lógica para procesar pago con PayPal
            echo "Procesando pago de $monto con PayPal";
        } elseif ($metodo == 'TarjetaCredito') {
            // Lógica para procesar pago con Tarjeta de Crédito
            echo "Procesando pago de $monto con Tarjeta de Crédito";
        } else {
            throw new Exception("Método de pago no soportado");
        }
    }
}

// Uso sin Strategy
$procesador = new ProcesarPagos();
$procesador->procesar('PayPal', 100);
$procesador->procesar('TarjetaCredito', 200);