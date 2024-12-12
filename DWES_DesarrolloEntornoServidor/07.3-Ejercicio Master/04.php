<?php
  if (session_status() == PHP_SESSION_NONE) session_start();
  //Si se recibe el parámetro cerrar, destruimos la sesion y refrescamos
  if (isset($_POST['cerrar'])) {
    session_destroy();
    header("Refresh: 0");
  }
  // Formulario de login
  // Comprueba nombre de usuario y contraseña
  if (isset($_POST['usuario'])) {
    if (($_POST['usuario'] == "papi") && ($_POST['contrasena'] == "chulo")) {
      $_SESSION['user'] = $_POST['usuario'] ;
      header("location: 01-acceso.php"); // redirige a la página del ejercicio1
    } else {
      echo '<span style="color: red">Contraseña incorrecta. Inténtelo de nuevo.</span><br><br>';
      //header("Refresh: 3; url=pagina.php?ejercicio=04"); // recarga la página
    }
  } elseif (isset($_SESSION['user'])) {
    header('location: 01-acceso.php');
  }
  ?>
  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <p>Debe iniciar sesión para acceder a la aplicación del ejercicio 1.</p>
    <form action="" method="post">
    <input type="hidden" name="ejercicio" value="04">
    Usuario: <input type="text" name="usuario" autofocus><br>
    Contraseña: <input type="password" name="contrasena"><br><br>
    <input type="submit" value="Iniciar sesión">
  </form>
  </body>
  </html>