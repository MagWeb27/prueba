<?php

class Producto {

    public $nombre;
    public $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    //funcion que calcula el precio con impuestos
    public function calcularPrecio() {
        $impuesto = 0.18;
        $precioConImpuestos = $this->precio * (1 + $impuesto);
        return $precioConImpuestos;
    }
}

// Datos quemados para ver la funcionalidad de la clase producto

$producto = new Producto("Ejemplo Producto", 230);
$precioConImpuestos = $producto->calcularPrecio();

echo "Nombre: " . $producto->nombre . "<br>";
echo "Precio sin impuestos: $" . $producto->precio . "<br>";
echo "Precio con impuestos (18%): $" . $precioConImpuestos . "<br>";

?>