<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Apuestas Primitiva</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Generador de Apuestas para la Lotería Primitiva</h1>
<p>Rellena los números que quieras y deja en blanco los que desees generar aleatoriamente:</p>

<form method="post" action="">
    <label for="titulo">Título de la apuesta (opcional):</label><br>
    <input type="text" id="titulo" name="titulo" placeholder="Título de tu apuesta"><br><br>

    <label>Números (entre 1 y 49):</label><br>
    <?php for ($i = 1; $i <= 6; $i++): ?>
        <input type="number" name="numero<?php echo $i; ?>" min="1" max="49" placeholder="Número <?php echo $i; ?>">
    <?php endfor; ?>
    <br><br>

    <label for="serie">Número de serie (entre 1 y 999, opcional):</label><br>
    <input type="number" id="serie" name="serie" min="1" max="999" placeholder="Número de serie"><br><br>

    <button type="submit">Generar combinación</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los números seleccionados y el número de serie
    $numeros = [];
    for ($i = 1; $i <= 6; $i++) {
        $numero = isset($_POST["numero$i"]) ? intval($_POST["numero$i"]) : null;
        if ($numero >= 1 && $numero <= 49) {
            $numeros[] = $numero;
        }
    }

    // Obtener el número de serie
    $serie = isset($_POST['serie']) && !empty($_POST['serie']) ? intval($_POST['serie']) : null;

    // Título (si se proporciona)
    $titulo = isset($_POST['titulo']) && !empty($_POST['titulo']) ? htmlspecialchars($_POST['titulo']) : null;

    // Generar combinación
    $combinacion = combinacion($numeros, $serie);

    // Mostrar la combinación generada
    echo imprimeApuesta($combinacion, $titulo);
}

/**
 * Función que genera la combinación de lotería.
 * 
 * @param array $numeros Un array con los números que el usuario ya ha seleccionado.
 * @param int|null $serie El número de serie que el usuario ha seleccionado (opcional).
 * @return array Un array con la combinación completa y el número de serie.
 */
function combinacion($numeros, $serie = null) {
    // Llenar los números restantes de forma aleatoria
    $combinacion = $numeros;
    $faltantes = 6 - count($combinacion);
    
    while ($faltantes > 0) {
        $numeroAleatorio = rand(1, 49);
        if (!in_array($numeroAleatorio, $combinacion)) {
            $combinacion[] = $numeroAleatorio;
            $faltantes--;
        }
    }
    
    // Ordenar los números en orden ascendente
    sort($combinacion);
    
    // Generar el número de serie si no se ha proporcionado
    if ($serie === null) {
        $serie = rand(1, 999);
    }
    
    // Devolver la combinación con el número de serie
    return array_merge($combinacion, ['serie' => $serie]);
}

/**
 * Función que imprime la tabla con la apuesta generada.
 * 
 * @param array $combinacion Un array con los números y la serie generados.
 * @param string|null $titulo El título proporcionado por el usuario (opcional).
 * @return string Una cadena con el HTML de la tabla generada.
 */
function imprimeApuesta($combinacion, $titulo = null) {
    // Si no hay título, usar el texto por defecto
    if ($titulo === null) {
        $titulo = "Combinación generada para la Primitiva";
    }

    // Extraer la serie de la combinación
    $serie = $combinacion['serie'];
    unset($combinacion['serie']);

    // Crear el HTML de la tabla
    $html = "<table>";
    $html .= "<tr><th colspan='7'>{$titulo}</th></tr>";
    $html .= "<tr>";
    
    // Imprimir los números de la combinación
    foreach ($combinacion as $numero) {
        $html .= "<td>{$numero}</td>";
    }
    
    // Agregar la serie en la última celda
    $html .= "<td><strong>Serie: {$serie}</strong></td>";
    $html .= "</tr>";
    $html .= "</table>";

    return $html;
}
?>

</body>
</html>
