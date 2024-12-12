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

        // Convertir la fecha al formato de timestamp y obtener el número de día de la semana
        $timestamp = strtotime($fecha);
        $numeroDia = date('w', $timestamp);

        // Array de días de la semana en español
        $diasSemana = [
            "domingo",
            "lunes",
            "martes",
            "miércoles",
            "jueves",
            "viernes",
            "sábado"
        ];

        // Mostrar el día de la semana correspondiente
        echo "<p>La fecha seleccionada ($fecha) corresponde a un <strong>" . $diasSemana[$numeroDia] . "</strong>.</p>";
    }
    ?>
</body>

</html>