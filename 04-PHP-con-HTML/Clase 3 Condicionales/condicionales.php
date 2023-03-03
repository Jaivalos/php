<?php

$se_hablo_de_Juan = false;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>

    <h2>Esto no se debe hacer</h2>
    <?php if($se_hablo_de_Juan) {
        echo "<p> :0 </p>";
    }else {
        echo ":D";
    } ?>

    <h2>Esto es aceptable</h2>
    <?php if($se_hablo_de_Juan){ ?>
        <p> :0 </p>
    <?php } else {?>
        <p> :D </p>
    <?php }?>

    <h2>Esto si deberias hacerlo</h2>
    <?php if($se_hablo_de_Juan): ?>
        <p> :0 </p>
    <?php else: ?>
        <p> :D </p>
    <?php endif; ?>


</body>
</html>