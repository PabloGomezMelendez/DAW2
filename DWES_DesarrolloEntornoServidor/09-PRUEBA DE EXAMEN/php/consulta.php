<!-- @author Pablo Gómez Meléndez -->
<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar tipo <?php $_REQUEST['tipo']    ?>
    </title>
</head>
<body>
       <!-- Visualizador de elemetnos en el carrito -->
       <table>
        <tr>
            <td>Matricula</td>
            <td>Fecha</td>
            <td>Marca</td>
            <td>Tipo</td>
            <td>Extras</td>

        </tr>
        <?php foreach ($_SESSION['carrito'] as $maticula => $datos): ?>
            <tr>
                <td><?php echo $maticula ?></td>
                <td><?php echo $datos['fecha'] ?></td>
                <td><?php echo $datos['marca'] ?></td>
                <td><?php echo $datos['tipo'] ?></td>
                <td><?php
                    foreach ($datos['extras'] as $elemento) {
                        echo $elemento, "<br>";
                    }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>