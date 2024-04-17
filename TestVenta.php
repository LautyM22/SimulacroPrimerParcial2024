<?php

require_once 'Cliente.php';
require_once 'Moto.php';
require_once 'Venta.php';

// Ejemplo de uso:

// Crear un cliente
$cliente = new Cliente("Juan", "Perez", false, "DNI", "12345678");

// Crear una moto
$moto = new Moto("001", 5000, 2020, "Honda CB", 0.05, true);

// Crear una venta e incorporar la moto
$venta = new Venta(1, "2024-04-17", $cliente);
$venta->incorporarMoto($moto);

echo $venta;

?>