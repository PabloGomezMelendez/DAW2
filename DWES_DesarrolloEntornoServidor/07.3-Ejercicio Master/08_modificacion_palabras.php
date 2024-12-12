<?php if (session_status() == PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link href="css/default.css" rel="stylesheet" type="text/css" />
  <title>Soluciones a los ejercicios - 7. Sesiones y cookies</title>
</head>

<body>
  <div id="container">
    <div id="content">
      <h3>Modificación</h3>
      <hr>
      <?php
      $espanol = $_POST['espanol'];
      $ingles = $_SESSION['diccionario'][$espanol];
      ?>
      <form action="pagina.php" method="post">
        <input type="hidden" name="ejercicio" value="08_admin_palabras">
        Español: <input type="text" name="espanol" value="<?= $espanol ?>" readonly="readonly"><br>
        Inglés: <input type="text" name="ingles" value="<?= $ingles ?>" autofocus=""><br>
        <input type="submit" name="accion" value="Modificar">
      </form>
      <br><br>
      <a href="08_admin_palabras.php">>> Volver</a>
    </div>
  </div>
</body>

</html>