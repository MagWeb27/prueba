<?php
try {
    $resultado = 10 / 0;  // Esto generará una excepción de división por cero
    echo "El resultado es: " . $resultado;  // Esta línea no se ejecutará si ocurre una excepción
} catch (Exception $e) {
    // Acá se puede utilizar para darle un manejo a la excepción
    echo "Se ha producido una excepción: " . $e->getMessage();
} finally {
    // Código opcional que se ejecutará siempre, ya sea que ocurra una excepción o no
    echo "Este bloque siempre se ejecuta.";
}
?>