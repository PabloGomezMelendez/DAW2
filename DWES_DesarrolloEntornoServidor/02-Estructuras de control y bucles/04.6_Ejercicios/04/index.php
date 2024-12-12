<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Número de Bloque</th>
            <th>Piso</th>
            <th>Acción</th>
        </tr>
        <?php
        for ($bloque = 1; $bloque <= 10; $bloque++) {
            for ($piso = 1; $piso <= 7; $piso++) {
                echo "<tr>";
                echo "<td>$bloque</td>";
                echo "<td>$piso</td>";
                echo "<td><a href='php/04.php?bloque=$bloque&piso=$piso'>Llamar</a></td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>

</html>