<?php session_start();
if (!isset($_SESSION['suma'])) {
    $_SESSION['suma'] = 0;
    $_SESSION['contador'] = 0;

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
    <form action="ejer3.php" method="post">
        <input type="number" name="num" required><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    var_dump($_SESSION['suma']);
    var_dump($_SESSION['contador']);
    if (isset($_REQUEST['num'])) {
        if ($_SESSION['suma'] < 10000) {
            $_SESSION['contador']++;
            $_SESSION['suma'] += $_REQUEST['num'];
        } else {
            echo "<br><hr>El total acumulado es " . $_SESSION['suma'];
            echo "<br>La media es " . $_SESSION['suma'] / $_SESSION['contador'];
            echo "<br>La cantidad de números introducidos es " . $_SESSION['contador'];
        }
    }
    ?>
</body>

</html>