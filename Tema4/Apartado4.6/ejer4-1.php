<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Bloque</th>
            <th>Piso</th>
            <th>Timbre</th>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td rowspan='7'>Bloque " . $i . "</td>";
            for ($j = 1; $j <= 7; $j++) { ?>
                <td>Piso <?= $j ?></td>
                <td>
                    <form action="ejer4-2.php" method="POST">
                        <input type="hidden" name="bloque" value="<?= $i ?>">
                        <input type="hidden" name="piso" value="<?= $j ?>">
                        <input type="submit" value="Llamar">
                    </form>
                </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>