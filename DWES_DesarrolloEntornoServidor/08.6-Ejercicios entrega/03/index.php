<?php
session_start();

// Función para cargar productos desde el fichero
function cargarProductos() {
    $fichero = 'tx/productos.txt';
    if (file_exists($fichero)) {
        $contenido = file_get_contents($fichero);
        return json_decode($contenido, true) ?: [];
    }
    return [];
}

// Cargar productos en la sesión desde el fichero
if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = cargarProductos();
}

// Recuperar carrito desde la cookie
$carrito = isset($_COOKIE['carrito']) ? json_decode($_COOKIE['carrito'], true) : [];

// Añadir producto al carrito
if (isset($_POST['agregar'])) {
    $producto = $_POST['producto'];
    if (isset($carrito[$producto])) {
        $carrito[$producto]++;
    } else {
        $carrito[$producto] = 1;
    }
    setcookie('carrito', json_encode($carrito), time() + 3600);
    header('Location: index.php');
    exit;
}

// Contar productos en el carrito
$totalProductos = array_sum($carrito);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <title>Tienda</title>
</head>
<body>
    <h1>Tienda de Productos</h1>
    <p>Productos en el carrito: <a href="php/carrito.php"><?= $totalProductos ?></a></p>
    <a href="php/admin.php">Administrar productos</a>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION['productos'] as $nombre => $datos): ?>
                <tr>
                    <td><?= $nombre ?></td>
                    <td><?= $datos['precio'] ?>€</td>
                    <td>
                        <a href="php/detalle.php?producto=<?= urlencode($nombre) ?>">
                            <img src="img/<?= $datos['imagen'] ?>.jpg" alt="<?= $nombre ?>" width="100">
                        </a>
                    </td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="producto" value="<?= $nombre ?>">
                            <button type="submit" name="agregar">Añadir al carrito</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
