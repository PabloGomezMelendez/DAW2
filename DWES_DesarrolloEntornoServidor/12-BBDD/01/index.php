<!-- @Author Pablo Gómez Meléndez -->
<?php
include_once("php/ConexionBBDD.php");
include_once("php/FuncionesSQL.php");

$conexion = conectaLocalHostBBDD("banco");

?>
<?php
if (isset($_REQUEST['alta'])) {
    $dni = $_REQUEST['dni'];
    $nombre = $_REQUEST['nombre'];
    $direccion = $_REQUEST['direccion'];
    $telefono = $_REQUEST['telefono'];
    $consulta = ClientesByDNI($conexion,$dni);
    if ($consulta == 0) {
    addCliente($conexion, $dni, $nombre, $direccion, $telefono);
    } else {
        echo "El DNI ya está en uso.";
    }
}
if (isset($_REQUEST['eliminar'])) {
    $id = $_REQUEST['id_cliente'];
    deleteClienteByID($conexion, $id);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimiento de clientes</title>
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
    <h1>Mantenimiento de clientes</h1>

    <!-- Tabla de artículos -->
    <table>
        <tr>
            <th>ID</th>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Telefono</th>

        </tr>
        <!-- Aquí se cargan los datos de los clientes -->
        <?php
        // Consultar los datos de los clientes
        //* $sql = "SELECT * FROM cliente";
        //* $consulta = $conexion->query($sql);

        $consulta = AllClientes($conexion);
        // Mientras haya clientes, mostrarlos en la tabla
        while ($cliente = $consulta->fetchObject()) {
        ?>
            <tr>
                <!-- Mostrar los datos del cliente -->
                <td><?= $cliente->id; ?></td>
                <td><?= $cliente->DNI ?></td>
                <td><?= $cliente->nombre ?></td>
                <td><?= $cliente->dirección ?></td>
                <td><?= $cliente->telefono ?></td>
                <td>
                    <form method="post">
                        <input name="id_cliente" type="hidden" value="<?= $cliente->id; ?>">
                        <button id="btn_delete" type="submit" name="eliminar" value="eliminar">Eliminar</button>
                    </form>
                </td>
                <td>
                    <form action="php/modificar.php" method="post">
                        <input name="id_cliente" type="hidden" value="<?= $cliente->id; ?>">
                        <button id="btn_update" type="submit" name="modificar" value="modificar">Modificar</button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>

    <!-- Formulario para alta -->
    <h2>Añadir Nuevo Artículo</h2>
    <form method="post">
        <input type="text" name="dni" placeholder="DNI" required>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="direccion" placeholder="Dirección" required>
        <input type="text" name="telefono" placeholder="Telefono" required>
        <button id="btn_add" type="submit" name="alta" value="alta">Añadir</button>
    </form>

</body>

</html>