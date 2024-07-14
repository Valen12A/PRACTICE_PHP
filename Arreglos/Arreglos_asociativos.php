<?php
 //  ARREGLOS ASOCIATIVOS

     
$cafes =array(
    "Capuchino" => 50000,
    "Latte" => 49000,
    "Americano" => 70000,
    );
    
    
echo "El precio del cafe americano es de {$cafes['Americano']} pesos";


    
    
$personas = array (
    "Carlos"=> array(
        "Edad"=> 20,
        "Apellido" => "Sanchez",
        "Profesion" => "Programador",
        ), 
        
    "Juan" => array(
        "Edad" => 50,
        "Apellido"=> "Cortes",
        "Profesion" => "Ingeniero",
        )
    );
 
    echo "La información de Carlos es:  ";
    echo "Apellido:{$personas['Carlos']['Apellido']}  ";
    echo "Edad:{$personas['Carlos']['Edad']}  ";
    echo "Profesion:{$personas['Carlos']['Profesion']}  ";

?>
