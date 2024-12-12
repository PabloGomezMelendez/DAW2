<?php
require_once 'controlAcceso.php';

// Genera una coordenada aleatoria para pedir al usuario
$fila = rand(1, 5);
$columna = chr(rand(65, 69)); // Genera letra entre 'A' y 'E'
$coordenada = "$fila$columna";

// Verificación de acceso
$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $perfil = $_POST['perfil'];
    $valor = $_POST['valor'];
    $tarjeta = dameTarjeta($perfil);

    // Validamos si el valor coincide con la coordenada generada
    if (compruebaClave($tarjeta, $fila, $columna, $valor)) {
        $mensaje = 'Acceso concedido. <a href="protegido.php">Ir a la página protegida</a>';
    } else {
        $mensaje = 'Acceso denegado. <a href="index.php">Intentar de nuevo</a>';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Control de acceso</title>
</head>
<body>

<h1>Acceso con tarjeta de coordenadas</h1>

<form method="POST" action="">
    <label for="perfil">Perfil de usuario:</label>
    <select id="perfil" name="perfil" required>
        <option value="admin">Admin</option>
        <option value="estandar">Estándar</option>
    </select><br><br>

    <p>Introduce el valor de la coordenada <?php echo $coordenada; ?>:</p>
    <input type="text" name="valor" required><br><br>

    <button type="submit">Acceder</button>
</form>

<?php if ($mensaje): ?>
    <p><?php echo $mensaje; ?></p>
<?php endif; ?>

<h2>Tarjeta de coordenadas</h2>
<h3>Admin</h3>
<?php echo imprimeTarjeta(dameTarjeta('admin')); ?>
<h3>Estándar</h3>
<?php echo imprimeTarjeta(dameTarjeta('estandar')); ?>

</body>
</html>
