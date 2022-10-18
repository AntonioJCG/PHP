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
        $frase = $_REQUEST['frase'];
        echo "El número de palabras es: ";
        cuentaPalabras($frase);
    } else { ?>
        <h3>Escribe una frase para contar sus palabras:</h3><br>
        <form action="ejer3.php" method="POST">
            <input type="text" name="frase" required><br><br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    <?php
    }
    ?>
</body>

</html>