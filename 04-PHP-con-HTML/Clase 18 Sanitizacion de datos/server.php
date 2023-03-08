<?php 

$nombre   = $_POST["nombre"];
$username = $_POST["username"];
$correo   = $_POST["correo"];

$htmlentities = htmlentities($nombre);
$addslashes   = addslashes($nombre);
$onlywords    = preg_replace("/\d/","",$username); 
$onlynumbers  = preg_replace("/\D/","",$username); 
$email = filter_var($correo, FILTER_SANITIZE_EMAIL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de mi usuario</title>
</head>
<body>
    <p>Nombre de usuario: </p>
    <?= $username ?>
    <p>Sanitizado: </p>
    <?= $htmlentities ?>
    <p>Con slash: </p>
    <?= $addslashes ?>
    <p>Solo letras: </p>
    <?= $onlywords ?>
    <p>Solo numeros: </p>
    <?= $onlynumbers ?>
    <p>Correo Sanitizado: </p>
    <?= $email ?>
</body>
</html>