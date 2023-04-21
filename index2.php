<?php

//10. Crear una función que dado un número x imprima solo los valores impares.
function obtenerNumerosAleatorios($maximo) {
    $numeros = array();
    while (count($numeros) < 5) {
        $numero_aleatorio = rand(1, $maximo);
        if (!in_array($numero_aleatorio, $numeros)) {
            $numeros[] = $numero_aleatorio;
        }
    }
    return $numeros;
}

$numeros_aleatorios = obtenerNumerosAleatorios(25);
var_dump($numeros_aleatorios);



?>