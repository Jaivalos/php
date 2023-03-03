
<?php 

$usuarios = [
    [
        "id"     => 0,
        "nombre" => "Mr. Michi",
    ],
    [
        "id"     => 1,
        "nombre" => "Tulito",
    ],
    [
        "id"     => 2,
        "nombre" => "Kevinsin",
    ],
];

$edad_de_pepito = 2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables de PHP a JS</title>
</head>
<body>
    
    <script>

        let users = [JSON.parse('<?= json_encode($usuarios) ?>')]
        console.log(users)

        let edadDePepito = <?php $edad_de_pepito ?>

    </script>

    <script src="./index.js"></script>

</body>
</html>