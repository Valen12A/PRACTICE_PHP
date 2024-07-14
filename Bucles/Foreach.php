<?php

$cafes=array(

    "Americano" => 4000,
    "Latte" => 2000,
    "Capuccino" => 5000,
    "Mocca" => 2400,

);

foreach($cafes as $posicion => $price ){
    echo "El café $posicion cuesta $$price" ."<br>" ;
}

?>
