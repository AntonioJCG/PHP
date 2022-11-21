<?php session_start();
if (!isset($_SESSION['cantBul'])) {
    $_SESSION['cantBul'] = 0;
    $_SESSION['cantChar'] = 0;
    $_SESSION['cantSqr'] = 0;
    $_SESSION['cantMew'] = 0;
}
if (isset($_REQUEST['Bulbasaur'])) {
    $_SESSION['cantBul'] += 1;
}
if (isset($_REQUEST['Charmander'])) {
    $_SESSION['cantChar'] += 1;
}
if (isset($_REQUEST['Squirtle'])) {
    $_SESSION['cantSqr'] += 1;
}
if (isset($_REQUEST['Mewtwo'])) {
    $_SESSION['cantMew'] += 1;
}
if (isset($_REQUEST['borraBul'])) {
    $_SESSION['cantBul'] -= 1;
}
if (isset($_REQUEST['borraChar'])) {
    $_SESSION['cantChar'] -= 1;
}
if (isset($_REQUEST['borraSqr'])) {
    $_SESSION['cantSqr'] -= 1;
}
if (isset($_REQUEST['borraMew'])) {
    $_SESSION['cantMew'] -= 1;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }

        .tienda {
            width: 800px;
            background-color: aqua;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            text-align: center;
        }

        .titulo {
            width: 100%;
        }

        .productos {
            width: 400px;
            background-color: greenyellow;
        }

        .carrito {
            width: 400px;
            background-color: palevioletred;
        }

        form {
            margin-bottom: 20px;
        }

        form>* {
            margin: 0px;
        }
    </style>
</head>

<body>
    <?php
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=tiendaPokemon;charset=utf8", "root", "");
    } catch (PDOException $e) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die("Error: " . $e->getMessage());
    }

    $productos_consulta = $conexion->query("select * from productos");
    ?>

    <div class="tienda">
        <h2 class="titulo">Tienda de peluches</h2>
        <div class="productos">
            <h3>Productos</h3>
            <hr>
            <?php
            while ($registro = $productos_consulta->fetchObject()) {
            ?>
                <form action="ejercicio3.php" method="post">
                    <img src="<?= $registro->imagen ?>" alt="<?= $registro->nombre ?>" width="150px">
                    <p><?= $registro->descripcion ?></p>
                    <p>Precio: <?= $registro->precio ?></p>
                    <input type="hidden" name="<?= $registro->nombre ?>">
                    <input type="submit" value="Comprar" name="compra">
                </form>
            <?php
            }
            ?>
        </div>
        <div class="carrito">
            <h3>Carrito</h3>
            <hr>
            <?php
            if ($_SESSION['cantBul'] > 0) { ?>
                <form action="ejercicio3.php" method="post">
                    <img src="img/bulbasaur.jpg" alt="bulbasaur" width="150px">
                    <p>Peluche de Bulbasaur de 20 cm</p>
                    <p>Precio: 20€</p>
                    <p>Cantidad: <?= $_SESSION['cantBul'] ?></p>
                    <input type="hidden" name="borraBul">
                    <input type="submit" value="Eliminar" name="eliminar">
                </form>
            <?php
            }
            if ($_SESSION['cantChar'] > 0) { ?>
                <form action="ejercicio3.php" method="post">
                    <img src="img/charmander.jpg" alt="charmander" width="150px">
                    <p>Peluche de Charmander de 20 cm</p>
                    <p>Precio: 20€</p>
                    <p>Cantidad: <?= $_SESSION['cantChar'] ?></p>
                    <input type="hidden" name="borraChar">
                    <input type="submit" value="Eliminar" name="eliminar">
                </form>
            <?php
            }
            if ($_SESSION['cantSqr'] > 0) { ?>
                <form action="ejercicio3.php" method="post">
                    <img src="img/squirtle.jpg" alt="squirtle" width="150px">
                    <p>Peluche de Squirtle de 20 cm</p>
                    <p>Precio: 20€</p>
                    <p>Cantidad: <?= $_SESSION['cantSqr'] ?></p>
                    <input type="hidden" name="borraSqr">
                    <input type="submit" value="Eliminar" name="eliminar">
                </form>
            <?php
            }
            if ($_SESSION['cantMew'] > 0) { ?>
                <form action="ejercicio3.php" method="post">
                    <img src="img/mewtwo.jpg" alt="mewtwo" width="150px">
                    <p>Peluche de Mewtwo de 30 cm</p>
                    <p>Precio: 30€</p>
                    <p>Cantidad: <?= $_SESSION['cantMew'] ?></p>
                    <input type="hidden" name="borraMew">
                    <input type="submit" value="Eliminar" name="eliminar">
                </form>
            <?php
            }
            $total = (20 * $_SESSION['cantBul']) + (20 * $_SESSION['cantChar']) + (20 * $_SESSION['cantSqr']) + (30 * $_SESSION['cantMew']);
            echo "<br><br>Total: " . $total . " €";
            ?>
        </div>
    </div>
</body>

</html>