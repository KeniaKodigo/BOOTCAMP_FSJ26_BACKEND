<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php 
        #incluyendo un menu de navegacion
        include __DIR__ . "/modules/nav.php"; 
        echo __DIR__;
    ?>
    <h1 class="text-center mt-4">Entrada de Datos</h1>

    <div class="container">
        <?php 
            // include "./test.php";
            // include "./test.php";
            // require "./test.php";
            // require "./test.php";
            include_once "./test.php"; //solamente una vez
            include_once "./test.php";
            //code...
        ?>

        <h1>Otros...</h1>

        <form action="./functions/book.php" method="POST">
            <label for="">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo">

            <label for="">Autor</label>
            <input type="text" class="form-control" name="autor">

            <input type="submit" class="btn btn-dark mt-4" value="Guardar Libro">
        </form>
        <!-- 
            Peticiones HTTP: GET, POST, PUT, PATCH, DELETE
        -->
        <?php
            //logica...
        ?>
    </div>
</body>
<script>
    document.querySelector('#titulo').value; //
    document.getElementById('titulo').value;
</script>
</html>