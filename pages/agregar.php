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
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br><br>

        <label for="anio">Año:</label>
        <input type="number" id="anio" name="anio" required><br><br>

        <label for="editorial">Editorial:</label>
        <input type="text" id="editorial" name="editorial" required><br><br>

        <label for="genero">Género:</label>
        <select id="genero" name="genero" required>
            <option value="">Seleccione una opción</option>
            <option value="Ficción">Ficción</option>
            <option value="No ficción">No ficción</option>
            <option value="Infantil">Infantil</option>
            <option value="Juvenil">Juvenil</option>
        </select><br><br>

        <label for="sinopsis">Sinopsis:</label>
        <textarea id="sinopsis" name="sinopsis" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Agregar libro" name="a">
    </form>

    <?php
    #metodo que extrae todo del formulario
    if($_POST) {
        if(isset($_POST['a'])){
    
            include 'mysql.php';
    
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $año = $_POST['anio'];
            $editorial = $_POST['editorial'];
            $genero = $_POST['genero'];
            $sinopsis = $_POST['sinopsis'];
    
            $sql = "INSERT INTO `애완동물`.`libro` (`titulo`, `autor`, `año`, `editorial`, `genero`, `sinopsis`) 
            VALUES ('".$titulo."',
             '".$autor."', '".$año."', '".$editorial."'
             , '".$genero."', '".$sinopsis."');";

            if(mysqli_query($conexion, $sql)){
                echo '<script>alert("Libro registrado Registrado")</script>';
            } else {
                echo '<script>alert("Hubo un problema con el registro")</script>';
            }

            mysqli_close($conexion);
            
        }
    }
    
    ?>
</body>

</html>