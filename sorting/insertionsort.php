<?php

function insertionSort($array){
    /**
     * [23,12,45,4,33,10]
     * 
     * [12,23,45,4,33,10]
     * [4,12,23,45,33,10]
     * []
     */
    $contador = 0;
    $intercambios = 0;
    for($i = 0; $i < count($array); $i++){
        //$i = 0, 1, 2, 3, 4, 33
        $punto_interseccion = $array[$i]; //23, 12, 45, 4
        $j = $i - 1; //-1, 0,  1, 2 
        //array[j] = 23
        while($j >=0 && $punto_interseccion < $array[$j]){
            //intercambio
            $array[$j + 1] = $array[$j];
            $array[$j] = $punto_interseccion;

            $j = $j - 1; //-1, 1, 0, -1
            $intercambios++;
        }

        $contador++;
        echo json_encode($array, JSON_PRETTY_PRINT) . "<br>";
    }
    echo "Total de iteraciones del segundo bucle: $contador<br>";
    echo "Total de intercambios: $intercambios<br>";

}

insertionSort([23,12,45,4,33,10]);


//recursion
// function sumar(){
//     $numeros = [4,5,6];
//     $resultado = 0;

//     for($i = 0; $i < count($numeros); $i++){
//         $resultado += $numeros[$i];

//         if(count($resultado) > 1){
//             sumar();
//         }else{

//         }
//     }
// }

// sacar el factorial de un numero (!)
// fibonacci


function factorial($n){
    if ($n == 0 || $n == 1) {
        return 1;
    }
    $factorial = 1;
    for($i = 1; $i <= $n; $i++){
        $factorial *= $i;
    }

    echo $factorial;
}

factorial(5);

// function factorial($n) {
//     if ($n == 0 || $n == 1) {
//         return 1;
//     }
//     return $n * factorial($n - 1);
// }
// factorial(5);