<?php
session_start(); 
if (!isset($_SESSION['user'])) {
    header('location:04.php');
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
    Este programa calcula la media de los números positivos introducidos.<br>
    Vaya introduciendo números (puede parar introduciendo un número negativo).
  </p>
  <?php
if (!isset( $_SESSION['total'])) {
  $_SESSION['total']=0;
  $_SESSION['cuentaNumeros']=0;
}
if ( isset( $_REQUEST['n']) &&  $_REQUEST['n']>0) {
  $_SESSION['cuentaNumeros']++;
  $_SESSION['total'] +=  $_REQUEST['n'];
}
if ( isset( $_REQUEST['n']) && $_REQUEST['n']<0) {
  ?>
  <p>
    La media de los números introducidos es <?php echo $_SESSION['total'] / ($_SESSION['cuentaNumeros']); ?>
  </p>
  <?php
}else {
  ?>
  <form action="" method="post">
    <input type="hidden" name="ejercicio" value="01">
    <input type="number" name="n" autofocus>
    <input type="submit" value="Aceptar">
  </form>   
  <?php
}
?>
<br>
<form action="04.php" method="post">
    <input type="submit" name="cerrar" value="Cerrar Sesion">
</form>
</body>
</html>