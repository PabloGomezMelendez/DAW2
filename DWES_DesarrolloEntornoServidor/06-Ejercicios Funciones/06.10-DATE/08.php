<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Comparar Edad de Dos Personas</h2>

    <form method="post" action="">
        <h3>Persona 1</h3>
        <label for="nombre1">Nombre:</label>
        <input type="text" id="nombre1" name="nombre1" required>

        <label for="fecha_nacimiento1">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento1" name="fecha_nacimiento1" required>

        <h3>Persona 2</h3>
        <label for="nombre2">Nombre:</label>
        <input type="text" id="nombre2" name="nombre2" required>

        <label for="fecha_nacimiento2">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento2" name="fecha_nacimiento2" required>

        <button type="submit" name="submit" >Calcular Edad y Comparar</button>
    </form>

    <?php
    if (isset($_REQUEST['submit'])) {
        $nombre1 = $_POST['nombre1'];
        $fechaNacimiento1 = $_POST['fecha_nacimiento1'];
        $nombre2 = $_POST['nombre2'];
        $fechaNacimiento2 = $_POST['fecha_nacimiento2'];

        // Convertir las fechas a timestamps
        $timestampNacimiento1 = strtotime($fechaNacimiento1);
        $timestampNacimiento2 = strtotime($fechaNacimiento2);

        // Calcular la edad en años para cada persona
        $diferenciaSegundos1 = time() - $timestampNacimiento1;
        $edad1 = floor($diferenciaSegundos1 / (60 * 60 * 24 * 365.25));

        $diferenciaSegundos2 = time() - $timestampNacimiento2;
        $edad2 = floor($diferenciaSegundos2 / (60 * 60 * 24 * 365.25));

        // Determinar quién es mayor
        if ($timestampNacimiento1 < $timestampNacimiento2) {
            $mayor = $nombre1;
        } elseif ($timestampNacimiento2 < $timestampNacimiento1) {
            $mayor = $nombre2;
        } else {
            $mayor = "Ambos tienen la misma edad";
        }

        // Mostrar los resultados
        echo "<p>$nombre1 tiene $edad1 años.</p>";
        echo "<p>$nombre2 tiene $edad2 años.</p>";
        echo "<p>La persona mayor es: <strong>$mayor</strong>.</p>";
    }
    ?>

</body>

</html>m