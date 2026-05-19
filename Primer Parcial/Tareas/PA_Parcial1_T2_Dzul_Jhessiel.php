<?php

// 1. Potencia de un número
function potencia($base, $exponente) {
    if ($exponente == 0) {
        return 1;
    }
    return $base * potencia($base, $exponente - 1);
}

echo "1. Potencia: " . potencia(2, 4) . "\n";


// 2. Multiplicación usando sumas
function multiplicar($a, $b) {
    if ($b == 0) {
        return 0;
    }

    if ($b > 0) {
        return $a + multiplicar($a, $b - 1);
    } else {
        return -multiplicar($a, -$b);
    }
}

echo "2. Multiplicación: " . multiplicar(5, 3) . "\n";


// 3. Contar caracteres de una cadena
function contarCaracteres($texto) {
    if ($texto == "") {
        return 0;
    }

    return 1 + contarCaracteres(substr($texto, 1));
}

echo "3. Caracteres: " . contarCaracteres("Hola") . "\n";


// 4. Verificar palíndromo
function esPalindromo($texto) {

    $texto = strtolower(str_replace(" ", "", $texto));

    if (strlen($texto) <= 1) {
        return true;
    }

    if ($texto[0] != $texto[strlen($texto) - 1]) {
        return false;
    }

    return esPalindromo(substr($texto, 1, -1));
}

echo "4. Palíndromo: ";
echo esPalindromo("anita lava la tina") ? "Sí\n" : "No\n";


// 5. MCD con algoritmo de Euclides
function mcd($a, $b) {
    if ($b == 0) {
        return $a;
    }

    return mcd($b, $a % $b);
}

echo "5. MCD: " . mcd(24, 18) . "\n";


// 6. Decimal a binario
function decimalBinario($numero) {

    if ($numero < 2) {
        return $numero;
    }

    return decimalBinario(intdiv($numero, 2)) . ($numero % 2);
}

echo "6. Binario: " . decimalBinario(10) . "\n";


// 7. Sumar elementos de un arreglo
function sumaArreglo($arreglo, $indice = 0) {

    if ($indice == count($arreglo)) {
        return 0;
    }

    return $arreglo[$indice] + sumaArreglo($arreglo, $indice + 1);
}

$arreglo = [1, 2, 3, 4, 5];

echo "7. Suma arreglo: " . sumaArreglo($arreglo) . "\n";


// 8. Buscar elemento en arreglo
function existeElemento($arreglo, $elemento, $indice = 0) {

    if ($indice == count($arreglo)) {
        return false;
    }

    if ($arreglo[$indice] == $elemento) {
        return true;
    }

    return existeElemento($arreglo, $elemento, $indice + 1);
}

echo "8. Existe elemento: ";
echo existeElemento($arreglo, 3) ? "Sí\n" : "No\n";


// 9. Contar vocales
function contarVocales($texto) {

    if ($texto == "") {
        return 0;
    }

    $vocales = "aeiouAEIOU";

    $contador = (strpos($vocales, $texto[0]) !== false) ? 1 : 0;

    return $contador + contarVocales(substr($texto, 1));
}

echo "9. Vocales: " . contarVocales("Recursividad") . "\n";


// 10. Suma de números pares hasta n
function sumaPares($n) {

    if ($n <= 0) {
        return 0;
    }

    if ($n % 2 != 0) {
        return sumaPares($n - 1);
    }

    return $n + sumaPares($n - 2);
}

echo "10. Suma pares: " . sumaPares(10) . "\n";

?>