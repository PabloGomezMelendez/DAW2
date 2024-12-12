<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Calcular Edad en una Fecha Futura</h2>

    <form method="post" action="">
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

        <label for="fecha_futura">Fecha Futura:</label>
        <input type="date" id="fecha_futura" name="fecha_futura" required>

        <button type="submit" name="enviar">Calcular Edad</button>
    </form>

    <?php
    if (isset($_REQUEST['enviar'])) {
        $fechaNacimiento = $_REQUEST['fecha_nacimiento'];
        $fechaFutura = $_REQUEST['fecha_futura'];

        // Convertir las fechas a timestamps
        $timestampNacimiento = strtotime($fechaNacimiento);
        $timestampFuturo = strtotime($fechaFutura);

        // Comprobar si la fecha futura es posterior a la de nacimiento
        if ($timestampFuturo <= $timestampNacimiento) {
            echo "<p>La fecha futura debe ser posterior a la fecha de nacimiento.</p>";
        } else {
            // Calcular la diferencia en segundos y convertirla a años
            $diferenciaSegundos = $timestampFuturo - $timestampNacimiento;
            $edadFutura = $diferenciaSegundos / (60 * 60 * 24 * 365.25);

            // Redondear la edad al entero más cercano
            $edadFuturaRedondeada = floor($edadFutura);

            echo "<p>En la fecha $fechaFutura, tendrás aproximadamente <strong>$edadFuturaRedondeada</strong> años.</p>";
        }
    }
    ?>

</body>

</html>