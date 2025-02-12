<!-- @PABLO GÓMEZ MELÉNDEZ -->
<?php

session_start();
if(isset($_POST['close_session'])){
    session_destroy();
}
if (!isset($_SESSION['user'])) {
    header('location: login.php');
} else {
    include_once "php/Email.php";
    $_SESSION['IMPORTANTE'] = Email::get_IMPORTANTE();

?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EMAIL</title>
    </head>

    <body>
        <div>
            <h1>Bienvenido @<?php echo $_SESSION['user']; ?></h1>
            <h4>Cantidad de correos IMPORTANTES: <?php echo  $_SESSION['IMPORTANTE']; ?></h4>
            </br>
            <form action="" method="post">
                <select name="receptor" id="">
                    <?php foreach ($_SESSION['usuarios'] as $user) { ?>
                        <option value="<?php echo $user; ?>">
                            <?php echo $user ?>
                        </option>
                    <?php } ?>
                </select>
            </form>

        </div>
        <div>
            <table>
                <tr>
                    <td>Listado de email</td>
                </tr>
                <tr>
                    <td>emisor</td>
                    <td>receptor</td>
                    <td>fecha</td>
                    <td>asunto</td>
                </tr>
                <?php
                  foreach ($_SESSION['emails'] as $email) {
                ?>
                <tr>
                    <td> <?php echo $email.emisor ?></td>
                    <td> <?php echo $email.receptor  ?></td>
                    <td> <?php echo $email.fecha  ?></td>
                    <td  <?php if($email.comprobarImportante){ echo "style='color: green;'" ;}?>> <?php echo $email.asusnto  ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php 
                  }
                ?>
            </table>

        </div>
        <div>
            <form action="" method="post">
                <input type="submit" name="close_session" value="Cerrar sesión" />
            </form>
        </div>
    </body>

    </html>
<?php
} //Fin bloque
?>