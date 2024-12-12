<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Seleccione una fecha para ver el día de la semana</h2>

    <form method="post" action="">
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (isset($_REQUEST['fecha'])) {
        $fecha = $_POST['fecha'];

        // Convertir la fecha al formato de timestamp
        $timestamp = strtotime($fecha);

        // Obtener día, mes y año de la fecha seleccionada
        $dia = date('d', $timestamp);
        $mesNumero = date('m', $timestamp);
        $anio = date('Y', $timestamp);

        // Array de meses en español
        $meses = [
            '01' => "enero",
            '02' => "febrero",
            '03' => "marzo",
            '04' => "abril",
            '05' => "mayo",
            '06' => "junio",
            '07' => "julio",
            '08' => "agosto",
            '09' => "septiembre",
            '10' => "octubre",
            '11' => "noviembre",
            '12' => "diciembre"
        ];

        // Formato deseado
        echo "<p>Fecha en formato español: <strong>$dia de " . $meses[$mesNumero] . " de $anio</strong></p>";
    }
    ?>

</body>

</html>