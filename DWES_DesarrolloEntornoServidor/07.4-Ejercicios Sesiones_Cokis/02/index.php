<!-- @author @Pablo Gómez Meléndez  -->
<?php
session_start();

// Configurar el nombre de la cookie y su duración (3 meses)
$cookie_name = "resultados_encuesta";
$cookie_duracion = time() + (3 * 30 * 24 * 60 * 60); // 3 meses en segundos

// Verificar si la cookie existe y cargar resultados en la sesión
if (isset($_COOKIE[$cookie_name])) {
    $resultados = json_decode($_COOKIE[$cookie_name], true);
    $_SESSION['votos_opcion1'] = $resultados['votos_opcion1'];
    $_SESSION['votos_opcion2'] = $resultados['votos_opcion2'];
} else {
    // Inicializar votos si no existen en la sesión
    if (!isset($_SESSION['votos_opcion1'])) $_SESSION['votos_opcion1'] = 0;
    if (!isset($_SESSION['votos_opcion2'])) $_SESSION['votos_opcion2'] = 0;
}

// Procesar votos de las respuestas
if (isset($_POST['opcion'])) {
    if ($_POST['opcion'] === 'opcion1') {
        $_SESSION['votos_opcion1']++;
    } elseif ($_POST['opcion'] === 'opcion2') {
        $_SESSION['votos_opcion2']++;
    }

    // Actualizar la cookie con los resultados actuales
    $resultados = [
        'votos_opcion1' => $_SESSION['votos_opcion1'],
        'votos_opcion2' => $_SESSION['votos_opcion2']
    ];
    setcookie($cookie_name, json_encode($resultados), $cookie_duracion, "/");
}

// Obtener el total de votos
$total_votos = $_SESSION['votos_opcion1'] + $_SESSION['votos_opcion2'];
$porcentaje_opcion1 = $total_votos > 0 ? ($_SESSION['votos_opcion1'] / $total_votos) * 100 : 0;
$porcentaje_opcion2 = $total_votos > 0 ? ($_SESSION['votos_opcion2'] / $total_votos) * 100 : 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
    <style>
        .barra-contenedor {
            display: flex;
            width: 100%;
            height: 30px;
            background-color: #e0e0e0;
            margin-top: 10px;
        }
        .barra {
            height: 100%;
            color: #fff;
            text-align: center;
        }
        .barra1 { background-color: #4CAF50; width: <?php echo $porcentaje_opcion1; ?>%; }
        .barra2 { background-color: #dc3545; width: <?php echo $porcentaje_opcion2; ?>%; }
    </style>
</head>
<body>

<h2>¿Como prefieres la tortilla de patatas?</h2>

<form method="post" action="">
    <button type="submit" name="opcion" value="opcion1">Con cebolla</button>
    <button type="submit" name="opcion" value="opcion2">Sin cebolla</button>
</form>

<h3>Resultados de la encuesta:</h3>
<p>Opción 1: <?php echo $_SESSION['votos_opcion1']; ?> votos (<?php echo round($porcentaje_opcion1, 2); ?>%)</p>
<p>Opción 2: <?php echo $_SESSION['votos_opcion2']; ?> votos (<?php echo round($porcentaje_opcion2, 2); ?>%)</p>

<div class="barra-contenedor">
    <div class="barra barra1"><?php echo round($porcentaje_opcion1, 2); ?>%</div>
    <div class="barra barra2"><?php echo round($porcentaje_opcion2, 2); ?>%</div>
</div>

</body>
</html>
