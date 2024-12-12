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

// Obtener el producto solicitado
$producto = isset($_GET['producto']) ? $_GET['producto'] : null;

if (!$producto || !isset($_SESSION['productos'][$producto])) {
    die('Producto no encontrado.');
}

$datos = $_SESSION['productos'][$producto];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Detalle del Producto</title>
</head>
<body>
    <h1><?= $producto ?></h1>
    <img src="../img/?= $datos['imagen'] ?>.jpg" alt="<?= $producto ?>" style="width: 300px;">
    <p>Precio: <?= $datos['precio'] ?>€</p>
    <p>Detalle: <?= $datos['detalle'] ?></p>
    <a href="../index.php">Volver a la tienda</a>
</body>
</html>
