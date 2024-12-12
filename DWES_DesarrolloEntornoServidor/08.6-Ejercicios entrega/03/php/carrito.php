<?php
session_start();

// Función para cargar productos desde el fichero
function cargarProductos() {
    $fichero = '../tx/productos.txt';
    if (file_exists($fichero)) {
        $contenido = file_get_contents($fichero);
        return json_decode($contenido, true) ?: [];
    }
    return [];
}

// Cargar productos en la sesión
if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = cargarProductos();
}

// Recuperar carrito desde la cookie
$carrito = isset($_COOKIE['carrito']) ? json_decode($_COOKIE['carrito'], true) : [];

// Eliminar un producto del carrito
if (isset($_POST['eliminar'])) {
    $producto = $_POST['producto'];
    if (isset($carrito[$producto])) {
        $carrito[$producto]--;
        if ($carrito[$producto] <= 0) {
            unset($carrito[$producto]);
        }
        setcookie('carrito', json_encode($carrito), time() + 3600);
    }
    header('Location: carrito.php');
    exit;
}

// Calcular el total
$total = 0;
foreach ($carrito as $producto => $cantidad) {
    if (isset($_SESSION['productos'][$producto])) {
        $total += $_SESSION['productos'][$producto]['precio'] * $cantidad;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Carrito</title>
</head>
<body>
    <h1>Carrito de la compra</h1>
    <a href="../index.php">Volver a la tienda</a>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carrito as $nombre => $cantidad): ?>
                <?php if (isset($_SESSION['productos'][$nombre])): ?>
                    <tr>
                        <td><?= $nombre ?></td>
                        <td><?= $cantidad ?></td>
                        <td><?= $_SESSION['productos'][$nombre]['precio'] * $cantidad ?>€</td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="producto" value="<?= $nombre ?>">
                                <button type="submit" name="eliminar">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p>Total: <?= $total ?>€</p>
</body>
</html>
