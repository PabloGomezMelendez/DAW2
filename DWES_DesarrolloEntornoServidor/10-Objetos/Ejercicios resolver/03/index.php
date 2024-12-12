<!-- @Author Pablo Gómez Meléndez -->
<!DOCTYPE html>
<html lang="es">
<!-- Crear una clase cubo que contenga información sobre la capacidad y su contenido actual en litros.
  Se podrá consultar tanto la capacidad como el contenido en cualquier momento.
  Dotar a la clase de la capacidad de verter el contenido de un cubo en otro 
  (hay que tener en cuenta si el contenido del cubo origen cabe en el cubo destino, si no cabe, se verterá solo el contenido que quepa).
  Hacer una página principal para probar el funcionamiento con un par de cubos. -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once("php/Cubo.php");

    $cubo1 = new Cubo(100);
    $cubo2 = new Cubo(500,100);
    echo "Cubo 1: Capacidad: ". $cubo1->getCapacidad(). " litros, Contenido: ". $cubo1->getContenido(). " litros.<br>";
    echo "Cubo 2: Capacidad: ". $cubo2->getCapacidad(). " litros, Contenido: ". $cubo2->getContenido(). " litros.<br>";

    $cubo1->setContenido(50);
    echo "Cubo 1: Capacidad: ". $cubo1->getCapacidad(). " litros, Contenido: ". $cubo1->getContenido(). " litros.<br>";
    echo "Cubo 2: Capacidad: ". $cubo2->getCapacidad(). " litros, Contenido: ". $cubo2->getContenido(). " litros.<br>";
    
    $cubo1->verterEn($cubo2);
    echo "Cubo 1: Capacidad: ". $cubo1->getCapacidad(). " litros, Contenido: ". $cubo1->getContenido(). " litros.<br>";
    echo "Cubo 2: Capacidad: ". $cubo2->getCapacidad(). " litros, Contenido: ". $cubo2->getContenido(). " litros.<br>";



    ?>

</body>

</html>