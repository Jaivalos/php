<?php

echo "<pre>";

var_dump($_POST);

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];

echo "</pre>";

echo "El usuario $nombre tiene $edad años";

