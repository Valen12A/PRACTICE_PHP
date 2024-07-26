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


//Diferencia de tiempo
$today = new DateTime();
$birth = new DateTime("2006-03-20");
$interval = $birth->diff($today);
echo $interval ->format("%y años con %d dias");


//Crear desde un formato
$date = DateTime::createFromFormat("l j F Y", "Sunday 17 April 2023");
echo $date->format("Y-m-d H:i:s");


//Modificar una fecha
$date = new DateTime();
$date ->modify("+1 day +2 months");
echo $date->format("Y-m-d");

?>