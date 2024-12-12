<!-- PABLO GÓMEZ MELÉNDEZ -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <title>Ejercicio 1</title>
</head>
<!--// Diseñar una página que esté compuesta por una tabla de 10 filas por 10 columnas, 
    // y en cada celda habrá una imagen de un ojo cerrado. Cada vez que el usuario pulse un ojo, 
    // ser recargará la página con todos los ojos cerrados salvo los que se han ido pulsando que corresponderá a un ojo abierto. 
    // Conforme se vallan pulsando más ojos se irá completando la tabla de ojos abiertos. 
    // Si se pulsa en un ojo abierto se volverá a cerrar. Usar la función explode() para pasar arrays como cade
-->

<body>

    <table>
        <?php
        // Inicializar los ojos. Cada celda puede ser 0 (cerrado) o 1 (abierto)
        if (isset($_GET['ojos'])) {
            // Recuperar el estado de los ojos de la URL
            $ojos = explode(',', $_GET['ojos']);
        } else {
            // Iniciar todos los ojos cerrados (0)
            $ojos = array_fill(0, 100, 0); // 100 celdas
        }

        // Comprobar si se ha hecho clic en alguna celda
        if (isset($_GET['clic'])) {
            $clickedIndex = intval($_GET['clic']); // Índice del ojo que se ha pulsado
            // Alternar el estado del ojo (0 -> 1, 1 -> 0)
            $ojos[$clickedIndex] = $ojos[$clickedIndex] == 0 ? 1 : 0;
        }

        // Convertir el array en una cadena para pasarla por la URL
        $ojosString = implode(',', $ojos);
        ?>

        <table>
            <?php
            $posicion=0;
             for ($fila = 0; $fila < 10; $fila++): ?>
                <tr>
                    <?php for ($columna = 0; $columna < 10; $columna++):
                        // Seleccionar la imagen dependiendo del estado (cerrado o abierto)
                        $imagen = $ojos[$posicion] == 0 ?
                            'img/ojo_Cerrado.png'
                            : 'img/ojo_abierto.png';
                    ?>
                        <td>
                            <a href="?clic=<?= $posicion ?>&ojos=<?= $ojosString ?>">
                                <img src="<?= $imagen ?>" alt="Ojo">
                            </a>
                        </td>
                    <?php 
                    $posicion++;
                endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>

</body>

</html>