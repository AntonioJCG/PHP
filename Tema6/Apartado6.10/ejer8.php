<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>¿Cuántos años tendrás?</h2>
    <form action="ejer8.php" method="post">
        Nombre de la persona nº 1: <input type="text" name="nombre1" required><br>
        Fecha de nacimiento persona nº 1: <input type="date" name="fechaNac1" required><br>
        Nombre de la persona nº 2: <input type="text" name="nombre2" required><br>
        Fecha de nacimiento persona nº 2: <input type="date" name="fechaNac2" required><br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <?php
    if (isset($_POST['nombre1']) && isset($_POST['fechaNac1']) && isset($_POST['nombre2']) && isset($_POST['fechaNac2'])) {
        $edad1 = (int)((time() - strtotime($_POST['fechaNac1'])) / 31557600);
        $edad2 = (int)((time() - strtotime($_POST['fechaNac2'])) / 31557600);
        echo $_POST['nombre1'] . " tiene $edad1 años<hr>";
        echo $_POST['nombre2'] . " tiene $edad2 años<hr>";
        if ($edad1 > $edad2) {
            echo "<br>La persona más mayor es ", $_POST['nombre1'], ".";
        } else if ($edad1 < $edad2) {
            echo "<br>La persona más mayor es ", $_POST['nombre2'], ".";
        } else {
            echo "<br>", $_POST['nombre1'], " y ", $_POST['nombre2'], " tienen la misma edad.";
        }
    }
    ?>
</body>

</html>