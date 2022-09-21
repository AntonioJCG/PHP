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
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $n3 = $_GET['n3'];
    $n4 = $_GET['n4'];
    $n5 = $_GET['n5'];
    $n6 = $_GET['n6'];
    $nserie = $_GET['nserie'];

    $n1a = rand(1,49);
    $n2a = rand(1,49);
    $n3a = rand(1,49);
    $n4a = rand(1,49);
    $n5a = rand(1,49);
    $n6a = rand(1,49);
    $nseriea = rand(1,999);

    $aciertos = 0;

    if ($n1 == $n1a) {
        $aciertos++;
    } else if ($n2 == $n2a) {
        $aciertos++;
    } else if ($n3 == $n3a) {
        $aciertos++;
    } else if ($n4 == $n4a) {
        $aciertos++;
    } else if ($n5 == $n5a) {
        $aciertos++;
    } else if ($n6 == $n6a) {
        $aciertos++;
    }  else if ($nserie == $nseriea) {
        $aciertos++;
    }

    ?>
    <table border="1">
        <tr>
            <td>Tus números</td>
            <td><?php echo $n1 ?></td>
            <td><?php echo $n2 ?></td>
            <td><?php echo $n3 ?></td>
            <td><?php echo $n4 ?></td>
            <td><?php echo $n5 ?></td>
            <td><?php echo $n6 ?></td>
            <td><?php echo $nserie ?></td>
        </tr>
        <tr>
            <td>Nº aleatorios</td>
            <td><?php echo $n1a ?></td>
            <td><?php echo $n2a ?></td>
            <td><?php echo $n3a ?></td>
            <td><?php echo $n4a ?></td>
            <td><?php echo $n5a ?></td>
            <td><?php echo $n6a ?></td>
            <td><?php echo $nseriea ?></td>
        </tr>
    </table><br>
    <p>Tienes <?php echo $aciertos ?> aciertos.</p>
</body>

</html>