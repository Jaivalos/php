<?php

$edades = [
    "Carlos" => 18,
    "Javier" => 20,
    "Juan"   => 40,
];
echo "La edad de Carlos es: " . $edades['Carlos'] . "\n";

$cafes = [
    "Capuccino" => 18,
    "Negro"     => 20,
    "Amricano"  => 40,
];
echo "El precio del café es: {$cafes['Americano']} \n";

$personas = [
    "Javier" => [
        "edad"   => 20,
        "ciudad" => "Guatemala"
    ],
    
    "Carlos" => [
        "edad"   => 50,
        "ciudad" => "Palencia"
    ],
    
    "Juan" => [
        "edad"   => 60,
        "ciudad" => "San Juan"
    ]
];

echo "La información de Javier es: Edad: {$personas["Javier"]["edad"]}, Ciudad: {$personas["Javier"]["ciudad"]}";