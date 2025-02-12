<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/css/style.css">
    <title>Blog</title>
</head>

<body>
    <h1>Mi Blog personal</h1>

    <table>
        <tr>
            <th colspan="5">
                <form action="../View/insert_view.php" method="post">
                    <input id="btn_insert" type="submit" value="NUEVO ARTICULO" name="Nuevo">
                </form>
            </th>
        </tr>
        <tr>
            <th>Titulo</th>
            <th>Contenido</th>
            <th>Fecha</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        foreach ($data['Articulos'] as $articulo) {
        ?>
            <tr>
                <td><?= $articulo->getTitulo() ?></td>
                <td><?= $articulo->getContenido() ?></td>
                <td><?= $articulo->getFecha() ?></td>
                <td>
                    <form action="../Controller/updateArticulo.php" method="post">
                        <input type="hidden" name="idArticuloDelete" value="<?= $articulo->getId() ?>">
                        <input id="btn_update" type="submit" value="MOIFICAR" name="update">
                    </form>
                </td>
                <td>
                    <form action="../Controller/deleteArticulo.php" method="post">
                        <input type="hidden" name="idArticuloDelete" value="<?= $articulo->getId() ?>">
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