<?php

//LIFO => ultimo en entrar, primero en salir
$pila = ["impresora","laptop","telefono"];

//como ingresan y como salen
array_push($pila, "audifonos inalambricos","ventilador de mano");
print_r($pila);

echo "<br>";
array_pop($pila);
print_r($pila);

echo "<br>";
$pila_lenguajes = new SplStack(); //objeto de tipo SPLStack => []
$pila_lenguajes->push("PHP");
$pila_lenguajes->push("HTML");
$pila_lenguajes->push("Javascript");

print_r($pila_lenguajes);

$pila_lenguajes->pop();
print_r($pila_lenguajes);