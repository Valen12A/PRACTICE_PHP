<?php

$cafes=array(
    "Americano" => 4000,
    "Latte" => 2000,
    "Capuccino" => 5000,
    "Mocca" => 2400,

);

foreach( $cafes as $posicion => $price ){
    echo "Café actual $posicion" ."<br>";

    if ($posicion == "Latte"){
        echo "El café encontrado" ."<br>" ;
        break;
    }
}

foreach($cafes as $posicion => $price){

    if ($posicion == "Mocca")
    continue;

    echo "El cafe es: $posicion ". "<br>";
}
?>