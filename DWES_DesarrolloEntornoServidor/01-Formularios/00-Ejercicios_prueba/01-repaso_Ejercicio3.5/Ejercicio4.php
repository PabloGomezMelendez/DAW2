<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <<?php
        $numero1 = $_REQUEST['numero1'];
        $numero2 = $_REQUEST['numero2'];
        echo "La suma de $numero1 y $numero2 es: " . ($numero1 + $numero2) . "<br>";
        echo "La resta de $numero1 y $numero2 es: " . ($numero1 - $numero2) . "<br>";
        echo "El producto de $numero1 y $numero2 es: " . ($numero1 * $numero2) . "<br>";
        echo "La division de $numero1 y $numero2 es: " . ($numero1 / $numero2) . "<br>";
        ?>
        </body>

</html>