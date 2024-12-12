<?php
// Inicializar el array de personas si no existe
$personas = [
    ['nombre' => 'Anita', 'sexo' => 'm', 'orientacion' => 'bis'],
    ['nombre' => 'Lolita', 'sexo' => 'm', 'orientacion' => 'bis'],
    ['nombre' => 'Pepito', 'sexo' => 'h', 'orientacion' => 'bis'],
    ['nombre' => 'Juanito', 'sexo' => 'h', 'orientacion' => 'bis'],
    ['nombre' => 'Roberto', 'sexo' => 'h', 'orientacion' => 'het'],
    ['nombre' => 'Antonio', 'sexo' => 'h', 'orientacion' => 'het'],
    ['nombre' => 'Manuela', 'sexo' => 'm', 'orientacion' => 'het'],
    ['nombre' => 'Isabel', 'sexo' => 'm', 'orientacion' => 'het'],
    ['nombre' => 'Jenifer', 'sexo' => 'm', 'orientacion' => 'hom'],
    ['nombre' => 'Susan', 'sexo' => 'm', 'orientacion' => 'hom'],
    ['nombre' => 'Peter', 'sexo' => 'h', 'orientacion' => 'hom'],
    ['nombre' => 'Mike', 'sexo' => 'h', 'orientacion' => 'hom']
];

if (isset($_REQUEST['personas_serializadas'])) {
    // Recuperar el array de personas serializado del formulario
    $personas = unserialize(base64_decode($_REQUEST['personas_serializadas']));
}

// Añadir nueva persona al array si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_REQUEST['nombre'])) {
    $nombre = $_REQUEST['nombre'];
    $sexo = $_REQUEST['sexo'];
    $orientacion = $_REQUEST['orientacion'];

    // Añadir persona al array
    $personas[] = [
        'nombre' => $nombre,
        'sexo' => $sexo,
        'orientacion' => $orientacion
    ];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Personas</title>
</head>

<body>
    <h1>Agregar Personas al Grupo</h1>

    <!-- Formulario para agregar personas -->
    <form method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="h">Hombre</option>
            <option value="m">Mujer</option>
        </select>

        <label for="orientacion">Orientación:</label>
        <select id="orientacion" name="orientacion" required>
            <option value="het">Heterosexual</option>
            <option value="hom">Homosexual</option>
            <option value="bis">Bisexual</option>
        </select>

        <!-- Guardar personas serializadas en un campo oculto -->
        <input type="hidden" name="personas_serializadas" value="<?= base64_encode(serialize($personas)) ?>">

        <button type="submit">Agregar Persona</button>
    </form>

    <!-- Mostrar lista de personas ya agregadas -->
    <h2>Personas agregadas:</h2>
    <ul>
        <?php foreach ($personas as $persona): ?>
            <li><?= $persona['nombre'] ?> (<?= $persona['sexo'] ?>, <?= $persona['orientacion'] ?>)</li>
        <?php endforeach; ?>
    </ul>

    <!-- Botón para pasar a la segunda página -->
    <?php if (!empty($personas)): ?>
        <form method="POST" action="php/generar_parejas.php">
            <!-- Pasar el array de personas serializado a la siguiente página -->
            <input type="hidden" name="personas_serializadas" value="<?= base64_encode(serialize($personas)) ?>">
            <button type="submit">Generar Parejas</button>
        </form>
    <?php endif; ?>
</body>

</html>