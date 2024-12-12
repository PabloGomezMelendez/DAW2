<!-- @author @Pablo Gómez Meléndez  -->
<?php
if (isset($_REQUEST['cerrar'])) {
    session_destroy();
}
// Cerrar la sesión
if (!isset($_SESSION['login'])) {
    header('Location: php/Ejercicio1.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Sesiones 4</title>
</head>

<body>

    <h2>Introduce usuario para loging</h2>


    <form method="post" action="">
        <label for="usuario">Identificate:</label>
        <input type="text" id="usuario" name="usuario" autofocus required>
        <button type="submit" name="enviar">Enviar</button>
    </form>
    <?php
    //Procesar datos
    if (isset($_REQUEST['enviar'])) {
        session_start();
        $_SESSION['login'] = $_REQUEST['usuario'];
        header('Location: php/Ejercicio1.php');
    }
    session_destroy();


    ?>



</body>

</html>