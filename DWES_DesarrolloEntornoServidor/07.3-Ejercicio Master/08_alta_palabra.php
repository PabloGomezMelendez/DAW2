<?php if (session_status() == PHP_SESSION_NONE) session_start();?>
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
      <h3>Nueva palabra</h3>
      <hr>
      <form action="08_admin_palabras.php" method="post">
        Español: <input type="text" name="espanol" autofocus=""><br>
        Inglés: <input type="text" name="ingles"><br>
        <input type="submit" name="accion" value="Alta">
      </form>
      <br><br>
      <br><br>
      <a href="08_admin_palabras.php">>> Volver</a>
    </div>
  </div>
</body>

</html>