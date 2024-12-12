<!-- @author @Pablo Gómez Meléndez  -->
<?php
function escribirTresNumeros()
{
    // Obtener los datos del formulario
    $archivo = "tx/" . $_POST['nombre'] . ".txt";
    $numeros = $_POST['numero']; // Array de números

    // Abrir el archivo en modo de agregar (append)
    $manejador = fopen($archivo, "a");
    if ($manejador === false) {
        die("No se pudo abrir o crear el archivo.");
    }

    // Escribir cada número en una nueva línea
    foreach ($numeros as $numero) {
        fwrite($manejador, (int)($numero) . PHP_EOL);
    }

    // Cerrar el archivo
    fclose($manejador);

    echo "Los números se han añadido correctamente al archivo <strong>$archivo</strong>.<br>";
}
function obtenerSuma()
{
    $suma=0;
    // Obtener el archivo a leer
    $archivo = "tx/" . $_POST['archivo_ver'] . ".txt";

    // Verificar si el archivo existe
    if (file_exists($archivo)) {
        echo "<h3>Contenido del archivo <strong>$archivo</strong>:</h3>";
        $fp = fopen($archivo, "r");
        while (!feof($fp)) {
            $linea = fgets($fp);
            echo $linea . "<br />";
            $suma += (int)($linea);
        }
        fclose($fp);
        echo "La suma de los valores del archivo <strong>$archivo</strong> es :<h3> $suma</h3>";
    } else {
        echo "El archivo <strong>$archivo</strong> no existe.";
    }
}

if (isset($_REQUEST["addNumber"])) {
    escribirTresNumeros();
}
if (isset($_POST['SumarNumeros'])) {
    obtenerSuma();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichro</title>
</head>

<body>
    <h1>Gestión de Archivos</h1>

    <!-- Formulario para escribir en un archivo -->
    <h2>Escribir en un archivo</h2>
    <form action="" method="post">
        <label for="">Nuemro 1</label>
        <input type="number" name="numero[]" id=""><br>
        <label for="">Nuemro 2</label>
        <input type="number" name="numero[]" id=""><br>
        <label for="">Nuemro 3</label>
        <input type="number" name="numero[]" id=""><br>
        <label for="">Nombre del fichero</label>
        <input type="text" name="nombre" id=""><br>
        <input type="submit" value="Aceptar" name="addNumber">
    </form>
    <!-- Formulario para ver el contenido de un archivo -->
    <h2>Ver contenido de un archivo</h2>
    <form action="" method="post">
        <label for="archivo_ver">Nombre del archivo (sin extensión):</label>
        <input type="text" name="archivo_ver" required>
        <br>
        <input type="submit" value="Mostrar" name="ver_contenido">
    </form>
</body>

</html>