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
    require_once 'php/ Vehiculo.php';

    // Crear una bicicleta y un coche
    $bicicleta = new Bicicleta();
    $coche = new Coche();

    echo "<h1>Pruebas de las clases Vehículo, Bicicleta y Coche</h1>";

    // Andar con la bicicleta
    echo "<h2>Bicicleta</h2>";
    echo "<p>" . $bicicleta->anda(10) . "</p>";
    echo "<p>" . $bicicleta->hazCaballito() . "</p>";
    echo "<p>Kilómetros recorridos con la bicicleta: " . $bicicleta->getKmRecorridos() . " km</p>";

    // Andar con el coche
    echo "<h2>Coche</h2>";
    echo "<p>" . $coche->anda(50) . "</p>";
    echo "<p>" . $coche->quemaRueda() . "</p>";
    echo "<p>Kilómetros recorridos con el coche: " . $coche->getKmRecorridos() . " km</p>";

    // Ver kilometraje total
    echo "<h2>Estadísticas generales</h2>";
    echo "<p>Total de kilómetros recorridos por todos los vehículos: " . Vehiculo::getKmTotales() . " km</p>";
    echo "<p>Total de vehículos creados: " . Vehiculo::getVehiculosCreados() . "</p>";
    ?>

</body>

</html>