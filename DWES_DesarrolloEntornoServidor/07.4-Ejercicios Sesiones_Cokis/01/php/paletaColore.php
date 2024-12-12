<!-- @author @Pablo Gómez Meléndez  -->
<?php
session_start();
if (isset($_REQUEST['Paleta'])) {
    $colorFondo = $_REQUEST['colorFondo'];
}
if (isset($_REQUEST['color'])) {
    $colorFondo = $_REQUEST['color'];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paleta Colores </title>
</head>

<body style="background-color: rgb( <?php echo $colorFondo; ?>)">

    <h2>Paleta de Colores Generados</h2>
    <table>
        <?php
        // Generarmos paleta colores
        $contador = 0;
        //recorreremos la session colores y pintaremos la tabla con los colores generados en la sesion
        foreach ($_SESSION['colores'] as $color) {
            $contador++;
            if ($contador % 5 == 1) {
                echo "<tr>";
            }
            echo "<td style='background-color: rgb( $color); width: 40px; height: 40px; border: 2px solid black;'>";
            echo "<a href='paletaColore.php?color=$color' style='display: block; width: 100%; height: 100%; text-decoration: none;'>&nbsp;</a>";
            echo "</td>";
            if ($contador % 5 == 0) {
                echo "</tr>";
            }
        }
        ?>
    </table>




</body>

</html>