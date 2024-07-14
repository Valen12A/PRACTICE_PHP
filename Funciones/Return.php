<?php 

function freddy(){

    $num = rand(1, 5);
    $frase ="";


    switch($num){
        case 1:
            $frase = "Nunca dejes de aprender.";
            break;
        case 2:
            $frase = "Las empresas no son familia.";
            break; 
        case 3:
            $frase = "La tecnología es el futuro.";
            break;  
        case 4:
            $frase = "La programación es el futuro.";
            break;
        default:
            $frase =  "No hay frases de freddy";  
}
    return $frase;

}

echo freddy();
?>