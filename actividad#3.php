<?php

// ***problema de la lista invertida***

function listaInvertida($arrayNumeros) {
    // Utilizamos la función array_reverse para obtener la lista invertida
    $listaInvertida = array_reverse($arrayNumeros);
    return $listaInvertida;
}

// Ejemplo de uso:
$miLista = [1, 2, 3, 4, 5]; // Cambia los números según tus necesidades
$resultado = listaInvertida($miLista);

echo "Lista original: " . implode(", ", $miLista) . "\n";
echo "Lista invertida: " . implode(", ", $resultado);

// ***Problema de suma de numeros pares***

function sumaNumerosPares($arrayNumeros) {
    $suma = 0;
    foreach ($arrayNumeros as $numero) {
        if ($numero % 2 === 0) {
            $suma += $numero;
        }
    }
    return $suma;
}

// Ejemplo de uso:
$miArray = [2, 4, 6, 8, 10]; // Cambia los números según tus necesidades
$resultado = sumaNumerosPares($miArray);

echo "La suma de los números pares en el arreglo es: $resultado";

// ***Problema de frecuencia de caracteres***

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

// ***Problema de bucle animado***

function imprimirPiramide($altura) {
    for ($i = 1; $i <= $altura; $i++) {
        // Imprimir espacios en blanco antes de los asteriscos
        for ($j = 1; $j <= $altura - $i; $j++) {
            echo " ";
        }
        // Imprimir los asteriscos
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }
        echo "\n"; // Cambiar de línea después de cada fila
    }
}

// Ejemplo de uso:
$alturaPiramide = 5; // Cambia la altura según tus necesidades
imprimirPiramide($alturaPiramide);

?>