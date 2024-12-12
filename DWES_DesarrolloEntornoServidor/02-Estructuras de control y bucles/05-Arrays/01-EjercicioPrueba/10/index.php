<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>¿Cuantas cartas quieres</h1>
    <form action="index.php" method="post">
        <label for="numero">Número de cartas:</label>
        <input type="number" name="numero" id="" min="1" max="40">
        <input type="submit" value="Generar Cartas">
    </form>

    <?php
    $puntosCartas = ["as" => 11, "tres" => 10, "rey" => 4, "caballo" => 3, "sota" => 2, "dos" => 0, "cuadro" => 0, "cinco" => 0, "seis" => 0, "siete" => 0, "ocho" => 0, "nueve" => 0];
    $palos = ["copas", "bastos", "oros", "espadas"];
    $numeroCarta = ["as", "dos", "tres", "cuadro", "cinco", "seis", "siete",  "sota", "caballo", "rey"];
    $cartas = [];
    $puntosTotal = 0;

    if (isset($_REQUEST['numero'])) {
        $numero = $_REQUEST['numero'];
        for ($i = 0; $i < $numero; $i++) {
            $flagCartaEsta = false;
            $auxNumero;
            $auxPalo;
            do {
                $auxNumero = $numeroCarta[rand(0, 9)];
                $auxPalo = $palos[rand(0, 3)];

                $AuxCartas =$auxNumero. " de " . $auxPalo;
            } while (in_array($AuxCartas, $cartas));
            $cartas[] = $AuxCartas;
            echo $AuxCartas . "<br>";
            $puntosTotal += $puntosCartas[$auxNumero];

        }
        echo "<br><br><br>Tus puntos totales son: ". $puntosTotal;
    }
    ?>

</body>

</html>