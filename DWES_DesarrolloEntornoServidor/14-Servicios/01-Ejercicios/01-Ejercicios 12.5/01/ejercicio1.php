<?php
const API_KEY='5f5deaad8f5ea24b7854b8baa9bac175';
// Check if form is submitted
if (isset($_POST['ciudad'])) {
    $ciudad = $_POST['ciudad'];
    $respuesta = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q={$ciudad}&appid=".API_KEY."&units=metric");
    $datosTiempo =json_decode($respuesta, true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El tiempo</title>
</head>
<body>
    <h1>El clima </h1>
    <form method="post" action="">
        <label for="ciudad">Nombre de la ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required>
        <button type="submit">tiempo</button>
    </form>

    <?php if (isset($datosTiempo)): ?>
        <h2>El clima de <?php echo $datosTiempo['name']; ?></h2>
        <p>Temperatura: <?php echo $datosTiempo['main']['temp']; ?> °C</p>
        <p>Humedad: <?php echo $datosTiempo['main']['humidity']; ?>%</p>
        <p>Velocidad del viento: <?php echo $datosTiempo['wind']['speed']; ?> m/s</p>
    <?php endif; ?>
</body>
</html>