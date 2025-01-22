<?php

//Arreglo indexado => cada elemento del arreglo se maneja a travez de un indice o una posicion numericas

$numeros = [1,2,3,4,5];
echo $numeros[3]; //4

$utiles = ["cuaderno","tijeras","lapiz"];
echo $utiles[1]; //tijeras

//Arreglos asociativo => tenemos clave y valor (objeto)
//diccionario = {}, php => []
$pais = [
    "pais" => "El Salvador",
    "departamentos" => ["San Salvador","Chalatenango","Sonsonate"],
    "poblacion" => 10000
];

$pais["poblacion"]; //10000


//Arreglo multidimensional => dentro de un arreglo hay otros arreglos (arreglo de objeto)
$numeros_multi = [
    [1,2,3,4,5],
    [6,7,8,9,10],
    [23,45,67,12]
];

$numeros_multi[1][3]; //9

$centroamerica = [
    [
        "pais" => "El Salvador",
        "departamentos" => ["San Salvador","Chalatenango","Sonsonate"],
        "poblacion" => 10000
    ],
    [
        "pais" => "Honduras",
        "departamentos" => [""],
        "poblacion" => 10200
    ],
    [
        "pais" => "Nicaragua",
        "departamentos" => [""],
        "poblacion" => 10200
    ]
];
echo "<br>";
$centroamerica[1]['pais']; //Honduras

for($i=0; $i < count($centroamerica); $i++){
    echo $centroamerica[$i]["pais"] . "<br>";

    if($centroamerica[$i]['poblacion'] > 10000){
        echo "Pais: " . $centroamerica[$i]['pais'] . "\n";
        echo "Poblacion: " . $centroamerica[$i]['poblacion'] . "\n";
    }
}

echo "\n";
foreach($centroamerica as $item){
    echo $item['pais'] . " ";
}

//readline
echo "\n";
$saludo = readline("Ingresa un saludo: ");
echo $saludo;

