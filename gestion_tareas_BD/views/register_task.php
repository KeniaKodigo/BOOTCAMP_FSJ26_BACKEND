<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registro de tareas</title>
</head>
<body>
    <h1>Registro de tareas</h1>
    <?php 
        require_once "../controller/ManagerController.php";
        $employees = ManagerController::getEmployees(); //[]
    ?>
    <div class="container">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">ID Tarea</label>
                <input type="number" class="form-control" id="id_task" name="id_task">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="mb-3">
                <label for="id_employee" class="form-label">Empleado</label>
                <select name="id_employee" id="" class="form-control">
                    <?php foreach($employees as $value) {  ?>
                        <option value="<?php echo $value['id_employee']; ?>"><?php echo $value['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>

    <?php 
        #creando la tarea, obtener informacion
        //isset() -> verifica si existe la variable
        //empty() -> verifica si la variable esta vacia
        if(isset($_POST['id_task'],$_POST['title'],$_POST['description'],$_POST['id_employee'])){
            $id = $_POST['id_task'];
            $title_task = $_POST['title'];
            $description_task = $_POST['description'];
            $id_employee = $_POST['id_employee'];

            //crear la instancia de la tarea
            $task = new TaskModel($id, $title_task, $description_task, $id_employee);
            ManagerController::create($task);
        }
        

        
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>