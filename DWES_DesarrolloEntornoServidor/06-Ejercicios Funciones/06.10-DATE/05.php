<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<h2>Seleccione un día de la semana</h2>

<form method="post" action="">
    <label for="dia">Día de la semana:</label>
    <select id="dia" name="dia" required>
        <option value="monday">Lunes</option>
        <option value="tuesday">Martes</option>
        <option value="wednesday">Miércoles</option>
        <option value="thursday">Jueves</option>
        <option value="friday">Viernes</option>
        <option value="saturday">Sábado</option>
        <option value="sunday">Domingo</option>
    </select>
    <button type="submit">Mostrar Fecha</button>
</form>

<?php
if (isset($_REQUEST['dia'])) {
    $diaSeleccionado = $_REQUEST['dia'];
    // Array de días de la semana en español
    $diasSemana = [
        "sunday"=>"domingo",
        "monday" => "lunes",
        "tuesday"=>"martes",
        "wednesday"=>"miércoles",
        "thursday"=>"jueves",
        "friday"=>"viernes",
        "saturday"=>"sábado"
    ];
    $dia=$diasSemana[$diaSeleccionado];
    // Usar strtotime para encontrar la fecha del próximo día seleccionado
    $fechaProximoDia = strtotime("next $diaSeleccionado"); 

    // Formatear la fecha resultante
    $fechaFormateada = date('d \d\e F \d\e Y', $fechaProximoDia);

    // Convertir el nombre del mes a español
    echo "<p>La fecha del próximo " . $dia . " es: <strong>" . $fechaFormateada . "</strong></p>";
}
?>
</body>

</html>