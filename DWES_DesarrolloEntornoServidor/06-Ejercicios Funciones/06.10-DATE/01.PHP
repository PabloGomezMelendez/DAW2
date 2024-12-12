<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="01.PHP">
        <label for="dia">Día:</label>
        <input type="text" name="dia" id="dia" value="" require><br>

        <label for="mes">Mes:</label>
        <input type="text" name="mes" id="mes" value="" require><br>


        <label for="anio">Año:</label>
        <input type="text" name="anio" id="anio" value="" require><br>


        <label for="formato">Formato de fecha:</label>
        <select name="formato" id="formato" require>
            <option value="d-m-Y">dd-mm-yyyy</option>
            <option value="m/d/Y">mm/dd/yyyy</option>
            <option value="Y.m.d">yyyy.mm.dd</option>
            <option value="d de F de Y">dd de Mes de yyyy</option>
            <option value="D, d M Y">Día corto, dd Mes abreviado yyyy</option>
            <option value="l, jS F Y">Día completo, día con sufijo Mes yyyy</option>
            <option value="Y-M-d H:i:s">yyyy-Mes abreviado-dd hh:mm:ss</option>
        </select><br><br>

        <button type="submit" name="enviar">Validar Fecha</button>
    </form>

    <?php
    if (isset($_REQUEST['enviar'])) {
        $dia = $_REQUEST['dia'];
        $mes = $_REQUEST['mes'];
        $anio = $_REQUEST['anio'];
        $formato = $_REQUEST['formato'];
        $fecha;
        $error = false;

        if (checkdate($mes, $dia, $anio)) {
            // echo "La fecha es válida";
            // $fecha = $mes.'/'.$dia.'/'.$anio;
            $fecha= mktime(0,0,0,$dia,$mes,$anio );
            $error = false;
        } else {
            // echo "La fecha no es válida";
            $error = true;
        }
        if (!$error) {
            $auxFehca = date($formato, $fecha);
            echo "<br>Formato de fecha: " . $auxFehca;
        } else {
            echo "<br>Formato de fecha: No se ha seleccionado ningún formato";
        }
    }
    ?>



</body>

</html>