<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/css/style.css">
    <title>Incidencias</title>
</head>

<body>
    <h1>Perfil <?= $data['userios']->getNombre() ?>: <?= $data['userios']->getPerfil() ?></h1>
    <table>
        <?php
        if ($data['userios']->getPerfil() == "user") {
        ?>
            <tr>
                <th colspan="3">
                    <form action="../View/insert_view.php" method="post">
                        <input id="btn_insert" type="submit" value="NUEVA INCIDENCIA" name="Nuevo">
                    </form>
                </th>
            </tr>
            <tr>
                <th>Descripcion</th>
                <th>Profesor</th>
                <th>Fecha</th>
            </tr>
            <?php
            foreach ($data['incidencias'] as $incidencia) {
            ?>
                <tr>
                    <td><?= $incidencia->getDescripcion() ?></td>
                    <td><?= $incidencia->getProfesor() ?></td>
                    <td><?= $incidencia->getFecha() ?></td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="3"><Button name="nuevo" id="nuevo" href="../Controller/index.php">Cerrar sesion</Button></td>
            </tr>
        <?php
        } else {
        ?>

            <tr>
                <th>Descripcion</th>
                <th>Profesor</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            foreach ($data['incidencias'] as $incidencia) {
            ?>
                <tr>
                    <td><?= $incidencia->getDescripcion() ?></td>
                    <td><?= $incidencia->getProfesor() ?></td>
                    <td><?= $incidencia->getFecha() ?></td>
                    <td><?= $incidencia->getEstado() ?></td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="3"><Button name="close" id="close" href="../Controller/index.php">Cerrar sesion</Button></td>
            </tr>
        <?php
        }
        ?>

    </table>


</body>

</html>