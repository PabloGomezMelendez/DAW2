<!-- @Author Pablo Gómez Meléndez -->
<?php
session_start();

// Definir el archivo donde se almacenan los registros de las mascotas
$archivo_mascotas = "../01/tx/mascotas.txt";

// Inicializar el array de sesión para las mascotas de la fecha seleccionada
if (!isset($_SESSION['mascotas_fecha'])) {
    $_SESSION['mascotas_fecha'] = [];
}

// Función para obtener las fechas disponibles en el archivo
function obtenerFechasDisponibles($archivo) {
    $fechas = [];
    $contenido = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); // Leer el archivo en líneas
    foreach ($contenido as $linea) {
        // Si la línea es una fecha (empieza con # y termina con #)
        $linea = trim($linea); // Eliminar espacios
        if (preg_match('/^#\d{2}-\d{2}-\d{4}#$/', $linea)) {
            $fechas[] = trim($linea, '#');
        }
    }
    return $fechas;
}

// Función para cargar las mascotas de una fecha seleccionada
function cargarMascotasPorFecha($fecha, $archivo) {
    $mascotas = [];
    $contenido = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); // Leer el archivo en líneas
    $fechaEncontrada = false;

    foreach ($contenido as $linea) {
        $linea = trim($linea); // Eliminar espacios antes y después de la línea

        if (preg_match('/^#\d{2}-\d{2}-\d{4}#$/', $linea)) {
            // Comprobar si la línea es una fecha
            if ($linea == "#$fecha#") {
                $fechaEncontrada = true; // Se encontró la fecha seleccionada
            } else {
                $fechaEncontrada = false; // Salir si encontramos otra fecha
            }
        }

        // Si la fecha está activa, guardar las mascotas correspondientes
        if ($fechaEncontrada && !preg_match('/^#/', $linea)) {
            list($nombre, $tipo, $edad) = explode('-', $linea);
            $mascotas[] = [
                'nombre' => $nombre,
                'tipo' => $tipo,
                'edad' => $edad
            ];
        }
    }
    return $mascotas;
}

// Si se ha seleccionado una fecha, cargar las mascotas correspondientes a esa fecha
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_REQUEST['fecha'])) {
    $fechaSeleccionada = $_REQUEST['fecha'];
    $_SESSION['mascotas_fecha'] = cargarMascotasPorFecha($fechaSeleccionada, $archivo_mascotas);
}

$fechasDisponibles = obtenerFechasDisponibles($archivo_mascotas);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Mascotas - Selección de Fecha</title>
</head>
<body>
    <h1>Selecciona una Fecha para Ver las Mascotas Registradas</h1>

    <!-- Formulario para seleccionar la fecha -->
    <form method="POST">
        <label for="fecha">Selecciona una Fecha:</label>
        <select name="fecha" id="fecha">
            <?php foreach ($fechasDisponibles as $fecha): ?>
                <option value="<?php echo htmlspecialchars($fecha); ?>" <?php if (isset($fechaSeleccionada) && $fechaSeleccionada == $fecha) echo 'selected'; ?>>
                    <?php echo htmlspecialchars($fecha); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Mostrar Mascotas</button>
    </form>

    <h2>Mascotas Registradas en la Fecha: <?php echo isset($fechaSeleccionada) ? htmlspecialchars($fechaSeleccionada) : 'Seleccione una fecha'; ?></h2>

    <!-- Mostrar las mascotas en una tabla -->
    <?php if (isset($_SESSION['mascotas_fecha']) && count($_SESSION['mascotas_fecha']) > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Edad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['mascotas_fecha'] as $mascota): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($mascota['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($mascota['tipo']); ?></td>
                        <td><?php echo htmlspecialchars($mascota['edad']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay mascotas registradas para esta fecha.</p>
    <?php endif; ?>

</body>
</html>
