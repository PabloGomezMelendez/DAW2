<!-- @Author Pablo Gómez Meléndez -->
<!-- @Date 2022-02-20 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'php/DadoPoker.php';

    // Crear un cubilete con 5 dados
    $cubilete = [];
    for ($i = 0; $i < 5; $i++) {
        $cubilete[] = new DadoPoker();
    }

    // Tirar todos los dados del cubilete
    echo "<h1>Resultados del cubilete</h1>";
    foreach ($cubilete as $index => $dado) {
        $dado->tira();
        echo "<p>Dado " . ($index + 1) . ": " . $dado->nombreFigura() . "</p>";
    }

    // Mostrar tiradas totales
    echo "<h2>Estadísticas</h2>";
    echo "<p>Total de tiradas realizadas: " . DadoPoker::getTiradasTotales() . "</p>";
    ?>

</body>

</html>