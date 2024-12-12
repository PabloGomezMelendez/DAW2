<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tabla filas y columnas</h1>
    <?php
    if (!isset($_REQUEST['filas'])) {
    ?>
        <form action="01.php" method="post">
        <input type=" number" name="filas" id="" max="50">
            <input type="number" name="columnas" id="" max="50">
            <input type="submit" value="Aceptar">
        </form>
    <?php
    } else {
        $filas = $_REQUEST['filas'];
        $columnas = $_REQUEST['columnas'];
        $valor = 0;

        echo "<table border='1'>";

        for ($i = 1; $i <= $filas; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $columnas; $j++) {
                // echo"<td style='background-color:rgb(".rand(0,255).",".rand(0,255).",".rand(0,255).")'>".++$valor."</td>";
                echo '<td style="background-color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).')">' . ++$valor . '</td>';
            }
            echo "</tr>";
        }
    }
    ?>





</body>

</html>