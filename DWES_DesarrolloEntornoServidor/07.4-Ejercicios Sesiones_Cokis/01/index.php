<!-- @author @Pablo Gómez Meléndez  -->
<?php
session_start();

// crea la sesion COLORES
if (!isset($_SESSION['colores'])) {
    $_SESSION['colores'] = [];
}
$colorFondo = "#FFFFFF";
// Eliminar los colores de la sesión y reiniciar la paleta si se presiona "Reiniciar"
if (isset($_REQUEST['Generar'])) {
    $colorFondo = rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255);
    $_SESSION['colores'][] = $colorFondo;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Colores </title>
</head>

<body style="background-color: rgb( <?php echo $colorFondo; ?>)">

    <h2>Paleta de Colores Generados</h2>

    <form method="get" action="index.php">
        <input type="submit" name="Generar" value="Generar colores"></input>
    </form>

    <form method="post" action="php/paletaColore.php">
        <input type="hidden" name="colorFondo" value="<?php echo $colorFondo; ?>" />
        <input type="submit" name="Paleta" value="Paleta de colores"></input>
    </form>

</body>

</html>