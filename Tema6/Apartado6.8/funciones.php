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
    return $cantidad;
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

function rotaString($palabra)
{
    $array = str_split($palabra); //convierte string a array de caracteres
    for ($i = 0; $i < strlen($palabra) + 1; $i++) {
        foreach ($array as $letra) {
            echo $letra;
        }
        echo "<br>";
        $aux = $array;
        $ultimaLetra = $aux[count($aux) - 1]; //capta la ultima letra
        unset($aux[count($aux) - 1]); //quita la ultima letra
        array_unshift($aux, $ultimaLetra); //coloca la letra quitaba al principio
        $array = $aux;
    }
}

function cuentaPalabras2($parrafos)
{
    $punto = strpos($parrafos, ".");
    $frase1 = substr($parrafos, 0, $punto);
    $frase2 = substr($parrafos, $punto + 1, strlen($parrafos));
    echo "La primera frase tiene " . cuentaPalabras($frase1) . " palabras y la segunda tiene " . cuentaPalabras($frase2) . " palabras.";
}

function buscaPalabra($parrafo, $palabra)
{
    echo $parrafo . "<br>";
    echo $palabra . "<br>";
    if (mb_stripos($parrafo, $palabra) == "") {
        echo "La palabra introducida no se encuentra en el párrafo.";
    } else {
        echo "La palabra introducida sí se encuentra en el párrafo.";
    }
}