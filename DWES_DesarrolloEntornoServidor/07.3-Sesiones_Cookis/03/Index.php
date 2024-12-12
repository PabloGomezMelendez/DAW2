<!-- @author @Pablo Gómez Meléndez  -->

<?php
session_start(); // Iniciar la sesión

// Inicializar la lista de números si no existe en la sesión
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
    $_SESSION['sumar'] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Sesiones 3</title>
</head>

<body>

    <h2>Introduce números positivos</h2>
    <p>Para finalizar y calcular la media, Se debe superar 10000  </p>

    <form method="post" action="">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" step="any" autofocus required>
        <button type="submit" name="enviar">Enviar</button>
    </form>
    <?php
    //Procesar datos
    if (isset($_REQUEST['enviar'])) {
        $numero =  $_REQUEST['numero'];
        $auxSuma = $_SESSION['sumar'] + $numero;
        if ($auxSuma < 10000){
            $_SESSION['contador']++;
            $_SESSION['sumar'] = $auxSuma;
        }else{
            echo "La suma ha superado superar los 10000 </br>";
            echo "El total acumulado es ".$_SESSION['sumar'].
            ", se han introducido un total de  ".$_SESSION['contador'].
            " números y la media es ".($_SESSION['sumar']/$_SESSION['contador']);
            $_SESSION = [];
        }
    }

    ?>



</body>

</html>