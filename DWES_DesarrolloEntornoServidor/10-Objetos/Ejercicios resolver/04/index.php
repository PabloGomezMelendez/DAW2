<!-- @Author Pablo Gómez Meléndez -->
<!-- @Date 2022-02-20 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <?php
    require_once 'php/Factura.php';

    // Crear una nueva factura
    $factura = new Factura('2024-11-22');

    // Añadir productos
    $factura->añadeProducto('Producto A', 10.50, 2);
    $factura->añadeProducto('Producto B', 5.75, 4);
    $factura->añadeProducto('Producto C', 15.00, 1);

    // Cambiar el estado de la factura
    $factura->setEstado('pagada');

    // Imprimir la factura
    $factura->imprimeFactura();
    ?>
</body>

</html>