<?php

function clear(){
    if (PHP_OS === "WINNT") {
        popen('cls', 'w');
    }else{
        system("clear");
    }
}

$possible_words = ["Hola", "Mañana", "Gallo", "Terremoto"];

define("MAX_ATTEMPTS", 6);

echo "😼 Juego de ahorcado \n \n";

//Inicializamos el juego
$choosen_word     = $possible_words[ rand(0,3) ];
$choosen_word     = strtolower($choosen_word);
$word_length      = strlen($choosen_word);
$discover_letters = str_pad("", $word_length, "_");
$attempts         = 0;

do{

    echo "Palabra de $word_length letras \n";
    echo "$discover_letters \n";

    //Pedimos al usuario que escriba
    $player_letter = readline("Escribe una letra: ");
    $player_letter = strtolower($player_letter);

    if ( str_contains($choosen_word, $player_letter) ) {
        // Verificamos todas las ocurrencias de esta letra para reemplazarla
        $offset = 0;
        while ( 
            ( $letter_position = strpos($choosen_word, $player_letter, $offset) ) 
            !== false 
            ) {
            $discover_letters[$letter_position] = $player_letter;
            $offset = $letter_position + 1;
        }
    }else {
        clear();
        $attempts++;
        echo "Letra incorrecta ): \nTe quedan: " . (MAX_ATTEMPTS - $attempts) . " intentos \n";
        sleep(2);
    }

    clear();

}while( ( $attempts < MAX_ATTEMPTS ) && ( $discover_letters != $choosen_word ) );

clear();

if ($attempts < MAX_ATTEMPTS) {
    echo "Ganasteeeeee :)";
}else{
    echo "Lo siento, perdiste :(";
}

echo "\n La palabra era: $choosen_word";
echo "\nTu colocaste: $discover_letters";
