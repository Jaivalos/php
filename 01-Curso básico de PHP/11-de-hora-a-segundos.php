<?php

$horas    = readline('Ingresa cantidad de horas: ');
$minutos  = readline('Ingresa cantidad de minutos: ');
$segundos = readline('Ingresa cantidad de segundos: ');

$segundos += ( ( $minutos * 60 ) + ( $horas * 3600 ) );

echo ("La hora que ingreso es equivalente a $segundos segundos.");