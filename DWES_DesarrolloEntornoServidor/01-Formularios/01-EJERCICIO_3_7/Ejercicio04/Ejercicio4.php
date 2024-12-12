<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo NÚMERO loteria nacional</title>
</head>

<body>
    <?php
    $T1 = $_REQUEST['tienda1'];
    $T2 = $_REQUEST['tienda2'];
    $T3 = $_REQUEST['tienda3'];
    $media = ($T1 + $T2 + $T3) / 3;

    ?>
    <h1>Resultado del cálculo de la media de las tiendas</h1>
    <table>
        <tr>
            <td>Tienda 1: </td>
            <td><?php echo "$T1"; ?></td>
        </tr>
        <tr>
            <td>Tienda 2: </td>
            <td><?php echo "$T2"; ?></td>
        </tr>
        <tr>
            <td>Tienda 3: </td>
            <td><?php echo "$T3"; ?></td>
        </tr>
        <tr>
            <h2>Media de las tiendas: <?php echo "$media"; ?></h2>
        </tr>
    </table>

</body>

</html>