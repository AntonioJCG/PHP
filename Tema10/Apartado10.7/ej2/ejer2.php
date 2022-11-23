<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once 'Menu.php';

    $menu1 = new Menu();
    $menu2 = new Menu();

    $menu1->anadirElementos("Google", "https://www.google.es/");
    $menu1->anadirElementos("Bing", "https://www.bing.com/");
    $menu1->anadirElementos("Yahoo", "https://es.yahoo.com/");
    $menu1->anadirElementos("DuckDuckGo", "https://duckduckgo.com/");
    $menu2->anadirElementos("Marca", "https://www.marca.com/");
    $menu2->anadirElementos("Facebook", "https://www.facebook.com/");
    $menu2->anadirElementos("Instagram", "https://www.instagram.com/");

    echo $menu1->mostrarMenuHorizontal();
    echo "<br><br>";
    echo $menu1->mostrarMenuVertical();
    echo "<br><br>";
    echo $menu2->mostrarMenuVertical();
    echo "<br><br>";
    echo $menu2->mostrarMenuHorizontal();
    ?>
</body>

</html>