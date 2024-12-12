<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="default.css" rel="stylesheet" type="text/css" />
</head>

<body>



    <div id="content">
        <?php
        $horasTrabajadas  = $_POST['horasTrabajadas'];

        if ($horasTrabajadas  < 40) {
            $sueldoSemanal = 12 * $horasTrabajadas;
        } else {
            $sueldoSemanal = (40 * 12) + (($horasTrabajadas  - 40) * 16);
        }

        echo "El sueldo semanal que le corresponde es de $sueldoSemanal euros";
        ?>
        <br><br>
        <a href="index.php">>> Volver</a>
    </div>




</body>

</html>