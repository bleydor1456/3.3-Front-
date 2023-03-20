<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<?php

include('mysql.php');
#llamados los datos de la tabla
$resultado = mysqli_query($conexion, 'SELECT * FROM libro');
if (!$resultado) {
    die('Consulta no válida: ');
}

if ($resultado->num_rows > 0) {
    ?>

    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Año</th>
                    <th>Editorial</th>
                    <th>Género</th>
                    <th>Sinopsis</th>

                </tr>
            </thead>
            <tbody>

                <?php

                #repetir hasta acabar con la lista, creando una lista para cada uno de los elementos
                while ($fila = $resultado->fetch_assoc()) {
                    echo '
                    <tr>
                    <td>' . $fila['idlibro'] . '</td>
                    <td>' . $fila['titulo'] . '</td>
                    <td>' . $fila['autor'] . '</td>
                    <td>' . $fila['año'] . '</td>
                    <td>' . $fila['editorial'] . '</td>
                    <td>' . $fila['genero'] . '</td>
                    <td>' . $fila['sinopsis'] . '</td>
                </tr>
                    ';
                }

                ?>


    </body>

    <?php

    echo "</table>";
} else {
    #en caso de no haber registros
    echo "No se encontraron registros de libros";
}
?>

</html>