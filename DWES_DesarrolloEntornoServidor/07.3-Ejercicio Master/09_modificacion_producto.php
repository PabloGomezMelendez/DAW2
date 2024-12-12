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
      <h1> La tienda de plumas estilográficas </h1>
    </div>

    <div id="content">
      <h3>Modificación</h3>
      <hr>
      <?php
      $elemento = $_SESSION['producto'][$_POST['codigo']];
      ?>
      <form action="09_admin_productos.php" method="post">
        Código: <input type="text" name="codigo" readonly="" value="<?= $_POST['codigo'] ?>"><br>
        Nombre: <input type="text" name="nombre" autofocus="" value="<?= $elemento['nombre'] ?>"><br>
        Precio: <input type="number" step="0.01" name="precio" value="<?= $elemento['precio'] ?>"><br>
        Detalle: <textarea name="detalle" rows="5" cols="100" value="<?= $elemento['detalle'] ?>"><?= $elemento['detalle'] ?></textarea><br>
        Imagen: <input type="text" name="imagen" value="<?= $elemento['imagen'] ?>"><br>
        <input type="hidden" name="accion" value="Modificar">
        <input type="submit" value="Modificar">
      </form>
      <br><br>
      <a href="09_admin_productos.php">>> Volver</a>
    </div>
    <div id="footer">
      Ejercicios de php
    </div>
  </div>
</body>

</html>