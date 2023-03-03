<?php

$a = 0;

$cabaña = readline("¿A que cabaña desea moverse? ");
echo "\n";

$n_movimientos = 1;
$n_cola   = 0;

do {

    $n_temp = $n_movimientos + $n_cola;
    $n_cola = $n_movimientos;
    $n_movimientos = $n_temp;

    $a++;
} while ($a <= $cabaña);

echo ("El numero de movimientos que necesita para llegar a la cabaña $cabaña son: $n_movimientos");