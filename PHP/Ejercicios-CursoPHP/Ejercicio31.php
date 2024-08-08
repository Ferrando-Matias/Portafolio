<?php
//VALORES DE INPUTS TEXT, RADIO, CHECKBOX, SELECT, TEXTAREA

$txtNombre = "";
$rdbLenguaje = "";
$chkPhp = "";
$chkC = "";
$chkJava = "";
$slcSerie = "";
$txtComentario = "";

if ($_POST) {

    //Recibir de un text
    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";   // if ternario, si hay algo recibido del txtNombre lo guardo en la variable, sino no guardo nada

    //Recibir de un radio
    $rdbLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";

    //Recibir de un checkbox
    $chkPhp = (isset($_POST['chkPhp']) == "si") ? "checked" : "";
    $chkC = (isset($_POST['chkC#']) == "si") ? "checked"  : "";
    $chkJava = (isset($_POST['chkJava']) == "si") ? "checked"  : "";

    //Recibir de un select
    $slcSerie = (isset($_POST['Series'])) ? $_POST['Series'] : "";

    //Recibir de un TextArea
    $txtComentario = (isset($_POST['txtComentarios'])) ? $_POST['txtComentarios'] : "";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 31 - PHP - Valores de un input text</title>
</head>

<body>
    <!-- Mostrar los datos recibidos por el metodo POST -->
    <?php
    if ($_POST) {
    ?>
    <strong>Hola <?php echo $txtNombre; ?></strong><br>

    <strong>Tu lenguaje es: <?php echo $rdbLenguaje; ?></strong><br>

    <strong>Estas aprendiendo: <br>
        - <?php echo ($chkPhp == "checked") ? "Php" : ""; ?><br>
        - <?php echo ($chkC == "checked") ? "C#" : ""; ?><br>
        - <?php echo ($chkJava == "checked") ? "Java" : ""; ?>
    </strong><br>

    <strong>Tu serie es: <?php echo $slcSerie; ?></strong><br>

    <strong>Tus comentarios son: <?php echo $txtComentario; ?></strong><br>


    <?php } ?>



    <br><br>
    <form action="" method="POST">

        Nombre:
        <input type="text" name="txtNombre" value="<?php echo (isset($txtNombre) ? $txtNombre : ""); ?>">
        <br>

        <!--    RADIO BUTTON 
            Para que solo te deje marcar un radio, todos deben tener el mismo "name" -->
        ¿Te gusta?: <br>
        php: <input type="radio" name="lenguaje" value="php" <?php echo ($rdbLenguaje == "php" ? "checked" : ""); ?>>
        <br>
        c#: <input type="radio" name="lenguaje" value="c#" <?php echo ($rdbLenguaje == "c#" ? "checked" : ""); ?>> <br>
        Java: <input type="radio" name="lenguaje" value="Java" <?php echo ($rdbLenguaje == "Java" ? "checked" : ""); ?>>
        <br>

        <!-- CHECKBOX -->
        Estas aprendiendo: <br>
        php:<input type="checkbox" <?php echo $chkPhp; ?> name="chkPhp" value="si">
        c#:<input type="checkbox" <?php echo $chkC; ?> name="chkC#" value="si">
        Java:<input type="checkbox" <?php echo $chkJava; ?> name="chkJava" value="si">
        <br>

        Elige una serie: <br>
        <select name="Series">
            <option value=""></option>
            <option value="La casa de papel" <?php echo ($slcSerie == "La casa de papel") ? "selected" : ""; ?>>La casa
                de papel</option>
            <option value="Elite" <?php echo ($slcSerie == "Elite") ? "selected" : ""; ?>>Elite</option>
            <option value="El juego del calamar" <?php echo ($slcSerie == "El juego del calamar") ? "selected" : ""; ?>>
                El juego del calamar</option>
        </select>
        <br>

        Comentarios: <br>
        <textarea name="txtComentarios" id="" cols="30" rows="10"><?php echo $txtComentario; ?></textarea>

        <br>
        <input type="submit" value="Enviar Informacion">

    </form>
</body>

</html>