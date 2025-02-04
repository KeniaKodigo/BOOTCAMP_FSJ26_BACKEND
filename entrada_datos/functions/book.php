<?php

//Obteniendo los datos del formulario
function addBook(){
    //code..
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    //creando un objeto del libro del formulario
    $book = [
        "titulo" => $titulo,
        "autor" => $autor
    ];

    echo json_encode($book, true);

    // $book['titulo'] = $titulo;
    // $book['autor'] = $autor;
}

addBook();