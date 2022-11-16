<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            text-align: center;
        }

        .paginas td {
            width: 15px;
            border: 1px solid black;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <?php
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "");
    } catch (PDOException $e) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die("Error: " . $e->getMessage());
    }

    $clientes_consulta = $conexion->query("select * from cliente");
    ?>

    <table border="1">
        <tr>
            <td colspan="6">
                <h3>Mantenimiento de clientes</h3>
            </td>
        </tr>
        <tr>
            <td>
                <h3>DNI</h3>
            </td>
            <td>
                <h3>Nombre</h3>
            </td>
            <td>
                <h3>Direccion</h3>
            </td>
            <td>
                <h3>Telefono</h3>
            </td>
            <td colspan="2">
                <h3>Modificaciones</h3>
            </td>
        </tr>

        <?php
        while ($registro = $clientes_consulta->fetchObject()) {
        ?>
            <tr>
                <td><?= $registro->dni ?></td>
                <td><?= $registro->nombre ?></td>
                <td><?= $registro->direccion ?></td>
                <td><?= $registro->telefono ?></td>
                <td>
                    <form action="modificar.php" method="post">
                        <input type="hidden" name="dni" value="<?= $registro->dni ?>">
                        <input type="hidden" name="nombre" value="<?= $registro->nombre ?>">
                        <input type="hidden" name="direccion" value="<?= $registro->direccion ?>">
                        <input type="hidden" name="telefono" value="<?= $registro->telefono ?>">
                        <input type="submit" value="modificar">
                    </form>
                </td>
                <td>
                    <form action="borrar.php" method="post">
                        <input type="hidden" name="dni" value="<?= $registro->dni ?>">
                        <input type="submit" value="borrar">
                    </form>
                </td>

            </tr>
        <?php
        }
        ?>
        <tr>
            <form action="añadir.php" method="post">
                <td><input type="text" name="dni"></td>
                <td><input type="text" name="nombre"></td>
                <td><input type="text" name="direccion"></td>
                <td><input type="number" name="telefono"></td>
                <td colspan="2"><input type="submit" value="añadir" style=" width:100%"></td>
            </form>
        </tr>
    </table>
</body>

</html>