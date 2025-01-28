<?php

function busqueda_binaria($array, $value){
    $inicio = 0;
    $fin = count($array) - 1;
    while($inicio <= $fin){
        $posicion_medio = intval(($inicio + $fin) / 2); //decimal

        if($array[$posicion_medio] == $value){
            return $posicion_medio;
        }

        if($array[$posicion_medio] > $value){
            $fin = $posicion_medio - 1;
        }else{
            $inicio = $posicion_medio + 1;
        }
    }

    return -1;
}

echo busqueda_binaria([1,3,5,10,32,40,60,71,80,99], 800);