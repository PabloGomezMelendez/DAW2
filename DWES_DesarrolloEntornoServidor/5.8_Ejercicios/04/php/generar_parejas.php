<?php
// Recuperar el array de personas desde el formulario
$personas = [];
if (isset($_REQUEST['personas_serializadas'])) {
    $personas = unserialize(base64_decode($_REQUEST['personas_serializadas']));
}

// Función para obtener personas según criterio
function obtener_persona($personas, $criterio) {
    $posibles = array_filter($personas, $criterio);
    if (!empty($posibles)) {
        return $posibles[array_rand($posibles)];
    }
    return null;
}

// Generar parejas basadas en el tipo
$mensaje_pareja = '';

if (isset($_REQUEST['tipo_pareja'])) {
    $tipo = $_REQUEST['tipo_pareja'];

    switch ($tipo) {
        case 'heterosexual':
            // Seleccionar una persona heterosexual de cualquier sexo
            $persona1 = obtener_persona($personas, function($p) {
                return $p['orientacion'] == 'het';
            });

            if ($persona1) {
                // Seleccionar otra persona de distinto sexo que sea heterosexual o bisexual
                $persona2 = obtener_persona($personas, function($p) use ($persona1) {
                    return $p['sexo'] != $persona1['sexo'] && ($p['orientacion'] == 'het' || $p['orientacion'] == 'bis');
                });
            }

            break;

        case 'homosexual':
            // Seleccionar una persona homosexual de cualquier sexo
            $persona1 = obtener_persona($personas, function($p) {
                return $p['orientacion'] == 'hom';
            });

            if ($persona1) {
                // Seleccionar otra persona del mismo sexo y orientación homosexual
                $persona2 = obtener_persona($personas, function($p) use ($persona1) {
                    return $p['sexo'] == $persona1['sexo'] && $p['orientacion'] == 'hom';
                });
            }

            break;

        case 'bisexual':
            // Seleccionar una persona bisexual
            $persona1 = obtener_persona($personas, function($p) {
                return $p['orientacion'] == 'bis';
            });

            if ($persona1) {
                // Seleccionar una persona compatible
                $persona2 = obtener_persona($personas, function($p) use ($persona1) {
                    // Persona compatible: No homosexual de sexo distinto ni heterosexual del mismo sexo
                    return !($p['sexo'] != $persona1['sexo'] && $p['orientacion'] == 'hom') && !($p['sexo'] == $persona1['sexo'] && $p['orientacion'] == 'het');
                });
            }

            break;
    }

    // Verificar si se ha encontrado una pareja válida
    if (isset($persona1) && isset($persona2)) {
        $mensaje_pareja = "Pareja formada: " . $persona1['nombre'] . " y " . $persona2['nombre'];
    } else {
        $mensaje_pareja = "No se ha encontrado una pareja válida.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Parejas</title>
</head>
<body>
    <h1>Generar Parejas Aleatorias</h1>

    <!-- Botones para generar diferentes tipos de parejas -->
    <form method="POST">
        <input type="hidden" name="personas_serializadas" value="<?= base64_encode(serialize($personas)) ?>">
        
        <button type="submit" name="tipo_pareja" value="heterosexual">Pareja Heterosexual</button>
        <button type="submit" name="tipo_pareja" value="homosexual">Pareja Homosexual</button>
        <button type="submit" name="tipo_pareja" value="bisexual">Pareja Bisexual</button>
    </form>

    <!-- Mostrar el resultado de la pareja generada -->
    <?php if ($mensaje_pareja): ?>
        <p><strong><?= $mensaje_pareja ?></strong></p>
    <?php endif; ?>

    <!-- Botón para volver a agregar más personas -->
    <form method="POST" action="agregar_personas.php">
        <input type="hidden" name="personas_serializadas" value="<?= base64_encode(serialize($personas)) ?>">
        <button type="submit">Volver a agregar personas</button>
    </form>
</body>
</html>
