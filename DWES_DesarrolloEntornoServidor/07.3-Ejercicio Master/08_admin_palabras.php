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

      <h3>Administración de palabras</h3>
      <hr>
      <?php
      if (isset($_POST['accion']) && ($_POST['accion'] == "Alta" || $_POST['accion'] == "Modificar")) {
        $_SESSION['diccionario'][$_POST['espanol']] = $_POST['ingles'];
      }

      if (isset($_POST['accion']) && $_POST['accion'] == "Eliminar") {
        unset($_SESSION['diccionario'][$_POST['espanol']]);
      }

      echo "<table>";
      foreach ($_SESSION['diccionario'] as $espanol => $ingles) {
      ?>
        <tr>
          <td><?= $espanol ?></td>
          <td><?= $ingles ?></td>
          <td>
            <form action="pagina.php" method="post">
              <input type="hidden" name="espanol" value="<?= $espanol ?>">
              <input type="submit" name="accion" value="Eliminar">
            </form>
          </td>
          <td>
            <form action="08_modificacion_palabras.php" method="post">
              <input type="hidden" name="espanol" value="<?= $espanol ?>">
              <input type="submit" value="Modificar">
            </form>
          </td>
        </tr>
      <?php
      }
      ?>
      </table>

      <hr>
      <table>
        <tr>
          <td>
            <form action="08_alta_palabra.php" method="post">
              <input type="submit" value="Añadir nueva palabra">
            </form>
          </td>
          <td>
            <form action="08.php" method="post">
              <input type="hidden" name="accion" value="borrarCookies">
              <input type="submit" value="Reiniciar diccionario por defecto">
            </form>
          </td>
          <td>
            <form action="08.php" method="post">
              <input type="hidden" name="accion" value="actualizarCookies">
              <input type="submit" value="Guardar cambios y regresar">
            </form>
          </td>

        </tr>
      </table>

      <br><br>
      <a href="08.php">>> Volver</a>
    </div>

  </div>
</body>

</html>