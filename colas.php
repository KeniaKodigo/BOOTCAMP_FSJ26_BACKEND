<?php

$cola = ["Juan Perez","Maria","Rosa Chavez","Jose"];
//agregando elementos
array_push($cola, "Mauricio","Angelica");
$cola[] = "dato4";
$cola[] = "dato5";

print_r($cola);
//quitamos el primer elemento
array_shift($cola);
echo "<br>";
print_r($cola);


$cola_impresion = new SplQueue();
$cola_impresion[] = "Ticket1";
$cola_impresion->enqueue("Ticket2");
$cola_impresion->enqueue("Ticket3");
$cola_impresion->enqueue("Ticket4");
echo "<br>";
print_r($cola_impresion);

$cola_impresion->dequeue();
echo "<br>";
print_r($cola_impresion);
