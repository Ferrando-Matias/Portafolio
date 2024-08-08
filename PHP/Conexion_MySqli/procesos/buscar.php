<?php
    $palabra = $_POST['palabra'];
    $query = "SELECT * FROM usuario WHERE nombre LIKE '%$palabra%'";
    $consulta3 = consultarSQL(($query));
    if ($consulta3->num_rows >= 1) {
        echo "<table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>";

    /*
        creamos una variable (fila) para crear un array con todo lo que encuentre 
        en la BD y lo podemos recorrer con un while seleccionando los elementos de 
        distintas maneras...
        Con fetch_array(MYSQLI_NUM) recorremos los elementos de manera numerica,
        siempre arrancando con el cero.
        Con fetch_array(MYSQLI_ASSOC) recorremos los elementos llamandolos por su 
        nombre (id, nombre, apellido, email, clave). El nombre del campo siempre va 
        entre comillas simples
        Con fetch_array(MYSQLI_BOTH) podemos combinar ambas maneras
    */
    while($fila = $consulta3->fetch_array(MYSQLI_NUM)){
        echo "<tr>
        <td>".$fila[0]."</td>
        <td>".$fila[1]."</td>
        <td>".$fila[2]."</dh>
        <td>".$fila[3]."</td>
        <td><a href='#!'>Actualizar</a></td>
        <td><a href='#!'>Eliminar</a></td>
    </tr>";
    }

    echo " </tbody>
    </table>";

    }else{
        echo "No se encontraron coincidencias con la palabra: ".$palabra;
    }