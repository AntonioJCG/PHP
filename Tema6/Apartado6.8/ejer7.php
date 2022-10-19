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
        $parrafo = $_REQUEST['parrafo'];
        $palabra = $_REQUEST['palabra'];
        buscaPalabra($parrafo, $palabra);
    } else { ?>
        <h3>Escribe un párrafo y una palabra:</h3><br>
        <form action="ejer7.php" method="POST">
            Párrafo: <input type="text" name="parrafo" required><br><br>
            Palabra: <input type="text" name="palabra" required><br><br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    <?php
    }
    ?>
</body>

</html>