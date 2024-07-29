<?php

// Funcionan para leer variables del ámbito global.
$cajero = 10;
$add_cajero = fn($add) => $cajero + $add;
echo $add_cajero(20); 


$edades = [5, 21, 50, 9, 18];

$mayores_de_edad = array_filter($edades, function($current) {
    return $current >= 18;
}); 
$mayores_de_edad = array_filter($edades, fn($current) => $current >= 18);
print_r($mayores_de_edad);

