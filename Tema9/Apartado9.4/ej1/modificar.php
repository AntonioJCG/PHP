<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <style>
        table {
            text-align: center;
        }
    </style>
    <h3>Datos actuales del registro</h3>
    <table border="2">
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
        <tr>
            <form action="modificar2.php" method="post">
                <td><input type="text" name="dni" value="<?= $_POST["dni"] ?>"></td>
                <td><input type="text" name="nombre" value="<?= $_POST["nombre"] ?>"></td>
                <td><input type="text" name="direccion" value="<?= $_POST["direccion"] ?>"></td>
                <td><input type="number" name="telefono" value="<?= $_POST["telefono"] ?>"></td>
                <input type="hidden" name="dniviejo" value="<?= $_POST["dni"] ?>">
                <td colspan="2"><input type="submit" value="modificar" style="width:100%"></td>
                </td>
            </form>
        </tr>
    </table>
</body>

</html>