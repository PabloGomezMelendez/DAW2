<?php
session_start();
require_once 'php/Coche.php';
require_once 'php/CocheLujo.php';

// Inicializar lista de coches
if (!isset($_SESSION['coches'])) {
    $_SESSION['coches'] = [];
}

// Procesar formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $matricula = $_POST['matricula'];
    $modelo = $_POST['modelo'];
    $precio = (float)$_POST['precio'];
    $tipo = $_POST['tipo'];

    if ($tipo === "lujo") {
        $suplemento = (float)$_POST['suplemento'];
        $nuevoCoche = new CocheLujo($matricula, $modelo, $precio, $suplemento);
    } else {
        $nuevoCoche = new Coche($matricula, $modelo, $precio);
    }

    $_SESSION['coches'][] = $nuevoCoche;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Coches</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        .formulario {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Gestión de Coches</h1>
    <h2 style="text-align: center;">Coche más caro: <?= Coche::masCaro() ?></h2>

    <table>
        <tr>
            <th>Matrícula</th>
            <th>Modelo</th>
            <th>Precio</th>
            <th>Suplemento</th>
        </tr>
        <?php foreach ($_SESSION['coches'] as $coche): ?>
            <?= $coche->toString() ?>
        <?php endforeach; ?>
    </table>

    <div class="formulario">
        <h2>Añadir Coche</h2>
        <form method="post">
            <label for="matricula">Matrícula:</label>
            <input type="text" id="matricula" name="matricula" required>
            <br><br>

            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" required>
            <br><br>

            <label for="precio">Precio (€):</label>
            <input type="number" id="precio" name="precio" step="0.01" required>
            <br><br>

            <label for="tipo">Tipo:</label>
            <select id="tipo" name="tipo" onchange="toggleSuplemento(this.value)">
                <option value="normal">Normal</option>
                <option value="lujo">De Lujo</option>
            </select>
            <br><br>

            <div id="suplementoContainer" style="display: none;">
                <label for="suplemento">Suplemento (€):</label>
                <input type="number" id="suplemento" name="suplemento" step="0.01">
                <br><br>
            </div>

            <button type="submit">Añadir Coche</button>
        </form>
    </div>

    <script>
        function toggleSuplemento(value) {
            document.getElementById('suplementoContainer').style.display = value === 'lujo' ? 'block' : 'none';
        }
    </script>
</body>
</html>
