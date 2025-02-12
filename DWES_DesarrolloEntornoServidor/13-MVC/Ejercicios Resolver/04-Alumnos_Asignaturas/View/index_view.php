<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/css/style.css">
    <title>Blog</title>
</head>

<body>
    <h1>Escuela</h1>

    <table>
        <tr>
            <th colspan="6">
                <form action="../View/insert_view.php" method="post">
                    <input id="btn_insert" type="submit" value="NUEVO ARTICULO" name="Nuevo">
                </form>
            </th>
        </tr>
        <tr>
            <th>Matricula</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Curso</th>
            <th><!-- boton 1 --></th>
            <th><!-- boton 2 --></th>
        </tr>
        <?php
        foreach ($data['Alumnos'] as $alumno) {
        ?>
            <tr>
                <td><?= $alumno->getMatricula() ?></td>
                <td><?= $alumno->getNombre() ?></td>
                <td><?= $alumno->getApellidos() ?></td>
                <td><?= $alumno->getCurso() ?></td>
                <td>
                    <form action="../Controller/updateArticulo.php" method="post">
                        <input type="hidden" name="idArticuloDelete" value="<?= $alumno->getMatricula() ?>">
                        <input id="btn_update" type="submit" value="MOIFICAR" name="update">
                    </form>
                </td>
                <td>
                    <form action="../Controller/deleteArticulo.php" method="post">
                        <input type="hidden" name="idArticuloDelete" value="<?= $alumno->getMatricula() ?>">
                        <input id="btn_delete" type="submit" value="BORRAR" name="Borrar">
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>


</body>

</html>