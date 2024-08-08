<?php

session_start();

if ($_POST) {
    $usuario = ($_POST['txtUsuario']) ? $_POST['txtUsuario'] : "";
    $clave = ($_POST['txtClave']) ? $_POST['txtClave'] : "";

    if ($usuario == "admin" && $clave == "admin") {
        $_SESSION['logueado'] = true;
        $_SESSION['usuario'] = $usuario;
        header("location:index.php");
    } else {
        echo
        "<div class='alert alert-danger' role='alert'>
            <strong>Usuario o contraseña incorrectos</strong>
        </div>";
    }
}

?>

<!-- bs5-$ es para poner la estructura de html con bootstrap incluido -->

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-4">

            </div>

            <div class="col-md-4">

                <div class="card">
                    <div class="card-header">
                        Iniciar Sesion
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            Usuario: <input type="text" class="form-control" name="txtUsuario" id=""> <br>
                            Contraseña: <input type="password" class="form-control" name="txtClave" id=""> <br>
                            <input type="submit" value="Ingresar" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

            </div>
        </div>
    </div>
</body>

</html>