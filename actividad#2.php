<?php

//problema de fibonacci

function generarFibonacci($n) {
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

// Ejemplo de uso:
$n = 10; // Cambia este valor según tus necesidades
$resultado = generarFibonacci($n);

echo "Los primeros $n términos de la serie Fibonacci son: ";
foreach ($resultado as $term) {
    echo "$term, ";
}

//problema de los numeros primos

function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }

    // Verificar divisibilidad desde 2 hasta la raíz cuadrada del número
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i === 0) {
            return false;
        }
    }

    return true;
}

// Ejemplo de uso:
$numeroEvaluado = 17; // Cambia este valor según tus necesidades
if (esPrimo($numeroEvaluado)) {
    echo "$numeroEvaluado es un número primo.";
} else {
    echo "$numeroEvaluado no es un número primo.";
}

// el problema de palindromos

function esPalindromo($cadena) {
    // Eliminamos espacios y caracteres especiales, y convertimos a minúsculas
    $cadena = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $cadena));
    
    // Comparamos la cadena original con su reverso
    return $cadena === strrev($cadena);
}

// Ejemplo de uso:
$texto = "Anilina"; // Cambia esta cadena según tus necesidades
if (esPalindromo($texto)) {
    echo "$texto es un palíndromo.";
} else {
    echo "$texto no es un palíndromo.";
}

?>