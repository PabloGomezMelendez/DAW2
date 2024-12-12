<!-- @author Pablo Gómez Meléndez -->
<?php
session_start();

$extras = ["Camera trasera", "llantas de alecion", "climatizador"];
$tipos = [
    "turismo",
    "deportivo",
    "berlinga",
    "monovolumen",
    "furgoneta"
];
function generar_matricula($marca)
{
    $letras = substr($marca, -3);
    $numeros = rand(100, 999);
    return  $numeros . '-' . $letras;
}

if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = [];
}



// Crear un array de productos al iniciar una nueva sesión
if (isset($_REQUEST['AddCarrito'])) {
    $contadorMatriculas = generar_matricula($_REQUEST['marca']);
    $fechaAñadido = date('l - d/m/Y');
    $_SESSION['carrito'][] = [$contadorMatriculas => [
        'fecha' => $fechaAñadido,
        'tipo' => $_REQUEST['tipo'],
        'marca' => $_REQUEST['marca'],
        'extras' => $_REQUEST['extrasAdd']
    ]];
    
}
if(isset($_REQUEST['borrar'])) {
    session_destroy();
    setcookie("carrito", "", time() - 3600);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        img {
            width: 100px;
            height: auto;
            cursor: pointer;
        }
    </style>
</head>

<body>

<!-- Formulario añadir elementos -->
    <form action="" method="post">
        <label>Marca:</label>
        <input type="text" name="marca" required>
        <select name="tipo" id="tipo">
        <?php foreach ($tipos as $tipo): ?>
            <option value="<?= $tipo ?>"><?= $tipo ?></option>
        <?php endforeach; ?>
        </select><br>
        <label for="extras">EXTRAS:</label><br>
        <?php foreach ($extras as $extra): ?>
            <input type="checkbox" name="extrasAdd[]" value="<?= $extra ?>"><?= $extra ?><br>
        <?php endforeach; ?>
        <input type="submit" value="AÑADIR" name="AddCarrito"></input>
    </form>

    <br><br>

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
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="codigo" value="<?php echo $maticula?>">
                        <input type="text" value="" name="extrasPlus">
                        <input type="submit" value="Añadir extra" name="extraTabla"></input>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br><br>


    <!-- Consulta de los tipos de elementos  -->
    <form action="php/consulta.php" method="post">
        <label for="selectTipoVehivulo">Seleciona una categoría para ver los coches vehiculo:</label>
        <select name="tipo" id="tipo">
        <?php foreach ($tipos as $tipo): ?>
            <option value="<?= $tipo ?>"><?= $tipo ?></option>
        <?php endforeach; ?>
        </select><br>
        <input type="submit" value="Consultar"></input>
    </form>

    <br><br>

    <!-- Borrar elementos del carrito -->
     <form action="" method="post">
        <input type="submit" value="Borrar" name="borrar"></input>
    </form>


</body>

</html>