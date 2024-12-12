<!-- @author Pablo Gómez Meléndez -->

<?php
if (isset($_REQUEST['mezcla'])) {
    // Obtener los nombres de los ficheros del formulario
    $fichero1 = "tx/".$_REQUEST['fichero1']."txt";
    $fichero2 = "tx/".$_REQUEST['fichero2']."txt";
    $fichero_destino = "tx/ficheroDestino.txt";

    // Verificar que los archivos fuente existen
    if (!file_exists($fichero1) || !file_exists($fichero2)) {
        die("Uno o ambos ficheros de origen no existen.");
    }

    // Leer las líneas de los dos ficheros
    $lineas1 = file($fichero1, FILE_IGNORE_NEW_LINES);
    $lineas2 = file($fichero2, FILE_IGNORE_NEW_LINES);

    // Mezclar las líneas alternando entre ambos
    $mezcladas = [];
    $max_lineas = max(count($lineas1), count($lineas2));

    for ($i = 0; $i < $max_lineas; $i++) {
        if (isset($lineas1[$i])) {
            $mezcladas[] = $lineas1[$i];
        }
        if (isset($lineas2[$i])) {
            $mezcladas[] = $lineas2[$i];
        }
    }

    // Guardar las líneas mezcladas en el archivo destino
    file_put_contents($fichero_destino, implode(PHP_EOL, $mezcladas));

    echo "Fichero mezclado creado correctamente: <strong>$fichero_destino</strong><br>";
    echo "<pre>" . file_get_contents($fichero_destino) . "</pre>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mezclar Ficheros</title>
</head>
<body>
    <h1>Mezclar Ficheros</h1>
    <p>Introduce los nombres de los dos ficheros origen y el nombre del fichero destino.</p>
    <form method="post">
        <label for="fichero1">Fichero 1:</label>
        <input type="text" name="fichero1" id="fichero1" required>
        <br>
        <label for="fichero2">Fichero 2:</label>
        <input type="text" name="fichero2" id="fichero2" required>
        <br>
        <button type="submit" name="mezcla">Mezclar y Guardar</button>
    </form>
</body>
</html>
