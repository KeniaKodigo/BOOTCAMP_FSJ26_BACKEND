<?php
    session_start();
    require_once "./controller/LoginController.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h1>Iniciar sesion</h1>

        <div class="mb-4">
            <form action="" method="POST">
                <input type="text" class="form-control mb-4" name="email">

                <input type="password" class="form-control" name="password">

                <button type="submit" class="btn btn-primary mt-4">Iniciar sesion</button>
            </form>
        </div>

        <?php
            if(isset($_POST['email'], $_POST['password'])){
                $input_email = $_POST['email'];
                $input_password = $_POST['password'];

                echo LoginController::login($input_email, $input_password);
            }
        ?>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>