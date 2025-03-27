<?php

require_once '../config/database.php';

$pdo = Connection::getInstance(); //crear la instancia de la conexion
print_r($pdo->getConnection()); //si la conexion es un exito o no