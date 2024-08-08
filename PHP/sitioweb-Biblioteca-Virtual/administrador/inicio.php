<?php include("templates/cabecera.php"); ?>

<div class="col-md-12">
    <div class="jumbotron">
        <h1 class="display-3">Bienvenido <?php echo $nombreUsuario ?></h1>
        <p class="lead">Vamos a administrar nuestros libros en el sistio web</p>
        <hr class="my-2">
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="seccion/productos.php" role="button">Administrar Libros</a>
        </p>
    </div>
</div>

<?php include("templates/pie.php"); ?>