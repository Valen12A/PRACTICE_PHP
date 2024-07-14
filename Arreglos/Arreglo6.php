<?php

$escuela = array(
  
  array(
    "Nombre"  => "Juan",
    "Ocupacion" => "Ingeniero",
    "Edad" => "20",
    "Actividades" => array(
      "Actividades_favorita" =>"Leer, Dormir, Programar",
      "Actidades_no_favoritas" => "Correr, Bailar"
    )
    ),
    array(
      "Nombre"  => "Eduardo",
      "Ocupacion" => "Progrmador",
      "Edad" => "18",
      "Actividades" => array(
        "Actividades_favorita" =>"Correr, Dormir, Programar",
        "Actidades_no_favoritas" => "Ver tv"
      )
    ),
  
  );
  echo "La edad de Juan es: {$escuela['Juan']['Edad']} años";
