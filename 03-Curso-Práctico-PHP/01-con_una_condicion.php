<?php

$estudiantes = [1,2,3,5,8];

foreach ($estudiantes as $estudiante) {
    if ($estudiante < 5) {
        echo "El estudiante con la edad: $estudiante tendra sus espacios en la parte inferior\n"; 
    }elseif ( ( $estudiante >= 5) and ( $estudiante <= 7 ) ) {
        echo "El estudiante con la edad: $estudiante tendra sus espacios en la parte media\n"; 
    }elseif ( $estudiante > 7 ) {
        echo "El estudiante con la edad: $estudiante tendra sus espacios en la parte alta\n"; 
    }
}

