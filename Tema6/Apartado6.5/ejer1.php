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
    include 'funciones.php';

    if (isset($_REQUEST['enviar'])) {
        if (isset($_REQUEST["numeros"])) {
            $numeros = $_REQUEST['numeros'];
        } else {
            $numeros = [];
        }

        $arrayNum = combinacion($numeros); //genera la combinacion de 6 numeros, añadiendolos si faltan y restandolos si sobran

        if ($_REQUEST["serie"] == "") { //añade el numero de serie de no haberlo
            $serie = rand(1, 999);
        } else {
            $serie = $_REQUEST["serie"];
        }

        if ($_REQUEST["nombre"] == "") { //añade el nombre de no haberlo
            $nombre = "Combinación generada para la Primitiva";
        } else {
            $nombre = $_REQUEST["nombre"];
        }

        echo "<h2>Nombre de tu combinación: " . $nombre . "</h2><br>";
        echo "<table border=1 cellspacing=0 cellpadding=5>";
        echo "<tr><td>Números</td>";
        for ($i = 0; $i < count($arrayNum); $i++) {
            echo "<td>" . $arrayNum[$i] . "</td>";
        }
        echo "</tr>";
        echo "<tr><td>Nº serie</td><td colspan=6>$serie</td></tr>";
        echo "</table>";
    } else { ?>
        <h1>Lotería primitiva.</h1>
        <h3>Elige seis números y el número de serie (1-999)</h3>
        <form action="ejer1.php" method="get">
            <table border=1 cellspacing=0 cellpadding=0>
                <?php
                $contador = 1;
                for ($i = 0; $i < 5; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 10; $j++) {
                        if ($contador == 50) {
                            echo "<td></td>";
                        } else {
                            echo "<td><input type='checkbox' name='numeros[]' value='$contador'><br><h1>$contador</h1></td>";
                        }
                        $contador++;
                    }
                    echo "</tr>";
                }
                ?>
            </table>
            <br>Número de serie: <input type="text" name="serie"><br>
            <br>Nombre de la combinación: <input type="text" name="nombre"><br>
            <br><input type="submit" value="Jugar" name="enviar">
        </form>
    <?php
    }
    ?>
</body>

</html>