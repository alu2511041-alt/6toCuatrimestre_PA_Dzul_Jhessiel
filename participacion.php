<?php
//1
function contarNumero(array $numeros, int $numeroBuscado): int {


    if (count($numeros) == 0) {
        return 0;
    }


    if ($numeros[0] == $numeroBuscado) {
        return 1 + contarNumero(array_slice($numeros, 1), $numeroBuscado);
    }


    return contarNumero(array_slice($numeros, 1), $numeroBuscado);
}

$var = array(1,5,8,7,6,1,3,2,4,7,9,8,6,3,4,5,6,8,2,3,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9,1,2,3,4,5,6,7);

echo "El numero 5 se encuentra " . contarNumero($var, 5) . " veces en el array." . "<br>";


//2
function encotrarMinimo(array $numeros): int {
    if (count($numeros) == 1) {
        return $numeros[0];
    }

    $minimoResto = encotrarMinimo(array_slice($numeros, 1));

    return min($numeros[0], $minimoResto);
}

$var2 = array(5, 3, 8, 7, 4);

echo "El numero minimo del array es: " . encotrarMinimo($var2) . "<br>";

//3
function repetirTexto(string $texto, int $veces): string {
    if ($veces <= 0) {
        return "";
    }

    return $texto . repetirTexto($texto, $veces - 1);
}

echo repetirTexto("Hola ", 5) . "<br>";

//4
function encontrarPositivos (array $numeros): array {
    if (count($numeros) == 0) {
        return [];
    }

    $primerNumero = $numeros[0];
    $restoPositivos = encontrarPositivos(array_slice($numeros, 1));

    if ($primerNumero > 0) {
        return array_merge([$primerNumero], $restoPositivos);
    }

    return $restoPositivos;
}   

$var3 = array(-2, 5, -1, 3, -4, 7);
$positivos = encontrarPositivos($var3);
echo "Los numeros positivos del array son: " . implode(", ", $positivos) . "<br>";

//5
function calcularSuma(array $numeros): int {
    if (count($numeros) == 0) {
        return 0;
    }

    return $numeros[0] + calcularSuma(array_slice($numeros, 1));
}
$var4 = array(1, 2, 3, 4, 5);
echo "La suma de los numeros del array es: " . calcularSuma($var4) . "<br>";
?>