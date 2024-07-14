<?php
/*

2=>1
3=>2
4=>3
5=>5     FIBONACCI
6=>8
7=>13
7=>21 

*/

$tienda = (int) readline("Ingrese el número de tienta: ");
$anterior = 0;
$actual = 1;

for ($i=2; $i <= $tienda; $i++) { 
   
    $temporal= $actual;
    $actual += $anterior;
    $anterior = $temporal;

    echo "Hay $actual formas de llegar a la tienda $tienda "."<br>";


}

?>