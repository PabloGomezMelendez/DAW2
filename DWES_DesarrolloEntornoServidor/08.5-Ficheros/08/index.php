<!-- @author Pablo Gómez Meléndez -->


<?php


session_start();

$archivo = "tx/temp.txt"; // Nombre del archivo a crear/escribir

// Si el botón "Agregar línea" fue pulsado
if (isset($_POST['agregar_linea'])) {
    agregar_linea($archivo);
}

// Si el botón "Terminar" fue pulsado
if (isset($_POST['terminar'])) {
    agregar_linea($archivo);
    if (file_exists($archivo)) {
        echo "<h3>Contenido completo del archivo:</h3>";
        echo "<pre>" . htmlentities(file_get_contents($archivo)) . "</pre>";
    } else {
        echo "El archivo aún no tiene contenido.";
    }

    // Limpiar la sesión y detener nuevas líneas
    session_destroy();
    exit; // Detener ejecución adicional
}
function agregar_linea($archivo)
{
    $linea = $_POST['linea'];

    // Abrir el archivo en modo de agregar (append) y escribir la línea
    $manejador = fopen($archivo, "a");
    if ($manejador === false) {
        die("No se pudo abrir o crear el archivo.");
    }
    fwrite($manejador, $linea . PHP_EOL);
    fclose($manejador);

    echo "Línea añadida correctamente.<br>";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
    <h1>Generador de Archivo de Texto</h1>
    <p>Escribe líneas para añadir al archivo. Pulsa "Terminar" para finalizar y mostrar el contenido completo.</p>

    <!-- Formulario -->
    <form method="post">
        <label for="linea">Escribir línea:</label>
        <input type="text" name="linea" id="linea" required>
        <br><br>
        <button type="submit" name="agregar_linea">Agregar línea</button>
        <button type="submit" name="terminar">Terminar</button>
    </form>
</body>

</html>