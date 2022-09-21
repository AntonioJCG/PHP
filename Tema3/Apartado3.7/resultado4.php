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
    $nombre = $_REQUEST['nombre'];
    $t1 = $_REQUEST['t1'];
    $t2 = $_REQUEST['t2'];
    $t3 = $_REQUEST['t3'];
    $media = ($t1 + $t2 + $t3) / 3;
    ?>

    <table border=1>
        <tr>
            <th>Nombre del producto</th>
            <td><?php echo $nombre; ?></td>
            <th>Precio medio</th>
            <td><?php echo $media; ?></td>
        </tr>
        <tr>
            <th>Precio tienda 1</th>
            <td><?php echo $t1; ?></td>
            <th>Diferencia</th>
            <td><?php echo $media - $t1; ?></td>
        </tr>
        <tr>
            <th>Precio tienda 2</th>
            <td><?php echo $t2; ?></td>
            <th>Diferencia</th>
            <td><?php echo $media - $t2; ?></td>
        </tr>
        <tr>
            <th>Precio tienda 3</th>
            <td><?php echo $t3; ?></td>
            <th>Diferencia</th>
            <td><?php echo $media - $t3; ?></td>
        </tr>
    </table>
</body>

</html>