<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validación de Fecha y Formato</title>
</head>
<body>

<h1>Introduce una fecha</h1>

<?php
// Variables para mensaje de error y fecha formateada
$error = '';
$fechaFormateada = '';

// Procesamiento del formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dia =$_REQUEST['dia'];
    $mes = $_REQUEST['mes'];
    $anio = $_REQUEST['anio'];
    $formato = $_REQUEST['formato'];

    // Validación básica de los campos
    if (!ctype_digit($dia) || !ctype_digit($mes) || !ctype_digit($anio)) {
        $error = "Por favor, introduce solo números en los campos de fecha.";
    } elseif (!checkdate($mes, $dia, $anio)) {
        $error = "La fecha ingresada no es válida.";
    } else {
        // Si la fecha es válida, la mostramos en el formato seleccionado
        $timestamp = mktime(0, 0, 0, $mes, $dia, $anio);
        switch ($formato) {
            case 'd-m-Y':
                $fechaFormateada = date('d-m-Y', $timestamp);
                break;
            case 'm/d/Y':
                $fechaFormateada = date('m/d/Y', $timestamp);
                break;
            case 'Y.m.d':
                $fechaFormateada = date('Y.m.d', $timestamp);
                break;
            case 'd de F de Y':
                $fechaFormateada = date('d \d\e F \d\e Y', $timestamp);
                break;
            case 'D, d M Y':
                $fechaFormateada = date('D, d M Y', $timestamp);
                break;
            case 'l, jS F Y':
                $fechaFormateada = date('l, jS F Y', $timestamp);
                break;
            case 'Y-M-d H:i:s':
                $fechaFormateada = date('Y-M-d H:i:s', $timestamp);
                break;
            default:
                $fechaFormateada = date('d-m-Y', $timestamp);
        }
    }
}
?>

<form method="POST" action="">
    <label for="dia">Día:</label>
    <input type="text" name="dia" id="dia" value="<?php echo isset($_REQUEST['dia']) ? htmlspecialchars($_REQUEST['dia']) : ''; ?>"><br>

    <label for="mes">Mes:</label>
    <input type="text" name="mes" id="mes" value="<?php echo isset($_REQUEST['mes']) ? htmlspecialchars($_REQUEST['mes']) : ''; ?>"><br>

    <label for="anio">Año:</label>
    <input type="text" name="anio" id="anio" value="<?php echo isset($_REQUEST['anio']) ? htmlspecialchars($_REQUEST['anio']) : ''; ?>"><br>

    <label for="formato">Formato de fecha:</label>
    <select name="formato" id="formato">
        <option value="d-m-Y">dd-mm-yyyy</option>
        <option value="m/d/Y">mm/dd/yyyy</option>
        <option value="Y.m.d">yyyy.mm.dd</option>
        <option value="d de F de Y">dd de Mes de yyyy</option>
        <option value="D, d M Y">Día corto, dd Mes abreviado yyyy</option>
        <option value="l, jS F Y">Día completo, día con sufijo Mes yyyy</option>
        <option value="Y-M-d H:i:s">yyyy-Mes abreviado-dd hh:mm:ss</option>
    </select><br><br>

    <button type="submit">Validar Fecha</button>
</form>

<?php if ($error): ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php elseif ($fechaFormateada): ?>
    <p>Fecha en formato seleccionado: <strong><?php echo $fechaFormateada; ?></strong></p>
<?php endif; ?>

</body>
</html>
