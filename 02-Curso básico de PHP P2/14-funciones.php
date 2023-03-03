<?php

function get_pokemon(){

    $n_aleatorio = rand(1, 5);

    switch ($n_aleatorio) {
        case '1':
            echo "Pikachu";
            break;

        case '2':
            echo "Charmander";
            break;

        case '3':
            echo "Otro 0te";
            break;
        
        default:
            echo "Lo siento, no hay pokemon";
    }

echo ("\n");
}

for ($i=0; $i < 11; $i++) { 
    get_pokemon();
}
