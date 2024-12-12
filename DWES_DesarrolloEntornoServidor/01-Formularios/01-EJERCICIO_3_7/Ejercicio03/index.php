<!-- Diseñar un formulario web que pida la altura y el diámetro de un cilindro. Una vez el usuario introduzca los datos y 
 pulse el botón calcular, deberá calcularse el volumen del cilindro y mostrarse el resultado en el navegador. 
 Mostrar la imagen de un cilindro junto al resultado y un título "Calculo del volúmen de un cilindro", 
 intenta dar un aspecto agradable a la página de resultado. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración CSS</title>
</head>

<body>
    <H1>Configura CSS</H1>
    <form action="Ejercicio3.php" method="$_POST">
        <label for="configuracion1">dato a configurar: Funete del texto</label>
        <select name="fuente">
            <option value="Arial">Arial</option>
            <option value="Roboto">Roboto</option>
            <option value="Open Sans">Open Sans</option>
        </select>
        <label for="configuracion2">dato a configurar: Color de fondo</label>
        <input type="color" name="color"><br>
        <label for="configuracion3">dato a configurar: Alineacion del texto</label>
        <select name="alintex">
            <option value="right">derecha</option>
            <option value="center">centro</option>
            <option value="left">izquierda</option>
        </select>
        <br>
        <label for="configuracion3">dato a configurar: Imagen</label>
        <section>
            <div>
                <img src="img/categoria1.jpg" alt="imagen1">
                <input type="radio" name="imagen" value="categoria1.jpg">
            </div>
            <div>
                <img src="img/categoria2.jpg" alt="imagen2">
                <input type="radio" name="imagen" value="categoria2.jpg"id="">
            </div>
            <div>
                <img src="img/categoria3.jpg" alt="imagen3">
                <input type="radio" name="imagen" value="categoria3.jpg" id="">
            </div>
        </section>

        <input type="submit" value="Enviar configuración CSS">
    </form>
</body>

</html>