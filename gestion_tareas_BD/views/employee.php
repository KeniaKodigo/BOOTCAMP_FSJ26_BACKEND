<?php
    require_once "../controller/EmployeeController.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Bienvenido/a <?php echo $_SESSION['employee']; ?>!</h1>
    <p class="fw-bold">Codigo del empleado: <?php echo $_SESSION['code']; ?></p>
    <h4 class="text-center text-secondary">Listado de Tareas Pendientes</h4>

    <?php 
        $tasks = EmployeeController::getTasksByEmployee();
        //print_r($tasks); []
    ?>

    <table class="table">
        <thead>
            <th>ID</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Estado</th>
        </thead>
        <tbody>
            <?php 
                if(count($tasks) > 0){
                    foreach($tasks as $item){ ?>
                        <tr>
                            <td><?php echo $item['id_task']; ?></td>
                            <td><?php echo $item['title']; ?></td>
                            <td><?php echo $item['description']; ?></td>
                            <td><?php echo $item['status']; ?></td>
                        </tr>
                    <?php } ?>
            <?php }else{ ?>
                <tr>
                    <td colspan="4" class="text-center">No hay tareas</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>