<?php

function estudiante($platzi){

    if ( $platzi >= 20000 ){
        echo" Si eres estudiante de platzi.";
    }
    else {
        echo "No eres estudiante de platzi.";
    }
}

// $estudiante_user = (int) readline("Ingrese los puntos de estudiante: ");

do{
    $estudiante_user = (int) readline("Ingrese los puntos de estudiante:");

    $estudiante($estudiante_user);

}while(true);

?>