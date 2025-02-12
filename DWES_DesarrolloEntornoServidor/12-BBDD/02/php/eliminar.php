<!-- @Author Pablo Gómez Meléndez -->
<?php
include_once("ConexionBBDD.php");
include_once("FuncionesSQL.php");

$conexion = conectaLocalHostBBDD("banco");

?>
<?php
if (isset($_REQUEST['id_cliente'])) {
    $id = $_REQUEST['id_cliente'];
}
if (isset($_REQUEST['confirmar'])) {

    $id = $_REQUEST['id_cliente'];
    deleteClienteByID($conexion, $id);

    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de eliminar cliente</title>
    <link rel="stylesheet" href="../css/css.css">
</head>

<body>
    <h1>CONFIRMA QUE DESEAS ELIMINAR AL CLIENTE</h1>

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
                    <td><?= $cliente->DNI ?></td>
                    <td><?= $cliente->nombre ?></td>
                    <td><?= $cliente->dirección ?></td>
                    <td><?= $cliente->telefono ?></td>
                    <td>
                        <form method="post" action="">
                            <input name="id_cliente" type="hidden" value="<?= $cliente->id; ?>">
                            <button id="btn_delete" type="submit" name="confirmar" value="confirmar">Confirmar</button>
                        </form>
                    </td>
                    <td>
                        <a href="../index.php">Cancelar</a>
                    </td>
                </tr>
            </form>
        <?php
        }
        ?>
    </table>