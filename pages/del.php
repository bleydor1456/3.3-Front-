<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <form action="" method="post">
        <label for="titulo">Id:</label>
        <input type="text" id="id" name="id" value="" required><br><br>

        <input type="submit" value="buscar" name="skl">
    </form>

    <?php
    include('mysql.php');
    if (isset($_POST['skl'])) {
        $id = $_POST['id'];
        $sql1 = "SELECT * FROM libro WHERE idlibro = '" . $id . "'";



        if ($response = mysqli_query($conexion, $sql1)) {

            while ($row = mysqli_fetch_row($response)) {

                echo '
    <form action="" method="post">

        <label for="titulo">Id:</label>
        <input type="text" id="i" name="i" value="' . $row[0] . '" readonly><br><br>

        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="' . $row[1] . '" readonly><br><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" value="' . $row[2] . '" readonly><br><br>

        <label for="anio">Año:</label>
        <input type="number" id="anio" name="anio" value="' . $row[3] . '" readonly><br><br>

        <label for="editorial">Editorial:</label>
        <input type="text" id="editorial" name="editorial" value="' . $row[4] . '" readonly><br><br>

        <label for="genero">Género:</label>
        <select id="genero" name="genero" required>
            <option value="">Seleccione una opción</option>
            <option value="Ficción" selected>Ficción</option>
            <option value="No ficción">No ficción</option>
            <option value="Infantil">Infantil</option>
            <option value="Juvenil">Juvenil</option>
        </select><br><br>

        <label for="sinopsis">Sinopsis:</label>
        <textarea readonly id="sinopsis" name="sinopsis" rows="4"
            cols="50">' . $row[6] . '</textarea><br><br>

        <input type="submit" value="Eliminar Libro" name="mod">
    </form>
            ';

            }

        } else {
            echo '<script>alert("Libro no encontrado")</script>';
        }
    } else if (isset($_POST['mod'])) {
        $ide = $_POST['i'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $año = $_POST['anio'];
        $editorial = $_POST['editorial'];
        $genero = $_POST['genero'];
        $sinopsis = $_POST['sinopsis'];

        $sql2 = "DELETE FROM `애완동물`.`libro` WHERE (`idlibro` = '".$ide."');
        ";

        if (mysqli_query($conexion, $sql2)) {
            echo '<script>alert("Libro Eliminado")</script>';
        } else {
            echo '<script>alert("Hubo un problema con el registro")</script>';
        }

        mysqli_close($conexion);
    }


    ?>



</body>

</html>