<!-- @Author Pablo Gómez Meléndez -->
<?php
session_start();

// Definir el archivo donde se almacenarán los registros de las mascotas
$archivo_mascotas = "tx/mascotas.txt";

// Verificar si el archivo existe, si no, crearlo
if (!file_exists($archivo_mascotas)) {
    touch($archivo_mascotas);
}

// Inicializar el array de sesión si no existe
if (!isset($_SESSION['mascotas'])) {
    $_SESSION['mascotas'] = [];
}

// Procesar el formulario de agregar mascota
if (isset($_REQUEST['agregar_mascota'])) {
    $nombre = $_REQUEST['nombre'];
    $tipo = $_REQUEST['tipo'];
    $edad = $_REQUEST['edad'];

    // Añadir la mascota al array de sesión
    $_SESSION['mascotas'][$nombre] = ['tipo' => $tipo, 'edad' => $edad];
}

// Guardar las mascotas en el archivo
if (isset($_REQUEST['grabar_mascotas'])) {
    $fecha_actual = date("d-m-Y");
    $contenido_fichero = file_get_contents($archivo_mascotas);
    
    // Verificar si ya existe una entrada para la fecha actual
    if (strpos($contenido_fichero, "#$fecha_actual#") === false) {
        // Si no existe, añadir la cabecera con la fecha actual
        file_put_contents($archivo_mascotas, "#$fecha_actual#\n", FILE_APPEND);
    }
    
    // Añadir las mascotas de la sesión al archivo
    foreach ($_SESSION['mascotas'] as $nombre => $datos) {
        $linea = "$nombre-{$datos['tipo']}-{$datos['edad']}\n";
        file_put_contents($archivo_mascotas, $linea, FILE_APPEND);
    }

    // Limpiar la tabla de mascotas de la sesión
    $_SESSION['mascotas'] = [];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Mascotas</title>
</head>
<body>
    <h1>Registro de Mascotas en la Clínica Veterinaria</h1>
    
    <!-- Formulario para agregar una nueva mascota -->
    <form method="POST">
        <label for="nombre">Nombre de la mascota:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>
        
        <label for="tipo">Tipo de animal:</label>
        <input type="text" name="tipo" id="tipo" required><br><br>
        
        <label for="edad">Edad de la mascota:</label>
        <input type="number" name="edad" id="edad" required><br><br>
        
        <button type="submit" name="agregar_mascota">Añadir Mascota</button>
    </form>

    <h2>Mascotas Añadidas Hoy:</h2>
    <!-- Tabla para mostrar las mascotas añadidas -->
    <?php if (count($_SESSION['mascotas']) > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Edad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['mascotas'] as $nombre => $datos): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($nombre); ?></td>
                        <td><?php echo htmlspecialchars($datos['tipo']); ?></td>
                        <td><?php echo htmlspecialchars($datos['edad']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay mascotas añadidas aún.</p>
    <?php endif; ?>

    <br>
    
    <!-- Botón para grabar las mascotas en el archivo -->
    <form method="POST">
        <button type="submit" name="grabar_mascotas">Grabar Mascotas</button>
    </form>

</body>
</html>
