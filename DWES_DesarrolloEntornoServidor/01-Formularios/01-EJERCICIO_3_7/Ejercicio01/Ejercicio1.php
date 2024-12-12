<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo del volumen de un cilindro</title>
</head>
<body>

    <<?php
        $altura = $_REQUEST['altura'];
        $diametro = $_REQUEST['diametro'];
        $volumen = (pi() * pow($diametro/2, 2) * $altura);
        echo "<h1>El volumen del cilindro es:  ". $volumen. "</h1><br>";
    ?>
    <img src="cilindro.png" alt="cilindro" width="200" height="200">
</body>
</html>

