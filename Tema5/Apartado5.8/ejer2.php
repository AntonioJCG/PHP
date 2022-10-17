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
    if (!isset($_REQUEST["pedido"])) {
        $pedido = [];
    } else {
        $pedido = unserialize(base64_decode($_REQUEST["pedido"]));
        $pedido[] = $_REQUEST["ingrediente"];
    }

    if (isset($_REQUEST["finalizado"])) {
        $pedidoTotal = unserialize(base64_decode($_REQUEST["pedidoTotal"]));
        echo "<h2>Su pedido es:</h2>";
        foreach ($pedidoTotal as $comida) {
            echo "<h3>";
            echo $comida[0] . " de ";
            for ($i = 1; $i < count($comida); $i++) {
                if ($i == count($comida) - 1) {
                    echo "$comida[$i].<br>";
                } else {
                    echo "$comida[$i], ";
                }
            }
            echo "</h3>";
        }
    } else {
    ?>
        <h2>Realiza tu pedido</h2>
        <form action="ejer2.php" method="post">
            <h3>Pizza</h3>
            <input type="hidden" name="ingrediente[]" value="Pizza">
            <input type="checkbox" name="ingrediente[]" value="atun"> Atún
            <input type="checkbox" name="ingrediente[]" value="jamon"> Jamón
            <input type="checkbox" name="ingrediente[]" value="olivas"> Olivas
            <input type="checkbox" name="ingrediente[]" value="bacon"> Bacon
            <input type="checkbox" name="ingrediente[]" value="peperoni"> Peperoni
            <input type="checkbox" name="ingrediente[]" value="piña"> Piña
            <input type="hidden" name="pedido" value="<?= base64_encode(serialize($pedido)) ?>">
            <br><br><input type="submit" value="Añadir" name="anadir">
        </form>
        </form>
        <form action="ejer2.php" method="post">
            <h3>Hamburguesa</h3>
            <input type="hidden" name="ingrediente[]" value="Hamburguesa">
            <input type="checkbox" name="ingrediente[]" value="lechuga"> Lechuga
            <input type="checkbox" name="ingrediente[]" value="tomate"> Tomate
            <input type="checkbox" name="ingrediente[]" value="queso"> Queso
            <input type="checkbox" name="ingrediente[]" value="bacon"> Bacon
            <input type="checkbox" name="ingrediente[]" value="pepinillo"> Pepinillo
            <input type="checkbox" name="ingrediente[]" value="cebolla"> Cebolla
            <input type="hidden" name="pedido" value="<?= base64_encode(serialize($pedido)) ?>">
            <br><br><input type="submit" value="Añadir" name="anadir">
        </form>
        <form action="ejer2.php" method="post">
            <h3>Perrito caliente</h3>
            <input type="hidden" name="ingrediente[]" value="Perrito">
            <input type="checkbox" name="ingrediente[]" value="lechuga"> Lechuga
            <input type="checkbox" name="ingrediente[]" value="cebolla"> Cebolla
            <input type="checkbox" name="ingrediente[]" value="ketchup"> Ketchup
            <input type="checkbox" name="ingrediente[]" value="mostaza"> Mostaza
            <input type="hidden" name="pedido" value="<?= base64_encode(serialize($pedido)) ?>">
            <br><br><input type="submit" value="Añadir" name="anadir">
        </form>
        <form action="ejer2.php" method="post">
            <br><br><input type="submit" name="finalizado" value="Finalizar pedido">
            <input type="hidden" name="pedidoTotal" value="<?= base64_encode(serialize($pedido)) ?>">
        </form>
    <?php
    }
    ?>
</body>

</html>