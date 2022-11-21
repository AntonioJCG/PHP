<?php

try {
    $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "");
} catch (PDOException $e) {
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
    die("Error: " . $e->getMessage());
}

if (isset($_POST["dni"]) && isset($_POST["nombre"]) && isset($_POST["direccion"]) && isset($_POST["telefono"])) {
    $insertar = "insert into cliente values('$_POST[dni]','$_POST[nombre]','$_POST[direccion]', $_POST[telefono])";
    $conexion->exec($insertar);
    header('Location: ejercicio1.php');
} else {
    header('Location: ejercicio1.php');
}
