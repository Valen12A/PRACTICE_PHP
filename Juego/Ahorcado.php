<?php

//Función limppiar pantalla
function clear() {

    if (PHP_OS === "WINNT"){
        system ("cls");
    }
    else{
        system ("clear");
    }
}

//Posibles palabras
$words=[
    "Multiverso","Carro","Patineta","Planta","Jugo","Equipo","Computador"];

//NUMERO DE INTENTOS
define("max_attemps", 6);

//INICIO DEL JUEGO
echo "¡Bienvendo!\n\n";

echo "¡Juego del ahorcado!\n\n";

$choosen_word = $words [rand(0,9)];
$choosen_word = strtolower ($choosen_word);
$word_len = strlen ($choosen_word);
$discovered_letters = str_pad("", $word_len,"_");
$attempts = 0;

do{
    echo"Es una palabra de $word_len letras";
    echo $discovered_letters;

    //USUARIO 
    $player_letter = readline("Escribe una letra: ");
    $player_letter = strtolower($player_letter);

    if (str_contains($choosen_word,$player_letter)) {

        $offset = 0;

        while ($letter_position = strpos($choosen_word, $player_letter, $offset)!== false){
            
            $discovered_letters[$letter_position] = $player_letter;

            $offset = $letter_position + 1;
        }
    }

    else{
        clear();
        $attempts++;
        echo "Letra inconrrecta.\n ";
        echo "Te quedan " . (max_attemps - $attempts);
        sleep(2);
    }

    clear();

} while ($attempts <max_attemps && $discovered_letters != $choosen_word);

clear();


if ($attempts<max_attemps){
    echo"Adivinaste la palabra\n";
    echo"¡FELIZADADES!";
}

else
    echo "Suerte para la proxima.\n";

echo "La palabra es: $choosen_word\n";
echo "Solo descubriste $discovered_letters";


?>