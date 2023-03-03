<?php

$altura = readline("Ingresa la altura que deseas del arbol: ");

for ($i=1; $i <= $altura; $i++) { 
    echo str_repeat("*", $i) . "\n";
}