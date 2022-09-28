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
            $eleg = $_REQUEST['elegido'];
        } else {
            $eleg = 0;
        }
        $n = 1;
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {
                if ($n == $eleg) {
                    echo "<td><a href='ejer5.php?elegido=$n'><img width='60' height='60' src='img/ojoabierto.png'></td>";
                } else {
                    echo "<td><a href='ejer5.php?elegido=$n'><img width='60' height='60' src='img/ojocerrado.png'></td>";
                }
                $n++;
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>