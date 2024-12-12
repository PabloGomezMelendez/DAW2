<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo NÚMERO loteria nacional</title>
</head>

<body>
    <?php
        $n1 = $_REQUEST['numero1'];
        $n2 = $_REQUEST['numero2'];
        $n3 = $_REQUEST['numero3'];
        $n4 = $_REQUEST['numero4'];
        $n5 = $_REQUEST['numero5'];
        $n6 = $_REQUEST['numero6'];
        $serie = $_REQUEST['serie'];

        $nG1 = rand(1, 49);
        $nG2 = rand(1, 49);
        $nG3 = rand(1, 49);
        $nG4 = rand(1, 49);
        $nG5 = rand(1, 49);
        $nG6 = rand(1, 49);
        $serieG = rand(1, 999);;
        ?>
        <table>
        <tr>
            <td></td><td></td>
            <td>Numero 1</td>
            <td>Numero 2</td>
            <td>Numero 3</td>
            <td>Numero 4</td>
            <td>Numero 5</td>
            <td>Numero 6</td>
            <td>Serie</td>
        </tr>
        <tr>
            <td>NÚEMRO GANADOR</td><td></td>
            <td><?php echo "$nG1"; ?></td>
            <td><?php echo "$nG2"; ?></td>
            <td><?php echo "$nG3"; ?></td>
            <td><?php echo "$nG4"; ?></td>
            <td><?php echo "$nG5"; ?></td>
            <td><?php echo "$nG6"; ?></td>
            <td><?php echo "$serieG"; ?></td>
        </tr>
        <tr>
            <td>NÚEMRO ELEGIDO</td><td></td>
            <td><?php echo "$n1"; ?></td>
            <td><?php echo "$n2"; ?></td>
            <td><?php echo "$n3"; ?></td>
            <td><?php echo "$n4"; ?></td>
            <td><?php echo "$n5"; ?></td>
            <td><?php echo "$n6"; ?></td>
            <td><?php echo "$serie"; ?></td>
        </tr>
        </table>

</body>

</html>