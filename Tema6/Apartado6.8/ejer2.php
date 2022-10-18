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
        $frase = "Tengo una hormiguita en la patita, que me esta haciendo
        cosquillitas y no me puedo aguantar";
        $vocal = $_REQUEST['vocal'];
        cambiaVocales($frase, $vocal);
    } else { ?>
        <h3>Escribe una vocal para modificar la frase:</h3><br>
        <form action="ejer2.php" method="POST">
            <input type="text" name="vocal" required><br><br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    <?php
    }
    ?>
</body>

</html>