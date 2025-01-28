<?php

function quickSort($array){

    /**
     * [23,12,45,4,33,10]
     * [12, 4, 10]
     * [45, 33]
     */

    if(count($array) > 0){
        //aplicar quicksort
        $pivote = $array[0]; //23, 12
        $izquierda = []; //[12, 4, 10]
        $derecha = []; //[45, 33]

        for($i = 1; $i < count($array); $i++){
            if($array[$i] < $pivote){
                //izquierda
                array_push($izquierda, $array[$i]);
                echo "Izquierda <br>";
                echo json_encode($izquierda, JSON_PRETTY_PRINT) . "<br>";
            }else{
                //derecha
                array_push($derecha, $array[$i]);
                echo "Derecha <br>";
                echo json_encode($derecha, JSON_PRETTY_PRINT) . "<br>";
            }
        }

        //fusionamos los arreglos + el pivote [12, 4, 10][23][45, 33]
        return array_merge(quicksort($izquierda), array($pivote), quickSort($derecha));
        //volver un bucle, arreglo
    }else{
        return $array;
    }
}

quickSort([23,12,45,4,33,10]);