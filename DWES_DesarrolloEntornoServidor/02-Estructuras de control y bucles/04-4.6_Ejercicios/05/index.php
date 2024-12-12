<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tabla de Ojos</title>
    
</head>

<body>
    <table>
        <?php
        $openEyeRow = isset($_GET['row']) ? $_GET['row'] : -1;
        $openEyeCol = isset($_GET['col']) ? $_GET['col'] : -1;

        for ($row = 0; $row < 10; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 10; $col++) {
                $imgSrc = ($row == $openEyeRow && $col == $openEyeCol) ? 'img/ojo_abierto.png' : 'img/ojo_Cerrado.png';
                echo "<td><a href='?row=$row&col=$col'><img src='$imgSrc' alt='Ojo'></a></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>