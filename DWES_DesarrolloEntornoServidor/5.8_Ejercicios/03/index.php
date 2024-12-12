<?php
// Parámetros del juego
$max_intentos = 20; // Límite de intentos
$nombre_correcto = "deadpool"; // Nombre correcto de la imagen a adivinar

// Recuperar la situación actual del juego (intentos y celdas visibles)
if (isset($_REQUEST['estado'])) {
    $estado = unserialize(base64_decode($_REQUEST['estado']));
} else {
    // Inicializar el array: 0 significa celda oculta, 1 significa celda visible
    $estado = array_fill(0, 100, 0);
}

// Recuperar el número de intentos actuales
$intentos = isset($_REQUEST['intentos']) ? intval($_REQUEST['intentos']) : 0;

// Comprobar si se ha hecho clic en alguna celda
if (isset($_REQUEST['toggle']) && $intentos < $max_intentos) {
    $indice = intval($_REQUEST['toggle']);
    if ($estado[$indice] == 0) {
        $estado[$indice] = 1; // Hacer visible la celda
        $intentos++; // Incrementar el número de intentos
    }
}

// Serializar el estado actual para pasarlo en la URL
$estado_serializado = base64_encode(serialize($estado));

// Comprobar si se ha adivinado correctamente
$mensaje = '';
if (isset($_REQUEST['adivinar'])) {
    $respuesta = trim($_REQUEST['respuesta']);
    if ($respuesta === $nombre_correcto) {
        $mensaje = "¡Felicidades, has adivinado la imagen correctamente!";
    } elseif ($intentos >= $max_intentos) {
        $mensaje = "¡Has perdido! La imagen era '$nombre_correcto'.";
        // Mostrar la imagen completa al final del juego
        $estado = array_fill(0, 100, 1); // Mostrar toda la imagen
    } else {
        $mensaje = "¡Inténtalo de nuevo! La imagen no es correcta.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina la Imagen Oculta</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Adivina la Imagen</h1>
    <p>Intentos restantes: <?= $max_intentos - $intentos ?></p>

    <!-- Tabla del juego -->
    <table>
        <?php for ($fila = 0; $fila < 10; $fila++): ?>
            <tr>
                <?php for ($col = 0; $col < 10; $col++): 
                    $index = $fila * 10 + $col;
                    $clase = $estado[$index] == 0 ? 'oculto' : 'visible';
                    ?>
                    <td class="<?= $clase ?>" style="background-position: -<?= $col * 50 ?>px -<?= $fila * 50 ?>px;">
                        <a href="?toggle=<?= $index ?>&estado=<?= $estado_serializado ?>&intentos=<?= $intentos ?>" style="display: block; width: 100%; height: 100%;"></a>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    <!-- Formulario para adivinar la imagen -->
    <form method="post" action="">
        <label for="respuesta">¿Cuál es la imagen?</label>
        <input type="text" name="respuesta" id="respuesta" autocomplete="off">
        <input type="submit" name="adivinar" value="Enviar">
    </form>

    <!-- Mensaje de victoria o derrota -->
    <?php if ($mensaje): ?>
        <p><strong><?= $mensaje ?></strong></p>
        <?php if ($intentos >= $max_intentos || $mensaje === "¡Felicidades, has adivinado la imagen correctamente!"): ?>
            <p><img src="img/deadpool.jpeg" alt="Imagen completa"></p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
