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
    <form action="ejer1.php" method="post">
        <input type="number" name="num"><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_REQUEST['num'])) {
        if ($_REQUEST['num'] >= 0) {
            $_SESSION['suma'] += $_REQUEST['num'];
            $_SESSION['contador']++;
        } else {
            echo "<br><hr>La media de los números introducidos es " . $_SESSION['suma']/$_SESSION['contador'];
        }
    }
    ?>
</body>

</html>