<!-- @author @Pablo Gómez Meléndez  -->

<?php
session_start(); // Iniciar la sesión
function sumaValoresArry($valores){
    $suma = 0;
    foreach ($valores as $valor) {
        $suma += $valor;
    }
    return $suma;
}
function valorMayor($valores){
    //busca el valores mayor
    $maximo = 0;
    foreach($valores as $valor){
        if($valor > $maximo){
            $maximo = $valor;
        }
    }
    return $maximo;
}

// Inicializar la lista de números si no existe en la sesión
if (!isset($_SESSION['numeros'])) {
    $_SESSION['numeros'] = [];
    $_SESSION['pares'] = [];
    $_SESSION['impares'] = [];
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
            // Agregar número positivo a la lista
            $_SESSION['numeros'][] = $numero;
            // Agregar número a la lista correspondiente (pares o impares)
            if ($numero % 2 == 0) {
                $_SESSION['pares'][] = $numero;
            } else {
                $_SESSION['impares'][] = $numero;
            }
        } else {
            //Calculo la media de las lista de pares e impares
            $media_pares = (float) (sumaValoresArry($_SESSION['pares']) / count($_SESSION['pares']));
            $media_impares = (float) (sumaValoresArry($_SESSION['impares']) / count($_SESSION['impares']));
            echo "<h2>Resultados</h2>";
            echo "<p>La lista de ".count($_SESSION['numeros'])." números introducidos es: " . implode(", ", $_SESSION['numeros']) . "</p>";
            echo "<p>La media de ".count($_SESSION['pares'])." los números pares es: $media_pares</p>";
            echo "<p>El valor mayor par  introducido es: " . valorMayor($_SESSION['pares']) . "</p>"; 
            echo "<p>La media de ".count($_SESSION['impares'])." los números impares es: $media_impares</p>";
            echo "<p>El valor mayor impar  introducido es: " . valorMayor($_SESSION['impares']) . "</p>"; 
            $_SESSION = []; // Resetear la sesión
        }
    }
    ?>



</body>

</html>