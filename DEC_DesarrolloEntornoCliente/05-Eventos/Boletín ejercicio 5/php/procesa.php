<?php
// Capturar los datos del formulario
$nombre = isset($_POST['nombre']) ?? 'N/A';
$sexo = isset($_POST['sexo']) ?? 'N/A';
$altura = isset($_POST['altura']) ?? 'N/A';
$fechaNacimiento = isset($_POST['fechaNacimiento']) ?? 'N/A';
$semanaPreferente = isset($_POST['semanaPreferente']) ?? 'No especificada';
$fumador = isset($_POST['fumador']) ? 'Sí' : 'No';
$cigarrillos = isset($_POST['cigarrillos']) ?? 'N/A';
$observaciones = isset($_POST['observaciones']) ?? 'Sin observaciones';

// Calcular edad
$edad = 'Desconocida';
if ($fechaNacimiento !== 'N/A') {
  $fechaNacimientoObj = new DateTime($fechaNacimiento);
  $hoy = new DateTime();
  $edad = $hoy->diff($fechaNacimientoObj)->y;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resumen del Paciente</title>
</head>

<body>
  <h1>Resumen del Paciente</h1>
  <p><strong>Nombre:</strong> <?= $nombre ?></p>
  <p><strong>Sexo:</strong> <?= $sexo ?></p>
  <p><strong>Altura:</strong> <?= $altura ?> cm</p>
  <p><strong>Fecha de Nacimiento:</strong> <?= $fechaNacimiento ?> (Edad: <?= $edad ?> años)</p>
  <p><strong>Semana Preferente:</strong> <?= $semanaPreferente ?></p>
  <p><strong>¿Es fumador?:</strong> <?= $fumador ?></p>
  <?php if ($fumador === 'Sí'): ?>
    <p><strong>Número de cigarrillos:</strong> <?= $cigarrillos ?></p>
  <?php endif; ?>
  <p><strong>Observaciones:</strong> <?= $observaciones ?></p>
</body>

</html>