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


//4. Crear un programa que imprima los primeros diez números.


$num = 0;
while ($num <= 10) {
    echo "voy por el número " . $num++ ."\n";
}
;
//5. Crear un programa que sume los primeros 10 números.

$sumaFirstTen = 0;
for ($i=1; $i<=10; $i++) {
    $sumaFirstTen += $i;
}
echo 'La suma de los primeros diez números es ' . $sumaFirstTen . "\n";
//6. Crear un programa que imprima X números random.
for ($i = 0; $i < 5; $i++) {
    $numero_aleatorio = rand(1, 100);
    echo $numero_aleatorio . "\n\n";
}

for ($i=0; $i < 5; $i++) {
    $randomNum = rand(500, 1000);
    echo $randomNum . "\n";
}
//7. Encapsular los ejercicios anteriores en funciones.






?> 