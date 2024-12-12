<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    Introduce tu nombre:
    <form action="saluda.php" method="post">
        <input type="text" name="nombre"><br>
        <input type="submit" value="Enviar">
    </form>
    <a href="saluda.php?nombre=Pablo">Volver al formulario</a>
</body>

</html>