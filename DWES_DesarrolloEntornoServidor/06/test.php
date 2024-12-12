<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'FuncionesMatematicas.php'; ?>

    <title>Document</title>
</head>

<body>
    <?php
    // Ejemplos de uso:
    echo "¿Es 121 capicúa? " . (esCapicua(121) ? "Sí" : "No") . "<br>";
    echo "El número volteado de 12345 es " . voltea(12345) . "<br>";
    echo "¿Es 7 primo? " . (esPrimo(7) ? "Sí" : "No") . "<br>";
    echo "El siguiente primo después de 10 es " . siguientePrimo(10) . "<br>";
    echo "2 elevado a 3 es " . potencia(2, 3) . "<br>";
    echo "El número 12345 tiene " . digitos(12345) . " dígitos<br>";
    echo "El dígito en la posición 2 de 12345 es " . digitoN(12345, 2) . "<br>";
    echo "La posición del dígito 3 en 12345 es " . posicionDeDigito(12345, 3) . "<br>";
    echo "Quitar 2 dígitos por detrás a 12345 es " . quitaPorDetras(12345, 2) . "<br>";
    echo "Quitar 2 dígitos por delante a 12345 es " . quitaPorDelante(12345, 2) . "<br>";
    echo "Pegar 6 por detrás a 1234 es " . pegaPorDetras(1234, 6) . "<br>";
    echo "Pegar 6 por delante a 1234 es " . pegaPorDelante(1234, 6) . "<br>";
    echo "El trozo del número 123456 entre posiciones 2 y 4 es " . trozoDeNumero(123456, 2, 4) . "<br>";
    echo "Juntar los números 123 y 456 es " . juntaNumeros(123, 456) . "<br>";

    ?>

</body>

</html>