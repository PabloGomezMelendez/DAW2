<?php
if (isset($_REQUEST['cantidad'])) {
    $moneda = $_REQUEST['moneda'];
    $cantidad = $_REQUEST['cantidad'];
    $parametos = '?moneda=' . $moneda . '&cantidad=' . $cantidad;
    $response = file_get_contents("http://localhost//DWES/14-Servicios/01-Ejercicios/02-Ejercicios_12.7/01-/servicio.php" . $parametos);
    echo json_decode($response);
    
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="get">
        <label for="moneda">Monedas:</label>
        <select name="moneda" id="moneda">
            <option value="euro">Euro</option>
            <option value="peseta">Peseta</option>
        </select>

        <label for="cantidad">Cantidad</label>
        <input type="number" name="cantidad" id="cantidad">
        <input type="submit" value="Enviar">
    </form>


</body>

</html>