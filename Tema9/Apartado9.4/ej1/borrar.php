<?php
try {
    $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "");
} catch (PDOException $e) {
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
    die("Error: " . $e->getMessage());
}

if (isset($_POST["dni"])) {
    $borrar = "delete from cliente where dni='$_POST[dni]'";
    $conexion->exec($borrar);
    header('Location: ejercicio1.php');
} else {
    header('Location: ejercicio1.php');
}
