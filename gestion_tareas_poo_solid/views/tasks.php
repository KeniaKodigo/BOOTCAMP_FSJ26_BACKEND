<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lista Tareas</title>
</head>
<body>
    <?php 
        require_once "../controller/ManagerController.php";
        $list_tasks = ManagerController::getTasks();
    ?>
    <main class="container">
        <h1>Lista de tareas</h1>

        <a href="#" class="btn btn-primary my-4">Registrar Tarea</a>

        <table class="table">
            <thead>
                <th>ID</th>
                <th>Titulo</th>
                <th>Estado</th>
                <th>Empleado</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <!-- Iterando las tareas del json  -->
                <?php foreach($list_tasks as $item){ ?>
                    <tr>
                        <td><?php echo $item['id_task']; ?></td>
                        <td><?php echo $item['title']; ?></td>
                        <td><?php echo $item['status']; ?></td>
                        <td><?php echo $item['id_employee']; ?></td>
                        <td>
                            <button>Editar</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>