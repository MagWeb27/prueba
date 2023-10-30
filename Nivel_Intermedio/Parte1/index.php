<?php

function sumaPares($arreglo) {
    $suma = 0;

    foreach ($arreglo as $numero) {
        if ($numero % 2 == 0) {
            $suma += $numero;
        }
    }

    return $suma;
}

// Ejemplo de uso 
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$resultado = sumaPares($numeros);

echo "La suma de los números pares es: " . $resultado;
?>