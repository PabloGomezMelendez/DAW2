<!-- @author @Pablo Gómez Meléndez  -->
<?php
session_start();

// Eliminar un producto del carrito
if (isset($_POST['eliminar'])) {
    $producto = $_POST['eliminar'];
    if (isset($_SESSION['carrito'][$producto])) {
        $_SESSION['carrito'][$producto]--;
        if ($_SESSION['carrito'][$producto] <= 0) {
            unset($_SESSION['carrito'][$producto]);
        }
        setcookie('carrito', json_encode($_SESSION['carrito']), time() + (3 * 30 * 24 * 60 * 60), "/");
    }
}

// Vaciar el carrito
if (isset($_POST['vaciar'])) {
    $_SESSION['carrito'] = [];
    setcookie('carrito', '', time() - 3600, "/");
}

// Calcular el total del carrito
$total = 0;
foreach ($_SESSION['carrito'] as $producto => $cantidad) {
    $total += $_SESSION['productos'][$producto]['precio'] * $cantidad;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: auto; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
    </style>
</head>
<body>

<h2 style="text-align: center;">Carrito de Compras</h2>
<a href="../index.php" style="text-align: center; display: block;">Volver a la tienda</a>

<?php if (empty($_SESSION['carrito'])): ?>
    <p style="text-align: center;">El carrito está vacío.</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION['carrito'] as $producto => $cantidad): ?>
                <tr>
                    <td><?php echo $producto; ?></td>
                    <td><?php echo $_SESSION['productos'][$producto]['precio']; ?> €</td>
                    <td><?php echo $cantidad; ?></td>
                    <td><?php echo $_SESSION['productos'][$producto]['precio'] * $cantidad; ?> €</td>
                    <td>
                        <form method="post" action="">
                            <button type="submit" name="eliminar" value="<?php echo $producto; ?>">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p style="text-align: center;">Total: <?php echo $total; ?> €</p>
    <form method="post" action="" style="text-align: center;">
        <button type="submit" name="vaciar">Vaciar carrito</button>
    </form>
<?php endif; ?>

</body>
</html>
