<?php
    require_once "./controller/LoginController.php";
    session_start();
    if(!isset($_SESSION['code'])){
        echo "<h1>Debes iniciar sesion!</h1>";
    }else{
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

    <h4 class="text-center text-secondary">Gestion de Tareas y empleados</h4>
    <p class="fw-bold">Codigo del empleado: <?php echo $_SESSION['code']; ?></p>
    <div class="text-center">
        <a href="./views/tasks.php" class="btn btn-success">Informacion de empleados</a>
    </div>
    
    <form action="" method="POST">
        <button class="btn btn-danger" name="logout" type="submit">Cerrar Sesion</button>
    </form>
    <?php 
        if(isset($_POST['logout'])){
            LoginController::logout();
        }
    ?>
</body>
</html>
<?php } ?>