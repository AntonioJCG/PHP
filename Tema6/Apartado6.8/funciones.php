<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>

<body>
    <?php
    function imprimeCaracteres($palabra)
    {
        for ($i = 0; $i < strlen($palabra); $i++) {
            echo $palabra[$i] . "<br>";
        }
    }

    function cambiaVocales($frase, $vocal)
    {
        for ($i = 0; $i < strlen($frase); $i++) {
            if ($frase[$i] == "a" || $frase[$i] == "e" || $frase[$i] == "i" || $frase[$i] == "o" || $frase[$i] == "u") {
                $frase[$i] = $vocal;
            }
        }
        echo $frase;
    }

    function cuentaPalabras($frase)
    {
        $cantidad = str_word_count($frase, 0);
        echo $cantidad;
    }

    function mismaPalabra($frase)
    {
        $primerEspacio = mb_stripos($frase, " ");
        $primeraPalabra = substr($frase, 0, $primerEspacio);
        $ultimoEspacio = strrpos($frase, " ");
        $ultimaPalabra = substr($frase, $ultimoEspacio + 1, strlen($frase));
        if ($primeraPalabra == $ultimaPalabra) {
            echo "SI";
        } else {
            echo "NO";
        }
    }
    ?>
</body>

</html>