<!-- Diseñar un formulario web que pida la altura y el diámetro de un cilindro. Una vez el usuario introduzca los datos y 
 pulse el botón calcular, deberá calcularse el volumen del cilindro y mostrarse el resultado en el navegador. 
 Mostrar la imagen de un cilindro junto al resultado y un título "Calculo del volúmen de un cilindro", 
 intenta dar un aspecto agradable a la página de resultado. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo media precios</title>
</head>

<body>
    <H1>Precio medio de las tiendas</H1>
    <form action="Ejercicio4.php" method="$_POST">
        <label for="tienda1">El precio del producto en la tienda numero 1 :
            <input type="number" name="tienda1" step="any" max="2000"> €</label><br>
        <label for="tienda2">El precio del producto en la tienda numero 2 :
            <input type="number" name="tienda2" step="any" max="2000"> €</label><br>
        <label for="tienda3">El precio del producto en la tienda numero 3 :
            <input type="number" name="tienda3" step="any" max="2000"> €</label><br>
        <input type="submit" value="Calculo media precios">
    </form>
</body>

</html>