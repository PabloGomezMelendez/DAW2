<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $cadena=$_REQUEST['array'];
    $numeros = explode(' ',$cadena );


    sort($numeros);
    echo "<br>Numeros ordenados ascendentemente:";
   
    $posicion = count($numeros)-1;
    $mayor=$numeros[$posicion];
    $menor=$numeros[0];
    echo "<br> el numero mas pequeño es $menor y el numero mas grande es $mayor";
    ?>
</body>

</html>