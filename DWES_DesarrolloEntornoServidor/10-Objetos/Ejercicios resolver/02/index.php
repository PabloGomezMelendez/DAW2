<!-- @Author Pablo Gómez Meléndez -->
<!DOCTYPE html>
<html lang="es">
<!-- Confeccionar una clase Menu, con los atributos titulo y enlace (ambos son arrays). 
 Crear los métodos necesarios que permitan añadir elementos al menú. 
 Crear los métodos que permitan mostrar el menú en forma horizontal o vertical (según que método llamemos). -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once("php/Menu.php");

    $menu = new Menu("google","https://www.google.com");

    $menu->addMenu("Mcdonal", "https://mcdonalds.es/");
    $menu->addMenu("Yahoo", "https://www.yahoo.com");
    $menu->addMenu("Amazon", "https://www.amazon.com");
    $menu->addMenu("Apple", "https://www.apple.com");
    $menu->addMenu("Facebook", "https://www.facebook.com");

    echo "<h1>Horrizontal</h1> <br/>";
    echo $menu->imprimirMenuHorrizontal();
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<h1>Vertical</h1> <br/>";
    echo $menu->imprimirMenuVertical();

    ?>

</body>

</html>