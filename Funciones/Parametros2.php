<?php
/*
function suma ($a = 1, $b = 1) {
    echo"La suma de los dos numero es: " . $a + $b ;
}

$arregos1 = [12, 23, 34];

$arregos2 = [21,10,40];

$resultado = [...$arreglo1, ...$arregos2];

function sumb ($a, $b ) {
    echo"La suma de los dos numero es: " . $a + $b ;
}

$numeros = [1, 2];

sumb(...$numeros);*/

function sumb_infinita (... $arr) {

    $suma = 0;
    foreach ($arr as $i) {
        $suma += $i;

}
}


sumb_infinita(1, 12, 13) ;
sumb_infinita(10, 30, 12, 13) ;
sumb_infinita(1, 40, ) ;
sumb_infinita(4, 12, 413) ;