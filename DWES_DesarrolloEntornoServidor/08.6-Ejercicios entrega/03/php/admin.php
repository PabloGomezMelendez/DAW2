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

// Función para guardar productos en el fichero
function guardarProductos($productos) {
    $fichero = '../tx/productos.txt';
    file_put_contents($fichero, json_encode($productos, JSON_PRETTY_PRINT));
}

// Cargar productos en la sesión
if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = cargarProductos();
}

// Insertar producto
if (isset($_POST['insertar'])) {
    $nombre = $_POST['nombre'];
    $precio = (float) $_POST['precio'];
    $detalle = $_POST['detalle'];
    $imagen = $_POST['imagen'];

    if ($nombre && $precio && $detalle && $imagen) {
        $_SESSION['productos'][$nombre] = ['precio' => $precio, 'detalle' => $detalle, 'imagen' => $imagen];
        guardarProductos($_SESSION['productos']);
    }
    header('Location: admin.php');
    exit;
}

// Eliminar producto
if (isset($_POST['eliminar'])) {
    $nombre = $_POST['nombre'];
    if (isset($_SESSION['productos'][$nombre])) {
        unset($_SESSION['productos'][$nombre]);
        guardarProductos($_SESSION['productos']);
    }
    header('Location: admin.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Administrar Productos</title>
</head>
<body>
    <h1>Administrar Productos</h1>
    <a href="../index.php">Volver a la tienda</a>
    <h2>Productos Existentes</h2>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Detalle</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION['productos'] as $nombre => $datos): ?>
                <tr>
                    <td><?= $nombre ?></td>
                    <td><?= $datos['precio'] ?>€</td>
                    <td><?= $datos['detalle'] ?></td>
                    <td>img/<?= $datos['imagen'] ?>.jpg</td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="nombre" value="<?= $nombre ?>">
                            <button type="submit" name="eliminar">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Agregar Producto</h2>
    <form method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" required>
        <label>Detalle:</label>
        <input type="text" name="detalle" required>
        <label>Imagen:</label>
        <input type="text" name="imagen" required>
        <button type="submit" name="insertar">Insertar</button>
    </form>
</body>
</html>
