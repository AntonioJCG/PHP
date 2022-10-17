<?php
function esPrimo($n)
{
    $esPrimo = true;
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $esPrimo = false;
        }
    }
    // El 0 y el 1 no se consideran primos
    if (($n == 0) || ($n == 1)) {
        $esPrimo = false;
    }
    return $esPrimo;
}

function combinacion($numeros)
{
    $array = $numeros;
    $cantidadRecibida = count($array);
    while ($cantidadRecibida < 6) {
        $numAle = rand(1,49);
        if (!in_array($numAle, $array)) {
            array_push($array, $numAle);
            $cantidadRecibida++;
        }
    }
    $array = array_slice($array, 0, 6);
    return $array;
}

function creaNumSerie($numeros)
{
    $array = $numeros;
    $cantidadRecibida = count($array);
    while ($cantidadRecibida < 6) {
        $numAle = rand(1,49);
        if (!in_array($numAle, $array)) {
            array_push($array, $numAle);
            $cantidadRecibida++;
        }
    }
    return $array;
}