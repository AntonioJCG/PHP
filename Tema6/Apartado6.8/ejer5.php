<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("funciones.php");

    if (isset($_REQUEST['enviar'])) {
        $palabra = $_REQUEST['palabra'];
        rotaString($palabra);
    } else { ?>
        <h3>Escribe una palabra para rotar:</h3><br>
        <form action="ejer5.php" method="POST">
            <input type="text" name="palabra" required><br><br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    <?php
    }
    ?>
</body>

</html>