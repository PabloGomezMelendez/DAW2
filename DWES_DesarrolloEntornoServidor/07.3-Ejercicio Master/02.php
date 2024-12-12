<?php
session_start(); 
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
    Este programa nos dice cuántos números se han introducido, la media de los
    impares y el mayor de los pares.<br>
    Vaya introduciendo números (puede parar introduciendo un número negativo).
</p>
<?php
if (!isset( $_SESSION['cuentaNumeros'])) {
  $_SESSION['sumaImpares'] = 0;
  $_SESSION['cuentaImpares'] = 0;
  $_SESSION['cuentaNumeros']=0;
  $_SESSION['mayorPar']=PHP_INT_MIN;
}
if ( isset( $_REQUEST['n']) &&  $_REQUEST['n']>0) {
  $_SESSION['cuentaNumeros']++;
  $n=$_REQUEST['n'];
  if (($n % 2) == 0) { // Par
    if ($n > $_SESSION['mayorPar']) {
      $_SESSION['mayorPar'] = $n;
    }
  } else { // Impar
    $_SESSION['sumaImpares'] += $n;
    $_SESSION['cuentaImpares']++;
  }
}
if ( isset( $_REQUEST['n']) && $_REQUEST['n']<0) {
  echo "<br><br>Ha introducido " . $_SESSION['cuentaNumeros'] . " números.<br>";
  echo "La media de los impares es " . $_SESSION['sumaImpares'] / $_SESSION['cuentaImpares'] . "<br>";
  echo "El mayor de los pares es " . $_SESSION['mayorPar'] . "<br>";
}else {
  ?>
  <form action="" method="post">
    <input type="number" name="n" autofocus>
    <input type="submit" value="Aceptar">
  </form>
  <?php
}
?>
</body>
</html>