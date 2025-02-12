<!-- @Author Pablo Gómez Meléndez -->
<?php
include_once("ConexionBBDD.php");
include_once("FuncionesSQL.php");

$conexion = conectaLocalHostBBDD("banco");

?>
<?php
if (isset($_REQUEST['modificar'])) {
    $id = $_REQUEST['id_cliente'];
}
if (isset($_REQUEST['guardar'])) {

    $id = $_REQUEST['id_cliente'];
    $dni = $_REQUEST['cliente_DNI'];
    $nombre = $_REQUEST['cliente_nombre'];
    $direccion = $_REQUEST['cliente_direccion'];
    $telefono = $_REQUEST['cliente_telefono'];

    updateCliente($conexion, $id, $dni, $nombre, $direccion, $telefono);

    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimiento de clientes</title>
    <link rel="stylesheet" href="../css/css.css">
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

        $consulta =  ClienteByID($conexion, $id);;
        // Mientras haya clientes, mostrarlos en la tabla
        while ($cliente = $consulta->fetchObject()) {
        ?>
        <form action="" method="post">

            <tr>
                <!-- Mostrar los datos del cliente -->
                <td><?= $cliente->id; ?></td>
                <td><input name="cliente_DNI" type="text" value="<?= $cliente->DNI; ?>"></td>
                <td><input name="cliente_nombre" type="text" value="<?= $cliente->nombre; ?>"></td>
                <td><input name="cliente_direccion" type="text" value="<?= $cliente->dirección; ?>"></td>
                <td><input name="cliente_telefono" type="text" value="<?= $cliente->telefono; ?>"></td>
                <td>
                    <input name="id_cliente" type="hidden" value="<?= $cliente->id; ?>">
                    <button id="btn_safe" type="submit" name="guardar" value="guardar">Guardar</button>
                </td>
            </tr>
        </form>
        <?php
        }
        ?>
        <a href="../index.php">VOLVER Sin modificar</a>

    </table>