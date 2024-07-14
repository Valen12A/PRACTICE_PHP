<?php

$donaciones = readline ("Ingresa la cantidad de donaciones acumuladas: ");
 
if ($donaciones >= 100) {
    echo "¡Retiro exitoso!";
}
else {
    echo "Cantidad insuficioente para el retiro.";
}