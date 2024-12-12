<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula tiempo de llenado</title>
</head>

<body>
    <?php
        $altura = $_REQUEST['altura'];
        $diametro = $_REQUEST['diametro'];
        $caudal = $_REQUEST['caudal'];
        // pasar de litros a metros cubicos
        $volumen = (pi() * pow($diametro/2, 2) * $altura);
        $volumen= $volumen/1000;//litros a metros cubicos
        $caudal=$caudal/60; // pasar de litros/min a segundos
        $tiempoS = $volumen / $caudal;// segundos
        $tiempoM=$tiempoS/60; // minutos
        $tiempoH=$tiempoM/60; // horas
        echo "<h1>El Tiempo de llenado del cilindro es:  ". $tiempoS. " en segundos</h1><br>";
        echo "<h1>El Tiempo de llenado del cilindro es:  ". $tiempoM. " en minutos</h1><br>";
        echo "<h1>El Tiempo de llenado del cilindro es:  ". $tiempoH. " en horas</h1><br>";
    ?>

</body>

</html>