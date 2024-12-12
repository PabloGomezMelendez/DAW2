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
    <h3>Administración de productos</h3><hr>
<?php
  echo "<hr>";
  if (isset($_POST['accion']) && ($_POST['accion'] == "Alta" || $_POST['accion'] == "Modificar")) {
    $_SESSION['producto'][$_POST['codigo']] = [
        "nombre" => $_POST['nombre'],
        "precio" => $_POST['precio'],
        "imagen" => $_POST['imagen'],
        "detalle" => $_POST['detalle']
    ];
    setcookie("producto", serialize($_SESSION['producto']), time() + 365 * 24 * 3600);
  }
  //Si recibimos accion eliminar borramos el producto del array (y de la cesta si está) y actualizamos cookie
  if(isset($_POST['accion']) && $_POST['accion'] == "Eliminar") {
    unset($_SESSION['producto'][$_POST['codigo']]);
    if (isset($_SESSION['carrito'][$_POST['codigo']])) {
      unset ($_SESSION['carrito'][$_POST['codigo']]);
    }
    setcookie("producto", serialize($_SESSION['producto']), time() + 365 * 24 * 3600);
  }
  echo "<table>";
  foreach ($_SESSION['producto'] as $codigo => $elemento) {
  ?>
    <tr><td>
    <img src="img/<?= $elemento['imagen'] ?>" width="300" border="1"><br>
    <?= $elemento['nombre'] ?><br>Precio: <?= $elemento['precio'] ?> €
    </td>
    <td><?= $elemento['detalle'] ?></td>
    <td>
    <form action="" method="post">
      <input type="hidden" name="codigo" value="<?= $codigo ?>">
      <input type="hidden" name="accion" value="Eliminar">
      <input type="submit" value="Eliminar">
    </form>
    <form action="09_modificacion_producto.php" method="post">
      <input type="hidden" name="codigo" value="<?= $codigo ?>">
      <input type="hidden" name="accion" value="Modificar">
      <input type="submit" value="Modificar">
    </form>
    </td>
    </tr>
  <?php
  }
  ?>
  </table>
  <hr><table><tr>
  <td>
  <form action="09_alta_producto.php" method="post">
    <input type="submit" value="Añadir nuevo producto">
  </form>
  </td>
  <td>
  <form action="09.php" method="post">
    <input type="hidden" name="accion" value="borrarCookies">
    <input type="submit" value="Inicializar a productos por defecto">
  </form>
  </td>
  <td>
  <form action="09.php" method="post">
    <input type="submit" value="Regresar a la tienda">
  </form>
  </td>
  </tr></table>
      <br><br>
      <div id="footer">
        Ejercicios de php
      </div>
    </div>
</body>
</html>
