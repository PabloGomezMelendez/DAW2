<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Lotería Primitiva</title>
    <style>
        .acierto {
            color: green;
        }

        .no-acierto {
            color: black;
        }

        .ganadora {
            color: red;
        }

        .resto {
            color: grey;
        }
    </style>
</head>

<body>
    <h1>Lotería Primitiva</h1>
    <form method="post">
        <table>
            <?php
            // Generar el boleto de bingo con checkboxes
            for ($i = 1; $i <= 49; $i++) {
                echo "<input type='checkbox' name='numeros[]' value='$i'> $i ";
                if ($i % 7 == 0) echo "<br>";
            }
            ?>
        </table>
        <br>
        Número de serie: <input type="text" name="numero_serie">
        <br><br>
        <input type="submit" name="jugar" value="Jugar">
    </form>

    <?php
    if (isset($_POST['jugar'])) {
        // Generar combinación ganadora
        $ganadora = [];
        while (count($ganadora) < 6) {
            $num = rand(1, 49);
            if (!in_array($num, $ganadora)) {
                $ganadora[] = $num;
            }
        }
        $numero_serie_ganador = rand(1000, 9999);

        // Mostrar combinación ganadora
        echo "<h2>Combinación Ganadora</h2>";
        echo "<table border='1'><tr>";
        foreach ($ganadora as $num) {
            echo "<td>$num</td>";
        }
        echo "</tr></table>";
        echo "Número de serie ganador: $numero_serie_ganador<br><br>";

        // Calcular aciertos
        $aciertos = 0;
        $numeros_usuario = isset($_POST['numeros']) ? $_POST['numeros'] : [];
        foreach ($numeros_usuario as $num) {
            if (in_array($num, $ganadora)) {
                $aciertos++;
            }
        }

        // Mostrar resultados
        echo "<h2>Resultados</h2>";
        if (count($numeros_usuario) > 6) {
            echo "¡Has hecho trampas! Has seleccionado más de 6 números.";
        } else {
            echo "<table border='1'><tr>";
            for ($i = 1; $i <= 49; $i++) {
                $class = "resto";
                if (in_array($i, $ganadora) && in_array($i, $numeros_usuario)) {
                    $class = "acierto";
                } elseif (in_array($i, $numeros_usuario)) {
                    $class = "no-acierto";
                } elseif (in_array($i, $ganadora)) {
                    $class = "ganadora";
                }
                echo "<td class='$class'>$i</td>";
                if ($i % 7 == 0) echo "</tr><tr>";
            }
            echo "</tr></table>";

            echo "Has tenido $aciertos aciertos.<br>";
            $premio = 0;
            if ($aciertos == 4) {
                $premio = 10; // Dinero vuelto
            } elseif ($aciertos == 5) {
                $premio = 30;
            } elseif ($aciertos == 6) {
                $premio = 100;
            }
            if ($_POST['numero_serie'] == $numero_serie_ganador) {
                $premio += 500;
                echo "¡Has acertado el número de serie!<br>";
            }
            echo "Has ganado $premio euros.";
        }
    }
    ?>
</body>

</html>