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
    <div id="header">
      <h1>
        La tienda de plumas estilográficas
      </h1>
    </div>

    <div id="content">
      <h3 style="text-align: center">Tienda on-line <b><i><u>La Estilográfica</u></i></b></h3>
      <table style="border: 2px; margin: 0px 30px 0px 30px;">
        <tr>
          <td>
            <h3>Productos</h3>
            <hr>
            <?php // Tienda ///////////////////////////////////////////////////////

            // Borrado de cookies y variables
            if (isset($_POST['accion']) && $_POST['accion'] == "borrarCookies") {
              setcookie("producto", NULL, -1);
              // unset($_COOKIE['producto']); //si hicieramos esto no haría falta recargar la página
              unset($_SESSION['producto']);
              unset($_SESSION['carrito']);
              header("Location: 09.php");
            }

            if (isset($_COOKIE['producto'])) {
              $_SESSION['producto'] = unserialize($_COOKIE['producto']);
            } else {
              $_SESSION['producto'] = [
                  "peli1000" => ["nombre" => "Pelikan Souvëran M-1000","precio" => 545,"imagen" => "pelikan.jpg","detalle" => "Plumín de oro 18K.  Émbolo de bronce. Fabricación alemana. Excelentes acabados."],
                  "parkduo" => ["nombre" => "Parker Duofold International","precio" => 406,"imagen" => "parkerduo.jpg","detalle" => "Plumín de oro 18K. Fabricada en Reino Unido. Cuerpo en resina de alta resistencia."],
                  "viscvan" => ["nombre" => "Visconti Van Gogh","precio" => 180,"imagen" => "visconti.jpg","detalle" => "Diseño y acabados de lujo. Cuerpo fabricado en Italia. Plumín alemán."],
                  "waterexp" => ["nombre" => "Waterman Expert","precio" => 103.55,"imagen" => "waterman.jpg","detalle" => "Excelente pluma de uso diario. Fabricada en Francia. Plumín de acero."]
                ];
              setcookie("producto", serialize($_SESSION['producto']), strtotime("+1 year"));
            }

            foreach ($_SESSION['producto'] as $codigo => $elemento) {
            ?>
              <img src="img/<?= $elemento['imagen'] ?>" width="360" border="1"><br>
              <?= $elemento['nombre'] ?><br>Precio: <?= $elemento['precio'] ?> €
              <form action="09_detalle.php" method="post">
                <input type="hidden" name="codigo" value="<?= $codigo ?>">
                <input type="submit" value="Detalle">
              </form>
              <form action="" method="post">
                <input type="hidden" name="codigo" value="<?= $codigo ?>">
                <input type="hidden" name="accion" value="comprar">
                <input type="submit" value="Comprar">
              </form><br><br>
            <?php
            }
            ?>

          </td>
          <td>
            <h3>Carrito</h3>
            <hr>

            <?php // Carrito ///////////////////////////////////////////////////////
            if (isset($_POST['accion'])) {
              $accion = $_POST['accion'];
              $codigo = $_POST['codigo'];
            } else {
              $accion = "";
            }

            // Inicializa el carrito la primera vez
            if (!isset($_SESSION['carrito'])) {
              // $_SESSION['carrito'] = array ("peli1000" => 0, "parkduo" => 0, "viscvan" => 0, "waterexp" => 0);
              $_SESSION['carrito'] = [];
            }

            if ($accion == "comprar") {
              if (isset($_SESSION['carrito'][$codigo])) {
                $_SESSION['carrito'][$codigo]++;
              } else {
                $_SESSION['carrito'][$codigo] = 1;
              }
            }

            if ($accion == "eliminar") {
              // $_SESSION['carrito'][$codigo] = 0;
              unset($_SESSION['carrito'][$codigo]);
            }

            // Muestra el contenido del 'carrito'
            $total = 0;
            foreach ($_SESSION['carrito'] as $cod => $cantidad) {
              $total = $total + ($cantidad * $_SESSION['producto'][$cod]['precio']);
            ?>
              <img src="img/<?= $_SESSION['producto'][$cod]['imagen'] ?>" width="200" border="1"><br>
              <?= $_SESSION['producto'][$cod]['nombre'] ?><br>Precio: <?= $_SESSION['producto'][$cod]['precio'] ?> €<br>
              Unidades: <?= $cantidad ?>
              <form action="" method="post">
                <input type="hidden" name="codigo" value="<?= $cod ?>">
                <input type="hidden" name="accion" value="eliminar">
                <input type="submit" value="Eliminar">
              </form><br><br>
            <?php
            }
            ?>
            <b>Total: <?= $total ?> €</b>
          </td>
        </tr>
      </table>
      <form action="09_admin_productos.php" method="post">
        <input type="submit" value="Administrar los productos">
      </form>
      <br><br>
    </div>
    <div id="footer">
      Ejercicios de php
    </div>
  </div>
</body>

</html>