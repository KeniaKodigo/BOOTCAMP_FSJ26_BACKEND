<?php

//estructuras condicionales => if-else, switch, operador ternario, if-else if-else
echo "<h3>IF-ELSE</h3>";
function votar($edad){
    if($edad >= 18){
        echo "Felicidades, puedes votar";
    }else{
        echo "Aun no puedes votar";
    }
}
votar(30);
echo "<br>";
echo "<h3>Operador Ternario</h3>";
function votarV2($edad){
    echo $edad >= 18 ? "Felicidades, puedes votar" : "Aun no puedes votar";
}
votarV2(11);

echo "<h3>IF-ELSE IF-ELSE</h3>";
function calcularImpuesto($salario){
    if($salario <= 472){
        echo "No aplica la renta";
    }else if($salario > 472 && $salario <= 895.24){
        echo "Aplica el 10% de la renta";
    }else if($salario >= 895.25 && $salario <= 2039.10){
        echo "Aplica el 20% de la renta";
    }else{
        echo "Aplica el 30% de la renta";
    }
}
echo calcularImpuesto(500);
echo "<br>";
echo calcularImpuesto(350);

echo "<h3>SWITCH</h3>";
function estaciones($estacion){
    $mensaje = "";
    //validamos que la entrada este en minuscula (convertimos la cadena en minuscula)
    switch(strtolower($estacion)){
        case "primavera":
            $mensaje = "Primavera";
            break;

        case "otoño":
            $mensaje = "Otoño";
            break;
        
        case "verano":
            $mensaje = "Verano";
            break;

        case "invierno":
            $mensaje = "Invierno";
            break;
        
        default:
            return "Seleccion la estacion correcta";
    }

    return "Tu estacion favorita es: $mensaje";
}
//funcion que convierte cadenas en minuscula
echo estaciones("INVIERNO");

//estructuras repetitivas => while, do while, for
//contador, limitante, incremento/decremento
echo "<h3>Uso del FOR</h3>";
function contador(){
    for($i = 1; $i <= 100; $i++){
        echo "Numero $i--";
    }
}
contador();
echo "<br>";
function contadorV2(){
    $cadena = "Bienvenido Bootcamp FSJ26";
    for($i = 0; $i < strlen($cadena); $i++){
        //imprimos cada elemento de la cadena
        echo "$cadena[$i]**";
    }
}
contadorV2();

echo "<h3>Uso del WHILE</h3>";
function contadorInverso(){
    $i = 100;
    while($i >= 1){
        echo "Numero $i--";
        $i--;
    }
}

contadorInverso();