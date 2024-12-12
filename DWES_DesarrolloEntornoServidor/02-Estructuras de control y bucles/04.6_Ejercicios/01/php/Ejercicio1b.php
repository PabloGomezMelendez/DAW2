<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    $texto = $_REQUEST['valor'];
    $texto = trim($texto);
    $texto = strtolower($texto);

    if ("deadpool" == $texto) {
    ?>
    <h1>El texto introducido es "Deadpool"</h1>
    <img id="correcto" src="../img/deadpool.jpeg" alt="">
    <?php
    } else {
        echo "<h1>El texto introducido no es \"Deadpool\"</h1>";
    }
    ?>
    <a id="volver" href="../index.php">Volver</a>
</body>

</html>