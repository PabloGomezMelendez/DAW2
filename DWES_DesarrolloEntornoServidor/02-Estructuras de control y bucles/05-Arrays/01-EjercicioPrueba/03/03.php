<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
      if (isset($_POST['numero'])) {
        $numeros = $_POST['numero'];
        $numerosReves=$numeros[14];
        
        foreach ($numeros as $n) {
            echo "El número $n es $n <br>";
        }
        foreach ($numeros as $n) {
        }
      }
    ?>


    <form action="Ejercicio03.php" method="post"> Introduzca un número:
        <?php
        for ($i = 0; $i < 15; $i++) {
            echo "Nuemro $i: <input type='number' name='numero[$i]' require>";
        }
        ?>


        <input type="submit" value="OK">
    </form>
</body>

</html>