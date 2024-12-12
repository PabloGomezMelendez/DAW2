<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET['bloque']) && isset($_GET['piso'])) {
        $bloque = htmlspecialchars($_GET['bloque']);
        $piso = htmlspecialchars($_GET['piso']);
        echo "Usted ha llamado al piso $piso del bloque $bloque.";
    } else {
        echo "No se ha especificado un bloque o piso.";
    }
    ?>
</body>
</html>