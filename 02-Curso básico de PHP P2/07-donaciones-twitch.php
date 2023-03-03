<?php

$donaciones = readline('Ingresa la cantidad de tus donaciones recibidas: ');

if ($donaciones > 1000) {
    echo "Puedes retirar tus donaciones, tienes $$donaciones en tu cuenta";
}else {
    echo "No puedes retirar tus donaciones, tienes $$donaciones en tu cuenta";
};