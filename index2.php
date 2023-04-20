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

$misPares = obtenerPares(134329343);
var_dump($misPares);


?>