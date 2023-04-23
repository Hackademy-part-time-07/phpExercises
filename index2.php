<?php

function obtenerPares($numero) {
    $pares = array();
    for ($i = 1; $i <= $numero; $i++) {
        if ($i % 2 == 0) {
            $pares[] = $i;
        }
    }
    return $pares;
}

//obtenerPares (1232 . "\n");

function obtenerImpares($numero) {
    $impares = array(); 
    for ($i = 1; $i <= $numero; $i++) {
        if ($i % 2 != 0) {
            $impares[] = $i;
        }
    }
    return $impares;
}

//obtenerImpares(1232 . "\n");
  
function imprimirNumeros($n, $boolean) {
    if ($boolean == 'true') {
        $numeros = obtenerPares($n);
    } else {
        $numeros = obtenerImpares($n);
    }
  
    foreach ($numeros as $numero) {
        echo $numero . " ";
    }
}

imprimirNumeros(1232, true);
echo "\n";


?>