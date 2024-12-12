<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Refresh" content="1;url=../index.php">
    <link rel="stylesheet" href="../css/style.css">

    <title>Document</title>
</head>

<body>
    <?php
    // Mostrar mensaje de confirmación
    $imagenGris = $_REQUEST['imagen'];
    ?>

    <table>
        <tr>
            <td>
                <?php
                echo ($imagenGris == 1) ? "<img src='../img/1.jpg'>" : "<img src='../img/gris.jpg'>";
                ?>
            </td>
            <td>
                <?php
                echo ($imagenGris == 2) ? "<img src='../img/2.jpg'>" : "<img src='../img/gris.jpg'>";
                ?>
            </td>
            <td>
                <?php
                echo ($imagenGris == 3) ? "<img src='../img/3.jpg'>" : "<img src='../img/gris.jpg'>";
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo ($imagenGris == 4) ? "<img src='../img/4.jpg'>" : "<img src='../img/gris.jpg'>";
                ?>
            </td>
            <td>
                <?php
                echo ($imagenGris == 5) ? "<img src='../img/5.jpg'>" : "<img src='../img/gris.jpg'>";
                ?>
            </td>
            <td>
                <?php
                echo ($imagenGris == 6) ? "<img src='../img/6.jpg'>" : "<img src='../img/gris.jpg'>";
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo ($imagenGris == 7) ? "<img src='../img/7.jpg'>" : "<img src='../img/gris.jpg'>";
                ?>
            </td>
            <td>
                <?php
                echo ($imagenGris == 8) ? "<img src='../img/8.jpg'>" : "<img src='../img/gris.jpg'>";
                ?>
            </td>
            <td>
                <?php
                echo ($imagenGris == 9) ? "<img src='../img/9.jpg'>" : "<img src='../img/gris.jpg'>";
                ?>
            </td>
        </tr>
    </table>
</body>

</html>