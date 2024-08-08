<?php require_once("cabecera.php"); ?>
<?php require_once("conexion.php"); ?>

<?php
//consultar datos
$objConexion = new conexion();
$sql = "SELECT * FROM proyectos";
$resultado = $objConexion->consultar($sql);

?>
<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Bienvenidos</h1>
        <p class="lead">Este es un portafolio privado</p>
        <hr class="my-2">
        <p>Proyectos</p>

    </div>
</div>

<?php foreach ($resultado as $proyecto) { ?>
<div class="card mb-3">
    <img src="imagenes/<?php echo $proyecto['imagen']; ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $proyecto['nombre'] ?></h5>
        <p class="card-text"><?php echo $proyecto['descripcion'] ?></p>
    </div>
</div>

<?php } ?>

<?php require_once("pie.php"); ?>