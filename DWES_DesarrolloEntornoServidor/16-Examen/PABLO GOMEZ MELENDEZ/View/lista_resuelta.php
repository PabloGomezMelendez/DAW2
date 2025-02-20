<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>historico de resultas por <?= $data['userios']->getNombre() ?></h1>
    <table>

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


    </table>


</body>

</html>