<?php

$escuela_de_michis = [
    "tita" => [
        "nombre"    => "Titalina",
        "ocupacion" => "doctora",
        "color"     => "blanco con manchas",
        "comidas"   => [
            "favoritas"    => ["pesado", "carne"],
            "No favoritas" => ["leche", "galletas"],
        ],
    ],
    
    "snow" => [
        "nombre"    => "Snowi",
        "ocupacion" => "Actor",
        "color"     => "Blanco",
        "comidas"   => [
            "favoritas"    => ["pesado", "atun"],
            "No favoritas" => ["leche", "brocoli"],
        ],
    ],
    
    "miau" => [
        "nombre"    => "Miausin",
        "ocupacion" => "bromista",
        "color"     => "Gris",
        "comidas"   => [
            "favoritas"    => ["atun", "leche"],
            "No favoritas" => ["apasote", "huevo"],
        ],
    ],
];

echo "La información de Javier es: Edad: {$personas["Javier"]["edad"]}, Ciudad: {$personas["Javier"]["ciudad"]}";