<!-- @author @Pablo Gómez Meléndez  -->

<?php
session_start(); // Iniciar la sesión
// Inicializar la lista de números si no existe en la sesión
if (!isset($_SESSION['numeros'])) {
    $_SESSION['numeros'] = 0;
    $_SESSION['pares'] = 0;
    $_SESSION['mayorPar'] = 0;
    $_SESSION['impares'] = 0;
    $_SESSION['mayorImpar'] = 0;

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Sesiones 2</title>
</head>

<body>

    <h2>Introduce números positivos</h2>
    <p>Para finalizar y calcular la media, introduce un número negativo.</p>

    <form method="post" action="">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" step="any" autofocus required>
        <button type="submit" name="enviar">Enviar</button>
    </form>
    <?php
    //Procesar datos
    if (isset($_REQUEST['enviar'])) {
        $numero =  $_REQUEST['numero'];
        if ($numero >= 0) {
            // Conatador de números totales
            $_SESSION['numeros']++;
            // Agregar número a la lista correspondiente (pares o impares)
            if ($numero % 2 == 0) {
                $_SESSION['pares'] += $numero;
                //comprobamos es mayor al ya guardado
                if ($numero > $_SESSION['mayorPar']) {
                    $_SESSION['mayorPar'] = $numero;
                }
            } else {
                $_SESSION['impares'] += $numero;
                //comprobamos es mayor al ya guardado
                if ($numero > $_SESSION['mayorImpar']) {
                    $_SESSION['mayorImpar'] = $numero;
                }
            }
        } else {
            //Calculo la media de las lista de pares e impares
            $media_pares = (float) ($_SESSION['pares'] / $_SESSION['numeros']);
            $media_impares = (float) ($_SESSION['impares'] / $_SESSION['numeros']);

            echo "<h2>Resultados</h2>";
            echo "<p>La media de los números pares es: $media_pares</p>";
            echo "<p>El valor mayor par  introducido es: " . $_SESSION['mayorPar'] . "</p>"; 
            echo "<p>La media de  los números impares es: $media_impares</p>";
            echo "<p>El valor mayor impar  introducido es: " . $_SESSION['mayorImpar'] . "</p>"; 
            $_SESSION = []; // Resetear la sesión
        }
    }
    ?>



</body>

</html>