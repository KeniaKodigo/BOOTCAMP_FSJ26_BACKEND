<?php

function bubbleSort($array){
    $contador = 0;
    $intercambios = 0;
    #count => calcula el tamano de un arreglo
    //bucle que verificar y nos ayuda a entrar al segundo bucle para ordenar el arreglo
    for($i = 0; $i < count($array); $i++){

        //segundo bucle que hace los intercambios de los elementos
        for($j = 0; $j < count($array) - 1; $j++){

            //evaluar si se van a intercambiar los elementos
            //j vs j + 1
            if($array[$j] > $array[$j + 1]){
                //intercambio
                $temporal = $array[$j + 1];
                $array[$j + 1] = $array[$j];
                $array[$j] = $temporal;

                $intercambios++;
            }
            $contador++;
            echo json_encode($array, JSON_PRETTY_PRINT) . "<br>";
        }
    }
    echo "Total de iteraciones del segundo bucle: $contador<br>";
    echo "Total de intercambios: $intercambios<br>";
}

bubbleSort([23,12,45,4,33,10]);

bubbleSort([1000,-10,34,5,20]);