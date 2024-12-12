<!-- @author @Pablo Gómez Meléndez  -->

<!DOCTYPE html>
<html lang="en">
<?php
session_start(); // Iniciar la sesión

// Inicializar la lista de números si no existe en la sesión
if (!isset($_SESSION['numeros'])) {
    $_SESSION['numeros'] = [];
    $_SESSION['suma'] = 0;
    $_SESSION['media'] = (float)0;
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Sesiones 1</title>
</head>

<body>

    <h2>Introduce números positivos</h2>
    <p>Para finalizar y calcular la media, introduce un número negativo.</p>

    <form method="post" action="">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" step="any" required>
        <button type="submit" name="enviar">Enviar</button>
    </form>
    <?php
    //Procesar datos
    if (isset($_REQUEST['enviar'])) {
        $numero =  $_REQUEST['numero'];
        // Agregar número positivo a la lista
        $_SESSION['numeros'][] = $numero;

        // Calcular la media y resetear la sesión al ingresar un número negativo
        if (count($_SESSION['numeros']) > 0) {
            $_SESSION['suma'] = $_SESSION['suma'] + $numero;
            $_SESSION['media'] = $_SESSION['suma'] / count($_SESSION['numeros']);
            echo "media " . $_SESSION['media'];
        } else {
            echo "<p>No se introdujeron números positivos.</p>";
        }
    }

    if (empty($_SESSION['media'])) {
        echo "<p>No se ha calculado la media aún.</p>";
    } else {
        echo "<p>La media de los números introducidos es: " . $_SESSION['media'] . "</p>";
        //los números introducidos
        echo "<p>Los números introducidos son: ";
        foreach ($_SESSION['numeros'] as $numero) {
            echo $numero . " ";
        }
    }

    ?>



</body>

</html>