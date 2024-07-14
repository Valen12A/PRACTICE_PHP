<?php

$entrdas_cine = 4;
$entrada_VIP = true;
    //IF   -    ELSE 
    if ($entrdas_cine > 0){
        echo "Puedes entrar";
    }
    else if ($entradas_VIP==true){
        echo "Puedes entrar";
    }
    else if ($entradas_VIP==false){
        echo "No puedes etrar";
    }
    else{
        echo "No puedes entrear";
    }

?>