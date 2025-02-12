<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/css/style.css">
    <title>Simulacro examen</title>
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
            <th>Imagen</th>
            <th><!-- boton 1 --></th>
            <th><!-- boton 2 --></th>
        </tr>
        <?php
        foreach ($data['fotos'] as $foto) {
        ?>
            <tr>
                <td><img src="../View/img/<?= $foto->getImagen() ?>" alt=""></td>
            </tr>
        <?php
        }
        ?>
    </table>


</body>

</html>