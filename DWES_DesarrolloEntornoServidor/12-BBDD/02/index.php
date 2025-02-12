<!-- @Author Pablo Gómez Meléndez -->
<?php
// Incluimos la clase de conexión a la base de datos
include_once("php/ConexionBBDD.php");
include_once("php/FuncionesSQL.php");

// Conectamos con la base de datos y creamos una instancia de la clase ConexionBBDD
$conexion = conectaLocalHostBBDD("banco");

// Iniciamos la sesión para mantener el estado de la página
session_start();
?>

<?php
//* Acciones necesarias para Añadir un registro
if (isset($_REQUEST['alta'])) {
    $dni = $_REQUEST['dni'];
    $nombre = $_REQUEST['nombre'];
    $direccion = $_REQUEST['direccion'];
    $telefono = $_REQUEST['telefono'];
    $consultaByDNI = ClientesByDNI($conexion,$dni);
    if ($consultaByDNI->rowCount() == 0) {
        addCliente($conexion, $dni, $nombre, $direccion, $telefono);
    } else {
        echo "El DNI ya está en uso.";
    }
}

// * Para realizar la paguinacion de los registros existentes
if (!isset($_SESSION['numRegistros'])) {
    $_SESSION['numRegistros'] = 5;
    $_SESSION['inicioPagina'] = 0;
}

$consultaAll = AllClientes($conexion);
$totalPaginas = ceil($consultaAll->rowCount() /  $_SESSION['numRegistros']);
if (isset($_REQUEST['pagPulsada'])) {

    if ($_REQUEST['pagPulsada'] > $totalPaginas) {
        $_SESSION['inicioPagina'] = max(0, $totalClientes - $_SESSION['numRegistros']);
    } else if ($_REQUEST['pagPulsada'] <= 0) {
        $_SESSION['inicioPagina'] = 0;
    } else {
        $_SESSION['inicioPagina'] = (($_REQUEST['pagPulsada'] - 1) * $_SESSION['numRegistros']);
    }
} else {
    $_SESSION['inicioPagina'] = 0;
}
$consultaLimit = ClientesLimit($conexion, $_SESSION['inicioPagina'], $_SESSION['numRegistros']);

if (isset($_REQUEST['numClientes'])) {
    $_SESSION['numRegistros'] = $_REQUEST['numClientes'];
    $_SESSION['inicioPagina'] = 0;
    header("Refresh:0; url=index.php");
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
        // Mientras haya clientes, mostrarlos en la tabla
        while ($cliente = $consultaLimit->fetchObject()) {
        ?>
            <tr>
                <!-- Mostrar los datos del cliente -->
                <td><?= $cliente->id; ?></td>
                <td><?= $cliente->DNI ?></td>
                <td><?= $cliente->nombre ?></td>
                <td><?= $cliente->dirección ?></td>
                <td><?= $cliente->telefono ?></td>
                <td>
                    <form method="post" action="php/eliminar.php">
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
    </form><br>

    <!-- PAGINACION DE LA WEB -->
    <form action="#" method="post">
        Numero de registros: <input type="number" name="numClientes" id="" min="0">
        <input type="submit" value="CARGAR" name="btnPaginas">
    </form><br>
    <form action="#" method="post">
        <?php

        for ($i = 0; $i < $totalPaginas; $i++) {
        ?>
            <input type="submit" value="<?= $i + 1 ?>" name="pagPulsada">
        <?php
        }
        ?>
    </form>
</body>

</html>