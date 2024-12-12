<!-- PABLO GÓMEZ MELÉNDEZ -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<!-- 
Realizar una página web para realizar pedidos de comida rápida.
 Tenemos varios tipos de comida: 
 Pizza: jamon, atun, bacon, pepperoni; 
 Hamburguesa: lechuga, tomate, queso; 
 Perrito caliente: lechuga, cebolla, patata; etc 
 (la carta con todas las comidas y sus ingredientes estará almacenada en un array).
 A través de formularios distintos, uno para cada tipo de comida se va añadiendo comida al pedido con 
 sus respectivos ingredientes, hasta que se pulse el botón finalizar pedido (en otro formulario), 
 con lo que se mostrará el pedido completo en una tabla, con toda la comida y los ingredientes 
 seleccionados de cada una. Usa la función serialize() y unserialize() para pasar arrays como 
 cadenas Nota: con arrays de 2 dimensiones la serialización se corrompe, así que hay que usar 
 la función en combinación con otra de la siguiente forma:
$cadenaTexto=base64_encode(serialize($array)); $array=unserialize(base64_decode($cadenaTexto));
-->

<body>


    <?php
    $menu = [
        'Pizza' => ['Jamon', 'Atun', 'Bacon', 'Pepperoni'],
        'Hamburguesa' => ['Lechuga', 'Tomate', 'Queso'],
        'kebat' => ['Lechuga', 'salsa', 'Tomate', 'Queso'],
        'Perrito Caliente' => ['Lechuga', 'Cebolla', 'Patata'],
    ];
    // Recuperar el pedido actual desde la URL o iniciar uno nuevo
    if (isset($_REQUEST['pedido'])) {
        // Recuperar el pedido serializado y decodificado
        $pedido = unserialize(base64_decode($_REQUEST['pedido']));

        // Si se ha añadido algo al pedido, lo agregamos
        if (isset($_REQUEST['comida']) && isset($_REQUEST['ingredientes'])) {
            $comida = $_REQUEST['comida'];
            $ingredientes = $_REQUEST['ingredientes'];
            // Guardar en el pedido los alimentos con sus ingredientes
            $pedido[] = [
                'comida' => $comida,
                'ingredientes' => $ingredientes,
            ];
        }
    } else {
        // Iniciar un nuevo pedido vacío
        $pedido = [];
    }

    // Convertir el array en una cadena para pasarla por la URL
    $pedidoCodificado = base64_encode(serialize($pedido));
    ?>

    <!-- FORMULARIO PARA AÑADIR PEDIDOS -->
    <div class="titulo">
        <img src="img/pollos hermanos.png" alt="logo_pollo_hermanos">
        <h1>Hello, and welcome to the Los Pollos Hermanos family! My name is Gustavo, but you can call me Gus.</h1>
        <img src="img/pollos hermanos.png" alt="logo_pollo_hermanos">
    </div>
    <div class="comidas">
        <?php
        foreach ($menu as $comida => $ingredientes): ?>
            <h2><?= $comida ?></h2>
            <form action="" method="post">
                <input type="hidden" name="comida" value="<?= $comida ?>">
                <label>Selecciona los ingredientes:</label><br>
                <?php foreach ($ingredientes as $ingrediente): ?>
                    <input type="checkbox" name="ingredientes[]" value="<?= $ingrediente ?>"><?= $ingrediente ?><br>
                <?php endforeach; ?>
                <br>
                <input type="submit" value="Añadir <?= $comida ?> al pedido">
                <input type="hidden" name="pedido" value="<?= $pedidoCodificado ?>">
            </form>
        <?php endforeach; ?>
    </div>

    <div class="pedidos">
        <h2>Finalizar Pedido</h2>
        <form action="" method="post">
            <input type="hidden" name="comida" value="Finalizar Pedido">
            <input type="submit" value="Finalizar Pedido">
            <input type="hidden" name="pedido" value="<?= $pedidoCodificado ?>">
        </form>

        <!-- TABLA PARA MOSTRAR EL PEDIDO -->
        <h1>Tu Pedido</h1>
        <table>
            <tr>
                <th>Comida</th>
                <th>Ingredientes</th>
            </tr>
            <?php foreach ($pedido as $item): ?>
                <tr>
                    <td><?= $item['comida'] ?></td>
                    <td>
                        <?php foreach ($item['ingredientes'] as $ingrediente): ?>
                            <?= $ingrediente ?>,&nbsp;
                        <?php endforeach; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>




</body>

</html>