<!-- @PABLO GÓMEZ MELÉNDEZ -->
<?php
session_start();
// comprobamos el esatdo del login
if (isset($_SESSION['user'])) {
    header('location: index.php');
} else {
    // Inicializar el usuarios desde la cookie si existe
    if (isset($_COOKIE['usuarios'])) {
        $_SESSION['usuarios'] = json_decode($_COOKIE['usuarios'], true);
    } elseif (!isset($_SESSION['usuarios'])) {
        $_SESSION['usuarios'] = [];
    }
    // Auxiliar que indica que el usuario ya existe, imiicada ocultando el  mensaje
    $yaExiste = false;

    // BLOQUE USER_EXISTENTE
    if (isset($_REQUEST['login_user_existente'])) {
        $_SESSION['user'] = $_REQUEST['login_user_existente'];
        header('location: index.php');
    }

    // BLOQUE USER_NUEVO
    if (isset($_REQUEST['login_user_nuevo'])) {
        // Comprobamos si el usuario ya existe
        if (in_array($_REQUEST['user_nuevo'], $_SESSION['usuarios'])) {
            $yaExiste = true;
        } else {
            $_SESSION['user'] = $_REQUEST['user_nuevo'];
            $_SESSION['usuarios'][] = $_REQUEST['user_nuevo'];
            setcookie('usuarios', json_encode($_SESSION['usuarios']), time() + (3 * 30 * 24 * 60 * 60), "/");
            header('location: index.php');
        }
    }
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
    </head>

    <body>
        <!-- BLOQUE DE USUARIOS YA REGUISTRADO -->
        <div>
            <h1>Inicie sesión</h1>
            <form action="" method="post">
                <select name="user_existente" id="">
                    <?php foreach ($_SESSION['usuarios'] as $user) { ?>
                        <option value="<?php echo $user; ?>">
                            <?php echo $user ?>
                        </option>
                    <?php } ?>
                </select>
                <input type="submit" name="login_user_existente" value="Elegir usuario" />
            </form>
        </div>
        <!-- BLOQUE DE NUEVO USUARIO -->
        <div>
            <h1>Reguistre un usuario nuevo</h1>

            <form action="" method="post">
                <label for="user">Usuario</label>
                <input type="text" name="user_nuevo" id="">
                <input type="submit" name="login_user_nuevo" value="Elegir usuario" />
            </form>
        </div>
        <!-- BLOQUE MENSAJE AL USUARIO DE 'YA REGUISTRADO' -->
        <?php
        if ($yaExiste) {
        ?>
            <div>
                <h3 style="color: red;">Ese nombre de usuario ya esta reguistrado</h3>
            </div>
        <?php
        }
        ?>

    </body>

    </html>
<?php
} // end process
?>