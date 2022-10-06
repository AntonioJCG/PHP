<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Pulsa en un ojo para abrirlo</h3>
    <table border="1" cellspacing="0">
        <?php
        if (isset($_REQUEST['elegido'])) {
            $num = $_REQUEST['elegido'];
            $cadena = $_REQUEST["cadena"];
        } else {
            $num = 0;
            $cadena = "";
        }

        if (isset($_REQUEST["elegido"])) {
            $numSeleccionados =  explode(" ", $cadena);

            if (in_array($_REQUEST["elegido"], $numSeleccionados)) {
                $posicion = array_search($_REQUEST["elegido"], $numSeleccionados);
                unset($numSeleccionados[$posicion]);
                $cadena = implode(" ", $numSeleccionados);
            } else {
                $cadena = $cadena . " " . $num;
                $numSeleccionados = [];
                if ($cadena[0] == " ") {
                    $cadena = substr($cadena, 1);
                }
                $numSeleccionados =  explode(" ", $cadena);
            }

            $n = 1;
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 10; $j++) {
                    if (in_array($n, $numSeleccionados)) {
                        echo "<td><a href='ejer1.php?elegido=$n&cadena=$cadena'><img width='60' height='60' src='img/ojoabierto.png'></td>";
                    } else {
                        echo "<td><a href='ejer1.php?elegido=$n&cadena=$cadena'><img width='60' height='60' src='img/ojocerrado.png'></td>";
                    }
                    $n++;
                }
                echo "</tr>";
            }
            
        } else {
            $n = 1;
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 10; $j++) {
                    if ($n == $num) {
                        echo "<td><a href='ejer1.php?elegido=$n&cadena=$cadena'><img width='60' height='60' src='img/ojoabierto.png'></td>";
                    } else {
                        echo "<td><a href='ejer1.php?elegido=$n&cadena=$cadena'><img width='60' height='60' src='img/ojocerrado.png'></td>";
                    }
                    $n++;
                }
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>

</html>