<?php session_start();
if (!isset($_SESSION['sumaImpares'])) {
    $_SESSION['parMayor'] = 0;
    $_SESSION['sumaImpares'] = 0;
    $_SESSION['contadorTotal'] = 0;
    $_SESSION['contadorImpares'] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejer2.php" method="post">
        <input type="number" name="num"><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_REQUEST['num'])) {
        if ($_REQUEST['num'] >= 0) {
            $_SESSION['contadorTotal']++;
            if ($_REQUEST['num'] % 2 == 0) {
                if ($_SESSION['parMayor'] < $_REQUEST['num']) {
                    $_SESSION['parMayor'] = $_REQUEST['num'];
                }
            } else {
                $_SESSION['contadorImpares']++;
                $_SESSION['sumaImpares'] += $_REQUEST['num'];
            }
        } else {
            echo "<br><hr>La cantidad de números introducidos es " . $_SESSION['contadorTotal'];
            echo "<br>La media de los números impares introducidos es " . $_SESSION['sumaImpares'] / $_SESSION['contadorImpares'];
            echo "<br>El mayor número par introducido es " . $_SESSION['parMayor'];
        }
    }
    ?>
</body>

</html>