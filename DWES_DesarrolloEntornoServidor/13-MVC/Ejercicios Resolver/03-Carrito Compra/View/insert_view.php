<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/css/styleInsert.css">
    <title>Blog</title>
</head>

<body>
    <h1>Mi Blog personal</h1>

    <table>
        <tr>
            <th>Titulo</th>
            <th>Contenido</th>
            <!-- <th>Fecha</th> -->
            <th></th>
            <th></th>
        </tr>

        <tr>
            <form action="../Controller/insertArticulo.php" method="post">
                <td><input type="text" name="ArticuloInsert_titulo"></td>
                <td><textarea  rows="10" cols="100" name="ArticuloInsert_contenido"></textarea></td>
                <!-- <td><input type="datetime-local" name="ArticuloInsert_fecha"></td> -->
                <td>
                    <input id="btn_insert" type="submit" value="Guardar" name="insertArticulo">
                </td>
                <td>
                    <a href="../index.php">Cancelar</a>
                </td>
            </form>
        </tr>
    </table>


</body>

</html>