<?php include("../templates/cabecera.php"); ?>
<?php

$txtID = (isset($_POST['txtid'])) ? $_POST['txtid'] : ""; //esto es un if ternario, mas abreviado, como en excel, (condicion?valor verdadero: valor falso)
$txtNombre = (isset($_POST['txtnombre'])) ? $_POST['txtnombre'] : "";
$img = (isset($_FILES['imagen']['name'])) ? $_FILES['imagen']['name'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";


include("../config/bd.php");

switch ($accion) {
    case 'agregar':
        $sentenciaSQL = $conexion->prepare("INSERT INTO libros (nombre, imagen) VALUES (:nombre , :imagen);");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);

        $fecha = new DateTime();
        $nombreArchivo = ($img != "") ? $fecha->getTimestamp() . "_" . $_FILES['imagen']['name'] : "imagen.jpg";
        $tmpImagen = $_FILES["imagen"]["tmp_name"];
        if ($tmpImagen != "") {
            move_uploaded_file($tmpImagen, "../../img/" . $nombreArchivo);
        }
        $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
        $sentenciaSQL->execute();
        header("Location:productos.php");

        break;

    case 'modificar':
        $sentenciaSQL = $conexion->prepare("UPDATE libros SET nombre=:nombre WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->execute();

        if ($img != "") {
            $fecha = new DateTime();
            $nombreArchivo = ($img != "") ? $fecha->getTimestamp() . "_" . $_FILES['imagen']['name'] : "imagen.jpg";
            $tmpImagen = $_FILES["imagen"]["tmp_name"];
            move_uploaded_file($tmpImagen, "../../img/" . $nombreArchivo);

            $sentenciaSQL = $conexion->prepare("SELECT imagen FROM libros WHERE id=:id");
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->execute();
            $libro = $sentenciaSQL->fetch(PDO::FETCH_LAZY);
            if (isset($libro["imagen"]) && ($libro["imagen"] != "imagen.jpg")) {
                if (file_exists("../../img/" . $libro["imagen"])) {
                    unlink("../../img/" . $libro["imagen"]);
                }
            }


            $sentenciaSQL = $conexion->prepare("UPDATE libros SET imagen=:imagen WHERE id=:id");
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
            $sentenciaSQL->execute();
        }
        header("Location:productos.php");

        break;

    case 'cancelar':
        header("Location:productos.php");
        break;

    case 'Borrar':


        $sentenciaSQL = $conexion->prepare("SELECT imagen FROM libros WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $libro = $sentenciaSQL->fetch(PDO::FETCH_LAZY);
        if (isset($libro["imagen"]) && ($libro["imagen"] != "imagen.jpg")) {
            if (file_exists("../../img/" . $libro["imagen"])) {
                unlink("../../img/" . $libro["imagen"]);
            }
        }

        $sentenciaSQL = $conexion->prepare("DELETE FROM libros WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();

        header("Location:productos.php");

        break;

    case 'Seleccionar':
        $sentenciaSQL = $conexion->prepare("SELECT * FROM libros WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $libro = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $txtNombre = $libro['nombre'];
        $img = $libro['imagen'];

        break;
}


$sentenciaSQL = $conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listalibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>
<div class="col-md-5">

    <div class="card">
        <div class="card-header">
            Datos del Libro
        </div>
        <div class="card-body">

            <!--enctype es para poder aceptar todo tipo de datos como archivos o imagenes-->
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" readonly class="form-control" id="txtid" name="txtid" placeholder="ID"
                        value="<?php echo $txtID; ?>">
                </div>

                <div class="form-group">
                    <label>Nombre del Libro</label>
                    <input type="text" required class="form-control" id="txtnombre" name="txtnombre"
                        placeholder="Nombre del Libro" value="<?php echo $txtNombre; ?>">
                </div>

                <div class="form-group">
                    <label>Imagen: </label>
                    <?php if ($img != "") { ?>
                    <img class="img-thumbnail rounded" src="../../img/<?php echo $img; ?>" width="50" alt="">
                    <?php } ?>
                    <input type="file" class="form-control" id="imagen" name="imagen">
                </div>

                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" class="btn btn-success" name="accion"
                        <?php echo ($accion == "Seleccionar") ? "disabled" : ""; ?> value="agregar">Agregar</button>
                    <button type="submit" class="btn btn-warning" name="accion"
                        <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?> value="modificar">Modificar</button>
                    <button type="submit" class="btn btn-info" name="accion"
                        <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?> value="cancelar">Cancelar</button>
                </div>

            </form>
        </div>

    </div>


</div>


<div class="col-md-7">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listalibros as $libro) { ?>
            <tr>
                <td><?php echo $libro['id']; ?></td>
                <td><?php echo $libro['nombre']; ?></td>
                <td>
                    <img class="img-thumbnail rounded" src="../../img/<?php echo $libro['imagen']; ?>" width="50">
                </td>
                <td>
                    <form method="POST"">
                        <input id=" txtid" name="txtid" type="hidden" value="<?php echo $libro['id']; ?>">
                        <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary" />
                        <input type="submit" name="accion" value="Borrar" class="btn btn-danger" />
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php include("../templates/pie.php"); ?>