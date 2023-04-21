<?php

// Ejercicio 1: Crea programas de operaciones con dos variables (suma, resta, etc).
$varDos = 1;
$varTres = 4;

$varCinco = $varDos + $varTres;
var_dump($varCinco);

$varSeis = $varTres - $varDos;
var_dump($varSeis);

$varSiete = $varSeis * 2;
var_dump($varSiete);

// Ejercicio 2: Crear array e imprimir un elemento del array.
$varArray = [3, 4, 6, 8, 10];
$varArraySecondElement = $varArray[1];
var_dump($varArraySecondElement);

// Ejercicio 3: Crear un array de arrays e imprimir un elemento del array.
$array_arrays = [[0, 1, 2], [3, 4, 5], [6, 7, 8], [9, 10, 11]];
var_dump($array_arrays[1]);
var_dump($array_arrays[1][1]);

// Ejercicio 4: Crear un programa que imprima los primeros diez números.
$num = 1;
while ($num <= 10) {
  echo "voy por el número " . $num . "\n";
  $num++;
}

// Ejercicio 5: Crear un programa que sume los primeros 10 números.
$sumaFirstTen = 0;
for ($i = 1; $i <= 10; $i++) {
  $sumaFirstTen += $i;
}
echo 'La suma de los primeros diez números es ' . $sumaFirstTen . "\n";

// Ejercicio 6: Crear un programa que imprima X números random.
for ($i = 0; $i < 5; $i++) {
  $numero_aleatorio = rand(1, 100);
  echo $numero_aleatorio . "\n\n";
}

for ($i = 0; $i < 5; $i++) {
  $randomNum = rand(500, 1000);
  echo $randomNum . "\n";
}

// Ejercicio 7: Encapsular los ejercicios anteriores en funciones.

// Ejercicio 7.5: Función para sumar los primeros diez números.
function sumarPrimerosDiezNumeros() {
  $suma1 = 0;
  for ($i = 1; $i <= 10; $i++) {
    $suma1 += $i;
  }
  return $suma1;
}

$miSumaDiezPrimeros = sumarPrimerosDiezNumeros();
echo "El resultado de sumar los diez primeros números es: $miSumaDiezPrimeros\n";

// Ejercicio 7.6: Función para imprimir X números random.
function cincoNumerosRandom() {
    $numeros = array();
    for ($i = 0; $i < 5; $i++) {
      $numero_aleatorio1 = rand(1, 100);
      $numeros[] = $numero_aleatorio1;
    }
    return $numeros;
  }
  
  $numRamdom = cincoNumerosRandom();
  echo ("aquí tienes tus números aleatorios ");
  var_dump($numRamdom);

//8. Crear una función que imprima X valores random en el
intervarlo //0 - X. (FALTA)

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

//9. Crear una función que dado un número devuelva solo los valores pares.//.
$numero = 0;
function obtenerPares($numero) {
    $pares = array();
    for ($i = 1; $i <= $numero; $i++) {
        if ($i % 2 == 0) {
            $pares[] = $i;
        }
    }
    return $pares;
}

$misPares = obtenerPares(102);
var_dump($misPares);

//10. Crear una función que dado un número x imprima solo los valores impares.
$numero = 0;
function obtenerImpares($numero){
  $impar = array();
  for ($i = 1; $i <= $numero; $i++){
      if ($i % 2 != 0) {
          $impar[] = $i;
      }
  }
  return $impar;   
}
$misImpares = obtenerImpares(50);
var_dump($misImpares);

?>







?> 