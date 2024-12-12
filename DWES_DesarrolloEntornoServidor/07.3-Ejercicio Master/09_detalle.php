<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link href="css/default.css" rel="stylesheet" type="text/css" />
  <title>Soluciones a los ejercicios - 7. Sesiones y cookies</title>
</head>

<body>
  <div id="container">
    <div id="header">
      <h1>
        La tienda de plumas estilográficas
      </h1>
    </div>

    <div id="content">

      <h3>Detalle del producto</h3>
      <hr>
      <?php
      $codigo = $_REQUEST['codigo'];
      $elemento = $_SESSION['producto'][$codigo];
      // echo var_dump($_SESSION);
      ?>
      <img src="img/<?= $elemento['imagen'] ?>" width="360" border="1"><br>
      <?= $elemento['nombre'] ?><br>Precio: <?= $elemento['precio'] ?> €
      Unidades en el carrito:
      <?php
      echo (isset($_SESSION['carrito'][$codigo])) ? $_SESSION['carrito'][$codigo] : "0";
      ?>
      <br><?= $elemento['detalle'] ?>
      <form action="09.php" method="post">
        <input type="hidden" name="codigo" value="<?= $codigo ?>">
        <input type="hidden" name="accion" value="comprar">
        <input type="submit" value="Comprar">
      </form>
      <form action="09.php" method="post">
        <input type="submit" value="Volver a la tienda">
      </form>
      <br><br>
      <div id="footer">
        Ejercicios de php
      </div>
    </div>
</body>

</html>