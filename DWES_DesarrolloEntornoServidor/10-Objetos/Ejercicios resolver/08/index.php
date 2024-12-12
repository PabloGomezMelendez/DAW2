<!-- @Author Pablo Gómez Meléndez -->
<!-- @Date 2022-02-20 -->
<?php
session_start();
require_once 'php/Zona.php';

// Inicializar zonas solo la primera vez
if (!isset($_SESSION['zonas'])) {
    $_SESSION['zonas'] = [
        new Zona("Principal", 20, 1000),
        new Zona("Compra-Venta", 35, 200),
        new Zona("VIP", 50, 25)
    ];
}

// Procesar la venta de entradas
$mensaje = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $zonaSeleccionada = $_POST['zona'];
    $cantidad = (int)$_POST['cantidad'];

    if ($cantidad > 0) {
        foreach ($_SESSION['zonas'] as $zona) {
            if ($zona->getNombre() === $zonaSeleccionada) {
                if ($zona->venderEntradas($cantidad)) {
                    $mensaje = "¡Venta realizada con éxito!";
                } else {
                    $mensaje = "No hay suficientes entradas disponibles en la zona $zonaSeleccionada.";
                }
                break;
            }
        }
    } else {
        $mensaje = "Debes introducir una cantidad válida de entradas.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circo del Sol - Venta de Entradas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 style="text-align: center;">Circo del Sol - Venta de Entradas</h1>
    <table>
        <tr>
            <th>Zona</th>
            <th>Precio (€)</th>
            <th>Entradas Disponibles</th>
            <th>Ingresos Totales (€)</th>
        </tr>
        <?php foreach ($_SESSION['zonas'] as $zona): ?>
        <tr>
            <td><?= $zona->getNombre() ?></td>
            <td><?= $zona->getPrecio() ?></td>
            <td><?= $zona->getEntradasDisponibles() ?></td>
            <td><?= $zona->getIngresosTotales() ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div class="formulario">
        <h2>Vender Entradas</h2>
        <form method="post">
            <label for="zona">Zona:</label>
            <select name="zona" id="zona">
                <?php foreach ($_SESSION['zonas'] as $zona): ?>
                    <option value="<?= $zona->getNombre() ?>"><?= $zona->getNombre() ?></option>
                <?php endforeach; ?>
            </select>
            <br><br>
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" min="1" required>
            <br><br>
            <button type="submit">Vender</button>
        </form>
        <?php if (!empty($mensaje)): ?>
            <p><strong><?= $mensaje ?></strong></p>
        <?php endif; ?>
    </div>
</body>
</html>
