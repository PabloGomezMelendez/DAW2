<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración CSS</title>
</head>

<body>
    <h1>Estilos CSS aplicados</h1>
    <?php
    $font = $_REQUEST['fuente'];
    $color = $_REQUEST['color'];
    $alintex = $_REQUEST['alintex'];
    $imagen = $_REQUEST['imagen'];
    ?>
    <style>
        body {
            background-color: <?php echo $color;?>;
            text-align: <?php echo $alintex;?>;
            font-family:  <?php echo $font;?>;
        }
    </style>
    <img src="img/<?php echo $imagen;?>" alt="Imagen" width="200" height="200">


</body>

</html>