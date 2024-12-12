<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Adivina el número</h1>
    <?php
    // variables globales
    $numero1S = rand(0, 9);
    $numero2S = rand(0, 9);
    $numero3S = rand(0, 9);
    $numero4S = rand(0, 9);
    $numeroPin = $numero1S . $numero2S . $numero3S . $numero4S;
    $auxPIN = 3333;
    $numeroOportunidades;

    // control de primera accion
    if (!(isset($_REQUEST['numero1']) && isset($_REQUEST['numero2']) && isset($_REQUEST['numero3']) && isset($_REQUEST['numero4']))) {
        $numeroOportunidades = 3;
    ?>

        <?php
    } else {
        $numero1 = $_REQUEST['numero1'];
        $numero2 = $_REQUEST['numero2'];
        $numero3 = $_REQUEST['numero3'];
        $numero4 = $_REQUEST['numero4'];
        $numeroIntento = $numero1 . $numero2 . $numero3 . $numero4;

        if ($numeroIntento == $auxPIN) {
            echo "<h1>Has desbloqueado el dispositivo</h1>";
        } else {
            echo "<h1>Has fallado la contraseña</h1>";
            $numeroOportunidades--;
            if ($numeroOportunidades == 0) {
                echo "<h1>Has agotado las oportunidades, intentalo más tarde</h1>";
            } else {
                echo "<p>Te quedan $numeroOportunidades oportunidades</p>";
            }
        }

        if ($numeroOportunidades > 0) {
        ?>
            <p>El número de oportunidades es: <?php echo $numeroOportunidades; ?></p>
            <form action="02.php" method="post">
                <label for="">Número 1</label>
                <input type=" number" name="numero1" id="" maxlength="1" require><br>
                <label for="">Número 2</label>
                <input type=" number" name="numero2" id="" maxlength="1" require><br>
                <label for="">Número 3</label>
                <input type=" number" name="numero3" id="" maxlength="1" require><br>
                <label for="">Número 4</label>
                <input type=" number" name="numero4" id="" maxlength="1" require><br>

                <input type="submit" value="Aceptar">
            </form>
    <?php
        }
    }
    ?>
</body>

</html>