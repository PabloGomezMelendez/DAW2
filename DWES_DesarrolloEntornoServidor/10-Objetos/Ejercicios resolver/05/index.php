<!-- @Author Pablo Gómez Meléndez -->
<!-- @Date 2022-02-20 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <?php
    require_once 'Animales.php';

    // Instancias
    $gato = new Gato("Michi");
    $perro = new Perro("Rex");
    $canario = new Canario("Piolín");
    $pinguino = new Pinguino("Pingu");
    $lagarto = new Lagarto("Lizo");

    // Pruebas
    echo "<h1>Acciones de los Animales</h1>";

    echo "<h2>Gato</h2>";
    echo "<p>" . $gato->maullar() . "</p>";
    echo "<p>" . $gato->trepar() . "</p>";
    echo "<p>" . $gato->ronronear() . "</p>";

    echo "<h2>Perro</h2>";
    echo "<p>" . $perro->ladrar() . "</p>";
    echo "<p>" . $perro->jugar() . "</p>";
    echo "<p>" . $perro->olfatear() . "</p>";

    echo "<h2>Canario</h2>";
    echo "<p>" . $canario->volar() . "</p>";
    echo "<p>" . $canario->cantar() . "</p>";
    echo "<p>" . $canario->ponerHuevos() . "</p>";

    echo "<h2>Pinguino</h2>";
    echo "<p>" . $pinguino->volar() . "</p>";
    echo "<p>" . $pinguino->nadar() . "</p>";
    echo "<p>" . $pinguino->deslizar() . "</p>";

    echo "<h2>Lagarto</h2>";
    echo "<p>" . $lagarto->tomarSol() . "</p>";
    echo "<p>" . $lagarto->reptar() . "</p>";
    echo "<p>" . $lagarto->regenerarCola() . "</p>";
    ?>

</body>

</html>