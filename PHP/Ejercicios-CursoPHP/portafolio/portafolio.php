<?php require_once("cabecera.php"); ?>
<?php require_once("conexion.php"); ?>
<?php
$nombre = "";
$descripcion = "";

//borrar datos
if ($_GET) {
    $id = $_GET['borrar'];
    $objConexion = new conexion();

    //boorado de imagen
    $img = $objConexion->consultar("SELECT imagen FROM proyectos WHERE id=" . $id);
    if (isset($img[0]['imagen'])) {
        if (file_exists("imagenes/" . $img[0]['imagen'])) {
            unlink("imagenes/" . $img[0]['imagen']);
        }
    }

    //borrado de la base de datos
    $sql = "DELETE FROM proyectos WHERE id=" . $id . ";";
    $objConexion->ejecutar($sql);

    // es importante redireccionar a la misma pagina para que si el usuario presiona f5 no se vuelva a enviar la info y ejecutar la misma consulta
    header("Location:portafolio.php");
}

//agregar datos
if ($_POST) {

    $nombre = $_POST['txtNombre'];
    $descripcion = $_POST['txtDescripcion'];
    $fecha = new DateTime();

    $imagen = $fecha->getTimestamp() . "_" . $_FILES['archivo']['name'];    //le concatenamos al nombre del archivo los datos de la fecha para que nunca se repita el mismo nombre de imagen

    $img_temp = $_FILES['archivo']['tmp_name'];
    move_uploaded_file($img_temp, "imagenes/" . $imagen);

    $objConexion = new conexion();
    $sql = "INSERT INTO `proyectos` (`nombre`, `imagen`, `descripcion`) VALUES ('$nombre', '$imagen', '$descripcion');";
    $objConexion->ejecutar($sql);
    header("Location:portafolio.php");
}

//consultar datos
$objConexion = new conexion();
$sql = "SELECT * FROM proyectos";
$resultado = $objConexion->consultar($sql);


?>

<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Proyecto
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        Nombre del proyecto: <input type="text" required class="form-control" name="txtNombre"
                            id=""><br>
                        Imagen del proecto: <input type="file" class="form-control" name="archivo" id=""><br>
                        Descripcion del proyecto: <textarea name="txtDescripcion" class="form-control" cols="30"
                            rows="10"></textarea><br>
                        <input type="submit" value="Enviar Proyecto" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
        <div class="col md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultado as $proyecto) {
                    ?>
                    <tr>
                        <td><?php echo $proyecto['id'] ?></td>
                        <td><?php echo $proyecto['nombre'] ?></td>
                        <td> <img class="img-thumbnail rounded" src="imagenes/<?php echo $proyecto['imagen']; ?>"
                                width="100" alt="">
                        </td>
                        <td><?php echo $proyecto['descripcion'] ?></td>
                        <td><a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>"
                                role="button">Eliminar</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>






<?php require_once("pie.php"); ?>