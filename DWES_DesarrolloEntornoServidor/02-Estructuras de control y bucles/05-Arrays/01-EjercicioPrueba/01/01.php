<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
     $numero=[];
     $cuadrado=[];
     $cubo=[];
     for($i=1;$i<=20;$i++){
         $aux=rand(0,100);
         $numero[$i]=$aux;
         $cuadrado[$i]=pow($aux,2);
         $cubo[$i]=pow($aux,3);
     } 
    ?>
    <?php 
    echo "Los numeros aleatorios son: <br>";
    for($i=1;$i<=20;$i++){
        echo "$i : el numero aleatorio es $numero[$i], el cuadrado del numero es $cuadrado[$i] y el cubo del numero es $cubo[$i] <br>";
    }
    ?>
</body>
</html>