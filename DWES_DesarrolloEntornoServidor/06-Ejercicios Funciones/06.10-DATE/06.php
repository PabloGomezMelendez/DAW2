<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Calcular el Día de la Semana Futuro</h2>

    <form method="post" action="">
        <label for="anos">Años:</label>
        <input type="number" id="anos" name="anos" min="0" required>

        <label for="meses">Meses:</label>
        <input type="number" id="meses" name="meses" min="0" required>

        <label for="dias">Días:</label>
        <input type="number" id="dias" name="dias" min="0" required>

        <button type="submit" name="enviar">Calcular Día de la Semana</button>
    </form>

    <?php
    if (isset($_REQUEST['enviar'])) {
        $anos = $_REQUEST['anos'];
        $meses = $_REQUEST['meses'];
        $dias = $_REQUEST['dias'];

        // Crear una expresión de strtotime basada en la entrada del usuario
        $expresion = "+$anos years +$meses months +$dias days";

        // Calcular la fecha futura
        $fechaFutura = date("d-m-Y", strtotime($expresion, strtotime('now')));;


        echo "<p>La fecha resultante después de $anos años, $meses meses y $dias días será el <strong>$fechaFutura</strong>.</p>";
    }
    ?>

</body>

</html>