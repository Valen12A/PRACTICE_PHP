<?php

//Establecer zona horaria

date_default_timezone_set("America/Bogota");


//Obtener fecha actual

$now = date("Y-m-d H:i:s");     //String
$now = date_create();           //Objeto

//Strtotime combierte string en formato Unix

echo strtotime($now);
echo strtotime("17 April 2022");
echo strtotime("next Monday");

$unix_time = strtotime("20 April 2022");
echo date("Y-m-d H:i:s", $unix_time);

//Fechas inmutables

$date_imnmutables = new DateTimeImmutable();

?>