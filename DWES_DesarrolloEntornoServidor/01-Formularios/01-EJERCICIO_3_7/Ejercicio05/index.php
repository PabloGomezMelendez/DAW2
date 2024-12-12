<!-- Diseñar un formulario web que pida la altura y el diámetro de un cilindro. Una vez el usuario introduzca los datos y 
 pulse el botón calcular, deberá calcularse el volumen del cilindro y mostrarse el resultado en el navegador. 
 Mostrar la imagen de un cilindro junto al resultado y un título "Calculo del volúmen de un cilindro", 
 intenta dar un aspecto agradable a la página de resultado. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula tiempo de llenado</title>
</head>

<body>
    <H1>Calcula tiempo de llenado</H1>
    <form action="Ejercicio5.php" method="$_POST">
        Introduce la altura del cilindro en cm: 
        <input type="number" name="altura" id=""><br>
        Introduce el diámetro del cilindro en cm: 
        <input type="number" name="diametro" id=""><br>
        Introduce el caudal del flujo en L/min: 
        <input type="number" name="caudal" id=""><br>
        <input type="submit" value="Calcula tiempo">
    </form>
</body>

</html>