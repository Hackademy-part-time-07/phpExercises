<?php

//1. Crea programas de operaciones con dos variables (suma, resta, etc).

$varDos = "1";

$varTres = "4";

$varCinco = $varDos + $varTres;

var_dump($varCinco);

$varSeis = $varTres - $varDos;

var_dump($varSeis);

$varSiete = $varSeis * 2;

var_dump($varSiete);

//2. Crear array e imprimir un elemento del array.


$varArray = [3,4,6,8,10];

$varArraySecondElement = $varArray[1];

var_dump($varArraySecondElement);


//3. Crear un array de arrays e imprimir un elemento del array.

$array_arrays = [[0, 1, 2],[3, 4, 5],[6, 7, 8],[9, 10, 11]];
var_dump ($array_arrays[1]);
var_dump ($array_arrays[1][1]);








?> 