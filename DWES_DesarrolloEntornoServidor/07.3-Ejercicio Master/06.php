<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link href="css/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <?php
     $producto = [
       "peli1000" => ["nombre" => "Pelikan Souvëran M-1000","precio" => 545,"imagen" => "pelikan.jpg","detalle" => "Plumín de oro 18K.  Émbolo de bronce. Fabricación alemana. Excelentes acabados."],
       "parkduo" => ["nombre" => "Parker Duofold International","precio" => 406,"imagen" => "parkerduo.jpg","detalle" => "Plumín de oro 18K. Fabricada en Reino Unido. Cuerpo en resina de alta resistencia."],
       "viscvan" => ["nombre" => "Visconti Van Gogh","precio" => 180,"imagen" => "visconti.jpg","detalle" => "Diseño y acabados de lujo. Cuerpo fabricado en Italia. Plumín alemán."],
       "waterexp" => ["nombre" => "Waterman Expert","precio" => 103.55,"imagen" => "waterman.jpg","detalle" => "Excelente pluma de uso diario. Fabricada en Francia. Plumín de acero."]
     ];
     $_SESSION['productos']=$producto;
  ?>
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
            <?php 
            foreach ($producto as $codigo => $elemento) {
            ?>
              <img src="img/<?= $elemento['imagen'] ?>" width="360" border="1">
              <br><?= $elemento['nombre'] ?>
              <br>Precio: <?= $elemento['precio'] ?> €
              <form action="06_detalle.php" method="post">
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
            if (isset($_REQUEST['accion'])) {
              $accion = $_REQUEST['accion'];
              $codigo = $_REQUEST['codigo'];
            } else {
              $accion = "";
            }

            // Inicializa el carrito la primera vez
            if (!isset($_SESSION['carrito'])) {
              $_SESSION['carrito'] = [];
            }
            // Si se ha recibido la accion de comprar se añade a la sesión del carrito
            if ($accion == "comprar") {
              if (isset($_SESSION['carrito'][$codigo])) {
                $_SESSION['carrito'][$codigo]++;
              } else {
                $_SESSION['carrito'][$codigo] = 1;
              }
            }
            // Si se ha recibido la acción de eliminar se elimina la pluma del carrito
            if ($accion == "eliminar") {
              unset($_SESSION['carrito'][$codigo]);
            }

            // Muestra el contenido del 'carrito'
            $total = 0;
            foreach ($_SESSION['carrito'] as $cod => $cantidad) {
              $total += $cantidad * $producto[$cod]['precio'];
            ?>
              <img src="img/<?= $producto[$cod]['imagen'] ?>" width="200" border="1"><br>
              <?= $producto[$cod]['nombre'] ?><br>Precio: <?= $producto[$cod]['precio'] ?> €<br>
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
    </div>
    <div id="footer">
      Ejercicios de php
    </div>
  </div>
</body>

</html>