<!-- @Author Pablo Gómez Meléndez -->
<!DOCTYPE html>
<html lang="es">
<!-- Confeccionar una clase Empleado con los atributos nombre y sueldo.
Definir un método “asigna” que reciba como dato el nombre y sueldo y actualice los atributos 
(debe comprobar que el nombre recibido coincide con el atributo nombre y si es así actualiza el atributo sueldo con el sueldo recibido).
Plantear un segundo método que imprima el nombre y un mensaje si debe o no pagar impuestos 
(si el sueldo supera a 3000 paga impuestos). -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once("php/Empleado.php");

    $empleado1 = new Empleado(1462, "Pablo");
    $empleado2 = new Empleado();

    $empleado1->asigna("Pablo", 3001);

    echo $empleado1->getNombre() . " " . $empleado1->getSueldo() . "<br/>";

    echo $empleado1->pagarImpuestos() . "<br/>";

    echo $empleado2->getNombre() . " " . $empleado2->getSueldo() . "<br/>";

    echo $empleado2->pagarImpuestos() . "<br/>";

    ?>

</body>

</html>