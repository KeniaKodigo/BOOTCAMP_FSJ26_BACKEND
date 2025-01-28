<?php

function busqueda_lineal($array, $value){
    foreach($array as $item){
        if($item == $value){
            return $item;
        }
    }
    return -1;
}

function busqueda($array, $value){
    for($i =0; $i < count($array); $i++){
        if($array[$i] == $value){
            return $array[$i];
        }
    }

    return -1;
}

echo busqueda_lineal([23,45,12,1,20], 3);