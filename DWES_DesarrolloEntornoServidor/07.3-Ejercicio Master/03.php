<?php
session_start();
if (!isset($_SESSION['suma'])) {
  $_SESSION['suma'] = 0;
  $_SESSION['cuentaNumeros'] = 0;
}
if (isset($_REQUEST['n'])) {
  $_SESSION['cuentaNumeros']++;
  $_SESSION['suma'] +=  $_REQUEST['n'];
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
  <p>
    Este programa muestra la suma, el contador de los números introducidos y la media.<br>
    Vaya introduciendo números, el programa parará cuando la suma de ellos supere 10000.
  </p>
  <?php
  if ($_SESSION['suma'] <= 10000) {
  ?>
    <form action="" method="post">
      <input type="number" name="n" autofocus required="">
      <input type="submit" value="Aceptar">
    </form>
  <?php
  } else {
    echo "<br><br>Ha introducido " . $_SESSION['cuentaNumeros'] . " números.<br>";
    echo "La suma es " . $_SESSION['suma'] . "<br>";
    echo "La media es " . $_SESSION['suma'] / $_SESSION['cuentaNumeros'] . "<br>";
  }
  ?>
</body>
</html>