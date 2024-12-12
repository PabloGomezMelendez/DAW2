<!-- @author @Pablo Gómez Meléndez  -->
<?php
session_start();

// Verificar si el producto existe
if (isset($_GET['producto']) && isset($_SESSION['productos'][$_GET['producto']])) {
    $producto = $_GET['producto'];
    $datos = $_SESSION['productos'][$producto];
} else {
    die("Producto no encontrado.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de <?php echo $producto; ?></title>
</head>
<body>
<h2>Detalles de <?php echo $producto; ?></h2>
<img src="<?php echo "../".$datos['imagen']; ?>" alt="<?php echo $producto; ?>" style="width: 300px; height: auto;">
<p>Precio: <?php echo $datos['precio']; ?> €</p>
<p>Descripción: <?php echo $datos['detalle']; ?></p>
<a href="../index.php">Volver a la tienda</a>
</body>
</html>
