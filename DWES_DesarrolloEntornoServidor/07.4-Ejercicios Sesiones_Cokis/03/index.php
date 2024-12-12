<!-- @author @Pablo Gómez Meléndez  -->
<?php
session_start();

// Crear un array de productos al iniciar una nueva sesión
if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = [
        "Producto1" => [
            "precio" => 50.99,
            "detalle" => "Descripción del Producto 1",
            "imagen" => "img/producto1.jfif"
        ],
        "Producto2" => [
            "precio" => 20.50,
            "detalle" => "Descripción del Producto 2",
            "imagen" => "img/producto2.jfif"
        ],
        "Producto3" => [
            "precio" => 75.75,
            "detalle" => "Descripción del Producto 3",
            "imagen" => "img/producto3.jfif"
        ],
    ];
}

// Inicializar el carrito desde la cookie si existe
if (isset($_COOKIE['carrito'])) {
    $_SESSION['carrito'] = json_decode($_COOKIE['carrito'], true);
} elseif (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Agregar un producto al carrito
if (isset($_POST['agregar'])) {
    $producto = $_POST['agregar'];
    if (isset($_SESSION['productos'][$producto])) {
        if (!isset($_SESSION['carrito'][$producto])) {
            $_SESSION['carrito'][$producto] = 0;
        }
        $_SESSION['carrito'][$producto]++;
        setcookie('carrito', json_encode($_SESSION['carrito']), time() + (3 * 30 * 24 * 60 * 60), "/");
    }
}

// Contar el total de productos en el carrito
$total_productos = array_sum($_SESSION['carrito']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: auto; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        img { width: 100px; height: auto; cursor: pointer; }
    </style>
</head>
<body>

<h2 style="text-align: center;">Tienda de Productos</h2>
<p style="text-align: center;">Productos en la cesta: <?php echo $total_productos; ?> | <a href="php/carrito.php">Ver carrito</a></p>

<table>
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Añadir al carrito</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($_SESSION['productos'] as $nombre => $datos): ?>
            <tr>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $datos['precio']; ?> €</td>
                <td>
                    <a href="php/detalle.php?producto=<?php echo urlencode($nombre); ?>">
                        <img src="<?php echo $datos['imagen']; ?>" alt="<?php echo $nombre; ?>">
                    </a>
                </td>
                <td>
                    <form method="post" action="">
                        <button type="submit" name="agregar" value="<?php echo $nombre; ?>">Añadir</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
