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
        $list_tasks = ManagerController::getTasks(); //[]
    ?>
    <main class="container">
        <h1>Lista de tareas</h1>

        <a href="./register_task.php" class="btn btn-primary my-4">Registrar Tarea</a>

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
                        <td><?php echo $item['employee']; ?></td>
                        <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalEditar<?php echo $item['id_task']; ?>">Editar</button>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="ModalEditar<?php echo $item['id_task']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $item['title']; ?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST">
                            <div class="modal-body">
                                <!-- input oculto para obtener el id de la tarea -->
                                <input type="hidden" name="id_task" value="<?php echo $item['id_task']; ?>">

                                <div class="mb-3">
                                    <label for="title" class="form-label">Titulo</label>
                                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $item['title']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Descripcion</label>
                                    <input type="text" class="form-control" name="description" value="<?php echo $item['description']; ?>">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-dark">Actualizar Tarea</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                <?php } ?>
            </tbody>
        </table>
        <?php 
            //editando la tarea
            if(isset($_POST['id_task'],$_POST['title'],$_POST['description'])){
                $id = $_POST['id_task'];
                $title_task = $_POST['title'];
                $description_task = $_POST['description'];
                
                echo ManagerController::edit($id, $title_task, $description_task);
            }
                    
        ?>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>